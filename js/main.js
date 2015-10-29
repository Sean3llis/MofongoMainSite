(function($){$(document).ready(function(){
	var s = skrollr.init({
		forceHeight: true
	});

	$('.typed').typed({
		strings: ['this is only', 'a test of typed', 'this content can', 'be changed to whatever', 'we want..', '...boobs'],
		typeSpeed: 40,
		loop: true,
		backDelay: 1500
	});

})})(jQuery);