<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes();?>>

	<head>

		<meta charset="<?php bloginfo('charset');?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head();?>

	</head>

	<body <?php body_class();?>>

		<?php
wp_body_open();
?>

        <header id="header" class="header">
            <div class="header-content">
                <div class="logo">
                    <?php echo get_custom_logo(); ?>
                </div>
                <div class="menu">
                    <?php
                        // wp_nav_menu(
                        //     array(
                        //         'theme_location' => 'cus-menu-header',
                        //         'container' => '',
                        //         'menu_id' => 'header-menu',
                        //         'menu_class' => 'cus-menu-header',
                        //     )
                        // );
                    ?>
                        <div class="navbar-menu-res">
                        <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'cus-menu-header',
                                    'container' => '',
                                    'menu_id' => 'header-menu',
                                    'menu_class' => 'cus-menu-header',
                                )
                            );
                        ?>
                        </div> 
                    <a class="shopping-cart" href="">
                        <ion-icon name="cart-outline"></ion-icon>
                        <span class="shopping-cart-amount"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                    </a>
                    <a class="menu-icon">
                        <ion-icon name="menu-outline"></ion-icon>
                    </a>
                </div>
            </div>

        </header>
        <!-- end header  -->
 
		<?php
// Output the menu modal.
get_template_part('template-parts/modal-menu');
