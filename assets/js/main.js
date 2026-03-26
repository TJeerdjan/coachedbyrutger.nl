// Mobile menu toggle
document.addEventListener('DOMContentLoaded', function() {
  const mobileToggle = document.querySelector('.mobile-toggle');
  const navLinks = document.querySelector('.nav-links');
  
  if (mobileToggle && navLinks) {
    mobileToggle.addEventListener('click', function() {
      navLinks.classList.toggle('active');
      // Animate hamburger
      const spans = this.querySelectorAll('span');
      if (navLinks.classList.contains('active')) {
        spans[0].style.transform = 'rotate(45deg) translate(5px, 5px)';
        spans[1].style.opacity = '0';
        spans[2].style.transform = 'rotate(-45deg) translate(5px, -5px)';
      } else {
        spans[0].style.transform = '';
        spans[1].style.opacity = '';
        spans[2].style.transform = '';
      }
    });
  }
  
  // FAQ Accordion
  const faqItems = document.querySelectorAll('.faq-item');
  faqItems.forEach(item => {
    const question = item.querySelector('.faq-question');
    if (question) {
      question.addEventListener('click', function() {
        // Close others
        faqItems.forEach(other => {
          if (other !== item) {
            other.classList.remove('active');
          }
        });
        // Toggle current
        item.classList.toggle('active');
      });
    }
  });
  
  // Video Testimonial - Click to play with sound
  const videoCard = document.getElementById('videoCard');
  const video = document.getElementById('testimonialVideo');
  const videoPoster = document.getElementById('videoPoster');
  
  if (videoCard && video) {
    videoCard.addEventListener('click', function() {
      // Start from beginning with sound
      video.currentTime = 0;
      video.muted = false;
      video.loop = false;
      video.play();
      videoCard.classList.add('playing');
    });
    
    // When video ends, show poster again
    video.addEventListener('ended', function() {
      video.pause();
      videoCard.classList.remove('playing');
    });
    
    // Also handle pause/play toggle when already playing
    video.addEventListener('click', function(e) {
      e.stopPropagation();
      if (!video.paused) {
        video.pause();
      } else {
        video.play();
      }
    });
  }
  
  // Simple form feedback
  const form = document.querySelector('#intake-form');
  if (form) {
    form.addEventListener('submit', function(e) {
      const submitBtn = form.querySelector('.form-submit');
      if (submitBtn) {
        submitBtn.textContent = 'Verzenden...';
        submitBtn.disabled = true;
      }
    });
  }
  
  // Smooth scroll for anchor links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      const href = this.getAttribute('href');
      if (href !== '#') {
        e.preventDefault();
        const target = document.querySelector(href);
        if (target) {
          // Close mobile menu if open
          if (navLinks && navLinks.classList.contains('active')) {
            navLinks.classList.remove('active');
          }
          target.scrollIntoView({ behavior: 'smooth' });
        }
      }
    });
  });
});
