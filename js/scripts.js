$(document).ready(function () {

	$("#search-input").on('focusin', function (event) {
        $('.search-form-content').addClass('widtAnimation');
        if($(window).width() < 768 && $(this).val() != '') {
			$('.search-result').fadeIn(100);
        }
    });

    $("#search-input").on('focusout', function (event) {
        $('.search-form-content').removeClass('widtAnimation');
        if($(window).width() < 768) {
			$('.search-result').fadeOut(100);
        }
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

	$('#search-input').on('keyup', function(){

		var searchWord = $(this).val().trim();
		if(searchWord == '') {
			$('.search-result').fadeOut(100);
			return false;
		}

		/* this functionality need to removed on future */
		var findedData = 0;
		$('.listSearch a').each(function (){
			if($(this).text().toLowerCase().indexOf(searchWord) >= 0) {
				$(this).show();
				findedData ++;
			} else {
				$(this).hide();
			}
		});
		if(findedData == 0) {
			$('.no-result').show();
		} else {
			$('.search-result').fadeIn(100);
			$('.no-result').hide();
		}

		/* above functionality need to removed*/

		/* ajax call need to uncommited when we will have back end functionality
		$.ajax({
			url: "some_url_for_request",
			type: "POST",
			data: { searchWord: searchWord},
			dataType: "json",
			success: function(data) {
				if(data) {
					var searhResult = '';
					for(let i = 0; i < data.length; i++) {
						searchResult = '<a href="#" class="list-group-item list-group-item-action search-data">'+data['name']+'</li>'
					}
					$('.listSearch').html(searchResult);
				} else {
					$('.listSearch').html('<span class="list-group-item list-group-item-action">No result</span>');
				}
			},
			error: function (xhr, status) {
				console.log("Sorry, there was a problem!");
			}
		});
		*/
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