//AOS
AOS.init({
    duration: 1000,
    easing: 'slide',
    once: true,
});
//Flickity Carousel
$('.main-carousel').flickity({
    cellAlign: 'center',
    wrapAround: true,
    contain: true,
    draggable: true,
    autoPlay: true,
    prevNextButtons: false,
});
// Owl Carousel
$('.owl-carousel').owlCarousel({
    center: false,
	items: 1,
    loop: true,
    mouseDrag: true,
    touchDrag: true,
	stagePadding: 0,
	margin: 0,
	smartSpeed: 1000,
    autoplay: true,    
});
