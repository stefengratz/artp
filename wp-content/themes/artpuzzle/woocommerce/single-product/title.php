<?php
/**
 * Single Product title
 *
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
global $product;
?>
<?php if(!is_mobile_not_tablets()): ?>
<h1 itemprop="name" class="title"><?php the_title(); ?></h1>
<?php else: ?>
<h1 itemprop="name" class="title"><?php the_title(); ?> <?php if($product->is_in_stock() == FALSE): ?><span class="label label-out-of-stock">Hết hàng</span><?php endif; ?></h1>
<?php endif; ?>