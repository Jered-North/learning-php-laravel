$(document).ready(function(){

	$('.footer-lists p').on('mouseover', function() {
		$(this).css({
			color: "#41a52a",
			textDecoration: "underline"
		});
	});
	$('.footer-lists p').on('mouseout', function() {
		$(this).css({
			color: "white",
			textDecoration: "none"
		});
	});


	$('.header-link').on('mouseover', function() {
		$(this).css({
			color: "#627492",
		});
	});
	$('.header-link').on('mouseout', function() {
		$(this).css({
			color: "white",
		});
	});

	$('.home-link').on('mouseover', function() {
		$(this).css({
			color: "darkred",
		});
	});
	$('.home-link').on('mouseout', function() {
		$(this).css({
			color: "white",
		});
	});

	$('.apply-now-ad, .other-ad').on('mouseover', function() {
		$(this).css({
			backgroundColor: "darkred",
		});
	});
	$('.apply-now-ad, .other-ad').on('mouseout', function() {
		$(this).css({
			backgroundColor: "#41a52a",
		});
	});
});