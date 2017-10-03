<?php
/**
 * Single Product Thumbnails
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post, $product, $woocommerce;

$attachment_ids = $product->get_gallery_attachment_ids();

if ( $attachment_ids ) {
	$loop 		= 0;
	$columns 	= apply_filters( 'woocommerce_product_thumbnails_columns', 3 );
	?>
		<?php
		foreach ( $attachment_ids as $attachment_id ) {
			$classes = !is_mobile_not_tablets() ? array( 'sub-image fancybox' ) : array();

			if ( $loop == 0 || $loop % $columns == 0 )
				$classes[] = 'first';

			if ( ( $loop + 1 ) % $columns == 0 )
				$classes[] = 'last';

			$image_link = wp_get_attachment_url( $attachment_id );

			if ( ! $image_link )
				continue;

			$image_title 	= esc_attr( get_the_title( $attachment_id ) );
			$image_caption 	= esc_attr( get_post_field( 'post_excerpt', $attachment_id ) );
			$image_size = !is_mobile_not_tablets() ? 'shop_thumbnail' : 'shop_single';
			$image       = wp_get_attachment_image( $attachment_id, apply_filters( 'single_product_small_thumbnail_size', $image_size ), 0, $attr = array(
				'title'	=> $image_title,
				'alt'	=> $image_title,
				'data-u' => 'image',
				) );

			$image_class = esc_attr( implode( ' ', $classes ) );

			if(!is_mobile_not_tablets()){
				echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', sprintf( '<div class="sub-image-wrapper"><a href="%s" class="%s" title="%s" rel="gallery-product" >%s</a></div>', $image_link, $image_class, $image_caption, $image ), $attachment_id, $post->ID, $image_class );
			}
			else{
				echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', sprintf( '<div data-p="112.50">%s</div>', $image ), $attachment_id, $post->ID, $image_class );
			}

			$loop++;
		}

	?>
	<?php
}
