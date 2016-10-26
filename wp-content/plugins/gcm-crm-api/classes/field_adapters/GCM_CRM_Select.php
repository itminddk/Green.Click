<?php

require_once(plugin_dir_path(__FILE__) . '../GCM_CRM_AbstractField.php');

class GCM_CRM_Select extends GCM_CRM_AbstractField
{
    /**
     * Generates the output for a field
     *
     * @return string The HTML output for the field
     */
    public function render()
    {
        $html = $this->renderLabel() . self::PRE_MARKUP;
        $html .= '<div class="gcm-form-select-wrapper"><div class="gcm-form-select-caret-wrapper"><div class="gcm-form-select-caret"></div></div><select name="' . $this->getFieldName() . '" class="gcm-form-field-select">';

        foreach ($this->getValueOptions() as $option) {
            $html .= '<option value="' . $this->escape($option['value']) . '" ' . ((isset($this->values) && $option['value'] == $this->values) ? 'selected' : '') . '>' . $this->escape($option['display_name']) . '</option>';
        }

        $html .= '</select></div>';

        return $html . self::POST_MARKUP . $this->renderDescription() . $this->renderErrorContainer();
    }
}