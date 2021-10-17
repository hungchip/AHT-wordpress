<?php
/**
 * Plugin Name: .HC Plugin
 * Description: Plugin của Hưng
 * Plugin URI:
 * Author: Vũ Việt Hưng
 * Version: 1.0
 * Author URI: https://www.facebook.com/hung.chip.1069/
 * */

// function hc_plugin_load_widget(){
require_once plugin_dir_path(__FILE__) . '/classes/widget-intro-service.php';
require_once plugin_dir_path(__FILE__) . '/classes/widget-main-banner.php';
// }

// add_action( 'init', 'hc_plugin_load_widget' );

$wdIntroService = new HC_Widget_Intro_Service();
$wdMainBanner = new HC_Widget_Main_Banner();
