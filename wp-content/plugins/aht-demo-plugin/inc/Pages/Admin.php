<?php

namespace Inc\Pages;

use Inc\Api\Callbacks\AdminCallback;
use Inc\Api\SettingApi;
use Inc\Base\BaseController;

class Admin extends BaseController
{
    public $settings;
    public $pages;
    public $subpages;
    protected $callback;
    
    public function register()
    {
        // add_action('admin_menu', array($this, 'add_admin_pages'));
        $this->settings = new SettingApi();
        $this->callback = new AdminCallback();
        $this->setPages();
        $this->setSubpages();
        $this->settings->addPages($this->pages)->withSubPage('Dashboard')->addSubpages($this->subpages)->register();
    }

    public function setPages()
    {
        $this->pages = array(
            array(
                'page_title' => 'Xin chào', // tiêu đề của site
                'menu_title' => 'Hello', //tiêu đề hiển thị ở thanh menu bên trái trang admin
                'capability' => 'manage_options', // *bắt buộc* đề hiển thị được ở thanh menu bên trái
                'menu_slug' => 'aht_demo', //đặt duy nhất - hiển thị trên url
                'callback' => array($this->callback, 'adminDashboard'), //gọi hàm hiển thị nội dung
                'icon_url' => 'dashicons-store', // icon
                'position' => 1, //vị trí thứ tự hiển thị
            ),
        );
    }

    public function setSubpages()
    {
        $this->subpages = array( // sub menu sẽ ko cần icon và vị trí hiển thị
            array(
                'parent_slug' => 'aht_demo',
                'page_title' => 'Demo plugin AHT', //tiêu đề của site
                'menu_title' => 'Demo Plugin', //tiêu đề hiển thị thanh menu bên
                'capability' => 'manage_options', // hiển trị thanh menu bên trái trang admin
                'menu_slug' => 'demo_cpt',
                'callback' => function () {echo '<h1> Demo sub admin page</h1>';},
            ),
            array(
                'parent_slug' => 'aht_demo',
                'page_title' => 'Custom Taxonomies',
                'menu_title' => 'Taxonomies',
                'capability' => 'manage_options',
                'menu_slug' => 'demo_taxonomies',
                'callback' => function () {echo '<h1> Demo sub admin page</h1>';},
            ),
        );
    }
    // public function add_admin_pages()
    // {
    //     // -----------(page title,      menu_tittle,      capability,    menu_slug, 'call back', 'icon', position on mennu side)
    //     add_menu_page('AHT Demo Plugin', 'demo hihi', 'manage_options', 'aht_demo', array($this, 'admin_index'), 'dashicons-store', 1);
    // }

    // public function admin_index()
    // {
    //     require_once $this->plugin_path . 'templates/admin.php';
    // }
}
