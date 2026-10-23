@extends('Layout.layout')

@section('title', 'Contact OryvantAI | Start a Security Conversation')
@section('description', 'Start a conversation with OryvantAI about your security workflow. Contact bilal@oryvantai.tech for cybersecurity solution discussions and general enquiries.')
@section('body_class', 'contact-page')

@section('content')
<main id="main">
            <section
                class="contact-hero dark-section"
                id="home"
                aria-labelledby="contact-title"
            >
                <div class="page-container">
                    <nav
                        class="contact-breadcrumb"
                        aria-label="Breadcrumb"
                    >
                        <a href="{{ url('/') }}">Home</a><span aria-hidden="true">/</span
                        ><span aria-current="page">Contact</span>
                    </nav>
                    <p class="eyebrow"><span aria-hidden="true"></span>CONTACT ORYVANTAI</p>
                    <h1 id="contact-title">
                        Start with the security<br /><span class="logo-gradient-text"
                            >workflow that matters.</span
                        >
                    </h1>
                    <p class="contact-lead">
                        Tell us where your team is losing time, context or confidence. We can begin
                        with one focused operational problem.
                    </p>
                </div>
            </section>
            <!-- Contact Options -->
            <section
                class="section"
                id="contact"
                aria-labelledby="options-title"
            >
                <div class="page-container">
                    <div class="section-heading">
                        <p class="eyebrow">
                            <span aria-hidden="true"></span>LET’S START A CONVERSATION
                        </p>
                        <h2 id="options-title">A direct line to OryvantAI.</h2>
                    </div>
                    <div class="contact-options">
                        <article class="contact-option">
                            <i
                                class="fa-solid fa-file-lines"
                                aria-hidden="true"
                            ></i>
                            <h3>General Enquiries</h3>
                            <dl>
                                <div>
                                    <dt>Email</dt>
                                    <dd>
                                        <a href="mailto:{{ $site['email'] }}"
                                            >{{ $site['email'] }}<i
                                                class="fa-solid fa-arrow-up-right-from-square"
                                                aria-hidden="true"
                                            ></i
                                        ></a>
                                    </dd>
                                </div>
                                <div>
                                    <dt>Website</dt>
                                    <dd>
                                        <a href="https://oryvantai.tech/"
                                            >{{ parse_url($site['website'], PHP_URL_HOST) }}<i
                                                class="fa-solid fa-arrow-up-right-from-square"
                                                aria-hidden="true"
                                            ></i
                                        ></a>
                                    </dd>
                                </div>
                            </dl>
                        </article>
                        <article class="contact-option">
                            <i
                                class="fa-solid fa-shield-halved"
                                aria-hidden="true"
                            ></i>
                            <h3>Security Solution Discussion</h3>
                            <p>For organisations exploring:</p>
                            <ul class="contact-topics">
                                <li>SOC Automation</li>
                                <li>SIEM Automation</li>
                                <li>Threat Detection</li>
                                <li>Security Analytics</li>
                                <li>AI Powered Cybersecurity</li>
                            </ul>
                        </article>
                    </div>
                </div>
            </section>
            <!-- Contact Form and Helpful Guidance -->
            <section
                class="section light-section"
                id="enquiry"
                aria-labelledby="enquiry-title"
            >
                <div class="page-container contact-form-layout">
                    <div class="contact-form-panel">
                        <div class="section-heading">
                            <p class="eyebrow">
                                <span aria-hidden="true"></span>YOUR STARTING POINT
                            </p>
                            <h2 id="enquiry-title">Tell us what matters.</h2>
                        </div>
                        @if(session('enquiry_sent'))
                            <p class="contact-form-notice" role="status">{{ session('enquiry_sent') }}</p>
                        @endif
                        @if($errors->any())
                            <div class="contact-form-notice" role="alert" tabindex="-1">
                                <p>Please correct the following:</p>
                                <ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
                            </div>
                        @endif
                        <form
                            id="enquiry-form"
                            method="post"
                            action="{{ route('contact.store') }}"
                            aria-describedby="form-required"
                        >
                            @csrf
                            <div class="contact-honeypot" aria-hidden="true">
                                <label for="website-url">Leave this field empty</label>
                                <input id="website-url" name="website_url" tabindex="-1" autocomplete="off">
                            </div>
                            <p
                                class="contact-required"
                                id="form-required"
                            >
                                All fields are required.
                            </p>
                            <div class="contact-fields">
                                <div class="contact-field">
                                    <label for="full-name">Full Name</label
                                    ><input
                                        id="full-name"
                                        name="full_name"
                                        value="{{ old('full_name') }}"
                                        autocomplete="name"
                                        required
                                        minlength="2"
                                        maxlength="120"
                                    />
                                </div>
                                <div class="contact-field">
                                    <label for="work-email">Work Email</label
                                    ><input
                                        id="work-email"
                                        name="email"
                                        value="{{ old('email') }}"
                                        type="email"
                                        autocomplete="email"
                                        required
                                        maxlength="254"
                                    />
                                </div>
                                <div class="contact-field">
                                    <label for="company">Company</label
                                    ><input
                                        id="company"
                                        name="company"
                                        value="{{ old('company') }}"
                                        autocomplete="organization"
                                        required
                                        maxlength="160"
                                    />
                                </div>
                                <div class="contact-field">
                                    <label for="role">Role</label
                                    ><input
                                        id="role"
                                        name="role"
                                        value="{{ old('role') }}"
                                        autocomplete="organization-title"
                                        required
                                        maxlength="120"
                                    />
                                </div>
                                <div class="contact-field contact-field-wide">
                                    <label for="interest">Area of Interest</label
                                    ><select
                                        id="interest"
                                        name="interest"
                                        required
                                    >
                                        <option
                                            value=""
                                            selected
                                            disabled
                                        >
                                            Select an area of interest
                                        </option>
                                        <option @selected(old('interest') === 'AI Powered Cybersecurity')>AI Powered Cybersecurity</option>
                                        <option @selected(old('interest') === 'SOC Automation')>SOC Automation</option>
                                        <option @selected(old('interest') === 'SIEM Automation')>SIEM Automation</option>
                                        <option @selected(old('interest') === 'Threat Detection')>Threat Detection</option>
                                        <option @selected(old('interest') === 'Security Analytics')>Security Analytics</option>
                                        <option @selected(old('interest') === 'Security Workflow Review')>Security Workflow Review</option>
                                        <option @selected(old('interest') === 'General Enquiry')>General Enquiry</option>
                                    </select>
                                </div>
                                <div class="contact-field contact-field-wide">
                                    <label for="message">Message</label
                                    ><textarea
                                        id="message"
                                        name="message"
                                        rows="6"
                                        required
                                        minlength="10"
                                        maxlength="4000"
                                        aria-describedby="message-hint"
                                    >{{ old('message') }}</textarea>
                                    <p
                                        class="contact-field-hint"
                                        id="message-hint"
                                    >
                                        Describe the operational problem. Keep credentials and
                                        sensitive evidence out of this message.
                                    </p>
                                </div>
                            </div>
                            <div class="contact-consent">
                                <input
                                    type="checkbox"
                                    id="privacy-agreement"
                                    name="privacy_agreement"
                                    value="1"
                                    @checked(old('privacy_agreement'))
                                    required
                                /><label for="privacy-agreement"
                                    >I agree to the privacy notice</label
                                ><button
                                    type="button"
                                    class="contact-privacy-link"
                                    data-dialog="privacy-dialog"
                                >
                                    Read privacy notice
                                </button>
                            </div>
                            <button
                                class="button button-primary"
                                type="submit"
                            >
                                Send Enquiry<i
                                    class="fa-solid fa-arrow-up-right-from-square"
                                    aria-hidden="true"
                                ></i>
                            </button>
                        </form>
                    </div>
                    <aside
                        class="contact-guidance"
                        aria-labelledby="guidance-title"
                    >
                        <span class="contact-guidance-icon"
                            ><i
                                class="fa-solid fa-route"
                                aria-hidden="true"
                            ></i
                        ></span>
                        <p class="eyebrow">WHAT TO INCLUDE</p>
                        <h3 id="guidance-title">
                            A little context.<br />A clearer starting point.
                        </h3>
                        <p>To help us understand your requirement, tell us:</p>
                        <ol>
                            <li>What workflow is causing friction</li>
                            <li>Which systems are involved</li>
                            <li>Who owns the decision</li>
                            <li>What evidence is available</li>
                            <li>What outcome you want to improve</li>
                        </ol>
                    </aside>
                </div>
            </section>
            <!-- Security and Privacy Note -->
            <section
                class="section"
                aria-labelledby="security-title"
            >
                <div class="page-container">
                    <div class="contact-security">
                        <i
                            class="fa-solid fa-lock"
                            aria-hidden="true"
                        ></i>
                        <div>
                            <p class="eyebrow">SECURITY AND PRIVACY</p>
                            <h2 id="security-title">
                                Keep sensitive data out<br />of the first message.
                            </h2>
                            <p>
                                Do not submit passwords, credentials, production secrets or
                                sensitive customer data through the public contact form.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Final CTA -->
            <section
                class="contact-final-cta"
                aria-labelledby="final-title"
            >
                <div class="page-container">
                    <div class="contact-panel">
                        <div>
                            <p class="eyebrow">
                                <span aria-hidden="true"></span>START WITH ONE WORKFLOW
                            </p>
                            <h2 id="final-title">
                                One workflow is enough<br />to start the conversation.
                            </h2>
                            <div class="button-row">
                                <a
                                    class="button button-primary"
                                    href="#enquiry"
                                    >Send Enquiry<i
                                        class="fa-solid fa-arrow-up-right-from-square"
                                        aria-hidden="true"
                                    ></i></a
                                ><a
                                    class="button button-secondary"
                                    href="{{ url('/services') }}"
                                    >Explore Services<i
                                        class="fa-solid fa-arrow-up-right-from-square"
                                        aria-hidden="true"
                                    ></i
                                ></a>
                            </div>
                        </div>
                        <div class="contact-detail">
                            <div class="contact-shield">
                                <i
                                    class="fa-solid fa-shield-halved"
                                    aria-hidden="true"
                                ></i>
                            </div>
                            <p>A direct conversation</p>
                            <a href="mailto:{{ $site['email'] }}">{{ $site['email'] }}</a
                            ><span>{{ parse_url($site['website'], PHP_URL_HOST) }}</span>
                        </div>
                    </div>
                </div>
            </section>
        </main>
@endsection
