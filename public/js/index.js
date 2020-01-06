$(document).ready(function(){
	$('a').click(function(){
		var selected = $(this);
		$('a').removeClass('active');
		$(selected).addClass('active');
	});


	var $a = $('.a'),
		$b = $('.b'),
		$c = $('.c'),
		$d = $('.d'),
		$home = $('.content'),
		$aboutme = $('.aboutme');
		$gallery = $('.gallery');
		$contactme = $('.contact');


	$a.click(function(){
		$home.fadeIn();
		$aboutme.fadeOut();
		$gallery.fadeOut();
		$contactme.fadeOut();
	});
	$b.click(function(){
		$home.fadeOut();
		$aboutme.fadeIn();
		$gallery.fadeOut();
		$contactme.fadeOut();
	});
	$c.click(function(){
		$home.fadeOut();
		$aboutme.fadeOut();
		$gallery.fadeIn();
		$contactme.fadeOut();
	});

	$d.click(function(){
		$home.fadeOut();
		$aboutme.fadeOut();
		$gallery.fadeOut();
		$contactme.fadeIn();
	});

});