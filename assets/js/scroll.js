document.addEventListener('DOMContentLoaded', function() {
  // Initialize animations
  const animateElements = function() {
    const elements = document.querySelectorAll('.scroll-animate');
    elements.forEach(el => {
      const elementPosition = el.getBoundingClientRect().top;
      const windowHeight = window.innerHeight;
      
      if (elementPosition < windowHeight - 100) {
        el.classList.add('animate');
      }
    });
  };

  // Run on scroll and load
  window.addEventListener('scroll', animateElements);
  animateElements();
});