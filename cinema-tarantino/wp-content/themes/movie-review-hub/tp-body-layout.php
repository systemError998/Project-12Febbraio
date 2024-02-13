<?php


$film_maker_lite_tp_theme_css = '';


//menu font size
$film_maker_lite_menu_font_size = get_theme_mod('film_maker_lite_menu_font_size', 15);{
$film_maker_lite_tp_theme_css .='.main-navigation a{';
	$film_maker_lite_tp_theme_css .='font-size: '.esc_attr($film_maker_lite_menu_font_size).'px;';
$film_maker_lite_tp_theme_css .='}';
}

// menu text tranform
$film_maker_lite_menu_text_tranform = get_theme_mod( 'film_maker_lite_menu_text_tranform','Uppercase');
if($film_maker_lite_menu_text_tranform == 'Uppercase'){
$film_maker_lite_tp_theme_css .='.main-navigation a {';
	$film_maker_lite_tp_theme_css .='text-transform: uppercase;';
$film_maker_lite_tp_theme_css .='}';
}else if($film_maker_lite_menu_text_tranform == 'Lowercase'){
$film_maker_lite_tp_theme_css .='.main-navigation a {';
	$film_maker_lite_tp_theme_css .='text-transform: lowercase;';
$film_maker_lite_tp_theme_css .='}';
}
else if($film_maker_lite_menu_text_tranform == 'Capitalize'){
$film_maker_lite_tp_theme_css .='.main-navigation a {';
	$film_maker_lite_tp_theme_css .='text-transform: capitalize;';
$film_maker_lite_tp_theme_css .='}';
}

//preloader

$film_maker_lite_tp_preloader_color1_option = get_theme_mod('film_maker_lite_tp_preloader_color1_option');
$film_maker_lite_tp_preloader_color2_option = get_theme_mod('film_maker_lite_tp_preloader_color2_option');
$film_maker_lite_tp_preloader_bg_color_option = get_theme_mod('film_maker_lite_tp_preloader_bg_color_option');

if($film_maker_lite_tp_preloader_color1_option != false){
$film_maker_lite_tp_theme_css .='.center1{';
	$film_maker_lite_tp_theme_css .='border-color: '.esc_attr($film_maker_lite_tp_preloader_color1_option).' !important;';
$film_maker_lite_tp_theme_css .='}';
}
if($film_maker_lite_tp_preloader_color1_option != false){
$film_maker_lite_tp_theme_css .='.center1 .ring::before{';
	$film_maker_lite_tp_theme_css .='background: '.esc_attr($film_maker_lite_tp_preloader_color1_option).' !important;';
$film_maker_lite_tp_theme_css .='}';
}
if($film_maker_lite_tp_preloader_color2_option != false){
$film_maker_lite_tp_theme_css .='.center2{';
	$film_maker_lite_tp_theme_css .='border-color: '.esc_attr($film_maker_lite_tp_preloader_color2_option).' !important;';
$film_maker_lite_tp_theme_css .='}';
}
if($film_maker_lite_tp_preloader_color2_option != false){
$film_maker_lite_tp_theme_css .='.center2 .ring::before{';
	$film_maker_lite_tp_theme_css .='background: '.esc_attr($film_maker_lite_tp_preloader_color2_option).' !important;';
$film_maker_lite_tp_theme_css .='}';
}
if($film_maker_lite_tp_preloader_bg_color_option != false){
$film_maker_lite_tp_theme_css .='.loader{';
	$film_maker_lite_tp_theme_css .='background: '.esc_attr($film_maker_lite_tp_preloader_bg_color_option).';';
$film_maker_lite_tp_theme_css .='}';
}

//theme color
$film_maker_lite_tp_color_option = get_theme_mod('film_maker_lite_tp_color_option');

if($film_maker_lite_tp_color_option != false){
$film_maker_lite_tp_theme_css .='button[type="submit"], .top-header,.main-navigation .menu > ul > li.highlight,.more-btn a,.box:before,.box:after,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.page-numbers,.prev.page-numbers,.next.page-numbers,span.meta-nav,#theme-sidebar button[type="submit"],#footer button[type="submit"],#comments input[type="submit"],.site-info,.book-tkt-btn a.register-btn,#slider .carousel-control-prev-icon, #slider .carousel-control-next-icon,.paly-icon i,.toggle-nav button,.error-404 [type="submit"],.wc-block-cart__submit-container a,.wc-block-checkout__actions_row .wc-block-components-checkout-place-order-button,.woocommerce ul.products li.product .onsale, .woocommerce span.onsale {';
$film_maker_lite_tp_theme_css .='background-color: '.esc_attr($film_maker_lite_tp_color_option).';';
$film_maker_lite_tp_theme_css .='}';
}
if($film_maker_lite_tp_color_option != false){
$film_maker_lite_tp_theme_css .='a,#theme-sidebar .textwidget a,#footer .textwidget a,.comment-body a,.entry-content a,.entry-summary a,.page-template-front-page .media-links a:hover,.topbar-home i.fas.fa-phone-volume,#theme-sidebar h3,.main-navigation .current_page_item > a,.main-navigation .current_page_ancestor a, .main-navigation a:hover, .wp-block-heading h2,  h1, h2, h3, h4, h5, h6, .woocommerce ul.products li.product .woocommerce-loop-product__title,.woocommerce ul.products li.product .price, .woocommerce div.product .product_title, .woocommerce div.product p.price, .box-info i,.readmore-btn a,a.added_to_cart.wc-forward,.nav ul li a:hover{';
$film_maker_lite_tp_theme_css .='color: '.esc_attr($film_maker_lite_tp_color_option).';';
$film_maker_lite_tp_theme_css .='}';
}
if($film_maker_lite_tp_color_option != false){
$film_maker_lite_tp_theme_css .='.readmore-btn a{';
$film_maker_lite_tp_theme_css .='border-color: '.esc_attr($film_maker_lite_tp_color_option).';';
$film_maker_lite_tp_theme_css .='}';
}

//hover color
$film_maker_lite_tp_color_option_link = get_theme_mod('film_maker_lite_tp_color_option_link');

if($film_maker_lite_tp_color_option_link != false){
$film_maker_lite_tp_theme_css .='.prev.page-numbers:focus, .prev.page-numbers:hover, .next.page-numbers:focus, .next.page-numbers:hover,#slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover,span.meta-nav:hover, #comments input[type="submit"]:hover,.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, #footer button[type="submit"]:hover, #theme-sidebar button[type="submit"]:hover,.book-tkt-btn a.register-btn:hover,.more-btn a:hover,.wc-block-cart__submit-container a:hover{';
	$film_maker_lite_tp_theme_css .='background: '.esc_attr($film_maker_lite_tp_color_option_link).';';
$film_maker_lite_tp_theme_css .='}';
}
if($film_maker_lite_tp_color_option_link != false){
$film_maker_lite_tp_theme_css .='a:hover,#theme-sidebar a:hover,.media-links i:hover,#footer li a:hover,#theme-sidebar .widget_tag_cloud a:hover, .readmore-btn a:hover,#footer .tagcloud a:hover,#footer p.wp-block-tag-cloud a:hover{';
	$film_maker_lite_tp_theme_css .='color: '.esc_attr($film_maker_lite_tp_color_option_link).';';
$film_maker_lite_tp_theme_css .='}';
}
if($film_maker_lite_tp_color_option_link != false){
$film_maker_lite_tp_theme_css .='#footer .tagcloud a:hover,#theme-sidebar .widget_tag_cloud a:hover, .readmore-btn a:hover,#footer p.wp-block-tag-cloud a:hover,#theme-sidebar .tagcloud a:hover{';
	$film_maker_lite_tp_theme_css .='border-color: '.esc_attr($film_maker_lite_tp_color_option_link).';';
$film_maker_lite_tp_theme_css .='}';
}

// footer-bg-color
$film_maker_lite_tp_footer_bg_color_option = get_theme_mod('film_maker_lite_tp_footer_bg_color_option');

if($film_maker_lite_tp_footer_bg_color_option != false){
$film_maker_lite_tp_theme_css .='#footer{';
	$film_maker_lite_tp_theme_css .='background: '.esc_attr($film_maker_lite_tp_footer_bg_color_option).' !important;';
$film_maker_lite_tp_theme_css .='}';
}

//footer image
$film_maker_lite_footer_widget_image = get_theme_mod('film_maker_lite_footer_widget_image');
if($film_maker_lite_footer_widget_image != false){
$film_maker_lite_tp_theme_css .='#footer{';
	$film_maker_lite_tp_theme_css .='background: url('.esc_attr($film_maker_lite_footer_widget_image).');';
$film_maker_lite_tp_theme_css .='}';
}

//======================= slider Content layout ===================== //

$film_maker_lite_slider_content_layout = get_theme_mod('film_maker_lite_slider_content_layout', 'LEFT-ALIGN'); 
$film_maker_lite_tp_theme_css .= '#slider .carousel-caption, #slider .inner_carousel{';
switch ($film_maker_lite_slider_content_layout) {
    case 'LEFT-ALIGN':
        $film_maker_lite_tp_theme_css .= 'text-align:left; right: 50%; left: 15%';
        break;
    case 'CENTER-ALIGN':
        $film_maker_lite_tp_theme_css .= 'text-align:center; left: 15%; right: 15%';
        break;
    case 'RIGHT-ALIGN':
        $film_maker_lite_tp_theme_css .= 'text-align:right; left: 50%; right: 15%';
        break;
    default:
        $film_maker_lite_tp_theme_css .= 'text-align:left; right: 50%; left: 15%';
        break;
}
$film_maker_lite_tp_theme_css .= '}';