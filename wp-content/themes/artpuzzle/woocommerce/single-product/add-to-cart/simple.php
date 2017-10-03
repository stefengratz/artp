<?php
/**
 * Simple product add to cart
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

if ( ! $product->is_purchasable() ) {
	return;
}

?>

<?php
	// Availability
	$availability      = $product->get_availability();
?>

<?php do_action( 'woocommerce_before_add_to_cart_form' ); ?>
<div class="actions">
    <form class="cart" method="post" enctype='multipart/form-data'>
        <ul class="list-inline">
            <li>
                Trong kho: <?php echo intval($product->get_stock_quantity()); ?>
            </li>
            <li class=" has-warning">
                <input type="hidden" name="add-to-cart" value="<?php echo esc_attr( $product->id ); ?>" />
                <?php
                        if ( ! $product->is_sold_individually() ) {
                                woocommerce_quantity_input( array(
                                        'min_value'   => apply_filters( 'woocommerce_quantity_input_min', 1, $product ),
                                        'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->backorders_allowed() ? '' : $product->get_stock_quantity(), $product ),
                                        'input_value' => ( isset( $_POST['quantity'] ) ? wc_stock_amount( $_POST['quantity'] ) : 1 )
                                ) );
                        }
                ?>
                <input type="hidden" name="add-to-cart" value="<?php echo esc_attr( $product->id ); ?>" />
            </li>
            <li>
                <button <?php echo $product->is_in_stock() ? '' : 'disabled="disabled"'; ?> class="btn btn-art single_add_to_cart_button alt" type="submit"><i class="fa fa-cart-plus"></i> Thêm vào giỏ</button>
                <?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
            </li>
            <li>
                <button class="btn btn-art" data-toggle="tooltip" data-original-title="So sánh" data-button="compare-product"><i class="fa fa-retweet"></i></button>
            </li>
        </ul>
    </form>
</div>

<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>

