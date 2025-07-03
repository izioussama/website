document.addEventListener('DOMContentLoaded', () => {

        // Show body now that JS is loaded
        document.body.style.visibility = 'visible';
        
        // Animate navbar first (special animation)
        const navbar = document.querySelector('.glass-navbar');
        setTimeout(() => {
            navbar.classList.add('visible');
        }, 300);

        // Hero content animations (one by one)
        const heroElements = document.querySelectorAll('.hero-content > *');
        heroElements.forEach((el, index) => {
            setTimeout(() => {
                el.classList.add('animate-visible');
            }, 500 + (index * 200));
        });

        // Set up Intersection Observer for other elements
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('animate-visible');
                    }, entry.target.style.getPropertyValue('--index') * 150 || 0);
                    
                    // Special case for partners section
                    if (entry.target.classList.contains('trusted-partners')) {
                        entry.target.style.transitionDelay = '1.8s';
                    }
                }
            });
        }, {
            threshold: 0.2,
            rootMargin: '0px 0px -100px 0px'
        });

        // Observe all animate elements
        document.querySelectorAll('.scroll-animate').forEach(el => {
            observer.observe(el);
        });


        // Number counting animation for stats
        const statNumbers = document.querySelectorAll('.stat-number');
        statNumbers.forEach(stat => {
            const target = parseInt(stat.dataset.target);
            const duration = 3000; // 2 seconds
            const start = 0;
            const increment = target / (duration / 16); // 60fps
            
            let current = start;
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    clearInterval(timer);
                    current = target;
                }
                
                if (stat.dataset.format === 'short') {
                    stat.textContent = Math.floor(current) >= 1000 
                        ? (Math.floor(current)/1000).toFixed(0) + 'k' 
                        : Math.floor(current);
                } else {
                    stat.textContent = Math.floor(current).toLocaleString();
                }
            }, 16);
        });
});

