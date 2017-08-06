//= ../../bower_components/jquery/dist/jquery.js
//= ../../bower_components/slick-carousel/slick/slick.js
//= ../../bower_components/foundation-sites/js/foundation.core.js
//= ../../bower_components/foundation-sites/js/foundation.util.box.js
//= ../../bower_components/foundation-sites/js/foundation.util.keyboard.js
//= ../../bower_components/foundation-sites/js/foundation.util.mediaQuery.js
//= ../../bower_components/foundation-sites/js/foundation.util.motion.js
//= ../../bower_components/foundation-sites/js/foundation.util.nest.js
//= ../../bower_components/foundation-sites/js/foundation.util.timerAndImageLoader.js
//= ../../bower_components/foundation-sites/js/foundation.util.touch.js
//= ../../bower_components/foundation-sites/js/foundation.util.triggers.js

//= ../../bower_components/foundation-sites/js/foundation.reveal.js


/*
 * Custom js
 */
$(".slider, .slider2").slick({});
$(document).ready(function() {
	$('#toggle-req').on('click', function(event) {
		event.preventDefault();
		$('#drop-req').slideToggle(400);
		// $(this).toggleClass('selector');
	});
	$('.accordion .item').on('click', function(event) {
		event.preventDefault();
		$(this).find('div').toggle();
		$(this).toggleClass('opened');
	});
});
 $(document).foundation();
