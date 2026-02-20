@extends('layouts.app')

@section('title', 'Juden Petroleum | About')

@section('content')
    <section class="page-banner">
        <div class="container">
            <p class="eyebrow">About Us</p>
            <h1>Family-run. Service-led. Built for long-term reliability.</h1>
            <p>
                Juden Petroleum powers households, fleets and commercial operations with quality products, disciplined
                execution and customer-first support.
            </p>
        </div>
    </section>

    <section class="section">
        <div class="container split">
            <div>
                <p class="eyebrow">Who We Are</p>
                <h2>Modern petroleum services grounded in trust and consistency.</h2>
                <p>
                    Juden Petroleum Private Limited, incorporated in 2023, is a family-run business specializing in
                    the supply of blended fuels, diesel and Liquefied Petroleum Gas (LPG).
                </p>
                <p>
                    We pride ourselves on delivering innovative, high-performance services while supplying top-quality
                    fuel products at competitive prices. Our one-stop service approach supports diverse client needs
                    and fosters trust and long-term loyalty.
                </p>
                <p>Our ambition is to become a leading petroleum partner while creating sustainable stakeholder value.</p>
            </div>

            <div class="card">
                <img class="card-media" src="{{ asset('images/image07.jpg') }}" alt="Juden service commitment">
                <h3>Our Commitment</h3>
                <p>
                    We are committed to powering your journey through comprehensive service offerings across three
                    categories: fuel & charging solutions, essential vehicle care, and on-site convenience services.
                </p>
                <p>
                    We strive to enhance every customer travel experience through reliability, efficiency and quality
                    service.
                </p>
                <ul class="value-list">
                    <li>Reliable, quality-assured product supply</li>
                    <li>Customer-centric branch operations</li>
                    <li>Continuous operational improvement</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section alt">
        <div class="container cards-3">
            <article class="card">
                <img class="card-media" src="{{ asset('images/image08.jpg') }}" alt="Mission and strategic service direction">
                <h3>Our Mission</h3>
                <p>To be the principal supplier of innovative and reliable petroleum products and service solutions.</p>
            </article>

            <article class="card">
                <img class="card-media" src="{{ asset('images/image09.jpg') }}" alt="Vision for sustainable energy services">
                <h3>Our Vision</h3>
                <p>To envision global growth through the creation of sustainable energy products and quality services.</p>
            </article>

            <article class="card">
                <img class="card-media" src="{{ asset('images/image10.jpg') }}" alt="Core values and company culture">
                <h3>Core Values</h3>
                <ul class="value-list">
                    <li>Integrity</li>
                    <li>Stewardship</li>
                    <li>High Performance</li>
                    <li>Diversity</li>
                    <li>Innovation</li>
                </ul>
            </article>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-heading">
                <p class="eyebrow">How We Deliver</p>
                <h2>A practical process focused on reliability and speed.</h2>
            </div>

            <div class="process-grid">
                <article class="process-card">
                    <span class="process-step">01</span>
                    <h3>Needs Assessment</h3>
                    <p>We evaluate fuel type, expected demand and service timelines for each client profile.</p>
                </article>
                <article class="process-card">
                    <span class="process-step">02</span>
                    <h3>Planning & Allocation</h3>
                    <p>Branch teams align stock readiness and supply schedules to support uninterrupted operations.</p>
                </article>
                <article class="process-card">
                    <span class="process-step">03</span>
                    <h3>Delivery & Support</h3>
                    <p>Execution is managed with responsive customer communication and service accountability.</p>
                </article>
                <article class="process-card">
                    <span class="process-step">04</span>
                    <h3>Review & Improvement</h3>
                    <p>We measure outcomes and refine service standards to strengthen client confidence.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-heading">
                <p class="eyebrow">Strategic Focus</p>
                <h2>How we sustain growth and service excellence.</h2>
            </div>
            <div class="cards-3">
                <article class="card">
                    <img class="card-media" src="{{ asset('images/image11.jpg') }}" alt="Operational efficiency strategy">
                    <h3>Operational Efficiency</h3>
                    <p>
                        We run highly efficient operations that help us deliver top-quality fuel products at
                        competitive prices without compromising standards.
                    </p>
                </article>
                <article class="card">
                    <img class="card-media" src="{{ asset('images/image12.jpg') }}" alt="Stakeholder value creation">
                    <h3>Stakeholder Value</h3>
                    <p>
                        Our ambition is to maximize sustainable value for clients, communities and business partners
                        through reliable energy service delivery.
                    </p>
                </article>
                <article class="card">
                    <img class="card-media" src="{{ asset('images/image13.jpg') }}" alt="Innovation and continuous improvement">
                    <h3>Continuous Improvement</h3>
                    <p>
                        We remain committed to innovation and high performance by continuously refining our products,
                        processes and customer support experience.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <section class="section alt">
        <div class="container split">
            <div>
                <p class="eyebrow">Our Journey</p>
                <h2>Key milestones shaping Juden’s growth path.</h2>
                <p>
                    From our launch in 2023, we have focused on service reliability, disciplined operations and stronger
                    support for both individual and commercial fuel customers.
                </p>
            </div>
            <div class="mini-grid">
                <div class="mini-card"><strong>2023</strong><span>Company incorporated and operations initiated.</span></div>
                <div class="mini-card"><strong>Branch Coverage</strong><span>Active in Kwekwe and Figtree, Bulawayo.</span></div>
                <div class="mini-card"><strong>Product Range</strong><span>Blended fuels, Diesel 50 and LPG support.</span></div>
                <div class="mini-card"><strong>Next Phase</strong><span>Scale enterprise readiness and service quality.</span></div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-heading">
                <p class="eyebrow">Where We Create Value</p>
                <h2>Industry-focused support for energy-reliant businesses.</h2>
            </div>

            <div class="industry-grid">
                <article class="industry-card"><h3>Transport & Logistics</h3><p>Fuel reliability for route continuity.</p></article>
                <article class="industry-card"><h3>Construction</h3><p>Dependable diesel support for project timelines.</p></article>
                <article class="industry-card"><h3>Manufacturing</h3><p>Steady supply for production operations.</p></article>
                <article class="industry-card"><h3>Agriculture</h3><p>Operational support across seasonal demand.</p></article>
                <article class="industry-card"><h3>Retail Networks</h3><p>Forecourt and customer-service consistency.</p></article>
                <article class="industry-card"><h3>General Commercial</h3><p>Responsive branch-backed service delivery.</p></article>
            </div>
        </div>
    </section>

    <section class="section alt">
        <div class="container">
            <div class="section-heading section-heading-center">
                <p class="eyebrow">Our Leadership Team</p>
                <h2>Meet the experts driving Juden’s service standards.</h2>
                <p>
                    Our team combines practical petroleum experience, operational discipline and customer-first thinking
                    to deliver reliable service outcomes.
                </p>
            </div>

            <div class="team-grid">
                <article class="team-member">
                    <aside class="team-social-bar" aria-label="Team member social links">
                        <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" aria-label="Facebook">f</a>
                        <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" aria-label="Twitter">x</a>
                        <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">in</a>
                    </aside>
                    <div class="team-member-media-wrap">
                        <img src="{{ asset('images/image07.jpg') }}" alt="Juden operations director portrait" class="team-member-media">
                    </div>
                    <div class="team-member-info">
                        <h3>Takudzwa Moyo</h3>
                        <p>Operations Director</p>
                    </div>
                </article>

                <article class="team-member team-member-highlight">
                    <aside class="team-social-bar" aria-label="Team member social links">
                        <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" aria-label="Facebook">f</a>
                        <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" aria-label="Twitter">x</a>
                        <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">in</a>
                    </aside>
                    <div class="team-member-media-wrap">
                        <img src="{{ asset('images/image11.jpg') }}" alt="Juden commercial manager portrait" class="team-member-media">
                    </div>
                    <div class="team-member-info">
                        <h3>Rumbidzai Ncube</h3>
                        <p>Commercial Manager</p>
                    </div>
                </article>

                <article class="team-member">
                    <aside class="team-social-bar" aria-label="Team member social links">
                        <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" aria-label="Facebook">f</a>
                        <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" aria-label="Twitter">x</a>
                        <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">in</a>
                    </aside>
                    <div class="team-member-media-wrap">
                        <img src="{{ asset('images/image15.jpg') }}" alt="Juden customer service lead portrait" class="team-member-media">
                    </div>
                    <div class="team-member-info">
                        <h3>Tendai Chikore</h3>
                        <p>Customer Service Lead</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="section section-compact alt">
        <div class="container">
            <div class="partner-banner">
                <div>
                    <p class="eyebrow">Work With Juden</p>
                    <h2>Looking for a long-term petroleum service partner?</h2>
                    <p>
                        Our team is ready to support your business with dependable products, structured service plans
                        and responsive communication.
                    </p>
                </div>
                <div class="cta-row">
                    <a href="{{ route('contact') }}" class="btn btn-primary">Start A Conversation</a>
                    <a href="{{ route('services') }}" class="btn btn-outline">Explore Services</a>
                </div>
            </div>
        </div>
    </section>
@endsection
