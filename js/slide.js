$(document).ready(function() {
    let slides = $(".main-imagem-container img");
    let currentSlide = 0;
    function nextSlide() {
        slides.eq(currentSlide).fadeOut(1000);
        currentSlide = (currentSlide + 1) % slides.length;
        slides.eq(currentSlide).fadeIn(1000);
    }
    setInterval(nextSlide, 2000);
});