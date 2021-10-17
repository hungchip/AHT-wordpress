<?php
// Plugin Name: .Custom shortcode
// Author: Shortcode của Vũ Việt Hưng
add_shortcode('custom_banner', 'create_custom_banner');

// short code [custom_banner banner_background="https://localhost/AHT/hoc-wordpress/wordpress/wp-content/themes/twentytwenty/assets/images/banner_01.jpg" title_banner_top="Spring 2017" title_banner_bot = "It\'s your shine time" btn_discover = "Discover now" social_fb = "Facebook" social_tw = "Twitter" social_ins = "Instagram" social_yt = "Youtube"]
function create_custom_banner($ts)
{
    // mảng các tham số
    $args = array(
        'banner_background' => "https://localhost/AHT/hoc-wordpress/wordpress/wp-content/themes/twentytwenty/assets/images/banner_01.jpg",
        'title_banner_top' => 'Spring 2017',
        'title_banner_bot' => 'It\'s your shine time',
        'btn_discover' => 'Discover now',
        'social_fb' => 'Facebook',
        'social_tw' => 'Twitter',
        'social_ins' => 'Instagram',
        'social_yt' => 'Youtube',
        'link_fb' => '#',
        'link_tw' => '#',
        'link_ins' => '#',
        'link_yt' => '#',
    );
    // phân giải thành các biến có giá trị mặc định
    extract(shortcode_atts($args, $ts));

    $out .= "<div id=\"banner_top\" class=\"banner_top\"style=\"background-image: url( $banner_background )\">
            <div class=\"container-wide\">
                <div class=\"container\">
                    <div class=\"title-banner\">
                        <p class=\"title-banner-top\"> $title_banner_top </p>
                        <p class=\"title-banner-bot\"> $title_banner_bot </p>
                        <a href=\"\">
                            <span class=\"discover\"> $btn_discover </span>
                        </a>
                    </div>
                </div>
                <div class=\"social\">
                    <ul class=\"list-social\">
                        <li class=\"social-item\"><a href=\" $link_fb \"> $social_fb </a></li>
                        <li class=\"social-item\"><a href=\" $link_tw \"> $social_tw </a></li>
                        <li class=\"social-item\"><a href=\" $link_ins \"> $social_ins </a></li>
                        <li class=\"social-item\"><a href=\" $link_yt \"> $social_yt </a></li>
                    </ul>
                </div>
            </div>
        </div>";
    return $out;
}
// short code [custom-intro-service first_service_title="Free shipping" second_service_title="Support customer" third_service_title="Secure payments" first_service_content="All order over $300" second_service_content="Support 24/7" third_service_content="Support 24/7" text_intro="It started with a simple idea: Create quality, wel-designed products that I wanted myself." ]
function create_custom_intro_services($ts)
{
    $args = array(
        'first_service_title' => 'Free shipping',
        'second_service_title' => 'Support customer',
        'third_service_title' => 'Secure payments',
        'first_service_content' => 'All order over $300',
        'second_service_content' => 'Support 24/7',
        'third_service_content' => 'Support 24/7',
        'text_intro' => 'It started with a simple idea: Create quality, wel-designed products that I wanted myself.',
    );

    extract(shortcode_atts($args, $ts));

    $out = "<div id=\"intro-service\" class=\"intro-service\">
    <div class=\"service\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-4 \">
                    <div class=\"col-inner\">
                        <p class=\"title-service\">$first_service_title</p>
                        <p class=\"title-info\">$first_service_content</p>
                    </div>
                </div>
                <div class=\"col-4 \">
                    <div class=\"col-inner\">
                        <p class=\"title-service\"> $second_service_title </p>
                        <p class=\"title-info\"> $second_service_content </p>
                    </div>
                </div>
                <div class=\"col-4 \">
                    <div class=\"col-inner\">
                        <p class=\"title-service\"> $third_service_title </p>
                        <p class=\"title-info\"> $third_service_content </p>
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
                        <p> $text_intro </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    return $out;
}

add_shortcode('custom-intro-service', 'create_custom_intro_services');

// [custom-subbanner-top link_img_left="https://localhost/AHT/hoc-wordpress/wordpress/wp-content/themes/twentytwenty/assets/images/banner-1.jpg" title_left = "Gold leaf ring" content_left = "$179.00" link_img_middle="https://localhost/AHT/hoc-wordpress/wordpress/wp-content/themes/twentytwenty/assets/images/banner-2.jpg"saleup_title="sale up to" saleup_percent= "70%" saleup_content="select gold clearance" saleup_btn="shop now" link_saleup_btn="#" link_img_right="https://localhost/AHT/hoc-wordpress/wordpress/wp-content/themes/twentytwenty/assets/images/banner-3.jpg" "category="New collection" type="Leaf&nbsp; ring"]
function create_custom_subbanner_top($ts)
{
    $args = array(
        'link_img_left' => 'https://localhost/AHT/hoc-wordpress/wordpress/wp-content/themes/twentytwenty/assets/images/banner-1.jpg',
        'title_left' => 'Gold leaf ring',
        'content_left' => '$179.00',
        'link_img_middle' => 'https://localhost/AHT/hoc-wordpress/wordpress/wp-content/themes/twentytwenty/assets/images/banner-2.jpg',
        'saleup_title' => 'sale up to',
        'saleup_percent' => '70%',
        'saleup_content' => 'select gold clearance',
        'saleup_btn' => 'shop now',
        'link_saleup_btn' => '#',
        'link_img_right' => 'https://localhost/AHT/hoc-wordpress/wordpress/wp-content/themes/twentytwenty/assets/images/banner-3.jpg',
        'category' => 'New collection',
        'type' => 'Leaf&nbsp; ring',
    );

    extract(shortcode_atts($args, $ts));

    $out = "<div class=\"banner-top\">
    <div class=\"container-wide\">
        <div class=\"row\">
            <div class=\"col-3\">
                <div class=\"col-inner banner-left\">
                    <img src=\" $link_img_left \" alt=\"\">
                    <div class=\"col-inner-text\">
                        <div class=\"product-name\"> $title_left </div>
                        <div class=\"product-price\"> $content_left</div>
                    </div>
                </div>
            </div>
            <div class=\"col-6\">
                <div class=\"col-inner banner-middle\">
                    <img src=\"$link_img_middle\" alt=\"\">
                    <div class=\"saleup-box\">
                        <p class=\"saleup-title\"> $saleup_title </p>
                        <p class=\"saleup-percent\"> $saleup_percent </p>
                        <p class=\"saleup-content\"> $saleup_content </p>
                        <a href=\"$link_saleup_btn\">
                            <p class=\"saleup-shop-now\">$saleup_btn</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"col-3\">
                <div class=\"col-inner banner-right\">
                    <img src=\"$link_img_right\" alt=\"\">
                    <div class=\"col-inner-text\">
                        <div class=\"product-name category\">$category</div>
                        <div class=\"product-price type\">$type</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    return $out;
}

add_shortcode('custom-subbanner-top', 'create_custom_subbanner_top');

// [ custom-subbanner-bot link_img_left ="https://localhost/AHT/hoc-wordpress/wordpress/wp-content/themes/twentytwenty/assets/images/banner-4.jpg" link_img_middle="https://localhost/AHT/hoc-wordpress/wordpress/wp-content/themes/twentytwenty/assets/images/banner-4-14.jpg" title_middle ="Rose gold Necklaces" content_middle="$179.00" link_banner_right="https://localhost/AHT/hoc-wordpress/wordpress/wp-content/themes/twentytwenty/assets/images/banner-5.jpg" name_right="Princess ring rose gold" info_right="Rose gold plated over brass" note="* One size"]
function create_custom_subbanner_bot($ts)
{
    $args = array(
        'link_img_left' => 'https://localhost/AHT/hoc-wordpress/wordpress/wp-content/themes/twentytwenty/assets/images/banner-4.jpg',
        'link_img_middle' => 'https://localhost/AHT/hoc-wordpress/wordpress/wp-content/themes/twentytwenty/assets/images/banner-4-14.jpg',
        'title_middle' => 'Rose gold Necklaces',
        'content_middle' => '$179.00',
        'link_banner_right' => 'https://localhost/AHT/hoc-wordpress/wordpress/wp-content/themes/twentytwenty/assets/images/banner-5.jpg',
        'name_right' => 'Princess ring rose gold',
        'info_right' => 'Rose gold plated over brass',
        'note' => '* One size',
    );

    extract(shortcode_atts($args, $ts));

    $out = "<div class=\"banner-bottom\">
    <div class=\"row\">
        <div class=\"col-3 \">
            <div class=\"col-inner banner-left\">
                <img src=\"$link_img_left\" alt=\"\">
            </div>
        </div>
        <div class=\"col-3\">
            <div class=\"col-inner banner-middle\">
                <img src=\"$link_img_middle\" alt=\"\">
                <div class=\"col-inner-text\">
                    <div class=\"product-name\">$title_middle</div>
                    <div class=\"product-price\">$content_middle</div>
                </div>
            </div>
        </div>
        <div class=\"col-6\">
            <div class=\"col-inner banner-right\">
                <img src=\"$link_banner_right\" alt=\"\">
                <div class=\"col-inner-text\">
                    <p class=\"special-name\">$name_right</p>
                    <p class=\"special-info\">$info_right</p>
                    <p class=\"special-info\">$note</p>
                </div>
            </div>
        </div>
    </div>
</div>";
    return $out;
}

add_shortcode('custom-subbanner-bot', 'create_custom_subbanner_bot');

function create_custom_brand($ts)
{
    $args = array(
        'img_brand_1'=>'https://localhost/AHT/hoc-wordpress/wordpress/wp-content/themes/twentytwenty/assets/images/brand-rolex.jpg',
        'img_brand_2'=>'https://localhost/AHT/hoc-wordpress/wordpress/wp-content/themes/twentytwenty/assets/images/brand-elle.jpg',
        'img_brand_3'=>'https://localhost/AHT/hoc-wordpress/wordpress/wp-content/themes/twentytwenty/assets/images/brand-3.jpg',
        'img_brand_4'=>'https://localhost/AHT/hoc-wordpress/wordpress/wp-content/themes/twentytwenty/assets/images/brand-triton.jpg',
        'img_brand_5'=>'https://localhost/AHT/hoc-wordpress/wordpress/wp-content/themes/twentytwenty/assets/images/brand-rolex.jpg',
        'img_brand_6'=>'https://localhost/AHT/hoc-wordpress/wordpress/wp-content/themes/twentytwenty/assets/images/brand-pandora.jpg',
        // 'link_brand_1' => '#',
        // 'link_brand_2' => '#',
        // 'link_brand_3' => '#',
        // 'link_brand_4' => '#',
        // 'link_brand_5' => '#',
        // 'link_brand_6' => '#',

    );

    extract(shortcode_atts($args, $ts));

    $out = "<div id=\"brand\" class=\"brand\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-2\">
                <div class=\"col-inner\">
                    <img src=\" $img_brand_1 \" alt=\"\">
                </div>
            </div>
            <div class=\"col-2\">
                <div class=\"col-inner\">
                   <img src=\"$img_brand_2\" alt=\"\">
                </div>
            </div>
            <div class=\"col-2\">
                <div class=\"col-inner\">
                    <img src=\"$img_brand_3\" alt=\"\">
                </div>
            </div>
            <div class=\"col-2\">
                <div class=\"col-inner\">
                   <img src=\"$img_brand_4\" alt=\"\">
                </div>
            </div>
            <div class=\"col-2\">
                <div class=\"col-inner\">
                    <img src=\"$img_brand_5\" alt=\"\">
                </div>
            </div>
            <div class=\"col-2\">
                <div class=\"col-inner\">
                    <img src=\"$img_brand_6\" alt=\"\">
                </div>
            </div>
        </div>
    </div>
</div>";

    return $out;
}

add_shortcode('custom_brand', 'create_custom_brand');

// blog

function create_custom_blog($ts)
{
    $out = "<div class=\"col-4\">
    <div class=\"col-inner\">
        <img src=\"images/blog3.jpg\" alt=\"\">
        <div class=\"blog-content\">
            <div class=\"blog-date\">
                <span class=\"blog-moth\">JULY</span> <span class=\"blog-date\">14TH</span>, <span class=\"blog-year\">2016</span>
            </div>
            <div class=\"blog-info\">
                <p>Wait, there's a human on the other end?</p>
            </div>
            <div class=\"blog-interactive\">
                <div class=\"blog-view\">
                    <span class=\"blog-icon-view\"><i class=\"fas fa-eye\"></i></span> <span class=\"view\">941</span> Views
                </div>
                <div class=\"blog-like\">
                    <span class=\"blog-icon-like\"><i class=\"fas fa-share-alt\"></i></span> <span class=\"like\">27</span> Like
                </div>

            </div>
        </div>
    </div>
</div>";
    return $out;
}

add_shortcode('custom_blog', 'create_custom_blog');
