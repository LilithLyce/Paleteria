let currentIndex = 0;
const totalProducts = document.querySelectorAll('.product').length;

function changeSlide(direction) {
    currentIndex += direction;

    if (currentIndex < 0) {
        currentIndex = totalProducts - 1;
    } else if (currentIndex >= totalProducts) {
        currentIndex = 0;
    }

    updateCarousel();
}

function updateCarousel() {
    const carousel = document.querySelector('.carousel');
    const newPosition = -currentIndex * 100 + '%';
    carousel.style.transform = 'translateX(' + newPosition + ')';
}