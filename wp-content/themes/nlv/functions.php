<?php 

/**
 * Enqueue scripts and styles.
 */

if(!defined('HOTEL_VERSION')){
    define('HOTEL_VERSION', '0.2');
}

if(!defined('URL_IMG')){
    define('URL_IMG', $theme_directory_url_img = get_template_directory_uri() . '/images/');
}

if(!defined('URL_DERECTORY_CSS')){
    define('URL_DERECTORY_CSS', $theme_directory_url = get_template_directory_uri() . '/css/');
}

if(!defined('URL_DERECTORY_JS')){
    define('URL_DERECTORY_JS', $theme_directory_url_script = get_template_directory_uri() . '/js/');
}

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );

function nlv_theme_scripts() {
    wp_enqueue_style( 'open-iconic-bootstrap.min', URL_DERECTORY_CSS . 'open-iconic-bootstrap.min.css', array(), HOTEL_VERSION );
    wp_enqueue_style( 'animate', URL_DERECTORY_CSS . 'animate.css', array(), HOTEL_VERSION );
    wp_enqueue_style( 'owl.carousel.min', URL_DERECTORY_CSS . 'owl.carousel.min.css', array(), HOTEL_VERSION );
    wp_enqueue_style( 'owl.theme.default.min', URL_DERECTORY_CSS . 'owl.theme.default.min.css', array(), HOTEL_VERSION );
    wp_enqueue_style( 'magnific-popup', URL_DERECTORY_CSS . 'magnific-popup.css', array(), HOTEL_VERSION );
    wp_enqueue_style( 'aos', URL_DERECTORY_CSS . 'aos.css', array(), HOTEL_VERSION );
    wp_enqueue_style( 'ionicons.min', URL_DERECTORY_CSS . 'ionicons.min.css', array(), HOTEL_VERSION );
    wp_enqueue_style( 'bootstrap-datepicker', URL_DERECTORY_CSS . 'bootstrap-datepicker.css', array(), HOTEL_VERSION );
    wp_enqueue_style( 'jquery.timepicker', URL_DERECTORY_CSS . 'jquery.timepicker.css', array(), HOTEL_VERSION );
    wp_enqueue_style( 'flaticon', URL_DERECTORY_CSS . 'flaticon.css', array(), HOTEL_VERSION );
    wp_enqueue_style( 'icomoon', URL_DERECTORY_CSS . 'icomoon.css', array(), HOTEL_VERSION );
    wp_enqueue_style( 'style', URL_DERECTORY_CSS . 'style.css', array(), HOTEL_VERSION );


    wp_enqueue_script( 'jquery', URL_DERECTORY_JS . 'jquery.min.js', array(), HOTEL_VERSION, true );
    wp_enqueue_script( 'jquery-migrate', URL_DERECTORY_JS . 'jquery-migrate-3.0.1.min.js', array(), HOTEL_VERSION, true );
    wp_enqueue_script( 'popper.min', URL_DERECTORY_JS . 'popper.min.js', array(), HOTEL_VERSION, true );
    wp_enqueue_script( 'bootstrap.min', URL_DERECTORY_JS . 'bootstrap.min.js', array(), HOTEL_VERSION, true );
    wp_enqueue_script( 'jquery.easing.1.3', URL_DERECTORY_JS . 'jquery.easing.1.3.js', array(), HOTEL_VERSION, true );
    wp_enqueue_script( 'jquery.waypoints.min', URL_DERECTORY_JS . 'jquery.waypoints.min.js', array(), HOTEL_VERSION, true );
    wp_enqueue_script( 'jquery.stellar.min', URL_DERECTORY_JS . 'jquery.stellar.min.js', array(), HOTEL_VERSION, true );
    wp_enqueue_script( 'owl.carousel.min', URL_DERECTORY_JS . 'owl.carousel.min.js', array(), HOTEL_VERSION, true );
    wp_enqueue_script( 'jquery.magnific-popup.min', URL_DERECTORY_JS . 'jquery.magnific-popup.min.js', array(), HOTEL_VERSION, true );
    wp_enqueue_script( 'owl.carousel.min', URL_DERECTORY_JS . 'owl.carousel.min.js', array(), HOTEL_VERSION, true );
    wp_enqueue_script( 'jquery.magnific-popup.min', URL_DERECTORY_JS . 'jquery.magnific-popup.min.js', array(), HOTEL_VERSION, true );
    wp_enqueue_script( 'aos', URL_DERECTORY_JS . 'aos.js', array(), HOTEL_VERSION, true );
    wp_enqueue_script( 'jquery.animateNumber.min', URL_DERECTORY_JS . 'jquery.animateNumber.min.js', array(), HOTEL_VERSION, true );
    wp_enqueue_script( 'bootstrap-datepicker', URL_DERECTORY_JS . 'bootstrap-datepicker.js', array(), HOTEL_VERSION, true );
    wp_enqueue_script( 'scrollax.min', URL_DERECTORY_JS . 'scrollax.min.js', array(), '0.2', true );
    wp_enqueue_script( 'google-map', URL_DERECTORY_JS . 'google-map.js', array(), '0.2', true );
    wp_enqueue_script( 'main', URL_DERECTORY_JS . 'main.js', array(), '0.2', true );

}
add_action( 'wp_enqueue_scripts', 'nlv_theme_scripts' );

/**
 * Register a main nav bar menu
 */
if ( ! function_exists( 'pimery_register_nav_menu' ) ) {

	function pimery_register_nav_menu(){
		register_nav_menus( array(
	    	'headmenu' => __( 'Primary Menu'),
	    	// 'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
		) );
	}
	add_action( 'after_setup_theme', 'pimery_register_nav_menu', 0 );
}