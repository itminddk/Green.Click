<?php

class GCM_CRM_Form
{
    /**#@+
     * @access private
     * @var string
     */
    private $preMarkup = '<div class="b20m" id="gcm-form-wrapper">%s<form action="" method="post" id="gcm-form-form"><h3 id="gcm-form-pager"><span class="b40m" id="gcm-form-page-text">%s</span>&nbsp;<span id="gcm-form-page-numbers"></span></h3><div id="gcm-form-pages-wrapper">';
    private $postMarkup = '</div></form></div>';
    private $feedbackMarkup = '<div id="gcm-form-feedback"><div class="alert alert-danger" id="gcm-form-error">%s<ul></ul></div><div class="alert alert-warning" id="gcm-form-validation">%s</div></div>';
    private static $controlsMarkup = '<div id="gcm-form-controls"><div class="previous"></div><div class="next"></div><div id="gcm-form-submit"><input type="submit" name="gcm-form-submit-button" id="gcm-form-submit-button" value="%s" /></div></div><div class="b60m" style="clear: both;"></div>';
    /**#@-*/

    /**
     * @var GCM_CRM_Page[]
     */
    protected $pages;

    /**
     * Generates the HTML markup for the form
     *
     * @return string The HTML markup of the form
     */
    public function render()
    {
        $html = $this->getPreMarkup();

        foreach ($this->pages as $page) {
            $html .= $page->render();
        }

        return $html . $this->getPostMarkup() . $this->getControlsMarkup();
    }

    /**
     * Generates the HTML markup for a specific page
     *
     * @param int $page The page number for which to generate the output for
     * @return string The HTML markup for the page. Empty string if the page does not exist
     */
    public function renderPage($page)
    {
        $page = (int) $page;
        $pageIndex = ($page - 1);

        if (isset($this->pages[$pageIndex])) {
            $markup = '';
            $pageCount = count($this->pages);

            /***** Add pre- and post markup if necessary *****/
            // First page
            if ($page == 1) {
                $markup .= $this->getPreMarkup();
            }

            $markup .= $this->pages[$pageIndex]->render();

            // Last page
            if ($page == $pageCount) {
                $markup .= $this->getPostMarkup();
            }

            return $markup;
        } else {
            return '';
        }
    }

    /**
     * Gets the HTML markup for the form controls
     *
     * @return string
     */
    public function getControlsMarkup()
    {
        return sprintf(self::$controlsMarkup, __('Send order confirmation', 'gcm-crm-api'));
    }

    /**
     * Gets the HTML markup for beginning of the form
     *
     * @return string
     */
    public function getPreMarkup()
    {
        $validationText = '<strong>' . __('Oops', 'gcm-crm-api') . '!</strong>' . ' ' . __('Some fields could not be validated. Please review the validation errors and try again.', 'gcm-crm-api');
        $errorText = '<strong>' . __('Oops', 'gcm-crm-api') . '!</strong>' . ' ' . __('Errors occurred while submitting your request. Please contact the developers.', 'gcm-crm-api');
        $feedbackMarkup = sprintf($this->feedbackMarkup, $errorText, $validationText);

        return sprintf($this->preMarkup, $feedbackMarkup, __('Page', 'gcm-crm-api'));
    }

    /**
     * Gets the HTML markup for the end of the form
     *
     * @return string
     */
    public function getPostMarkup()
    {
        return $this->postMarkup;
    }

    /**
     * @param GCM_CRM_Page[] $pages
     */
    public function setPages($pages)
    {
        $this->pages = $pages;
    }

    /**
     * @return GCM_CRM_Page[]
     */
    public function getPages()
    {
        return $this->pages;
    }

    /**
     * @param GCM_CRM_Page $page
     */
    public function addPage(GCM_CRM_Page $page)
    {
        $this->pages[] = $page;
    }

    /**
     * Gets a specific page
     *
     * @param int $number The page number of the page to fetch
     * @return GCM_CRM_Page|null
     */
    public function getPage($number)
    {
        return (isset($this->pages[($number - 1)]) ? $this->pages[($number - 1)] : null);
    }
} 