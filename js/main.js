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

// Function to reveal side menu

function clickEvent(event) {
    let $target = $(event.target);
    const $mainContent = $('#main-content');
    const $hamburger = $('.hamburger-btn');
    const $sideMenu = $('#side-menu')

    // Conditional to check if #main-content has active, if so then check if click was registered outside of #side-menu

    if ($target.is($hamburger) && !$hamburger.hasClass('active')) {
        $hamburger.addClass('active');
        $mainContent.addClass('active');
    } else
        if (!$sideMenu.has($target).length && $mainContent.hasClass('active') && $hamburger.hasClass('active')) {
            $mainContent.removeClass('active');
            $hamburger.removeClass('active');
        }

}

$('body').on('click', clickEvent);


// Function to track user scroll and reveal sticky header
let lastKnownScrollPosition = 0;
const $header = $('header');
const $stickyHeader = $('#sticky-header');
console.log('$stickyHeader', $stickyHeader);
document.addEventListener("scroll", () => {
    // If scrollY > header height then make header invisible and sticky nav display block
    if (window.scrollY > $header.outerHeight()) {
        console.log("User scrolled down past header bottom");
        $header.addClass('nav-hidden');
        $stickyHeader.addClass('sticky-header-active');

        // If user scrolls down, the sticky nav stays above the top of the screen
        if (window.scrollY > lastKnownScrollPosition) {
            $stickyHeader.addClass('visible');
        } else {
            $stickyHeader.removeClass('visible');
        }
        // If user scrolls up, the sticky nav slides into view
    } else {
        // Else remove header's hidden class and 
        console.log("header has scrolled into view");
        $header.removeClass('nav-hidden');
        $stickyHeader.removeClass('sticky-header-active');
    }
    lastKnownScrollPosition = window.scrollY;
})