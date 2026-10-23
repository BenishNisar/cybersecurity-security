@extends('Layout.layout')

@section('body_class', 'services-page siem-automation-page')

@section('title', 'SIEM Automation | OryvantAI')

@section('description', 'Improve agreed log integrations, query preparation and collection visibility. OryvantAI strengthens your SIEM evidence foundation with controlled assistance, preserved sources and human review.')

@push('preloads')
    <link
        rel="preload"
        as="image"
        href="{{ asset('assets/images/hero-network.webp') }}"
    >
@endpush

@section('content')
    <main id="main" class="ais-page siem-page">

        <!-- SIEM Automation Hero -->
        <section class="ais-hero ais-hero-desktop" aria-labelledby="siem-title">
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
                    <span aria-current="page">SIEM Automation</span>
                </nav>

                <div class="ais-hero-grid">
                    <div class="ais-hero-copy">
                        <p class="ais-kicker">
                            <span aria-hidden="true"></span>
                            SIEM AUTOMATION
                        </p>

                        <h1 id="siem-title">
                            Better signal starts
                            <span class="ais-gradient">
                                with better evidence.
                            </span>
                        </h1>

                        <p class="ais-lead">
                            Improve agreed log integrations, queries and
                            collection visibility. Give investigations
                            a stronger evidence foundation.
                        </p>

                        <div class="button-row">
                            <a
                                class="button button-primary"
                                href="{{ url('/contact') }}"
                            >
                                Discuss Your SIEM Workflow
                                <i
                                    class="fa-solid fa-arrow-up-right-from-square"
                                    aria-hidden="true"
                                ></i>
                            </a>

                            <a
                                class="button button-secondary"
                                href="#siem-approach"
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
                            <i class="fa-solid fa-database"></i>
                        </div>

                        <span class="ais-visual-tag ais-tag-one">
                            <i class="fa-solid fa-link"></i>
                            AGREED LOG SOURCES
                        </span>

                        <span class="ais-visual-tag ais-tag-two">
                            <i class="fa-solid fa-code"></i>
                            VALIDATED QUERIES
                        </span>

                        <div class="ais-visual-caption">
                            <span>A STRONGER EVIDENCE FOUNDATION</span>
                            <strong>Understand the data behind the signal.</strong>
                        </div>
                    </div>
                </div>

                <div class="ais-hero-bottom">
                    <p>Build on the security tools your team already trusts.</p>

                    <ul class="ais-principles">
                        <li>
                            <i class="fa-solid fa-lock" aria-hidden="true"></i>
                            Permitted sources
                        </li>

                        <li>
                            <i class="fa-solid fa-code" aria-hidden="true"></i>
                            Query validation
                        </li>

                        <li>
                            <i class="fa-solid fa-link" aria-hidden="true"></i>
                            Preserved evidence
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Dedicated mobile hero -->
        <section class="ais-hero ais-hero-mobile" aria-labelledby="siem-title-mobile">
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
                    <span aria-current="page">SIEM Automation</span>
                </nav>

                <div class="ais-hero-grid">
                    <div class="ais-hero-copy">
                        <p class="ais-kicker">
                            <span aria-hidden="true"></span>
                            SIEM AUTOMATION
                        </p>

                        <h1 id="siem-title-mobile">
                            Better signal starts
                            <span class="ais-gradient">
                                with better evidence.
                            </span>
                        </h1>

                        <p class="ais-lead">
                            Improve agreed log integrations, queries and
                            collection visibility. Give investigations
                            a stronger evidence foundation.
                        </p>

                        <div class="button-row">
                            <a
                                class="button button-primary"
                                href="{{ url('/contact') }}"
                            >
                                Discuss Your SIEM Workflow
                                <i
                                    class="fa-solid fa-arrow-up-right-from-square"
                                    aria-hidden="true"
                                ></i>
                            </a>

                            <a
                                class="button button-secondary"
                                href="#siem-approach"
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
                            <i class="fa-solid fa-database"></i>
                        </div>

                        <span class="ais-visual-tag ais-tag-one">
                            <i class="fa-solid fa-link"></i>
                            AGREED LOG SOURCES
                        </span>

                        <span class="ais-visual-tag ais-tag-two">
                            <i class="fa-solid fa-code"></i>
                            VALIDATED QUERIES
                        </span>

                        <div class="ais-visual-caption">
                            <span>A STRONGER EVIDENCE FOUNDATION</span>
                            <strong>Understand the data behind the signal.</strong>
                        </div>
                    </div>
                </div>

                <div class="ais-hero-bottom">
                    <p>Build on the security tools your team already trusts.</p>

                    <ul class="ais-principles">
                        <li>
                            <i class="fa-solid fa-lock" aria-hidden="true"></i>
                            Permitted sources
                        </li>

                        <li>
                            <i class="fa-solid fa-code" aria-hidden="true"></i>
                            Query validation
                        </li>

                        <li>
                            <i class="fa-solid fa-link" aria-hidden="true"></i>
                            Preserved evidence
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Introduction -->
        <section class="ais-section" id="siem-approach">
            <div class="page-container">
                <div class="ais-split">
                    <div>
                        <p class="ais-kicker">
                            <span aria-hidden="true"></span>
                            THE FOUNDATION OF THE INVESTIGATION
                        </p>

                        <h2>
                            A quiet dashboard
                            <span class="ais-gradient">
                                still needs an explanation.
                            </span>
                        </h2>
                    </div>

                    <div class="ais-intro-copy">
                        <p>
                            A missing source can look like an uneventful period.
                            A parsing gap can leave useful context out of an
                            investigation. Before interpreting the signal,
                            your team needs to understand the evidence.
                        </p>

                        <p>
                            OryvantAI helps improve agreed log integrations,
                            prepare bounded queries and surface collection
                            or parsing gaps within a defined workflow.
                        </p>

                        <div class="ais-inline-note">
                            <i
                                class="fa-solid fa-database"
                                aria-hidden="true"
                            ></i>

                            <p>
                                Supported platforms, APIs, licences, volumes
                                and access permissions are confirmed for
                                each integration.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="ais-context-row">
                    <div>
                        <span class="ais-context-number">
                            <i class="fa-solid fa-database" aria-hidden="true"></i>
                        </span>
                        <span>Agreed log sources</span>
                    </div>

                    <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>

                    <div>
                        <span class="ais-context-number">
                            <i class="fa-solid fa-code" aria-hidden="true"></i>
                        </span>
                        <span>Validated evidence queries</span>
                    </div>

                    <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>

                    <div>
                        <span class="ais-context-number">
                            <i class="fa-solid fa-user-shield" aria-hidden="true"></i>
                        </span>
                        <span>Authorised review</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Practical Assistance -->
        <section class="ais-section ais-light">
            <div class="page-container">
                <div class="ais-section-top">
                    <div class="ais-heading">
                        <p class="ais-kicker">
                            <span aria-hidden="true"></span>
                            WHERE ASSISTANCE CAN HELP
                        </p>

                        <h2>
                            Make the evidence
                            <span>easier to work with.</span>
                        </h2>
                    </div>

                    <p class="ais-section-intro">
                        Focus on the sources, queries and visibility gaps
                        that matter to an agreed investigation workflow.
                    </p>
                </div>

                <div class="ais-card-grid">
                    <article class="ais-card">
                        <div class="ais-card-top">
                            <span class="ais-icon">
                                <i class="fa-solid fa-link" aria-hidden="true"></i>
                            </span>
                            <span class="ais-card-number">01</span>
                        </div>

                        <h3>Scoped log integrations</h3>

                        <p>
                            Improve agreed connections between permitted
                            log sources and the investigation workflow.
                        </p>

                        <div class="ais-card-bottom">
                            <span>Confirm dependencies and permissions first</span>
                            <i class="fa-solid fa-lock" aria-hidden="true"></i>
                        </div>
                    </article>

                    <article class="ais-card">
                        <div class="ais-card-top">
                            <span class="ais-icon">
                                <i class="fa-solid fa-code" aria-hidden="true"></i>
                            </span>
                            <span class="ais-card-number">02</span>
                        </div>

                        <h3>Bounded query assistance</h3>

                        <p>
                            Turn an analyst question into a proposed query
                            within the agreed investigation scope.
                        </p>

                        <div class="ais-card-bottom">
                            <span>Validate syntax and access before execution</span>
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
                            <span class="ais-card-number">03</span>
                        </div>

                        <h3>Log explanation</h3>

                        <p>
                            Explain relevant entries and surface collection
                            or parsing gaps that need investigation.
                        </p>

                        <div class="ais-card-bottom">
                            <span>Preserve originals and trusted counts</span>
                            <i class="fa-solid fa-database" aria-hidden="true"></i>
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

                        <h3>Collection visibility</h3>

                        <p>
                            Identify missing expected sources and make
                            the limitations of available evidence visible.
                        </p>

                        <div class="ais-card-bottom">
                            <span>No events does not mean no threats</span>
                            <i
                                class="fa-solid fa-shield-halved"
                                aria-hidden="true"
                            ></i>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- Controlled Query Workflow -->
        <section class="ais-section ais-dark">
            <div class="page-container">
                <div class="ais-section-top">
                    <div class="ais-heading">
                        <p class="ais-kicker">
                            <span aria-hidden="true"></span>
                            FROM QUESTION TO REVIEWABLE EVIDENCE
                        </p>

                        <h2>
                            A clearer query.
                            <span>A controlled path to evidence.</span>
                        </h2>
                    </div>

                    <p class="ais-section-intro">
                        Query assistance belongs inside an agreed access
                        boundary. Syntax, permissions and interpretation
                        still require validation.
                    </p>
                </div>

                <ol class="ais-workflow">
                    <li>
                        <div class="ais-workflow-top">
                            <span>01</span>
                            <i
                                class="fa-solid fa-magnifying-glass"
                                aria-hidden="true"
                            ></i>
                        </div>

                        <h3>Define</h3>

                        <p>
                            Agree the analyst question and the relevant
                            evidence sources.
                        </p>
                    </li>

                    <li>
                        <div class="ais-workflow-top">
                            <span>02</span>
                            <i class="fa-solid fa-code" aria-hidden="true"></i>
                        </div>

                        <h3>Prepare</h3>

                        <p>
                            Draft a bounded query for the agreed
                            investigation task.
                        </p>
                    </li>

                    <li>
                        <div class="ais-workflow-top">
                            <span>03</span>
                            <i class="fa-solid fa-lock" aria-hidden="true"></i>
                        </div>

                        <h3>Validate</h3>

                        <p>
                            Check query syntax and access permissions
                            before execution.
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
                            Inspect the returned evidence, references
                            and remaining information gaps.
                        </p>
                    </li>
                </ol>

                <div class="ais-evidence-bar">
                    <strong>KEEP THE FOUNDATION VISIBLE</strong>
                    <span>Sources</span>
                    <span>Permissions</span>
                    <span>Original records</span>
                    <span>Known gaps</span>
                </div>

                <p class="ais-boundary-note">
                    <i class="fa-solid fa-lock" aria-hidden="true"></i>
                    AI assistance does not grant access or remove
                    the need to validate a query.
                </p>
            </div>
        </section>

        <!-- Illustrative Collection Gap -->
        <section class="ais-section">
            <div class="page-container ais-split ais-example">
                <div>
                    <p class="ais-kicker">
                        <span aria-hidden="true"></span>
                        AN EXAMPLE IN PRACTICE
                    </p>

                    <h2>
                        A source stops sending.
                        <span class="ais-gradient">
                            Make the gap visible.
                        </span>
                    </h2>

                    <p>
                        Before preparing a security report, the team checks
                        its expected evidence sources. One source has stopped
                        sending during part of the reporting period.
                    </p>

                    <p>
                        The useful output identifies the affected source,
                        the period involved and the limitation this creates.
                        The report reflects the available evidence honestly.
                    </p>

                    <div class="ais-example-points">
                        <span>
                            <i class="fa-solid fa-database" aria-hidden="true"></i>
                            Check expected sources
                        </span>

                        <span>
                            <i class="fa-solid fa-file-lines" aria-hidden="true"></i>
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
                                <i class="fa-solid fa-database" aria-hidden="true"></i>
                            </span>

                            <div>
                                <span class="ais-small-label">
                                    ILLUSTRATIVE OUTPUT
                                </span>
                                <h3>Visibility gap record</h3>
                            </div>
                        </div>

                        <span class="ais-review-label">FOR HUMAN REVIEW</span>
                    </div>

                    <dl class="ais-case-record">
                        <div>
                            <dt>
                                <span aria-hidden="true"></span>
                                Expected
                            </dt>
                            <dd>
                                The agreed sources needed for the reporting scope.
                            </dd>
                        </div>

                        <div>
                            <dt>
                                <span aria-hidden="true"></span>
                                Observed
                            </dt>
                            <dd>
                                A source has stopped sending during
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
                                Record the data quality issue and explain
                                the reporting limitation.
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
            aria-label="OryvantAI evidence and security operations"
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
                        <i class="fa-solid fa-link" aria-hidden="true"></i>
                        Build on the tools you trust.
                        Keep the evidence foundation visible.
                    </figcaption>
                </figure>
            </div>
        </section>

        <!-- Evidence Controls -->
        <section class="ais-section ais-light">
            <div class="page-container ais-control-layout">
                <div class="ais-control-intro">
                    <p class="ais-kicker">
                        <span aria-hidden="true"></span>
                        CONTROLLED SIEM ASSISTANCE
                    </p>

                    <h2>
                        Better visibility.
                        <span class="ais-gradient">
                            Clear operating boundaries.
                        </span>
                    </h2>

                    <p>
                        Define the sources, permissions and validation
                        steps before extending the workflow.
                    </p>

                    <div class="ais-control-seal" aria-hidden="true">
                        <i class="fa-solid fa-database"></i>
                        <span>EVIDENCE QUALITY BEFORE INTERPRETATION</span>
                    </div>
                </div>

                <div class="ais-control-grid">
                    <article>
                        <i class="fa-solid fa-lock" aria-hidden="true"></i>
                        <h3>Authorised access</h3>
                        <p>
                            Confirm source permissions and processing
                            boundaries before connecting evidence.
                        </p>
                    </article>

                    <article>
                        <i class="fa-solid fa-code" aria-hidden="true"></i>
                        <h3>Validated queries</h3>
                        <p>
                            Validate syntax and access before executing
                            a proposed evidence query.
                        </p>
                    </article>

                    <article>
                        <i class="fa-solid fa-database" aria-hidden="true"></i>
                        <h3>Original records</h3>
                        <p>
                            Preserve source records and trusted counts
                            when preparing explanations.
                        </p>
                    </article>

                    <article>
                        <i class="fa-solid fa-link" aria-hidden="true"></i>
                        <h3>Scoped integrations</h3>
                        <p>
                            Confirm APIs, licences, volumes and dependencies
                            for each agreed connection.
                        </p>
                    </article>

                    <article>
                        <i
                            class="fa-solid fa-magnifying-glass"
                            aria-hidden="true"
                        ></i>
                        <h3>Visible limitations</h3>
                        <p>
                            Surface collection and parsing gaps rather
                            than treating incomplete records as certainty.
                        </p>
                    </article>

                    <article>
                        <i
                            class="fa-solid fa-user-shield"
                            aria-hidden="true"
                        ></i>
                        <h3>Human review</h3>
                        <p>
                            Keep interpretation, operational changes
                            and acceptance with the authorised owners.
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
                        YOUR FIRST SIEM WORKFLOW
                    </p>

                    <h2>
                        Start with one evidence gap.
                        <span>Agree what better looks like.</span>
                    </h2>

                    <p>
                        A difficult query, a missing source or a recurring
                        parsing issue can provide a focused starting point.
                        Define the evidence and acceptance criteria first.
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
                            <h3>Confirm the sources</h3>
                            <p>
                                Identify the systems, expected records,
                                access permissions and integration dependencies.
                            </p>
                        </div>
                    </li>

                    <li>
                        <span class="ais-deliverable-number">02</span>

                        <div>
                            <h3>Evaluate one workflow</h3>
                            <p>
                                Test agreed queries and review the
                                evidence, collection gaps and known limitations.
                            </p>
                        </div>
                    </li>

                    <li>
                        <span class="ais-deliverable-number">03</span>

                        <div>
                            <h3>Prioritise accepted improvements</h3>
                            <p>
                                Record the evidence needed to review
                                the tuning and engineering backlog.
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

                    <h2>Questions about your SIEM workflow.</h2>

                    <p>
                        Clarify the integration scope, permissions
                        and evidence requirements before implementation.
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
                            <span>Does OryvantAI replace our SIEM?</span>
                            <span class="faq-toggle" aria-hidden="true">+</span>
                        </summary>

                        <p>
                            The service builds an agreed assistance workflow
                            around your environment. It is not an automatic
                            replacement for your security stack.
                        </p>
                    </details>

                    <details class="faq-item">
                        <summary>
                            <span class="faq-num">02</span>
                            <span>Is every SIEM platform supported?</span>
                            <span class="faq-toggle" aria-hidden="true">+</span>
                        </summary>

                        <p>
                            Support is confirmed for the specific scope.
                            Available APIs, licences, data volumes and
                            permissions must be assessed for each integration.
                        </p>
                    </details>

                    <details class="faq-item">
                        <summary>
                            <span class="faq-num">03</span>
                            <span>Can AI generated queries run without validation?</span>
                            <span class="faq-toggle" aria-hidden="true">+</span>
                        </summary>

                        <p>
                            Query syntax and access must be validated before
                            execution. AI assistance does not bypass
                            the systems that enforce permissions.
                        </p>
                    </details>

                    <details class="faq-item">
                        <summary>
                            <span class="faq-num">04</span>
                            <span>Can the workflow identify missing log sources?</span>
                            <span class="faq-toggle" aria-hidden="true">+</span>
                        </summary>

                        <p>
                            An agreed visibility workflow can check expected
                            sources and surface collection gaps. This does
                            not imply complete coverage of your environment.
                        </p>
                    </details>

                    <details class="faq-item">
                        <summary>
                            <span class="faq-num">05</span>
                            <span>How are original logs handled?</span>
                            <span class="faq-toggle" aria-hidden="true">+</span>
                        </summary>

                        <p>
                            The workflow should preserve original records,
                            source references and trusted counts. Processing
                            and retention arrangements are agreed for the scope.
                        </p>
                    </details>

                    <details class="faq-item">
                        <summary>
                            <span class="faq-num">06</span>
                            <span>What if our logging foundation is incomplete?</span>
                            <span class="faq-toggle" aria-hidden="true">+</span>
                        </summary>

                        <p>
                            Begin with readiness and engineering. AI assistance
                            should follow a usable evidence foundation rather
                            than conceal missing telemetry or ownership.
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
                        Start with the evidence
                        <span>your team needs to trust.</span>
                    </h2>

                    <p>
                        Define the sources, the question and the operating
                        boundary. Then agree a useful first scope.
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
