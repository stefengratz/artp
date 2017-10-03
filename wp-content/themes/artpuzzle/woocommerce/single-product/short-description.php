<?php
/**
 * Single product short description
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post;

if ( ! $post->post_excerpt ) {
	return;
}

?>
<?php if(!is_mobile_not_tablets()): ?>
<div class="small-description hidden-sm">
    <?php echo wp_trim_words(get_the_excerpt(),25 ) ?> <a href="#product-description" data-scroll-top="true" class="more">Xem thêm</a>
</div>
<div class="small-description visible-sm">
    <?php echo wp_trim_words(get_the_excerpt(),18 ) ?> <a href="#" data-scroll-top="true" class="more">Xem thêm</a>
</div>
<?php else: ?>
	<?php the_excerpt(); ?>
<?php endif; ?>