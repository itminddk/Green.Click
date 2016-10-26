jQuery(function() {
    var wrapperHeight = jQuery('.gcm-form-ad-landing-entry-wrapper:last-child').height();

    // Adding new entries
    jQuery('div.gcm-form-add-ad-landing-entry a').click(function() {
        var mainWrapper = jQuery(this).parent().prev('div.gcm-form-ad-landing-wrapper');
        var markup = jQuery(mainWrapper).find('div.gcm-form-ad-landing-entry-wrapper:first')[0].outerHTML;

        jQuery(mainWrapper).append(markup);
        var newEntry = jQuery('div.gcm-form-ad-landing-entry-wrapper:last');
        jQuery(newEntry).hide().fadeIn(500);
        jQuery(newEntry).find('div.gcm-form-remove-ad-landing-entry').fadeIn(500);

        // Adjust slide height
        jQuery('.bx-viewport').each(function() {
            jQuery(this).css('height', (jQuery(this).height() + wrapperHeight + 30) + 'px');
        });

        return false;
    });

    // Removing entries
    jQuery('div.gcm-form-ad-landing-wrapper').on('click', 'div.gcm-form-ad-landing-entry-wrapper div.gcm-form-remove-ad-landing-entry a', function() {
        jQuery(this).parents('div.gcm-form-ad-landing-entry-wrapper').fadeOut(500, function() {
            jQuery(this).remove();

            // Adjust slide height
            jQuery('.bx-viewport').each(function() {
                jQuery(this).css('height', (jQuery(this).height() - wrapperHeight - 25) + 'px');
            });
        });

        return false;
    });
});