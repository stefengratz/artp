<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * Override this template by copying it to yourtheme/woocommerce/content-single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php
	/**
	 * woocommerce_before_single_product hook
	 *
	 * @hooked wc_print_notices - 10
	 */
	 do_action( 'woocommerce_before_single_product' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
?>
<?php /*
<div itemscope itemtype="<?php echo woocommerce_get_product_schema(); ?>" id="product-<?php the_ID(); ?>" <?php post_class(); ?>>
*/ ?>

<div id="product-wrapper" class="row" itemscope itemtype="<?php echo woocommerce_get_product_schema(); ?>" id="product-<?php the_ID(); ?>">
    <?php if(!is_mobile_not_tablets()): ?>
	<div class="website">
        <div class="col-lg-5 col-md-5 col-sm-5">
            <div class="row">
                <?php woocommerce_show_product_images(); ?>
            </div>
        </div>
	
	<?php
		/**
		 * woocommerce_before_single_product_summary hook
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		//do_action( 'woocommerce_before_single_product_summary' );
	?>

	<div class="col-lg-7 col-md-7 col-sm-7 product-info">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">

                    <?php
                    /**
                     * woocommerce_single_product_summary hook
                     *
                     * @hooked woocommerce_template_single_title - 5
                     * @hooked woocommerce_template_single_rating - 10
                     * @hooked woocommerce_template_single_price - 10
                     * @hooked woocommerce_template_single_excerpt - 20
                     * @hooked woocommerce_template_single_add_to_cart - 30
                     * @hooked woocommerce_template_single_meta - 40
                     * @hooked woocommerce_template_single_sharing - 50
                     */
                    //do_action( 'woocommerce_single_product_summary' );
                    woocommerce_template_single_title();
                    woocommerce_template_single_rating();
                    woocommerce_template_single_excerpt();
                    woocommerce_template_single_subinfo();
                    woocommerce_template_single_add_to_cart();
                    woocommerce_template_single_share_ship();
                    ?>
                </div>
            </div>
	</div><!-- .summary -->
    <div class="col-lg-12 col-md-12 col-sm-12 product-spec">
        <?php
        woocommerce_template_single_spec();
        ?>
    </div>
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 facebook-comment">
                <?php
                    woocommerce_template_single_facebook_comment();
                ?>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 related-product">
                    <h3 class="heading"><i class="fa fa-puzzle-piece"></i> Sản phẩm liên quan</h3>
                    <?php woocommerce_output_related_products(); ?>
                </div>
            </div>
        </div>
	<?php
		/**
		 * woocommerce_after_single_product_summary hook
		 *
		 * @hooked woocommerce_output_product_data_tabs - 10
		 * @hooked woocommerce_upsell_display - 15
		 * @hooked woocommerce_output_related_products - 20
		 */
		//do_action( 'woocommerce_after_single_product_summary' );
	?>

	<meta itemprop="url" content="<?php the_permalink(); ?>" />
    </div>
<?php else: ?>
    <!-- Mobile display -->
    <div class="mobile">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <?php woocommerce_template_single_title(); ?>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <?php woocommerce_template_single_slider(); ?>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <?php woocommerce_template_single_excerpt(); ?>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sub-info">
            <div class="pull-left" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                <?php woocommerce_template_single_price(); ?>
                
            </div>
            <div class="pull-right facebook-share">
                <div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 rating">     
            <?php woocommerce_template_single_rating_mobile(); ?>                                                                               
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 help">  
            <?php woocommerce_template_single_help(); ?>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 product-spec">
            <?php woocommerce_template_single_spec_mobile(); ?>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 related-product">
            <h4 class="heading"><i class="fa fa-puzzle-piece"></i> Sản phẩm liên quan</h4>
            <div class="carousel slide" data-ride="carousel" id="slider-art-related-mobile">
                 <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <?php woocommerce_output_related_products(); ?>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#slider-art-related-mobile" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#slider-art-related-mobile" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 facebook-comment">  
            <?php woocommerce_template_single_facebook_comment(); ?>
        </div>
    </div>
<?php endif; ?>
</div><!-- #product-<?php the_ID(); ?> -->

<?php do_action( 'woocommerce_after_single_product' ); ?>
