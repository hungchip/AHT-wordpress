<?php
/*
Plugin Name: AHT demo plugin
Plugin URI: https://contactform7.com/
Description: Demo plugin
Author: Vũ Việt Hưng
Author URI: https://ideasilo.wordpress.com/
Text Domain: demo plugin
Domain Path: /languages/
Version: 1.0.0
 */

use Inc\Base\Activate;
use Inc\Base\Deactivate;

if (!defined('ABSPATH')) {
    die;
}

if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}

function actitive_aht_demo_plugin()
{
    Activate::actitive();
}

function deactitive_aht_demo_plugin()
{
    Deactivate::deactitive();
}

register_activation_hook(__FILE__, 'actitive_aht_demo_plugin');
register_deactivation_hook(__FILE__, 'deactitive_aht_demo_plugin');

if (class_exists('Inc\\Init')) {
    Inc\Init::register_services();
}
