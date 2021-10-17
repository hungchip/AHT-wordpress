<?php

// khởi tạo
// add_action('widgets_init', 'create_new_widget');

// function create_new_widget()
// {
//     register_widget('HC_Widget_Main_Banner');
// }

class HC_Widget_Main_Banner extends WP_Widget
{
    //khởi tại widget
    public function __construct()
    {
        parent::__construct(
            'hc_wg-main-banner',
            '.Widget for Main Banner',
            array('description' => 'Widget Main Banner')
        );

        add_action('widgets_init', function() {
            register_widget('HC_Widget_Main_Banner');
        });
    }

    // form nhập liệu 
    public function form($instance)
    {
        $defaults = array(
            'link_bg' => 'https://localhost/AHT/hoc-wordpress/wordpress/wp-content/themes/twentytwenty/assets/images/banner_01.jpg',
            'title_top' => 'Spring 2017',
            'title_bot' => 'It\'s your shine time',
            'banner_btn' => 'discover now',
            'link_btn' => '#',
            'social_item_1' => 'Facebook',
            'link_social_1' => '#',
            'social_item_2' => 'Twitter',
            'link_social_2' => '#',
            'social_item_3' => 'Instagram',
            'link_social_3' => '#',
            'social_item_4' => 'Youtube',
            'link_social_4' => '#',
        );
        
        $instance = wp_parse_args($instance, $defaults);

        $link_bg = esc_attr($instance['link_bg']);
        $title_top = esc_attr($instance['title_top']);
        $title_bot = esc_attr($instance['title_bot']);
        $banner_btn = esc_attr($instance['banner_btn']);
        $link_btn = esc_attr($instance['link_btn']);
        $social_item_1 = esc_attr($instance['social_item_1']);
        $link_social_1 = esc_attr($instance['link_social_1']);
        $social_item_2 = esc_attr($instance['social_item_2']);
        $link_social_2 = esc_attr($instance['link_social_2']);
        $social_item_3 = esc_attr($instance['social_item_3']);
        $link_social_3 = esc_attr($instance['link_social_3']);
        $social_item_4 = esc_attr($instance['social_item_4']);
        $link_social_4 = esc_attr($instance['link_social_4']);

        echo('Link ảnh nền: <input type="text" class="widefat" name="'.$this->get_field_name('link_bg').'" value="'.$link_bg.'"/>');
        echo('Tiêu đề trên: <input type="text" class="widefat" name="'.$this->get_field_name('title_top').'" value="'.$title_top.'"/>');
        echo('Tiêu đề dưới: <input type="text" class="widefat" name="'.$this->get_field_name('title_bot').'" value="'.$title_bot.'"/>');
        echo('Nút bấm banner: <input type="text" class="widefat" name="'.$this->get_field_name('banner_btn').'" value="'.$banner_btn.'"/>');
        echo('Link nút bấm banner: <input type="text" class="widefat" name="'.$this->get_field_name('link_btn').'" value="'.$link_btn.'"/>');
        echo('Tên liên kết 1: <input type="text" class="widefat" name="'.$this->get_field_name('social_item_1').'" value="'.$social_item_1.'"/>');
        echo('Link liên kết 1: <input type="text" class="widefat" name="'.$this->get_field_name('link_social_1').'" value="'.$link_social_1.'"/>');
        echo('Tên liên kết 2: <input type="text" class="widefat" name="'.$this->get_field_name('social_item_2').'" value="'.$social_item_2.'"/>');
        echo('Link liên kết 2: <input type="text" class="widefat" name="'.$this->get_field_name('link_social_2').'" value="'.$link_social_2.'"/>');
        echo('Tên liên kết 3: <input type="text" class="widefat" name="'.$this->get_field_name('social_item_3').'" value="'.$social_item_3.'"/>');
        echo('Link liên kết 3: <input type="text" class="widefat" name="'.$this->get_field_name('link_social_3').'" value="'.$link_social_3.'"/>');
        echo('Tên liên kết 4: <input type="text" class="widefat" name="'.$this->get_field_name('social_item_4').'" value="'.$social_item_4.'"/>');
        echo('Link liên kết 4: <input type="text" class="widefat" name="'.$this->get_field_name('link_social_4').'" value="'.$link_social_4.'"/>');
    }

    // lưu dữ liệu
    public function update($new_instance, $old_instance)
    {
        return $new_instance;
    }

    // hiển thị widget ra bên ngoài
    public function widget($args, $instance)
    {
        $link_bg = apply_filters('widget_title', $instance['link_bg']);
        $title_top = apply_filters('widget_title', $instance['title_top']);
        $title_bot = apply_filters('widget_title', $instance['title_bot']);
        $banner_btn = apply_filters('widget_title', $instance['banner_btn']);
        $link_btn = apply_filters('widget_title', $instance['link_btn']);
        $social_item_1 = apply_filters('widget_title', $instance['social_item_1']);
        $link_social_1 = apply_filters('widget_title', $instance['link_social_1']);
        $social_item_2 = apply_filters('widget_title', $instance['social_item_2']);
        $link_social_2 = apply_filters('widget_title', $instance['link_social_2']);
        $social_item_3 = apply_filters('widget_title', $instance['social_item_3']);
        $link_social_3 = apply_filters('widget_title', $instance['link_social_3']);
        $social_item_4 = apply_filters('widget_title', $instance['social_item_4']);
        $link_social_4 = apply_filters('widget_title', $instance['link_social_4']);
        
        echo
        "<div id=\"banner_top\" class=\"banner_top\" style=\"background-image: url('$link_bg')\">
        <div class=\"container-wide\">
            <div class=\"container\">
                <div class=\"title-banner\">
                    <p class=\"title-banner-top\"> $title_top </p>
                    <p class=\"title-banner-bot\"> $title_bot </p>
                    <a href=\"$link_btn\">
                        <span class=\"discover\"> $banner_btn </span>
                    </a>
                </div>
            </div>
            <div class=\"social\">
                <ul class=\"list-social\">
                    <li class=\"social-item\"><a href=\"$link_social_1\"> $social_item_1 </a></li>
                    <li class=\"social-item\"><a href=\"$link_social_2\"> $social_item_2 </a></li>
                    <li class=\"social-item\"><a href=\"$link_social_3\"> $social_item_3 </a></li>
                    <li class=\"social-item\"><a href=\"$link_social_4\"> $social_item_4 </a></li>
                </ul>
            </div>
        </div>
    </div>";
    }
}
