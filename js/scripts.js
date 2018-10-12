$(document).ready(function () {
	$("#search-input").on('focusin', function (event) {
		
        $('.search-form-content').addClass('widtAnimation');
    });
    $("#search-input").on('focusout', function (event) {
        $('.search-form-content').removeClass('widtAnimation');
    });
});