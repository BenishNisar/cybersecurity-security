@extends('admin.layout')
@section('title', 'Website settings')
@section('content')
    <div class="page-heading">
        <div>
            <p class="eyebrow">BRAND AND PRIVACY</p>
            <h1>Your website essentials.</h1>
            <p>Use approved information. Optional contact and social details stay hidden when empty.</p>
        </div>
    </div>
    <form method="post" enctype="multipart/form-data" action="{{ route('admin.settings.update') }}">@csrf @method('put')
        <div class="editor-layout">
            <div>
                <section class="panel">
                    <h2>Brand identity</h2>
                    <div class="form-grid">
                        <div class="field"><label for="brand_name">Brand name</label><input id="brand_name" name="brand_name"
                                value="{{ old('brand_name', $settings['brand_name']) }}" maxlength="100" required></div>
                        <div class="field"><label for="logo_upload">Replace website logo</label><input id="logo_upload"
                                name="logo_upload" type="file" accept="image/png,image/jpeg,image/webp"><small>PNG, JPG
                                or WebP, up to 2 MB. A transparent PNG works well on the dark header.</small><img
                                class="logo-preview" src="{{ asset($settings['logo']) }}" alt="Current website logo"></div>
                    </div>
                    <div class="field"><label for="footer_description">Footer description</label>
                        <textarea id="footer_description" name="footer_description" rows="3" maxlength="500" required>{{ old('footer_description', $settings['footer_description']) }}</textarea>
                    </div>
                </section>
                <section class="panel">
                    <h2>Contact and footer details</h2>
                    <div class="form-grid">
                        @foreach (['email' => 'Public email', 'website' => 'Website URL', 'contact_name' => 'Contact name', 'contact_role' => 'Contact role', 'phone' => 'Phone number (optional)'] as $field => $label)
                            <div class="field"><label for="{{ $field }}">{{ $label }}</label><input
                                    id="{{ $field }}" name="{{ $field }}"
                                    type="{{ $field === 'email' ? 'email' : ($field === 'website' ? 'url' : 'text') }}"
                                    value="{{ old($field, $settings[$field]) }}" maxlength="{{ $field === 'phone' ? 40 : 255 }}"
                                    @required(in_array($field, ['email', 'website']))></div>
                        @endforeach
                    </div>
                    <div class="field"><label for="address">Address (optional)</label>
                        <textarea id="address" name="address" rows="3" maxlength="600">{{ old('address', $settings['address']) }}</textarea><small>Only add an address approved for public display.</small>
                    </div>
                </section>
                <section class="panel">
                    <h2>Social profiles</h2>
                    <p class="field-help">Only configured profiles appear in the footer. Use complete HTTPS URLs.</p>
                    <div class="form-grid">
                        @foreach (['linkedin' => 'LinkedIn', 'facebook' => 'Facebook', 'instagram' => 'Instagram', 'youtube' => 'YouTube', 'x' => 'X'] as $field => $label)
                            <div class="field"><label for="{{ $field }}">{{ $label }}</label><input
                                    id="{{ $field }}" name="{{ $field }}" type="url" maxlength="255"
                                    value="{{ old($field, $settings[$field]) }}"></div>
                        @endforeach
                    </div>
                </section>
                <section class="panel">
                    <h2>Public privacy notice</h2>
                    <div class="field"><label for="privacy_notice">Privacy notice text</label>
                        <textarea id="privacy_notice" name="privacy_notice" rows="8" maxlength="12000" required>{{ old('privacy_notice', $settings['privacy_notice']) }}</textarea><small>Shown in the existing privacy dialog. Keep it accurate for your
                            hosting, processing and retention arrangements.</small>
                    </div>
                    <div class="form-grid">
                        <div class="field"><label for="privacy_version">Notice version</label><input id="privacy_version"
                                name="privacy_version" maxlength="80"
                                value="{{ old('privacy_version', $settings['privacy_version']) }}" required><small>Update
                                this when the notice changes. Enquiries retain the version acknowledged.</small></div>
                        <div class="field"><label for="retention_days">Enquiry retention review period (days)</label><input
                                id="retention_days" name="retention_days" type="number" min="1" max="3650"
                                value="{{ old('retention_days', $settings['retention_days']) }}" required><small>The inbox
                                flags older records for review. Records are not automatically deleted.</small></div>
                    </div>
                </section>
            </div>
            <aside>
                <section class="panel sticky-panel">
                    <h2>Save website settings</h2>
                    <p>Changes apply to the shared public layout and contact details.</p><button
                        class="btn btn-primary full-width">Save settings</button>
                </section>
                <section class="control-panel"><i class="fa-solid fa-lock" aria-hidden="true"></i>
                    <h2>Public details only.</h2>
                    <p>Never place passwords, API keys or private customer information in these fields.</p>
                </section>
            </aside>
        </div>
    </form>
@endsection
