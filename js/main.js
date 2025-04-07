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

/* 
- Animate Hamburger
- Move #main-content left 
- Add overlay to #main-content when sidemenu is active
*/

function clickEvent(event) {
    let target = $(event.target);
    const $mainContent = $('#main-content');
    const $hamburger = $('hamburger-btn');
    const $sideMenu = $('#side-menu')

    // Conditional to check if #main-content has active, if so then check if click was registered outside of #side-menu


    if (target.closest('.hamburger-btn').length && !$hamburger.hasClass('active')) {
        $hamburger.toggleClass('active');
        $mainContent.toggleClass('active');
    } else
        if (!target.is($sideMenu) && $mainContent.hasClass('active')) {
            $mainContent.removeClass('active');
            $hamburger.removeClass('active');
        }

}

$('body').on('click', clickEvent);
