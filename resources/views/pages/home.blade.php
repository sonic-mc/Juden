@extends('layouts.app')

@section('title', 'Juden Petroleum | Home')

@section('content')
    <section class="hero hero-landing">
        <div class="container hero-grid hero-grid-single">
            <div class="hero-panel">
                <p class="eyebrow">WWW.JUDEN.CO.ZW</p>
                <p class="hero-kicker">Enterprise Fuel • Fleet Support • Convenience Services</p>
                <h1>Juden Petroleum (Pvt) Ltd — Powering Every Journey.</h1>
                <p>
                    Family-run and incorporated in 2023, we supply blended fuels, Diesel 50 and LPG with reliable,
                    innovative and high-performance service at competitive prices.
                </p>
                <div class="cta-row">
                    <a href="{{ route('services') }}" class="btn btn-primary">Our Services</a>
                    <a href="{{ route('contact') }}" class="btn btn-outline">Get A Quote</a>
                </div>
                <ul class="hero-points">
                    <li>Premium quality fuels</li>
                    <li>Reliable branch support</li>
                    <li>Fast commercial response</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section home-scroll-section section-compact">
        <div class="container cards-3 stats-grid">
            <article class="card stat-card">
                <h3>2 Strategic Branches</h3>
                <p>Serving Kwekwe and Figtree, Bulawayo with responsive on-ground support.</p>
            </article>
            <article class="card stat-card">
                <h3>3 Core Fuel Lines</h3>
                <p>Unleaded petrol, Diesel 50 and LPG supply for multiple customer segments.</p>
            </article>
            <article class="card stat-card">
                <h3>Service-Led Operations</h3>
                <p>Built around reliability, quality standards and long-term client confidence.</p>
            </article>
        </div>
    </section>

    <section class="section home-scroll-section">
        <div class="container">
            <div class="section-heading">
                <p class="eyebrow">Our Core Products</p>
                <h2>Top-quality products backed by efficient operations.</h2>
            </div>

            <div class="cards-3">
                <article class="card">
                    <img class="card-media" src="{{ asset('images/image03.jpg') }}" alt="Unleaded petrol supply">
                    <h3>Unleaded Petrol Supply</h3>
                    <p>High-quality unleaded petrol for diverse applications and optimal vehicle performance.</p>
                </article>
                <article class="card">
                    <img class="card-media" src="{{ asset('images/image04.jpg') }}" alt="Diesel 50 supply">
                    <h3>Diesel 50 Supply</h3>
                    <p>Premium Diesel 50 at competitive prices, supported by dedicated customer service.</p>
                </article>
                <article class="card">
                    <img class="card-media" src="{{ asset('images/image05.jpg') }}" alt="LPG supply solutions">
                    <h3>LPG Supply</h3>
                    <p>Reliable liquefied petroleum gas solutions for residential, commercial and industrial use.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="section alt home-scroll-section home-about-gap">
        <div class="container split">
            <div>
                <p class="eyebrow">About Us</p>
                <h2>Building trust through quality service.</h2>
                <p>
                    We pride ourselves on a one-stop approach that meets diverse client needs with reliability,
                    efficiency and innovation. Our goal is to become a leading petroleum service provider while
                    maximizing sustainable value for stakeholders.
                </p>
            </div>
            <div class="mini-grid">
                <div class="mini-card"><strong>Founded</strong><span>2023</span></div>
                <div class="mini-card"><strong>Locations</strong><span>Kwekwe & Figtree, Bulawayo</span></div>
                <div class="mini-card"><strong>Approach</strong><span>One-stop customer service</span></div>
                <div class="mini-card"><strong>Promise</strong><span>Best at your service</span></div>
            </div>
        </div>
    </section>

    <section class="section home-scroll-section">
        <div class="container">
            <div class="section-heading">
                <p class="eyebrow">Why Clients Choose Juden</p>
                <h2>Built for consistency, trusted for service.</h2>
            </div>
            <div class="cards-3">
                <article class="card">
                    <img class="card-media" src="{{ asset('images/image07.jpg') }}" alt="Reliable fuel supply chain">
                    <h3>Reliable Supply Chain</h3>
                    <p>
                        Our operations model ensures dependable fuel availability for private motorists, fleets and
                        industrial users across our service locations.
                    </p>
                </article>
                <article class="card">
                    <img class="card-media" src="{{ asset('images/image08.jpg') }}" alt="Service quality and standards">
                    <h3>Service Quality Standards</h3>
                    <p>
                        We keep improving our service delivery using current industry practices to maintain quality,
                        speed and safety at every customer touchpoint.
                    </p>
                </article>
                <article class="card">
                    <img class="card-media" src="{{ asset('images/image09.jpg') }}" alt="Long term customer partnerships">
                    <h3>Long-Term Partnerships</h3>
                    <p>
                        Our one-stop approach is designed to support evolving client needs and build long-term trust
                        with every service interaction.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <section class="section alt home-scroll-section">
        <div class="container split">
            <div>
                <p class="eyebrow">Enterprise Readiness</p>
                <h2>Structured to support commercial, fleet and industrial demand.</h2>
                <p>
                    Our operating model is designed for scale, with disciplined supply scheduling, responsive branch
                    operations and customer-first service standards that align with modern fuel station expectations.
                </p>
            </div>
            <div class="mini-grid">
                <div class="mini-card"><strong>Quality Control</strong><span>Consistent fuel standards</span></div>
                <div class="mini-card"><strong>Operational Speed</strong><span>Efficient fulfilment windows</span></div>
                <div class="mini-card"><strong>Customer Care</strong><span>Dedicated support channels</span></div>
                <div class="mini-card"><strong>Service Reliability</strong><span>Dependable branch operations</span></div>
            </div>
        </div>
    </section>

    <section class="section home-scroll-section">
        <div class="container">
            <div class="section-heading">
                <p class="eyebrow">Solutions That Scale</p>
                <h2>Built for households, fleets and high-volume business operations.</h2>
            </div>

            <div class="cards-3 solution-grid">
                <article class="card solution-card">
                    <img class="card-media" src="{{ asset('images/image10.jpg') }}" alt="Fuel station retail service">
                    <h3>Retail & Station Service</h3>
                    <p>
                        Reliable fuel access, quick forecourt turnaround and friendly on-site support for everyday
                        motorists and local communities.
                    </p>
                    <ul class="value-list">
                        <li>Fast service windows</li>
                        <li>Consistent fuel availability</li>
                        <li>Customer-first support</li>
                    </ul>
                </article>
                <article class="card solution-card">
                    <img class="card-media" src="{{ asset('images/image11.jpg') }}" alt="Fleet refuelling support">
                    <h3>Fleet Refuelling Programs</h3>
                    <p>
                        Structured supply plans for transport operators, commercial fleets and contractor networks that
                        depend on dependable uptime.
                    </p>
                    <ul class="value-list">
                        <li>Planned supply schedules</li>
                        <li>Bulk-demand coordination</li>
                        <li>Dedicated account support</li>
                    </ul>
                </article>
                <article class="card solution-card">
                    <img class="card-media" src="{{ asset('images/image12.jpg') }}" alt="Industrial energy supply">
                    <h3>Industrial Energy Supply</h3>
                    <p>
                        Stable Diesel 50 and LPG support for industrial operations where quality, timing and safety are
                        critical.
                    </p>
                    <ul class="value-list">
                        <li>Quality-controlled products</li>
                        <li>Operational continuity focus</li>
                        <li>Safety-led handling standards</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <section class="section alt home-scroll-section">
        <div class="container">
            <div class="section-heading">
                <p class="eyebrow">How We Work</p>
                <h2>A clear 4-step process from request to reliable delivery.</h2>
            </div>

            <div class="process-grid">
                <article class="process-card">
                    <span class="process-step">01</span>
                    <h3>Requirement Review</h3>
                    <p>We capture your fuel type, expected volume and delivery timing to design a practical plan.</p>
                </article>
                <article class="process-card">
                    <span class="process-step">02</span>
                    <h3>Supply Planning</h3>
                    <p>Our team aligns branch capacity, product readiness and service windows around your operation.</p>
                </article>
                <article class="process-card">
                    <span class="process-step">03</span>
                    <h3>Execution & Support</h3>
                    <p>We fulfill with disciplined coordination and responsive communication across every touchpoint.</p>
                </article>
                <article class="process-card">
                    <span class="process-step">04</span>
                    <h3>Continuous Improvement</h3>
                    <p>We track service outcomes and refine delivery standards to improve speed and reliability.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="section home-scroll-section">
        <div class="container">
            <div class="section-heading">
                <p class="eyebrow">Success Stories</p>
                <h2>Recent delivery outcomes from sectors we support.</h2>
            </div>

            <div class="cards-3 case-grid">
                <article class="card case-card">
                    <img class="card-media" src="{{ asset('images/image13.jpg') }}" alt="Logistics fleet fueling case">
                    <div class="case-meta">Logistics • Fleet Operations</div>
                    <h3>Route Reliability Program for a Regional Fleet</h3>
                    <p>
                        A coordinated supply schedule improved fueling consistency and reduced operational disruptions
                        across a multi-vehicle transport route.
                    </p>
                    <a class="case-link" href="{{ route('contact') }}">Discuss Similar Support</a>
                </article>
                <article class="card case-card">
                    <img class="card-media" src="{{ asset('images/image14.jpg') }}" alt="Construction site diesel support">
                    <div class="case-meta">Construction • Site Operations</div>
                    <h3>Steady Diesel Support for Time-Critical Project Work</h3>
                    <p>
                        With scheduled replenishment and proactive communication, project teams maintained momentum
                        during high-demand operating periods.
                    </p>
                    <a class="case-link" href="{{ route('services') }}">View Service Coverage</a>
                </article>
                <article class="card case-card">
                    <img class="card-media" src="{{ asset('images/image15.jpg') }}" alt="Retail station continuity case">
                    <div class="case-meta">Retail • Community Service</div>
                    <h3>Improved Forecourt Continuity for Peak Traffic Hours</h3>
                    <p>
                        Branch coordination and customer-focused execution helped sustain service quality during
                        high-footfall periods.
                    </p>
                    <a class="case-link" href="{{ route('about') }}">Learn More About Juden</a>
                </article>
            </div>
        </div>
    </section>

    <section class="section alt home-scroll-section">
        <div class="container">
            <div class="section-heading">
                <p class="eyebrow">Industries We Power</p>
                <h2>Sector-ready service for energy-dependent operations.</h2>
            </div>

            <div class="industry-grid">
                <article class="industry-card"><h3>Transport & Logistics</h3><p>Fleet uptime support.</p></article>
                <article class="industry-card"><h3>Manufacturing</h3><p>Stable diesel and LPG supply.</p></article>
                <article class="industry-card"><h3>Construction</h3><p>Reliable project-phase fueling.</p></article>
                <article class="industry-card"><h3>Agriculture</h3><p>Seasonal and routine energy demand.</p></article>
                <article class="industry-card"><h3>Retail & Hospitality</h3><p>Customer-facing service consistency.</p></article>
                <article class="industry-card"><h3>General Commercial</h3><p>Responsive daily operational support.</p></article>
            </div>
        </div>
    </section>

    <section class="section home-scroll-section section-compact">
        <div class="container">
            <div class="partner-banner">
                <div>
                    <p class="eyebrow">Expand With Juden</p>
                    <h2>Need dependable fuel support for your next growth phase?</h2>
                    <p>
                        Partner with Juden Petroleum for structured supply, service quality and responsive operational
                        support.
                    </p>
                </div>
                <div class="cta-row">
                    <a href="{{ route('contact') }}" class="btn btn-primary">Request A Quote</a>
                    <a href="{{ route('services') }}" class="btn btn-outline">Explore Services</a>
                </div>
            </div>
        </div>
    </section>
@endsection
