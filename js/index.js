$(document).ready(function () {
	// Owl Carousel for Banner section
	$("#banner-area .owl-carousel").owlCarousel({
        loop:true,
        dots: true,
        items: 1,
        autoplay: true,
        lazyLoad: true
	});

	// Top Sale OWL Carousel
	$("#top-sale .owl-carousel").owlCarousel({
        loop:true,
        nav:true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items:5
            }
        }
    });
});
