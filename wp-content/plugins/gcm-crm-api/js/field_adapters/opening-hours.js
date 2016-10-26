jQuery(function() {
    jQuery('#breaks-included').change(function() {
        jQuery('div.gcm-form-opening-hours-day-wrapper').find('div:not(.gcm-form-opening-hours-day), input.gcm-form-opening-hours-second').toggle();
    });
});