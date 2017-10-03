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

global $product, $post;
?>

<h3 class="heading">
	<i class="fa fa-facebook-official"></i> Bình luận
</h3>
<?php get_template_part('widget_facebook_comment');   ?>

