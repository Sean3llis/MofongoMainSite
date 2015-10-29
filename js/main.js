(function($){$(document).ready(function(){
	var s = skrollr.init({
		forceHeight: true
	});

	$('.typed').typed({
		strings: ['MADE IN BROOKLYN', 'BORN IN PUERTO RICO'],
		typeSpeed: 40,
		loop: true,
		backDelay: 1500
	});

})})(jQuery);