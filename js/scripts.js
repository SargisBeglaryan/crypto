$(document).ready(function () {

	$("#search-input").on('focusin', function (event) {
        $('.search-form-content').addClass('widtAnimation');
    });

    $("#search-input").on('focusout', function (event) {
        $('.search-form-content').removeClass('widtAnimation');
    });

    $('.print').on('click', function() {
    	window.print();
    });

    $('.languages-button, .currency-select-button').on('click', function(event) {
		event.stopPropagation();
		$(this).next().slideToggle(10);
    });

    $('body').on('click', function(e) {
		$(".languages-list-content").slideUp(10);
		$(".currency-list-content").slideUp(10);
	});

	$('.menu-icon').on('click', function () {
		$('footer').fadeOut(200);
		$('.menu-footer').fadeIn(200);
	});

	$('.menu-footer-button').on('click', function () {
		$('footer').fadeIn(200);
		$('.menu-footer').fadeOut(200);
	});

	/*function setEqualHeight(columns) {
		var tallestcolumn = 0;
		columns.each(function(){
			currentHeight = $(this).height();
			if(currentHeight > tallestcolumn) {
				tallestcolumn  = currentHeight;
			}
		});
		columns.height(tallestcolumn);
	}
	setEqualHeight($(".menu-list-currencies,.menu-list-links")); */
});