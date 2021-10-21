<?php

// khởi tạo
// add_action('widgets_init', 'create_new_widget');

// function create_new_widget()
// {
//     register_widget('HC_Widget_Main_Banner');
// }
namespace Inc\Widgets;
use WP_Widget;

class LogoFooter extends WP_Widget
{
    //khởi tại widget
    public function __construct()
    {
        parent::__construct(
            'hc_wg-logo-footer',
            '.Widget for Logo Footer',
            array('description' => 'Widget Logo footer')
        );

        add_action('widgets_init', function () {
            register_widget('LogoFooter');
        });
    }

    // form nhập liệu
    public function form($instance)
    {
        $defaults = array(
            'link_logo' => 'https://localhost/AHT/hoc-wordpress/wordpress/wp-content/themes/twentytwenty/assets/images/banner_01.jpg',
        );

        $instance = wp_parse_args($instance, $defaults);

        $link_logo = esc_attr($instance['link_logo']);

        echo ('Link logo dưới: <input type="text" class="widefat" name="' . $this->get_field_name('link_logo') . '" value="' . $link_logo . '"/>');
    }

    // lưu dữ liệu
    public function update($new_instance, $old_instance)
    {
        return $new_instance;
    }

    // hiển thị widget ra bên ngoài
    public function widget($args, $instance)
    {
        $link_logo = apply_filters('widget_title', $instance['link_logo']);
        $home = get_home_url();
        echo
            "<a href=\" $home \"><img src=\" $link_logo \" alt=\"\"></a>";
    }
}
