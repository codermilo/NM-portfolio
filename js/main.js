// Call Owl Carousel plugin
$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        loop: true,
        // autoWidth: true,
        autoHeight: true,
        items: 1,
        // center: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        dots: true,
        dotsEach: true,
        nav: true
    });
});