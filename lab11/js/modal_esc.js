document.addEventListener("DOMContentLoaded", function () {
    const modal = document.getElementById("modal");
    const allSlides = document.querySelectorAll(".slide");
  
    const modalImage = modal.querySelector(".modal-image");
    const prevBtn = modal.querySelector(".sliderL-btn");
    const nextBtn = modal.querySelector(".sliderR-btn");
    const counter = modal.querySelector(".modal-counter");
    const closeBtn = modal.querySelector(".modal-close");
  
    let currentIndex = 0;
  
    function showModal(index) {
      currentIndex = index;
      modalImage.src = allSlides[currentIndex].src;
      counter.textContent = (currentIndex + 1) + " из " + allSlides.length;
      modal.classList.remove("hidden");
      window.addEventListener("keydown", onKeyDown);
    }
  
    function updateSlide(index) {
      if (index < 0) {
        currentIndex = allSlides.length - 1;
      } else if (index >= allSlides.length) {
        currentIndex = 0;
      } else {
        currentIndex = index;
      }
      modalImage.src = allSlides[currentIndex].src;
      counter.textContent = (currentIndex + 1) + " из " + allSlides.length;
    }
  
    function closeModal() {
      modal.classList.add("hidden");
      window.removeEventListener("keydown", onKeyDown);
    }
  
    function onKeyDown(event) {
      if (event.key === "Escape") {
        closeModal();
      }
    }
  
    for (const img of allSlides) {
      img.style.cursor = "pointer";
      img.addEventListener("click", function () {
        const index = Array.from(allSlides).indexOf(img);
        showModal(index);
      });
    }
  
    prevBtn.addEventListener("click", function () {
      updateSlide(currentIndex - 1);
    });
  
    nextBtn.addEventListener("click", function () {
      updateSlide(currentIndex + 1);
    });
  
    closeBtn.addEventListener("click", function () {
      closeModal();
    });
  });
  