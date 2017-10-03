<?php
$args = array(
    'post_type' => 'post',
    'category_name' => 'khuyen-mai'
);
$sliders = new WP_Query($args);
$total_post =  $sliders->post_count;
 ?>

<?php if($sliders->have_posts()): ?>
<div class="row hidden-xs slider-wrapper">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <?php 
        echo do_shortcode("[metaslider id=".get_option('slider_desktop')."]"); 
        ?>
    </div>
</div>
<?php wp_reset_query(); ?>
<?php endif; ?>