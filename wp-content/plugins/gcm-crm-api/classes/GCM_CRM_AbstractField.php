<?php

require_once(plugin_dir_path(__FILE__) . 'GCM_CRM_FieldInterface.php');

abstract class GCM_CRM_AbstractField implements GCM_CRM_FieldInterface
{
    const PRE_MARKUP = '<div class="gcm-form-field">';
    const POST_MARKUP = '</div>';

    /**
     * @var int
     */
    protected $id;

    /**
     * @var mixed An array of values or a single value (e.g. integer)
     */
    protected $values;

    /**
     * @var array
     */
    protected $valueOptions = array();

    /**
     * @var string
     */
    protected $label;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var bool
     */
    protected $isRequired;

    /**
     * Generates the HTML markup for the field's label
     *
     * @return string The label markup
     */
    protected function renderLabel()
    {
        $requiredMarkup = '';

        if ($this->isRequired === true) {
            $requiredMarkup = '<span class="gcm-form-field-required">*</span>';
        }

        return '<h4 class="gcm-form-field-label">' . $this->escape($this->label) . '&nbsp;' . $requiredMarkup . '</h4>';
    }

    /**
     * Generates the HTML markup for the field's description
     *
     * @return string The description markup
     */
    protected function renderDescription()
    {
        if (!empty($this->description)) {
            return '<div class="gcm-form-field-description">' . $this->description . '</div>'; // Not escaping on purpose
        } else {
            return '';
        }
    }

    /**
     * Generates the HTML markup for the field's error container
     *
     * @return string
     */
    protected function renderErrorContainer()
    {
        return '<div class="gcm-form-field-error" id="field_error_' . $this->id . '"><div class="gcm-form-field-error-text-wrapper"><span class="label label-danger">' . __('Oops', 'gcm-crm-api') . '!</span> <span class="gcm-form-field-validation-error"></span></div></div>';
    }

    /**
     * Generates the required attribute HTML markup for the field
     *
     * @return string The HTML attribute if the field is required. Otherwise an empty string
     */
    protected function renderRequiredAttribute()
    {
        return (($this->isRequired === true) ? 'required' : '');
    }

    /**
     * Gets the HTML name of the field
     *
     * @return string
     */
    protected function getFieldName()
    {
        return 'data[field][' . $this->escape($this->id) . ']';
    }

    /**
     * Helper method to escape a value for HTML characters
     *
     * @param string $value The value to escape
     *
     * @return string The escaped value that is safe to output
     */
    protected function escape($value)
    {
        return htmlentities($value, ENT_COMPAT | ENT_HTML5, 'UTF-8');
    }

    /**
     * @param array $valueOptions
     */
    public function setValueOptions(array $valueOptions)
    {
        $this->valueOptions = $valueOptions;
    }

    /**
     * @return array
     */
    public function getValueOptions()
    {
        return $this->valueOptions;
    }

    /**
     * @param mixed $values An array of values or a single value (e.g. integer)
     */
    public function setValues($values)
    {
        $this->values = $values;
    }

    /**
     * @return mixed An array of values or a single value
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param bool $isRequired
     */
    public function setIsRequired($isRequired)
    {
        $this->isRequired = (bool) $isRequired;
    }

    /**
     * @return bool
     */
    public function getIsRequired()
    {
        return $this->isRequired;
    }
} 