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
<hr/>
<div class="sub-info clearfix">
    <div class="pull-left">
        <p>Tình trạng: <?php echo ap_get_product_single_status_html($product); ?></p>
        <p>Mã SP: <?php echo $product->get_sku(); ?></p>
        <p >Chất liệu: <?php echo get_post_meta(get_the_ID(), 'product_type', true); ?></p>
        <p class="type">Kích thước (DxRxC): <?php print_r($product->get_dimensions()); ?></p>
    </div>
    <div class="pull-right">
        <?php woocommerce_template_single_price(); ?>
    </div>
</div>
<hr/>
