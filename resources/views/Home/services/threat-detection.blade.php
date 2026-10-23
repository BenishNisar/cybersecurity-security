@extends('Layout.layout')

@section('body_class', 'services-page threat-detection-page')

@section('title', 'Threat Detection | OryvantAI')

@section('description', 'Explain suspicious activity, add investigation context and test detection logic. OryvantAI supports informed prioritisation with reviewable evidence and controlled detection improvements.')

@push('preloads')
    <link
        rel="preload"
        as="image"
        href="{{ asset('assets/images/hero-network.webp') }}"
    >
@endpush

@section('content')
    <main id="main" class="ais-page threat-page">

        <!-- Threat Detection Hero -->
        <section class="ais-hero ais-hero-desktop" aria-labelledby="threat-title">
            <img
                class="ais-hero-image"
                src="{{ asset('assets/images/servicesdesktop/threat-detection.webp') }}"
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
                    <span aria-current="page">Threat Detection</span>
                </nav>

                <div class="ais-hero-grid">
                    <div class="ais-hero-copy">
                        <p class="ais-kicker">
                            <span aria-hidden="true"></span>
                            THREAT DETECTION
                        </p>

                        <h1 id="threat-title">
                            Understand the signal.
                            <span class="ais-gradient">
                                Question it with evidence.
                            </span>
                        </h1>

                        <p class="ais-lead">
                            Explain suspicious activity, bring relevant
                            context into the investigation and test detection
                            logic before accepting a change.
                        </p>

                        <div class="button-row">
                            <a
                                class="button button-primary"
                                href="{{ url('/contact') }}"
                            >
                                Discuss Your Detection Workflow
                                <i
                                    class="fa-solid fa-arrow-up-right-from-square"
                                    aria-hidden="true"
                                ></i>
                            </a>

                            <a
                                class="button button-secondary"
                                href="#threat-approach"
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
                            <i class="fa-solid fa-crosshairs"></i>
                        </div>

                        <span class="ais-visual-tag ais-tag-one">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            INVESTIGATION CONTEXT
                        </span>

                        <span class="ais-visual-tag ais-tag-two">
                            <i class="fa-solid fa-shield-halved"></i>
                            TESTED DETECTION LOGIC
                        </span>

                        <div class="ais-visual-caption">
                            <span>EVIDENCE BEFORE CONCLUSION</span>
                            <strong>A signal deserves an explanation.</strong>
                        </div>
                    </div>
                </div>

                <div class="ais-hero-bottom">
                    <p>Support prioritisation without manufacturing certainty.</p>

                    <ul class="ais-principles">
                        <li>
                            <i class="fa-solid fa-link" aria-hidden="true"></i>
                            Source linked
                        </li>

                        <li>
                            <i
                                class="fa-solid fa-magnifying-glass"
                                aria-hidden="true"
                            ></i>
                            Context reviewed
                        </li>

                        <li>
                            <i
                                class="fa-solid fa-user-shield"
                                aria-hidden="true"
                            ></i>
                            Human decisions
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Dedicated mobile hero -->
        <section class="ais-hero ais-hero-mobile" aria-labelledby="threat-title-mobile">
            <img
                class="ais-hero-image"
                src="{{ asset('assets/images/servicesmobile/threat-detection.webp') }}"
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
                    <span aria-current="page">Threat Detection</span>
                </nav>

                <div class="ais-hero-grid">
                    <div class="ais-hero-copy">
                        <p class="ais-kicker">
                            <span aria-hidden="true"></span>
                            THREAT DETECTION
                        </p>

                        <h1 id="threat-title-mobile">
                            Understand the signal.
                            <span class="ais-gradient">
                                Question it with evidence.
                            </span>
                        </h1>

                        <p class="ais-lead">
                            Explain suspicious activity, bring relevant
                            context into the investigation and test detection
                            logic before accepting a change.
                        </p>

                        <div class="button-row">
                            <a
                                class="button button-primary"
                                href="{{ url('/contact') }}"
                            >
                                Discuss Your Detection Workflow
                                <i
                                    class="fa-solid fa-arrow-up-right-from-square"
                                    aria-hidden="true"
                                ></i>
                            </a>

                            <a
                                class="button button-secondary"
                                href="#threat-approach"
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
                            <i class="fa-solid fa-crosshairs"></i>
                        </div>

                        <span class="ais-visual-tag ais-tag-one">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            INVESTIGATION CONTEXT
                        </span>

                        <span class="ais-visual-tag ais-tag-two">
                            <i class="fa-solid fa-shield-halved"></i>
                            TESTED DETECTION LOGIC
                        </span>

                        <div class="ais-visual-caption">
                            <span>EVIDENCE BEFORE CONCLUSION</span>
                            <strong>A signal deserves an explanation.</strong>
                        </div>
                    </div>
                </div>

                <div class="ais-hero-bottom">
                    <p>Support prioritisation without manufacturing certainty.</p>

                    <ul class="ais-principles">
                        <li>
                            <i class="fa-solid fa-link" aria-hidden="true"></i>
                            Source linked
                        </li>

                        <li>
                            <i
                                class="fa-solid fa-magnifying-glass"
                                aria-hidden="true"
                            ></i>
                            Context reviewed
                        </li>

                        <li>
                            <i
                                class="fa-solid fa-user-shield"
                                aria-hidden="true"
                            ></i>
                            Human decisions
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Service Introduction -->
        <section class="ais-section" id="threat-approach">
            <div class="page-container">
                <div class="ais-split">
                    <div>
                        <p class="ais-kicker">
                            <span aria-hidden="true"></span>
                            CONTEXT CHANGES THE INVESTIGATION
                        </p>

                        <h2>
                            Unusual activity
                            <span class="ais-gradient">
                                needs careful interpretation.
                            </span>
                        </h2>
                    </div>

                    <div class="ais-intro-copy">
                        <p>
                            A deviation can deserve attention without proving
                            an attack. Your team needs the relevant events,
                            asset roles and approved operating context to
                            decide which checks come next.
                        </p>

                        <p>
                            OryvantAI helps explain suspicious activity and
                            test detection logic within agreed scenarios.
                            Findings remain connected to evidence, with
                            uncertainty and missing information made visible.
                        </p>

                        <div class="ais-inline-note">
                            <i
                                class="fa-solid fa-crosshairs"
                                aria-hidden="true"
                            ></i>

                            <p>
                                An anomaly is not proof of an attack.
                                Analysts verify the context and retain
                                decision ownership.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="ais-context-row">
                    <div>
                        <span class="ais-context-number">
                            <i
                                class="fa-solid fa-crosshairs"
                                aria-hidden="true"
                            ></i>
                        </span>
                        <span>Suspicious activity</span>
                    </div>

                    <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>

                    <div>
                        <span class="ais-context-number">
                            <i
                                class="fa-solid fa-link"
                                aria-hidden="true"
                            ></i>
                        </span>
                        <span>Relevant evidence</span>
                    </div>

                    <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>

                    <div>
                        <span class="ais-context-number">
                            <i
                                class="fa-solid fa-user-shield"
                                aria-hidden="true"
                            ></i>
                        </span>
                        <span>Reviewed next steps</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Detection Assistance -->
        <section class="ais-section ais-light">
            <div class="page-container">
                <div class="ais-section-top">
                    <div class="ais-heading">
                        <p class="ais-kicker">
                            <span aria-hidden="true"></span>
                            WHERE ASSISTANCE CAN HELP
                        </p>

                        <h2>
                            Give the signal context.
                            <span>Give the reviewer evidence.</span>
                        </h2>
                    </div>

                    <p class="ais-section-intro">
                        Focus on agreed detection scenarios, reviewable
                        explanations and carefully evaluated improvements.
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

                        <h3>Suspicious activity context</h3>

                        <p>
                            Bring permitted events, relevant case history
                            and asset context into the investigation.
                        </p>

                        <div class="ais-card-bottom">
                            <span>Evidence before interpretation</span>
                            <i class="fa-solid fa-link" aria-hidden="true"></i>
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
                            <span class="ais-card-number">02</span>
                        </div>

                        <h3>Behaviour assistance</h3>

                        <p>
                            Show meaningful deviations in agreed scenarios
                            for an analyst to examine.
                        </p>

                        <div class="ais-card-bottom">
                            <span>An anomaly is not an attack verdict</span>
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
                                    class="fa-solid fa-code"
                                    aria-hidden="true"
                                ></i>
                            </span>
                            <span class="ais-card-number">03</span>
                        </div>

                        <h3>Detection logic testing</h3>

                        <p>
                            Evaluate proposed logic against agreed scenarios
                            and document the findings and limitations.
                        </p>

                        <div class="ais-card-bottom">
                            <span>Review coverage before accepting changes</span>
                            <i
                                class="fa-solid fa-shield-halved"
                                aria-hidden="true"
                            ></i>
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
                            <span class="ais-card-number">04</span>
                        </div>

                        <h3>False positive assistance</h3>

                        <p>
                            Use reviewed cases to propose narrowly scoped
                            tuning for recurring benign patterns.
                        </p>

                        <div class="ais-card-bottom">
                            <span>Test before approval. No blanket suppression.</span>
                            <i
                                class="fa-solid fa-magnifying-glass"
                                aria-hidden="true"
                            ></i>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- Review Workflow -->
        <section class="ais-section ais-dark">
            <div class="page-container">
                <div class="ais-section-top">
                    <div class="ais-heading">
                        <p class="ais-kicker">
                            <span aria-hidden="true"></span>
                            FROM SIGNAL TO REVIEW
                        </p>

                        <h2>
                            Explain what is known.
                            <span>Keep uncertainty visible.</span>
                        </h2>
                    </div>

                    <p class="ais-section-intro">
                        A useful explanation separates the observed activity
                        from possible interpretations and the checks still
                        needed to reach a decision.
                    </p>
                </div>

                <ol class="ais-workflow">
                    <li>
                        <div class="ais-workflow-top">
                            <span>01</span>
                            <i
                                class="fa-solid fa-database"
                                aria-hidden="true"
                            ></i>
                        </div>

                        <h3>Gather</h3>

                        <p>
                            Assemble the permitted records relevant
                            to the agreed detection scenario.
                        </p>
                    </li>

                    <li>
                        <div class="ais-workflow-top">
                            <span>02</span>
                            <i
                                class="fa-solid fa-link"
                                aria-hidden="true"
                            ></i>
                        </div>

                        <h3>Contextualise</h3>

                        <p>
                            Connect asset roles, reviewed cases
                            and approved operating knowledge.
                        </p>
                    </li>

                    <li>
                        <div class="ais-workflow-top">
                            <span>03</span>
                            <i
                                class="fa-solid fa-magnifying-glass"
                                aria-hidden="true"
                            ></i>
                        </div>

                        <h3>Question</h3>

                        <p>
                            Highlight missing evidence, alternative
                            explanations and relevant next checks.
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
                            The authorised analyst verifies context
                            and decides the next action.
                        </p>
                    </li>
                </ol>

                <div class="ais-evidence-bar">
                    <strong>KEEP THE REASONING REVIEWABLE</strong>
                    <span>Observed facts</span>
                    <span>Source links</span>
                    <span>Open questions</span>
                    <span>Named reviewer</span>
                </div>

                <p class="ais-boundary-note">
                    <i class="fa-solid fa-lock" aria-hidden="true"></i>
                    No silent case closure or unapproved production response.
                </p>
            </div>
        </section>

        <!-- Illustrative Identity Scenario -->
        <section class="ais-section">
            <div class="page-container ais-split ais-example">
                <div>
                    <p class="ais-kicker">
                        <span aria-hidden="true"></span>
                        AN EXAMPLE IN PRACTICE
                    </p>

                    <h2>
                        New device. Unusual access.
                        <span class="ais-gradient">
                            Investigate the context.
                        </span>
                    </h2>

                    <p>
                        An identity alert involves a privileged account
                        and activity that differs from the expected pattern.
                        The relevant evidence sits across security systems.
                    </p>

                    <p>
                        A source linked brief assembles permitted identity
                        and endpoint records, compares the available context
                        and flags unresolved explanations for the analyst.
                    </p>

                    <div class="ais-example-points">
                        <span>
                            <i
                                class="fa-solid fa-fingerprint"
                                aria-hidden="true"
                            ></i>
                            Review identity context
                        </span>

                        <span>
                            <i
                                class="fa-solid fa-user-shield"
                                aria-hidden="true"
                            ></i>
                            Verify before deciding
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
                                    class="fa-solid fa-fingerprint"
                                    aria-hidden="true"
                                ></i>
                            </span>

                            <div>
                                <span class="ais-small-label">
                                    ILLUSTRATIVE OUTPUT
                                </span>
                                <h3>Signal review brief</h3>
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
                            <dd>
                                Permitted identity and endpoint records
                                relevant to the alert.
                            </dd>
                        </div>

                        <div>
                            <dt>
                                <span aria-hidden="true"></span>
                                Context
                            </dt>
                            <dd>
                                Asset roles and approved working patterns.
                            </dd>
                        </div>

                        <div>
                            <dt>
                                <span aria-hidden="true"></span>
                                Unknown
                            </dt>
                            <dd>
                                Missing evidence and unresolved explanations.
                            </dd>
                        </div>

                        <div>
                            <dt>
                                <span aria-hidden="true"></span>
                                Next step
                            </dt>
                            <dd>
                                Suggested checks for the analyst to verify
                                before determining the disposition.
                            </dd>
                        </div>
                    </dl>

                    <footer class="ais-case-footer">
                        <i
                            class="fa-solid fa-user-shield"
                            aria-hidden="true"
                        ></i>
                        The analyst owns the security decision.
                    </footer>
                </article>
            </div>
        </section>

        <!-- Brand Image -->
        <section
            class="ais-brand-section"
            aria-label="OryvantAI evidence based security operations"
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
                            class="fa-solid fa-crosshairs"
                            aria-hidden="true"
                        ></i>
                        More informed prioritisation begins with
                        evidence your team can review.
                    </figcaption>
                </figure>
            </div>
        </section>

        <!-- Detection Controls -->
        <section class="ais-section ais-light">
            <div class="page-container ais-control-layout">
                <div class="ais-control-intro">
                    <p class="ais-kicker">
                        <span aria-hidden="true"></span>
                        CONTROLLED DETECTION IMPROVEMENT
                    </p>

                    <h2>
                        Test the logic.
                        <span class="ais-gradient">
                            Preserve the accountability.
                        </span>
                    </h2>

                    <p>
                        Review explanations and proposed changes against
                        the agreed evidence, scenarios and operating boundary.
                    </p>

                    <div class="ais-control-seal" aria-hidden="true">
                        <i class="fa-solid fa-shield-halved"></i>
                        <span>CONFIDENCE MUST COME FROM EVIDENCE</span>
                    </div>
                </div>

                <div class="ais-control-grid">
                    <article>
                        <i class="fa-solid fa-lock" aria-hidden="true"></i>

                        <h3>Permitted evidence</h3>

                        <p>
                            Connect only authorised sources within
                            agreed access and processing arrangements.
                        </p>
                    </article>

                    <article>
                        <i class="fa-solid fa-link" aria-hidden="true"></i>

                        <h3>Traceable explanations</h3>

                        <p>
                            Keep observations, inferences and unanswered
                            questions connected to their sources.
                        </p>
                    </article>

                    <article>
                        <i
                            class="fa-solid fa-chart-line"
                            aria-hidden="true"
                        ></i>

                        <h3>Bounded behaviour context</h3>

                        <p>
                            Examine deviations within agreed scenarios.
                            Unusual activity alone is not proof of an attack.
                        </p>
                    </article>

                    <article>
                        <i class="fa-solid fa-code" aria-hidden="true"></i>

                        <h3>Tested detection changes</h3>

                        <p>
                            Evaluate proposed logic and coverage
                            before accepting operational changes.
                        </p>
                    </article>

                    <article>
                        <i
                            class="fa-solid fa-shield-halved"
                            aria-hidden="true"
                        ></i>

                        <h3>Protected critical coverage</h3>

                        <p>
                            Review tuning proposals carefully.
                            Avoid blanket suppression of recurring patterns.
                        </p>
                    </article>

                    <article>
                        <i
                            class="fa-solid fa-user-shield"
                            aria-hidden="true"
                        ></i>

                        <h3>Named decision owners</h3>

                        <p>
                            Keep escalation, response approval and
                            acceptance with authorised people.
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
                        YOUR FIRST DETECTION WORKFLOW
                    </p>

                    <h2>
                        Start with one scenario.
                        <span>Make the review meaningful.</span>
                    </h2>

                    <p>
                        Choose a recurring investigation question or
                        detection pattern. Confirm the evidence,
                        the reviewer and the acceptance criteria.
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
                            <h3>Agree the scenario</h3>

                            <p>
                                Define the question, permitted sources,
                                relevant context and decision owner.
                            </p>
                        </div>
                    </li>

                    <li>
                        <span class="ais-deliverable-number">02</span>

                        <div>
                            <h3>Evaluate the evidence and logic</h3>

                            <p>
                                Review traceability, factual accuracy,
                                scenario performance and known limitations.
                            </p>
                        </div>
                    </li>

                    <li>
                        <span class="ais-deliverable-number">03</span>

                        <div>
                            <h3>Record accepted improvements</h3>

                            <p>
                                Document reviewed findings, proposed tuning
                                and the responsibilities for approved changes.
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

                    <h2>Questions about detection assistance.</h2>

                    <p>
                        Understand what the evidence supports,
                        which scenarios are in scope and who decides.
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
                            <span>Does unusual behaviour prove an attack?</span>
                            <span class="faq-toggle" aria-hidden="true">+</span>
                        </summary>

                        <p>
                            No. A deviation is a reason to examine context.
                            Analysts need supporting evidence and relevant
                            checks before reaching a conclusion.
                        </p>
                    </details>

                    <details class="faq-item">
                        <summary>
                            <span class="faq-num">02</span>
                            <span>Can AI automatically contain an incident?</span>
                            <span class="faq-toggle" aria-hidden="true">+</span>
                        </summary>

                        <p>
                            This service does not promise autonomous containment.
                            Consequential production actions require the
                            appropriate review and explicit authorisation.
                        </p>
                    </details>

                    <details class="faq-item">
                        <summary>
                            <span class="faq-num">03</span>
                            <span>Can you help with recurring false positives?</span>
                            <span class="faq-toggle" aria-hidden="true">+</span>
                        </summary>

                        <p>
                            Reviewed cases can inform narrowly scoped tuning
                            proposals. Coverage must be tested before a change
                            is approved. Blanket suppression is not the approach.
                        </p>
                    </details>

                    <details class="faq-item">
                        <summary>
                            <span class="faq-num">04</span>
                            <span>Will this detect every threat?</span>
                            <span class="faq-toggle" aria-hidden="true">+</span>
                        </summary>

                        <p>
                            No universal detection guarantee is made. Results
                            depend on available evidence, agreed scenarios
                            and tested logic. Known limitations remain visible.
                        </p>
                    </details>

                    <details class="faq-item">
                        <summary>
                            <span class="faq-num">05</span>
                            <span>Can we keep our existing detection tools?</span>
                            <span class="faq-toggle" aria-hidden="true">+</span>
                        </summary>

                        <p>
                            The service builds on an agreed workflow around
                            your environment. Supported systems, APIs, licences
                            and permissions are confirmed during scoping.
                        </p>
                    </details>

                    <details class="faq-item">
                        <summary>
                            <span class="faq-num">06</span>
                            <span>Can we begin with one detection scenario?</span>
                            <span class="faq-toggle" aria-hidden="true">+</span>
                        </summary>

                        <p>
                            Yes. Start with a defined question, authorised
                            evidence and an accountable reviewer. If the
                            evidence foundation is incomplete, begin with
                            readiness and engineering.
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
                        Bring one detection question.
                        <span>Start with the evidence.</span>
                    </h2>

                    <p>
                        Define the scenario, sources and reviewer.
                        Then agree a useful first improvement.
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
