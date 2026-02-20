document.addEventListener('DOMContentLoaded', () => {
    const nav = document.querySelector('.main-nav');
    let lastScrollY = globalThis.scrollY;

    const handleNavOnScroll = () => {
        if (!nav) {
            return;
        }

        const currentScrollY = globalThis.scrollY;
        const scrollingDown = currentScrollY > lastScrollY;
        const hasPassedHeroStart = currentScrollY > 120;

        nav.classList.toggle('nav-scrolled', currentScrollY > 20);

        if (scrollingDown && hasPassedHeroStart) {
            nav.classList.add('nav-hidden');
        } else {
            nav.classList.remove('nav-hidden');
        }

        lastScrollY = currentScrollY;
    };

    globalThis.addEventListener('scroll', handleNavOnScroll, { passive: true });
    handleNavOnScroll();

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
