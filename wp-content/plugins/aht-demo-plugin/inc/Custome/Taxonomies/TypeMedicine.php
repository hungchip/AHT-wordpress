<?php

namespace Inc\Custome\Taxonomies;

class TypeMedicine
{
    public function register()
    {
        add_action("init", array($this, 'createTaxonomy'), 0);
    }

    public function createTaxonomy()
    {
        /* Biến $label chứa các tham số thiết lập tên hiển thị của Taxonomy
         */
        $labels = array(
            "name" => "Types of medicine",
            "singular" => "Type of medicine",
            "menu_name" => "Type of medicine",
        );

        /* Biến $args khai báo các tham số trong custom taxonomy cần tạo
         */
        $args = array(
            "labels" => $labels,
            "hierarchical" => true,
            "public" => true,
            "show_ui" => true,
            "show_admin_column" => true,
            "show_in_nav_menus" => true,
            "show_tagcloud" => true,
        );

        /* Hàm register_taxonomy để khởi tạo taxonomy
         */
        register_taxonomy("medicine-type", "post", $args);
    }
}
