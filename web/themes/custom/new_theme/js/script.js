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
  