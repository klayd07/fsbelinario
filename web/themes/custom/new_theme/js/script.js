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
  