$(document).ready(function () {
	toastr.options = {
		closeButton: true,
		debug: false,
		newestOnTop: false,
		progressBar: false,
		positionClass: 'toast-top-right',
		preventDuplicates: false,
		showDuration: '1000',
		hideDuration: '1000',
		timeOut: '5000',
		extendedTimeOut: '1000',
		showEasing: 'swing',
		hideEasing: 'linear',
		showMethod: 'fadeIn',
		hideMethod: 'fadeOut',
	};

	$('.navbar-light .dmenu').hover(
		function () {
			$(this).find('.sm-menu').first().stop(true, true).slideDown(150);
		},
		function () {
			$(this).find('.sm-menu').first().stop(true, true).slideUp(105);
		}
	);

	$('.megamenu').on('click', function (e) {
		e.stopPropagation();
	});

	/* Inicio Script del producto individual */
	var quantity = 1;

	$('.quantity-right-plus').click(function (e) {
		e.preventDefault();
		var quantity = parseInt($('#quantity').val());
		$('#quantity').val(quantity + 1);
	});

	$('.quantity-left-minus').click(function (e) {
		e.preventDefault();
		var quantity = parseInt($('#quantity').val());
		if (quantity > 1) {
			$('#quantity').val(quantity - 1);
		}
	});
});