@extends('layouts.app')

@section('title', 'Juden Petroleum | About')

@section('content')
    <section class="page-banner">
        <div class="container">
            <p class="eyebrow">About Us</p>
            <h1>Family-run. Innovative. High-performance.</h1>
            <p>Delivering modern petroleum services with reliability, accountability and long-term stakeholder value.</p>
        </div>
    </section>

    <section class="section">
        <div class="container split">
            <div>
                <h2>Who We Are</h2>
                <p>
                    Juden Petroleum Private Limited, incorporated in 2023, is a family-run business specializing in
                    the supply of blended fuels, diesel and Liquefied Petroleum Gas (LPG).
                </p>
                <p>
                    We pride ourselves on delivering innovative, high-performance services while supplying top-quality
                    fuel products at competitive prices. Our one-stop service approach supports diverse client needs
                    and fosters trust and long-term loyalty.
                </p>
                <p>
                    We aim to become a leading petroleum service provider while maximizing sustainable value for our
                    stakeholders.
                </p>
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
@endsection
