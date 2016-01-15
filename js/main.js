(function($){$(document).ready(function(){
	// var s = skrollr.init();

	$('.typed').typed({
		strings: ['MADE IN BROOKLYN', 'BORN IN PUERTO RICO'],
		typeSpeed: 70,
		loop: true,
		backDelay: 1500
	});

function lettersIn(){
	$('#logo img')
	.velocity({
		opacity: 1
	}, {
		delay: 500,
		complete: pilonIn
	}, "easeIn")
}

function pilonIn(){
	$('#logo-pilon')
		.velocity({
			opacity: 1
		}, {
			delay: 500,
			complete: stir
		})
}

function stir(){
	var handle = $('#pilon-handle');
	handle.velocity({
		translateX: "-30px"
	}, {
		loop: 2,
		duration: 600,
		easing: "easeInOutSine"
	});
}

lettersIn();




})})(jQuery);