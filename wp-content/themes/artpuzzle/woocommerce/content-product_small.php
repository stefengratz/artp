<?php
/**
 * The template for displaying product content within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product.php
 *
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.0
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

global $product, $woocommerce_loop;

// Store loop count we're currently on
if (empty($woocommerce_loop['loop'])) {
    $woocommerce_loop['loop'] = 0;
}

// Store column count for displaying the grid
if (empty($woocommerce_loop['columns'])) {
    $woocommerce_loop['columns'] = apply_filters('loop_shop_columns', 4);
}

// Ensure visibility
if (!$product || !$product->is_visible()) {
    return;
}

// Increase loop count
$woocommerce_loop['loop'] ++;

// Extra post classes
$classes = array();
if (0 == ( $woocommerce_loop['loop'] - 1 ) % $woocommerce_loop['columns'] || 1 == $woocommerce_loop['columns']) {
    $classes[] = 'first';
}
if (0 == $woocommerce_loop['loop'] % $woocommerce_loop['columns']) {
    $classes[] = 'last';
}
?>


<div class="col-lg-4 col-md-6 col-sm-6 product-block product-small">
    <div class="product">
        <a href="<?php the_permalink(); ?>" class="image-block">
            <?php the_post_thumbnail(apply_filters( 'single_product_large_thumbnail_size', 'shop_thumbnail' ), array('class' => 'hidden-xs')); ?>
            <?php the_post_thumbnail(apply_filters( 'single_product_large_thumbnail_size', 'shop_thumbnail' ), array('class' => 'visible-xs small-image')); ?>
        </a>
        <?php echo ap_get_product_addon_html($product); ?>
        <div class="sub-content">
            <div class="subinfo">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
                        <div class="icon">
                            <?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
                        <div class="icon">
                            <a href="#" class="compare" data-button="compare-product">
                                <i class="fa fa-retweet" data-toggle="tooltip" title="So sánh"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
                        <div class="icon">
                            <a href="<?php the_permalink(); ?>" class="view">
                                <i class="fa fa-arrow-circle-right" data-toggle="tooltip" title="Xem chi tiết"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="difficulty text-center">
                <?php echo ap_get_rating_star_html(get_post_meta(get_the_ID(), 'difficulty', true)); ?>
            </div>
            <div class="code text-center">
                <span>Mã: <?php echo $product->get_sku(); ?></span>
            </div>
        </div>
        <div class="sub-content-mobile visible-xs">
            <div class="difficulty text-center">
                <span class="difficult-icon">
                    <i class="fa fa-dashboard"></i>
                </span>
                <?php echo ap_get_rating_star_html(get_post_meta(get_the_ID(), 'difficulty', true), array('class' => 'star-icon')); ?>
            </div>
            <div class="code text-center">
                <span class="icon-code"><i class="fa fa-puzzle-piece"></i></span>
                <span class="text"><?php echo $product->get_sku(); ?></span>
            </div>
        </div>
    </div>
    <div class="product-info text-center">
        <h4 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <p class="price"><?php echo $product->get_price_html(); ?></p>
    </div>
</div>