document.addEventListener('DOMContentLoaded', () => {
    const nav = document.querySelector('.main-nav');
    const navToggle = document.querySelector('.nav-toggle');
    const navMenu = document.querySelector('#site-menu');
    const navLinks = document.querySelectorAll('.nav-links a');
    let lastScrollY = globalThis.scrollY;

    const closeNavMenu = () => {
        if (!nav || !navToggle) {
            return;
        }

        nav.classList.remove('nav-open');
        navToggle.setAttribute('aria-expanded', 'false');
    };

    const openNavMenu = () => {
        if (!nav || !navToggle) {
            return;
        }

        nav.classList.add('nav-open');
        navToggle.setAttribute('aria-expanded', 'true');
    };

    const isMobileViewport = () => globalThis.matchMedia('(max-width: 760px)').matches;

    const handleNavOnScroll = () => {
        if (!nav) {
            return;
        }

        const currentScrollY = globalThis.scrollY;
        const scrollingDown = currentScrollY > lastScrollY;
        const hasPassedHeroStart = currentScrollY > 120;
        const isMenuOpen = nav.classList.contains('nav-open');

        nav.classList.toggle('nav-scrolled', currentScrollY > 20);

        if (scrollingDown && hasPassedHeroStart && !isMenuOpen) {
            nav.classList.add('nav-hidden');
        } else {
            nav.classList.remove('nav-hidden');
        }

        lastScrollY = currentScrollY;
    };

    globalThis.addEventListener('scroll', handleNavOnScroll, { passive: true });
    handleNavOnScroll();

    if (nav && navToggle && navMenu) {
        navToggle.addEventListener('click', () => {
            if (nav.classList.contains('nav-open')) {
                closeNavMenu();
                return;
            }

            openNavMenu();
        });

        navLinks.forEach((link) => {
            link.addEventListener('click', () => {
                if (isMobileViewport()) {
                    closeNavMenu();
                }
            });
        });

        globalThis.addEventListener('resize', () => {
            if (!isMobileViewport()) {
                closeNavMenu();
            }
        });

        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape') {
                closeNavMenu();
            }
        });
    }

    const targets = document.querySelectorAll(
        '.page-banner, .section, .card, .mini-card, .hero-card, .footer-top > *, .footer-bottom-inner'
    );

    targets.forEach((element) => {
        element.classList.add('reveal-on-scroll');
    });

    if (!('IntersectionObserver' in globalThis)) {
        targets.forEach((element) => element.classList.add('is-visible'));
        return;
    }

    const observer = new IntersectionObserver(
        (entries, obs) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) {
                    return;
                }

                entry.target.classList.add('is-visible');
                obs.unobserve(entry.target);
            });
        },
        {
            root: null,
            rootMargin: '0px 0px -10% 0px',
            threshold: 0.12,
        }
    );

    targets.forEach((element) => observer.observe(element));
});
