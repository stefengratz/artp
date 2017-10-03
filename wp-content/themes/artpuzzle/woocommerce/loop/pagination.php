<?php
/**
 * Pagination - Show numbered pagination for catalog pages.
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.2.2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $wp_query;

if ( $wp_query->max_num_pages <= 1 ) {
	return;
}
?>
<div class="pagination-wrapper row">
	<nav class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<ul class="pagination pull-right">
			<?php
				$pages = paginate_links( apply_filters( 'woocommerce_pagination_args', array(
					'base'         => esc_url_raw( str_replace( 999999999, '%#%', remove_query_arg( 'add-to-cart', get_pagenum_link( 999999999, false ) ) ) ),
					'format'       => '',
					'add_args'     => '',
					'current'      => max( 1, get_query_var( 'paged' ) ),
					'total'        => $wp_query->max_num_pages,
					'prev_text'    => '&laquo;',
					'next_text'    => '&raquo;',
					'type'         => 'array',
					'end_size'     => 5,
					'mid_size'     => 5
				) ) );		
			?>
			<?php foreach($pages as $page): ?>
				<li><?php echo $page; ?></li>
			<?php endforeach; ?>
		</ul>
	</nav>
</div>