<footer class="site-footer">
    <div class="container footer-top">
        <div class="footer-brand">
            <img class="footer-logo" src="{{ asset('logos/White%20Logo.svg') }}" alt="Juden Petroleum White Logo">
            <p>
                Juden Petroleum Private Limited is a family-run fuel service company incorporated in 2023,
                delivering reliable petroleum solutions with a one-stop customer approach.
            </p>
            <ul class="footer-tags">
                <li>Reliable Supply</li>
                <li>Quality Service</li>
                <li>Safety First</li>
            </ul>
        </div>

        <nav class="footer-col" aria-label="Company links">
            <h4>Company</h4>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li><a href="{{ route('about') }}">Mission & Values</a></li>
                <li><a href="{{ route('contact') }}">Contact Us</a></li>
            </ul>
        </nav>

        <nav class="footer-col" aria-label="Service links">
            <h4>Products & Services</h4>
            <ul>
                <li><a href="{{ route('services') }}">Our Services</a></li>
                <li><a href="{{ route('services') }}">Fuel Products</a></li>
                <li><a href="{{ route('services') }}">Bulk Deliveries</a></li>
                <li><a href="{{ route('services') }}">Fleet Support</a></li>
            </ul>
        </nav>

        <div class="footer-col">
            <h4>Branches</h4>
            <div class="footer-branches">
                <article class="branch-item">
                    <h5>Redwood Ultra City</h5>
                    <address>
                        Redwood 1, Figtree<br>
                        Bulawayo, Zimbabwe
                    </address>
                    <a href="tel:+263715650687">+263 715 650 687</a>
                </article>

                <article class="branch-item">
                    <h5>Kwekwe Service Station</h5>
                    <address>
                        7859 Industrial Site<br>
                        Harare Road, Kwekwe
                    </address>
                    <a href="tel:+263771444303">+263 771 444 303</a>
                </article>
            </div>
        </div>

        <div class="footer-col footer-contact-details">
            <h4>Contact Details</h4>
            <ul class="footer-contact-list">
                <li><strong>Phone:</strong> <a href="tel:+263715650687">+263 715 650 687</a></li>
                <li><strong>Phone:</strong> <a href="tel:+263771444303">+263 771 444 303</a></li>
                <li><a href="mailto:admni@juden.co.zw">admni@juden.co.zw</a></li>
            </ul>
            <p class="footer-contact-note">For urgent supply support, call either branch directly.</p>
            <p class="footer-hours"><strong>Hours:</strong> Mon - Sat, 6:00 AM - 8:00 PM</p>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container footer-bottom-inner">
            <p>Copyright © {{ date('Y') }} Juden Petroleum (Pvt) Ltd. All rights reserved.</p>
            <nav class="footer-legal" aria-label="Legal links">
                <a href="{{ route('about') }}">Company Infor</a>
                <a href="{{ route('contact') }}">Privacy & Contact</a>
            </nav>
        </div>
    </div>
</footer>
