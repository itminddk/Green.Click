jQuery(function() {
    // Workaround to fix that Chrome does not display error messages when displaying the feedback divs
    // Reserving fixed space for these divs resolves the issue
    if (/chrom(e|ium)/.test(navigator.userAgent.toLowerCase())) {
        jQuery('#gcm-form-feedback').css('height', '75px');
    }

    function submitForm() {
        var submitButton = jQuery('#gcm-form-submit-button');

        // Remove current click event to prevent double clicking. Add a new handler to avoid the browser view going to the top when the link is clicked
        jQuery(submitButton).off('click').on('click', function() { return false; });

        // Check if the browser supports HTML5 form validation
        /*if ((typeof document.createElement('input').checkValidity == 'function')) {
            if (!jQuery('#gcm-form-form')[0].checkValidity()) {
                alert("not valid!");
                jQuery('#gcm-form-submit-button').click();
            } else {
                alert("valid!");
            }
        }*/

        submitButtonWidth = parseInt(jQuery('#gcm-form-submit-button').outerWidth(true));
        submitButtonWidth += 50;

        jQuery('#gcm-form-submit-button').toggleClass('loading').animate({
            width: submitButtonWidth + 'px'
        }, 1000);

        var data = jQuery('#gcm-form-form').serializeArray();
        data.push({ name: 'action', value: 'proxy' });
        data.push({ name: 'type', value: injected.type });
        data.push({ name: 'method', value: 'save' });
        data.push({ name: 'lead', value: injected.lead });
        data.push({ name: 'partner', value: injected.partner });
        data.push({ name: 'checksum', value: injected.checksum });
        data.push({ name: 'pchecksum', value: injected.partnerChecksum });
        data.push({ name: 'debug', value: injected.debug });

        if (injected.debug == 3) {
            console.log(data);
        }

        clearErrors();

        jQuery.ajax({
            type: 'post',
            dataType: 'json',
            url: injected.ajaxUrl,
            data: data
        }).done(function(result) {
                if (result.success !== 'undefined') {
                    if (result.success == 1) {
                        window.location = injected.redirect;
                    } else {
                        jQuery.each(result.errors, function() {
                            if (injected.debug == 2) {
                                console.log(this.error + ': ' + this.message);
                            }

                            switch (parseInt(this.error)) {
                                case 5020: addFieldValidationError(this.message, this.field); break;

                                case 2000: // Invalid request method
                                case 2001: // Invalid response format
                                case 2002: // Invalid requested method
                                case 2003: // Invalid checksum
                                case 5010: // General
                                case 5030: // Transformation
                                case 5040: // SQL
                                    addError(this.message);
                                    break;

                                default: break;
                            }
                        });

                        if (injected.debug == 2) {
                            console.log(result);
                        }

                        showErrors();
                        scrollToFirstError();
                    }
                } else {
                    // Invalid response format
                    if (injected.debug == 2) {
                        console.log(result);
                    }

                    addError(injected.invalidResponseFormat);
                    showErrors();
                    scrollToTop();
                }
            }).fail(function() {
                addError(injected.unableToSendRequest);
                showErrors();
                scrollToTop();
            }).always(function() {
                jQuery(submitButton).on('click', submitForm); // Add the event handler again when a response is received
                submitButtonWidth -= 50;

                jQuery('#gcm-form-submit-button').toggleClass('loading').animate({
                    width: submitButtonWidth + 'px'
                }, 1000);
            });

        return false;
    }

    function scrollToTop() {
        jQuery('html, body').animate({
            scrollTop: jQuery('#gcm-form-wrapper').offset().top - 15
        }, 2000);
    }

    function clearErrors() {
        jQuery('#gcm-form-feedback div').hide();
        jQuery('#gcm-form-error ul').empty();
        jQuery('#gcm-form-validation').hide();
        jQuery('div.gcm-form-field-error-text-wrapper').hide();
    }

    function showErrors() {
        var errors = jQuery('#gcm-form-error ul li');

        if (errors.length > 0) {
            jQuery('#gcm-form-error').show();
        }

        // Show main validation error box
        var validationErrorsLength = jQuery('div.gcm-form-field-error span.gcm-form-field-validation-error').filter(function() {
            return (jQuery(this).html() != '');
        }).length;

        if (validationErrorsLength > 0) {
            jQuery('#gcm-form-validation').show();
        }
    }

    function addError(message) {
        jQuery('#gcm-form-error ul').append('<li>' + message + '</li>');
    }

    function addFieldValidationError(message, fieldId) {
        jQuery('#field_error_' + fieldId + ' span.gcm-form-field-validation-error').html(message);
        jQuery('#field_error_' + fieldId).children('div.gcm-form-field-error-text-wrapper').show();
    }

    function scrollToFirstError() {
        var errorContainers = jQuery('div.gcm-form-field-error .gcm-form-field-error-text-wrapper .gcm-form-field-validation-error').filter(function() {
            return (jQuery(this).html() != '');
        });

        var firstErrorContainer = errorContainers.get(0);
        var pagesAfterFirstErrorPage = jQuery(firstErrorContainer).parents('.gcm-form-page').nextAll('.gcm-form-page').length;
        var pageCount = slider.getSlideCount();
        var firstErrorPageNumber = (pageCount - pagesAfterFirstErrorPage);

        if (pageCount == firstErrorPageNumber) {
            scrollToTop(); // Last page - scroll to top
        } else {
            slider.goToSlide((firstErrorPageNumber - 1));
        }
    }

    var slider = jQuery('#gcm-form-pages-wrapper').bxSlider({
        slideSelector: 'div.gcm-form-page',
        infiniteLoop: false,
        useCSS: true,
        speed: 2000,
        hideControlOnEnd: true,
        prevText: injected.previousSlideButtonText,
        nextText: injected.nextSlideButtonText,
        prevSelector: '#gcm-form-controls .previous',
        nextSelector: '#gcm-form-controls .next',
        adaptiveHeight: true,
        pagerSelector: '#gcm-form-pager #gcm-form-page-numbers',
        pagerType: 'short',

        onSlideBefore: function($slideElement, oldIndex, newIndex) {
            scrollToTop();

            if ((newIndex + 1) == slider.getSlideCount()) {
                // Changing to the last page
                window.setTimeout(function() {
                    jQuery('#gcm-form-controls .next').hide();
                    jQuery('#gcm-form-submit').show();
                }, 500);
            } else {
                window.setTimeout(function() {
                    jQuery('#gcm-form-controls .next').show();
                    jQuery('#gcm-form-submit').hide();
                }, 500);
            }
        },

        onSlideAfter: function($slideElement, oldIndex, newIndex) {
            var newPage = jQuery('div.gcm-form-page').get(newIndex);
            jQuery(newPage).find('div.gcm-form-field').first().find(':input, select').first().focus();
        }
    });

    if (slider.getSlideCount() == 1) {
        jQuery('#gcm-form-controls .next').hide();
        jQuery('#gcm-form-submit').show();
    }

    // Handle tabbing through pages
    jQuery('div.gcm-form-page').each(function() {
        // Handle tabbing to the next page
        jQuery(this).find('div.gcm-form-field-wrapper:last').find('input, select, textarea').filter(':first').keydown(function(event) {
            if (!event.shiftKey && event.which == 9) { // Tab
                slider.goToNextSlide();
                return false;
            }
        });

        // Handle tabbing to the previous page
        jQuery(this).find('div.gcm-form-field-wrapper:first').find('input, select, textarea').filter(':first').keydown(function(event) {
            if (event.shiftKey && event.which == 9) { // Shift + Tab
                slider.goToPrevSlide();
                return false;
            }
        });
    });

    jQuery('#gcm-form-submit-button').on('click', submitForm);

    var submitButtonWidth;
});