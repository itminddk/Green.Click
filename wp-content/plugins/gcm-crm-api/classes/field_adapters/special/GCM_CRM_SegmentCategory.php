<?php

require_once(plugin_dir_path(__FILE__) . '../../GCM_CRM_AbstractField.php');

class GCM_CRM_SegmentCategory extends GCM_CRM_AbstractField
{
    /**
     * Generates the output for a field
     *
     * @return string The HTML output for the field
     */
    public function render()
    {
        $html = $this->renderLabel() . self::PRE_MARKUP;
        $fieldName = $this->getFieldName();
        $html .= '<input type="text" name="' . $fieldName . '[]" class="gcm-form-field-text" style="margin-bottom: 10px;" value="" ' . $this->renderRequiredAttribute() . ' />';
        $html .= '<input type="text" name="' . $fieldName . '[]" class="gcm-form-field-text" style="margin-bottom: 10px;" value="" />';
        $html .= '<input type="text" name="' . $fieldName . '[]" class="gcm-form-field-text" value="" />';

        return $html . self::POST_MARKUP . $this->renderDescription() . $this->renderErrorContainer();
    }
}