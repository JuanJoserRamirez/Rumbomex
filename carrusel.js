$(document).ready(function() {
    var slideWidth = $('.slider').width();
    var totalSlides = $('.slider').length;
    var currentIndex = 0;

    function moveSlides() {
        $('.slider').css('transform', 'translateX(' + (-slideWidth * currentIndex) + 'px)');
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % totalSlides;
        moveSlides();
    }

    setInterval(nextSlide, 3000); // Cambia el slide cada 3 segundos

    // Opcional: agregar controles de navegación
    $('.next').click(function() {
        nextSlide();
    });

    $('.prev').click(function() {
        currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
        moveSlides();
    });
});
