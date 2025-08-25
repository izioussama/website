document.addEventListener('DOMContentLoaded', () => {
    // Show body now that JS is loaded
    document.body.style.visibility = 'visible';
    
    // Animate navbar first (special animation)
    const navbar = document.querySelector('.glass-navbar');
    setTimeout(() => {
        navbar.classList.add('visible');
    }, 300);

    // Hero section animation - similar to work page
    const heroSection = document.querySelector('.hero');
    
    // Trigger hero animations immediately on load
    setTimeout(() => {
        heroSection.classList.add('active');
    }, 500);

    // Stats bar animation after hero
    setTimeout(() => {
        const statsBar = document.querySelector('.stats-bar');
        if (statsBar) {
            statsBar.classList.add('animate-visible');
            
            // Animate client logos with staggered delays
            const logos = document.querySelectorAll('.logo-animate');
            logos.forEach((logo, i) => {
                setTimeout(() => {
                    logo.classList.add('animate-visible');
                }, i * 150);
            });
        }
    }, 1200);

    // Set up Intersection Observer for other elements
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.classList.add('animate-visible');
                    
                    // Animate partner logos
                    if (entry.target.classList.contains('partners-carousel')) {
                        const partners = document.querySelectorAll('.partner-logo');
                        partners.forEach((partner, i) => {
                            setTimeout(() => {
                                partner.style.opacity = '0.6';
                            }, i * 100);
                        });
                    }
                    
                }, entry.target.style.getPropertyValue('--index') * 150 || 0);
            }
        });
    }, {
        threshold: 0.2,
        rootMargin: '0px 0px -100px 0px'
    });

    // Observe all animate elements except hero (which is handled above)
    document.querySelectorAll('.scroll-animate').forEach(el => {
        // Skip hero elements since they're handled differently
        if (!el.closest('.hero')) {
            observer.observe(el);
        }
    });

    // Number counting animation for stats
    const animateCounters = () => {
        const statNumbers = document.querySelectorAll('.stat-number');
        statNumbers.forEach(stat => {
            const target = parseInt(stat.dataset.target);
            const duration = 2000; // 2 seconds
            const start = 0;
            const increment = target / (duration / 16); // 60fps
            
            let current = start;
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    clearInterval(timer);
                    current = target;
                }
                
                if (target >= 1000) {
                    stat.textContent = Math.floor(current) >= 1000000 
                        ? (Math.floor(current)/1000000).toFixed(1) + 'M' 
                        : Math.floor(current) >= 1000 
                            ? (Math.floor(current)/1000).toFixed(0) + 'k' 
                            : Math.floor(current);
                } else {
                    stat.textContent = Math.floor(current);
                }
            }, 16);
        });
    };

    // Trigger counter animation after stats bar appears
    setTimeout(() => {
        animateCounters();
    }, 1500);

    // Add hover effect to feature boxes
    const featureBoxes = document.querySelectorAll('.feature-box');
    featureBoxes.forEach(box => {
        box.addEventListener('mouseenter', () => {
            const icon = box.querySelector('.feature-icon');
            if (icon) {
                icon.style.transform = 'scale(1.2)';
            }
        });
        
        box.addEventListener('mouseleave', () => {
            const icon = box.querySelector('.feature-icon');
            if (icon) {
                icon.style.transform = 'scale(1)';
            }
        });
    });

    // Add click animation to buttons
    const buttons = document.querySelectorAll('button, .view-button');
    buttons.forEach(button => {
        button.addEventListener('click', (e) => {
            e.target.style.transform = 'scale(0.95)';
            setTimeout(() => {
                e.target.style.transform = 'scale(1)';
            }, 200);
        });
    });
});