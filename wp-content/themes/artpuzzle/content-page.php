<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<?php
	/**
	 * woocommerce_before_main_content hook
	 *
	 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
	 * @hooked woocommerce_breadcrumb - 20
	 */
	do_action( 'woocommerce_before_main_content' );
	$pageClass = ap_get_page_class(get_the_ID());
?>
<div class="row breadcrumb-art">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <?php woocommerce_breadcrumb(); ?>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h1 class="heading hidden-xs">
            <?php the_title(); ?>
        </h1>
        <h1 class="heading visible-xs mobile"><?php the_title(); ?></h1>
        <div class="social-buttons">
        	<div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
        </div>
    </div>
</div>
<article id="post-<?php the_ID(); ?>" <?php post_class('row '.$pageClass); ?>>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<?php the_content(); ?>
	</div>

</article><!-- #post-## -->

<?php
		/**
		 * woocommerce_after_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>
