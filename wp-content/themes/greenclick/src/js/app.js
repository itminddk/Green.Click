;(function(){
	'use strict';

	jQuery(document).ready(function($) {

		// Contact form
		$('#contactButton').on('click', function(e) {
			e.preventDefault();
			$(this).siblings('.input--first').focus();


			if( $('#contactForm .button-group').hasClass('is-inactive')) {
				$(this).text('Næste');
				$(this).parent().removeClass('is-inactive');
				$(this).parent().addClass('is-second');

			} else if( $('#contactForm .button-group').hasClass('is-second')) {
				var name = $(this).parent().find('input[type=text]').val();
				if(!name.match(/\w{2,}/g)) {
					alert('Du skal indtaste dit navn, før du kan fortsætte');
					$(this).parent().find('input[type=text]').focus();
					return false;
				}
				$(this).text('Send');
				$(this).siblings('.input--second').focus();
				$(this).parent().removeClass('is-second');
				$(this).parent().addClass('is-third');
				$(this).parent().find('.tel-prefix').show();
			} else if( $('#contactForm .button-group').hasClass('is-third')) {
				var tel = $(this).parent().find('input[type=tel]').val();
				if(!tel.replace(/[^0-9]+/,'').match(/^[0-9]{8}$/)) {
					alert('Dit telefonnummer skal bestå af præcis 8 tal');
					$(this).parent().find('input[type=tel]').focus();
					return false;
				}
				$(this).parent().find('.tel-prefix').hide();
				var theButton = $(this);
				$.post('/wp-content/themes/greenclick/mail.php', {
					form: 'contact',
					name: theButton.parent().find('input[type=text]').val(),
					phone: theButton.parent().find('input[type=tel]').val(),
				}, function(data) {
					if(data && data == 'OK') {
						theButton.text('Tak!');
						theButton.parent().removeClass('is-third');
						theButton.parent().addClass('is-submitted');
					}
					else {
						theButton.text('Der opstod en fejl');
						theButton.parent().removeClass('is-third');
					}
				});
			}
		});
		// Contact Overlay form
		$('.packages__overlay #packagesOverlayButton').on('click', function(e) {
			e.preventDefault();
			$(this).siblings('.input--first').focus();


			if( $('.packages__overlay .button-group').hasClass('is-inactive')) {
				$(this).text('Næste');
				$(this).parent().removeClass('is-inactive');
				$(this).parent().addClass('is-second');

			} else if( $('.packages__overlay .button-group').hasClass('is-second')) {
				$(this).text('Send');
				$(this).siblings('.input--second').focus();
				$(this).parent().removeClass('is-second');
				$(this).parent().addClass('is-third');

			} else if( $('.packages__overlay .button-group').hasClass('is-third')) {
				$(this).text('Tak!');
				$(this).parent().removeClass('is-third');
				$(this).parent().addClass('is-submitted');
			}
		});
		// Health form
		$('#health #healthButton').on('click', function(e) {
			e.preventDefault();
			$(this).siblings('.input--first').focus();

			if( $('#health .button-group').hasClass('is-inactive')) {
				$(this).text('Næste');
				$(this).parent().removeClass('is-inactive');
				$(this).parent().addClass('is-second');

			} else if( $('#health .button-group').hasClass('is-second')) {

				$(this).text('Næste');
				$(this).siblings('.input--second').focus();
				$(this).parent().removeClass('is-second');
				$(this).parent().addClass('is-third');

			} else if( $('#health .button-group').hasClass('is-third')) {
				$(this).text('Send');
				$(this).siblings('.input--third').focus();
				$(this).parent().removeClass('is-third');
				$(this).parent().addClass('is-fourth');


			} else if( $('#health .button-group').hasClass('is-fourth')) {
				$(this).text('Tak!');
				$(this).parent().removeClass('is-fourth');
				$(this).parent().addClass('is-submitted');
			}
		});
		// Health overlay form
		$('#healthOverlay #healthOverlayButton').on('click', function(e) {
			e.preventDefault();
			$(this).siblings('.input--first').focus();

			if( $('#healthOverlay .button-group').hasClass('is-inactive')) {
				$(this).text('Næste');
				$(this).parent().removeClass('is-inactive');
				$(this).parent().addClass('is-second');

			} else if( $('#healthOverlay .button-group').hasClass('is-second')) {
				var website = $(this).parent().find('input[type=text]:first').val();
				if(!website.match(/.*?\.\w+/g)) {
					alert('Du skal indtaste dit websites domænenavn før du kan fortsætte');
					$(this).parent().find('input[type=text]:first').focus();
					return false;
				}
				$(this).text('Næste');
				$(this).siblings('.input--second').focus();
				$(this).parent().removeClass('is-second');
				$(this).parent().addClass('is-third');

			} else if( $('#healthOverlay .button-group').hasClass('is-third')) {
				var name = $(this).parent().find('input[type=text]:nth-child(2)').val();
				if(!name.match(/\w{2,}/g)) {
					alert('Du skal indtaste dit navn før du kan fortsætte');
					$(this).parent().find('input[type=text]:nth-child(2)').focus();
					return false;
				}
				$(this).text('Send');
				$(this).siblings('.input--third').focus();
				$(this).parent().removeClass('is-third');
				$(this).parent().addClass('is-fourth');
				$(this).parent().find('.tel-prefix').show();

			} else if( $('#healthOverlay .button-group').hasClass('is-fourth')) {
				$(this).parent().find('.tel-prefix').hide();
				var tel = $(this).parent().find('input[type=tel]').val();
				if(!tel.replace(/[^0-9]+/,"").match(/^[0-9]{8}$/)) {
					alert('Dit telefonnummer skal bestå af præcis 8 tal');
					$(this).parent().find('input[type=tel]').focus();
					return false;
				}
				var theButton = $(this);
				$.post('/wp-content/themes/greenclick/mail.php', {
					form: 'healthcheck',
					website: theButton.parent().find('input[type=text]:first').val(),
					name: theButton.parent().find('input[type=text]:nth-child(2)').val(),
					phone: theButton.parent().find('input[type=tel]').val(),
				}, function(data) {
					if(data && data == 'OK') {
						theButton.text('Tak!');
						theButton.parent().removeClass('is-fourth');
						theButton.parent().addClass('is-submitted');
					}
					else {
						theButton.text('Der opstod en fejl');
						theButton.parent().removeClass('is-fourth');
					}
				});
			}
		});

		// Simple JS just to toggle the navigation class on click.
		$('.js-lines-toggle').on('click', function() {
			$('.js-lines-toggle, .js-primary-toggle').toggleClass('is-active');

			$('body, html').toggleClass('js-menu-open');
			return false;
		});

		// Open packages overlay
		$('.js-package-toggle').on('click', function(e) {
			e.preventDefault();

			$('.packages__overlay, .hamburger').addClass('is-active');
			$('body, html').addClass('js-package-open');

			// Remove overlay active class before showing
			$(".js-overlay-toggle a").removeClass('is-active');
			$(".packages__overlay .overlay__content .is-active").removeClass('is-active');

			// Add correct active class to selected package
			var id = $(this).attr('href');
			$(".js-overlay-toggle a[href='"+id+"']").addClass('is-active');
			$(id).addClass('is-active');
		});
		// Close packages overlay
		$('.packages__overlay .close').on('click', function() {
			$('.packages__overlay, .hamburger').removeClass('is-active');
			$('body, html').removeClass('js-package-open');
		});
		// Mobile package overlay (Clicking on menu in the overlay)
		$('.js-overlay-toggle a').on('click', function(e) {
			e.preventDefault();

			$('#packageLite, #packageComplete, #packagePremium, #packageMain').removeClass('is-active');

			$(this).siblings().removeClass('is-active');
			$(this).addClass('is-active');

			var id = "#"+$(this).data('link');
			$(id).addClass('is-active');
		});


		// Open model overlay
		$('.js-model-toggle').on('click', function(e) {
			e.preventDefault();

			$('.model__overlay').addClass('is-active');
			$('.hamburger').addClass('is-active');
			$('body, html').addClass('js-model-open');

			// Remove overlay active class before showing
			$('.js-overlay-toggle a').removeClass('is-active');
			$('.model__overlay .overlay__content .is-active').removeClass('is-active');
		});

		// Toggle model overlay content
		$('.js-step-toggle li').on('click', function(e) {
    		var elemTotal   = $(this).siblings().length,
        		elemNum     = $(this).index(),
        		translate   = elemNum*-100;

    		$('#model-slider-content').css('transform','translateX('+translate+'%)');

			$('#modelOne, #modelTwo, #modelThree, #modelFour, #modelFive').removeClass('is-active');
			$(this).siblings().removeClass('is-active');
			$(this).addClass('is-active');
		});

		$('.next').on('click', function(e) {
		    var stepIndex = $(".js-step-toggle li.is-active").next().index();

		    if (stepIndex !== -1) {
		        $('.js-step-toggle li:eq('+stepIndex+')').trigger('click');
		    } else {
		        $('.js-step-toggle li:eq(0)').trigger('click');
		    }
		});

		$('.prev').on('click', function(e) {
		    var stepIndex = $(".js-step-toggle li.is-active").prev().index(),
		        total = ($(".js-step-toggle li").length - 1);

		    if (stepIndex !== -1) {
		        $('.js-step-toggle li:eq('+stepIndex+')').trigger('click');
		    } else {
		        $('.js-step-toggle li:eq('+total+')').trigger('click');
		    }
		});

		// Close model overlay
		$('.model__overlay .close').on('click', function() {
			$('.model__overlay, .hamburger').removeClass('is-active');
			$('body, html').removeClass('js-model-open');
		});

		// Show health button after scroll
		$(window).scroll(function () {
            if ($(this).scrollTop() > 400) {
                $('.health').addClass('is-active');
            } else {
                $('.health').removeClass('is-active');
            }
		});
		$(window).scroll(function () {
			if($(window).scrollTop() + $(window).height() >= $(document).height() -400) {
				$('.health').removeClass('is-active');
			}
		});

		// Open health overlay
		$('.js-open-health').on('click', function(e) {
			e.preventDefault();

			$('.health__overlay').addClass('is-active');

			$('body, html').addClass('js-health-open');
		});
		// Close health overlay
		$('.js-close-health').on('click', function(e) {
			e.preventDefault();

			$('.health__overlay').removeClass('is-active');

			$('body, html').removeClass('js-health-open');
		});


		//Sticky menu
		var stickyMenu = $('.sticky');

		if (stickyMenu.length > 0) {
			$(window).scroll(function() {
				var sticky = $('.sticky'),
					scroll = $(window).scrollTop();

				if(scroll >= 500) {
					sticky.addClass('sticky--offset');
				}
				else {
					sticky.removeClass('sticky--offset');
				}
			});
		}

		// Fit videos responsively
	    $('.video').fitVids();

		// Accordion
		$('.accordion-trigger').on('click', function(e) {
			e.preventDefault();
			$(this).toggleClass('active');
			var target = $(this).attr('href');
			$(target).slideToggle(200);
		});

		$('#landingContact #landingContactButton').on('click', function(e) {
			e.preventDefault();

			var name = $(this).parent().find('input[name=name]').val();
			if(!name.match(/\w{2,}/g)) {
				alert('Du skal indtaste dit navn før du kan fortsætte');
				$(this).parent().find('input[name=name]').focus();
				return false;
			}

			var website = $(this).parent().find('input[name=website]').val();
			if(!website.match(/.*?\.\w+/g)) {
				alert('Du skal indtaste dit websites domænenavn før du kan fortsætte');
				$(this).parent().find('input[name=website]').focus();
				return false;
			}

			var tel = $(this).parent().find('input[type=tel]').val();
			if(!tel.replace(/[^0-9]+/,"").match(/^[0-9]{8}$/)) {
				alert('Dit telefonnummer skal bestå af præcis 8 tal');
				$(this).parent().find('input[type=tel]').focus();
				return false;
			}
			var theButton = $(this);
			$.post('/wp-content/themes/greenclick/mail.php', {
				form: 'healthcheck',
				website: theButton.parent().find('input[type=text]:first').val(),
				name: theButton.parent().find('input[type=text]:nth-child(2)').val(),
				phone: theButton.parent().find('input[type=tel]').val(),
			}, function(data) {
				if(data && data == 'OK') {
					window.location.replace('/adwords/tak/');
				} else {
				theButton.text('Der opstod en fejl');
				}
			});
		});
	});

}());
