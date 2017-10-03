<!-- end main container -->
</div>
<?php
global $woocommerce;
 ?>
<div class="modal fade add-to-cart-modal" id="add-to-cart-modal" tabindex="-1" role="dialog" aria-labelledby="add-to-cart-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="fa fa-shopping-cart"></i> Giỏ Hàng</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <p class="content">Sản phẩm đã được thêm vào Giỏ Hàng của bạn</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <button class="btn btn-art" data-dismiss="modal">Tiếp tục mua hàng</button>
                        <a class="btn btn-art cart-url" href="<?php echo $woocommerce->cart->get_cart_url(); ?>">Thanh Toán</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal error out of stock -->
<div class="modal fade add-to-cart-error-out-of-stock-modal" id="add-to-cart-error-out-of-stock-modal" tabindex="-1" role="dialog" aria-labelledby="add-to-cart-error-out-of-stock-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="fa fa-shopping-cart"></i> Giỏ Hàng</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <p class="content">Bạn không thể thêm sản phẩm này vào giỏ hàng. Số lượng sản phẩm này trong giỏ hàng đã vượt quá số lượng trong kho.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <button class="btn btn-art" data-dismiss="modal">Tiếp tục mua hàng</button>
                        <a class="btn btn-art cart-url" href="<?php echo $woocommerce->cart->get_cart_url(); ?>">Xem Giỏ Hàng</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal error out of stock -->
<div class="modal fade coming-soon" id="coming-soon" tabindex="-1" role="dialog" aria-labelledby="coming-soon">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="fa fa-info-circle"></i> Thông Báo</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <p class="content">Chức năng này hiện đang được phát triển.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <button class="btn btn-art" data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <div id="footer-top">
            <div class="row mobile visible-xs">
                <div class="col-xs-12 text-center">
                    <div class="content">
                        <address>
                            © <?php echo get_option('store_copyright_year'); ?> <a href="<?php echo get_site_url(); ?>" class="website"><strong>ArtPuzzle.vn</strong></a>
                            <br/>
                            <?php echo get_option('store_address'); ?>
                            <br/>
                            Hotline: <?php echo get_option('store_hotline'); ?>
                            <br/>
                            Email: <a class="mailto" href="mailto:<?php echo get_option('admin_email'); ?>"><?php echo get_option('admin_email'); ?></a>
                        </address>
                    </div>
                </div>
            </div>

            <div class="row website hidden-xs">
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                    <h3>Menu</h3>
                    <ul class="list-unstyled">
                        <li><a href="<?php echo get_site_url(); ?>">Trang Chủ</a></li>
                        <?php $brandList = get_brand_list(); ?>
                        <?php foreach($brandList as $index=>$brand): ?>
                            <li><a href="<?php echo get_term_link($brand); ?>"><?php echo $brand->name; ?></a></li>
                        <?php endforeach; ?>
                        <li><a href="<?php echo get_permalink( woocommerce_get_page_id('shop')); ?>">Mô Hình Kim Loại</a></li>
                        <li><a href="<?php echo get_permalink( woocommerce_get_page_id('shop')); ?>?orderby=date">Sản phẩm mới</a></li>
                        <li><a href="<?php echo get_permalink(58); ?>">Về ArtPuzzle</a></li>
                        <li><a href="<?php echo get_permalink(50); ?>">Liên Hệ</a></li>
                        <li><a href="#" data-button="compare-product">So Sánh</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                    <h3>Danh Mục</h3>
                    <ul class="list-unstyled">
                        <?php ap_sidebar(array('no-icon'=>true)); ?>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                    <h3>Trợ Giúp</h3>
                    <ul class="list-unstyled">
                        <li><a href="<?php echo get_site_url(); ?>/huong-dan-dat-hang/">Hướng dẫn đặt hàng</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/hinh-thuc-thanh-toan/">Hình thức thanh toán</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/chinh-sach-giao-hang/">Chính sách giao hàng</a></li>
                        <li class="hide"><a href="<?php echo get_site_url(); ?>/chinh-sach-bao-hanh/">Chính sách bảo hành</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/chinh-sach-doi-hang/">Chính sách đổi hàng</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/chinh-sach-bao-mat/">Chính sách bảo mật</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/mo-hinh-kim-loai-la-gi/">Mô lình kim loại là gì?</a></li>
                        <li class="hide"><a href="#">Trợ giúp</a></li>
                        <li class="hide"><a href="<?php echo get_site_url(); ?>/thanh-toan-giao-hang/">Thanh toán & Giao hàng</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/dung-cu-ho-tro/">Dụng cụ hỗ trợ</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/huong-dan-lap-ghep/">Hướng dẫn lắp ghép</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <h3>Mua Nhiều Nhất</h3>
                    <div class="row">
                        <ul class="list-unstyled col-sm-6 col-xs-12">
                            <?php
                            $argsFeatureProduct = array(
                                'post_type' => 'product',  
                                'meta_key' => '_featured',  
                                'meta_value' => 'yes',  
                                'posts_per_page' => 8  
                            );
                            $featuredProducts = new WP_Query($argsFeatureProduct);
                            if($featuredProducts->have_posts()):
                                while($featuredProducts->have_posts()):
                                    $featuredProducts->the_post();
                                    $featuredProduct = get_product($featuredProducts->post->ID);
                             ?>
                            <li><a href="<?php echo $featuredProduct->get_permalink(); ?>"><?php echo $featuredProduct->get_title(); ?></a></li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                            <?php wp_reset_query(); ?>
                        </ul>
                        <ul class="list-unstyled col-sm-6 hidden-xs">
                            <?php
                            $argsFeatureProduct = array(
                                'post_type' => 'product',  
                                'meta_key' => '_featured',  
                                'meta_value' => 'yes',  
                                'posts_per_page' => 8,
                                'offset' => 8  
                            );
                            $featuredProducts = new WP_Query($argsFeatureProduct);
                            if($featuredProducts->have_posts()):
                                while($featuredProducts->have_posts()):
                                    $featuredProducts->the_post();
                                    $featuredProduct = get_product($featuredProducts->post->ID);
                             ?>
                            <li><a href="<?php echo $featuredProduct->get_permalink(); ?>"><?php echo $featuredProduct->get_title(); ?></a></li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                            <?php wp_reset_query(); ?>
                        </ul>
                    </div> 
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <?php /*
                    <h3>Khuyến Mãi Mới Nhất</h3>
                    <div class="row">
                        <div class="container-fluid">
                            <form class="newsletter">
                                <div class="form-group has-warning">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                            <input type="text" class="form-control art" placeholder="Nhập email của bạn" name="email" />
                                        </div>

                                        <button type="submit" class="btn btn-art col-lg-3 col-md-3 col-sm-3 col-xs-3">Nhận</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    */ ?>
                    <div class="row address">
                        <div class="col-lg-12">
                            <address>
                                © <?php echo date('Y'); ?> <a href="/" class="website"><strong>ArtPuzzle.vn</strong></a>
                                <br/>
                                Chủ quản: ông Lê Hoàng Thanh
                                <br/>
                                MST cá nhân: 8340318098
                                <br/>
                                <?php echo get_option('store_address'); ?>
                                <br/>
                                <u title="phone">Hotline:</u> <?php echo get_option('store_hotline'); ?>
                                <br/>
                                Email: <a class="mailto" href="mailto:<?php echo get_option('admin_email'); ?>"><?php echo get_option('admin_email'); ?></a>
                            </address>
                        </div>
                    </div>
                    <div class="row social">
                        <div class="col-lg-12">
                            <a href="<?php echo ap_get_social_link('facebook'); ?>" class="link-social facebook"><i class="fa fa-facebook-official fa-3x"></i></a> 
                            <a href="<?php echo ap_get_social_link('youtube'); ?>" class="link-social youtube"><i class="fa fa-youtube-square fa-3x"></i></a>
                            <a href="<?php echo ap_get_social_link('twitter'); ?>" class="link-social twitter"><i class="fa fa-twitter-square fa-3x"></i></a>
                            <a href="<?php echo ap_get_social_link('pinterest'); ?>" class="link-social pinterest"><i class="fa fa-pinterest-square fa-3x"></i></a>
                        </div>
                    </div>
                    <div class="row online-gov">
                        <div class="col-lg-12">
                            <a target="_blank" href="http://www.online.gov.vn/HomePage/PersonalWebsiteDisplay.aspx?DocId=20934"><img src="<?php echo get_template_directory_uri(); ?>/img/s1_3.png"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="scroll-top">
    <i class="fa fa-arrow-up"></i>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<?php 
/*<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>*/
?>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>

<?php wp_footer(); ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.sidr.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jssor.slider.mini.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/app.js?t=20151023"></script>
</body>
</html>