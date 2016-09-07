$(document).ready(function() {
	$('.panel-title').on('mouseenter', function() {
		$(this).find('a').css('color', 'white');
		$(this).closest('.panel-heading').css('background-color', 'rgba(0,155,219,0.5)');
	});
	$('.panel-title').on('mouseleave', function() {
		$(this).find('a').css('color', 'black');
		$(this).closest('.panel-heading').css('background-color', '#f1f1f1');
	});
	$('.main-banner').on('mouseenter', function() {
		$('.main-banner span:first').animate({
			'margin-left':'1em'
	}, 'slow');
	});
})