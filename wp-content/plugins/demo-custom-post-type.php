<?php
/*
Plugin Name: .Ví dụ Custom Post Type
Author: Hưng Chíp
Description: Hướng dẫn tạo Custom Post Type
Author URI: 
 */

/**
 * Khai báo meta box
 **/

function tao_custom_post_type()
{
    $label = array(
        'name' => 'các loại thuốc',
        'singular_name' => 'Thuốc'
    );

    $args = array(
        'labels' => $label,
        'description' => 'Post type đăng thuốc',
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields'),
        'taxonomies' => array('loai-thuoc'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 1,
        'menu_icon' => '',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' =>false,
        'publicly_queryable' => true,
        'capability_type' => 'post'
    );

    register_post_type('slug-post-type', $args);
}

add_action('init', 'tao_custom_post_type');

// function tao_taxonomy()
// {
//     /* Biến $label chứa các tham số thiết lập tên hiển thị của Taxonomy
//      */
//     $labels = array(
//         "name" => "Các loại Thuốc",
//         "singular" => "Loại Thuốc",
//         "menu_name" => "Loại Thuốc",
//     );

//     /* Biến $args khai báo các tham số trong custom taxonomy cần tạo
//      */
//     $args = array(
//         "labels" => $labels,
//         "hierarchical" => true,
//         "public" => true,
//         "show_ui" => true,
//         "show_admin_column" => true,
//         "show_in_nav_menus" => true,
//         "show_tagcloud" => true,
//     );

//     /* Hàm register_taxonomy để khởi tạo taxonomy
//      */
//     register_taxonomy("loai-thuoc", "post", $args);

// }

// // Hook into the ‘init’ action
// add_action("init", "tao_taxonomy", 0);