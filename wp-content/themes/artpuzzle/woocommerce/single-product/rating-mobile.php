<?php
/**
 * Single Product Rating
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
<div class="wrapper">
    <div class="row">
        <div class="col-xs-6">
            <div class="pull-left">
                <i class="fa fa-clock-o main-icon"></i>
            </div>
            <div class="pull-left star">
                <p>
                    <span class="main-title">
                        <?php echo ap_get_rating_star_html(get_post_meta(get_the_ID(), 'difficulty', true)); ?>
                    </span>
                </p>
                <p><span class="sub-title">Độ khó</span></p>
            </div>
        </div>
        <div class="col-xs-6">
            <div class="pull-left">
                <i class="fa fa-truck main-icon"></i>
            </div>
            <div class="pull-left ship">
                <p>
                    <span class="main-title"><strong>Giao hàng</strong></span>
                </p>
                <p><span class="sub-title">toàn quốc</span></p>
            </div>
        </div>
    </div>
</div>  