<?php

require_once(plugin_dir_path(__FILE__) . '../GCM_CRM_AbstractField.php');

class GCM_CRM_Radio extends GCM_CRM_AbstractField {
    /**
     * Generates the output for a field
     *
     * @return string The HTML output for the field
     */
    public function render()
    {
        $fieldName = $this->getFieldName();
        $options = $this->getValueOptions();
        $optionsCount = count($options);
        $fieldId = null;
        $html = $this->renderLabel() . self::PRE_MARKUP;

        if ($optionsCount > 1) {
            $html .= '<input type="hidden" name="' . $fieldName . '" />';

            for ($i = 0; $i < $optionsCount; $i++) {
                $fieldId = $fieldName . '[' . $i . ']';
                $html .= '<div class="gcm-form-option-wrapper">';
                $html .= '<input type="radio" name="' . $fieldName . '" id="' . $fieldId . '" class="gcm-form-radio" value="' . $this->escape($options[$i]['value']) . '" /><label for="' . $fieldId . '" class="gcm-form-option-label">' . $this->escape($options[$i]['display_name']) . '</label>';
                $html .= '</div>';
            }
        } else {
            $html .= '<input type="hidden" name="' . $fieldName . '" value="1" />';
            $html .= '<div class="gcm-form-option-wrapper">';
            $html .= '<input type="radio" name="' . $fieldName . '" id="' . $fieldName . '" class="gcm-form-radio" value="' . $this->escape($options[0]['value']) . '" ' . (isset($this->values) ? 'checked' : '') . ' /><label for="' . $fieldName . '" class="gcm-form-option-label">' . $this->escape($options[0]['display_name']) . '</label>';
            $html .= '</div>';
        }

        return $html . self::POST_MARKUP . $this->renderDescription() . $this->renderErrorContainer();
    }
}