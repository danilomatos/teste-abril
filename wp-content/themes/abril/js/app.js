jQuery(document).ready(function($) {
	$(".menu").on('click', function(event) {
		event.preventDefault();
		if ($(".navbar-collapse").hasClass('in')) {
			$(".menu").removeClass('active');
			$(".glyphicon-remove").removeClass('glyphicon-remove').addClass('glyphicon-menu-hamburger');
		} else {
			$(".menu").addClass('active');
			$(".glyphicon-menu-hamburger").removeClass('glyphicon-menu-hamburger').addClass('glyphicon-remove');
		}
	});
	/*
	$(".menu").on('click', function(event) {
		event.preventDefault();
		if ($(".navbar-collapse").hasClass('in')) {
			$(".glyphicon-menu-hamburger").css("display","block");
			$(".glyphicon-remove").css("display","none")
		} else {
			$(".glyphicon-menu-hamburger").css("display","none");
			$(".glyphicon-remove").css("display","block");
		}
	});
	*/
});