<?php get_template_part('slider'); ?>

<div class="row product-group index-page" id="product-group">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="row">

            <?php
                        //Begin loop category and its products
            $categories = ap_get_categories();
            wp_reset_query();
            ?>
            <?php foreach ($categories as $category): ?>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h3 class="category-heading">
                        <a href="<?php echo get_term_link($category) ?>" class="title">
                            <i class="fa <?php echo ap_get_category_icon($category->slug) ?>"></i> <?php echo $category->name; ?> 
                        </a>
                        <a href="<?php echo get_term_link($category) ?>" class="more"><i class="fa fa-chevron-circle-right pull-right"></i></a>
                        <hr/>
                    </h3>                                        
                </div>

                <?php
                $argsProduct = array(
                    'post_type' => 'product',
                    'posts_per_page' => 3,
                    'post_status' => 'publish',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'product_cat',
                                        'field' => 'term_id', //This is optional, as it defaults to 'term_id'
                                        'terms' => $category->term_id,
                                        )
                        ),
                    );
                $loop = new WP_Query($argsProduct);
                ?>
                <?php if ($loop->have_posts()): ?>
                    <?php while ($loop->have_posts()): $loop->the_post(); ?>
                        <?php $product = new WC_Product(get_the_ID()); ?>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 product-block">
                            <div class="product">
                                <a href="<?php the_permalink(); ?>" class="image-block">
                                    <?php the_post_thumbnail('medium', array('class' => 'hidden-xs')); ?> 
                                    <?php the_post_thumbnail(apply_filters( 'single_product_large_thumbnail_size', 'shop_single' ), array('class' => 'visible-xs small-image')); ?>
                                </a>
                                <?php echo ap_get_product_addon_html($product); ?>
                                <div class="sub-content">
                                    <div class="subinfo">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
                                                <div class="icon">
                                                    <?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
                                                <div class="icon">
                                                    <a href="#" class="compare" data-button="compare-product">
                                                        <i class="fa fa-retweet" data-toggle="tooltip" title="So sánh"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
                                                <div class="icon">
                                                    <a href="<?php the_permalink(); ?>" class="view">
                                                        <i class="fa fa-arrow-circle-right" data-toggle="tooltip" title="Xem chi tiết"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="difficulty text-center">
                                        <?php echo ap_get_rating_star_html(get_post_meta(get_the_ID(), 'difficulty', true)); ?>
                                    </div>
                                    <div class="code text-center">
                                        <span>Mã: <?php echo $product->get_sku(); ?></span>
                                    </div>
                                </div>
                                <div class="sub-content-mobile visible-xs">
                                    <div class="difficulty text-center">
                                        <span class="difficult-icon">
                                            <i class="fa fa-dashboard"></i>
                                        </span>
                                        <?php echo ap_get_rating_star_html(get_post_meta(get_the_ID(), 'difficulty', true), array('class' => 'star-icon')); ?>
                                    </div>
                                    <div class="code text-center">
                                        <span class="icon-code"><i class="fa fa-puzzle-piece"></i></span>
                                        <span class="text"><?php echo $product->get_sku(); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info text-center">
                                <h4 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                <p class="price"><?php echo $product->get_price_html(); ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>