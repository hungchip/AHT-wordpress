<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<!-- footer  -->
<footer id="footer" class="footer">
            <div class="container">
                <div class="top-footer">
                    <div class="logo">
                        <?php echo get_custom_logo();?>
                    </div>
                    <?php wp_nav_menu( 
                        array( 
                            'theme_location' => 'cus-menu-footer', 
                            'container' => '', 
                            'menu_id' => 'footer-menu', 
                            'menu_class' => 'cus-menu-footer'
                        ) 
                    ); ?>
                    <div class="btn-subcribe">
                        <a href=""><span>Subscribe<span class="sub-icon"><i class="fas fa-envelope"></i></span></span>  </a>
                    </div>
                </div>
                <div class="bottom-footer">
                    <div class="bottom-footer-left">
                        <div class="contact">
                            <p class="address">14 L.E Goulburn St, Sydney 2000NSW &nbsp;- &nbsp;<span class="phone"> (088) 1990 6886</span> </p>
                        </div>
                        <div class="copyright">
                            <p>Copyright &copy; 2016 Bonfire</p>
                        </div>
                    </div>

                    <?php 
                    // header
                    // logo
                    
                    ?>
                    <div class="bottom-footer-right">
                        <ul class="list-social">
                            <li class="social-item fb">
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="social-item tw">
                                <a href="">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="social-item yt">
                                <a href="">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                            <li class="social-item sk">
                                <a href="">
                                    <i class="fab fa-skype"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer  -->

		<?php wp_footer(); ?>

	</body>
</html>
