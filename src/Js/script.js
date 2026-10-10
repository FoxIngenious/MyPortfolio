
/* Menu mobile (hamburger) */
const navToggle = document.getElementById('navToggle');
const menu = document.getElementById('menu');

if (navToggle && menu) {
    navToggle.addEventListener('click', () => {
        const isOpen = menu.classList.toggle('open');
        navToggle.classList.toggle('open', isOpen);
        navToggle.setAttribute('aria-expanded', String(isOpen));
    });

    menu.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            menu.classList.remove('open');
            navToggle.classList.remove('open');
            navToggle.setAttribute('aria-expanded', 'false');
        });
    });
}

/* Page Services : sélection carte / panneau détail */
const servicesShowcase = document.querySelector('.showcase');

if (servicesShowcase) {
    const serviceItems = Array.prototype.slice.call(servicesShowcase.querySelectorAll('.service'));
    const mobile = window.matchMedia('(max-width: 860px)');

    function activateService(target, toggle) {
        const wasActive = target.classList.contains('is-active');
        serviceItems.forEach((item) => {
            item.classList.remove('is-active');
            item.querySelector('.card').setAttribute('aria-expanded', 'false');
        });
        if (toggle && wasActive) return;
        target.classList.add('is-active');
        target.querySelector('.card').setAttribute('aria-expanded', 'true');
    }

    serviceItems.forEach((item) => {
        const card = item.querySelector('.card');
        card.addEventListener('mouseenter', () => { if (!mobile.matches) activateService(item, false); });
        card.addEventListener('focus', () => { if (!mobile.matches) activateService(item, false); });
        card.addEventListener('click', () => { activateService(item, mobile.matches); });
    });

    mobile.addEventListener('change', () => {
        if (!mobile.matches && !servicesShowcase.querySelector('.service.is-active')) activateService(serviceItems[0], false);
    });
}

/* Hover des cartes services */
const cards = document.querySelectorAll('.servicesCard');

cards.forEach(card => {
    const cardBttn = card.querySelector('.serviceRedirectio');

    if (cardBttn) {
        card.addEventListener('mouseenter', () => {
            cardBttn.classList.add('hoveredBttn');
        });

        card.addEventListener('mouseleave', () => {
            cardBttn.classList.remove('hoveredBttn');
        });
    }
});

/* Animation reveal au scroll */
const revealElements = document.querySelectorAll('.reveal');

if ('IntersectionObserver' in window && revealElements.length > 0) {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    revealElements.forEach(el => observer.observe(el));
} else {
    revealElements.forEach(el => el.classList.add('visible'));
}

/* Formulaire de contact (envoi AJAX + fallback) */
const contactForm = document.getElementById('contactForm');

if (contactForm) {
    const formStatus = document.getElementById('formStatus');

    const showStatus = (message, success) => {
        if (!formStatus) return;
        formStatus.textContent = message;
        formStatus.classList.remove('success', 'error');
        formStatus.classList.add(success ? 'success' : 'error', 'show');
    };

    contactForm.addEventListener('submit', async (event) => {
        event.preventDefault();

        const submitBtn = contactForm.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Envoi...';

        try {
            const formData = new FormData(contactForm);
            const response = await fetch(contactForm.action, {
                method: 'POST',
                body: formData,
            });
            const data = await response.json();

            showStatus(data.message, data.success);

            if (data.success) {
                contactForm.reset();
            }
        } catch (error) {
            contactForm.submit();
            return;
        } finally {
            submitBtn.disabled = false;
            submitBtn.innerHTML = originalText;
        }
    });
}
