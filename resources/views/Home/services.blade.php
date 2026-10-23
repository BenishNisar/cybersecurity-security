@extends('Layout.layout')

@section('body_class', 'services-page')

@section('title', 'OryvantAI | AI Powered Cybersecurity, SOC and SIEM Automation')
@section('description', 'Custom AI powered cybersecurity built around your existing tools, people and procedures. Explore controlled SOC workflows, SIEM automation and security analytics.')

@push('preloads')
    <link rel="preload" as="image" href="{{ asset('assets/images/hero-network.webp') }}">
@endpush

@section('content')




   <!-- Services Hero -->
        <main id="main">
            <section
                class="services-hero dark-section"
                id="home"
                aria-labelledby="services-title"
            >
                <div class="page-container">
                    <nav
                        class="services-breadcrumb"
                        aria-label="Breadcrumb"
                    >
                        <a href="index.html">Home</a><span aria-hidden="true">/</span
                        ><span aria-current="page">Services</span>
                    </nav>
                    <div class="services-hero-grid">
                        <div>
                            <p class="eyebrow">
                                <span aria-hidden="true"></span>ORYVANTAI SERVICES
                            </p>
                            <h1 id="services-title">
                                Cybersecurity services<br /><span class="logo-gradient-text"
                                    >built around your operations.</span
                                >
                            </h1>
                            <p class="services-lead">
                                Custom AI powered cybersecurity that works with your existing tools,
                                evidence, people and operating procedures.
                            </p>
                            <div class="button-row">
                                <a
                                    class="button button-primary"
                                    href="mailto:bilal@oryvantai.tech?subject=Security%20service%20review"
                                    >Talk to an Expert<i
                                        class="fa-solid fa-arrow-up-right-from-square"
                                        aria-hidden="true"
                                    ></i></a
                                ><a
                                    class="button button-secondary"
                                    href="#services-overview"
                                    >Explore Services<i
                                        class="fa-solid fa-arrow-up-right-from-square"
                                        aria-hidden="true"
                                    ></i
                                ></a>
                            </div>
                        </div>
                        <div
                            class="services-operation"
                            role="group"
                            aria-label="Controlled security workflow"
                        >
                            <p class="mono-label">OPERATING MODEL / PEOPLE RETAIN AUTHORITY</p>
                            <ol class="service-workflow">
                                <li>
                                    <span class="service-node"
                                        ><i
                                            class="fa-solid fa-network-wired"
                                            aria-hidden="true"
                                        ></i
                                    ></span>
                                    <div>
                                        <span class="mono-label">01 / Existing environment</span>
                                        <p>Tools · approved knowledge · evidence</p>
                                    </div>
                                </li>
                                <li>
                                    <span class="service-node"
                                        ><i
                                            class="fa-solid fa-microchip"
                                            aria-hidden="true"
                                        ></i
                                    ></span>
                                    <div>
                                        <span class="mono-label">02 / Bounded assistance</span>
                                        <p>Prepare context and reviewable outputs</p>
                                    </div>
                                </li>
                                <li>
                                    <span class="service-node"
                                        ><i
                                            class="fa-solid fa-user-shield"
                                            aria-hidden="true"
                                        ></i
                                    ></span>
                                    <div>
                                        <span class="mono-label">03 / Human decision</span>
                                        <p>Named reviewer · accountable owner</p>
                                    </div>
                                </li>
                            </ol>
                            <div class="services-operation-note">
                                <i
                                    class="fa-solid fa-link"
                                    aria-hidden="true"
                                ></i>
                                Source references stay with the work.
                            </div>
                        </div>
                    </div>
                    <div class="services-principles">
                        <span
                            ><i
                                class="fa-solid fa-server"
                                aria-hidden="true"
                            ></i
                            >Existing Tooling</span
                        ><span
                            ><i
                                class="fa-solid fa-link"
                                aria-hidden="true"
                            ></i
                            >Evidence Linked</span
                        ><span
                            ><i
                                class="fa-solid fa-user-shield"
                                aria-hidden="true"
                            ></i
                            >Human Reviewed</span
                        ><span
                            ><i
                                class="fa-solid fa-shield-halved"
                                aria-hidden="true"
                            ></i
                            >Scoped Delivery</span
                        >
                    </div>
                </div>
            </section>
            <!-- Service Overview -->
            <section
                class="section"
                id="services-overview"
            >
                <div class="page-container">
                    <div class="section-heading">
                        <p class="eyebrow">
                            <span aria-hidden="true"></span>WHAT WE CAN DO FOR YOU
                        </p>
                        <h2>Five service priorities.<br />One controlled approach.</h2>
                        <p>
                            OryvantAI helps security teams connect evidence, improve investigations,
                            strengthen response workflows and explain security performance without
                            asking them to hand every decision to AI.
                        </p>
                    </div>
                    <div class="services-overview">
                        <article class="service-card">
                            <div class="service-card-top">
                                <span class="mono-label">01 / SERVICE PRIORITY</span
                                ><i
                                    class="fa-solid fa-microchip"
                                    aria-hidden="true"
                                ></i>
                            </div>
                            <h3>AI Powered Cybersecurity</h3>
                            <p>Bring approved knowledge and evidence into bounded AI assistance.</p>
                            <div class="service-card-value">
                                <span class="mono-label">CUSTOMER VALUE</span>
                                <p>Context you can inspect.</p>
                            </div>
                            <a
                                class="text-link"
                                href="#ai-cybersecurity"
                                >Explore Service<i
                                    class="fa-solid fa-arrow-up-right-from-square"
                                    aria-hidden="true"
                                ></i
                            ></a>
                        </article>
                        <article class="service-card">
                            <div class="service-card-top">
                                <span class="mono-label">02 / SERVICE PRIORITY</span
                                ><i
                                    class="fa-solid fa-shield-halved"
                                    aria-hidden="true"
                                ></i>
                            </div>
                            <h3>SOC Automation</h3>
                            <p>Reduce repeated evidence gathering and case preparation.</p>
                            <div class="service-card-value">
                                <span class="mono-label">CUSTOMER VALUE</span>
                                <p>A reviewable brief, routed to the right analyst.</p>
                            </div>
                            <a
                                class="text-link"
                                href="#soc-automation"
                                >Explore Service<i
                                    class="fa-solid fa-arrow-up-right-from-square"
                                    aria-hidden="true"
                                ></i
                            ></a>
                        </article>
                        <article class="service-card">
                            <div class="service-card-top">
                                <span class="mono-label">03 / SERVICE PRIORITY</span
                                ><i
                                    class="fa-solid fa-database"
                                    aria-hidden="true"
                                ></i>
                            </div>
                            <h3>SIEM Automation</h3>
                            <p>Strengthen agreed log integrations, queries and visibility.</p>
                            <div class="service-card-value">
                                <span class="mono-label">CUSTOMER VALUE</span>
                                <p>A clearer evidence foundation and tuning backlog.</p>
                            </div>
                            <a
                                class="text-link"
                                href="#siem-automation"
                                >Explore Service<i
                                    class="fa-solid fa-arrow-up-right-from-square"
                                    aria-hidden="true"
                                ></i
                            ></a>
                        </article>
                        <article class="service-card">
                            <div class="service-card-top">
                                <span class="mono-label">04 / SERVICE PRIORITY</span
                                ><i
                                    class="fa-solid fa-crosshairs"
                                    aria-hidden="true"
                                ></i>
                            </div>
                            <h3>Threat Detection</h3>
                            <p>Add context and test logic before escalating a signal.</p>
                            <div class="service-card-value">
                                <span class="mono-label">CUSTOMER VALUE</span>
                                <p>Evidence for prioritisation and reviewed tuning.</p>
                            </div>
                            <a
                                class="text-link"
                                href="#threat-detection"
                                >Explore Service<i
                                    class="fa-solid fa-arrow-up-right-from-square"
                                    aria-hidden="true"
                                ></i
                            ></a>
                        </article>
                        <article class="service-card">
                            <div class="service-card-top">
                                <span class="mono-label">05 / SERVICE PRIORITY</span
                                ><i
                                    class="fa-solid fa-chart-line"
                                    aria-hidden="true"
                                ></i>
                            </div>
                            <h3>Security Analytics</h3>
                            <p>
                                Turn validated case data into operational and management reporting.
                            </p>
                            <div class="service-card-value">
                                <span class="mono-label">CUSTOMER VALUE</span>
                                <p>Reporting that connects findings to decisions.</p>
                            </div>
                            <a
                                class="text-link"
                                href="#security-analytics"
                                >Explore Service<i
                                    class="fa-solid fa-arrow-up-right-from-square"
                                    aria-hidden="true"
                                ></i
                            ></a>
                        </article>
                    </div>
                    <p class="section-note">
                        Tailored service scopes. Your proposal confirms supported systems,
                        deliverables, permissions and review points.
                    </p>
                </div>
            </section>

            <!-- AI Powered Cybersecurity -->
            <section
                class="section light-section"
                id="ai-cybersecurity"
            >
                <div class="page-container">
                    <div class="service-detail">
                        <div>
                            <div class="section-heading">
                                <p class="eyebrow">
                                    <span aria-hidden="true"></span>01 / AI POWERED CYBERSECURITY
                                </p>
                                <h2>Bring approved knowledge<br />into controlled AI workflows.</h2>
                                <p>
                                    Connect approved company knowledge and permitted security
                                    evidence to AI assisted workflows. Keep permissions, source
                                    references and review points explicit.
                                </p>
                            </div>
                            <ul class="verified-list">
                                <li>
                                    <i
                                        class="fa-solid fa-check"
                                        aria-hidden="true"
                                    ></i
                                    ><span>Approved knowledge</span>
                                </li>
                                <li>
                                    <i
                                        class="fa-solid fa-check"
                                        aria-hidden="true"
                                    ></i
                                    ><span>Security evidence</span>
                                </li>
                                <li>
                                    <i
                                        class="fa-solid fa-check"
                                        aria-hidden="true"
                                    ></i
                                    ><span>Clear permissions</span>
                                </li>
                                <li>
                                    <i
                                        class="fa-solid fa-check"
                                        aria-hidden="true"
                                    ></i
                                    ><span>Human review</span>
                                </li>
                            </ul>
                            <div class="service-outcome">
                                <i
                                    class="fa-solid fa-file-shield"
                                    aria-hidden="true"
                                ></i>
                                <div>
                                    <p class="mono-label">CONTEXT YOU CAN INSPECT</p>
                                    <p>
                                        Source linked preparation that your reviewer can verify
                                        before a decision.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="service-architecture">
                            <p class="mono-label">KNOWLEDGE TO ACCOUNTABLE ACTION</p>
                            <ol class="service-workflow">
                                <li>
                                    <span class="service-node"
                                        ><i
                                            class="fa-solid fa-file-lines"
                                            aria-hidden="true"
                                        ></i
                                    ></span>
                                    <div>
                                        <span class="mono-label">01 / Knowledge</span>
                                        <p>Approved procedures and company context.</p>
                                    </div>
                                </li>
                                <li>
                                    <span class="service-node"
                                        ><i
                                            class="fa-solid fa-database"
                                            aria-hidden="true"
                                        ></i
                                    ></span>
                                    <div>
                                        <span class="mono-label">02 / Evidence</span>
                                        <p>Permitted records and source references.</p>
                                    </div>
                                </li>
                                <li>
                                    <span class="service-node"
                                        ><i
                                            class="fa-solid fa-microchip"
                                            aria-hidden="true"
                                        ></i
                                    ></span>
                                    <div>
                                        <span class="mono-label">03 / AI assistance</span>
                                        <p>A bounded, reviewable proposal.</p>
                                    </div>
                                </li>
                                <li>
                                    <span class="service-node"
                                        ><i
                                            class="fa-solid fa-user-shield"
                                            aria-hidden="true"
                                        ></i
                                    ></span>
                                    <div>
                                        <span class="mono-label">04 / Review</span>
                                        <p>An analyst verifies context and open questions.</p>
                                    </div>
                                </li>
                                <li>
                                    <span class="service-node"
                                        ><i
                                            class="fa-solid fa-shield-halved"
                                            aria-hidden="true"
                                        ></i
                                    ></span>
                                    <div>
                                        <span class="mono-label">05 / Decision</span>
                                        <p>The authorised owner remains responsible.</p>
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <!-- SOC Automation -->
            <section
                class="section dark-section services-technical"
                id="soc-automation"
            >
                <div class="page-container">
                    <div class="section-heading">
                        <p class="eyebrow"><span aria-hidden="true"></span>02 / SOC AUTOMATION</p>
                        <h2>Reduce repeated preparation.<br />Keep analyst responsibility.</h2>
                        <p>
                            Reduce repeated evidence gathering and case preparation. Assemble
                            context, route work to the right analyst and preserve human
                            responsibility for decisions.
                        </p>
                    </div>
                    <ol class="service-workflow">
                        <li>
                            <span class="service-node"
                                ><i
                                    class="fa-solid fa-database"
                                    aria-hidden="true"
                                ></i
                            ></span>
                            <div>
                                <span class="mono-label">01 / Collect evidence</span>
                                <p>Permitted events and source records.</p>
                            </div>
                        </li>
                        <li>
                            <span class="service-node"
                                ><i
                                    class="fa-solid fa-network-wired"
                                    aria-hidden="true"
                                ></i
                            ></span>
                            <div>
                                <span class="mono-label">02 / Assemble context</span>
                                <p>Asset, behaviour and case history.</p>
                            </div>
                        </li>
                        <li>
                            <span class="service-node"
                                ><i
                                    class="fa-solid fa-file-lines"
                                    aria-hidden="true"
                                ></i
                            ></span>
                            <div>
                                <span class="mono-label">03 / Prepare case brief</span>
                                <p>Facts, sources and open questions.</p>
                            </div>
                        </li>
                        <li>
                            <span class="service-node"
                                ><i
                                    class="fa-solid fa-user-shield"
                                    aria-hidden="true"
                                ></i
                            ></span>
                            <div>
                                <span class="mono-label">04 / Route to analyst</span>
                                <p>Assign an appropriate reviewer.</p>
                            </div>
                        </li>
                        <li>
                            <span class="service-node"
                                ><i
                                    class="fa-solid fa-user-shield"
                                    aria-hidden="true"
                                ></i
                            ></span>
                            <div>
                                <span class="mono-label">05 / Review</span>
                                <p>Verify context and next checks.</p>
                            </div>
                        </li>
                        <li>
                            <span class="service-node"
                                ><i
                                    class="fa-solid fa-shield-halved"
                                    aria-hidden="true"
                                ></i
                            ></span>
                            <div>
                                <span class="mono-label">06 / Decision</span>
                                <p>Analyst owned disposition.</p>
                            </div>
                        </li>
                    </ol>
                    <div class="service-outcome">
                        <i
                            class="fa-solid fa-file-shield"
                            aria-hidden="true"
                        ></i>
                        <div>
                            <p class="mono-label">REVIEWABLE CASE PREPARATION</p>
                            <p>
                                A case brief with evidence references and a named reviewer. No
                                silent case closure or unapproved production response.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- SIEM Automation -->
            <section
                class="section"
                id="siem-automation"
            >
                <div class="page-container">
                    <div class="service-detail">
                        <div>
                            <div class="section-heading">
                                <p class="eyebrow">
                                    <span aria-hidden="true"></span>03 / SIEM AUTOMATION
                                </p>
                                <h2>Make the evidence<br />foundation easier to use.</h2>
                                <p>
                                    Improve agreed log integrations, support validated queries and
                                    make collection gaps and detection quality issues easier to see.
                                </p>
                            </div>
                            <ul class="verified-list">
                                <li>
                                    <i
                                        class="fa-solid fa-check"
                                        aria-hidden="true"
                                    ></i
                                    ><span>Validate syntax and access before execution.</span>
                                </li>
                                <li>
                                    <i
                                        class="fa-solid fa-check"
                                        aria-hidden="true"
                                    ></i
                                    ><span>Preserve original logs and trusted counts.</span>
                                </li>
                                <li>
                                    <i
                                        class="fa-solid fa-check"
                                        aria-hidden="true"
                                    ></i
                                    ><span
                                        >Confirm platform capabilities, APIs and permissions within
                                        scope.</span
                                    >
                                </li>
                            </ul>
                            <div class="service-outcome">
                                <i
                                    class="fa-solid fa-file-shield"
                                    aria-hidden="true"
                                ></i>
                                <div>
                                    <p class="mono-label">EVIDENCE FOUNDATION</p>
                                    <p>
                                        Agreed integration work, validated queries and a prioritised
                                        record of collection or detection quality gaps.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="service-architecture">
                            <p class="mono-label">EVIDENCE PIPELINE / AGREED SYSTEMS ONLY</p>
                            <ol class="service-workflow">
                                <li>
                                    <span class="service-node"
                                        ><i
                                            class="fa-solid fa-server"
                                            aria-hidden="true"
                                        ></i
                                    ></span>
                                    <div>
                                        <span class="mono-label">01 / Log Sources</span>
                                        <p>Permitted telemetry and original records.</p>
                                    </div>
                                </li>
                                <li>
                                    <span class="service-node"
                                        ><i
                                            class="fa-solid fa-network-wired"
                                            aria-hidden="true"
                                        ></i
                                    ></span>
                                    <div>
                                        <span class="mono-label">02 / Collection</span>
                                        <p>Check agreed coverage and missing sources.</p>
                                    </div>
                                </li>
                                <li>
                                    <span class="service-node"
                                        ><i
                                            class="fa-solid fa-diagram-project"
                                            aria-hidden="true"
                                        ></i
                                    ></span>
                                    <div>
                                        <span class="mono-label">03 / Parsing</span>
                                        <p>Make processing gaps visible.</p>
                                    </div>
                                </li>
                                <li>
                                    <span class="service-node"
                                        ><i
                                            class="fa-solid fa-crosshairs"
                                            aria-hidden="true"
                                        ></i
                                    ></span>
                                    <div>
                                        <span class="mono-label">04 / Queries</span>
                                        <p>Validate syntax and execution permissions.</p>
                                    </div>
                                </li>
                                <li>
                                    <span class="service-node"
                                        ><i
                                            class="fa-solid fa-crosshairs"
                                            aria-hidden="true"
                                        ></i
                                    ></span>
                                    <div>
                                        <span class="mono-label">05 / Detection</span>
                                        <p>Review logic and quality issues.</p>
                                    </div>
                                </li>
                                <li>
                                    <span class="service-node"
                                        ><i
                                            class="fa-solid fa-crosshairs"
                                            aria-hidden="true"
                                        ></i
                                    ></span>
                                    <div>
                                        <span class="mono-label">06 / Visibility</span>
                                        <p>Explain known gaps and dependencies.</p>
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Threat Detection -->
            <section
                class="section light-section"
                id="threat-detection"
            >
                <div class="page-container">
                    <div class="section-heading">
                        <p class="eyebrow"><span aria-hidden="true"></span>04 / THREAT DETECTION</p>
                        <h2>Add context before<br />you escalate the signal.</h2>
                        <p>
                            Add context to suspicious activity, test detection logic and help
                            analysts distinguish meaningful signals from explainable changes.
                        </p>
                    </div>
                    <ol class="service-workflow">
                        <li>
                            <span class="service-node"
                                ><i
                                    class="fa-solid fa-wave-square"
                                    aria-hidden="true"
                                ></i
                            ></span>
                            <div>
                                <span class="mono-label">01 / Signal</span>
                                <p>Observed activity in an agreed scenario.</p>
                            </div>
                        </li>
                        <li>
                            <span class="service-node"
                                ><i
                                    class="fa-solid fa-network-wired"
                                    aria-hidden="true"
                                ></i
                            ></span>
                            <div>
                                <span class="mono-label">02 / Context</span>
                                <p>Relevant assets, behaviour and case history.</p>
                            </div>
                        </li>
                        <li>
                            <span class="service-node"
                                ><i
                                    class="fa-solid fa-diagram-project"
                                    aria-hidden="true"
                                ></i
                            ></span>
                            <div>
                                <span class="mono-label">03 / Detection logic</span>
                                <p>Test the rule and its coverage.</p>
                            </div>
                        </li>
                        <li>
                            <span class="service-node"
                                ><i
                                    class="fa-solid fa-user-shield"
                                    aria-hidden="true"
                                ></i
                            ></span>
                            <div>
                                <span class="mono-label">04 / Review</span>
                                <p>An analyst validates the interpretation.</p>
                            </div>
                        </li>
                        <li>
                            <span class="service-node"
                                ><i
                                    class="fa-solid fa-file-shield"
                                    aria-hidden="true"
                                ></i
                            ></span>
                            <div>
                                <span class="mono-label">05 / Priority</span>
                                <p>Evidence informs an accountable decision.</p>
                            </div>
                        </li>
                    </ol>
                    <div class="service-notes">
                        <div class="service-boundary">
                            <i
                                class="fa-solid fa-shield-halved"
                                aria-hidden="true"
                            ></i>
                            <div>
                                <p class="mono-label">INTERPRET WITH CARE</p>
                                <h3>An anomaly is not proof of an attack.</h3>
                            </div>
                        </div>
                        <article class="service-tuning">
                            <p class="mono-label">FALSE POSITIVE ASSISTANCE</p>
                            <h3>Propose. Test. Review.</h3>
                            <p>
                                Propose tuning from reviewed cases. Test coverage before approving
                                changes.
                            </p>
                        </article>
                    </div>
                </div>
            </section>

            <!-- Security Analytics -->
            <section
                class="section"
                id="security-analytics"
            >
                <div class="page-container">
                    <div class="section-heading">
                        <p class="eyebrow">
                            <span aria-hidden="true"></span>05 / SECURITY ANALYTICS
                        </p>
                        <h2>Turn validated evidence<br />into useful decisions.</h2>
                        <p>
                            Turn validated case data into operational and management reporting. Make
                            recurring weaknesses, prioritised improvement actions and accepted
                            changes easier to explain.
                        </p>
                    </div>
                    <div class="service-audiences">
                        <article class="service-audience">
                            <p class="eyebrow">FOR SECURITY TEAMS</p>
                            <h3>Understand operational patterns.</h3>
                            <ul class="verified-list">
                                <li>
                                    <i
                                        class="fa-solid fa-check"
                                        aria-hidden="true"
                                    ></i
                                    ><span>Case quality</span>
                                </li>
                                <li>
                                    <i
                                        class="fa-solid fa-check"
                                        aria-hidden="true"
                                    ></i
                                    ><span>Coverage</span>
                                </li>
                                <li>
                                    <i
                                        class="fa-solid fa-check"
                                        aria-hidden="true"
                                    ></i
                                    ><span>Recurring issues</span>
                                </li>
                                <li>
                                    <i
                                        class="fa-solid fa-check"
                                        aria-hidden="true"
                                    ></i
                                    ><span>Tuning priorities</span>
                                </li>
                            </ul>
                        </article>
                        <article class="service-audience">
                            <p class="eyebrow">FOR LEADERS</p>
                            <h3>Connect findings to decisions.</h3>
                            <ul class="verified-list">
                                <li>
                                    <i
                                        class="fa-solid fa-check"
                                        aria-hidden="true"
                                    ></i
                                    ><span>Risk context</span>
                                </li>
                                <li>
                                    <i
                                        class="fa-solid fa-check"
                                        aria-hidden="true"
                                    ></i
                                    ><span>Improvement status</span>
                                </li>
                                <li>
                                    <i
                                        class="fa-solid fa-check"
                                        aria-hidden="true"
                                    ></i
                                    ><span>Operational trends</span>
                                </li>
                                <li>
                                    <i
                                        class="fa-solid fa-check"
                                        aria-hidden="true"
                                    ></i
                                    ><span>Decision support</span>
                                </li>
                            </ul>
                        </article>
                    </div>
                    <div class="service-outcome">
                        <i
                            class="fa-solid fa-file-shield"
                            aria-hidden="true"
                        ></i>
                        <div>
                            <p class="mono-label">TRUSTED REPORTING</p>
                            <p>
                                Operational and management outputs retain source context and
                                distinguish accepted findings from unresolved questions.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- How Services Connect -->
            <section
                class="section dark-section services-technical"
                id="connected-services"
            >
                <div class="page-container">
                    <div class="section-heading">
                        <p class="eyebrow"><span aria-hidden="true"></span>ONE OPERATING CONTEXT</p>
                        <h2>Services that connect<br />without forcing replacement.</h2>
                        <p>
                            Customers can begin with one workflow. Services can be combined only
                            where the connection improves a real operating task.
                        </p>
                    </div>
                    <ol class="service-workflow">
                        <li>
                            <span class="service-node"
                                ><i
                                    class="fa-solid fa-database"
                                    aria-hidden="true"
                                ></i
                            ></span>
                            <div>
                                <span class="mono-label">01 / Security Evidence</span>
                                <p>Permitted source records.</p>
                            </div>
                        </li>
                        <li>
                            <span class="service-node"
                                ><i
                                    class="fa-solid fa-shield-halved"
                                    aria-hidden="true"
                                ></i
                            ></span>
                            <div>
                                <span class="mono-label">02 / SOC Workflow</span>
                                <p>Reviewable case preparation.</p>
                            </div>
                        </li>
                        <li>
                            <span class="service-node"
                                ><i
                                    class="fa-solid fa-server"
                                    aria-hidden="true"
                                ></i
                            ></span>
                            <div>
                                <span class="mono-label">03 / SIEM Foundation</span>
                                <p>Agreed collection and query work.</p>
                            </div>
                        </li>
                        <li>
                            <span class="service-node"
                                ><i
                                    class="fa-solid fa-crosshairs"
                                    aria-hidden="true"
                                ></i
                            ></span>
                            <div>
                                <span class="mono-label">04 / Threat Detection</span>
                                <p>Context and tested logic.</p>
                            </div>
                        </li>
                        <li>
                            <span class="service-node"
                                ><i
                                    class="fa-solid fa-chart-line"
                                    aria-hidden="true"
                                ></i
                            ></span>
                            <div>
                                <span class="mono-label">05 / Security Analytics</span>
                                <p>Evidence based reporting.</p>
                            </div>
                        </li>
                        <li>
                            <span class="service-node"
                                ><i
                                    class="fa-solid fa-user-shield"
                                    aria-hidden="true"
                                ></i
                            ></span>
                            <div>
                                <span class="mono-label">06 / Human Decision</span>
                                <p>Clear operational authority.</p>
                            </div>
                        </li>
                    </ol>
                </div>
            </section>

            <!-- Service Process -->
            <section
                class="section light-section"
                id="service-process"
            >
                <div class="page-container">
                    <div class="section-heading">
                        <p class="eyebrow">
                            <span aria-hidden="true"></span>SERVICE ENGAGEMENT MODEL
                        </p>
                        <h2>Start with a real<br />security workflow.</h2>
                    </div>
                    <ol class="service-process">
                        <li>
                            <span class="service-process-number">01</span>
                            <h3>Discover</h3>
                            <p>Identify the recurring problem.</p>
                        </li>
                        <li>
                            <span class="service-process-number">02</span>
                            <h3>Define</h3>
                            <p>Confirm the decision owner and evidence.</p>
                        </li>
                        <li>
                            <span class="service-process-number">03</span>
                            <h3>Connect</h3>
                            <p>Map approved systems and permissions.</p>
                        </li>
                        <li>
                            <span class="service-process-number">04</span>
                            <h3>Build</h3>
                            <p>Create the bounded workflow.</p>
                        </li>
                        <li>
                            <span class="service-process-number">05</span>
                            <h3>Validate</h3>
                            <p>Test quality, safety and usefulness.</p>
                        </li>
                        <li>
                            <span class="service-process-number">06</span>
                            <h3>Improve</h3>
                            <p>Use approved feedback to strengthen delivery.</p>
                        </li>
                    </ol>
                </div>
            </section>

            <!-- Control Principles -->
            <section
                class="section"
                id="control-principles"
            >
                <div class="page-container">
                    <div class="section-heading">
                        <p class="eyebrow"><span aria-hidden="true"></span>CONTROL BY DESIGN</p>
                        <h2>Security services need<br />clear boundaries.</h2>
                    </div>
                    <div class="service-controls">
                        <article class="service-control">
                            <i
                                class="fa-solid fa-lock"
                                aria-hidden="true"
                            ></i>
                            <h3>Permissions before access</h3>
                            <p>Confirm permitted sources, identities and access boundaries.</p>
                        </article>
                        <article class="service-control">
                            <i
                                class="fa-solid fa-link"
                                aria-hidden="true"
                            ></i>
                            <h3>Evidence before recommendations</h3>
                            <p>Keep source references available for verification.</p>
                        </article>
                        <article class="service-control">
                            <i
                                class="fa-solid fa-user-shield"
                                aria-hidden="true"
                            ></i>
                            <h3>Human review before consequential action</h3>
                            <p>The authorised person decides what proceeds.</p>
                        </article>
                        <article class="service-control">
                            <i
                                class="fa-solid fa-database"
                                aria-hidden="true"
                            ></i>
                            <h3>Preserve source records</h3>
                            <p>Retain originals and trusted calculations.</p>
                        </article>
                        <article class="service-control">
                            <i
                                class="fa-solid fa-user-shield"
                                aria-hidden="true"
                            ></i>
                            <h3>Clear ownership</h3>
                            <p>Name the reviewer and accountable decision owner.</p>
                        </article>
                        <article class="service-control">
                            <i
                                class="fa-solid fa-network-wired"
                                aria-hidden="true"
                            ></i>
                            <h3>Scoped integrations</h3>
                            <p>Confirm supported systems and delivery permissions.</p>
                        </article>
                        <article class="service-control">
                            <i
                                class="fa-solid fa-file-lines"
                                aria-hidden="true"
                            ></i>
                            <h3>Approved procedures</h3>
                            <p>Ground recommendations in accepted company knowledge.</p>
                        </article>
                        <article class="service-control">
                            <i
                                class="fa-solid fa-file-lines"
                                aria-hidden="true"
                            ></i>
                            <h3>Reviewable outputs</h3>
                            <p>Separate facts, inferences and open questions.</p>
                        </article>
                    </div>
                </div>
            </section>

            <!-- Who These Services Are For -->
            <section
                class="section light-section"
                id="service-fit"
            >
                <div class="page-container">
                    <div class="section-heading">
                        <p class="eyebrow">
                            <span aria-hidden="true"></span>RELEVANT OPERATING ENVIRONMENTS
                        </p>
                        <h2>Built for teams with<br />real operational security work.</h2>
                        <p>Examples of service fit, subject to discovery and an agreed scope.</p>
                    </div>
                    <div class="service-controls">
                        <article class="service-control">
                            <i
                                class="fa-solid fa-shield-halved"
                                aria-hidden="true"
                            ></i>
                            <h3>Existing SOC teams</h3>
                            <p>Case preparation, context and review workflows.</p>
                        </article>
                        <article class="service-control">
                            <i
                                class="fa-solid fa-server"
                                aria-hidden="true"
                            ></i>
                            <h3>Security and IT teams</h3>
                            <p>Agreed integrations and evidence readiness.</p>
                        </article>
                        <article class="service-control">
                            <i
                                class="fa-solid fa-file-shield"
                                aria-hidden="true"
                            ></i>
                            <h3>Regulated organizations</h3>
                            <p>Evidence, permissions and accountable decisions.</p>
                        </article>
                        <article class="service-control">
                            <i
                                class="fa-solid fa-network-wired"
                                aria-hidden="true"
                            ></i>
                            <h3>Managed security providers</h3>
                            <p>Eligible, agreed delivery scopes and responsibilities.</p>
                        </article>
                        <article class="service-control">
                            <i
                                class="fa-solid fa-building-columns"
                                aria-hidden="true"
                            ></i>
                            <h3>Financial services</h3>
                            <p>Controlled investigation and reporting contexts.</p>
                        </article>
                        <article class="service-control">
                            <i
                                class="fa-solid fa-heart-pulse"
                                aria-hidden="true"
                            ></i>
                            <h3>Healthcare</h3>
                            <p>Clear evidence access and processing boundaries.</p>
                        </article>
                        <article class="service-control">
                            <i
                                class="fa-solid fa-tower-broadcast"
                                aria-hidden="true"
                            ></i>
                            <h3>Telecom</h3>
                            <p>Agreed telemetry and operational visibility.</p>
                        </article>
                        <article class="service-control">
                            <i
                                class="fa-solid fa-industry"
                                aria-hidden="true"
                            ></i>
                            <h3>Operational technology environments</h3>
                            <p>
                                Passive or read only telemetry first. Operational changes require
                                explicit safety and owner approval.
                            </p>
                        </article>
                    </div>
                </div>
            </section>

            <!-- Why OryvantAI -->
            <section
                class="section"
                id="why-oryvantai"
            >
                <div class="page-container">
                    <div class="section-heading">
                        <p class="eyebrow"><span aria-hidden="true"></span>WHY ORYVANTAI</p>
                        <h2>Custom, not generic.</h2>
                        <p>
                            Your proposal defines the supported systems, deliverables, service
                            boundary and review points.
                        </p>
                    </div>
                    <div class="service-controls">
                        <article class="service-control">
                            <i
                                class="fa-solid fa-network-wired"
                                aria-hidden="true"
                            ></i>
                            <h3>Built around existing environments</h3>
                            <p>Start with your tools and the operational task.</p>
                        </article>
                        <article class="service-control">
                            <i
                                class="fa-solid fa-file-lines"
                                aria-hidden="true"
                            ></i>
                            <h3>Company specific procedures</h3>
                            <p>Use approved knowledge and verified lessons.</p>
                        </article>
                        <article class="service-control">
                            <i
                                class="fa-solid fa-microchip"
                                aria-hidden="true"
                            ></i>
                            <h3>Controlled AI assistance</h3>
                            <p>Define permitted evidence and review points.</p>
                        </article>
                        <article class="service-control">
                            <i
                                class="fa-solid fa-user-shield"
                                aria-hidden="true"
                            ></i>
                            <h3>Human accountable decisions</h3>
                            <p>Keep consequential action with authorised people.</p>
                        </article>
                    </div>
                </div>
            </section>

            <!-- FAQ -->
            <section
                class="section light-section"
                id="faq"
            >
                <div class="page-container">
                    <div class="service-faq">
                        <div class="section-heading">
                            <p class="eyebrow">
                                <span aria-hidden="true"></span>BEFORE WE DEFINE THE SCOPE
                            </p>
                            <h2>Questions about<br />working together.</h2>
                            <p>
                                Begin with the workflow, the evidence and the people responsible for
                                decisions.
                            </p>
                        </div>
                        <div class="faq-list">
                            <details
                                class="faq-item"
                                open
                            >
                                <summary>
                                    <span class="faq-num">01</span
                                    ><span>Do we need to replace our current security tools?</span
                                    ><span
                                        class="faq-toggle"
                                        aria-hidden="true"
                                        >+</span
                                    >
                                </summary>
                                <p>
                                    No replacement is assumed. Discovery considers your current
                                    environment and native capabilities before defining custom work.
                                </p>
                            </details>
                            <details class="faq-item">
                                <summary>
                                    <span class="faq-num">02</span
                                    ><span>Does OryvantAI replace our SOC team?</span
                                    ><span
                                        class="faq-toggle"
                                        aria-hidden="true"
                                        >+</span
                                    >
                                </summary>
                                <p>
                                    The services support your team with evidence gathering,
                                    preparation and reviewable outputs. Analysts and authorised
                                    owners retain responsibility for decisions.
                                </p>
                            </details>
                            <details class="faq-item">
                                <summary>
                                    <span class="faq-num">03</span
                                    ><span>Can OryvantAI work with our SIEM?</span
                                    ><span
                                        class="faq-toggle"
                                        aria-hidden="true"
                                        >+</span
                                    >
                                </summary>
                                <p>
                                    The proposal confirms your platform, available APIs, licences,
                                    permissions and agreed integration scope. Support for every SIEM
                                    platform is not assumed.
                                </p>
                            </details>
                            <details class="faq-item">
                                <summary>
                                    <span class="faq-num">04</span
                                    ><span>Can we start with only one service?</span
                                    ><span
                                        class="faq-toggle"
                                        aria-hidden="true"
                                        >+</span
                                    >
                                </summary>
                                <p>
                                    Yes. Start with one recurring workflow, defined evidence, an
                                    accountable owner and acceptance criteria.
                                </p>
                            </details>
                            <details class="faq-item">
                                <summary>
                                    <span class="faq-num">05</span
                                    ><span>Does AI automatically close incidents?</span
                                    ><span
                                        class="faq-toggle"
                                        aria-hidden="true"
                                        >+</span
                                    >
                                </summary>
                                <p>
                                    No. There is no silent case closure or unapproved production
                                    response. Consequential actions require the appropriate human
                                    review and authorisation.
                                </p>
                            </details>
                            <details class="faq-item">
                                <summary>
                                    <span class="faq-num">06</span
                                    ><span>Can OryvantAI use our internal procedures?</span
                                    ><span
                                        class="faq-toggle"
                                        aria-hidden="true"
                                        >+</span
                                    >
                                </summary>
                                <p>
                                    Approved company procedures, roles and permitted example cases
                                    can ground the workflow. Knowledge ownership, access and
                                    versions remain explicit.
                                </p>
                            </details>
                            <details class="faq-item">
                                <summary>
                                    <span class="faq-num">07</span
                                    ><span>How are service boundaries defined?</span
                                    ><span
                                        class="faq-toggle"
                                        aria-hidden="true"
                                        >+</span
                                    >
                                </summary>
                                <p>
                                    Your proposal records supported systems, permitted evidence,
                                    deliverables, decision owners, review points, delivery
                                    permissions and acceptance criteria.
                                </p>
                            </details>
                            <details class="faq-item">
                                <summary>
                                    <span class="faq-num">08</span
                                    ><span>Can services be combined later?</span
                                    ><span
                                        class="faq-toggle"
                                        aria-hidden="true"
                                        >+</span
                                    >
                                </summary>
                                <p>
                                    Yes, where the connection improves a real operating task. Each
                                    extension requires an agreed scope, evidence foundation and
                                    clear responsibilities.
                                </p>
                            </details>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Final CTA -->
            <section
                class="service-cta"
                id="contact"
            >
                <div class="page-container">
                    <div class="contact-panel">
                        <div>
                            <p class="eyebrow">
                                <span aria-hidden="true"></span>Define your first scope
                            </p>
                            <h2>
                                Start with the security<br />
                                workflow that matters most.
                            </h2>
                            <p>
                                Define the evidence, decision owner and operating boundary first.
                                Then build the intelligence around it.
                            </p>
                            <div class="button-row">
                                <a
                                    class="button button-primary"
                                    href="mailto:bilal@oryvantai.tech?subject=Security%20workflow%20review"
                                    >Talk to an Expert<i
                                        class="fa-solid fa-arrow-up-right-from-square"
                                        aria-hidden="true"
                                    ></i></a
                                ><a
                                    class="button button-secondary"
                                    href="solutions.html"
                                    >Explore Solutions<i
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
                            <a href="mailto:bilal@oryvantai.tech">bilal@oryvantai.tech</a
                            ><span>Muhammad Bilal · Founder &amp; CEO</span>
                        </div>
                    </div>
                </div>
            </section>
        </main>






@endsection
