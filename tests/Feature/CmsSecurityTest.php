<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class CmsSecurityTest extends TestCase
{
    use RefreshDatabase;

    private function member(string $role = 'administrator'): User
    {
        return User::factory()->create(['role' => $role, 'is_active' => true, 'session_version' => 1, 'password' => Hash::make('TestOnly!Password832')]);
    }

    private function signIn(User $user): static
    {
        return $this->actingAs($user)->withSession(['admin_version' => $user->session_version]);
    }

    public function test_guests_cannot_access_admin_routes_or_register(): void
    {
        foreach (['/admin', '/admin/enquiries', '/admin/settings', '/admin/users', '/admin/content/insights', '/admin/seo'] as $url) {
            $this->get($url)->assertRedirect(route('login'));
        }
        $this->get('/register')->assertNotFound();
        $this->post('/register', [])->assertNotFound();
    }

    public function test_login_accepts_active_accounts_and_regenerates_session(): void
    {
        $user = $this->member();
        $this->post('/admin/login', ['email' => $user->email, 'password' => 'TestOnly!Password832'])->assertRedirect(route('admin.dashboard'))->assertSessionHas('admin_version', 1);
        $this->assertAuthenticatedAs($user);
        $this->post('/admin/logout')->assertRedirect(route('login'));
        $this->assertGuest();
    }

    public function test_disabled_accounts_cannot_sign_in_and_login_is_rate_limited(): void
    {
        $user = $this->member();
        $user->update(['is_active' => false]);
        $this->post('/admin/login', ['email' => $user->email, 'password' => 'TestOnly!Password832'])->assertSessionHasErrors('email');
        $this->assertGuest();
        for ($i = 0; $i < 5; $i++) {
            $this->post('/admin/login', ['email' => 'ratelimit@example.test', 'password' => 'incorrect']);
        }
        $this->post('/admin/login', ['email' => 'ratelimit@example.test', 'password' => 'incorrect'])->assertStatus(429);
    }

    public function test_editor_cannot_access_enquiries_users_settings_or_activity(): void
    {
        $this->signIn($this->member('editor'));
        $this->get('/admin/content/insights')->assertOk();
        $this->get('/admin/seo')->assertOk();
        foreach (['/admin/enquiries', '/admin/users', '/admin/settings', '/admin/activity'] as $url) {
            $this->get($url)->assertForbidden();
        }
        $this->put('/admin/settings', [])->assertForbidden();
        $this->post('/admin/users', [])->assertForbidden();
        $this->get('/admin/content/services')->assertNotFound();
    }

    public function test_enquiry_manager_cannot_edit_content_or_seo(): void
    {
        $this->signIn($this->member('enquiry_manager'));
        $this->get('/admin/enquiries')->assertOk();
        foreach (['/admin/content/insights', '/admin/seo', '/admin/settings', '/admin/users'] as $url) {
            $this->get($url)->assertForbidden();
        }
        $this->post('/admin/content/insights', [])->assertForbidden();
    }

    public function test_changing_access_invalidates_existing_sessions(): void
    {
        $user = $this->member();
        $this->signIn($user);
        $user->update(['session_version' => 2]);
        $this->get('/admin')->assertRedirect(route('login'));
        $this->assertGuest();
    }

    public function test_initial_password_must_be_changed_before_using_dashboard(): void
    {
        $user = $this->member();
        $user->update(['must_change_password' => true]);
        $this->signIn($user);
        $this->get('/admin')->assertRedirect(route('admin.account'));
        $this->get('/admin/account')->assertOk();
        $this->put('/admin/account/password', ['current_password' => 'TestOnly!Password832', 'password' => 'NewSecure!Password984', 'password_confirmation' => 'NewSecure!Password984'])->assertSessionHasNoErrors();
        $this->assertFalse($user->fresh()->must_change_password);
        $this->assertEquals(2, $user->fresh()->session_version);
        $this->get('/admin')->assertOk();
    }

    public function test_administrator_cannot_remove_or_demote_own_account(): void
    {
        $user = $this->member();
        $this->signIn($user);
        $this->delete('/admin/users/'.$user->id)->assertSessionHasErrors('role');
        $this->put('/admin/users/'.$user->id, ['name' => $user->name, 'email' => $user->email, 'role' => 'editor', 'is_active' => 1])->assertSessionHasErrors('role');
        $this->assertDatabaseHas('users', ['id' => $user->id, 'role' => 'administrator', 'is_active' => 1]);
    }

    public function test_admin_responses_are_private_and_excluded_from_indexing(): void
    {
        $this->signIn($this->member());
        $r = $this->get('/admin');
        $r->assertOk()->assertHeader('X-Robots-Tag', 'noindex, nofollow, noarchive');
        $this->assertStringContainsString('no-store', $r->headers->get('Cache-Control'));
        $r->assertHeader('X-Content-Type-Options','nosniff');
    }
}
