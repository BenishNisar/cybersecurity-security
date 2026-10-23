<?php

namespace App\Support;

use App\Models\PageSeo;
use App\Models\SiteSetting;

class Site
{
    public const DEFAULTS = [
        'brand_name' => 'OryvantAI', 'email' => 'bilal@oryvantai.tech', 'website' => 'https://oryvantai.tech',
        'logo' => 'assets/images/logo-240.webp', 'footer_description' => 'Custom AI powered cybersecurity. Built around your operations.',
        'contact_name' => 'Muhammad Bilal', 'contact_role' => 'Founder & CEO', 'address' => '', 'phone' => '',
        'facebook' => '', 'instagram' => '', 'linkedin' => '', 'youtube' => '', 'x' => '',
        'privacy_version' => '2026-10-19', 'retention_days' => '180',
        'privacy_notice' => 'We use the information you submit to review and respond to your enquiry. Access is restricted to authorised staff. Do not include credentials, production secrets or sensitive customer data. Contact us to ask about your information or request deletion. Contact enquiries do not subscribe you to marketing. Necessary session and security cookies support website operation. Optional analytics and marketing remain off unless separately configured and agreed.',
    ];

    public function settings(): array
    {
        return array_replace(self::DEFAULTS, SiteSetting::pluck('value', 'key')->all());
    }

    public function seo(): ?PageSeo
    {
        $page = request()->path() === '/' ? 'home' : explode('/', request()->path())[0];

        return PageSeo::where('page', $page)->first();
    }
}
