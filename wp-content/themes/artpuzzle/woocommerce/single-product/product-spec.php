<?php
/**
 * Single product short description
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

global $product,$post;
?>


<ul class="nav nav-tabs" role="tablist" data-item="nav-tab">
    <li role="presentation" class="active">
        <a href="#product-description" aria-controls="product-description" role="tab" data-toggle="tab">Giới thiệu</a>
    </li>
    <li role="presentation">
        <a href="#product-property" aria-controls="product-property" role="tab" data-toggle="tab">Thông tin</a>
    </li>
    <li role="presentation">
        <a href="#product-payment-shipping" aria-controls="product-payment-shipping" role="tab" data-toggle="tab">Thanh toán & Giao hàng</a>
    </li>
    <li role="presentation">
        <a href="#product-guide" aria-controls="product-guide" role="tab" data-toggle="tab">Hướng dẫn sử dụng</a>
    </li>
</ul>
<div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="product-description">
        <?php the_content(); ?>
    </div>
    <div role="tabpanel" class="tab-pane product-property" id="product-property">
        <?php woocommerce_template_single_table_spec(); ?>
    </div>
    <div role="tabpanel" class="tab-pane" id="product-payment-shipping">
        <?php woocommerce_template_single_help_payment_ship(); ?>
    </div>
    <div role="tabpanel" class="tab-pane" id="product-guide">
        <?php woocommerce_template_single_help_use(); ?>
    </div>
</div>
