import './bootstrap';

// Smooth scrolling for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Form submission handling
const contactForm = document.querySelector('#contact form');
if (contactForm) {
    contactForm.addEventListener('submit', async (e) => {
        e.preventDefault();
        
        const formData = {
            name: document.querySelector('#name').value,
            email: document.querySelector('#email').value,
            message: document.querySelector('#message').value
        };

        // Here you would typically send the form data to your backend
        console.log('Form submitted:', formData);
        
        // Clear form
        contactForm.reset();
        alert('Thank you for your message. We will get back to you soon!');
    });
}

// Mobile menu functionality can be added here if needed
