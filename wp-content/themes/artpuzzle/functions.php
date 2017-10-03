<?php

/**
 * Twenty Fifteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since Twenty Fifteen 1.0
 */
locate_template('/inc/Mobile_Detect.php',true,true);

if (!isset($content_width)) {
    $content_width = 660;
}

wp_dequeue_script('wc-add-to-cart');
wp_enqueue_script( 'wc-add-to-cart', get_bloginfo( 'stylesheet_directory' ). '/js/add-to-cart.js' , array( 'jquery' ), false, true );
//add_option( 'contact_phone', '0908845977', '', 'yes' );
$apConfig = array(
    'mappingCategoryIcon' => array(
        'kien-truc-the-gioi' => 'fa-university',
        'xe-tang-chien-dau' => 'fa-rocket',
        'tau-thuy' => 'fa-ship',
        'con-trung' => 'fa-bug',
        //'xe-lua' => 'fa-train',
        'robot' => 'fa-shield',
        'xe-co' => 'fa-car',
        'may-bay-phi-thuyen' => 'fa-plane',
        'mo-hinh-kim-loai' => 'fa-puzzle-piece',
        'star-wars' => 'fa-space-shuttle',
        'nhac-cu' => 'fa-music',
        'khac' => 'fa-tree',
        'combo-va-deal' => 'fa-gift',
        'star-trek' => 'fa-gitlab',
        'halo' => 'fa-pied-piper',
        'mass-effect' => 'fa-simplybuilt',
        'batman' => 'fa-rebel',
        'transformers' => 'fa-reddit-alien',
        'marvel' => 'fa-steam',
    ),
    'orderCategory' => array(
        'kien-truc-the-gioi',
        'nhac-cu',
        'con-trung',
        'xe-co',
        'xe-tang-chien-dau',
        'tau-thuy',
        'may-bay-phi-thuyen',
        'robot',
        'star-wars',
        'star-trek',
        'halo',
        'mass-effect',
        'batman',
        'transformers',
        'marvel',
        'khac'
    ),
    'maxRating' => 5,
    'pageClass' => array(
        '50' => 'contact-us'
    ),
    'socialLink' => array(
        'facebook' => 'https://www.facebook.com/artpuzzle.vn',
        'youtube' => 'https://www.youtube.com/channel/UCXLCVrxy6HN8bxzo8tZgMNg',
        'pinterest' => 'https://www.pinterest.com/apuzzle/',
        'twitter' => ''
    ),
    'brandCategoryID' => array(
        28,
        29,
        30,
        31,
    ),
    'ignoreCategory' => array(
        108
    ),
);

add_option('store_address','348/7 Tân Sơn Nhì, P. Tân Sơn Nhì, Q. Tân Phú, Tp. HCM');
add_option('store_hotline','090 8845 977');
add_option('store_copyright_year',date('Y'));

add_shortcode('widget-category', 'widget_category');
function widget_category($attr, $content){
    ob_start();
    get_template_part('widget_category');  
    $ret = ob_get_contents();
    ob_end_clean();
    return $ret;
}

add_shortcode('widget-random-product', 'widget_random_product');
function widget_random_product($attr, $content){
    ob_start();
    set_query_var('columns',$attr['columns']);
    get_template_part('widget_random_product');  
    $ret = ob_get_contents();
    ob_end_clean();
    return $ret;
}

add_shortcode('ap_facebook_comment', 'ap_facebook_comment');
function ap_facebook_comment($attr, $content){
    ob_start();
    $link = get_permalink();
    if(isset($attr['link'])){
        $link = $attr['link'];
    }
    set_query_var('link',$link);
    get_template_part('widget_facebook_comment');  
    $ret = ob_get_contents();
    ob_end_clean();
    return $ret;
}

function ap_meta_content(){
    $mainTitle = get_bloginfo();
    $description = "Mô hình kim loại, chuyên thông tin các mô hình 3D thép, với nhiều thể loại như Kiến trúc, xe tăng, tàu chiến, StarWars, máy bay.";
    $keywords = "mô hình kim loại, mô hình thép 3D, metal work, metal earth, model metal, piececool, kiến trúc thế giới";
    $title = "ArtPuzzle.vn";
    $siteName = "ArtPuzzle.vn";
    $image = get_template_directory_uri().'/img/Banner_SEO.jpg';
    global $wp,$wp_query;
    
    $url = home_url(add_query_arg(array(),$wp->request."/"));

    if(!is_front_page() && have_posts()){
        
        if(is_shop() || is_product_category()){
            $title = woocommerce_page_title(false);
        }else{
            $title = get_the_title();
            if(strlen(get_the_excerpt()) > 0){
                $description = get_the_excerpt();
            }
            if(has_post_thumbnail()){
                $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID() ), 'large' );
                $image = $thumbnail[0];
            }
        }

        $mainTitle = $title." | ".$siteName;
        $keywords = $title;
    }

    $html = '<title>'.$mainTitle.'</title>';
    $html.= '<meta property="fb:app_id" content="1728897643991738">';
    $html.= '<meta property="fb:admins" content="100000191508615">';
    $html.= '<meta property="og:locale" content="vi_VN" />';
    $html.= '<meta property="og:url" content="'.esc_attr($url).'">';
    $html.= '<meta property="og:type" content="article">';
    $html.= '<meta property="og:title" content="'.esc_attr($title." | ".$siteName).'">';    
    $html.= '<meta property="og:description" content="'.esc_attr($description).'">';
    $html.= '<meta property="og:image" content="'.esc_url($image).'">';
	//$html.= '<meta property="og:image:width" content="468" /><meta property="og:image:height" content="272" />';
    //$html.= '<meta property="og:image:url" content="'.esc_url($image).'">';
    $html.= '<meta property="og:site_name" content="'.esc_attr($siteName).'">';
    $html.= '<link rel="image_src" href="'.esc_url($image).'">';
    //$html.= '<meta name="description" content="'.esc_attr($description).'">';
    $html.= '<meta name="keywords" content="'.esc_attr($keywords).'">';       
    $html.= '<meta property="article:section" content="'.esc_attr($title).'" />';  
    $html.= '<meta property="og:updated_time" content="'.time().'" />';
    return $html;
}

function is_mobile_not_tablets(){
    $mobileDetect = new Mobile_Detect;
    // Exclude tablets.
    if( $mobileDetect->isMobile() && !$mobileDetect->isTablet() ){
        return true;
    }
    return false;
}

function is_mobile(){
    $mobileDetect = new Mobile_Detect;
    // Exclude tablets.
    if( $mobileDetect->isMobile()){
        return true;
    }
    return false;
}

function is_tablet(){
    $mobileDetect = new Mobile_Detect;
    // Exclude tablets.
    if( $mobileDetect->isTablet()){
        return true;
    }
    return false;
}

function ap_get_social_link($key){
    if(array_key_exists($key, $GLOBALS['apConfig']['socialLink'])){
        return $GLOBALS['apConfig']['socialLink'][$key];
    }
    return '';
}

function ap_get_page_class($postId){
    if(empty($postId) == TRUE){
        return '';
    }
    
    if(array_key_exists($postId, $GLOBALS['apConfig']['pageClass']) === TRUE){
        return $GLOBALS['apConfig']['pageClass'][$postId];
    }

    return '';
}

function ap_sidebar($options = array()) {
    $args = array(
        'taxonomy' => 'product_cat',
        'orderby' => 'id',
        'show_count' => 0,
        'pad_counts' => 0,
        'title_li' => '',
        'hide_empty' => 0,
        'exclude' => implode(',', array_merge($GLOBALS['apConfig']['brandCategoryID'],$GLOBALS['apConfig']['ignoreCategory'] ))
    );
    $sidebar = "";
    $liClass = "";
    
    //in the case exist li class, will redeclare it
    if(isset($options['liClass'])){
        $liClass = $options['liClass'];
    }
    
    $categories = orderCategory(get_categories($args));
    
    foreach($categories as $category){
       
        $sidebar.= '<li class="'.$liClass.'">';
        $sidebar.= '<a href="'. get_term_link($category).'">';
        if(array_key_exists('no-icon', $options) && $options['no-icon'] == true){
            
        }else{
            $sidebar.= '<i class="fa '.  ap_get_category_icon($category->slug).'"></i> ';
        }
        $sidebar.= $category->name;
        $sidebar.= '</a>';
        $sidebar.= '</li>';
    }
    
    echo $sidebar;
}

function orderCategory($categories){
    
    $orderedList = array();
    $unorderedList = array();

    foreach($categories as $category){
        $searchResult = array_search($category->slug, $GLOBALS['apConfig']['orderCategory']);
        
        if($searchResult !== FALSE){
            $orderedList[$searchResult] = $category;
        }
        else{
            $unorderedList[] = $category;
        }
    }
    
    ksort($orderedList);
    $orderedList = array_values(array_merge($orderedList,$unorderedList));

    return $orderedList;
}


function get_brand_list(){
    $args = array(
        'taxonomy' => 'product_cat',
        'orderby' => 'id',
        'show_count' => 0,
        'pad_counts' => 0,
        'title_li' => '',
        'hide_empty' => 0,
        'include' => implode(',', $GLOBALS['apConfig']['brandCategoryID'] ),
        'orderby' => 'id',
        'order' => 'ASC'
    );

    return get_categories($args);
}

function ap_brand_list_small_info(){
    $categories = get_brand_list();
    $html = "";
    foreach($categories as $index=>$category){
        if($index > 0){
            $html.= ", ";
        }
        $html.= '<a class="brand" href="'. get_term_link($category).'">';
        $html.= $category->name;
        $html.= '</a>';
    }
    echo $html;
}

function ap_brand_list($options = array()) {
    
    $sidebar = "";
    $liClass = "";
    
    //in the case exist li class, will redeclare it
    if(isset($options['liClass'])){
        $liClass = $options['liClass'];
    }
    
    $categories = get_brand_list();
    
    foreach($categories as $category){
       
        $sidebar.= '<li class="'.$liClass.'">';
        $sidebar.= '<a href="'. get_term_link($category).'">';
        $sidebar.= $category->name;
        $sidebar.= '</a>';
        $sidebar.= '</li>';
    }
    
    echo $sidebar;
}

function ap_get_category_icon($categorySlug = ''){
    if(array_key_exists($categorySlug, $GLOBALS['apConfig']['mappingCategoryIcon'])){
        return $GLOBALS['apConfig']['mappingCategoryIcon'][$categorySlug];
    }
    return $categorySlug;
}

function ap_get_brand_category_id(){
    return $GLOBALS['apConfig']['brandCategoryID'];
}

function ap_get_categories($options = array()){
    $args = array(
        'taxonomy' => 'product_cat',
        'orderby' => 'id',
        'pad_counts' => 1,
        'title_li' => '',
        'hide_empty' => 1,
        'exclude' => implode(',', $GLOBALS['apConfig']['brandCategoryID'] )
    );
    
    $args = array_merge($args,$options);
    
    return get_categories($args);
}

function ap_get_rating_star_html($difficulty,$options = array()){
    
    $maxRating = $GLOBALS['apConfig']['maxRating'];
    $optionalClass = "";
    if(isset($options['class'])){
        $optionalClass = $options['class'];
    }
    
    $str = "";
    for($i = 1; $i <= $maxRating; $i++){
        if($i <= $difficulty){
            $str.= '<i class="fa fa-star '.$optionalClass.' "></i> ';
            continue;
        }
        $str.= '<i class="fa fa-star-o '.$optionalClass.' "></i> ';
    }
    
    return $str;
}

function ap_get_product_addon_html($product, $options = array()){
    //default not displa addon
    $addon = "";
    
    //in the case the product is out of stock then warning to user
    if($product->is_in_stock() == FALSE){
        $addon =    '<span class="addon sold">
                        <span>Hết Hàng</span>
                    </span>';
    }
    //in the case the product is on sale then warning to user
    elseif($product->is_on_sale() == TRUE){
        $addon =    '<span class="addon sale">
                        <span>Giảm Giá</span>
                    </span>';
    }
    return $addon;
}

function ap_get_product_single_status_html($product, $options = array()){
    //default not displa addon
    $addon = '<span class="label label-art">Còn hàng</span>';
    
    //in the case the product is out of stock then warning to user
    if($product->is_in_stock() == FALSE){
        $addon =    '<span class="label label-out-of-stock">Hết hàng</span>';
    }
    //in the case the product is on sale then warning to user
    elseif($product->is_on_sale() == TRUE){
        $addon =    '<span class="label label-sale">Giảm giá</span>';
    }
    return $addon;
}

add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );
function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}

// Display 24 products per page. Goes in functions.php
add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 16;' ), 20 );

add_action( 'init', 'jk_remove_wc_breadcrumbs' );
function jk_remove_wc_breadcrumbs() {
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}

add_filter( 'woocommerce_breadcrumb_defaults', 'jk_woocommerce_breadcrumbs' );
function jk_woocommerce_breadcrumbs() {
    return array(
            'delimiter'   => '&nbsp;',
            'wrap_before' => '<ol class="breadcrumb">',
            'wrap_after'  => '</ol>',
            'before'      => '<li>',
            'after'       => '</li>',
            'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),
        );
}

add_action('woocommerce_template_single_subinfo', 'woocommerce_template_single_subinfo');
function woocommerce_template_single_subinfo(){
    wc_get_template( 'single-product/subinfo.php');
}

add_action('woocommerce_template_single_share_ship', 'woocommerce_template_single_share_ship');
function woocommerce_template_single_share_ship(){
    wc_get_template( 'single-product/share_ship.php');
}

add_action('woocommerce_template_single_spec', 'woocommerce_template_single_spec');
function woocommerce_template_single_spec(){
    wc_get_template( 'single-product/product-spec.php');
}

add_action('woocommerce_template_single_facebook_comment', 'woocommerce_template_single_facebook_comment');
function woocommerce_template_single_facebook_comment(){
    wc_get_template( 'single-product/facebook-comment.php');
}

add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args' );
  function jk_related_products_args( $args ) {
    $args['posts_per_page'] = 6; // 4 related products
    //$args['columns'] = 2; // arranged in 2 columns
    return $args;
}

add_action('woocommerce_template_single_slider', 'woocommerce_template_single_slider');
function woocommerce_template_single_slider(){
    wc_get_template( 'single-product/slider.php');
}

add_action('woocommerce_template_single_rating_mobile', 'woocommerce_template_single_rating_mobile');
function woocommerce_template_single_rating_mobile(){
    wc_get_template( 'single-product/rating-mobile.php');
}

add_action('woocommerce_template_single_help', 'woocommerce_template_single_help');
function woocommerce_template_single_help(){
    wc_get_template( 'single-product/help.php');
}

add_action('woocommerce_template_single_spec_mobile', 'woocommerce_template_single_spec_mobile');
function woocommerce_template_single_spec_mobile(){
    wc_get_template( 'single-product/product-spec-mobile.php');
}

add_action('woocommerce_template_single_table_spec', 'woocommerce_template_single_table_spec');
function woocommerce_template_single_table_spec(){
    wc_get_template( 'single-product/table-spec.php');
}

add_action('woocommerce_template_single_help_payment_ship', 'woocommerce_template_single_help_payment_ship');
function woocommerce_template_single_help_payment_ship(){
    wc_get_template( 'single-product/help-payment-ship.php');
}

add_action('woocommerce_template_single_help_use', 'woocommerce_template_single_help_use');
function woocommerce_template_single_help_use(){
    wc_get_template( 'single-product/help-use.php');
}

add_filter( 'pre_get_posts', 'archive_shop_page_filters' );
function archive_shop_page_filters( $query ) {
    if ( $query->is_main_query() && $query->post_type = 'product' ) {
        $onsale = ap_get_query_string_value('onsale');
        if(intval($onsale) === 1) {
            $meta_query = array(
                'relation' => 'OR',
                array( // Simple products type
                    'key' => '_sale_price',
                    'value' => 0,
                    'compare' => '>',
                    'type' => 'numeric'
                ),
                array( // Variable products type
                    'key' => '_min_variation_sale_price',
                    'value' => 0,
                    'compare' => '>',
                    'type' => 'numeric'
                )
            ); 
            $query->set('meta_query', $meta_query);
        }
    }

return $query;
}

function ap_get_query_string(){
    $queryURL = parse_url( html_entity_decode( esc_url( add_query_arg( $arr_params ) ) ) );
    parse_str( $queryURL['query'], $getVar );
    return $getVar;
}

function ap_get_query_string_value($key){
    $query_string = ap_get_query_string();
    if(array_key_exists($key, $query_string)){
        return $query_string[$key];
    }
    return false;
}

add_filter('wp_get_attachment_image_attributes', function($attr) {
    if (isset($attr['sizes'])) unset($attr['sizes']);
    if (isset($attr['srcset'])) unset($attr['srcset']);
    return $attr;
}, PHP_INT_MAX);
add_filter('wp_calculate_image_sizes', '__return_false', PHP_INT_MAX);
add_filter('wp_calculate_image_srcset', '__return_false', PHP_INT_MAX);
remove_filter('the_content', 'wp_make_content_images_responsive');

add_action('wp_enqueue_scripts','add_custom_scripts');
function add_custom_scripts(){
    wp_enqueue_style('metaslider-nivo-slider',  plugins_url() . '/ml-slider/assets/sliders/nivoslider/nivo-slider.css?ver=3.3.6');
    wp_enqueue_style('metaslider-public',  plugins_url() . '/ml-slider/assets/metaslider/public.css?ver=3.3.6');
    wp_enqueue_style('metaslider-nivo-slider-default',  plugins_url() . '/ml-slider/assets/sliders/nivoslider/themes/default/default.css?ver=3.3.6');
    wp_enqueue_style('main-style',  get_stylesheet_directory_uri() . '/css/style.css?t=20160623');
}