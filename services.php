<?php include 'includes/header.php'; ?>
<link rel="stylesheet" href="assets/css/header.css">
<link rel="stylesheet" href="assets/css/footer.css">
<link rel="stylesheet" href="assets/css/services.css">


<section class="services-section">
  <!-- Header with gradient and fadeIn animations -->
  <div class="section-header services-header">
    <p class="section-subtitle">Our Expertise</p>
    <h2 class="section-title">How Can We Help Your Business?</h2>
    <p class="section-description">We combine creativity and strategy to deliver exceptional digital marketing results for brands of all sizes.</p>
  </div>

  <!-- Service Cards (like carousel but static) -->
  <div class="services-grid">
    <div class="service-card">
      <div class="service-icon"><i class="fas fa-chess-queen"></i></div>
      <h3>Marketing Strategy</h3>
      <p>Tailored marketing roadmaps to grow your brand with data-driven approaches and measurable results.</p>
    </div>
    <div class="service-card">
      <div class="service-icon"><i class="fas fa-pen-fancy"></i></div>
      <h3>Content Creation</h3>
      <p>Unique content that speaks your brand's voice and resonates with your target audience.</p>
    </div>
    <div class="service-card">
      <div class="service-icon"><i class="fas fa-thumbs-up"></i></div>
      <h3>Social Media Management</h3>
      <p>We manage, grow and engage your audience across all major social platforms.</p>
    </div>
    <div class="service-card">
      <div class="service-icon"><i class="fas fa-bullseye"></i></div>
      <h3>Paid Ads</h3>
      <p>Reach the right audience with precisely targeted campaigns that maximize your budget.</p>
    </div>
    <div class="service-card">
      <div class="service-icon"><i class="fas fa-video"></i></div>
      <h3>Video Production</h3>
      <p>Personalized videos for storytelling and promotion that captivate your audience.</p>
    </div>
    <div class="service-card">
      <div class="service-icon"><i class="fas fa-laptop-code"></i></div>
      <h3>Web Design</h3>
      <p>Modern, mobile-first websites that are SEO optimized and designed for conversions.</p>
    </div>
  </div>

  <!-- Features Checklist -->
  <div class="features-checklist animate-on-scroll">
    <h4>Our Standard Features</h4>
    <ul class="features-list">
      <li>Personalized Design</li>
      <li>Mobile Compatibility</li>
      <li>SEO Optimized</li>
    </ul>
  </div>

  <!-- Contact CTA -->
  <div class="contact-section animate-on-scroll">
    <a href="#contact" class="contact-button">Contact Us</a>
  </div>

  <!-- Testimonials -->
  <div class="testimonial-section animate-on-scroll">
    <h4>What Our Clients Say</h4>
    <div class="testimonial-videos">
      <div class="testimonial-video"><i class="fas fa-play"></i></div>
      <div class="testimonial-video"><i class="fas fa-play"></i></div>
      <div class="testimonial-video"><i class="fas fa-play"></i></div>
    </div>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const headerElements = [
      document.querySelector('.services-header .section-subtitle'),
      document.querySelector('.services-header .section-title'),
      document.querySelector('.services-header .section-description')
    ];

    headerElements.forEach((el, i) => {
      setTimeout(() => {
        el.style.animationPlayState = 'running';
      }, 400 + i * 200);
    });

    const serviceCards = document.querySelectorAll('.service-card');
    setTimeout(() => {
      serviceCards.forEach((card, i) => {
        setTimeout(() => {
          card.style.opacity = 1;
          card.style.transform = 'translateY(0) rotateX(0)';
        }, i * 100);
      });
    }, 1000);

    const scrollObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('animated');
          if (entry.target.classList.contains('testimonial-video')) {
            entry.target.style.transform = 'scale(1)';
          }
        }
      });
    }, {
      threshold: 0.2,
      rootMargin: '0px 0px -100px 0px'
    });

    document.querySelectorAll('.animate-on-scroll, .testimonial-video').forEach(el => {
      scrollObserver.observe(el);
    });
  });
</script>
<?php include 'includes/footer.php'; ?>
<script src="assets/js/script.js"></script>