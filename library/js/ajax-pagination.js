(function($) {
	
	var footerHeight = $('footer.footer').height();
	var processing;
	var totalPages = $('.page-numbers:not(ul, .next)').size();
	var page = 2;
	
	function find_page_number( element ) {
		element.remove();
		return parseInt( element.html() );
	}
	
	// SCROLL TO LOAD MORE
	$(window).on('scroll', function(){
		if (processing)
            return false;
		
		if ( $('body').hasClass('blog') && $(window).scrollTop() >= $(document).height() - $(window).height() - footerHeight ) {
			if ( page <= totalPages ) {
				processing = true;
				//page = find_page_number( $('.page-numbers.current').parent().next().find('a') );

				$.ajax({
					url: ajaxpagination.ajaxurl,
					type: 'post',
					data: {
						action: 'ajax_pagination',
						query_vars: ajaxpagination.query_vars,
						page: page
					},
					beforeSend: function() {
						$(document).scrollTop();
						$('#main').append( '<div id="loader"><img src="/1066/wp-content/themes/rare-honey/library/images/ring-alt.svg" /></div>' );
					},
					success: function( html ) {
						$('#main #loader').remove();
						$('.other-stories').append( html );
						processing = false;
					}
				})

				page ++;
			}
		}
	});
	
	
	// CLICK TO LOAD MORE
	/*$(document).on( 'click', 'a.page-numbers', function( event ) {
		event.preventDefault();
		
		page = find_page_number( $(this).clone() );

		$.ajax({
			url: ajaxpagination.ajaxurl,
			type: 'post',
			data: {
				action: 'ajax_pagination',
				query_vars: ajaxpagination.query_vars,
				page: page
			},
			beforeSend: function() {
				$('#main nav').remove();
				$(document).scrollTop();
				$('#main').append( '<div class="page-content" id="loader">Loading New Posts...</div>' );
			},
			success: function( html ) {
				$('#main #loader').remove();
				$('.other-stories').append( html );
			}
		})
	})*/
	
})(jQuery);