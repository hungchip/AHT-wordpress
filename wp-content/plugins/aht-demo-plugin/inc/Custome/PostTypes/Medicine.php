<?php

namespace Inc\Custome\PostTypes;

class Medicine
{
    public function register()
    {
        add_action('init', array($this, 'addMedicine'));
    }

    public function addMedicine()
    {
        // các thông tin sẽ hiển thị trên trang admin
        $label = array(
            'name' => 'Medicines',
            'singular_name' => 'Medicine',
        );
        // các thông tin của post type
        $args = array(
            'labels' => $label,
            'description' => 'Post type for medicine',
            'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields'),
            'taxonomies' => array('medicine-type'),
            'hierarchical' => false,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_admin_bar' => true,
            'menu_position' => 1,
            'menu_icon' => 'dashicons-plus-alt',
            'can_export' => true,
            'has_archive' => true,
            'exclude_from_search' => false,
            'publicly_queryable' => true,
            'capability_type' => 'post',
        );
        //truyền slug và $args
        register_post_type('medicine', $args); //tạo post type là medicine và các thông tin của post type đó qua $args
    }
}
