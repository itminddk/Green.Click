<?php

require_once(plugin_dir_path(__FILE__) . '../../GCM_CRM_AbstractField.php');

class GCM_CRM_OpeningHours extends GCM_CRM_AbstractField
{
    /**
     * Generates the output for a field
     *
     * @return string The HTML output for the field
     */
    public function render()
    {
        wp_register_style('opening-hours', WP_PLUGIN_URL . '/gcm-crm-api/css/field_adapters/opening-hours.css');
        wp_enqueue_style('opening-hours');

        wp_register_script('opening-hours', WP_PLUGIN_URL . '/gcm-crm-api/js/field_adapters/opening-hours.js');
        wp_enqueue_script('opening-hours');

        $html = $this->renderLabel() . self::PRE_MARKUP;
        $fieldName = $this->getFieldName();

        $html .= '<input type="checkbox" name="breaks-included" id="breaks-included"> <label for="breaks-included">' . __('Breaks are included in the opening hours', 'gcm-crm-api') . '</label>';

        // Monday
        $html .= '<div class="gcm-form-opening-hours-day-wrapper">';
        $html .= '<div class="gcm-form-opening-hours-day">' . __('Monday', 'gcm-crm-api') . '</div>';
        $html .= '<input type="text" name="' . $fieldName . '[first][]" class="gcm-form-field-text gcm-form-opening-hours-first" value="" />';
        $html .= '<div class="gcm-form-opening-hours-input-spacer">' . __('and', 'gcm-crm-api') . '</div>';
        $html .= '<input type="text" name="' . $fieldName . '[second][]" class="gcm-form-field-text gcm-form-opening-hours-second" value="" />';
        $html .= '</div>';

        $html .= '<div class="gcm-form-opening-hours-spacer"></div>';

        // Tuesday
        $html .= '<div class="gcm-form-opening-hours-day-wrapper">';
        $html .= '<div class="gcm-form-opening-hours-day">' . __('Tuesday', 'gcm-crm-api') . '</div>';
        $html .= '<input type="text" name="' . $fieldName . '[first][]" class="gcm-form-field-text gcm-form-opening-hours-first" value="" />';
        $html .= '<div class="gcm-form-opening-hours-input-spacer">' . __('and', 'gcm-crm-api') . '</div>';
        $html .= '<input type="text" name="' . $fieldName . '[second][]" class="gcm-form-field-text gcm-form-opening-hours-second" value="" />';
        $html .= '</div>';

        $html .= '<div class="gcm-form-opening-hours-spacer"></div>';

        // Wednesday
        $html .= '<div class="gcm-form-opening-hours-day-wrapper">';
        $html .= '<div class="gcm-form-opening-hours-day">' . __('Wednesday', 'gcm-crm-api') . '</div>';
        $html .= '<input type="text" name="' . $fieldName . '[first][]" class="gcm-form-field-text gcm-form-opening-hours-first" value="" />';
        $html .= '<div class="gcm-form-opening-hours-input-spacer">' . __('and', 'gcm-crm-api') . '</div>';
        $html .= '<input type="text" name="' . $fieldName . '[second][]" class="gcm-form-field-text gcm-form-opening-hours-second" value="" />';
        $html .= '</div>';

        $html .= '<div class="gcm-form-opening-hours-spacer"></div>';

        // Thursday
        $html .= '<div class="gcm-form-opening-hours-day-wrapper">';
        $html .= '<div class="gcm-form-opening-hours-day">' . __('Thursday', 'gcm-crm-api') . '</div>';
        $html .= '<input type="text" name="' . $fieldName . '[first][]" class="gcm-form-field-text gcm-form-opening-hours-first" value="" />';
        $html .= '<div class="gcm-form-opening-hours-input-spacer">' . __('and', 'gcm-crm-api') . '</div>';
        $html .= '<input type="text" name="' . $fieldName . '[second][]" class="gcm-form-field-text gcm-form-opening-hours-second" value="" />';
        $html .= '</div>';

        $html .= '<div class="gcm-form-opening-hours-spacer"></div>';

        // Friday
        $html .= '<div class="gcm-form-opening-hours-day-wrapper">';
        $html .= '<div class="gcm-form-opening-hours-day">' . __('Friday', 'gcm-crm-api') . '</div>';
        $html .= '<input type="text" name="' . $fieldName . '[first][]" class="gcm-form-field-text gcm-form-opening-hours-first" value="" />';
        $html .= '<div class="gcm-form-opening-hours-input-spacer">' . __('and', 'gcm-crm-api') . '</div>';
        $html .= '<input type="text" name="' . $fieldName . '[second][]" class="gcm-form-field-text gcm-form-opening-hours-second" value="" />';
        $html .= '</div>';

        $html .= '<div class="gcm-form-opening-hours-spacer"></div>';

        // Saturday
        $html .= '<div class="gcm-form-opening-hours-day-wrapper">';
        $html .= '<div class="gcm-form-opening-hours-day">' . __('Saturday', 'gcm-crm-api') . '</div>';
        $html .= '<input type="text" name="' . $fieldName . '[first][]" class="gcm-form-field-text gcm-form-opening-hours-first" value="" />';
        $html .= '<div class="gcm-form-opening-hours-input-spacer">' . __('and', 'gcm-crm-api') . '</div>';
        $html .= '<input type="text" name="' . $fieldName . '[second][]" class="gcm-form-field-text gcm-form-opening-hours-second" value="" />';
        $html .= '</div>';

        $html .= '<div class="gcm-form-opening-hours-spacer"></div>';

        // Sunday
        $html .= '<div class="gcm-form-opening-hours-day-wrapper">';
        $html .= '<div class="gcm-form-opening-hours-day">' . __('Sunday', 'gcm-crm-api') . '</div>';
        $html .= '<input type="text" name="' . $fieldName . '[first][]" class="gcm-form-field-text gcm-form-opening-hours-first" value="" />';
        $html .= '<div class="gcm-form-opening-hours-input-spacer">' . __('and', 'gcm-crm-api') . '</div>';
        $html .= '<input type="text" name="' . $fieldName . '[second][]" class="gcm-form-field-text gcm-form-opening-hours-second" value="" />';
        $html .= '</div>';

        return $html . self::POST_MARKUP . $this->renderDescription() . $this->renderErrorContainer();
    }
}