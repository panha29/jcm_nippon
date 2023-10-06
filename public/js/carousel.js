$(document).ready(function() {
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items: 1,
        // items change number for slider display on desktop
        loop: true,
        // margin: 10,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true
    });
});