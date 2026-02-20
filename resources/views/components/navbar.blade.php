<header class="top-strip">
    <div class="container top-strip-inner">
        <p>Best at your service • Juden Petroleum Private Limited</p>
        <a href="tel:+263715650687">+263 715 650 687</a>
    </div>
</header>

<nav class="main-nav">
    <div class="container nav-inner">
        <a href="{{ route('home') }}" class="logo" aria-label="Juden Home">
            <img src="{{ asset('logos/Primary%20Logo.svg') }}" alt="Juden Petroleum Logo">
        </a>

        <button
            class="nav-toggle"
            type="button"
            aria-label="Toggle navigation"
            aria-controls="site-menu"
            aria-expanded="false"
        >
            <span class="nav-toggle-bar"></span>
            <span class="nav-toggle-bar"></span>
            <span class="nav-toggle-bar"></span>
        </button>

        <div class="nav-menu" id="site-menu">
            <ul class="nav-links">
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
                <li><a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'active' : '' }}">Services</a></li>
                <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
            </ul>

            <a class="nav-cta" href="tel:+263715650687">Call +263 715 650 687</a>
        </div>
    </div>
</nav>
