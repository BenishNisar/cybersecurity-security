
@extends('Layout.layout')

@section('body_class', 'solution-page')

@section('title', 'OryvantAI | AI Powered Cybersecurity, SOC and SIEM Automation')
@section('description', 'Custom AI powered cybersecurity built around your existing tools, people and procedures. Explore controlled SOC workflows, SIEM automation and security analytics.')

@push('preloads')
    <link rel="preload" as="image" href="{{ asset('assets/images/hero-network.webp') }}">
@endpush

@section('content')


   <main id="main">
            <!-- Solutions Hero -->
            <section
                class="solution-hero"
                id="home"
                aria-labelledby="solution-title"
            >
                <div
                    class="solution-hero-art"
                    aria-hidden="true"
                ></div>
                <div class="page-container">
                    <nav
                        class="solution-breadcrumb"
                        aria-label="Breadcrumb"
                    >
                        <a href="index.html">Home</a
                        ><i
                            class="fa-solid fa-arrow-right"
                            aria-hidden="true"
                        ></i
                        ><span aria-current="page">Solutions</span>
                    </nav>
                    <div class="solution-hero-grid">
                        <div>
                            <p class="eyebrow">
                                <span aria-hidden="true"></span>OryvantAI Solutions
                            </p>
                            <h1 id="solution-title">
                                AI that works inside<br />
                                <span class="logo-gradient-text">your security operations.</span>
                            </h1>
                            <p class="solution-hero-lead">
                                Connect investigation, response and operational learning around the
                                tools, evidence and decisions your team already trusts.
                            </p>
                            <div class="button-row">
                                <a
                                    class="button button-primary"
                                    href="#contact"
                                    >Talk to an Expert<i
                                        class="fa-solid fa-arrow-up-right-from-square"
                                        aria-hidden="true"
                                    ></i></a
                                ><a
                                    class="button button-secondary"
                                    href="#approach"
                                    >Explore the Approach<i
                                        class="fa-solid fa-arrow-up-right-from-square"
                                        aria-hidden="true"
                                    ></i
                                ></a>
                            </div>
                        </div>
                        <div
                            class="solution-hero-map"
                            aria-label="Conceptual evidence, procedure and learning architecture"
                        >
                            <p class="mono-label">CONNECTED SOLUTION SCOPES</p>
                            <div class="solution-hero-route">
                                <div>
                                    <span
                                        ><i
                                            class="fa-solid fa-crosshairs"
                                            aria-hidden="true"
                                        ></i
                                    ></span>
                                    <p>
                                        <small>UNDERSTAND</small
                                        ><strong>Evidence into context</strong>
                                    </p>
                                </div>
                                <div>
                                    <span
                                        ><i
                                            class="fa-solid fa-shield-halved"
                                            aria-hidden="true"
                                        ></i
                                    ></span>
                                    <p>
                                        <small>RESPOND</small
                                        ><strong>Experience into procedure</strong>
                                    </p>
                                </div>
                                <div>
                                    <span
                                        ><i
                                            class="fa-solid fa-chart-line"
                                            aria-hidden="true"
                                        ></i
                                    ></span>
                                    <p>
                                        <small>IMPROVE</small
                                        ><strong>Learning into improvement</strong>
                                    </p>
                                </div>
                            </div>
                            <span class="solution-map-caption"
                                ><i
                                    class="fa-solid fa-user-shield"
                                    aria-hidden="true"
                                ></i>
                                Human review connects the work.</span
                            >
                        </div>
                    </div>
                    <div class="solution-principles">
                        <span
                            ><i
                                class="fa-solid fa-link"
                                aria-hidden="true"
                            ></i
                            >EVIDENCE LINKED</span
                        ><span
                            ><i
                                class="fa-solid fa-user-shield"
                                aria-hidden="true"
                            ></i
                            >HUMAN REVIEWED</span
                        ><span
                            ><i
                                class="fa-solid fa-gears"
                                aria-hidden="true"
                            ></i
                            >CONTROLLED WORKFLOWS</span
                        ><span
                            ><i
                                class="fa-solid fa-shield-halved"
                                aria-hidden="true"
                            ></i
                            >SCOPED DEPLOYMENT</span
                        >
                    </div>
                </div>
            </section>

            <!-- Connected Approach -->
            <section
                class="section"
                id="approach"
            >
                <div class="page-container solution-split">
                    <div>
                        <div class="section-heading">
                            <p class="eyebrow">
                                <span aria-hidden="true"></span>One connected approach
                            </p>
                            <h2>
                                Three solution areas.<br />
                                One improvement loop.
                            </h2>
                        </div>
                        <p>
                            OryvantAI connects investigation, procedures and learning. A reviewed
                            incident can inform a better procedure. An approved procedure can
                            improve analyst learning. Reporting makes accepted changes visible.
                        </p>
                        <p>
                            These are custom solution scopes built around your existing tools,
                            people, evidence and operating procedures. Begin with one workflow and
                            combine areas where the connection improves the work.
                        </p>
                    </div>
                    <div class="solution-architecture">
                        <div class="solution-architecture-heading">
                            <span class="mono-label">SECURITY OPERATIONS ARCHITECTURE</span
                            ><i
                                class="fa-solid fa-diagram-project"
                                aria-hidden="true"
                            ></i>
                        </div>
                        <ol>
                            <li>
                                <span>01</span>
                                <div>
                                    <p class="mono-label">UNDERSTAND</p>
                                    <h3>Investigate with context</h3>
                                    <p>Permitted evidence and reviewable findings.</p>
                                </div>
                                <i
                                    class="fa-solid fa-crosshairs"
                                    aria-hidden="true"
                                ></i>
                            </li>
                            <li>
                                <span>02</span>
                                <div>
                                    <p class="mono-label">RESPOND</p>
                                    <h3>Coordinate with authority</h3>
                                    <p>Approved procedures and clear decision owners.</p>
                                </div>
                                <i
                                    class="fa-solid fa-shield-halved"
                                    aria-hidden="true"
                                ></i>
                            </li>
                            <li>
                                <span>03</span>
                                <div>
                                    <p class="mono-label">IMPROVE</p>
                                    <h3>Put accepted lessons to work</h3>
                                    <p>Reusable knowledge and trusted reporting.</p>
                                </div>
                                <i
                                    class="fa-solid fa-chart-line"
                                    aria-hidden="true"
                                ></i>
                            </li>
                        </ol>
                        <p class="solution-architecture-return">
                            <i
                                class="fa-solid fa-rotate"
                                aria-hidden="true"
                            ></i>
                            Reviewed experience informs the next investigation.
                        </p>
                    </div>
                </div>
            </section>

            <!-- Primary Solutions -->
            <section
                class="section light-section"
                id="solution-scopes"
            >
                <div class="page-container">
                    <div class="section-heading text-center mx-auto">
                        <p class="eyebrow">
                            <span aria-hidden="true"></span>Choose your starting point
                        </p>
                        <h2>
                            Connected scopes.<br />
                            Defined around your team.
                        </h2>
                        <p>
                            The proposal confirms the systems, deliverables, review points and
                            support included in your engagement.
                        </p>
                    </div>
                    <div class="solution-modules">
                        <article class="solution-module">
                            <div class="solution-module-top">
                                <span class="mono-label">01 / UNDERSTAND</span
                                ><span
                                    ><i
                                        class="fa-solid fa-crosshairs"
                                        aria-hidden="true"
                                    ></i
                                ></span>
                            </div>
                            <h3>Security Intelligence Workbench</h3>
                            <ul class="verified-list">
                                <li>
                                    <i
                                        class="fa-solid fa-check"
                                        aria-hidden="true"
                                    ></i
                                    ><span>SOC, SIEM and logs plus AI</span>
                                </li>
                                <li>
                                    <i
                                        class="fa-solid fa-check"
                                        aria-hidden="true"
                                    ></i
                                    ><span>Behaviour and case context</span>
                                </li>
                                <li>
                                    <i
                                        class="fa-solid fa-check"
                                        aria-hidden="true"
                                    ></i
                                    ><span>False positive assistance</span>
                                </li>
                            </ul>
                            <div class="solution-module-outcome">
                                <p class="mono-label">WHAT YOUR TEAM RECEIVES</p>
                                <p>
                                    A reviewable case brief, validated evidence queries, contextual
                                    signals and a prioritised tuning backlog.
                                </p>
                            </div>
                            <a
                                class="text-link"
                                href="#intelligence"
                                >Explore this scope
                                <i
                                    class="fa-solid fa-arrow-right"
                                    aria-hidden="true"
                                ></i
                            ></a>
                        </article>
                        <article class="solution-module">
                            <div class="solution-module-top">
                                <span class="mono-label">02 / RESPOND</span
                                ><span
                                    ><i
                                        class="fa-solid fa-shield-halved"
                                        aria-hidden="true"
                                    ></i
                                ></span>
                            </div>
                            <h3>Procedure &amp; Response Studio</h3>
                            <ul class="verified-list">
                                <li>
                                    <i
                                        class="fa-solid fa-check"
                                        aria-hidden="true"
                                    ></i
                                    ><span>Incident coordination</span>
                                </li>
                                <li>
                                    <i
                                        class="fa-solid fa-check"
                                        aria-hidden="true"
                                    ></i
                                    ><span>Company specific SOPs plus AI</span>
                                </li>
                                <li>
                                    <i
                                        class="fa-solid fa-check"
                                        aria-hidden="true"
                                    ></i
                                    ><span>Reviewed SOC playbooks</span>
                                </li>
                            </ul>
                            <div class="solution-module-outcome">
                                <p class="mono-label">WHAT YOUR TEAM RECEIVES</p>
                                <p>
                                    Structured procedure drafts, incident timelines, approval paths
                                    and a versioned record of accepted changes.
                                </p>
                            </div>
                            <a
                                class="text-link"
                                href="#response"
                                >Explore this scope
                                <i
                                    class="fa-solid fa-arrow-right"
                                    aria-hidden="true"
                                ></i
                            ></a>
                        </article>
                        <article class="solution-module">
                            <div class="solution-module-top">
                                <span class="mono-label">03 / IMPROVE</span
                                ><span
                                    ><i
                                        class="fa-solid fa-chart-line"
                                        aria-hidden="true"
                                    ></i
                                ></span>
                            </div>
                            <h3>Learning &amp; Reporting Workspace</h3>
                            <ul class="verified-list">
                                <li>
                                    <i
                                        class="fa-solid fa-check"
                                        aria-hidden="true"
                                    ></i
                                    ><span>Analyst learning</span>
                                </li>
                                <li>
                                    <i
                                        class="fa-solid fa-check"
                                        aria-hidden="true"
                                    ></i
                                    ><span>Operational reporting</span>
                                </li>
                                <li>
                                    <i
                                        class="fa-solid fa-check"
                                        aria-hidden="true"
                                    ></i
                                    ><span>Management decision support</span>
                                </li>
                            </ul>
                            <div class="solution-module-outcome">
                                <p class="mono-label">WHAT YOUR TEAM RECEIVES</p>
                                <p>
                                    Source based learning materials, scenario exercises and
                                    reporting that connects technical findings to decisions.
                                </p>
                            </div>
                            <a
                                class="text-link"
                                href="#learning"
                                >Explore this scope
                                <i
                                    class="fa-solid fa-arrow-right"
                                    aria-hidden="true"
                                ></i
                            ></a>
                        </article>
                    </div>
                    <p class="section-note">
                        These names describe tailored solution scopes, rather than three universally
                        released standalone software products.
                    </p>
                </div>
            </section>

            <!-- Security Intelligence Workbench -->
            <section
                class="section dark-section solution-intelligence"
                id="intelligence"
            >
                <div class="page-container">
                    <div class="solution-split solution-section-intro">
                        <div>
                            <div class="section-heading">
                                <p class="eyebrow">
                                    <span aria-hidden="true"></span>Security intelligence
                                </p>
                                <h2>
                                    SOC + AI:<br />
                                    the next step comes with evidence.
                                </h2>
                                <p>A reviewable investigation brief, not an unexplained verdict.</p>
                            </div>
                        </div>
                        <div class="solution-evidence-inputs">
                            <p class="mono-label">PERMITTED INPUTS → REVIEWABLE OUTPUTS</p>
                            <div>
                                <span
                                    ><i
                                        class="fa-solid fa-database"
                                        aria-hidden="true"
                                    ></i
                                    >Events</span
                                ><span
                                    ><i
                                        class="fa-solid fa-server"
                                        aria-hidden="true"
                                    ></i
                                    >Asset context</span
                                ><span
                                    ><i
                                        class="fa-solid fa-file-lines"
                                        aria-hidden="true"
                                    ></i
                                    >Case history</span
                                >
                            </div>
                            <p>
                                <i
                                    class="fa-solid fa-file-shield"
                                    aria-hidden="true"
                                ></i>
                                Source references remain attached to the investigation.
                            </p>
                        </div>
                    </div>
                    <div class="solution-four-stages">
                        <article class="workflow-step">
                            <div class="workflow-step-top">
                                <span>01</span
                                ><i
                                    class="fa-solid fa-folder-open"
                                    aria-hidden="true"
                                ></i>
                            </div>
                            <h3>Collect</h3>
                            <p>Permitted events, asset context and case history.</p>
                            <div class="step-meta">
                                <span>INPUT</span>
                                <p>Permitted evidence</p>
                            </div>
                        </article>
                        <article class="workflow-step">
                            <div class="workflow-step-top">
                                <span>02</span
                                ><i
                                    class="fa-solid fa-file-lines"
                                    aria-hidden="true"
                                ></i>
                            </div>
                            <h3>Explain</h3>
                            <p>A time aligned brief with source references.</p>
                            <div class="step-meta">
                                <span>CONTEXT</span>
                                <p>Sources and open questions</p>
                            </div>
                        </article>
                        <article class="workflow-step">
                            <div class="workflow-step-top">
                                <span>03</span
                                ><i
                                    class="fa-solid fa-route"
                                    aria-hidden="true"
                                ></i>
                            </div>
                            <h3>Recommend</h3>
                            <p>Next checks and the relevant approved procedure.</p>
                            <div class="step-meta">
                                <span>OUTPUT</span>
                                <p>Reviewable next steps</p>
                            </div>
                        </article>
                        <article class="workflow-step">
                            <div class="workflow-step-top">
                                <span>04</span
                                ><i
                                    class="fa-solid fa-user-shield"
                                    aria-hidden="true"
                                ></i>
                            </div>
                            <h3>Review</h3>
                            <p>Your analyst verifies context and decides.</p>
                            <div class="step-meta">
                                <span>CONTROL</span>
                                <p>Named reviewer</p>
                            </div>
                        </article>
                    </div>
                    <div class="solution-case-bar">
                        <p class="mono-label">IN EVERY CASE BRIEF</p>
                        <div>
                            <span
                                ><i
                                    class="fa-solid fa-check"
                                    aria-hidden="true"
                                ></i
                                >Facts</span
                            ><span
                                ><i
                                    class="fa-solid fa-check"
                                    aria-hidden="true"
                                ></i
                                >Open questions</span
                            ><span
                                ><i
                                    class="fa-solid fa-check"
                                    aria-hidden="true"
                                ></i
                                >Source links</span
                            ><span
                                ><i
                                    class="fa-solid fa-check"
                                    aria-hidden="true"
                                ></i
                                >Named reviewer</span
                            >
                        </div>
                    </div>
                    <div class="solution-keep-control">
                        <i
                            class="fa-solid fa-lock"
                            aria-hidden="true"
                        ></i>
                        <div>
                            <p class="mono-label">YOU KEEP CONTROL</p>
                            <p>No silent case closure or unapproved production response.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- SIEM Logs and Behaviour -->
            <section
                class="section"
                id="evidence"
            >
                <div class="page-container">
                    <div class="section-heading">
                        <p class="eyebrow">
                            <span aria-hidden="true"></span>SIEM, logs and behaviour
                        </p>
                        <h2>
                            Better signal starts<br />
                            with better evidence.
                        </h2>
                        <p>
                            SIEM, log and behaviour assistance strengthens an agreed investigation
                            workflow.
                        </p>
                    </div>
                    <div class="solution-table-shell">
                        <div class="solution-interface-heading">
                            <span
                                ><i
                                    class="fa-solid fa-terminal"
                                    aria-hidden="true"
                                ></i>
                                INVESTIGATION CAPABILITIES</span
                            ><span>ASSISTANCE + CONTROL BOUNDARY</span>
                        </div>
                        <table class="solution-table">
                            <caption class="sr-only">
                                Practical assistance and the control boundary for each security
                                capability
                            </caption>
                            <thead>
                                <tr>
                                    <th scope="col">Capability</th>
                                    <th scope="col">Practical assistance</th>
                                    <th scope="col">Control boundary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        <span class="solution-table-icon"
                                            ><i
                                                class="fa-solid fa-database"
                                                aria-hidden="true"
                                            ></i></span
                                        ><span>SIEM + AI</span>
                                    </th>
                                    <td>
                                        <span
                                            class="solution-cell-label"
                                            aria-hidden="true"
                                            >PRACTICAL ASSISTANCE</span
                                        >Turn an analyst question into a bounded query.
                                    </td>
                                    <td>
                                        <span
                                            class="solution-cell-label"
                                            aria-hidden="true"
                                            >CONTROL BOUNDARY</span
                                        ><span class="solution-boundary-copy"
                                            ><i
                                                class="fa-solid fa-shield-halved"
                                                aria-hidden="true"
                                            ></i
                                            ><span
                                                >Validate syntax and access before execution.</span
                                            ></span
                                        >
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <span class="solution-table-icon"
                                            ><i
                                                class="fa-solid fa-file-lines"
                                                aria-hidden="true"
                                            ></i></span
                                        ><span>Logs + AI</span>
                                    </th>
                                    <td>
                                        <span
                                            class="solution-cell-label"
                                            aria-hidden="true"
                                            >PRACTICAL ASSISTANCE</span
                                        >Explain entries and surface collection or parsing gaps.
                                    </td>
                                    <td>
                                        <span
                                            class="solution-cell-label"
                                            aria-hidden="true"
                                            >CONTROL BOUNDARY</span
                                        ><span class="solution-boundary-copy"
                                            ><i
                                                class="fa-solid fa-shield-halved"
                                                aria-hidden="true"
                                            ></i
                                            ><span
                                                >Preserve originals and trusted counts.</span
                                            ></span
                                        >
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <span class="solution-table-icon"
                                            ><i
                                                class="fa-solid fa-fingerprint"
                                                aria-hidden="true"
                                            ></i></span
                                        ><span>Behaviour + AI</span>
                                    </th>
                                    <td>
                                        <span
                                            class="solution-cell-label"
                                            aria-hidden="true"
                                            >PRACTICAL ASSISTANCE</span
                                        >Show meaningful deviations in agreed scenarios.
                                    </td>
                                    <td>
                                        <span
                                            class="solution-cell-label"
                                            aria-hidden="true"
                                            >CONTROL BOUNDARY</span
                                        ><span class="solution-boundary-copy"
                                            ><i
                                                class="fa-solid fa-shield-halved"
                                                aria-hidden="true"
                                            ></i
                                            ><span
                                                >An anomaly is not proof of an attack.</span
                                            ></span
                                        >
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <span class="solution-table-icon"
                                            ><i
                                                class="fa-solid fa-crosshairs"
                                                aria-hidden="true"
                                            ></i></span
                                        ><span>False positive assistance</span>
                                    </th>
                                    <td>
                                        <span
                                            class="solution-cell-label"
                                            aria-hidden="true"
                                            >PRACTICAL ASSISTANCE</span
                                        >Propose tuning from reviewed cases.
                                    </td>
                                    <td>
                                        <span
                                            class="solution-cell-label"
                                            aria-hidden="true"
                                            >CONTROL BOUNDARY</span
                                        ><span class="solution-boundary-copy"
                                            ><i
                                                class="fa-solid fa-shield-halved"
                                                aria-hidden="true"
                                            ></i
                                            ><span
                                                >Test coverage before approving changes.</span
                                            ></span
                                        >
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="solution-table-result">
                            <i
                                class="fa-solid fa-file-shield"
                                aria-hidden="true"
                            ></i>
                            <p>
                                A prioritised tuning backlog with the evidence needed to review it.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Procedure and Response -->
            <section
                class="section light-section"
                id="response"
            >
                <div class="page-container">
                    <div class="section-heading">
                        <p class="eyebrow">
                            <span aria-hidden="true"></span>Procedure &amp; Response Studio
                        </p>
                        <h2>
                            SOPs + AI:<br />
                            your experience becomes procedure.
                        </h2>
                        <p>
                            Company specific recommendations grounded in approved knowledge and
                            verified incident lessons.
                        </p>
                    </div>
                    <ol class="solution-procedure">
                        <li>
                            <div class="solution-procedure-node">
                                <span>01</span
                                ><i
                                    class="fa-solid fa-file-shield"
                                    aria-hidden="true"
                                ></i>
                            </div>
                            <h3>Approved knowledge</h3>
                            <p>Policies, cases, roles and documentation.</p>
                        </li>
                        <li>
                            <div class="solution-procedure-node">
                                <span>02</span
                                ><i
                                    class="fa-solid fa-diagram-project"
                                    aria-hidden="true"
                                ></i>
                            </div>
                            <h3>A structured proposal</h3>
                            <p>What changes, why and who is responsible.</p>
                        </li>
                        <li>
                            <div class="solution-procedure-node">
                                <span>03</span
                                ><i
                                    class="fa-solid fa-user-shield"
                                    aria-hidden="true"
                                ></i>
                            </div>
                            <h3>Controlled publication</h3>
                            <p>Owner review, testing and version history.</p>
                        </li>
                    </ol>
                    <div class="solution-change-request">
                        <span class="solution-change-icon"
                            ><i
                                class="fa-solid fa-file-lines"
                                aria-hidden="true"
                            ></i
                        ></span>
                        <div>
                            <p class="mono-label">ILLUSTRATIVE CHANGE REQUEST</p>
                            <p>
                                A delayed handover leads to a proposed duty owner, escalation
                                trigger and evidence checklist.
                            </p>
                        </div>
                        <span class="solution-draft-tag">FOR OWNER REVIEW</span>
                    </div>
                    <div class="solution-approval-note">
                        <span
                            ><i
                                class="fa-solid fa-user-shield"
                                aria-hidden="true"
                            ></i
                        ></span>
                        <div>
                            <p class="mono-label">NOT GENERIC POLICY TEXT</p>
                            <p>Your procedure owner decides what is approved and published.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Incident Response -->
            <section
                class="section dark-section"
                id="incident-response"
            >
                <div class="page-container">
                    <div class="section-heading">
                        <p class="eyebrow"><span aria-hidden="true"></span>Incident coordination</p>
                        <h2>
                            Coordinate the incident.<br />
                            Keep authority clear.
                        </h2>
                        <p>
                            Connect accepted facts, the approved playbook and the people responsible
                            for action.
                        </p>
                    </div>
                    <div
                        class="solution-incident-head"
                        aria-hidden="true"
                    >
                        <span>OPERATING STAGE</span><span>REVIEWABLE ASSISTANCE</span
                        ><span>DECISION OWNER</span>
                    </div>
                    <ol class="solution-incident-list">
                        <li>
                            <div class="solution-incident-stage">
                                <span class="mono-label">01</span
                                ><i
                                    class="fa-solid fa-crosshairs"
                                    aria-hidden="true"
                                ></i>
                                <h3>Assess</h3>
                            </div>
                            <p>Timeline, impact evidence and severity rationale.</p>
                            <div class="solution-decision-owner">
                                <span class="mono-label">DECISION OWNER</span
                                ><strong>Authorised incident lead</strong>
                            </div>
                        </li>
                        <li>
                            <div class="solution-incident-stage">
                                <span class="mono-label">02</span
                                ><i
                                    class="fa-solid fa-network-wired"
                                    aria-hidden="true"
                                ></i>
                                <h3>Coordinate</h3>
                            </div>
                            <p>Playbook, actions, handover and escalation drafts.</p>
                            <div class="solution-decision-owner">
                                <span class="mono-label">DECISION OWNER</span
                                ><strong>Assigned operational owners</strong>
                            </div>
                        </li>
                        <li>
                            <div class="solution-incident-stage">
                                <span class="mono-label">03</span
                                ><i
                                    class="fa-solid fa-shield-halved"
                                    aria-hidden="true"
                                ></i>
                                <h3>Respond</h3>
                            </div>
                            <p>Evidence checks, prerequisites and rollback conditions.</p>
                            <div class="solution-decision-owner">
                                <span class="mono-label">DECISION OWNER</span
                                ><strong>Approved response operator</strong>
                            </div>
                        </li>
                        <li>
                            <div class="solution-incident-stage">
                                <span class="mono-label">04</span
                                ><i
                                    class="fa-solid fa-file-lines"
                                    aria-hidden="true"
                                ></i>
                                <h3>Communicate</h3>
                            </div>
                            <p>Consistent internal and external incident summaries.</p>
                            <div class="solution-decision-owner">
                                <span class="mono-label">DECISION OWNER</span
                                ><strong>Business, legal and communications owners</strong>
                            </div>
                        </li>
                        <li>
                            <div class="solution-incident-stage">
                                <span class="mono-label">05</span
                                ><i
                                    class="fa-solid fa-rotate"
                                    aria-hidden="true"
                                ></i>
                                <h3>Learn</h3>
                            </div>
                            <p>Post incident record and proposed procedure changes.</p>
                            <div class="solution-decision-owner">
                                <span class="mono-label">DECISION OWNER</span
                                ><strong>Procedure owner</strong>
                            </div>
                        </li>
                    </ol>
                    <div class="solution-ot-note">
                        <i
                            class="fa-solid fa-industry"
                            aria-hidden="true"
                        ></i>
                        <div>
                            <p class="mono-label">OT SAFETY FIRST</p>
                            <p>
                                Passive or read only telemetry first. Operational changes require
                                explicit approval.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Learning and Reporting -->
            <section
                class="section"
                id="learning"
            >
                <div class="page-container">
                    <div class="section-heading">
                        <p class="eyebrow">
                            <span aria-hidden="true"></span>Learning &amp; Reporting Workspace
                        </p>
                        <h2>
                            Make expertise easier<br />
                            to use and explain.
                        </h2>
                        <p>
                            Approved case experience supports analyst learning. Validated reporting
                            connects technical findings to useful decisions.
                        </p>
                    </div>
                    <div class="solution-learning-grid">
                        <article class="solution-learning-panel">
                            <div class="solution-learning-title">
                                <i
                                    class="fa-solid fa-brain"
                                    aria-hidden="true"
                                ></i>
                                <p class="mono-label">FOR ANALYSTS</p>
                            </div>
                            <h3>Make knowledge reusable.</h3>
                            <ul class="verified-list">
                                <li>
                                    <i
                                        class="fa-solid fa-check"
                                        aria-hidden="true"
                                    ></i
                                    ><span>Learn from approved procedures</span>
                                </li>
                                <li>
                                    <i
                                        class="fa-solid fa-check"
                                        aria-hidden="true"
                                    ></i
                                    ><span>Use reviewed cases</span>
                                </li>
                                <li>
                                    <i
                                        class="fa-solid fa-check"
                                        aria-hidden="true"
                                    ></i
                                    ><span>Understand investigation context</span>
                                </li>
                                <li>
                                    <i
                                        class="fa-solid fa-check"
                                        aria-hidden="true"
                                    ></i
                                    ><span>Practice defined scenarios</span>
                                </li>
                                <li>
                                    <i
                                        class="fa-solid fa-check"
                                        aria-hidden="true"
                                    ></i
                                    ><span>Make knowledge reusable</span>
                                </li>
                            </ul>
                            <p class="solution-learning-note">
                                Learning materials cite approved procedures. Practice stays separate
                                from live incidents.
                            </p>
                        </article>
                        <article class="solution-learning-panel solution-leadership-panel">
                            <div class="solution-learning-title">
                                <i
                                    class="fa-solid fa-chart-line"
                                    aria-hidden="true"
                                ></i>
                                <p class="mono-label">FOR LEADERS</p>
                            </div>
                            <h3>Make the evidence useful.</h3>
                            <ul class="verified-list">
                                <li>
                                    <i
                                        class="fa-solid fa-check"
                                        aria-hidden="true"
                                    ></i
                                    ><span>See operational patterns</span>
                                </li>
                                <li>
                                    <i
                                        class="fa-solid fa-check"
                                        aria-hidden="true"
                                    ></i
                                    ><span>Understand recurring weaknesses</span>
                                </li>
                                <li>
                                    <i
                                        class="fa-solid fa-check"
                                        aria-hidden="true"
                                    ></i
                                    ><span>Review accepted improvements</span>
                                </li>
                                <li>
                                    <i
                                        class="fa-solid fa-check"
                                        aria-hidden="true"
                                    ></i
                                    ><span>Connect technical evidence to decisions</span>
                                </li>
                                <li>
                                    <i
                                        class="fa-solid fa-check"
                                        aria-hidden="true"
                                    ></i
                                    ><span>Use trusted reporting</span>
                                </li>
                            </ul>
                            <p class="solution-learning-note">
                                Trusted records provide the measures. AI helps explain them for
                                review.
                            </p>
                        </article>
                    </div>
                    <div
                        class="solution-learning-flow"
                        aria-label="Learning and reporting connection"
                    >
                        <span>Reviewed cases</span
                        ><i
                            class="fa-solid fa-arrow-right"
                            aria-hidden="true"
                        ></i
                        ><span>Approved procedures</span
                        ><i
                            class="fa-solid fa-arrow-right"
                            aria-hidden="true"
                        ></i
                        ><span>Analyst learning</span
                        ><i
                            class="fa-solid fa-arrow-right"
                            aria-hidden="true"
                        ></i
                        ><span>Trusted reporting</span>
                    </div>
                </div>
            </section>

            <!-- Control Principles -->
            <section
                class="section"
                id="control-principles"
            >
                <div class="page-container">
                    <div class="section-heading">
                        <p class="eyebrow">
                            <span aria-hidden="true"></span>Controlled intelligence
                        </p>
                        <h2>
                            Control is part<br />
                            of the solution.
                        </h2>
                        <p>
                            Useful assistance depends on the evidence it can use, the actions it may
                            support and the people responsible for review.
                        </p>
                    </div>
                    <div class="solution-controls">
                        <article class="solution-control">
                            <span
                                ><i
                                    class="fa-solid fa-file-shield"
                                    aria-hidden="true"
                                ></i
                            ></span>
                            <h3>Evidence before recommendation</h3>
                            <p>Material findings remain linked to supporting records.</p>
                        </article>
                        <article class="solution-control">
                            <span
                                ><i
                                    class="fa-solid fa-lock"
                                    aria-hidden="true"
                                ></i
                            ></span>
                            <h3>Permissions before access</h3>
                            <p>Confirm approved sources, roles and access boundaries.</p>
                        </article>
                        <article class="solution-control">
                            <span
                                ><i
                                    class="fa-solid fa-user-shield"
                                    aria-hidden="true"
                                ></i
                            ></span>
                            <h3>Human review before consequential action</h3>
                            <p>Authorised people review recommendations and actions.</p>
                        </article>
                        <article class="solution-control">
                            <span
                                ><i
                                    class="fa-solid fa-file-lines"
                                    aria-hidden="true"
                                ></i
                            ></span>
                            <h3>Approved knowledge before procedure changes</h3>
                            <p>Use current policies and accepted incident lessons.</p>
                        </article>
                        <article class="solution-control">
                            <span
                                ><i
                                    class="fa-solid fa-database"
                                    aria-hidden="true"
                                ></i
                            ></span>
                            <h3>Source preservation</h3>
                            <p>Keep original records and trusted calculations.</p>
                        </article>
                        <article class="solution-control">
                            <span
                                ><i
                                    class="fa-solid fa-fingerprint"
                                    aria-hidden="true"
                                ></i
                            ></span>
                            <h3>Clear decision ownership</h3>
                            <p>Name the person responsible for each approval.</p>
                        </article>
                        <article class="solution-control">
                            <span
                                ><i
                                    class="fa-solid fa-network-wired"
                                    aria-hidden="true"
                                ></i
                            ></span>
                            <h3>Scoped integrations</h3>
                            <p>Agree systems, APIs, licences and data flows.</p>
                        </article>
                        <article class="solution-control">
                            <span
                                ><i
                                    class="fa-solid fa-shield-halved"
                                    aria-hidden="true"
                                ></i
                            ></span>
                            <h3>Reviewable outputs</h3>
                            <p>Separate observed facts, inferences and open questions.</p>
                        </article>
                    </div>
                </div>
            </section>

            <!-- Customer Starting Point -->
            <section
                class="section light-section"
                id="starting-point"
            >
                <div class="page-container">
                    <div class="section-heading">
                        <p class="eyebrow"><span aria-hidden="true"></span>Your starting point</p>
                        <h2>
                            Start with the workflow<br />
                            that already matters.
                        </h2>
                        <p>You do not need to replace your entire security environment to begin.</p>
                    </div>
                    <div class="solution-problems">
                        <article class="solution-problem">
                            <span
                                ><i
                                    class="fa-solid fa-diagram-project"
                                    aria-hidden="true"
                                ></i
                            ></span>
                            <div>
                                <h3>Scattered evidence</h3>
                                <p>An alert takes several tools and people to explain.</p>
                            </div>
                        </article>
                        <article class="solution-problem">
                            <span
                                ><i
                                    class="fa-solid fa-clock-rotate-left"
                                    aria-hidden="true"
                                ></i
                            ></span>
                            <div>
                                <h3>Repeated investigations</h3>
                                <p>Reviewed context needs to become easier to reuse.</p>
                            </div>
                        </article>
                        <article class="solution-problem">
                            <span
                                ><i
                                    class="fa-solid fa-file-circle-question"
                                    aria-hidden="true"
                                ></i
                            ></span>
                            <div>
                                <h3>Unclear procedures</h3>
                                <p>Roles, evidence checks or escalation steps need attention.</p>
                            </div>
                        </article>
                        <article class="solution-problem">
                            <span
                                ><i
                                    class="fa-solid fa-brain"
                                    aria-hidden="true"
                                ></i
                            ></span>
                            <div>
                                <h3>Knowledge in people’s heads</h3>
                                <p>Approved experience should be useful beyond one person.</p>
                            </div>
                        </article>
                        <article class="solution-problem">
                            <span
                                ><i
                                    class="fa-solid fa-file-lines"
                                    aria-hidden="true"
                                ></i
                            ></span>
                            <div>
                                <h3>Manual reporting</h3>
                                <p>The same report should not require reconstruction each month.</p>
                            </div>
                        </article>
                        <article class="solution-problem">
                            <span
                                ><i
                                    class="fa-solid fa-eye-slash"
                                    aria-hidden="true"
                                ></i
                            ></span>
                            <div>
                                <h3>Hidden visibility gaps</h3>
                                <p>
                                    Missing source data should not look like an absence of threats.
                                </p>
                            </div>
                        </article>
                    </div>
                    <div class="solution-readiness">
                        <span
                            ><i
                                class="fa-solid fa-gears"
                                aria-hidden="true"
                            ></i
                        ></span>
                        <div>
                            <p class="mono-label">START SMALLER WHEN NECESSARY</p>
                            <p>
                                When telemetry, ownership or procedures are incomplete, begin with
                                readiness and engineering. AI assistance should follow a usable
                                evidence foundation rather than conceal the lack of one.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Value by Role -->
            <section
                class="section light-section"
                id="stakeholders"
            >
                <div class="page-container">
                    <div class="section-heading">
                        <p class="eyebrow"><span aria-hidden="true"></span>Who receives value</p>
                        <h2>
                            The same evidence.<br />
                            Different decisions.
                        </h2>
                    </div>
                    <div class="solution-audiences">
                        <article class="audience-card">
                            <span class="audience-icon"
                                ><i
                                    class="fa-solid fa-shield-halved"
                                    aria-hidden="true"
                                ></i
                            ></span>
                            <h3>Security leaders and SOC managers</h3>
                            <p class="mono-label">WHAT THEY NEED TO SEE</p>
                            <p>Coverage, quality, recurring weaknesses and approved changes.</p>
                            <div class="audience-output">
                                <span>USEFUL OUTPUT</span
                                ><strong>Case brief and tuning backlog.</strong>
                            </div>
                        </article>
                        <article class="audience-card">
                            <span class="audience-icon"
                                ><i
                                    class="fa-solid fa-server"
                                    aria-hidden="true"
                                ></i
                            ></span>
                            <h3>CIO, CTO and system owners</h3>
                            <p class="mono-label">WHAT THEY NEED TO SEE</p>
                            <p>Integration dependencies, access and safe change design.</p>
                            <div class="audience-output">
                                <span>USEFUL OUTPUT</span
                                ><strong>Architecture and rollback plan.</strong>
                            </div>
                        </article>
                        <article class="audience-card">
                            <span class="audience-icon"
                                ><i
                                    class="fa-solid fa-scale-balanced"
                                    aria-hidden="true"
                                ></i
                            ></span>
                            <h3>Risk, compliance and privacy</h3>
                            <p class="mono-label">WHAT THEY NEED TO SEE</p>
                            <p>Control objectives, evidence and processing boundaries.</p>
                            <div class="audience-output">
                                <span>USEFUL OUTPUT</span><strong>Control and evidence map.</strong>
                            </div>
                        </article>
                        <article class="audience-card">
                            <span class="audience-icon"
                                ><i
                                    class="fa-solid fa-briefcase"
                                    aria-hidden="true"
                                ></i
                            ></span>
                            <h3>CEO, CFO and procurement</h3>
                            <p class="mono-label">WHAT THEY NEED TO SEE</p>
                            <p>Scope, cost drivers, measured benefit and residual risk.</p>
                            <div class="audience-output">
                                <span>USEFUL OUTPUT</span
                                ><strong>Management pack and acceptance review.</strong>
                            </div>
                        </article>
                    </div>
                    <div class="solution-governance">
                        <i
                            class="fa-solid fa-scale-balanced"
                            aria-hidden="true"
                        ></i>
                        <p>
                            Technical evidence supports decisions.<br />
                            It does not replace governance.
                        </p>
                    </div>
                </div>
            </section>

            <!-- FAQ -->
            <section
                class="section light-section"
                id="faq"
            >
                <div class="page-container solution-faq-layout">
                    <div>
                        <div class="section-heading">
                            <p class="eyebrow">
                                <span aria-hidden="true"></span>Questions, answered
                            </p>
                            <h2>
                                Questions before<br />
                                we define the solution.
                            </h2>
                        </div>
                        <p>
                            Confirm the evidence, the operating boundary and the person who will
                            review success.
                        </p>
                        <a
                            class="text-link"
                            href="mailto:bilal@oryvantai.tech"
                            >Ask your question
                            <i
                                class="fa-solid fa-arrow-up-right-from-square"
                                aria-hidden="true"
                            ></i
                        ></a>
                    </div>
                    <div class="faq-list">
                        <details
                            class="faq-item"
                            open
                        >
                            <summary>
                                <span class="faq-num">01</span
                                ><span>Can we start with only one workflow?</span
                                ><span
                                    class="faq-toggle"
                                    aria-hidden="true"
                                    >+</span
                                >
                            </summary>
                            <p>
                                Yes. A bounded investigation, procedure or reporting workflow is a
                                sensible starting point. The proposal defines the sources, reviewer,
                                deliverables and acceptance criteria. Connect solution areas only
                                where that improves a real operating task.
                            </p>
                        </details>
                        <details class="faq-item">
                            <summary>
                                <span class="faq-num">02</span
                                ><span>Does OryvantAI replace our SIEM?</span
                                ><span
                                    class="faq-toggle"
                                    aria-hidden="true"
                                    >+</span
                                >
                            </summary>
                            <p>
                                No replacement is assumed. We assess your existing stack and native
                                features first, then define the integration or custom work that adds
                                value. Your SIEM remains an appropriate system for event storage,
                                search and detection.
                            </p>
                        </details>
                        <details class="faq-item">
                            <summary>
                                <span class="faq-num">03</span
                                ><span>Does AI make final security decisions?</span
                                ><span
                                    class="faq-toggle"
                                    aria-hidden="true"
                                    >+</span
                                >
                            </summary>
                            <p>
                                The analyst verifies context and owns the disposition. Read only and
                                approval controlled workflows are the starting point. Any executable
                                response requires separately validated permissions, change control
                                and authorised approval.
                            </p>
                        </details>
                        <details class="faq-item">
                            <summary>
                                <span class="faq-num">04</span
                                ><span>How does OryvantAI work with existing tools?</span
                                ><span
                                    class="faq-toggle"
                                    aria-hidden="true"
                                    >+</span
                                >
                            </summary>
                            <p>
                                Discovery confirms the systems, APIs, licences, approved evidence
                                and access boundaries for your scope. Custom AI assistance connects
                                permitted information and review workflows around your existing
                                environment.
                            </p>
                        </details>
                        <details class="faq-item">
                            <summary>
                                <span class="faq-num">05</span
                                ><span>Can our own SOPs and playbooks be used?</span
                                ><span
                                    class="faq-toggle"
                                    aria-hidden="true"
                                    >+</span
                                >
                            </summary>
                            <p>
                                Yes. Current approved policies, procedures, responsibilities and
                                permitted example cases can form the knowledge base. Ownership,
                                permissions and versions remain explicit.
                            </p>
                        </details>
                        <details class="faq-item">
                            <summary>
                                <span class="faq-num">06</span
                                ><span>How are proposed procedure changes reviewed?</span
                                ><span
                                    class="faq-toggle"
                                    aria-hidden="true"
                                    >+</span
                                >
                            </summary>
                            <p>
                                A proposal explains what should change, the supporting cases or
                                documents, open questions and the responsible owner. Your procedure
                                owner reviews the draft. Consequential steps are tested before
                                publication, with version history and a route back to the previous
                                version.
                            </p>
                        </details>
                        <details class="faq-item">
                            <summary>
                                <span class="faq-num">07</span
                                ><span
                                    >Can the solution support operational technology
                                    environments?</span
                                ><span
                                    class="faq-toggle"
                                    aria-hidden="true"
                                    >+</span
                                >
                            </summary>
                            <p>
                                An agreed scope can begin with authorised passive or read only
                                telemetry. Operational changes, active testing or production
                                isolation require the asset owner’s operational and safety approval.
                                The permitted systems and delivery boundaries are confirmed first.
                            </p>
                        </details>
                        <details class="faq-item">
                            <summary>
                                <span class="faq-num">08</span
                                ><span>How is evidence preserved?</span
                                ><span
                                    class="faq-toggle"
                                    aria-hidden="true"
                                    >+</span
                                >
                            </summary>
                            <p>
                                The workflow keeps source event references, original records and
                                trusted calculations available for review. Briefs distinguish
                                observed facts, inferences and missing information. Retention,
                                access, export and handover arrangements are agreed for the
                                deployment.
                            </p>
                        </details>
                    </div>
                </div>
            </section>

            <!-- Final CTA -->
            <section
                class="solution-final-cta"
                id="contact"
            >
                <div class="page-container">
                    <div class="contact-panel">
                        <div>
                            <p class="eyebrow">
                                <span aria-hidden="true"></span>Define your first scope
                            </p>
                            <h2>
                                Start with one security<br />
                                workflow that matters.
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
                                    href="index.html"
                                    >Back to Home<i
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





















