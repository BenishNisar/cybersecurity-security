@extends('Layout.layout')

@section('body_class', 'services-page security-analytics-page')

@section('title', 'Security Analytics | OryvantAI')

@section('description', 'Turn validated security records into useful operational reporting. OryvantAI connects technical evidence, recurring weaknesses and accepted improvements to clearer management decisions.')

@push('preloads')
    <link
        rel="preload"
        as="image"
        href="{{ asset('assets/images/hero-network.webp') }}"
    >
@endpush

@section('content')
    <main id="main" class="ais-page">

        <!-- Security Analytics Hero -->
        <section class="ais-hero ais-hero-desktop" aria-labelledby="analytics-title">
            <img
                class="ais-hero-image"
                src="{{ asset('assets/images/servicesdesktop/security.webp') }}"
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
                    <span aria-current="page">Security Analytics</span>
                </nav>

                <div class="ais-hero-grid">
                    <div class="ais-hero-copy">
                        <p class="ais-kicker">
                            <span aria-hidden="true"></span>
                            SECURITY ANALYTICS
                        </p>

                        <h1 id="analytics-title">
                            Make security evidence
                            <span class="ais-gradient">
                                easier to act on.
                            </span>
                        </h1>

                        <p class="ais-lead">
                            Translate validated security records into useful
                            reporting. Help your team explain operational
                            patterns, recurring weaknesses and the decisions
                            that need attention.
                        </p>

                        <div class="button-row">
                            <a
                                class="button button-primary"
                                href="{{ url('/contact') }}"
                            >
                                Discuss Your Reporting Workflow
                                <i
                                    class="fa-solid fa-arrow-up-right-from-square"
                                    aria-hidden="true"
                                ></i>
                            </a>

                            <a
                                class="button button-secondary"
                                href="#analytics-approach"
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
                            <i class="fa-solid fa-chart-line"></i>
                        </div>

                        <span class="ais-visual-tag ais-tag-one">
                            <i class="fa-solid fa-database"></i>
                            VALIDATED RECORDS
                        </span>

                        <span class="ais-visual-tag ais-tag-two">
                            <i class="fa-solid fa-file-lines"></i>
                            REVIEWABLE REPORTING
                        </span>

                        <div class="ais-visual-caption">
                            <span>ONE FACTUAL RECORD</span>
                            <strong>Clearer evidence. More informed decisions.</strong>
                        </div>
                    </div>
                </div>

                <div class="ais-hero-bottom">
                    <p>Trusted calculations provide the metrics. AI helps explain them.</p>

                    <ul class="ais-principles">
                        <li>
                            <i
                                class="fa-solid fa-database"
                                aria-hidden="true"
                            ></i>
                            Validated records
                        </li>

                        <li>
                            <i
                                class="fa-solid fa-link"
                                aria-hidden="true"
                            ></i>
                            Visible sources
                        </li>

                        <li>
                            <i
                                class="fa-solid fa-user-shield"
                                aria-hidden="true"
                            ></i>
                            Human review
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Dedicated mobile hero -->
        <section class="ais-hero ais-hero-mobile" aria-labelledby="analytics-title-mobile">
            <img
                class="ais-hero-image"
                src="{{ asset('assets/images/servicesmobile/security.webp') }}"
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
                    <span aria-current="page">Security Analytics</span>
                </nav>

                <div class="ais-hero-grid">
                    <div class="ais-hero-copy">
                        <p class="ais-kicker">
                            <span aria-hidden="true"></span>
                            SECURITY ANALYTICS
                        </p>

                        <h1 id="analytics-title-mobile">
                            Make security evidence
                            <span class="ais-gradient">
                                easier to act on.
                            </span>
                        </h1>

                        <p class="ais-lead">
                            Translate validated security records into useful
                            reporting. Help your team explain operational
                            patterns, recurring weaknesses and the decisions
                            that need attention.
                        </p>

                        <div class="button-row">
                            <a
                                class="button button-primary"
                                href="{{ url('/contact') }}"
                            >
                                Discuss Your Reporting Workflow
                                <i
                                    class="fa-solid fa-arrow-up-right-from-square"
                                    aria-hidden="true"
                                ></i>
                            </a>

                            <a
                                class="button button-secondary"
                                href="#analytics-approach"
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
                            <i class="fa-solid fa-chart-line"></i>
                        </div>

                        <span class="ais-visual-tag ais-tag-one">
                            <i class="fa-solid fa-database"></i>
                            VALIDATED RECORDS
                        </span>

                        <span class="ais-visual-tag ais-tag-two">
                            <i class="fa-solid fa-file-lines"></i>
                            REVIEWABLE REPORTING
                        </span>

                        <div class="ais-visual-caption">
                            <span>ONE FACTUAL RECORD</span>
                            <strong>Clearer evidence. More informed decisions.</strong>
                        </div>
                    </div>
                </div>

                <div class="ais-hero-bottom">
                    <p>Trusted calculations provide the metrics. AI helps explain them.</p>

                    <ul class="ais-principles">
                        <li>
                            <i
                                class="fa-solid fa-database"
                                aria-hidden="true"
                            ></i>
                            Validated records
                        </li>

                        <li>
                            <i
                                class="fa-solid fa-link"
                                aria-hidden="true"
                            ></i>
                            Visible sources
                        </li>

                        <li>
                            <i
                                class="fa-solid fa-user-shield"
                                aria-hidden="true"
                            ></i>
                            Human review
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Service Introduction -->
        <section class="ais-section" id="analytics-approach">
            <div class="page-container">
                <div class="ais-split">
                    <div>
                        <p class="ais-kicker">
                            <span aria-hidden="true"></span>
                            FROM RECORDS TO UNDERSTANDING
                        </p>

                        <h2>
                            See what happened.
                            <span class="ais-gradient">
                                Know what needs a decision.
                            </span>
                        </h2>
                    </div>

                    <div class="ais-intro-copy">
                        <p>
                            Security reporting can become a reconstruction
                            exercise. Teams gather records, reconcile
                            explanations and translate technical findings
                            for different stakeholders.
                        </p>

                        <p>
                            OryvantAI helps shape a reporting workflow around
                            validated evidence, agreed calculations and
                            reviewed explanations. The aim is a useful
                            account of the work, its limitations and
                            the decisions still required.
                        </p>

                        <div class="ais-inline-note">
                            <i
                                class="fa-solid fa-chart-line"
                                aria-hidden="true"
                            ></i>

                            <p>
                                Technical evidence supports decisions.
                                It does not replace governance.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="ais-context-row">
                    <div>
                        <span class="ais-context-number">01</span>
                        <span>Validated records</span>
                    </div>

                    <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>

                    <div>
                        <span class="ais-context-number">02</span>
                        <span>Reviewed explanations</span>
                    </div>

                    <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>

                    <div>
                        <span class="ais-context-number">03</span>
                        <span>Informed decisions</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Analytics Capabilities -->
        <section class="ais-section ais-light">
            <div class="page-container">
                <div class="ais-section-top">
                    <div class="ais-heading">
                        <p class="ais-kicker">
                            <span aria-hidden="true"></span>
                            WHERE ANALYTICS CAN HELP
                        </p>

                        <h2>
                            Explain the work.
                            <span>Make the next decision clearer.</span>
                        </h2>
                    </div>

                    <p class="ais-section-intro">
                        Agree the reporting scope, evidence sources
                        and audience before deciding which outputs
                        will be useful.
                    </p>
                </div>

                <div class="ais-card-grid">
                    <article class="ais-card">
                        <div class="ais-card-top">
                            <span class="ais-icon">
                                <i
                                    class="fa-solid fa-chart-line"
                                    aria-hidden="true"
                                ></i>
                            </span>

                            <span class="ais-card-number">01</span>
                        </div>

                        <h3>Operational patterns</h3>

                        <p>
                            Explain coverage and reviewed workload
                            using the validated records available
                            within the agreed reporting scope.
                        </p>

                        <div class="ais-card-bottom">
                            <span>Context alongside the numbers</span>
                            <i
                                class="fa-solid fa-database"
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

                            <span class="ais-card-number">02</span>
                        </div>

                        <h3>Recurring weaknesses</h3>

                        <p>
                            Make repeated issues and unresolved evidence
                            gaps easier to discuss with the people
                            responsible for improvement.
                        </p>

                        <div class="ais-card-bottom">
                            <span>Limitations remain visible</span>
                            <i
                                class="fa-solid fa-link"
                                aria-hidden="true"
                            ></i>
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

                            <span class="ais-card-number">03</span>
                        </div>

                        <h3>Accepted improvements</h3>

                        <p>
                            Connect reviewed findings to approved changes
                            and named actions, keeping proposed work
                            distinct from accepted improvements.
                        </p>

                        <div class="ais-card-bottom">
                            <span>Clear ownership and review</span>
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
                                    class="fa-solid fa-file-lines"
                                    aria-hidden="true"
                                ></i>
                            </span>

                            <span class="ais-card-number">04</span>
                        </div>

                        <h3>Management reporting</h3>

                        <p>
                            Translate technical evidence into a useful
                            explanation of scope, findings, limitations
                            and decisions requiring attention.
                        </p>

                        <div class="ais-card-bottom">
                            <span>A consistent factual foundation</span>
                            <i
                                class="fa-solid fa-chart-line"
                                aria-hidden="true"
                            ></i>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- Reporting Workflow -->
        <section class="ais-section ais-dark">
            <div class="page-container">
                <div class="ais-section-top">
                    <div class="ais-heading">
                        <p class="ais-kicker">
                            <span aria-hidden="true"></span>
                            FROM EVIDENCE TO REPORTING
                        </p>

                        <h2>
                            Trust the calculation.
                            <span>Review the explanation.</span>
                        </h2>
                    </div>

                    <p class="ais-section-intro">
                        Keep source records, calculations and narrative
                        connected. AI helps explain validated information;
                        trusted calculations provide the metrics.
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

                        <h3>Confirm</h3>

                        <p>
                            Agree the reporting question, period,
                            permitted sources and responsible owners.
                        </p>
                    </li>

                    <li>
                        <div class="ais-workflow-top">
                            <span>02</span>
                            <i
                                class="fa-solid fa-magnifying-glass"
                                aria-hidden="true"
                            ></i>
                        </div>

                        <h3>Validate</h3>

                        <p>
                            Review available records and identify
                            missing evidence or collection limitations.
                        </p>
                    </li>

                    <li>
                        <div class="ais-workflow-top">
                            <span>03</span>
                            <i
                                class="fa-solid fa-chart-line"
                                aria-hidden="true"
                            ></i>
                        </div>

                        <h3>Explain</h3>

                        <p>
                            Prepare an account of the validated findings,
                            recurring patterns and accepted changes.
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
                            The authorised owner checks the report
                            and identifies the decisions requiring action.
                        </p>
                    </li>
                </ol>

                <div class="ais-evidence-bar">
                    <strong>KEEP THE REPORT REVIEWABLE</strong>
                    <span>Source references</span>
                    <span>Trusted calculations</span>
                    <span>Known limitations</span>
                    <span>Named owners</span>
                </div>

                <p class="ais-boundary-note">
                    <i class="fa-solid fa-lock" aria-hidden="true"></i>
                    An explanation must not conceal missing evidence
                    or turn an assumption into a fact.
                </p>
            </div>
        </section>

        <!-- Illustrative Reporting Scenario -->
        <section class="ais-section">
            <div class="page-container ais-split ais-example">
                <div>
                    <p class="ais-kicker">
                        <span aria-hidden="true"></span>
                        AN EXAMPLE IN PRACTICE
                    </p>

                    <h2>
                        A missing source.
                        <span class="ais-gradient">
                            An honest security report.
                        </span>
                    </h2>

                    <p>
                        Before preparing a management report, the team
                        checks its expected evidence sources. One source
                        has stopped sending during part of the reporting period.
                    </p>

                    <p>
                        The useful report identifies the affected period
                        and explains what the gap means for the findings.
                        It does not treat an absence of events as proof
                        that no threats occurred.
                    </p>

                    <div class="ais-example-points">
                        <span>
                            <i
                                class="fa-solid fa-database"
                                aria-hidden="true"
                            ></i>
                            Check the evidence foundation
                        </span>

                        <span>
                            <i
                                class="fa-solid fa-file-lines"
                                aria-hidden="true"
                            ></i>
                            Explain the limitation
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
                                    class="fa-solid fa-chart-line"
                                    aria-hidden="true"
                                ></i>
                            </span>

                            <div>
                                <span class="ais-small-label">
                                    ILLUSTRATIVE OUTPUT
                                </span>

                                <h3>Reporting limitation record</h3>
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
                                Scope
                            </dt>

                            <dd>
                                The agreed reporting period
                                and expected evidence sources.
                            </dd>
                        </div>

                        <div>
                            <dt>
                                <span aria-hidden="true"></span>
                                Observed
                            </dt>

                            <dd>
                                A source stopped sending during
                                an identified period.
                            </dd>
                        </div>

                        <div>
                            <dt>
                                <span aria-hidden="true"></span>
                                Limitation
                            </dt>

                            <dd>
                                Evidence from that source is incomplete
                                for the affected period.
                            </dd>
                        </div>

                        <div>
                            <dt>
                                <span aria-hidden="true"></span>
                                Next step
                            </dt>

                            <dd>
                                Record the data quality issue
                                and explain the limitation in the report.
                            </dd>
                        </div>
                    </dl>

                    <footer class="ais-case-footer">
                        <i
                            class="fa-solid fa-shield-halved"
                            aria-hidden="true"
                        ></i>
                        No events does not mean no threats.
                    </footer>
                </article>
            </div>
        </section>

        <!-- Brand Image -->
        <section
            class="ais-brand-section"
            aria-label="OryvantAI operational reporting approach"
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
                            class="fa-solid fa-chart-line"
                            aria-hidden="true"
                        ></i>
                        The same evidence can support different decisions
                        without creating conflicting versions of the facts.
                    </figcaption>
                </figure>
            </div>
        </section>

        <!-- Reporting Controls -->
        <section class="ais-section ais-light">
            <div class="page-container ais-control-layout">
                <div class="ais-control-intro">
                    <p class="ais-kicker">
                        <span aria-hidden="true"></span>
                        TRUSTED REPORTING
                    </p>

                    <h2>
                        Clear explanations.
                        <span class="ais-gradient">
                            A reviewable foundation.
                        </span>
                    </h2>

                    <p>
                        Useful reporting depends on evidence quality,
                        consistent calculations and explicit ownership.
                    </p>

                    <div class="ais-control-seal" aria-hidden="true">
                        <i class="fa-solid fa-shield-halved"></i>
                        <span>EVIDENCE SUPPORTS DECISIONS AND GOVERNANCE</span>
                    </div>
                </div>

                <div class="ais-control-grid">
                    <article>
                        <i
                            class="fa-solid fa-database"
                            aria-hidden="true"
                        ></i>

                        <h3>Validated records</h3>

                        <p>
                            Ground reporting in accepted evidence
                            and make the reporting scope explicit.
                        </p>
                    </article>

                    <article>
                        <i
                            class="fa-solid fa-chart-line"
                            aria-hidden="true"
                        ></i>

                        <h3>Trusted calculations</h3>

                        <p>
                            Use trusted calculations for metrics.
                            AI helps explain the resulting information.
                        </p>
                    </article>

                    <article>
                        <i
                            class="fa-solid fa-link"
                            aria-hidden="true"
                        ></i>

                        <h3>Source references</h3>

                        <p>
                            Keep the connection between reported
                            findings and the supporting evidence visible.
                        </p>
                    </article>

                    <article>
                        <i
                            class="fa-solid fa-magnifying-glass"
                            aria-hidden="true"
                        ></i>

                        <h3>Visible limitations</h3>

                        <p>
                            Explain missing sources, unresolved gaps
                            and the boundaries of the conclusions.
                        </p>
                    </article>

                    <article>
                        <i
                            class="fa-solid fa-user-shield"
                            aria-hidden="true"
                        ></i>

                        <h3>Named reviewers</h3>

                        <p>
                            Assign responsibility for reviewing
                            the report and acting on accepted findings.
                        </p>
                    </article>

                    <article>
                        <i
                            class="fa-solid fa-lock"
                            aria-hidden="true"
                        ></i>

                        <h3>Agreed access</h3>

                        <p>
                            Confirm permitted sources, processing
                            boundaries and the intended reporting audience.
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
                        YOUR FIRST REPORTING WORKFLOW
                    </p>

                    <h2>
                        Start with one report.
                        <span>Define the decision it supports.</span>
                    </h2>

                    <p>
                        Choose a recurring reporting task.
                        Agree the audience, sources and review owner
                        before building assistance around it.
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
                            <h3>Agree the reporting question</h3>

                            <p>
                                Define who needs the report, what decision
                                it supports and which period it covers.
                            </p>
                        </div>
                    </li>

                    <li>
                        <span class="ais-deliverable-number">02</span>

                        <div>
                            <h3>Confirm the evidence</h3>

                            <p>
                                Identify permitted sources, trusted
                                calculations and known information gaps.
                            </p>
                        </div>
                    </li>

                    <li>
                        <span class="ais-deliverable-number">03</span>

                        <div>
                            <h3>Evaluate and hand over</h3>

                            <p>
                                Review accuracy, traceability and preparation
                                effort for the same scope. Document ownership
                                and operating limitations.
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

                    <h2>Questions about security reporting.</h2>

                    <p>
                        Clarify the evidence, calculations and
                        review responsibilities before defining the output.
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
                            <span>Does AI calculate the security metrics?</span>
                            <span class="faq-toggle" aria-hidden="true">+</span>
                        </summary>

                        <p>
                            Trusted calculations provide the metrics.
                            AI helps explain validated records and results.
                            Calculations and explanations remain subject
                            to the agreed review process.
                        </p>
                    </details>

                    <details class="faq-item">
                        <summary>
                            <span class="faq-num">02</span>
                            <span>Can we use our existing reporting sources?</span>
                            <span class="faq-toggle" aria-hidden="true">+</span>
                        </summary>

                        <p>
                            Sources are confirmed for the specific scope.
                            Supported systems, available APIs, licences,
                            permissions and processing arrangements must
                            be agreed before integration.
                        </p>
                    </details>

                    <details class="faq-item">
                        <summary>
                            <span class="faq-num">03</span>
                            <span>Can leaders and analysts use the same evidence?</span>
                            <span class="faq-toggle" aria-hidden="true">+</span>
                        </summary>

                        <p>
                            Yes. The same factual foundation can support
                            different reporting views, with access and
                            detail shaped around the agreed audience.
                        </p>
                    </details>

                    <details class="faq-item">
                        <summary>
                            <span class="faq-num">04</span>
                            <span>What happens when evidence is missing?</span>
                            <span class="faq-toggle" aria-hidden="true">+</span>
                        </summary>

                        <p>
                            The limitation should remain visible.
                            Identify the affected sources or period
                            and explain how the gap limits the findings.
                            Missing events are not proof of an absence
                            of threats.
                        </p>
                    </details>

                    <details class="faq-item">
                        <summary>
                            <span class="faq-num">05</span>
                            <span>Does reporting replace governance decisions?</span>
                            <span class="faq-toggle" aria-hidden="true">+</span>
                        </summary>

                        <p>
                            No. Technical evidence supports decisions.
                            Authorised stakeholders retain responsibility
                            for governance, priorities and accepted actions.
                        </p>
                    </details>

                    <details class="faq-item">
                        <summary>
                            <span class="faq-num">06</span>
                            <span>Can we begin with one recurring report?</span>
                            <span class="faq-toggle" aria-hidden="true">+</span>
                        </summary>

                        <p>
                            Yes. Start with one defined reporting task,
                            permitted evidence and an accountable reviewer.
                            Agree acceptance criteria and confirm the
                            evidence foundation before implementation.
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
                        Bring one reporting challenge.
                        <span>Start with the decision.</span>
                    </h2>

                    <p>
                        Define the audience, evidence and review owner.
                        Then agree a useful first scope.
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
                        <i
                            class="fa-solid fa-arrow-right"
                            aria-hidden="true"
                        ></i>
                    </a>
                </div>
            </div>
        </section>

    </main>
@endsection
