<form role="search" method="get" class="form-inline" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
	<div class="form-group has-warning">
		<input type="hidden" name="post_type" value="product" />
		<label for="idSearchKeyword"><?php echo _x( 'Search for:', 'label' ) ?></label>
		<input type="search" class="form-control" placeholder="Nhập từ khóa" value="<?php echo get_search_query(); ?>" name="s">
	</div>
	<input type="submit" class="btn btn-art" value="<?php echo esc_attr_x( 'Search', 'submit button', 'woocommerce' ); ?>" />
</form>