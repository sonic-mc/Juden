document.addEventListener('DOMContentLoaded', () => {
    const nav = document.querySelector('.main-nav');
    const navToggle = document.querySelector('.nav-toggle');
    const navMenu = document.querySelector('#site-menu');
    const navLinks = document.querySelectorAll('.nav-links a');
    const prefersReducedMotion = globalThis.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const supportsFineHover = globalThis.matchMedia('(hover: hover) and (pointer: fine)').matches;
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

    targets.forEach((element, index) => {
        element.classList.add('reveal-on-scroll');

        if (!prefersReducedMotion) {
            const staggerIndex = index % 8;
            element.style.setProperty('--reveal-delay', `${staggerIndex * 55}ms`);
        }
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

    if (!prefersReducedMotion && supportsFineHover) {
        const interactiveCards = document.querySelectorAll('.card, .process-card, .industry-card, .mini-card');

        interactiveCards.forEach((card) => {
            card.addEventListener('pointermove', (event) => {
                const rect = card.getBoundingClientRect();
                const relativeX = (event.clientX - rect.left) / rect.width;
                const relativeY = (event.clientY - rect.top) / rect.height;
                const tiltY = (relativeX - 0.5) * 5;
                const tiltX = (0.5 - relativeY) * 5;

                card.style.setProperty('--tilt-x', `${tiltX.toFixed(2)}deg`);
                card.style.setProperty('--tilt-y', `${tiltY.toFixed(2)}deg`);
                card.style.setProperty('--mx', `${(relativeX * 100).toFixed(2)}%`);
                card.style.setProperty('--my', `${(relativeY * 100).toFixed(2)}%`);
            });

            card.addEventListener('pointerleave', () => {
                card.style.setProperty('--tilt-x', '0deg');
                card.style.setProperty('--tilt-y', '0deg');
                card.style.setProperty('--mx', '50%');
                card.style.setProperty('--my', '50%');
            });
        });

        const motionButtons = document.querySelectorAll('.btn, .footer-partner-btn, .footer-store-btn');

        motionButtons.forEach((button) => {
            button.addEventListener('pointermove', (event) => {
                const rect = button.getBoundingClientRect();
                const shiftX = ((event.clientX - rect.left) / rect.width - 0.5) * 6;
                const shiftY = ((event.clientY - rect.top) / rect.height - 0.5) * 6;

                button.style.transform = `translate(${shiftX.toFixed(2)}px, ${shiftY.toFixed(2)}px)`;
            });

            button.addEventListener('pointerleave', () => {
                button.style.transform = '';
            });
        });
    }

    const backToTop = document.querySelector('.footer-back-top');

    if (backToTop) {
        backToTop.addEventListener('click', (event) => {
            event.preventDefault();

            globalThis.scrollTo({
                top: 0,
                behavior: prefersReducedMotion ? 'auto' : 'smooth',
            });
        });
    }
});
