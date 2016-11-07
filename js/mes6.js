$(function() {
	$('ul.nav li.dropdown').hover(function() {
		$(this).addClass('open');
		// .find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500)
	}, function() {
		$(this).removeClass('open');
		// .find('.dropdown-menu').removeClass('open').stop(true, true).delay(200)fadeOut(500);
	});
	$('ul.nav li').hover(function() {
		$(this).addClass('active');
		// .find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500)
	}, function() {
		$(this).removeClass('active');
		// .find('.dropdown-menu').removeClass('open').stop(true, true).delay(200)fadeOut(500);
	});
	$('a.list-group-item').hover(function() {
		$(this).addClass('active');
		// .find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500)
	}, function() {
		$(this).removeClass('active');
		// .find('.dropdown-menu').removeClass('open').stop(true, true).delay(200)fadeOut(500);
	});
	$('#myTab button a').click(function(e) {
		e.preventDefault();
		$(this).tab('show');
	});
});