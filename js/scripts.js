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

    $('.languages-button').on('click', function(event) {
    	event.stopPropagation();
    	$('.languages-list-content').slideToggle(10);
    });

    $('body').on('click', function(e) {
		$(".languages-list-content").slideUp(10);
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