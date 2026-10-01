
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
