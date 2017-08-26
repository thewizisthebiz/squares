console.log('\'Allo \'Allo!');

var mySwiper = new Swiper ('.swiper-container', {
	// Optional parameters
	slidesPerView: 2,
	centeredSlides: true,
	spaceBetween: 10,
	grabCursor: true,
});

var simpleBoard = new DrawingBoard.Board('simple-board', {
	controls: false,
	webStorage: false,
	background: false,
	size: 4,
});

var $draggable = $('.c_note--Child').draggabilly({
  axis: 'y',
  handle: '.note_handle',
  containment: '.c_stack',
});
