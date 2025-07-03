    document.addEventListener('DOMContentLoaded', function() {
      // Optimize video quality
      const videos = document.querySelectorAll('video');
      videos.forEach(video => {
        video.playsInline = true;
        video.muted = true;
        video.preload = 'auto';
        const playPromise = video.play();
        if (playPromise !== undefined) {
          playPromise.catch(() => video.controls = true);
        }
      });
      
      // Start carousel after all entry animations finish
      setTimeout(() => {
        const track = document.getElementById('carouselTrack');
        track.style.animationPlayState = 'running';
      }, 3000);
      
      // Intersection Observer for partners section
      const section = document.getElementById('partners-section');
      
      const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px'
      };
      
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('active');
          }
        });
      }, observerOptions);
      
      observer.observe(section);
    });