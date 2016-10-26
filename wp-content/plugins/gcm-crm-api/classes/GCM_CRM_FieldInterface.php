<?php

interface GCM_CRM_FieldInterface
{
    /**
     * Generates the output for a field
     *
     * @return string The HTML output for the field
     */
    public function render();

    /**
     * @param array $valueOptions
     */
    public function setValueOptions(array $valueOptions);

    /**
     * @return array
     */
    public function getValueOptions();

    /**
     * @param mixed $values An array of values or a single value (e.g. integer)
     */
    public function setValues($values);

    /**
     * @return mixed An array of values or a single value
     */
    public function getValues();

    /**
     * @param string $description
     */
    public function setDescription($description);

    /**
     * @return string
     */
    public function getDescription();

    /**
     * @param string $label
     */
    public function setLabel($label);

    /**
     * @return string
     */
    public function getLabel();

    /**
     * @param int $id
     */
    public function setId($id);

    /**
     * @return int
     */
    public function getId();

    /**
     * @param bool $isRequired
     */
    public function setIsRequired($isRequired);

    /**
     * @return bool
     */
    public function getIsRequired();
} 