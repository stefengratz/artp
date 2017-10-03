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
<table class="table table-bordered">
    <tbody>
        <tr>
            <th>Mã SP</th>
            <td><?php echo $product->get_sku(); ?></td>
        </tr>
        <tr>
            <th>Tên tiếng anh</th>
            <td><?php echo get_post_meta(get_the_ID(), 'english_name', true); ?></td>
        </tr>
        <tr>
            <th>Giá</th>
            <td><?php echo number_format($product->get_regular_price()); ?> đ</td>
        </tr>
        <tr>
            <th>Chất liệu</th>
            <td><?php echo get_post_meta(get_the_ID(), 'product_type', true); ?></td>
        </tr>
        <tr>
            <th>Số miếng ghép</th>
            <td><?php echo get_post_meta(get_the_ID(), 'sheets', true); ?></td>
        </tr> 
        <tr>
            <th>Độ khó</th>
            <td>
                <?php echo ap_get_rating_star_html(get_post_meta(get_the_ID(), 'difficulty', true)); ?>
            </td>
        </tr>

        <tr>
            <th>Thời gian ráp</th>
            <td><?php echo get_post_meta(get_the_ID(), 'time_complete', true); ?></td>
        </tr>
        <tr>
            <th>Kích thước</th>
            <td>DxRxC: <?php print_r($product->get_dimensions()); ?></td>
        </tr>                                                    
    </tbody>
</table>