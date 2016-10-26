<?php

require_once(plugin_dir_path(__FILE__) . 'GCM_CRM_Form.php');

class GCM_CRM_Page extends GCM_CRM_Form
{
    const PRE_MARKUP = '<div class="gcm-form-page">';
    const POST_MARKUP = '</div>';

    /**
     * @var GCM_CRM_FieldInterface[]
     */
    protected $fields;

    /**
     * @var string Additional HTML markup for the top of the page
     */
    protected $extraContentTop;

    /**
     * @var string Additional HTML markup for the bottom of the page
     */
    protected $extraContentBottom;

    /**
     * Generates the HTML markup for the page
     *
     * @return string The HTML markup of the page
     */
    public function render()
    {
        $html = self::PRE_MARKUP;

        if (!empty($this->extraContentTop)) {
            $html .= '<div class="gcm-form-extra-top">' . $this->extraContentTop . '</div>';
        }

        foreach ($this->fields as $field) {
            $html .= '<div class="gcm-form-field-wrapper">' . $field->render() . '</div>';
        }

        if (!empty($this->extraContentBottom)) {
            $html .= '<div style="clear: both;"></div><div class="gcm-form-extra-bottom">' . $this->extraContentBottom . '</div>';
        }

        return $html . self::POST_MARKUP;
    }

    /**
     * @param GCM_CRM_FieldInterface[] $fields
     */
    public function setFields(array $fields)
    {
        $this->fields = $fields;
    }

    /**
     * @return GCM_CRM_FieldInterface[]
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * Adds a field to the field list
     *
     * @param GCM_CRM_FieldInterface $field
     */
    public function addField(GCM_CRM_FieldInterface $field)
    {
        $this->fields[] = $field;
    }

    /**
     * @param string $extraContentBottom
     */
    public function setExtraContentBottom($extraContentBottom)
    {
        $this->extraContentBottom = $extraContentBottom;
    }

    /**
     * @return string
     */
    public function getExtraContentBottom()
    {
        return $this->extraContentBottom;
    }

    /**
     * @param string $extraContentTop
     */
    public function setExtraContentTop($extraContentTop)
    {
        $this->extraContentTop = $extraContentTop;
    }

    /**
     * @return string
     */
    public function getExtraContentTop()
    {
        return $this->extraContentTop;
    }
} 