<?php

require_once(plugin_dir_path(__FILE__) . '../GCM_CRM_AbstractField.php');

class GCM_CRM_Hidden extends GCM_CRM_AbstractField
{
    /**
     * Generates the output for a field
     *
     * @return string The HTML output for the field
     */
    public function render()
    {
        return '<input type="hidden" name="' . $this->getFieldName() . '" value="' . (isset($this->values) ? $this->values : '') . '" />';
    }
}