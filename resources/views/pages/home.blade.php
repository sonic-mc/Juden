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
@endsection
