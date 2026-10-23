@extends('Layout.layout')

@section('title', 'Industries | OryvantAI')
@section('description', 'AI powered cybersecurity shaped around your operating environment, evidence and responsibilities.')
@section('body_class', 'industries-page')

@section('content')
<main id="main">
            <section
                class="industries-hero dark-section"
                id="home"
                aria-labelledby="industries-title"
            >
                <div class="page-container">
                    <nav
                        class="industries-breadcrumb"
                        aria-label="Breadcrumb"
                    >
                        <a href="{{ url('/') }}">Home</a><span aria-hidden="true">/</span
                        ><span aria-current="page">Industries</span>
                    </nav>
                    <p class="eyebrow"><span aria-hidden="true"></span>INDUSTRIES</p>
                    <h1 id="industries-title">
                        Your operating context.<br />
                        <span class="logo-gradient-text">Your security priorities.</span>
                    </h1>
                    <p class="industries-lead">
                        AI powered cybersecurity shaped around your systems, evidence, people and
                        operational constraints.
                    </p>
                    <div class="button-row">
                        <a
                            class="button button-primary"
                            href="{{ url('/contact') }}"
                            >Discuss Your Environment<i
                                class="fa-solid fa-arrow-up-right-from-square"
                                aria-hidden="true"
                            ></i></a
                        ><a
                            class="button button-secondary"
                            href="#industries"
                            >Explore Industry Contexts<i
                                class="fa-solid fa-arrow-up-right-from-square"
                                aria-hidden="true"
                            ></i
                        ></a>
                    </div>
                </div>
            </section>
            <!-- Industry Overview -->
            <section
                class="section light-section"
                id="industries"
            >
                <div class="page-container">
                    <div class="section-heading">
                        <p class="eyebrow">
                            <span aria-hidden="true"></span>BUILT AROUND YOUR ENVIRONMENT
                        </p>
                        <h2>
                            Different environments.<br />
                            A controlled approach.
                        </h2>
                        <p>
                            The right starting point depends on your evidence, operating
                            responsibilities and approved access.
                        </p>
                    </div>
                    <div class="industries-overview">
                        <article class="industry-card">
                            <span
                                ><i
                                    class="fa-solid fa-building-columns"
                                    aria-hidden="true"
                                ></i
                            ></span>
                            <h3>Financial Services</h3>
                            <p>
                                Identity investigations and incident reporting within the
                                institution’s applicable requirements.
                            </p>
                            <a
                                class="text-link"
                                href="#financial-services"
                                >Explore Context<i
                                    class="fa-solid fa-arrow-up-right-from-square"
                                    aria-hidden="true"
                                ></i
                            ></a>
                        </article>
                        <article class="industry-card">
                            <span
                                ><i
                                    class="fa-solid fa-heart-pulse"
                                    aria-hidden="true"
                                ></i
                            ></span>
                            <h3>Healthcare</h3>
                            <p>
                                Access event review and incident evidence involving sensitive
                                information.
                            </p>
                            <a
                                class="text-link"
                                href="#healthcare"
                                >Explore Context<i
                                    class="fa-solid fa-arrow-up-right-from-square"
                                    aria-hidden="true"
                                ></i
                            ></a>
                        </article>
                        <article class="industry-card">
                            <span
                                ><i
                                    class="fa-solid fa-tower-broadcast"
                                    aria-hidden="true"
                                ></i
                            ></span>
                            <h3>Telecom</h3>
                            <p>
                                Log source reliability, permitted cross system context and
                                controlled escalation.
                            </p>
                            <a
                                class="text-link"
                                href="#telecom"
                                >Explore Context<i
                                    class="fa-solid fa-arrow-up-right-from-square"
                                    aria-hidden="true"
                                ></i
                            ></a>
                        </article>
                        <article class="industry-card">
                            <span
                                ><i
                                    class="fa-solid fa-industry"
                                    aria-hidden="true"
                                ></i
                            ></span>
                            <h3>Operational Technology</h3>
                            <p>
                                Authorised telemetry integration and evidence review that respect
                                operational constraints.
                            </p>
                            <a
                                class="text-link"
                                href="#operational-technology"
                                >Explore Context<i
                                    class="fa-solid fa-arrow-up-right-from-square"
                                    aria-hidden="true"
                                ></i
                            ></a>
                        </article>
                        <article class="industry-card">
                            <span
                                ><i
                                    class="fa-solid fa-building-shield"
                                    aria-hidden="true"
                                ></i
                            ></span>
                            <h3>Regulated Enterprises</h3>
                            <p>
                                Recurring security work with explicit evidence, governance and
                                processing requirements.
                            </p>
                            <a
                                class="text-link"
                                href="#regulated-enterprises"
                                >Explore Context<i
                                    class="fa-solid fa-arrow-up-right-from-square"
                                    aria-hidden="true"
                                ></i
                            ></a>
                        </article>
                        <article class="industry-card">
                            <span
                                ><i
                                    class="fa-solid fa-network-wired"
                                    aria-hidden="true"
                                ></i
                            ></span>
                            <h3>Managed Security Providers</h3>
                            <p>
                                AI enablement around established security processes and agreed
                                delivery responsibilities.
                            </p>
                            <a
                                class="text-link"
                                href="#managed-security-providers"
                                >Explore Context<i
                                    class="fa-solid fa-arrow-up-right-from-square"
                                    aria-hidden="true"
                                ></i
                            ></a>
                        </article>
                    </div>
                    <p class="section-note">
                        Relevant environments and example project scopes, not customer references or
                        completed deployments.
                    </p>
                </div>
            </section>
            <!-- Financial Services -->
            <section
                class="section"
                id="financial-services"
            >
                <div class="page-container">
                    <div class="industry-detail">
                        <div class="industry-context">
                            <span class="industry-context-icon"
                                ><i
                                    class="fa-solid fa-building-columns"
                                    aria-hidden="true"
                                ></i
                            ></span>
                            <div class="section-heading">
                                <p class="eyebrow">
                                    <span aria-hidden="true"></span>01 / FINANCIAL SERVICES
                                </p>
                                <h2>
                                    Clearer investigations.<br />
                                    Reviewable incident evidence.
                                </h2>
                            </div>
                            <p class="industry-label">OPERATIONAL FOCUS</p>
                            <p class="industry-focus">
                                Identity investigations and incident reporting within the
                                institution’s applicable requirements.
                            </p>
                        </div>
                        <div class="industry-scope">
                            <div class="industry-scope-row">
                                <span
                                    ><i
                                        class="fa-solid fa-route"
                                        aria-hidden="true"
                                    ></i
                                ></span>
                                <div>
                                    <h3>Starting workflow</h3>
                                    <p>
                                        Bring permitted identity events, relevant case context and
                                        source references into a reviewable investigation brief.
                                    </p>
                                </div>
                            </div>
                            <div class="industry-scope-row">
                                <span
                                    ><i
                                        class="fa-solid fa-file-lines"
                                        aria-hidden="true"
                                    ></i
                                ></span>
                                <div>
                                    <h3>Useful output</h3>
                                    <p>
                                        A case brief, incident timeline and evidence references for
                                        authorised review.
                                    </p>
                                </div>
                            </div>
                            <div class="industry-boundary">
                                <span
                                    ><i
                                        class="fa-solid fa-shield-halved"
                                        aria-hidden="true"
                                    ></i
                                ></span>
                                <div>
                                    <h3>Control boundary</h3>
                                    <p>
                                        Access, processing arrangements and applicable institutional
                                        requirements must be confirmed for the specific scope.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Healthcare -->
            <section
                class="section light-section industry-detail-reverse"
                id="healthcare"
            >
                <div class="page-container">
                    <div class="industry-detail">
                        <div class="industry-context">
                            <span class="industry-context-icon"
                                ><i
                                    class="fa-solid fa-heart-pulse"
                                    aria-hidden="true"
                                ></i
                            ></span>
                            <div class="section-heading">
                                <p class="eyebrow">
                                    <span aria-hidden="true"></span>02 / HEALTHCARE
                                </p>
                                <h2>
                                    Useful security context.<br />
                                    Careful information handling.
                                </h2>
                            </div>
                            <p class="industry-label">OPERATIONAL FOCUS</p>
                            <p class="industry-focus">
                                Access event review and incident evidence involving sensitive
                                information.
                            </p>
                        </div>
                        <div class="industry-scope">
                            <div class="industry-scope-row">
                                <span
                                    ><i
                                        class="fa-solid fa-route"
                                        aria-hidden="true"
                                    ></i
                                ></span>
                                <div>
                                    <h3>Starting workflow</h3>
                                    <p>
                                        Review permitted access events using approved context and
                                        agreed data handling arrangements.
                                    </p>
                                </div>
                            </div>
                            <div class="industry-scope-row">
                                <span
                                    ><i
                                        class="fa-solid fa-file-lines"
                                        aria-hidden="true"
                                    ></i
                                ></span>
                                <div>
                                    <h3>Useful output</h3>
                                    <p>
                                        A source linked review brief with open questions and a named
                                        reviewer.
                                    </p>
                                </div>
                            </div>
                            <div class="industry-boundary">
                                <span
                                    ><i
                                        class="fa-solid fa-shield-halved"
                                        aria-hidden="true"
                                    ></i
                                ></span>
                                <div>
                                    <h3>Control boundary</h3>
                                    <p>
                                        Confirm permitted information, access responsibilities and
                                        processing boundaries before connecting evidence.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Telecom -->
            <section
                class="section"
                id="telecom"
            >
                <div class="page-container">
                    <div class="industry-detail">
                        <div class="industry-context">
                            <span class="industry-context-icon"
                                ><i
                                    class="fa-solid fa-tower-broadcast"
                                    aria-hidden="true"
                                ></i
                            ></span>
                            <div class="section-heading">
                                <p class="eyebrow"><span aria-hidden="true"></span>03 / TELECOM</p>
                                <h2>
                                    Improve visibility.<br />
                                    Keep handovers clear.
                                </h2>
                            </div>
                            <p class="industry-label">OPERATIONAL FOCUS</p>
                            <p class="industry-focus">
                                Log source reliability, permitted cross system context and
                                controlled escalation.
                            </p>
                        </div>
                        <div class="industry-scope">
                            <div class="industry-scope-row">
                                <span
                                    ><i
                                        class="fa-solid fa-route"
                                        aria-hidden="true"
                                    ></i
                                ></span>
                                <div>
                                    <h3>Starting workflow</h3>
                                    <p>
                                        Identify collection gaps and assemble relevant evidence for
                                        investigation and handover.
                                    </p>
                                </div>
                            </div>
                            <div class="industry-scope-row">
                                <span
                                    ><i
                                        class="fa-solid fa-file-lines"
                                        aria-hidden="true"
                                    ></i
                                ></span>
                                <div>
                                    <h3>Useful output</h3>
                                    <p>
                                        A visibility gap record, contextual brief and reviewed
                                        improvement backlog.
                                    </p>
                                </div>
                            </div>
                            <div class="industry-boundary">
                                <span
                                    ><i
                                        class="fa-solid fa-shield-halved"
                                        aria-hidden="true"
                                    ></i
                                ></span>
                                <div>
                                    <h3>Control boundary</h3>
                                    <p>
                                        Confirm system access, operational ownership and escalation
                                        responsibilities.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Operational Technology -->
            <section
                class="section dark-section industries-ot industry-detail-reverse"
                id="operational-technology"
            >
                <div class="page-container">
                    <div class="industry-detail">
                        <div class="industry-context">
                            <span class="industry-context-icon"
                                ><i
                                    class="fa-solid fa-industry"
                                    aria-hidden="true"
                                ></i
                            ></span>
                            <div class="section-heading">
                                <p class="eyebrow">
                                    <span aria-hidden="true"></span>04 / OPERATIONAL TECHNOLOGY
                                </p>
                                <h2>
                                    Operational safety.<br />
                                    Explicit authority.
                                </h2>
                            </div>
                            <p class="industry-label">OPERATIONAL FOCUS</p>
                            <p class="industry-focus">
                                Authorised telemetry integration and evidence review that respect
                                operational constraints.
                            </p>
                        </div>
                        <div class="industry-scope">
                            <div class="industry-scope-row">
                                <span
                                    ><i
                                        class="fa-solid fa-route"
                                        aria-hidden="true"
                                    ></i
                                ></span>
                                <div>
                                    <h3>Starting workflow</h3>
                                    <p>
                                        Begin with passive or approved read only telemetry and
                                        permitted investigation context.
                                    </p>
                                </div>
                            </div>
                            <div class="industry-scope-row">
                                <span
                                    ><i
                                        class="fa-solid fa-file-lines"
                                        aria-hidden="true"
                                    ></i
                                ></span>
                                <div>
                                    <h3>Useful output</h3>
                                    <p>
                                        A telemetry readiness assessment, reviewable evidence brief
                                        and proposed next checks.
                                    </p>
                                </div>
                            </div>
                            <div class="industry-boundary">
                                <span
                                    ><i
                                        class="fa-solid fa-shield-halved"
                                        aria-hidden="true"
                                    ></i
                                ></span>
                                <div>
                                    <h3>OT SAFETY FIRST</h3>
                                    <p>
                                        Production isolation, active testing and control system
                                        changes require the asset owner’s operational and safety
                                        approval.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Regulated Enterprises -->
            <section
                class="section"
                id="regulated-enterprises"
            >
                <div class="page-container">
                    <div class="industry-detail">
                        <div class="industry-context">
                            <span class="industry-context-icon"
                                ><i
                                    class="fa-solid fa-building-shield"
                                    aria-hidden="true"
                                ></i
                            ></span>
                            <div class="section-heading">
                                <p class="eyebrow">
                                    <span aria-hidden="true"></span>05 / REGULATED ENTERPRISES
                                </p>
                                <h2>
                                    Defined requirements.<br />
                                    A reviewable scope.
                                </h2>
                            </div>
                            <p class="industry-label">OPERATIONAL FOCUS</p>
                            <p class="industry-focus">
                                Recurring security work with explicit evidence, governance and
                                processing requirements.
                            </p>
                        </div>
                        <div class="industry-scope">
                            <div class="industry-scope-row">
                                <span
                                    ><i
                                        class="fa-solid fa-route"
                                        aria-hidden="true"
                                    ></i
                                ></span>
                                <div>
                                    <h3>Starting workflow</h3>
                                    <p>
                                        Select one investigation, procedure or reporting task and
                                        define its sources, owner and acceptance criteria.
                                    </p>
                                </div>
                            </div>
                            <div class="industry-scope-row">
                                <span
                                    ><i
                                        class="fa-solid fa-file-lines"
                                        aria-hidden="true"
                                    ></i
                                ></span>
                                <div>
                                    <h3>Useful output</h3>
                                    <p>
                                        An agreed workflow scope and evidence map for stakeholder
                                        review.
                                    </p>
                                </div>
                            </div>
                            <div class="industry-boundary">
                                <span
                                    ><i
                                        class="fa-solid fa-shield-halved"
                                        aria-hidden="true"
                                    ></i
                                ></span>
                                <div>
                                    <h3>Control boundary</h3>
                                    <p>
                                        Requirements depend on the organisation, activity and
                                        jurisdiction. Confirm applicability during discovery.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Managed Security Providers -->
            <section
                class="section light-section industry-detail-reverse"
                id="managed-security-providers"
            >
                <div class="page-container">
                    <div class="industry-detail">
                        <div class="industry-context">
                            <span class="industry-context-icon"
                                ><i
                                    class="fa-solid fa-network-wired"
                                    aria-hidden="true"
                                ></i
                            ></span>
                            <div class="section-heading">
                                <p class="eyebrow">
                                    <span aria-hidden="true"></span>06 / MANAGED SECURITY PROVIDERS
                                </p>
                                <h2>
                                    Enable the existing team.<br />
                                    Keep service ownership visible.
                                </h2>
                            </div>
                            <p class="industry-label">OPERATIONAL FOCUS</p>
                            <p class="industry-focus">
                                AI enablement around established security processes and agreed
                                delivery responsibilities.
                            </p>
                        </div>
                        <div class="industry-scope">
                            <div class="industry-scope-row">
                                <span
                                    ><i
                                        class="fa-solid fa-route"
                                        aria-hidden="true"
                                    ></i
                                ></span>
                                <div>
                                    <h3>Starting workflow</h3>
                                    <p>
                                        Improve case preparation, approved procedures or reporting
                                        within an existing operating model.
                                    </p>
                                </div>
                            </div>
                            <div class="industry-scope-row">
                                <span
                                    ><i
                                        class="fa-solid fa-file-lines"
                                        aria-hidden="true"
                                    ></i
                                ></span>
                                <div>
                                    <h3>Useful output</h3>
                                    <p>
                                        Reviewable case preparation and proposed workflow
                                        improvements.
                                    </p>
                                </div>
                            </div>
                            <div class="industry-boundary">
                                <span
                                    ><i
                                        class="fa-solid fa-shield-halved"
                                        aria-hidden="true"
                                    ></i
                                ></span>
                                <div>
                                    <h3>Control boundary</h3>
                                    <p>
                                        Confirm provider eligibility, licensing where relevant,
                                        customer permissions and operating responsibility before
                                        delivery.
                                    </p>
                                </div>
                            </div>
                            <p class="industry-scope-note">
                                An engineering engagement is not a complete 24/7 managed SOC.
                                Monitoring coverage and operating responsibilities must be agreed
                                explicitly.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Shared Control Principles -->
            <section
                class="section light-section"
                id="industry-controls"
            >
                <div class="page-container">
                    <div class="section-heading">
                        <p class="eyebrow">
                            <span aria-hidden="true"></span>SHARED CONTROL PRINCIPLES
                        </p>
                        <h2>
                            Different environments.<br />
                            The same accountability.
                        </h2>
                    </div>
                    <div class="industry-controls">
                        <article class="industry-control">
                            <i
                                class="fa-solid fa-database"
                                aria-hidden="true"
                            ></i>
                            <h3>Permitted evidence</h3>
                            <p>Connect only authorised sources.</p>
                        </article>
                        <article class="industry-control">
                            <i
                                class="fa-solid fa-user-shield"
                                aria-hidden="true"
                            ></i>
                            <h3>Named decision owners</h3>
                            <p>Keep operational authority explicit.</p>
                        </article>
                        <article class="industry-control">
                            <i
                                class="fa-solid fa-file-shield"
                                aria-hidden="true"
                            ></i>
                            <h3>Approved procedures</h3>
                            <p>Ground recommendations in accepted company knowledge.</p>
                        </article>
                        <article class="industry-control">
                            <i
                                class="fa-solid fa-link"
                                aria-hidden="true"
                            ></i>
                            <h3>Reviewable outputs</h3>
                            <p>Preserve source references, open questions and human review.</p>
                        </article>
                    </div>
                </div>
            </section>
            <!-- Choosing a Starting Point -->
            <section
                class="section"
                id="starting-point"
            >
                <div class="page-container">
                    <div class="section-heading">
                        <p class="eyebrow">
                            <span aria-hidden="true"></span>DEFINE THE FIRST SCOPE
                        </p>
                        <h2>
                            Start with one workflow.<br />
                            Define the boundary first.
                        </h2>
                    </div>
                    <ol class="industry-steps">
                        <li>
                            <span>01</span>
                            <h3>Identify the recurring problem</h3>
                        </li>
                        <li>
                            <span>02</span>
                            <h3>Confirm the evidence</h3>
                        </li>
                        <li>
                            <span>03</span>
                            <h3>Name the decision owner</h3>
                        </li>
                        <li>
                            <span>04</span>
                            <h3>Agree the operating boundary</h3>
                        </li>
                    </ol>
                    <p class="industry-readiness">
                        When telemetry, ownership or procedures are incomplete, begin with readiness
                        and engineering.
                    </p>
                </div>
            </section>
            <!-- FAQ -->
            <section
                class="section light-section"
                id="faq"
            >
                <div class="page-container">
                    <div class="industry-faq">
                        <div class="section-heading">
                            <p class="eyebrow">
                                <span aria-hidden="true"></span>BEFORE WE DEFINE THE SCOPE
                            </p>
                            <h2>
                                Questions about<br />
                                your environment.
                            </h2>
                        </div>
                        <div class="faq-list">
                            <details
                                class="faq-item"
                                open
                            >
                                <summary>
                                    <span class="faq-num">01</span
                                    ><span>Are these existing OryvantAI customer sectors?</span
                                    ><span
                                        class="faq-toggle"
                                        aria-hidden="true"
                                        >+</span
                                    >
                                </summary>
                                <p>
                                    These are relevant operating environments and example project
                                    scopes, not customer references or claims of completed
                                    deployments.
                                </p>
                            </details>
                            <details class="faq-item">
                                <summary>
                                    <span class="faq-num">02</span
                                    ><span>Can we start with one workflow?</span
                                    ><span
                                        class="faq-toggle"
                                        aria-hidden="true"
                                        >+</span
                                    >
                                </summary>
                                <p>
                                    Yes. Begin with a recurring task, permitted evidence, a named
                                    decision owner and an agreed operating boundary.
                                </p>
                            </details>
                            <details class="faq-item">
                                <summary>
                                    <span class="faq-num">03</span
                                    ><span>Do you replace our existing security tools?</span
                                    ><span
                                        class="faq-toggle"
                                        aria-hidden="true"
                                        >+</span
                                    >
                                </summary>
                                <p>
                                    No replacement is assumed. Discovery reviews existing tools and
                                    native capabilities before defining any custom work.
                                </p>
                            </details>
                            <details class="faq-item">
                                <summary>
                                    <span class="faq-num">04</span
                                    ><span>Does every organisation have the same requirements?</span
                                    ><span
                                        class="faq-toggle"
                                        aria-hidden="true"
                                        >+</span
                                    >
                                </summary>
                                <p>
                                    No. Requirements depend on the organisation, activity and
                                    jurisdiction. Applicability and processing arrangements must be
                                    confirmed for the specific scope.
                                </p>
                            </details>
                            <details class="faq-item">
                                <summary>
                                    <span class="faq-num">05</span
                                    ><span>Can operational technology be included?</span
                                    ><span
                                        class="faq-toggle"
                                        aria-hidden="true"
                                        >+</span
                                    >
                                </summary>
                                <p>
                                    An agreed scope can begin with authorised passive or read only
                                    telemetry. Active testing, production isolation and control
                                    system changes require the asset owner’s operational and safety
                                    approval.
                                </p>
                            </details>
                            <details class="faq-item">
                                <summary>
                                    <span class="faq-num">06</span
                                    ><span
                                        >Can an existing managed provider work with OryvantAI?</span
                                    ><span
                                        class="faq-toggle"
                                        aria-hidden="true"
                                        >+</span
                                    >
                                </summary>
                                <p>
                                    An eligible provider can explore an AI enablement scope around
                                    its existing team. Licensing where relevant, customer
                                    permissions, delivery boundaries and operating responsibilities
                                    must be confirmed first.
                                </p>
                            </details>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Final CTA -->
            <section class="industries-cta">
                <div class="page-container">
                    <div class="contact-panel">
                        <div>
                            <p class="eyebrow">
                                <span aria-hidden="true"></span>DEFINE YOUR STARTING POINT
                            </p>
                            <h2>
                                Start with your environment.<br />
                                Focus on one security workflow.
                            </h2>
                            <p>
                                Define the systems, evidence and people involved. Then agree the
                                right starting scope.
                            </p>
                            <div class="button-row">
                                <a
                                    class="button button-primary"
                                    href="{{ url('/contact') }}"
                                    >Talk to an Expert<i
                                        class="fa-solid fa-arrow-up-right-from-square"
                                        aria-hidden="true"
                                    ></i></a
                                ><a
                                    class="button button-secondary"
                                    href="{{ url('/solutions') }}"
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
                            ><span>oryvantai.tech</span>
                        </div>
                    </div>
                </div>
            </section>
        </main>
@endsection
