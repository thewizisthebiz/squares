console.log('\'Allo \'Allo!');

var mySwiper = new Swiper ('.swiper-container', {
	// Optional parameters
	slidesPerView: 2,
	centeredSlides: true,
	spaceBetween: 30,
});

var simpleBoard = new DrawingBoard.Board('simple-board', {
	controls: false,
	webStorage: false,
	background: false,
});

