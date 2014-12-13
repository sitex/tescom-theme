$(document).ready(function() {

	$('.call .request').click(function(event){
		event.preventDefault();
		// show
		$('.call .request_form').fadeIn();
	})

	$('.request_form .cancel').click(function (event) {
		event.preventDefault();
		// hide
		$('.call .request_form').fadeOut();
	})

	// Disable certain links in docs
	// $('section [href^=#]').click(function (e) {
	//   e.preventDefault()
	// })

	$('.service-side').localScroll({
		offset: -80,
		duration: 200
	});

	var $window = $(window)

	// side bar
	setTimeout(function() {
		$('.service-side ul').affix({
			offset: { top: 123 }
		})

		$('.topMenu_wrapper').affix({
			offset: { top: 123 }
		})

	}, 100)


	$('.service-side a').click(function() {
		var selector = $(this).attr('href'),
			header = $(selector)

		// reset
		$('#content h3').css('color', 'black')		// headers
		$('.service-side li').removeClass('active')	// links

		// skip #content
		if (selector !== '#content') {
			header.css('color', '#006699')			// header
			$(this).parent().addClass('active')		// link
		}

	})


});