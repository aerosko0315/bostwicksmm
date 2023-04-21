const heroSlider = () => {
    const images = document.querySelectorAll('.js-hero-slider-image');
    const speed = document.querySelector('.js-hero-slider').getAttribute('data-slider-speed');

    if( !images ) {
        return;
    }

    let currentIndex = 0;

    setInterval(() => {
        images[currentIndex].classList.remove('active');
        currentIndex = (currentIndex + 1) % images.length;
        images[currentIndex].classList.add('active');
    }, speed);
}

export default heroSlider;