<?php
/**
 * Loop Add to Cart
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

echo apply_filters( 'woocommerce_loop_add_to_cart_link',
	sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" data-quantity="%s" class="add-to-cart %s product_type_%s">'
                . '<i class="fa fa-cart-plus" data-toggle="tooltip" title="%s"></i>'
                . '</a>',
		$product->is_purchasable() && $product->is_in_stock() ? esc_url( $product->add_to_cart_url() ) : 'javascript:void(0)',
		esc_attr( $product->id ),
		esc_attr( $product->get_sku() ),
		esc_attr( isset( $quantity ) ? $quantity : 1 ),
		$product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : 'out-of-stock',
		esc_attr( $product->product_type ),
		//esc_html( $product->add_to_cart_text() )
                $product->is_purchasable() && $product->is_in_stock() ? 'Mua Ngay' : 'Hết Hàng'
	),
$product );
