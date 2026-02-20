<footer class="site-footer">
    <div class="container footer-top">
        <div class="footer-col footer-quick-contact">
            <h4>Quick Contact</h4>
            <p>
                If you have any questions or need help, feel free to contact our Juden support team.
            </p>
            <ul class="footer-quick-list">
                <li><a href="mailto:info@juden.co.zw">info@juden.co.zw</a></li>
                <li><a href="tel:+263715650687">+263 715 650 687</a></li>
                <li><a href="tel:+263771444303">+263 771 444 303</a></li>
                <li>7859 Industrial Site, Harare Road, Kwekwe, Zimbabwe</li>
            </ul>
            <a class="footer-map-link" href="{{ route('contact') }}">Get Directions</a>
        </div>

        <nav class="footer-col" aria-label="Company links">
            <h4>Company</h4>
            <ul>
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li><a href="{{ route('about') }}">Sustainability</a></li>
                <li><a href="{{ route('about') }}">Leadership Team</a></li>
                <li><a href="{{ route('services') }}">News & Media</a></li>
                <li><a href="{{ route('services') }}">Our Products</a></li>
            </ul>
        </nav>

        <nav class="footer-col" aria-label="Solutions links">
            <h4>Solutions</h4>
            <ul>
                <li><a href="{{ route('services') }}">Business & Commercial</a></li>
                <li><a href="{{ route('services') }}">Fleet Programs</a></li>
                <li><a href="{{ route('services') }}">Drivers & Personal Use</a></li>
                <li><a href="{{ route('services') }}">Government & Utilities</a></li>
                <li><a href="{{ route('services') }}">Public Fuel Access</a></li>
                <li><a href="{{ route('services') }}">Fuel Maintenance Support</a></li>
            </ul>
        </nav>

        <nav class="footer-col" aria-label="Industry links">
            <h4>Industries</h4>
            <ul>
                <li><a href="{{ route('services') }}">Workplaces</a></li>
                <li><a href="{{ route('services') }}">Retail & Hospitality</a></li>
                <li><a href="{{ route('services') }}">Commercial Parking</a></li>
                <li><a href="{{ route('services') }}">Fuel Retailers</a></li>
                <li><a href="{{ route('services') }}">Residential</a></li>
                <li><a href="{{ route('services') }}">Fleets</a></li>
            </ul>
        </nav>

        <div class="footer-col footer-partner">
            <h4>Become A Partner</h4>
            <a class="footer-partner-btn" href="{{ route('contact') }}">Fuel Up With Us</a>
            <div class="footer-socials" aria-label="Social links">
                <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" aria-label="Facebook">f</a>
                <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" aria-label="Twitter">x</a>
                <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">in</a>
            </div>
        </div>
    </div>

    <div class="footer-back-top-wrap">
        <a href="#" class="footer-back-top" aria-label="Back to top">
            <span>↑</span>
            <strong>Back To Top</strong>
        </a>
    </div>

    <div class="footer-bottom">
        <div class="container footer-bottom-inner">
            <div class="footer-bottom-left">
                <img class="footer-logo" src="{{ asset('logos/Primary%20Logo.svg') }}" alt="Juden Petroleum Logo">
                <div>
                    <p>©{{ date('Y') }} Juden Petroleum (Pvt) Ltd. All Rights Reserved.</p>
                    <nav class="footer-legal" aria-label="Legal links">
                        <a href="{{ route('about') }}">Terms & Conditions</a>
                        <a href="{{ route('contact') }}">Privacy Policy</a>
                        <a href="{{ route('home') }}">Website By Gigasoft</a>
                    </nav>
                </div>
            </div>
            <div class="footer-store-buttons">
                <a class="footer-store-btn" href="{{ route('contact') }}">Call Team</a>
                <a class="footer-store-btn" href="{{ route('contact') }}">Request Quote</a>
            </div>
        </div>
    </div>
</footer>
