$(document).ready(function() {
	$('#sdt_menu div.sdt_box a').on('mouseover', function() {
		$(this).css('color', 'white');
		$(this).css("background-color", "rgba(51, 122, 183, 1)");
		$(this).css('font-size', '1.4em');
	});
	$('#sdt_menu div.sdt_box a').on('mouseleave', function() {
		$(this).css('color', '#337ab7');
		$(this).css("background-color", "rgba(255,255,255,0.6");
		$(this).css("font-size", "15px");
	});
	$('#sdt_menu li').on('mouseleave', function() {
		var x = $(this).find('.sdt_wrap');
			$(x).css('opacity', '1');
	});
	$(".menu-collapsed").click(function() {
  		$(this).toggleClass("menu-expanded");
  		$(this).find('a').css('color', 'white');
	});
	$('.panel-title a span').css('display', 'none');
	
	
})