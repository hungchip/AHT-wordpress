<?php

namespace Inc;

final class Init
{
    public static function get_services()
    {
        return [
            Pages\Admin::class,
            Base\Enqueue::class,
            Base\SettingsLinks::class,
            Base\BaseController::class,
            // Widgets\IntroService::class,
            // Widgets\LogoFooter::class,
            // Widgets\MainBanner::class,
            Custome\PostTypes\Medicine::class,
            Custome\Taxonomies\TypeMedicine::class,
        ];
    }

    public static function register_services()
    {
        foreach (self::get_services() as $class_) {
            $service = self::instantiate($class_); //tương tự
            // $service = new $class_();
            if (method_exists($service, 'register')) {
                $service->register(); 
            }
        }
    }

    private static function instantiate($class_)
    {
        return new $class_();
    }
}

// use Inc\Base\Activate;
// use Inc\Base\Deactivate;

// if (!class_exists('AHTDemoPlugin')) {
//     class AHTDemoPlugin
//     {
//         private $plugin;

//         public function __construct()
//         {
//             add_action('init', array($this, 'custom_post_type'));
//             $this->plugin = plugin_basename(__FILE__);
//         }

//         public function register()
//         {
//             // admin_enqueue_scripts is hook for admin UI
//             // wp_enqueue_scripts is hook for front UI
//             add_action('admin_enqueue_scripts', array($this, 'enqueue'));
//             add_action('admin_menu', array($this, 'add_admin_pages'));
//             //setting link plugin
//             // echo $this->
//         }

//         public function setting_link($links)
//         {
//             //page menu slug in add_admin_pages()
//             $test = '<a href="admin.php?page=aht_demo" target="blank">Setting</a>';
//             $test1 = '<a href="https://www.google.com/" target="blank">Setting 1</a>';
//             array_push($links, $test);
//             array_push($links, $test1);
//             return $links;
//         }
//         public function add_admin_pages()
//         {
//             // -----------(page title,      menu_tittle,      capability,    menu_slug, 'call back', 'icon', position on mennu side)
//             add_menu_page('AHT Demo Plugin', 'demo hihi', 'manage_options', 'aht_demo', array($this, 'admin_index'), 'dashicons-store', 1);
//         }

//         public function admin_index()
//         {
//             require_once plugin_dir_path(__FILE__) . 'templates/admin.php';
//         }

//         public function actitive()
//         {
//             Activate::actitive();
//         }

//         public function deactitive()
//         {
//             Deactivate::deactitive();
//         }

//         public function custom_post_type()
//         {
//             // create a custom post type width sereral parameter
//             register_post_type('book', ['public' => true, 'label' => 'Post type của Hưng']);
//         }
//         // enqueue scripts
//         public function enqueue()
//         {
//             wp_enqueue_style('aht-main-style', plugins_url('/assets/css/style.css', __FILE__));
//             wp_enqueue_script('aht-main-script', plugins_url('/assets/js/main.js', __FILE__));
//         }
//     }
// }

// if (class_exists('AHTDemoPlugin')) {
//     $ahtDemoPlugin = new AHTDemoPlugin();
//     // call function enqueue scripts
//     $ahtDemoPlugin->register();
// }

// // call function actitive() in instance $ahtDemoPlugin when plugin is activited
// // require_once plugin_dir_path(__FILE__) . 'inc/aht-demo-plugin-activate.php';
// register_activation_hook(__FILE__, array($ahtDemoPlugin, 'actitive'));

// // require_once plugin_dir_path(__FILE__) . 'inc/aht-demo-plugin-deactivate.php';
// register_deactivation_hook(__FILE__, array($ahtDemoPlugin, 'deactitive'));

// // register_uninstall_hook(__FILE__, array($ahtDemoPlugin, 'uninstall'));
