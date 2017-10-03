<?php get_header(); ?>

<div id="container">
    <div class="row">
        <?php if ( is_home() && is_front_page() ) : ?>
            <?php get_sidebar(); ?>
            <div id="content" class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <?php get_template_part('main'); ?>
            </div>
        <?php else: ?>
            <div id="content" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?php if ( have_posts() ) : ?>
                    <?php 
                    while ( have_posts() ) : the_post();
                        get_template_part( 'content', 'page' );
                    endwhile;
                     ?>
                <?php else: ?>
                    <?php get_template_part( 'content', 'none' ); ?>
                <?php endif; ?>
            </div>
        <?php endif; ?>    
    </div>
</div>

<?php get_footer(); ?>
