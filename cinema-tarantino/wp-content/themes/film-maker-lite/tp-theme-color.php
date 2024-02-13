<?php

$film_maker_lite_tp_theme_css = '';

//theme color
$film_maker_lite_tp_color_option = get_theme_mod('film_maker_lite_tp_color_option');

if($film_maker_lite_tp_color_option != false){
$film_maker_lite_tp_theme_css .='button[type="submit"], .top-header,.main-navigation .menu > ul > li.highlight,.more-btn a,.box:before,.box:after,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.page-numbers,.prev.page-numbers,.next.page-numbers,span.meta-nav,#theme-sidebar button[type="submit"],#footer button[type="submit"],#comments input[type="submit"],.site-info,.book-tkt-btn a.register-btn,#slider .inner_carousel p,.toggle-nav button,.error-404 [type="submit"],.wc-block-cart__submit-container a,.wc-block-checkout__actions_row .wc-block-components-checkout-place-order-button,
.wc-block-grid__product-add-to-cart.wp-block-button .wp-block-button__link,.woocommerce ul.products li.product .onsale, .woocommerce span.onsale,#latest-release .owl-nav i:hover{';
$film_maker_lite_tp_theme_css .='background-color: '.esc_attr($film_maker_lite_tp_color_option).';';
$film_maker_lite_tp_theme_css .='}';
}
if($film_maker_lite_tp_color_option != false){
$film_maker_lite_tp_theme_css .=' a,#theme-sidebar .textwidget a,#footer .textwidget a,.comment-body a,.entry-content a,.entry-summary a,.page-template-front-page .media-links a:hover,.topbar-home i.fas.fa-phone-volume,#theme-sidebar h3,
#theme-sidebar h3, #theme-sidebar h1.wp-block-heading, #theme-sidebar h2.wp-block-heading, #theme-sidebar h3.wp-block-heading,#theme-sidebar h4.wp-block-heading, #theme-sidebar h5.wp-block-heading, #theme-sidebar h6.wp-block-heading,#theme-sidebar h3,.main-navigation a:hover, #theme-sidebar .wp-block-search .wp-block-search__label,.box-info i,.readmore-btn a,a.added_to_cart.wc-forward {';
$film_maker_lite_tp_theme_css .='color: '.esc_attr($film_maker_lite_tp_color_option).';';
$film_maker_lite_tp_theme_css .='}';
}

if($film_maker_lite_tp_color_option != false){
$film_maker_lite_tp_theme_css .='.readmore-btn a{';
	$film_maker_lite_tp_theme_css .='border-color: '.esc_attr($film_maker_lite_tp_color_option).';';
$film_maker_lite_tp_theme_css .='}';
}

if($film_maker_lite_tp_color_option != false){
$film_maker_lite_tp_theme_css .='@media screen and (max-width:1000px){';
$film_maker_lite_tp_theme_css .='.nav ul li a:hover{';
	$film_maker_lite_tp_theme_css .='color: '.esc_attr($film_maker_lite_tp_color_option).';';
$film_maker_lite_tp_theme_css .='} }';
}

//hover color
$film_maker_lite_tp_color_option_link = get_theme_mod('film_maker_lite_tp_color_option_link');

if($film_maker_lite_tp_color_option_link != false){
$film_maker_lite_tp_theme_css .='.prev.page-numbers:focus, .prev.page-numbers:hover, .next.page-numbers:focus, .next.page-numbers:hover,#slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover,span.meta-nav:hover, #comments input[type="submit"]:hover,.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, #footer button[type="submit"]:hover,#theme-sidebar .tagcloud a:hover, #theme-sidebar button[type="submit"]:hover,.book-tkt-btn a.register-btn:hover,.more-btn a:hover,.wc-block-cart__submit-container a:hover,
.wc-block-grid__product-add-to-cart.wp-block-button .wp-block-button__link:hover{';
	$film_maker_lite_tp_theme_css .='background: '.esc_attr($film_maker_lite_tp_color_option_link).';';
$film_maker_lite_tp_theme_css .='}';
}
if($film_maker_lite_tp_color_option_link != false){
$film_maker_lite_tp_theme_css .='a:hover,#theme-sidebar a:hover,.media-links i:hover, #footer li a:hover,.wp-block-tag-cloud a:hover, #theme-sidebar .widget_tag_cloud a:hover, .readmore-btn a:hover,#footer .tagcloud a:hover,#footer p.wp-block-tag-cloud a:hover {';
	$film_maker_lite_tp_theme_css .='color: '.esc_attr($film_maker_lite_tp_color_option_link).';';
$film_maker_lite_tp_theme_css .='}';
}
if($film_maker_lite_tp_color_option_link != false){
$film_maker_lite_tp_theme_css .='#footer .tagcloud a:hover,#footer p.wp-block-tag-cloud a:hover, .wp-block-tag-cloud a:hover,.post_tag a:hover, #theme-sidebar .widget_tag_cloud a:hover, .readmore-btn a:hover{';
	$film_maker_lite_tp_theme_css .='border-color: '.esc_attr($film_maker_lite_tp_color_option_link).';';
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

// footer-bg-color
$film_maker_lite_tp_footer_bg_color_option = get_theme_mod('film_maker_lite_tp_footer_bg_color_option');

if($film_maker_lite_tp_footer_bg_color_option != false){
$film_maker_lite_tp_theme_css .='#footer{';
	$film_maker_lite_tp_theme_css .='background: '.esc_attr($film_maker_lite_tp_footer_bg_color_option).' !important;';
$film_maker_lite_tp_theme_css .='}';
}