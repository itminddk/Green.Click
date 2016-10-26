<?php

require_once(plugin_dir_path(__FILE__) . '../GCM_CRM_AbstractField.php');

class GCM_CRM_Textarea extends GCM_CRM_AbstractField
{
    /**
     * Generates the output for a field
     *
     * @return string The HTML output for the field
     */
    public function render()
    {
        $html = $this->renderLabel() . self::PRE_MARKUP;
        $html .= '<textarea name="' . $this->getFieldName() . '" class="gcm-form-field-textarea" ' . $this->renderRequiredAttribute() . '>' . (isset($this->values) ? $this->values : '') . '</textarea>';

        return $html . self::POST_MARKUP . $this->renderDescription() . $this->renderErrorContainer();
    }
}