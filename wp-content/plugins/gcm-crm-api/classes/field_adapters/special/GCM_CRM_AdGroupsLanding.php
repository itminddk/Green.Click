<?php

require_once(plugin_dir_path(__FILE__) . '../../GCM_CRM_AbstractField.php');

class GCM_CRM_AdGroupsLanding extends GCM_CRM_AbstractField
{
    /**
     * Generates the output for a field
     *
     * @return string The HTML output for the field
     */
    public function render()
    {
        wp_register_style('ad-groups-landing', WP_PLUGIN_URL . '/gcm-crm-api/css/field_adapters/ad-groups-landing.css');
        wp_enqueue_style('ad-groups-landing');

        wp_register_script('ad-groups-landing', WP_PLUGIN_URL . '/gcm-crm-api/js/field_adapters/ad-groups-landing.js');
        wp_enqueue_script('ad-groups-landing');

        $html = $this->renderLabel() . self::PRE_MARKUP;
        $fieldName = $this->getFieldName();

        $html .= '<div class="gcm-form-ad-landing-wrapper">';
        $html .= '<div class="gcm-form-ad-landing-entry-wrapper">';

        // Ad group
        $html .= '<div class="gcm-form-ad-group-wrapper">';
        $html .= '<input type="text" name="' . $fieldName . '[ad][]" class="gcm-form-field-text gcm-form-ad-group" placeholder="' . __('Enter ad group', 'gcm-crm-api') . '" value="" ' . $this->renderRequiredAttribute() . ' />';
        $html .= '</div>';

        // Landing page
        $html .= '<div class="gcm-form-landing-page-wrapper">';
        $html .= '<input type="text" name="' . $fieldName . '[landing][]" class="gcm-form-field-text gcm-form-landing-page" placeholder="' . __('Enter landing page', 'gcm-crm-api') . '" value="" ' . $this->renderRequiredAttribute() . ' />';
        $html .= '</div>';

        // Keywords
        $html .= '<div class="gcm-form-search-term-wrapper">';
        $html .= '<input type="text" name="' . $fieldName . '[keyword][]" class="gcm-form-field-text gcm-form-keyword" placeholder="' . __('Enter search term', 'gcm-crm-api') . '" value="" ' . $this->renderRequiredAttribute() . ' />';
        $html .= '</div>';
        $html .= '<div class="gcm-form-remove-ad-landing-entry" style="display: none;"><a href="#">' . __('Remove', 'gcm-crm-api') . '</a></div>';

        $html .= '</div>'; // End entry wrapper (wrapper for ad group + landing page + keyword)
        $html .= '</div>'; // End main wrapper

        $html .= '<div class="gcm-form-add-ad-landing-entry"><a href="#">+ ' . __('Add ad group, landing page and search term', 'gcm-crm-api') . '</a></div>';

        return $html . self::POST_MARKUP . $this->renderDescription() . $this->renderErrorContainer();
    }
}