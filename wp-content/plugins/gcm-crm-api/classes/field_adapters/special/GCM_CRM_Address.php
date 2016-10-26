<?php

require_once(plugin_dir_path(__FILE__) . '../../GCM_CRM_AbstractField.php');

class GCM_CRM_Address extends GCM_CRM_AbstractField
{
    /**
     * Generates the output for a field
     *
     * @return string The HTML output for the field
     */
    public function render()
    {
        wp_register_style('address', WP_PLUGIN_URL . '/gcm-crm-api/css/field_adapters/address.css');
        wp_enqueue_style('address');

        $html = $this->renderLabel() . self::PRE_MARKUP;
        $fieldName = $this->getFieldName();
        $html .= '<input type="text" name="' . $fieldName . '[address]" class="gcm-form-field-text address" placeholder="' . __('Address', 'gcm-crm-api') . '" style="margin-bottom: 10px;" value="" ' . $this->renderRequiredAttribute() . ' />';
        $html .= '<input type="text" name="' . $fieldName . '[postal]" class="gcm-form-field-text postal" placeholder="' . __('Postal', 'gcm-crm-api') . '" style="margin-bottom: 10px;" value="" ' . $this->renderRequiredAttribute() . ' />';
        $html .= '<input type="text" name="' . $fieldName . '[city]" class="gcm-form-field-text city" placeholder="' . __('City', 'gcm-crm-api') . '" value="" ' . $this->renderRequiredAttribute() . ' />';

        return $html . self::POST_MARKUP . $this->renderDescription() . $this->renderErrorContainer();
    }
}