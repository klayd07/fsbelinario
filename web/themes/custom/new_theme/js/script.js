document.addEventListener("DOMContentLoaded", function () {
    let slides = document.querySelectorAll(".views-row");
    let index = 0;
  
    function showSlide(i) {
      slides.forEach((slide) => slide.classList.remove("active"));
      slides[i].classList.add("active");
    }
  
    function nextSlide() {
      index = (index + 1) % slides.length;
      showSlide(index);
    }
  
    setInterval(nextSlide, 3000);
  });
  (function ($, Drupal) {
    Drupal.behaviors.heroSlider = {
      attach: function (context, settings) {
        if (typeof $.fn.cycle !== 'undefined') {
          $('.hero-slider', context).once('hero-slider').cycle({
            fx: 'fade',
            timeout: 5000,
            pause: true
          });
        } else {
          console.error('jQuery Cycle plugin is not loaded.');
        }
      }
    };
  })(jQuery, Drupal);
  const carousel = document.getElementById('carousel');
  const slideWidth = carousel.children[0].offsetWidth;
  const visibleSlides = 4;
  let currentIndex = 0;

  function nextSlide() {
    if (currentIndex < carousel.children.length - visibleSlides) {
      currentIndex++;
    } else {
      currentIndex = 0;
    }
    updateCarousel();
  }

  function prevSlide() {
    if (currentIndex > 0) {
      currentIndex--;
    } else {
      currentIndex = carousel.children.length - visibleSlides;
    }
    updateCarousel();
  }

  function updateCarousel() {
    const offset = -(slideWidth * currentIndex);
    carousel.style.transform = `translateX(${offset}px)`;
  }

  // Auto-slide every 3 seconds (optional)
  setInterval(nextSlide, 10000);