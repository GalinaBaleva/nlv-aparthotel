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


function nlv_theme_scripts() {
    $theme_directory_url = get_template_directory_uri() . '/css/';
    $theme_directory_url_script = get_template_directory_uri() . '/js/';


     wp_enqueue_style( 'open-iconic-bootstrap.min', $theme_directory_url . 'open-iconic-bootstrap.min.css', array(), HOTEL_VERSION );
    wp_enqueue_style( 'animate', $theme_directory_url . 'animate.css', array(), HOTEL_VERSION );
    wp_enqueue_style( 'owl.carousel.min', $theme_directory_url . 'owl.carousel.min.css', array(), HOTEL_VERSION );
    wp_enqueue_style( 'owl.theme.default.min', $theme_directory_url . 'owl.theme.default.min.css', array(), HOTEL_VERSION );
    wp_enqueue_style( 'magnific-popup', $theme_directory_url . 'magnific-popup.css', array(), HOTEL_VERSION );
    wp_enqueue_style( 'aos', $theme_directory_url . 'aos.css', array(), HOTEL_VERSION );
    wp_enqueue_style( 'ionicons.min', $theme_directory_url . 'ionicons.min.css', array(), HOTEL_VERSION );
    wp_enqueue_style( 'bootstrap-datepicker', $theme_directory_url . 'bootstrap-datepicker.css', array(), HOTEL_VERSION );
    wp_enqueue_style( 'jquery.timepicker', $theme_directory_url . 'jquery.timepicker.css', array(), HOTEL_VERSION );
    wp_enqueue_style( 'flaticon', $theme_directory_url . 'flaticon.css', array(), HOTEL_VERSION );
    wp_enqueue_style( 'icomoon', $theme_directory_url . 'icomoon.css', array(), HOTEL_VERSION );
    wp_enqueue_style( 'style', $theme_directory_url . 'style.css', array(), HOTEL_VERSION );


    wp_enqueue_script( 'jquery', $theme_directory_url_script . 'jquery.min.js', array(), HOTEL_VERSION, true );
    wp_enqueue_script( 'jquery-migrate', $theme_directory_url_script . 'jquery-migrate-3.0.1.min.js', array(), HOTEL_VERSION, true );
    wp_enqueue_script( 'popper.min', $theme_directory_url_script . 'popper.min.js', array(), HOTEL_VERSION, true );
    wp_enqueue_script( 'bootstrap.min', $theme_directory_url_script . 'bootstrap.min.js', array(), HOTEL_VERSION, true );
    wp_enqueue_script( 'jquery.easing.1.3', $theme_directory_url_script . 'jquery.easing.1.3.js', array(), HOTEL_VERSION, true );
    wp_enqueue_script( 'jquery.waypoints.min', $theme_directory_url_script . 'jquery.waypoints.min.js', array(), HOTEL_VERSION, true );
    wp_enqueue_script( 'jquery.stellar.min', $theme_directory_url_script . 'jquery.stellar.min.js', array(), HOTEL_VERSION, true );
    wp_enqueue_script( 'owl.carousel.min', $theme_directory_url_script . 'owl.carousel.min.js', array(), HOTEL_VERSION, true );
    wp_enqueue_script( 'jquery.magnific-popup.min', $theme_directory_url_script . 'jquery.magnific-popup.min.js', array(), HOTEL_VERSION, true );
    wp_enqueue_script( 'owl.carousel.min', $theme_directory_url_script . 'owl.carousel.min.js', array(), HOTEL_VERSION, true );
    wp_enqueue_script( 'jquery.magnific-popup.min', $theme_directory_url_script . 'jquery.magnific-popup.min.js', array(), HOTEL_VERSION, true );
    wp_enqueue_script( 'aos', $theme_directory_url_script . 'aos.js', array(), HOTEL_VERSION, true );
    wp_enqueue_script( 'jquery.animateNumber.min', $theme_directory_url_script . 'jquery.animateNumber.min.js', array(), HOTEL_VERSION, true );
    wp_enqueue_script( 'bootstrap-datepicker', $theme_directory_url_script . 'bootstrap-datepicker.js', array(), HOTEL_VERSION, true );
    wp_enqueue_script( 'scrollax.min', $theme_directory_url_script . 'scrollax.min.js', array(), '0.2', true );
    wp_enqueue_script( 'google-map', $theme_directory_url_script . 'google-map.js', array(), '0.2', true );
    wp_enqueue_script( 'main', $theme_directory_url_script . 'main.js', array(), '0.2', true );

}
add_action( 'wp_enqueue_scripts', 'nlv_theme_scripts' );