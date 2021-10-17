<?php

namespace Inc\Base;

class Enqueue extends BaseController
{
    public function register()
    {
        // admin_enqueue_scripts is hook for admin UI
        // wp_enqueue_scripts is hook for front UI
        add_action('admin_enqueue_scripts', array($this, 'enqueue'));
        // add_action('admin_menu', array($this, 'add_admin_pages'));
        //setting link plugin
        // add_filter("plugin_action_links_$this->plugin", array($this, 'setting_link'));
        // echo $this->
    }
    public function enqueue()
    {
        wp_enqueue_style('aht-main-style', $this->plugin_url . 'assets/css/style.css');
        wp_enqueue_script('aht-main-script', $this->plugin_url . 'assets/js/main.js');
    }
}
