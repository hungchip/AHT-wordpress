<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content" role="main">
	<!-- main banner  -->
    <?php dynamic_sidebar('custom-banner-widget');
		?>
    <!-- intro & services   -->
    <div id="intro-service" class="intro-service" >
        <?php dynamic_sidebar('custom-intro-service');?>
    </div>

	<!-- //sub banner  -->
	<div id="banner" class="banner">
		<?php dynamic_sidebar('custom-subbanner')?>
	</div>
	<!-- Featured items  -->

	<div id="feature-item" class="feature-item">
        <div class="container">
                <!-- title  -->
            <div class="title-box">
                    <h1 class="title-box-content"> Featured items</h1>
                    <p class="view-more"><a href="">View more <span class="icon-next"><i class="fas fa-angle-right"></i></span></a> </p>
            </div>
                <!-- end title  -->
            <div class="row">
                    <!-- list item  -->

			    <?php //dynamic_sidebar('custom-feature-items')?>
                <?php
                    $tax_query[] = array(
                        'taxonomy' => 'product_visibility',
                        'field'    => 'name',
                        'terms'    => 'featured',
                        'operator' => 'IN',
                    );
                ?>
                
                <?php $args = array( 'post_type' => 'product','posts_per_page' => 8,'ignore_sticky_posts' => 1, 'tax_query' => $tax_query); ?>
                <?php $getposts = new WP_query( $args);?>
                <?php global $wp_query; $wp_query->in_the_loop = true; 
                    
                ?>
                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                <?php global $product; ?>
                    <!-- --- -->
                    <div class="col-3">
                        <div class="col-inner">
                            <div class="item-img">
                                <div class="slider-item-product">
                                    <div class="hello">
                                        <a href="<?php the_permalink(); ?>"><?php echo woocommerce_get_product_thumbnail(); ?></a>
                                    </div>
                                    <?php
                                        $args2 = array('post_parent'    => get_the_ID(),
                                            'numberposts' => 4, 
                                            'order'          =>  'ASC',
                                            'post_type'      => 'attachment',
                                            'post_mime_type' => 'image'
                                            );              
                                        $images = get_children( $args2 );
                                        
                                        if ($images) {
                                            foreach ($images as $image) {
                                                ?>
                                                <div class="hello">
                                                    <a href="<?php the_permalink(); ?>">
                                                    <?php
                                                        echo wp_get_attachment_image($image->ID, 'full');
                                                    ?>
                                                    </a>
                                                </div>
                                                <?php 
                                               
                                            }
                                        }
                                    ?>
                                    
                                    
                                </div>
                                <div class="box-action">
                                    <div class="box-action-left">
                                        <a href="<?php bloginfo('url'); ?>?add-to-cart=<?php the_ID(); ?>"><span>Add to cart</span></a>
                                    </div>
                                    <div class="box-action-right">
                                        <a href=""><span><i class="far fa-heart"></i></span></a>
                                        <a href=""><span><i class="fas fa-signal"></i></span></a>
                                        <a href=""> <span><i class="fas fa-search"></i></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item-text">
                                <div class="item-name">
                                    <?php the_title();?>
                                </div>
                                <div class="item-price">
                                    <?php echo $product->get_price_html(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
	
    <!-- blog  -->
        <div class="blog-title">
            <h2>Blog update</h2>
        </div>
        <div id="blog" class="blog">
            <div class="container">

                <div class="row">
                
                 <!-- Get post News Query -->
                <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=3&post_type=post'); ?>
                <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                    <div class="col-4">
                        <div class="col-inner">
                            <div class="blog-img">
                                <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post, 'full', array( 'class' =>'thumnail') ); ?></a>
                            </div>
                            
                            <!-- <img src="images/blog3.jpg" alt=""> -->    
                            <div class="blog-content">
                                <div class="blog-date">
                                    <!-- <span class="blog-moth">JULY</span> <span class="blog-date">14TH</span>, <span class="blog-year">2016</span> -->
                                    <?php echo get_the_date('M d, Y');?>
                                </div>
                                <div class="blog-info">
                                    <p><?php the_title(); ?></p>
                                </div>
                                <div class="blog-interactive">
                                    <div class="blog-view">
                                        <span class="blog-icon-view"><i class="fas fa-eye"></i></span> <span class="view"><?= gt_get_post_view(); ?></span> Views
                                    </div>
                                    <div class="blog-like">
                                        <span class="blog-icon-like"><i class="fas fa-share-alt"></i></span> <span class="like">27</span> Like
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; wp_reset_postdata(); ?>
                <!-- Get post News Query -->   
                
                </div>
                <div class="go-to-blog">
                    <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">
                        <div class="box-blog">
                            <span class="go-to-blog-content">Go to blog</span>
                            <div class="bg"></div>
                        </div>
                    </a>

                </div>
            </div>
        </div>
        <!-- end blog  -->
        	<!-- brand  -->
	<?php	dynamic_sidebar('custom-brand')?>

</main><!-- #site-content -->

<?php
get_footer();
