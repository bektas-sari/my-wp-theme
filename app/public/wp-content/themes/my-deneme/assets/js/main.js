// filepath: my-wordpress-theme/my-wordpress-theme/assets/js/main.js
document.addEventListener('DOMContentLoaded', function() {
    const ctaButton = document.querySelector('.cta-btn');
    
    if (ctaButton) {
        ctaButton.addEventListener('click', function(event) {
            event.preventDefault();
            const targetSection = document.querySelector(ctaButton.getAttribute('href'));
            if (targetSection) {
                targetSection.scrollIntoView({ behavior: 'smooth' });
            }
        });
    }
});