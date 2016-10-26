<?php

require_once(plugin_dir_path(__FILE__) . '../GCM_CRM_AbstractField.php');

class GCM_CRM_Email extends GCM_CRM_AbstractField
{
    /**
     * Generates the output for a field
     *
     * @return string The HTML output for the field
     */
    public function render()
    {
        $html = $this->renderLabel() . self::PRE_MARKUP;
        $html .= '<input type="email" name="' . $this->getFieldName() . '" class="gcm-form-field-email" value="' . (isset($this->values) ? $this->values : '') . '" ' . $this->renderRequiredAttribute() . ' />';

        return $html . self::POST_MARKUP . $this->renderDescription() . $this->renderErrorContainer();
    }
}