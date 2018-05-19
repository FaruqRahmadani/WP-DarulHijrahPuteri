// console.log("gulp bootstrap starter");
$('.page-scroll').on('click', function(e) {
	var target = $(this).attr('href');

	// $('body').scrollTop(target.offset().top);
	$('html, body').animate({
		scrollTop: $(target).offset().top - 95
	}, 800);

	e.preventDefault();
});
