<?php
/**
 * Single Product Price, including microdata for SEO
 *
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.9
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

?>

<?php if($product->is_on_sale()): ?>
    <span class="price old">
        <span class="price-value"><?php echo number_format($product->get_regular_price()); ?></span>
        <span class="price-symbol">đ</span>
    </span>
<?php endif; ?>
<span class="price">
    <span class="price-value"><?php echo number_format($product->get_price()); ?></span>
    <span class="price-symbol">đ</span>
</span>

<meta itemprop="price" content="<?php echo esc_attr( $product->get_price() ); ?>" />
<meta itemprop="priceCurrency" content="<?php echo esc_attr( get_woocommerce_currency() ); ?>" />
<link itemprop="availability" href="http://schema.org/<?php echo $product->is_in_stock() ? 'InStock' : 'OutOfStock'; ?>" />
