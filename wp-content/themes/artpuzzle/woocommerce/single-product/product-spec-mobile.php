<?php
/**
 * Single product short description
 *
 * @author      WooThemes
 * @package     WooCommerce/Templates
 * @version     1.6.4
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

global $product,$post;
?>

<div class="panel-group" id="product-spec-panel-group" role="tablist" aria-multiselectable="true">
    <div class="panel panel-art">
        <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title clearfix">
                <a class="collapsed pull-left" role="button" data-toggle="collapse" data-parent="#product-spec-panel-group" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Giới Thiệu
                </a>
                <a class="pull-right" role="button" data-toggle="collapse" data-parent="#product-spec-panel-group" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <i class="fa fa-caret-down"></i>
                </a>
            </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
    <div class="panel panel-art">
        <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title clearfix">
                <a class="pull-left collapsed" role="button" data-toggle="collapse" data-parent="#product-spec-panel-group" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Thông Tin
                </a>
                <a class="pull-right" role="button" data-toggle="collapse" data-parent="#product-spec-panel-group" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa fa-caret-down"></i>
                </a>
            </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
                <?php woocommerce_template_single_table_spec(); ?>
            </div>
        </div>
    </div>
    <div class="panel panel-art">
        <div class="panel-heading" role="tab" id="headingThree">
            <h4 class="panel-title clearfix">
                <a class="pull-left collapsed" role="button" data-toggle="collapse" data-parent="#product-spec-panel-group" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Thanh toán & Giao hàng
                </a>
                <a class="pull-right" role="button" data-toggle="collapse" data-parent="#product-spec-panel-group" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                    <i class="fa fa-caret-down"></i>
                </a>
            </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseThree">
            <div class="panel-body">
                <?php woocommerce_template_single_help_payment_ship(); ?>
            </div>
        </div>
    </div>
    <div class="panel panel-art">
        <div class="panel-heading" role="tab" id="headingFour">
            <h4 class="panel-title clearfix">
                <a class="pull-left collapsed" role="button" data-toggle="collapse" data-parent="#product-spec-panel-group" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Hướng dẫn sử dụng
                </a>
                <a class="pull-right" role="button" data-toggle="collapse" data-parent="#product-spec-panel-group" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                    <i class="fa fa-caret-down"></i>
                </a>
            </h4>
        </div>
        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseFour">
            <div class="panel-body">
                <?php woocommerce_template_single_help_use(); ?>
            </div>
        </div>
    </div>
</div>