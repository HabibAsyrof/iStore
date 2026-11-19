
<section class="hero-slider">

    <div class="slider-container">

        <!-- Slider Viewport -->
        <div class="slider-viewport">

            <div class="slider-track">

                <!-- Slide 1 -->
                <div class="slide">
                    <img
                        src="{{asset('asset/iphone.png')}}"
                        alt="iPhone"
                    >
                </div>

                <!-- Slide 2 -->
                <div class="slide">
                  <img
                        src="{{asset('asset/ecosystem.png')}}"
                        alt="iPhone"
                    >
                </div>

                <!-- Slide 3 -->
                <div class="slide">
                    <img
                        src="{{ asset('asset/zaidjelek.jpeg') }}"
                        alt="iPad"
                    >
                </div>

            </div>

        </div>

        <!-- Navigation -->
        <button class="slider-btn prev" type="button"
            aria-label="Previous slide">
            <i class="fa-solid fa-chevron-left"></i>
        </button>

        <button class="slider-btn next" type="button"
            aria-label="Next slide">
            <i class="fa-solid fa-chevron-right"></i>
        </button>

        <!-- Floating Dots -->
        <div class="slider-dots"></div>

    </div>

</section>
