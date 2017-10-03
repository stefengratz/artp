<?php
/**
 * Related Products
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product, $woocommerce_loop;

if ( empty( $product ) || ! $product->exists() ) {
	return;
}

$related = $product->get_related( $posts_per_page );

if ( sizeof( $related ) == 0 ) return;

$args = apply_filters( 'woocommerce_related_products_args', array(
	'post_type'            => 'product',
	'ignore_sticky_posts'  => 1,
	'no_found_rows'        => 1,
	'posts_per_page'       => $posts_per_page,
	'orderby'              => $orderby,
	'post__in'             => $related,
	'post__not_in'         => array( $product->id )
) );

$products = new WP_Query( $args );

$woocommerce_loop['columns'] = $columns;
$template_name = !is_mobile_not_tablets() ? 'product_small' : 'product_art';

$woocommerce_loop['related_type'] = "normal";
if(is_mobile_not_tablets()){
	$woocommerce_loop['related_type'] = "mobile";
}
?>

<?php 
if ( $products->have_posts() ) : ?>

	<?php if(!is_mobile_not_tablets()): ?>
		<div class="related products">

			<?php woocommerce_product_loop_start(); ?>

				<?php while ( $products->have_posts() ) : $products->the_post(); ?>

					<?php wc_get_template_part( 'content', $template_name ); ?>

				<?php endwhile; // end of the loop. ?>

			<?php woocommerce_product_loop_end(); ?>

		</div>
	<?php else: ?>
			<?php $index = 0; ?>
			<?php while ( $products->have_posts() ) : $products->the_post(); ?>
	            <div class="item <?php echo $index == 0 ? "active" : ""; ?>">
	            	<div class="product-group">
		                <?php wc_get_template_part( 'content', $template_name ); ?>
		                <div class="carousel-caption">
		                </div>
	                </div>
	            </div>
            <?php $index++; ?>
            <?php endwhile; // end of the loop. ?>
	<?php endif; ?>
<?php else: ?>
	<div class="alert alert-success alert-dismissible" role="alert">
	  	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	    Không có sản phẩm liên quan nào.
	</div>	
<?php endif;

wp_reset_postdata();
