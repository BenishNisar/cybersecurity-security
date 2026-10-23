@extends('Layout.layout')

@section('body_class', 'services-page ai-security-page')

@section('title', 'AI Powered Cybersecurity | OryvantAI')

@section('description', 'Bring approved company knowledge and security evidence into controlled AI workflows. Explore investigation assistance, reviewed procedures and accountable security decisions with OryvantAI.')

@push('preloads')
    <link
        rel="preload"
        as="image"
        href="{{ asset('assets/images/hero-network.webp') }}"
    >
@endpush

@section('content')
    <main id="main" class="ais-page">

        <!-- Image Hero -->
        <section class="ais-hero ais-hero-desktop" aria-labelledby="ais-title">
            <img
                class="ais-hero-image"
                src="{{ asset('assets/images/servicesdesktop/cybersecurity.webp') }}"
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
                    <span aria-current="page">AI Powered Cybersecurity</span>
                </nav>

                <div class="ais-hero-grid">
                    <div class="ais-hero-copy">
                        <p class="ais-kicker">
                            <span aria-hidden="true"></span>
                            AI POWERED CYBERSECURITY
                        </p>

                        <h1 id="ais-title">
                            Your security knowledge.
                            <span class="ais-gradient">
                                Put to work with AI.
                            </span>
                        </h1>

                        <p class="ais-lead">
                            Bring approved company knowledge into controlled
                            AI workflows. Give your team context they can
                            inspect, question and use.
                        </p>

                        <div class="button-row">
                            <a
                                class="button button-primary"
                                href="{{ url('/contact') }}"
                            >
                                Discuss Your Workflow
                                <i
                                    class="fa-solid fa-arrow-up-right-from-square"
                                    aria-hidden="true"
                                ></i>
                            </a>

                            <a
                                class="button button-secondary"
                                href="#ais-approach"
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
                            <i class="fa-solid fa-fingerprint"></i>
                        </div>

                        <span class="ais-visual-tag ais-tag-one">
                            <i class="fa-solid fa-link"></i>
                            SOURCE REFERENCES
                        </span>

                        <span class="ais-visual-tag ais-tag-two">
                            <i class="fa-solid fa-file-shield"></i>
                            APPROVED KNOWLEDGE
                        </span>

                        <div class="ais-visual-caption">
                            <span>CONTROLLED INTELLIGENCE</span>
                            <strong>Context before recommendation.</strong>
                        </div>
                    </div>
                </div>

                <div class="ais-hero-bottom">
                    <p>Built around your tools, people and procedures.</p>

                    <ul class="ais-principles">
                        <li>
                            <i class="fa-solid fa-link" aria-hidden="true"></i>
                            Evidence linked
                        </li>
                        <li>
                            <i class="fa-solid fa-user-shield" aria-hidden="true"></i>
                            Human reviewed
                        </li>
                        <li>
                            <i class="fa-solid fa-lock" aria-hidden="true"></i>
                            Scoped access
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Dedicated mobile hero -->
        <section class="ais-hero ais-hero-mobile" aria-labelledby="ais-title-mobile">
            <img
                class="ais-hero-image"
                src="{{ asset('assets/images/servicesmobile/ai_cybersecurity.webp') }}"
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
                    <span aria-current="page">AI Powered Cybersecurity</span>
                </nav>

                <div class="ais-hero-grid">
                    <div class="ais-hero-copy">
                        <p class="ais-kicker">
                            <span aria-hidden="true"></span>
                            AI POWERED CYBERSECURITY
                        </p>

                        <h1 id="ais-title-mobile">
                            Your security knowledge.
                            <span class="ais-gradient">
                                Put to work with AI.
                            </span>
                        </h1>

                        <p class="ais-lead">
                            Bring approved company knowledge into controlled
                            AI workflows. Give your team context they can
                            inspect, question and use.
                        </p>

                        <div class="button-row">
                            <a
                                class="button button-primary"
                                href="{{ url('/contact') }}"
                            >
                                Discuss Your Workflow
                                <i
                                    class="fa-solid fa-arrow-up-right-from-square"
                                    aria-hidden="true"
                                ></i>
                            </a>

                            <a
                                class="button button-secondary"
                                href="#ais-approach"
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
                            <i class="fa-solid fa-fingerprint"></i>
                        </div>

                        <span class="ais-visual-tag ais-tag-one">
                            <i class="fa-solid fa-link"></i>
                            SOURCE REFERENCES
                        </span>

                        <span class="ais-visual-tag ais-tag-two">
                            <i class="fa-solid fa-file-shield"></i>
                            APPROVED KNOWLEDGE
                        </span>

                        <div class="ais-visual-caption">
                            <span>CONTROLLED INTELLIGENCE</span>
                            <strong>Context before recommendation.</strong>
                        </div>
                    </div>
                </div>

                <div class="ais-hero-bottom">
                    <p>Built around your tools, people and procedures.</p>

                    <ul class="ais-principles">
                        <li>
                            <i class="fa-solid fa-link" aria-hidden="true"></i>
                            Evidence linked
                        </li>
                        <li>
                            <i class="fa-solid fa-user-shield" aria-hidden="true"></i>
                            Human reviewed
                        </li>
                        <li>
                            <i class="fa-solid fa-lock" aria-hidden="true"></i>
                            Scoped access
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Service Introduction -->
        <section class="ais-section" id="ais-approach">
            <div class="page-container">
                <div class="ais-split">
                    <div>
                        <p class="ais-kicker">
                            <span aria-hidden="true"></span>
                            BUILT AROUND YOUR OPERATIONS
                        </p>

                        <h2>
                            AI becomes useful when
                            <span class="ais-gradient">the context is yours.</span>
                        </h2>
                    </div>

                    <div class="ais-intro-copy">
                        <p>
                            An investigation rarely starts with everything
                            in one place. Relevant events, previous cases
                            and company procedures may sit across different
                            systems and teams.
                        </p>

                        <p>
                            OryvantAI shapes assistance around an agreed
                            workflow, connecting permitted evidence with
                            approved knowledge so your team can understand
                            the next step.
                        </p>

                        <div class="ais-inline-note">
                            <i class="fa-solid fa-fingerprint" aria-hidden="true"></i>
                            <p>
                                Your proposal defines supported systems,
                                deliverables and the operating boundary.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="ais-context-row">
                    <div>
                        <span class="ais-context-number">01</span>
                        <span>Your evidence</span>
                    </div>

                    <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>

                    <div>
                        <span class="ais-context-number">02</span>
                        <span>Approved knowledge</span>
                    </div>

                    <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>

                    <div>
                        <span class="ais-context-number">03</span>
                        <span>Reviewable assistance</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Capability Cards -->
        <section class="ais-section ais-light">
            <div class="page-container">
                <div class="ais-section-top">
                    <div class="ais-heading">
                        <p class="ais-kicker">
                            <span aria-hidden="true"></span>
                            WHERE AI CAN HELP
                        </p>

                        <h2>
                            Less searching for context.
                            <span>More informed security work.</span>
                        </h2>
                    </div>

                    <p class="ais-section-intro">
                        Select the assistance that improves a real task.
                        Each capability is defined and evaluated within
                        the agreed project scope.
                    </p>
                </div>

                <div class="ais-card-grid">
                    <article class="ais-card">
                        <div class="ais-card-top">
                            <span class="ais-icon">
                                <i
                                    class="fa-solid fa-magnifying-glass"
                                    aria-hidden="true"
                                ></i>
                            </span>
                            <span class="ais-card-number">01</span>
                        </div>

                        <h3>Investigation context</h3>

                        <p>
                            Assemble permitted events, case history
                            and asset context into a reviewable brief.
                        </p>

                        <div class="ais-card-bottom">
                            <span>Facts and open questions</span>
                            <i class="fa-solid fa-link" aria-hidden="true"></i>
                        </div>
                    </article>

                    <article class="ais-card">
                        <div class="ais-card-top">
                            <span class="ais-icon">
                                <i
                                    class="fa-solid fa-file-shield"
                                    aria-hidden="true"
                                ></i>
                            </span>
                            <span class="ais-card-number">02</span>
                        </div>

                        <h3>Procedure assistance</h3>

                        <p>
                            Ground recommendations in approved procedures,
                            roles and verified incident lessons.
                        </p>

                        <div class="ais-card-bottom">
                            <span>Owner review before publication</span>
                            <i class="fa-solid fa-user-shield" aria-hidden="true"></i>
                        </div>
                    </article>

                    <article class="ais-card">
                        <div class="ais-card-top">
                            <span class="ais-icon">
                                <i
                                    class="fa-solid fa-book-open"
                                    aria-hidden="true"
                                ></i>
                            </span>
                            <span class="ais-card-number">03</span>
                        </div>

                        <h3>Reusable knowledge</h3>

                        <p>
                            Prepare procedural answers and sanitised
                            scenario exercises from approved experience.
                        </p>

                        <div class="ais-card-bottom">
                            <span>Connected to approved sources</span>
                            <i class="fa-solid fa-file-lines" aria-hidden="true"></i>
                        </div>
                    </article>

                    <article class="ais-card">
                        <div class="ais-card-top">
                            <span class="ais-icon">
                                <i
                                    class="fa-solid fa-chart-line"
                                    aria-hidden="true"
                                ></i>
                            </span>
                            <span class="ais-card-number">04</span>
                        </div>

                        <h3>Clearer reporting</h3>

                        <p>
                            Explain validated records, recurring weaknesses
                            and accepted changes for operational decisions.
                        </p>

                        <div class="ais-card-bottom">
                            <span>Trusted calculations provide metrics</span>
                            <i class="fa-solid fa-database" aria-hidden="true"></i>
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
                            FROM EVIDENCE TO A DECISION
                        </p>

                        <h2>
                            The next step
                            <span>comes with evidence.</span>
                        </h2>
                    </div>

                    <p class="ais-section-intro">
                        A useful brief explains what is known, what remains
                        uncertain and which checks deserve attention.
                        Your analyst owns the decision.
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
                            Permitted events, asset context and relevant
                            case history.
                        </p>
                    </li>

                    <li>
                        <div class="ais-workflow-top">
                            <span>02</span>
                            <i class="fa-solid fa-link" aria-hidden="true"></i>
                        </div>
                        <h3>Explain</h3>
                        <p>
                            A time aligned brief with references to
                            the supporting sources.
                        </p>
                    </li>

                    <li>
                        <div class="ais-workflow-top">
                            <span>03</span>
                            <i class="fa-solid fa-file-shield" aria-hidden="true"></i>
                        </div>
                        <h3>Recommend</h3>
                        <p>
                            Suggested next checks and the relevant
                            approved procedure.
                        </p>
                    </li>

                    <li>
                        <div class="ais-workflow-top">
                            <span>04</span>
                            <i class="fa-solid fa-user-shield" aria-hidden="true"></i>
                        </div>
                        <h3>Review</h3>
                        <p>
                            Your analyst verifies context and decides
                            what happens next.
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

        <!-- Illustrative Investigation -->
        <section class="ais-section">
            <div class="page-container ais-split ais-example">
                <div>
                    <p class="ais-kicker">
                        <span aria-hidden="true"></span>
                        AN EXAMPLE IN PRACTICE
                    </p>

                    <h2>
                        One identity alert.
                        <span class="ais-gradient">A clearer investigation.</span>
                    </h2>

                    <p>
                        A new device, unusual access and a privileged account.
                        The relevant context is scattered across security systems.
                    </p>

                    <p>
                        An agreed workflow can bring permitted records together,
                        compare the available context and flag what still needs
                        verification.
                    </p>

                    <div class="ais-example-points">
                        <span>
                            <i class="fa-solid fa-link" aria-hidden="true"></i>
                            Sources stay visible
                        </span>
                        <span>
                            <i class="fa-solid fa-user-shield" aria-hidden="true"></i>
                            The analyst decides
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
                                <i class="fa-solid fa-fingerprint" aria-hidden="true"></i>
                            </span>

                            <div>
                                <span class="ais-small-label">ILLUSTRATIVE OUTPUT</span>
                                <h3>Investigation brief</h3>
                            </div>
                        </div>

                        <span class="ais-review-label">FOR HUMAN REVIEW</span>
                    </div>

                    <dl class="ais-case-record">
                        <div>
                            <dt>
                                <span aria-hidden="true"></span>
                                Observed
                            </dt>
                            <dd>Permitted identity and endpoint records.</dd>
                        </div>

                        <div>
                            <dt>
                                <span aria-hidden="true"></span>
                                Context
                            </dt>
                            <dd>Asset roles and approved working patterns.</dd>
                        </div>

                        <div>
                            <dt>
                                <span aria-hidden="true"></span>
                                Unknown
                            </dt>
                            <dd>Missing evidence and unresolved explanations.</dd>
                        </div>

                        <div>
                            <dt>
                                <span aria-hidden="true"></span>
                                Next step
                            </dt>
                            <dd>Suggested checks for the analyst to verify.</dd>
                        </div>
                    </dl>

                    <footer class="ais-case-footer">
                        <i class="fa-solid fa-user-shield" aria-hidden="true"></i>
                        The analyst owns the disposition.
                    </footer>
                </article>
            </div>
        </section>

        <!-- Brand Image -->
        <section class="ais-brand-section" aria-label="OryvantAI operational approach">
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
                        <i class="fa-solid fa-shield-halved" aria-hidden="true"></i>
                        Built around the evidence and experience your team trusts.
                    </figcaption>
                </figure>
            </div>
        </section>

        <!-- Responsible AI -->
        <section class="ais-section ais-light">
            <div class="page-container ais-control-layout">
                <div class="ais-control-intro">
                    <p class="ais-kicker">
                        <span aria-hidden="true"></span>
                        RESPONSIBLE AI
                    </p>

                    <h2>
                        Useful intelligence.
                        <span class="ais-gradient">Visible controls.</span>
                    </h2>

                    <p>
                        Agree the controls, test the workflow and preserve
                        an accountable human decision.
                    </p>

                    <div class="ais-control-seal" aria-hidden="true">
                        <i class="fa-solid fa-shield-halved"></i>
                        <span>CONTROL IS PART OF THE SOLUTION</span>
                    </div>
                </div>

                <div class="ais-control-grid">
                    <article>
                        <i class="fa-solid fa-link" aria-hidden="true"></i>
                        <h3>Traceable answers</h3>
                        <p>
                            Separate observations, inferences and unanswered
                            questions. Keep source references visible.
                        </p>
                    </article>

                    <article>
                        <i class="fa-solid fa-lock" aria-hidden="true"></i>
                        <h3>Enforced permissions</h3>
                        <p>
                            Systems enforce access and action rights.
                            AI does not grant itself permission.
                        </p>
                    </article>

                    <article>
                        <i class="fa-solid fa-file-shield" aria-hidden="true"></i>
                        <h3>Agreed processing</h3>
                        <p>
                            Confirm the model, region, retention and
                            training use terms for the engagement.
                        </p>
                    </article>

                    <article>
                        <i class="fa-solid fa-users" aria-hidden="true"></i>
                        <h3>Client separation</h3>
                        <p>
                            No learning across clients from confidential
                            data by default.
                        </p>
                    </article>

                    <article>
                        <i class="fa-solid fa-code" aria-hidden="true"></i>
                        <h3>Hostile input testing</h3>
                        <p>
                            Treat logs and documents as potentially
                            untrusted inputs during evaluation.
                        </p>
                    </article>

                    <article>
                        <i class="fa-solid fa-rotate-left" aria-hidden="true"></i>
                        <h3>A manual route</h3>
                        <p>
                            Version accepted changes and preserve
                            rollback and fallback arrangements.
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
                        YOUR FIRST SCOPE
                    </p>

                    <h2>
                        One workflow.
                        <span>Clear responsibilities.</span>
                    </h2>

                    <p>
                        Start with a recurring problem, usable evidence
                        and an accountable owner. You do not need to
                        replace your security environment to begin.
                    </p>

                    <a
                        class="button button-outline"
                        href="{{ url('/contact') }}"
                    >
                        Define Your Starting Point
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
                            <h3>Sources and boundaries</h3>
                            <p>
                                Confirm permissions, dependencies, supported
                                systems and processing arrangements.
                            </p>
                        </div>
                    </li>

                    <li>
                        <span class="ais-deliverable-number">02</span>
                        <div>
                            <h3>A workflow to evaluate</h3>
                            <p>
                                Agree the outputs, reviewers and acceptance
                                criteria before production use.
                            </p>
                        </div>
                    </li>

                    <li>
                        <span class="ais-deliverable-number">03</span>
                        <div>
                            <h3>An operating handover</h3>
                            <p>
                                Document ownership, known limitations,
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

                    <h2>Questions worth asking.</h2>

                    <p>
                        Start with a clear understanding of the scope,
                        the evidence and who remains responsible.
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
                            <span>Is this a standalone software product?</span>
                            <span class="faq-toggle" aria-hidden="true">+</span>
                        </summary>
                        <p>
                            This is a custom service scope. Your proposal
                            defines the workflow, supported systems,
                            deliverables and service boundary.
                        </p>
                    </details>

                    <details class="faq-item">
                        <summary>
                            <span class="faq-num">02</span>
                            <span>Can we use our own procedures?</span>
                            <span class="faq-toggle" aria-hidden="true">+</span>
                        </summary>
                        <p>
                            Approved procedures, roles and permitted case
                            records can ground the assistance. Knowledge
                            ownership, access and version control remain explicit.
                        </p>
                    </details>

                    <details class="faq-item">
                        <summary>
                            <span class="faq-num">03</span>
                            <span>Does AI make the final security decision?</span>
                            <span class="faq-toggle" aria-hidden="true">+</span>
                        </summary>
                        <p>
                            No. Analysts and authorised operational owners
                            review the context and retain responsibility
                            for consequential decisions and actions.
                        </p>
                    </details>

                    <details class="faq-item">
                        <summary>
                            <span class="faq-num">04</span>
                            <span>Can we keep our existing security tools?</span>
                            <span class="faq-toggle" aria-hidden="true">+</span>
                        </summary>
                        <p>
                            Integration depends on your systems, available
                            APIs, licences, data volumes and permissions.
                            Each connection is confirmed within the agreed scope.
                        </p>
                    </details>

                    <details class="faq-item">
                        <summary>
                            <span class="faq-num">05</span>
                            <span>What if our evidence foundation is incomplete?</span>
                            <span class="faq-toggle" aria-hidden="true">+</span>
                        </summary>
                        <p>
                            Begin with readiness and engineering. AI assistance
                            should follow usable telemetry, ownership and
                            procedures rather than conceal missing foundations.
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
                        Bring us one workflow
                        <span>worth improving.</span>
                    </h2>

                    <p>
                        An investigation. A procedure. A report.
                        Define the evidence and decision owner first.
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
