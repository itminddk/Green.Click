<?php

require_once(plugin_dir_path(__FILE__) . 'GCM_CRM_Proxy.php');
require_once(plugin_dir_path(__FILE__) . 'GCM_CRM_Form.php');
require_once(plugin_dir_path(__FILE__) . 'GCM_CRM_Page.php');
require_once(plugin_dir_path(__FILE__) . 'field_adapters/GCM_CRM_Select.php');
require_once(plugin_dir_path(__FILE__) . 'field_adapters/GCM_CRM_Email.php');
require_once(plugin_dir_path(__FILE__) . 'field_adapters/GCM_CRM_Text.php');
require_once(plugin_dir_path(__FILE__) . 'field_adapters/GCM_CRM_Textarea.php');
require_once(plugin_dir_path(__FILE__) . 'field_adapters/GCM_CRM_Radio.php');
require_once(plugin_dir_path(__FILE__) . 'field_adapters/GCM_CRM_Checkbox.php');
require_once(plugin_dir_path(__FILE__) . 'field_adapters/GCM_CRM_Hidden.php');
require_once(plugin_dir_path(__FILE__) . 'field_adapters/special/GCM_CRM_AdGroupsLanding.php');
require_once(plugin_dir_path(__FILE__) . 'field_adapters/special/GCM_CRM_SegmentCategory.php');
require_once(plugin_dir_path(__FILE__) . 'field_adapters/special/GCM_CRM_OpeningHours.php');
require_once(plugin_dir_path(__FILE__) . 'field_adapters/special/GCM_CRM_Address.php');

class GCM_CRM_API
{
    const DEFAULT_REDIRECT_PATH = '/';

    /**
     * @var GCM_CRM_Proxy
     */
    protected static $proxy;

    /**
     * @var array
     */
    protected static $cache = array();

    /**
     * @var string The address to redirect to on successful submissions
     */
    protected static $redirect;

    public function initialize()
    {
        self::$proxy = new GCM_CRM_Proxy();
        self::$cache['form_submission'] = array();

        add_shortcode('gcm-render-form', array('GCM_CRM_API', 'renderForm'));
        add_shortcode('gcm-render-controls', array('GCM_CRM_API', 'renderControls'));
        add_shortcode('gcm-confirm-form', array('GCM_CRM_API', 'confirmForm'));
        add_shortcode('gcm-display-form', array('GCM_CRM_API', 'displayForm'));

        // Proxy AJAX
        add_action("wp_ajax_proxy", array('GCM_CRM_API', "proxy"));
        add_action("wp_ajax_nopriv_proxy", array('GCM_CRM_API', "proxy"));
    }

    public function proxy()
    {
        $data = $_REQUEST;

        if (!isset($data['method'])) {
            $error = array(
                array(
                    'error' => 2000,
                    'message' => __('Invalid request method', 'gcm-crm-api'),
                ),
            );

            $error = self::getErrorArray($error);
            die(json_encode($error));
        }

        if (isset($data['lead']) && $lead = $data['lead']) {
            if ($_REQUEST['checksum'] != crc32($lead)) {
                $error = array(
                    array(
                        'error' => 2003,
                        'message' => __('Invalid checksum', 'gcm-crm-api'),
                    ),
                );

                $error = self::getErrorArray($error);
                die(json_encode($error));
            }

            $data['data']['lead_id'] = $data['lead'];
        }

        if (isset($data['partner']) && $partner = $data['partner']) {
            if ($_REQUEST['pchecksum'] != crc32($partner)) {
                $error = array(
                    array(
                        'error' => 2003,
                        'message' => __('Invalid checksum', 'gcm-crm-api'),
                    ),
                );

                $error = self::getErrorArray($error);
                die(json_encode($error));
            }

            $data['data']['partner_id'] = $data['partner'];
        }

        $proxyMethod = strtolower($_SERVER['REQUEST_METHOD']);
        $data['data']['ip_address'] = $_SERVER['REMOTE_ADDR'];

        if (method_exists(self::$proxy, $proxyMethod)) {
            $response = self::$proxy->$proxyMethod('/ContractForms/' . $data['method'] . '/' . $data['type'], $data);
          
            json_decode(self::removeByteOrderMark($response), true);

            // Validate JSON format
            if (json_last_error() === JSON_ERROR_NONE) {
                die($response); // The JSON decoding is only to validate that the response is in JSON. The JSON is therefore returned as is
            } else {
                $error = array(
                    array(
                        'error' => 2001,
                        'message' => __('Invalid response format', 'gcm-crm-api'),
                        'debug' => ((isset($data['debug']) && intval($data['debug']) === 2) ? $response : null),
                    ),
                );

                $error = self::getErrorArray($error);
                die(json_encode($error));
            }
        } else {
            $error = array(
                array(
                    'error' => 2002,
                    'message' => __('The requested method does not exist', 'gcm-crm-api'),
                ),
            );

            $error = self::getErrorArray($error);
            die(json_encode($error));
        }
    }

    // TODO: document!
    public function renderForm($arguments)
    {
        if (!isset($arguments['type'])) {
            throw new Exception(__('No form type specified', 'gcm-crm-api'));
        }

        // Set redirect address
        if (isset($arguments['redirect'])) {
            // If the address is relative, then make it fully qualified
            if (strpos($arguments['redirect'], $_SERVER['SERVER_NAME']) === false) {
                $arguments['redirect'] = get_site_url(null, $arguments['redirect']);
            }

            self::$redirect = $arguments['redirect'];
        }

        // Add styles
        wp_register_style('default-style', WP_PLUGIN_URL . '/gcm-crm-api/css/gcm-form-submission.css');
        wp_enqueue_style('default-style');

        // Add scripts
        wp_register_script('bxslider', WP_PLUGIN_URL . '/gcm-crm-api/js/bxslider/jquery.bxslider.min.js');
        wp_register_script('form-submission', WP_PLUGIN_URL . '/gcm-crm-api/js/form-submission.js', array('jquery'));
        wp_localize_script('form-submission', 'injected', array(
            'ajaxUrl' => admin_url('admin-ajax.php'),
            'previousSlideButtonText' => '<button>' . __('Go back', 'gcm-crm-api') . '</button>',
            'nextSlideButtonText' => '<button>' . __('Continue to next step', 'gcm-crm-api') . ' &rarr;</button>',
            'type' => $arguments['type'],
            'redirect' => (isset(self::$redirect) ? self::$redirect : self::DEFAULT_REDIRECT_PATH),
            'unableToSendRequest' => __('An error occurred on the server, or a connection could not be established', 'gcm-crm-api'),
            'invalidResponseFormat' => __('The response format from the server is invalid', 'gcm-crm-api'),
            'lead' => $_GET['lead'],
            'partner' => $_GET['partner'],
            'checksum' => $_GET['checksum'],
            'partnerChecksum' => $_GET['pchecksum'],
            'debug' => (isset($_GET['debug']) ? intval($_GET['debug']) : null),
        ));

        wp_enqueue_script('jquery');
        wp_enqueue_script('bxslider');
        wp_enqueue_script('form-submission');

        if (!isset(self::$cache[$arguments['type']]['form_submission']['object'])) {
            $parameters = array();

            if (isset($_GET['contract']) && !empty($_GET['contract'])) {
                $parameters['contract'] = intval($_GET['contract']);
            } elseif (isset($_GET['lead']) && !empty($_GET['lead'])) {
                $parameters['lead'] = intval($_GET['lead']);
            } elseif (isset($_GET['client']) && !empty($_GET['client'])) {
                $parameters['client'] = intval($_GET['client']);
            }
          
            $result = self::$proxy->get('/ContractForms/get/' . $arguments['type'], $parameters);
          if (isset($_GET['debug']) && intval($_GET['debug']) === 1) {
                die('<pre>' . print_r($result, true) . '</pre>');
            }

            if ($result !== false) {
                $result = json_decode(self::removeByteOrderMark($result), true);

                // Validate JSON format
                if (json_last_error() === JSON_ERROR_NONE) {
                    self::$cache[$arguments['type']]['form_submission']['source'] = $result;
                } else {
                    throw new Exception(__('Invalid response format', 'gcm-crm-api'));
                }
            } else {
                throw new Exception(__('Could not contact remote server', 'gcm-crm-api'));
            }
        }

        if (!isset(self::$cache[$arguments['type']]['form_submission']['source'])) {
            throw new Exception(__('The form could not be rendered', 'gcm-crm-api'));
        }

        $form = self::buildForm(self::$cache[$arguments['type']]['form_submission']['source']);
        self::$cache[$arguments['type']]['form_submission']['object'];

        // Render specific page
        if (isset($arguments['page'])) {
            // Add additional markup to the page (if specified)
            $extraPathTop = self::getExtraFileFullPath($arguments['top']);
            $extraPathBottom = self::getExtraFileFullPath($arguments['bottom']);

            if (isset($arguments['top']) && file_exists($extraPathTop)) {
                $page = $form->getPage($arguments['page']);

                if ($page instanceof GCM_CRM_Page) {
                    $page->setExtraContentTop(file_get_contents($extraPathTop));
                }
            }

            if (isset($arguments['bottom']) && file_exists($extraPathBottom)) {
                $page = $form->getPage($arguments['page']);

                if ($page instanceof GCM_CRM_Page) {
                    $page->setExtraContentBottom(file_get_contents($extraPathBottom));
                }
            }

            return $form->renderPage($arguments['page']);
        } else {
            return $form->render(); // Render entire form (i.e. all pages)
        }
    }

    /**
     * Gets the HTML markup for form controls
     *
     * @param array $arguments
     * @return string
     */
    public function renderControls($arguments)
    {
        return GCM_CRM_Form::getControlsMarkup();
    }

    public function confirmForm()
    {
        if (!isset($_GET['id'], $_GET['code'])) {
            throw new Exception(__('Invalid parameters provided', 'gcm-crm-api'));
        }

        // Verify that the request was not made by a crawler (spider)
        $crawlers = array('google', 'yahoo', 'slurp', 'baidu', 'bing', 'msnbot', 'yahooseeker', 'yandex');
        $userAgent = (isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : null);

        if ($userAgent != null) {
            array_walk($crawlers, function($crawler) use ($userAgent) {
                if (strpos(strtolower($userAgent), $crawler) !== false) {
                    throw new Exception(__('Access for this page is denied for crawlers', 'gcm-crm-api'));
                }
            });
        }
        // server is running on clouldflare now. Check if their IP is set and if yes, send it instead of the fake IP; TODO cloudflare
        if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
            $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        }
        $response = self::$proxy->get('/ContractForms/confirm/' . $_GET['id'] . '/' . $_GET['code'] . '/' . $_SERVER['REMOTE_ADDR']);
        $result = json_decode(self::removeByteOrderMark($response), true);

        // Validate JSON format
        if (json_last_error() === JSON_ERROR_NONE) {
            if (isset($result['success'])) {
                if ($result['success'] == true) {
                    echo __('Thank you! Your order has been confirmed.', 'gcm-crm-api');
                } else {
                    throw new Exception(__('The order could not be confirmed', 'gcm-crm-api'));
                }
            } else {
                // This shouldn't happen, but give the user feedback just in case
                throw new Exception(__('The order could not be confirmed', 'gcm-crm-api'));
            }
        } else {
            throw new Exception(__('Invalid response format', 'gcm-crm-api'));
        }
    }

    public function displayForm()
    {
        if (!isset($_GET['id'], $_GET['token'])) {
            throw new Exception(__('Invalid parameters provided', 'gcm-crm-api'));
        }

        // Verify that the request was not made by a crawler (spider)
        $crawlers = array('google', 'yahoo', 'slurp', 'baidu', 'bing', 'msnbot', 'yahooseeker', 'yandex');
        $userAgent = (isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : null);

        if ($userAgent != null) {
            array_walk($crawlers, function($crawler) use ($userAgent) {
                if (strpos(strtolower($userAgent), $crawler) !== false) {
                    throw new Exception(__('Access for this page is denied for crawlers', 'gcm-crm-api'));
                }
            });
        }

        $response = self::$proxy->get('/FormSubmission/fetch/' . $_GET['id'] . '/' . $_GET['token']);
        $result = json_decode(self::removeByteOrderMark($response), true);

        // Validate JSON format
        if (json_last_error() === JSON_ERROR_NONE) {
            if (isset($result['error'])) {
                $message = '';

                switch ($result['error']['code']) {
                    case 1000: $message = __('The form submission could not be found', 'gcm-crm-api'); break;
                    case 1001: $message = __('This form submission cannot be displayed', 'gcm-crm-api'); break;
                    default: $message = __('An unknown error occurred', 'gcm-crm-api'); break;
                }

                throw new Exception($message);
            } else {
                return serialize($result);
            }
        } else {
            throw new Exception(__('Invalid response format', 'gcm-crm-api'));
        }
    }

    /**
     * Builds the form object such that it is ready to be used for form rendering
     *
     * @param array $fields The form data fetched from the CRM system
     *
     * @return GCM_CRM_Form A populated form object
     */
    protected function buildForm(array $fields)
    {
        /** @var GCM_CRM_FieldInterface $object */
        $object = null;

        /** @var array $field */
        $field = null;

        $fieldCount = count($fields);
        $form = new GCM_CRM_Form();
        $page = new GCM_CRM_Page();
        $previousPage = 1;
        $currentPage = 1;

        for ($i = 0; $i < $fieldCount; $i++) {
            $field = $fields[$i];
            $currentPage = $field['ContractForm']['page'];

            switch (strtolower($field['FormFieldType']['name'])) {
                case 'text': $object = new GCM_CRM_Text(); break;
                case 'email': $object = new GCM_CRM_Email(); break;
                case 'textarea': $object = new GCM_CRM_Textarea(); break;
                case 'hidden': $object = new GCM_CRM_Hidden(); break;

                case 'select':
                    $object = new GCM_CRM_Select();
                    $object->setValueOptions($field['FormOption']);
                    break;

                case 'radio':
                    $object = new GCM_CRM_Radio();
                    $object->setValueOptions($field['FormOption']);
                    break;

                case 'checkbox':
                    $object = new GCM_CRM_Checkbox();
                    $object->setValueOptions($field['FormOption']);
                    break;

                case 'special_ads_landing':
                    $object = new GCM_CRM_AdGroupsLanding();
                    break;

                case 'special_segment_or_category':
                    $object = new GCM_CRM_SegmentCategory();
                    break;

                case 'special_opening_hours':
                    $object = new GCM_CRM_OpeningHours();
                    break;

                case 'special_address':
                    $object = new GCM_CRM_Address();
                    break;

                default: break;
            }

            // Change page
            if ($currentPage != $previousPage) {
                $form->addPage($page);
                $page = new GCM_CRM_Page();
            }

            if ($object instanceof GCM_CRM_FieldInterface) {
                $object->setId(intval($field['ContractForm']['id']));
                $object->setLabel($field['ContractForm']['display_name']);
                $object->setDescription($field['ContractForm']['description']);
                $object->setIsRequired((bool) $field['ContractForm']['is_required']);

                if (isset($field['ContractForm']['default_value'])) {
                    $object->setValues(trim($field['ContractForm']['default_value']));
                }

                $page->addField($object);
            }

            // Last field; add the last page
            if ($i == ($fieldCount - 1)) {
                $form->addPage($page);
            }

            $object = null;
            $previousPage = $currentPage;
        }

        return $form;
    }

    /**
     * Gets the full path for an "extra" resource file with the specified file name
     *
     * @param string $fileName
     * @return string
     */
    protected function getExtraFileFullPath($fileName)
    {
        return plugin_dir_path(__DIR__) . 'resources/extra/' . $fileName;
    }

    /**
     * Gets an array of errors that is ready to be encoded as JSON
     *
     * @param array $errors An array of arrays, with each array containing a 'code' key and a 'message' key
     * @return array
     */
    protected function getErrorArray(array $errors)
    {
        $error = array(
            'success' => 0,
            'errors' => $errors,
        );

        return $error;
    }

    /**
     * Checks whether or not a string contains a Byte Order Mark (BOM)
     *
     * @param string $content
     * @return bool
     */
    protected function hasByteOrderMark($content)
    {
        return (substr($content, 0, 3) == pack('CCC', 0xef, 0xbb, 0xbf));
    }

    /**
     * Removes the Byte Order Mark (BOM) from a string
     *
     * @param string $content
     * @return string The content where the BOM is removed
     */
    protected function removeByteOrderMark($content)
    {
        if (self::hasByteOrderMark($content)) {
            return substr($content, 3);
        } else {
            return $content;
        }
    }
}