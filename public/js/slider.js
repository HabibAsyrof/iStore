
document.addEventListener("DOMContentLoaded", function () {

    const slider = document.querySelector(".slider-container");

    if (!slider) return;

    const track = slider.querySelector(".slider-track");
    const slides = slider.querySelectorAll(".slide");

    const nextBtn = slider.querySelector(".next");
    const prevBtn = slider.querySelector(".prev");
    const dotsContainer = slider.querySelector(".slider-dots");

    const totalSlides = slides.length;

    if (totalSlides === 0) return;

    let currentIndex = 0;
    let autoSlide;

    // Membuat dots otomatis
    slides.forEach((slide, index) => {

        const dot = document.createElement("button");

        dot.classList.add("dot");
        dot.type = "button";

        dot.setAttribute(
            "aria-label",
            `Go to slide ${index + 1}`
        );

        dot.addEventListener("click", function () {
            showSlide(index);
            startAutoSlide();
        });

        dotsContainer.appendChild(dot);

    });

    const dots = dotsContainer.querySelectorAll(".dot");

    // Menampilkan slide
    function showSlide(index) {

        currentIndex = (index + totalSlides) % totalSlides;

        track.style.transform =
            `translateX(-${currentIndex * 100}%)`;

        dots.forEach(dot => {
            dot.classList.remove("active");
        });

        dots[currentIndex].classList.add("active");

    }

    // Next
    nextBtn.addEventListener("click", function () {

        showSlide(currentIndex + 1);
        startAutoSlide();

    });

    // Previous
    prevBtn.addEventListener("click", function () {

        showSlide(currentIndex - 1);
        startAutoSlide();

    });

    // Auto slide 4 detik
    function startAutoSlide() {

        clearInterval(autoSlide);

        if (totalSlides < 2) return;

        autoSlide = setInterval(function () {

            showSlide(currentIndex + 1);

        }, 4000);

    }

    // Pause ketika mouse berada di banner
    slider.addEventListener("mouseenter", function () {

        clearInterval(autoSlide);

    });

    slider.addEventListener("mouseleave", function () {

        startAutoSlide();

    });

    // Inisialisasi
    showSlide(0);
    startAutoSlide();

});
