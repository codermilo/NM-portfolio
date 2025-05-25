// Call Owl Carousel plugin
$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        loop: true,
        autoHeight: true,
        items: 1,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        dots: true,
        dotsEach: true,
        nav: true
    });
});