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
const $placeholder = $('.placeholder');
const placeholderHeight = $header.height();
$placeholder.height(placeholderHeight);


// Function to track user scroll and reveal sticky header
let lastKnownScrollPosition = 0;
document.addEventListener("scroll", (event) => {
    // If scrollY > placeholderHeight then set header to sticky
    if (window.scrollY > placeholderHeight) {
        $header.addClass('sticky');
        // If scrollY > last known scroll position then show sticky header
        if (window.scrollY > lastKnownScrollPosition) {
            $header.addClass('out-view');
            $header.removeClass('in-view');
        } else {
            // If scrollY < last known scroll position then hide sticky header
            $header.removeClass('out-view');
            $header.addClass('in-view');
        }
    } else {
        // If scrolled to top then reset header to absolute at the top
        console.log("at the placeholder height");
        $header.removeClass('out-view');
        $header.removeClass('in-view');
        $header.removeClass('sticky');
    }



    // update last known scroll position for future checks of scroll direction
    lastKnownScrollPosition = window.scrollY;
})