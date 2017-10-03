<?php
/**
 * Single Product Help
 *
 * @author      WooThemes
 * @package     WooCommerce/Templates
 * @version     2.3.2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;
?>
<p class="text-center">Hỗ trợ mua hàng <?php echo get_option('contact_phone'); ?> - Mã sản phẩm: <?php echo $product->get_sku(); ?></p>