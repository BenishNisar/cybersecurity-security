@extends('Layout.layout')

@section('body_class', 'services-page soc-automation-page')

@section('title', 'SOC Automation | OryvantAI')

@section('description', 'Support your SOC with evidence preparation, contextual case briefs and controlled case routing. OryvantAI builds scoped automation around existing tools, approved procedures and analyst decisions.')

@push('preloads')
    <link
        rel="preload"
        as="image"
        href="{{ asset('assets/images/hero-network.webp') }}"
    >
@endpush

@section('content')
    <main id="main" class="ais-page">

        <!-- SOC Automation Hero -->
        <section class="ais-hero ais-hero-desktop" aria-labelledby="soc-title">
            <img
                class="ais-hero-image"
                src="{{ asset('assets/images/hero-network.webp') }}"
                alt=""
                fetchpriority="high"
                decoding="async"
            >

            <div class="page-container ais-hero-inner">
                <nav class="ais-breadcrumb" aria-label="Breadcrumb">
                    <a href="{{ url('/') }}">Home</a>
                    <span aria-hidden="true">/</span>
                    <a href="{{ url('/services') }}">Services</a>
                    <span aria-hidden="true">/</span>
                    <span aria-current="page">SOC Automation</span>
                </nav>

                <div class="ais-hero-grid">
                    <div class="ais-hero-copy">
                        <p class="ais-kicker">
                            <span aria-hidden="true"></span>
                            SOC AUTOMATION
                        </p>

                        <h1 id="soc-title">
                            Less repeated preparation.
                            <span class="ais-gradient">
                                More context for your analysts.
                            </span>
                        </h1>

                        <p class="ais-lead">
                            Prepare evidence, route cases and support analyst
                            decisions around the tools and procedures your
                            security team already uses.
                        </p>

                        <div class="button-row">
                            <a
                                class="button button-primary"
                                href="{{ url('/contact') }}"
                            >
                                Discuss Your SOC Workflow
                                <i
                                    class="fa-solid fa-arrow-up-right-from-square"
                                    aria-hidden="true"
                                ></i>
                            </a>

                            <a
                                class="button button-secondary"
                                href="#soc-approach"
                            >
                                Explore the Approach
                                <i
                                    class="fa-solid fa-arrow-down"
                                    aria-hidden="true"
                                ></i>
                            </a>
                        </div>
                    </div>

                    <div class="ais-hero-visual" aria-hidden="true">
                        <div class="ais-orbit ais-orbit-one"></div>
                        <div class="ais-orbit ais-orbit-two"></div>

                        <div class="ais-hero-emblem">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>

                        <span class="ais-visual-tag ais-tag-one">
                            <i class="fa-solid fa-database"></i>
                            PERMITTED EVIDENCE
                        </span>

                        <span class="ais-visual-tag ais-tag-two">
                            <i class="fa-solid fa-user-shield"></i>
                            ANALYST REVIEW
                        </span>

                        <div class="ais-visual-caption">
                            <span>CONTROLLED SOC WORKFLOWS</span>
                            <strong>Prepare the case. Preserve the decision.</strong>
                        </div>
                    </div>
                </div>

                <div class="ais-hero-bottom">
                    <p>Support the existing team. Keep ownership clear.</p>

                    <ul class="ais-principles">
                        <li>
                            <i class="fa-solid fa-link" aria-hidden="true"></i>
                            Source linked
                        </li>
                        <li>
                            <i class="fa-solid fa-user-shield" aria-hidden="true"></i>
                            Analyst reviewed
                        </li>
                        <li>
                            <i class="fa-solid fa-lock" aria-hidden="true"></i>
                            Controlled access
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Dedicated mobile hero -->
        <section class="ais-hero ais-hero-mobile" aria-labelledby="soc-title-mobile">
            <img
                class="ais-hero-image"
                src="{{ asset('assets/images/hero-network.webp') }}"
                alt=""
                fetchpriority="high"
                decoding="async"
            >

            <div class="page-container ais-hero-inner">
                <nav class="ais-breadcrumb" aria-label="Breadcrumb">
                    <a href="{{ url('/') }}">Home</a>
                    <span aria-hidden="true">/</span>
                    <a href="{{ url('/services') }}">Services</a>
                    <span aria-hidden="true">/</span>
                    <span aria-current="page">SOC Automation</span>
                </nav>

                <div class="ais-hero-grid">
                    <div class="ais-hero-copy">
                        <p class="ais-kicker">
                            <span aria-hidden="true"></span>
                            SOC AUTOMATION
                        </p>

                        <h1 id="soc-title-mobile">
                            Less repeated preparation.
                            <span class="ais-gradient">
                                More context for your analysts.
                            </span>
                        </h1>

                        <p class="ais-lead">
                            Prepare evidence, route cases and support analyst
                            decisions around the tools and procedures your
                            security team already uses.
                        </p>

                        <div class="button-row">
                            <a
                                class="button button-primary"
                                href="{{ url('/contact') }}"
                            >
                                Discuss Your SOC Workflow
                                <i
                                    class="fa-solid fa-arrow-up-right-from-square"
                                    aria-hidden="true"
                                ></i>
                            </a>

                            <a
                                class="button button-secondary"
                                href="#soc-approach"
                            >
                                Explore the Approach
                                <i
                                    class="fa-solid fa-arrow-down"
                                    aria-hidden="true"
                                ></i>
                            </a>
                        </div>
                    </div>

                    <div class="ais-hero-visual" aria-hidden="true">
                        <div class="ais-orbit ais-orbit-one"></div>
                        <div class="ais-orbit ais-orbit-two"></div>

                        <div class="ais-hero-emblem">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>

                        <span class="ais-visual-tag ais-tag-one">
                            <i class="fa-solid fa-database"></i>
                            PERMITTED EVIDENCE
                        </span>

                        <span class="ais-visual-tag ais-tag-two">
                            <i class="fa-solid fa-user-shield"></i>
                            ANALYST REVIEW
                        </span>

                        <div class="ais-visual-caption">
                            <span>CONTROLLED SOC WORKFLOWS</span>
                            <strong>Prepare the case. Preserve the decision.</strong>
                        </div>
                    </div>
                </div>

                <div class="ais-hero-bottom">
                    <p>Support the existing team. Keep ownership clear.</p>

                    <ul class="ais-principles">
                        <li>
                            <i class="fa-solid fa-link" aria-hidden="true"></i>
                            Source linked
                        </li>
                        <li>
                            <i class="fa-solid fa-user-shield" aria-hidden="true"></i>
                            Analyst reviewed
                        </li>
                        <li>
                            <i class="fa-solid fa-lock" aria-hidden="true"></i>
                            Controlled access
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Service Introduction -->
        <section class="ais-section" id="soc-approach">
            <div class="page-container">
                <div class="ais-split">
                    <div>
                        <p class="ais-kicker">
                            <span aria-hidden="true"></span>
                            THE WORK BEHIND THE ALERT
                        </p>

                        <h2>
                            Every case needs context.
                            <span class="ais-gradient">
                                Bring it together for your team.
                            </span>
                        </h2>
                    </div>

                    <div class="ais-intro-copy">
                        <p>
                            Before an analyst can make a decision, someone
                            needs to gather the events, check previous cases
                            and find the relevant procedure. That preparation
                            often repeats across the queue.
                        </p>

                        <p>
                            OryvantAI helps shape controlled workflows that
                            prepare permitted evidence, explain the available
                            context and support routing to the agreed owner.
                        </p>

                        <div class="ais-inline-note">
                            <i
                                class="fa-solid fa-shield-halved"
                                aria-hidden="true"
                            ></i>

                            <p>
                                Your proposal defines the sources, routing
                                rules, review points and service boundary.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="ais-context-row">
                    <div>
                        <span class="ais-context-number">01</span>
                        <span>Permitted evidence</span>
                    </div>

                    <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>

                    <div>
                        <span class="ais-context-number">02</span>
                        <span>Prepared case context</span>
                    </div>

                    <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>

                    <div>
                        <span class="ais-context-number">03</span>
                        <span>Analyst decision</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Practical SOC Assistance -->
        <section class="ais-section ais-light">
            <div class="page-container">
                <div class="ais-section-top">
                    <div class="ais-heading">
                        <p class="ais-kicker">
                            <span aria-hidden="true"></span>
                            WHERE AUTOMATION CAN HELP
                        </p>

                        <h2>
                            Prepare the case.
                            <span>Keep judgment with your team.</span>
                        </h2>
                    </div>

                    <p class="ais-section-intro">
                        Begin with the repeated preparation that slows an
                        agreed investigation or handover workflow.
                    </p>
                </div>

                <div class="ais-card-grid">
                    <article class="ais-card">
                        <div class="ais-card-top">
                            <span class="ais-icon">
                                <i
                                    class="fa-solid fa-database"
                                    aria-hidden="true"
                                ></i>
                            </span>

                            <span class="ais-card-number">01</span>
                        </div>

                        <h3>Evidence preparation</h3>

                        <p>
                            Assemble permitted events, relevant asset context
                            and case history for an analyst to inspect.
                        </p>

                        <div class="ais-card-bottom">
                            <span>References remain connected to sources</span>
                            <i class="fa-solid fa-link" aria-hidden="true"></i>
                        </div>
                    </article>

                    <article class="ais-card">
                        <div class="ais-card-top">
                            <span class="ais-icon">
                                <i
                                    class="fa-solid fa-file-lines"
                                    aria-hidden="true"
                                ></i>
                            </span>

                            <span class="ais-card-number">02</span>
                        </div>

                        <h3>Reviewable case briefs</h3>

                        <p>
                            Organise the timeline, observed facts and open
                            questions into a clear investigation brief.
                        </p>

                        <div class="ais-card-bottom">
                            <span>Uncertainty remains visible</span>
                            <i
                                class="fa-solid fa-magnifying-glass"
                                aria-hidden="true"
                            ></i>
                        </div>
                    </article>

                    <article class="ais-card">
                        <div class="ais-card-top">
                            <span class="ais-icon">
                                <i
                                    class="fa-solid fa-users"
                                    aria-hidden="true"
                                ></i>
                            </span>

                            <span class="ais-card-number">03</span>
                        </div>

                        <h3>Controlled case routing</h3>

                        <p>
                            Support routing and handover using agreed
                            responsibilities and escalation procedures.
                        </p>

                        <div class="ais-card-bottom">
                            <span>Named owners and review points</span>
                            <i
                                class="fa-solid fa-user-shield"
                                aria-hidden="true"
                            ></i>
                        </div>
                    </article>

                    <article class="ais-card">
                        <div class="ais-card-top">
                            <span class="ais-icon">
                                <i
                                    class="fa-solid fa-magnifying-glass"
                                    aria-hidden="true"
                                ></i>
                            </span>

                            <span class="ais-card-number">04</span>
                        </div>

                        <h3>Reviewed tuning proposals</h3>

                        <p>
                            Use reviewed cases to propose narrowly scoped
                            improvements for recurring benign patterns.
                        </p>

                        <div class="ais-card-bottom">
                            <span>Test coverage before approving changes</span>
                            <i
                                class="fa-solid fa-shield-halved"
                                aria-hidden="true"
                            ></i>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- Evidence Workflow -->
        <section class="ais-section ais-dark">
            <div class="page-container">
                <div class="ais-section-top">
                    <div class="ais-heading">
                        <p class="ais-kicker">
                            <span aria-hidden="true"></span>
                            THE CASE PREPARATION WORKFLOW
                        </p>

                        <h2>
                            From scattered events
                            <span>to a reviewable brief.</span>
                        </h2>
                    </div>

                    <p class="ais-section-intro">
                        Prepare the next decision with evidence. An authorised
                        analyst checks the explanation and determines the
                        disposition.
                    </p>
                </div>

                <ol class="ais-workflow">
                    <li>
                        <div class="ais-workflow-top">
                            <span>01</span>
                            <i class="fa-solid fa-database" aria-hidden="true"></i>
                        </div>

                        <h3>Collect</h3>

                        <p>
                            Gather permitted events, asset context
                            and relevant case history.
                        </p>
                    </li>

                    <li>
                        <div class="ais-workflow-top">
                            <span>02</span>
                            <i class="fa-solid fa-link" aria-hidden="true"></i>
                        </div>

                        <h3>Explain</h3>

                        <p>
                            Prepare a time aligned account with source
                            references and unanswered questions.
                        </p>
                    </li>

                    <li>
                        <div class="ais-workflow-top">
                            <span>03</span>
                            <i
                                class="fa-solid fa-file-shield"
                                aria-hidden="true"
                            ></i>
                        </div>

                        <h3>Recommend</h3>

                        <p>
                            Suggest next checks and the relevant approved
                            procedure for the reviewer.
                        </p>
                    </li>

                    <li>
                        <div class="ais-workflow-top">
                            <span>04</span>
                            <i
                                class="fa-solid fa-user-shield"
                                aria-hidden="true"
                            ></i>
                        </div>

                        <h3>Review</h3>

                        <p>
                            Your analyst verifies the context and decides
                            whether to investigate further or escalate.
                        </p>
                    </li>
                </ol>

                <div class="ais-evidence-bar">
                    <strong>IN EVERY CASE BRIEF</strong>
                    <span>Facts</span>
                    <span>Open questions</span>
                    <span>Source links</span>
                    <span>Named reviewer</span>
                </div>

                <p class="ais-boundary-note">
                    <i class="fa-solid fa-lock" aria-hidden="true"></i>
                    No silent case closure or unapproved production response.
                </p>
            </div>
        </section>

        <!-- Illustrative Tuning Scenario -->
        <section class="ais-section">
            <div class="page-container ais-split ais-example">
                <div>
                    <p class="ais-kicker">
                        <span aria-hidden="true"></span>
                        AN EXAMPLE IN PRACTICE
                    </p>

                    <h2>
                        A recurring maintenance alert.
                        <span class="ais-gradient">
                            A change worth testing.
                        </span>
                    </h2>

                    <p>
                        A repeated alert appears to match an authorised
                        maintenance activity. Reviewed cases and the
                        maintenance record provide context for investigating
                        the pattern.
                    </p>

                    <p>
                        The useful output is a narrowly scoped tuning
                        proposal, with evidence for review and checks
                        that preserve critical case coverage.
                    </p>

                    <div class="ais-example-points">
                        <span>
                            <i class="fa-solid fa-link" aria-hidden="true"></i>
                            Evidence before tuning
                        </span>

                        <span>
                            <i
                                class="fa-solid fa-shield-halved"
                                aria-hidden="true"
                            ></i>
                            Preserve critical coverage
                        </span>
                    </div>

                    <p class="ais-disclaimer">
                        Illustrative scenario. This is not a customer result
                        or a live product screenshot.
                    </p>
                </div>

                <article class="ais-case">
                    <div class="ais-case-top">
                        <div class="ais-case-identity">
                            <span class="ais-icon">
                                <i
                                    class="fa-solid fa-shield-halved"
                                    aria-hidden="true"
                                ></i>
                            </span>

                            <div>
                                <span class="ais-small-label">
                                    ILLUSTRATIVE OUTPUT
                                </span>

                                <h3>Tuning proposal</h3>
                            </div>
                        </div>

                        <span class="ais-review-label">
                            FOR HUMAN REVIEW
                        </span>
                    </div>

                    <dl class="ais-case-record">
                        <div>
                            <dt>
                                <span aria-hidden="true"></span>
                                Evidence
                            </dt>

                            <dd>
                                Reviewed cases and the authorised
                                maintenance record.
                            </dd>
                        </div>

                        <div>
                            <dt>
                                <span aria-hidden="true"></span>
                                Context
                            </dt>

                            <dd>
                                The recurring pattern and the conditions
                                under which it appears.
                            </dd>
                        </div>

                        <div>
                            <dt>
                                <span aria-hidden="true"></span>
                                Proposal
                            </dt>

                            <dd>
                                A narrowly defined change for testing
                                and owner review.
                            </dd>
                        </div>

                        <div>
                            <dt>
                                <span aria-hidden="true"></span>
                                Boundary
                            </dt>

                            <dd>
                                Keep critical case coverage.
                                No blanket suppression.
                            </dd>
                        </div>
                    </dl>

                    <footer class="ais-case-footer">
                        <i
                            class="fa-solid fa-user-shield"
                            aria-hidden="true"
                        ></i>
                        Test coverage before approving the change.
                    </footer>
                </article>
            </div>
        </section>

        <!-- Brand Image -->
        <section
            class="ais-brand-section"
            aria-label="OryvantAI security operations approach"
        >
            <div class="page-container">
                <figure class="ais-brand-image">
                    <img
                        src="{{ asset('assets/images/operations-1280.webp') }}"
                        srcset="
                            {{ asset('assets/images/operations-640.webp') }} 640w,
                            {{ asset('assets/images/operations-1280.webp') }} 1280w,
                            {{ asset('assets/images/operations-2048.webp') }} 2048w
                        "
                        sizes="(max-width: 767px) 100vw, 90vw"
                        alt="OryvantAI. Cybersecurity and AI for real world operations."
                        width="1280"
                        height="482"
                        loading="lazy"
                        decoding="async"
                    >

                    <figcaption>
                        <i
                            class="fa-solid fa-shield-halved"
                            aria-hidden="true"
                        ></i>
                        Support the existing team. Keep monitoring
                        and response ownership explicit.
                    </figcaption>
                </figure>
            </div>
        </section>

        <!-- Operational Controls -->
        <section class="ais-section ais-light">
            <div class="page-container ais-control-layout">
                <div class="ais-control-intro">
                    <p class="ais-kicker">
                        <span aria-hidden="true"></span>
                        CONTROLLED SOC ASSISTANCE
                    </p>

                    <h2>
                        Automation with boundaries.
                        <span class="ais-gradient">
                            Accountability stays visible.
                        </span>
                    </h2>

                    <p>
                        Define what the workflow can access, what it
                        prepares and who approves the next action.
                    </p>

                    <div class="ais-control-seal" aria-hidden="true">
                        <i class="fa-solid fa-user-shield"></i>
                        <span>YOUR TEAM RETAINS OPERATIONAL AUTHORITY</span>
                    </div>
                </div>

                <div class="ais-control-grid">
                    <article>
                        <i class="fa-solid fa-lock" aria-hidden="true"></i>

                        <h3>Permitted sources</h3>

                        <p>
                            Confirm access rights and processing arrangements
                            before connecting security evidence.
                        </p>
                    </article>

                    <article>
                        <i class="fa-solid fa-link" aria-hidden="true"></i>

                        <h3>Preserved evidence</h3>

                        <p>
                            Keep source references connected and preserve
                            original records within the agreed workflow.
                        </p>
                    </article>

                    <article>
                        <i
                            class="fa-solid fa-user-shield"
                            aria-hidden="true"
                        ></i>

                        <h3>Named reviewers</h3>

                        <p>
                            Keep case ownership, escalation responsibilities
                            and consequential decisions explicit.
                        </p>
                    </article>

                    <article>
                        <i
                            class="fa-solid fa-file-shield"
                            aria-hidden="true"
                        ></i>

                        <h3>Approved procedures</h3>

                        <p>
                            Ground suggested checks and handovers in
                            accepted company knowledge and playbooks.
                        </p>
                    </article>

                    <article>
                        <i
                            class="fa-solid fa-magnifying-glass"
                            aria-hidden="true"
                        ></i>

                        <h3>Tested changes</h3>

                        <p>
                            Review proposed tuning against relevant scenarios
                            before approving operational changes.
                        </p>
                    </article>

                    <article>
                        <i
                            class="fa-solid fa-rotate-left"
                            aria-hidden="true"
                        ></i>

                        <h3>Fallback arrangements</h3>

                        <p>
                            Document limitations, version accepted changes
                            and preserve a manual operating route.
                        </p>
                    </article>
                </div>
            </div>
        </section>

        <!-- Starting Scope -->
        <section class="ais-section">
            <div class="page-container ais-split">
                <div>
                    <p class="ais-kicker">
                        <span aria-hidden="true"></span>
                        YOUR FIRST SOC WORKFLOW
                    </p>

                    <h2>
                        Find the repeated work.
                        <span>Define the first improvement.</span>
                    </h2>

                    <p>
                        Begin with one recurring investigation or handover
                        problem. Confirm the evidence, name the owner
                        and agree how the workflow will be evaluated.
                    </p>

                    <a
                        class="button button-outline"
                        href="{{ url('/contact') }}"
                    >
                        Discuss Your Starting Point
                        <i
                            class="fa-solid fa-arrow-up-right-from-square"
                            aria-hidden="true"
                        ></i>
                    </a>
                </div>

                <ol class="ais-deliverables">
                    <li>
                        <span class="ais-deliverable-number">01</span>

                        <div>
                            <h3>Confirm the foundation</h3>

                            <p>
                                Identify permitted sources, collection gaps,
                                integration dependencies and review responsibilities.
                            </p>
                        </div>
                    </li>

                    <li>
                        <span class="ais-deliverable-number">02</span>

                        <div>
                            <h3>Evaluate the workflow</h3>

                            <p>
                                Compare preparation effort, traceability,
                                factual accuracy and scenario coverage
                                against an agreed baseline.
                            </p>
                        </div>
                    </li>

                    <li>
                        <span class="ais-deliverable-number">03</span>

                        <div>
                            <h3>Hand over accepted work</h3>

                            <p>
                                Document the workflow, owners, known limitations,
                                support boundaries and fallback steps.
                            </p>
                        </div>
                    </li>
                </ol>
            </div>
        </section>

        <!-- Frequently Asked Questions -->
        <section class="ais-section ais-light">
            <div class="page-container ais-faq-layout">
                <div>
                    <p class="ais-kicker">
                        <span aria-hidden="true"></span>
                        BEFORE WE BEGIN
                    </p>

                    <h2>Questions from security teams.</h2>

                    <p>
                        Understand where automation helps and where
                        human review and operational ownership remain essential.
                    </p>

                    <a class="ais-text-link" href="{{ url('/contact') }}">
                        Discuss your requirement
                        <i
                            class="fa-solid fa-arrow-up-right-from-square"
                            aria-hidden="true"
                        ></i>
                    </a>
                </div>

                <div class="faq-list ais-faq">
                    <details class="faq-item">
                        <summary>
                            <span class="faq-num">01</span>
                            <span>Does SOC Automation replace our analysts?</span>
                            <span class="faq-toggle" aria-hidden="true">+</span>
                        </summary>

                        <p>
                            No. It supports evidence preparation, context and
                            agreed routing. Analysts retain responsibility
                            for reviewing cases and making security decisions.
                        </p>
                    </details>

                    <details class="faq-item">
                        <summary>
                            <span class="faq-num">02</span>
                            <span>Will cases be closed automatically?</span>
                            <span class="faq-toggle" aria-hidden="true">+</span>
                        </summary>

                        <p>
                            No. There is no silent case closure or unapproved
                            production response. Consequential actions require
                            the appropriate review and authorisation.
                        </p>
                    </details>

                    <details class="faq-item">
                        <summary>
                            <span class="faq-num">03</span>
                            <span>Can we use our current SIEM and case tools?</span>
                            <span class="faq-toggle" aria-hidden="true">+</span>
                        </summary>

                        <p>
                            The proposal confirms supported systems, available
                            APIs, licences, permissions and integration scope.
                            Compatibility with every platform is not assumed.
                        </p>
                    </details>

                    <details class="faq-item">
                        <summary>
                            <span class="faq-num">04</span>
                            <span>Can it help with recurring false positives?</span>
                            <span class="faq-toggle" aria-hidden="true">+</span>
                        </summary>

                        <p>
                            Reviewed cases can inform proposed tuning.
                            Changes must be tested for coverage and approved
                            before implementation. Blanket suppression is
                            not the intended approach.
                        </p>
                    </details>

                    <details class="faq-item">
                        <summary>
                            <span class="faq-num">05</span>
                            <span>Is this a complete managed SOC service?</span>
                            <span class="faq-toggle" aria-hidden="true">+</span>
                        </summary>

                        <p>
                            A scoped automation engagement does not by itself
                            provide a complete 24/7 managed SOC. Monitoring,
                            response ownership and support coverage must be
                            agreed explicitly.
                        </p>
                    </details>

                    <details class="faq-item">
                        <summary>
                            <span class="faq-num">06</span>
                            <span>Can we begin with one investigation workflow?</span>
                            <span class="faq-toggle" aria-hidden="true">+</span>
                        </summary>

                        <p>
                            Yes. Start with a repeatable problem, authorised
                            evidence and an accountable reviewer. If telemetry
                            or ownership is incomplete, begin with readiness
                            and engineering.
                        </p>
                    </details>
                </div>
            </div>
        </section>

        <!-- Final CTA -->
        <section class="ais-final">
            <img
                class="ais-final-image"
                src="{{ asset('assets/images/hero-network.webp') }}"
                alt=""
                loading="lazy"
                decoding="async"
            >

            <div class="page-container ais-final-inner">
                <div>
                    <p class="ais-kicker">
                        <span aria-hidden="true"></span>
                        YOUR NEXT STEP
                    </p>

                    <h2>
                        Start with the SOC task
                        <span>your team keeps repeating.</span>
                    </h2>

                    <p>
                        Bring the workflow, the evidence and the reviewer.
                        Together, define a useful first scope.
                    </p>
                </div>

                <div class="ais-final-actions">
                    <a
                        class="button button-primary"
                        href="{{ url('/contact') }}"
                    >
                        Talk to an Expert
                        <i
                            class="fa-solid fa-arrow-up-right-from-square"
                            aria-hidden="true"
                        ></i>
                    </a>

                    <a class="ais-final-link" href="{{ url('/services') }}">
                        Explore All Services
                        <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </section>

    </main>
@endsection
