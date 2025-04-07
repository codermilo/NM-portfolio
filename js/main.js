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

// Function to calculate placeholder height
const $header = $('#header');
const placeholderHeight = $header;
console.log("placeholderHeight", placeholderHeight)


// Function to track user scroll and reveal sticky header
let lastKnownScrollPosition = 0;
document.addEventListener("scroll", (event) => {
    // If scrollY > 
    if (window.scrollY > lastKnownScrollPosition) {
        console.log("User scrolled down");
    } else {
        console.log("User scrolled up");
    }
    lastKnownScrollPosition = window.scrollY;
    console.log("event", event);
    console.log("lastKnownScrollPosition", lastKnownScrollPosition);
})