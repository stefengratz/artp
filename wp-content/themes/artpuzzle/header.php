<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?> prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <META NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php echo ap_meta_content(); ?>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
         <!-- Bootstrap -->
        <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,700,300|Source+Sans+Pro:400,900,300&amp;subset=latin,latin-ext,vietnamese">

        <link href="<?php echo get_template_directory_uri(); ?>/css/jquery.sidr.light.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/js/fancybox/source/jquery.fancybox.css?v=2.1.5" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" type="image/x-icon">
	<?php wp_head(); ?>

	<!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
	n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
	document,'script','//connect.facebook.net/en_US/fbevents.js');

	fbq('init', '1487922471516584');
	fbq('track', "PageView");</script>
	<noscript><img height="1" width="1" style="display:none"
	src="https://www.facebook.com/tr?id=1487922471516584&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Facebook Pixel Code -->
</head>

<body <?php body_class(); ?>>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-71359571-1', 'auto');
      ga('send', 'pageview');

    </script>
    <!-- Facebook js -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=1728897643991738";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <!-- This header is use only for xs devices -->
        <div id="mobile-header" class="visible-xs <?php is_front_page() ? 'index' : ''; ?>">
                <nav class="navbar navbar-default navbar-art">
                    
                        <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-3">
                                    <a id="sidebar" href="#sidr" class="navbar-toggle-art collapsed" >
                                        <i class="fa fa-bars fa-2x"></i>  
                                    </a>
                                </div>
                                <div class="col-xs-6 text-center">
                                    <a class="navbar-brand visible-xs brand-text" href="<?php echo get_site_url(); ?>">ArtPuzzle.vn</a>
                                </div>

                                <div class="col-xs-3">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="sidr">
                        <!-- Your content -->
                        <ul>
                            <li class="search-content">
                                <form class="search-form" role="search" method="get" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
                                    <input type="hidden" name="post_type" value="product" />
                                    <div class="form-group has-warning">
                                        <label>
                                            <i class="fa fa-search"></i>
                                        </label>
                                        <input type="search" class="form-control" placeholder="Nhập từ khóa" value="<?php echo get_search_query(); ?>" name="s">
                                        <input type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'woocommerce' ); ?>" class="hide"/>
                                    </div>
                                </form>
                            </li>
                            <li class="text-uppercase nav-header">Thông Tin</li>
                            <li class="icon"><a href="<?php echo get_site_url(); ?>"><i class="fa fa-home"></i> Trang Chủ</a></li>
                            <li class="icon"><a href="<?php echo get_site_url(); ?>/danh-muc/combo-va-deal/"><i class="fa fa-gift"></i> Combo & Deal</a></li>
                            <li class="icon"><a href="<?php echo get_permalink( woocommerce_get_page_id('shop')); ?>?orderby=date"><i class="fa fa-puzzle-piece"></i> Sản phẩm mới</a></li>
                            <li class="icon"><a href="<?php echo get_site_url(); ?>/ve-chung-toi/"><i class="fa fa-info-circle"></i> Về Chúng Tôi</a></li>
                            <li class="icon"><a href="<?php echo get_site_url(); ?>/lien-he/"><i class="fa fa-globe"></i> Liên Hệ</a></li>
                            <li class="icon"><a href="<?php echo get_site_url(); ?>/thanh-toan-giao-hang/"><i class="fa fa-truck"></i> Thanh toán & Giao hàng</a></li>
                            <li class="icon"><a href="<?php echo get_site_url(); ?>/huong-dan-lap-ghep/"><i class="fa fa-cogs"></i> Hướng dẫn lắp ghép</a></li>
                            <li class="icon"><a href="<?php echo get_site_url(); ?>/dung-cu-ho-tro/"><i class="fa fa-gavel"></i> Dụng cụ hỗ trợ</a></li>
                            <li class="text-uppercase nav-header">Thương Hiệu</li>
                            <?php ap_brand_list(array('liClass' => 'icon')); ?>
                            <li class="text-uppercase nav-header">Danh Mục</li>
                            <?php ap_sidebar(array('liClass' => 'icon')); ?>
                        </ul>
                    </div>
                </nav>
                <?php if(is_front_page()): ?>
                    <?php get_template_part('slider_mobile'); ?>
                <?php endif;?>
                
        </div>
        <!-- End navbar for xs devices -->
        
        <div id="main-container" class="container">
            <div id="header" class="hidden-xs">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 hidden-xs">
                        <a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="logo"></a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 hidden-xs">
                        <div class="text-center social">
                            <a href="<?php echo ap_get_social_link('facebook'); ?>" class="link-social facebook"><i class="fa fa-facebook fa-3x"></i></a> 
                            <a href="<?php echo ap_get_social_link('youtube'); ?>" class="link-social youtube"><i class="fa fa-youtube fa-3x"></i></a>
                            <a href="<?php echo ap_get_social_link('twitter'); ?>" class="link-social twitter"><i class="fa fa-twitter fa-3x"></i></a>
                            <a href="<?php echo ap_get_social_link('pinterest'); ?>" class="link-social pinterest"><i class="fa fa-pinterest fa-3x"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 hidden-xs">
                        <div class="right-content">
                            <p class="text-right phone"><i class="fa fa-phone phone"></i> Hotline: <?php echo get_option('store_hotline'); ?></p>
                            <p class="text-right mail"><a href="mailto:<?php echo get_option('admin_email'); ?> "><i class="fa fa-envelope mail"></i> <?php echo get_option('admin_email'); ?></a></p>
                            <p class="text-right cart"><i class="fa fa-shopping-cart"></i> <a href="<?php echo WC()->cart->get_cart_url(); ?>"><span class="badge badge-art"><?php echo WC()->cart->get_cart_contents_count(); ?></span></a> sản phẩm</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- This navbar is use for sm, md, lg devices -->
            <div id="navbar" class="hidden-xs">
                <nav class="navbar navbar-default navbar-art">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <a class="navbar-brand brand-logo" href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/eiffel_tower.png"></a>
                        </div>
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="hide"><a href="<?php echo get_site_url(); ?>">Trang Chủ</a></li>
                                <li class="<?php if(is_front_page()): ?>hidden-lg hidden-md<?php endif; ?> dropdown hover-dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-button="btn-show-category-list">Danh Mục <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <?php ap_sidebar(); ?>
                                    </ul>
                                </li>
                                <li class="dropdown hover-dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-button="btn-show-category-list">Thương Hiệu <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <?php ap_brand_list(); ?>
                                    </ul>
                                </li>
                                <li><a href="<?php echo get_permalink( woocommerce_get_page_id('shop')); ?>">Mô Hình Kim Loại</a></li>
                                <li><a href="<?php echo get_site_url(); ?>/danh-muc/combo-va-deal/">Combo & Deal</a></li>                                
                                <li><a href="<?php echo get_permalink( woocommerce_get_page_id('shop')); ?>?orderby=date">Sản phẩm mới</a></li>
                                <li class="hidden-sm"><a href="<?php echo get_permalink(58); ?>">Về Chúng Tôi</a></li>
                                <li class="hidden-sm"><a href="<?php echo get_permalink(50); ?>">Liên Hệ</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="hidden-sm"><a href="#" data-button="compare-product">So Sánh</a></li>
                                <li class="search">
                                    <a href="#" class="" id="btn-search-menu"><i class="fa fa-search"></i></a>
                                    <div class="search-menu-wrapper">
                                        <div class="search-menu">
                                            <form class="form-search form-inline" role="search" method="get" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
                                                <input type="hidden" name="post_type" value="product" />
                                                <div class="has-warning form-group">
                                                    <input type="search" class="form-control art input-sm has-warning" placeholder="Từ khóa" value="<?php echo get_search_query(); ?>" name="s"/>
                                                </div>
                                                <button type="submit" class="btn btn-art btn-sm">Tìm Kiếm</button>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>