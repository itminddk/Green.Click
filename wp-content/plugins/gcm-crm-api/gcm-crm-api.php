<?php

/**
 * Plugin Name: Green Click Media CRM API
 * Description: A plugin that acts as an interface for the CRM system
 * Version: 1.0
 * Text Domain: gcm-crm-api
 * Author: Bo Andersen
 * Author URI: http://codingexplained.com
 */

require_once(plugin_dir_path(__FILE__) . 'classes/GCM_CRM_API.php');

function init()
{
    load_plugin_textdomain('gcm-crm-api', false, basename(dirname(__FILE__)) . '/languages');
}

add_action('plugins_loaded', array('GCM_CRM_API', 'initialize'));
add_action('init', 'init');
