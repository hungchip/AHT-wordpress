<?php

// khởi tạo
// add_action('widgets_init', 'create_new_widget');

// function create_new_widget()
// {
//     register_widget('Hung_Widget');
// }
namespace Inc\Widgets;

use WP_Widget;

class IntroService extends WP_Widget
{
    //khởi tại widget
    public function __construct()
    {
        parent::__construct(
            'hung_widget',
            '.Widget for block Intro & Services',
            array('description' => 'Widget Intro & Services text')
        );

        add_action('widgets_init', function () {
            register_widget('IntroService');
        });
    }

    // form nhập liệu
    public function form($instance)
    {
        $defaults = array(
            'service_tite_1' => 'Free shipping',
            'service_tite_2' => 'Support customer',
            'service_tite_3' => 'Secure payments',
            'service_content_1' => 'All order over $300',
            'service_content_2' => 'Support 24/7',
            'service_content_3' => 'Support 24/7',
            'content' => 'It started with a simple idea: Create quality, wel-designed products that I wanted myself.',
        );
        $instance = wp_parse_args($instance, $defaults);
        $title1 = esc_attr($instance['service_tite_1']);
        $title2 = esc_attr($instance['service_tite_2']);
        $title3 = esc_attr($instance['service_tite_3']);
        $service_content_1 = esc_attr($instance['service_content_1']);
        $service_content_2 = esc_attr($instance['service_content_2']);
        $service_content_3 = esc_attr($instance['service_content_3']);
        $content = esc_attr($instance['content']);

        echo ('Tiêu đề 1: <input type="text" class="widefat" name="' . $this->get_field_name('service_tite_1') . '" value="' . $title1 . '"/>');
        echo ('Nội dung 1: <input type="text" class="widefat" name="' . $this->get_field_name('service_content_1') . '" value="' . $service_content_1 . '"/>');
        echo ('Tiêu đề 2: <input type="text" class="widefat" name="' . $this->get_field_name('service_tite_2') . '" value="' . $title2 . '"/>');
        echo ('Nội dung 2: <input type="text" class="widefat" name="' . $this->get_field_name('service_content_2') . '" value="' . $service_content_2 . '"/>');
        echo ('Tiêu đề 3: <input type="text" class="widefat" name="' . $this->get_field_name('service_tite_3') . '" value="' . $title3 . '"/>');
        echo ('Nội dung 3: <input type="text" class="widefat" name="' . $this->get_field_name('service_content_3') . '" value="' . $service_content_3 . '"/>');
        echo ('Nhập nội dung: <textarea class="widefat" name="' . $this->get_field_name('content') . '">' . $content . '</textarea>');
    }

    // lưu dữ liệu
    public function update($new_instance, $old_instance)
    {
        return $new_instance;
    }

    // hiển thị widget ra bên ngoài
    public function widget($args, $instance)
    {
        $title1 = apply_filters('widget_title', $instance['service_tite_1']);
        $title2 = apply_filters('widget_title', $instance['service_tite_2']);
        $title3 = apply_filters('widget_title', $instance['service_tite_3']);
        $service_content_1 = apply_filters('widget_title', $instance['service_content_1']);
        $service_content_2 = apply_filters('widget_title', $instance['service_content_2']);
        $service_content_3 = apply_filters('widget_title', $instance['service_content_3']);
        $content = apply_filters('widget_title', $instance['content']);

        echo
            "<div class=\"service\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-4\">
                        <div class=\"col-inner\">
                            <p class=\"title-service\">$title1</p>
                            <p class=\"title-info\">$service_content_1</p>
                        </div>
                    </div>
                    <div class=\"col-4\">
                        <div class=\"col-inner\">
                            <p class=\"title-service\">$title2</p>
                            <p class=\"title-info\"> $service_content_2 </p>
                        </div>
                    </div>
                    <div class=\"col-4\">
                        <div class=\"col-inner\">
                            <p class=\"title-service\">$title3</p>
                            <p class=\"title-info\">$service_content_3</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"intro\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-8\">
                        <div class=\"intro-text\">
                            <p>$content</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>";
    }
}
