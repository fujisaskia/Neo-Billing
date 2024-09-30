import './bootstrap';


document.addEventListener('DOMContentLoaded', function() {
    const sections = document.querySelectorAll('.section-content');

    const observerOptions = {
        root: null, // viewport sebagai root
        rootMargin: '0px', // margin sekitar root
        threshold: 0.1 // persentase elemen yang harus terlihat untuk trigger callback
    };

    const observerCallback = (entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.remove('hidden');
                entry.target.classList.add('opacity-100');
            } else {
                entry.target.classList.add('hidden');
                entry.target.classList.remove('opacity-100');
            }
        });
    };

    const observer = new IntersectionObserver(observerCallback, observerOptions);

    sections.forEach(section => {
        observer.observe(section);
    });
});

