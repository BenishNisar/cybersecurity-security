<?php

namespace Tests\Feature;

use App\Models\ContentItem;
use App\Models\Enquiry;
use App\Models\User;
use App\Support\Site;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class CmsContentTest extends TestCase
{
    use RefreshDatabase;

    private function administrator(): User
    {
        $user = User::factory()->create(['role' => 'administrator', 'is_active' => true, 'session_version' => 1]);
        $this->actingAs($user)->withSession(['admin_version' => 1]);

        return $user;
    }

    private function content(array $overrides = []): ContentItem
    {
        return ContentItem::create(array_replace(['type' => 'article', 'title' => 'Reviewed evidence', 'slug' => 'reviewed-evidence', 'excerpt' => 'A reviewable investigation brief.', 'body' => 'Keep the sources and open questions visible.', 'status' => 'draft', 'icon' => 'fa-shield-halved', 'sort_order' => 0, 'is_indexable' => true], $overrides));
    }

    private function enquiry(): array
    {
        return ['full_name' => 'Test Contact', 'email' => 'contact@example.test', 'company' => 'Test Organisation', 'role' => 'Security Lead', 'interest' => 'Security Analytics', 'message' => 'We would like to review our reporting workflow.', 'privacy_agreement' => '1'];
    }

    private function payload(): array
    {
        return ['title' => 'A new insight', 'slug' => 'a-new-insight', 'excerpt' => 'Approved evidence and accountable review.', 'body' => 'This is plain text content.', 'status' => 'published', 'icon' => 'fa-shield-halved', 'sort_order' => 0, 'is_indexable' => 1];
    }

    public function test_seed_is_repeatable_and_services_stay_static(): void
    {
        $this->seed();
        $count = ContentItem::count();
        $this->seed();
        $this->assertEquals($count, ContentItem::count());
        $this->assertEquals(6, $count);
        $this->assertEquals(0, ContentItem::where('type', 'service')->count());
        $this->get('/services')->assertOk()->assertSee('SOC Automation');
        $this->get('/services/ai-cybersecurity')->assertNotFound();
    }

    public function test_public_pages_load_and_drafts_and_future_articles_stay_private(): void
    {
        $item = $this->content();
        foreach (['/', '/solutions', '/services', '/industries', '/insights', '/contact'] as $url) {
            $this->get($url)->assertOk();
        }
        $this->get('/insights/'.$item->slug)->assertNotFound();
        $item->update(['status' => 'published', 'published_at' => now()->addDay()]);
        $this->get('/insights/'.$item->slug)->assertNotFound();
        $item->update(['published_at' => now()->subMinute()]);
        $this->get('/insights/'.$item->slug)->assertOk()->assertSee($item->body);
    }

    public function test_preview_requires_content_permission_and_never_indexes(): void
    {
        $item = $this->content();
        $this->get('/admin/preview/'.$item->id)->assertRedirect(route('login'));
        $this->administrator();
        $this->get('/admin/preview/'.$item->id)->assertOk()->assertSee('PRIVATE PREVIEW')->assertSee('noindex, nofollow');
    }

    public function test_article_content_is_escaped_and_publish_fields_are_validated(): void
    {
        $this->administrator();
        $data = $this->payload();
        $data['body'] = '<script>alert("unsafe")</script>';
        $this->post('/admin/content/insights', $data)->assertRedirect();
        $this->get('/insights/a-new-insight')->assertOk()->assertSee('&lt;script&gt;', false)->assertDontSee('<script>alert("unsafe")</script>', false);
        $data['slug'] = 'invalid/url';
        $this->post('/admin/content/insights', $data)->assertSessionHasErrors('slug');
    }

    public function test_contact_validation_prevents_invalid_or_spam_submissions(): void
    {
        $this->post('/contact', array_replace($this->enquiry(), ['privacy_agreement' => 0]))->assertSessionHasErrors('privacy_agreement');
        $this->post('/contact', array_replace($this->enquiry(), ['website_url' => 'https://spam.example']))->assertSessionHasErrors('website_url');
        $this->assertDatabaseCount('enquiries', 0);
    }

    public function test_contact_is_stored_before_success_and_submission_rate_is_limited(): void
    {
        $this->post('/contact', $this->enquiry())->assertRedirect()->assertSessionHas('enquiry_sent');
        $this->assertDatabaseHas('enquiries', ['email' => 'contact@example.test', 'status' => 'new', 'privacy_version' => '2026-10-19']);
        $this->assertNotNull(Enquiry::first()->consented_at);
        $this->post('/contact', $this->enquiry());
        $this->post('/contact', $this->enquiry());
        $this->post('/contact', $this->enquiry())->assertStatus(429);
    }

    public function test_private_notes_are_escaped_and_deleted_with_enquiry(): void
    {
        $this->post('/contact', $this->enquiry());
        $enquiry = Enquiry::first();
        $this->administrator();
        $this->put('/admin/enquiries/'.$enquiry->id, ['status' => 'in_progress', 'note' => '<script>secret</script>'])->assertSessionHasNoErrors();
        $this->get('/admin/enquiries/'.$enquiry->id)->assertSee('&lt;script&gt;secret&lt;/script&gt;', false)->assertDontSee('<script>secret</script>', false);
        $this->delete('/admin/enquiries/'.$enquiry->id)->assertRedirect();
        $this->assertDatabaseCount('enquiry_notes', 0);
    }

    public function test_image_uploads_reject_executable_svg_and_large_files(): void
    {
        Storage::fake('public');
        $this->administrator();
        $this->post('/admin/content/insights', $this->payload() + ['image_upload' => UploadedFile::fake()->create('shell.php', 1, 'application/x-php')])->assertSessionHasErrors('image_upload');
        $this->post('/admin/content/insights', $this->payload() + ['image_upload' => UploadedFile::fake()->createWithContent('vector.svg', '<svg xmlns="http://www.w3.org/2000/svg"></svg>')])->assertSessionHasErrors('image_upload');
        $this->post('/admin/content/insights', $this->payload() + ['image_upload' => UploadedFile::fake()->image('large.jpg')->size(4000)])->assertSessionHasErrors('image_upload');
        $this->post('/admin/content/insights', $this->payload() + ['image_upload' => UploadedFile::fake()->image('approved.jpg', 800, 450)])->assertSessionHasNoErrors();
        $this->assertStringStartsWith('storage/brand/', ContentItem::first()->image);
    }

    public function test_seo_settings_render_once_and_sitemap_excludes_private_content(): void
    {
        $this->administrator();
        $this->put('/admin/seo/contact', ['meta_title' => 'Contact Metadata Test', 'meta_description' => 'An accurate page summary.', 'is_indexable' => 0, 'canonical_url' => 'https://oryvantai.tech/contact'])->assertSessionHasNoErrors();
        $r = $this->get('/contact');
        $r->assertSee('<title>Contact Metadata Test</title>', false)->assertSee('noindex, nofollow');
        $this->assertEquals(1, substr_count($r->getContent(), '<title>'));
        $this->content(['slug' => 'visible', 'status' => 'published', 'published_at' => now()]);
        $this->content(['slug' => 'private']);
        $this->content(['slug' => 'excluded', 'status' => 'published', 'published_at' => now(), 'is_indexable' => false]);
        $s = $this->get('/sitemap.xml');
        $s->assertOk()->assertSee('/insights/visible')->assertDontSee('/insights/private')->assertDontSee('/insights/excluded')->assertDontSee('/contact')->assertDontSee('/admin');
        $this->put('/admin/seo/home', ['is_indexable' => 1, 'canonical_url' => 'javascript:alert(1)'])->assertSessionHasErrors('canonical_url');
    }

    public function test_website_settings_update_public_contacts_without_invented_profiles(): void
    {
        $this->administrator();
        $data = Site::DEFAULTS;
        unset($data['logo']);
        $data['email'] = 'updated@example.test';
        $data['address'] = 'Approved public address';
        $this->put('/admin/settings', $data)->assertSessionHasNoErrors();
        $this->get('/contact')->assertOk()->assertSee('updated@example.test')->assertSee('Approved public address');
        $this->assertDatabaseMissing('site_settings',['key' => 'linkedin', 'value' => 'https://linkedin.com/fake']);
    }
}
