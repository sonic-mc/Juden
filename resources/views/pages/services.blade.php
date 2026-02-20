@extends('layouts.app')

@section('title', 'Juden Petroleum | Services')

@section('content')
    <section class="page-banner">
        <div class="container">
            <p class="eyebrow">Our Services</p>
            <h1>One-stop energy and vehicle service solutions.</h1>
            <p>
                We deliver innovative, high-performance services that meet customer energy and vehicle care needs
                while building lasting trust and loyalty.
            </p>
            <div class="cta-row">
                <a href="{{ route('contact') }}" class="btn btn-primary">Request Service Support</a>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container cards-3">
            <article class="card">
                <img class="card-media" src="{{ asset('images/image11.jpg') }}" alt="Unleaded petrol service">
                <h3>Unleaded Petrol Supply</h3>
                <p>
                    Delivering high-quality unleaded petrol tailored for diverse applications and optimal vehicle
                    performance.
                </p>
            </article>
            <article class="card">
                <img class="card-media" src="{{ asset('images/image12.jpg') }}" alt="Diesel 50 fueling">
                <h3>Diesel 50 Supply</h3>
                <p>
                    Providing premium Diesel 50 at competitive prices, backed by efficient operations and dedicated
                    service.
                </p>
            </article>
            <article class="card">
                <img class="card-media" src="{{ asset('images/image13.jpg') }}" alt="LPG tank and gas service">
                <h3>LPG Supply</h3>
                <p>
                    Reliable LPG solutions for residential, commercial and industrial use with safety and quality as
                    priorities.
                </p>
            </article>
            <article class="card">
                <img class="card-media" src="{{ asset('images/image14.jpg') }}" alt="Fuel and charging support">
                <h3>Fuel & Charging Solutions</h3>
                <p>Comprehensive fueling and charging support for multiple vehicle types and travel needs.</p>
            </article>
            <article class="card">
                <img class="card-media" src="{{ asset('images/image15.jpg') }}" alt="Vehicle care services">
                <h3>Essential Vehicle Care</h3>
                <p>Vehicle maintenance and wash services designed to keep journeys efficient and safe.</p>
            </article>
            <article class="card">
                <img class="card-media" src="{{ asset('images/image03.jpg') }}" alt="On-site retail convenience">
                <h3>On-site Convenience Services</h3>
                <p>Retail products, refreshments and essential travel amenities for customer convenience.</p>
            </article>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-heading">
                <p class="eyebrow">Fuel Products</p>
                <h2>Quality petroleum products for every scale of demand.</h2>
            </div>
            <div class="cards-3">
                <article class="card product-card">
                    <img class="card-media" src="{{ asset('images/image12.jpg') }}" alt="Blend fuel product">
                    <h3>Blend</h3>
                    <p>
                        Quality blend fuel for day-to-day mobility and business continuity with stable performance.
                    </p>
                </article>

                <article class="card product-card">
                    <img class="card-media" src="{{ asset('images/image13.jpg') }}" alt="Diesel product">
                    <h3>Diesel</h3>
                    <p>
                        High-demand diesel support for fleets, power generation systems and industrial operations.
                    </p>
                </article>

                <article class="card product-card">
                    <img class="card-media" src="{{ asset('images/image14.jpg') }}" alt="Liquid petroleum gas product">
                    <h3>Liquid Petroleum Gas</h3>
                    <p>
                        Safe LPG options suited for household use, hospitality, institutions and commercial kitchens.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <section class="section alt">
        <div class="container">
            <div class="section-heading">
                <p class="eyebrow">Service Locations</p>
                <h2>Find us in Kwekwe and Figtree, Bulawayo.</h2>
            </div>
            <div class="cards-3">
                <article class="card">
                    <img class="card-media" src="{{ asset('images/image04.jpg') }}" alt="Kwekwe service station location">
                    <h3>Kwekwe Service Station</h3>
                    <p>7859 Industrial Site, Harare Road, Kwekwe</p>
                    <p>+263 771 444 303</p>
                    <p>+263 715 650 687</p>
                </article>
                <article class="card">
                    <img class="card-media" src="{{ asset('images/image05.jpg') }}" alt="Redwood Ultra City location">
                    <h3>Redwood Ultra City</h3>
                    <p>Redwood 1, Figtree</p>
                    <p>Bulawayo, Zimbabwe</p>
                </article>
                <article class="card">
                    <img class="card-media" src="{{ asset('images/image06.jpg') }}" alt="Juden support and assistance">
                    <h3>Support</h3>
                    <p>For supply enquiries and service partnerships, contact our team directly.</p>
                    <p><a href="{{ route('contact') }}">Go to Contact Page</a></p>
                </article>
            </div>
        </div>
    </section>

    <section class="section station-benefits-section">
        <div class="container station-benefits-layout">
            <div>
                <h2>Get more benefits at our service stations.<br>We <span>care about your comfort and safety.</span></h2>
                <p>
                    Beyond dependable fuel supply, Juden locations are designed to support everyday convenience for
                    drivers, families and commercial teams on the move.
                </p>

                <div class="station-benefits-grid">
                    <article class="station-benefit-item">
                        <span class="station-benefit-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 8.5C4.4 6.2 7.7 5 12 5s7.6 1.2 10 3.5" stroke="currentColor" stroke-width="2"/><path d="M5.5 12C7.2 10.4 9.3 9.5 12 9.5s4.8.9 6.5 2.5" stroke="currentColor" stroke-width="2"/><path d="M9 15.5c.9-.8 1.9-1.2 3-1.2 1.1 0 2.1.4 3 1.2" stroke="currentColor" stroke-width="2"/><circle cx="12" cy="19" r="1.3" fill="currentColor"/></svg>
                        </span>
                        <p>Free WiFi Zone</p>
                    </article>
                    <article class="station-benefit-item">
                        <span class="station-benefit-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 3v18M20 3v18M7 8h10M7 12h10M7 16h10" stroke="currentColor" stroke-width="2"/></svg>
                        </span>
                        <p>Restaurant</p>
                    </article>
                    <article class="station-benefit-item">
                        <span class="station-benefit-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 7h16M6 7v4M10 7v4M14 7v4M18 7v4M12 13v8" stroke="currentColor" stroke-width="2"/></svg>
                        </span>
                        <p>WC & Shower</p>
                    </article>
                    <article class="station-benefit-item">
                        <span class="station-benefit-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 15V9h6l3 2v4H6Z" stroke="currentColor" stroke-width="2"/><circle cx="8" cy="17" r="1.5" fill="currentColor"/><circle cx="14" cy="17" r="1.5" fill="currentColor"/></svg>
                        </span>
                        <p>Children's Area</p>
                    </article>
                    <article class="station-benefit-item">
                        <span class="station-benefit-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="4" y="6" width="16" height="10" stroke="currentColor" stroke-width="2"/><path d="M9 20h6" stroke="currentColor" stroke-width="2"/></svg>
                        </span>
                        <p>TV Hall</p>
                    </article>
                    <article class="station-benefit-item">
                        <span class="station-benefit-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="4" y="10" width="16" height="6" stroke="currentColor" stroke-width="2"/><path d="M5 10l2-3h10l2 3" stroke="currentColor" stroke-width="2"/></svg>
                        </span>
                        <p>Rest Zone</p>
                    </article>
                </div>
            </div>

            <div class="station-benefits-visual">
                <img src="{{ asset('images/image14.jpg') }}" alt="Juden fuel station convenience and support">
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-heading">
                <p class="eyebrow">How We Deliver</p>
                <h2>Structured execution from enquiry to supply.</h2>
            </div>
            <div class="cards-3">
                <article class="card">
                    <img class="card-media" src="{{ asset('images/image09.jpg') }}" alt="Customer requirements planning">
                    <h3>1. Requirements Assessment</h3>
                    <p>
                        We start by understanding your usage profile, service location and delivery priorities to build
                        a practical supply plan.
                    </p>
                </article>
                <article class="card">
                    <img class="card-media" src="{{ asset('images/image10.jpg') }}" alt="Supply scheduling and operations">
                    <h3>2. Supply Scheduling</h3>
                    <p>
                        Our team coordinates fuel availability, service windows and operational timing for efficient
                        and dependable fulfilment.
                    </p>
                </article>
                <article class="card">
                    <img class="card-media" src="{{ asset('images/image15.jpg') }}" alt="Delivery and customer support">
                    <h3>3. Delivery & Support</h3>
                    <p>
                        We execute with quality and responsiveness, then provide follow-up support to keep your
                        operations running smoothly.
                    </p>
                </article>
            </div>
        </div>
    </section>
@endsection
