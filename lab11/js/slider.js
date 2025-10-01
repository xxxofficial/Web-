document.addEventListener("DOMContentLoaded", function () {
    const slides = document.querySelectorAll(".slide");
    const prevBtn = document.querySelector(".sliderL");
    const nextBtn = document.querySelector(".sliderR");
    const counter = document.querySelector(".counter");

    let currentIndex = 0;

    function showSlide(index) {
        let i = 0;
        for (const slide of slides) {
            if (i === index) {
                slide.classList.add("active");
            } else {
                slide.classList.remove("active");
            }
            i++;
        }
        counter.textContent = (index + 1) + "/" + slides.length;
    }

    prevBtn.addEventListener("click", function () {
        if (currentIndex === 0) {
            currentIndex = slides.length - 1;
        } else {
            currentIndex--;
        }
        showSlide(currentIndex);
    });

    nextBtn.addEventListener("click", function () {
        if (currentIndex === slides.length - 1) {
            currentIndex = 0;
        } else {
            currentIndex++;
        }
        showSlide(currentIndex);
    });

    showSlide(currentIndex);
});
