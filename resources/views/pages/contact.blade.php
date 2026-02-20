@extends('layouts.app')

@section('title', 'Juden Petroleum | Contact')

@section('content')
    <section class="page-banner">
        <div class="container">
            <p class="eyebrow">Contact Us</p>
            <h1>Speak with our fuel service team today.</h1>
            <p>Our branches and support channels are structured to respond quickly to operational fuel needs.</p>
        </div>
    </section>

    <section class="section">
        <div class="container split">
            <div class="card">
                <img class="card-media" src="{{ asset('images/image15.jpg') }}" alt="Customer support and contact desk">
                <h3>Our Contact Details</h3>
                <ul class="contact-list">
                    <li><strong>Phone 1:</strong> <a href="tel:+263715650687">+263 715 650 687</a></li>
                    <li><strong>Phone 2:</strong> <a href="tel:+263771444303">+263 771 444 303</a></li>
                    <li><strong>Email:</strong> <a href="mailto:admni@juden.co.zw">admni@juden.co.zw</a></li>
                    <li><strong>Main Address:</strong> Redwood Ultra City, Redwood 1, Figtree, Bulawayo, Zimbabwe</li>
                </ul>
            </div>

            <div class="card">
                <img class="card-media" src="{{ asset('images/image11.jpg') }}" alt="Fuel service station locations">
                <h3>Service Locations</h3>
                <p>
                    <strong>Kwekwe Service Station:</strong> 7859 Industrial Site, Harare Road, Kwekwe<br>
                    <strong>Phone:</strong> +263 771 444 303 / +263 715 650 687
                </p>
                <p>
                    <strong>Redwood Ultra City:</strong> Redwood 1, Figtree, Bulawayo, Zimbabwe
                </p>
                <a href="{{ route('services') }}" class="btn btn-primary">View Services</a>
            </div>
        </div>
    </section>

    <section class="section alt">
        <div class="container">
            <div class="section-heading">
                <p class="eyebrow">Business Enquiries</p>
                <h2>Speak to us for supply, fleet and partnership support.</h2>
            </div>
            <div class="cards-3">
                <article class="card">
                    <img class="card-media" src="{{ asset('images/image04.jpg') }}" alt="Bulk fuel supply enquiry">
                    <h3>Bulk Supply Enquiries</h3>
                    <p>
                        For business fuel requirements, contact our team with your expected monthly volumes and
                        preferred service location.
                    </p>
                </article>
                <article class="card">
                    <img class="card-media" src="{{ asset('images/image06.jpg') }}" alt="Fleet support enquiries">
                    <h3>Fleet Support Requests</h3>
                    <p>
                        We assist transport and logistics operators with dependable fueling schedules and consistent
                        service support.
                    </p>
                </article>
                <article class="card">
                    <img class="card-media" src="{{ asset('images/image08.jpg') }}" alt="Partnership and procurement contacts">
                    <h3>Partnership & Procurement</h3>
                    <p>
                        Reach out for long-term supply partnerships, procurement discussions and strategic service
                        collaboration.
                    </p>
                </article>
            </div>
        </div>
    </section>
@endsection
