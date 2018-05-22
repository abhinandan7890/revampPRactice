<?php


function PRenqueue_scripts() {
	wp_enqueue_style( 'bootstrap-min', get_stylesheet_directory_uri() . '/css/bootstrap.min.css', array(), '4.1.0', 'all' );
	wp_enqueue_style( 'fontawesome-min', get_stylesheet_directory_uri() . '/css/font-awesome.min.css', array(), '', 'all' );
	wp_enqueue_style( 'animations', get_stylesheet_directory_uri() . '/css/animations.css', array(), '', 'all' );
	wp_enqueue_style( 'plyr', get_stylesheet_directory_uri() . '/css/plyr.css', array(), '', 'all' );
	wp_enqueue_style( 'owl-carousel-min', get_stylesheet_directory_uri() . '/css/owl.carousel.min.css', array(), '', 'all' );
	wp_enqueue_style( 'easy-responsive-tabs', get_stylesheet_directory_uri() . '/css/easy-responsive-tabs.css', array(), '', 'all' );
	wp_enqueue_style( 'practice-custom', get_stylesheet_directory_uri() . '/css/practice-custom.css', array(), '', 'all' );

    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery' , get_stylesheet_directory_uri() . '/js/jquery.js', false, '1.12.3', true );
	wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'modernizr-min', get_template_directory_uri() . '/js/modernizr-1.6.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'css3-animate-it', get_template_directory_uri() . '/js/css3-animate-it.js', array('jquery'), '', true );
    wp_enqueue_script( 'plyr-min', get_template_directory_uri() . '/js/plyr.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'owl-carousel-min', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'tabwithaccordian', get_template_directory_uri() . '/js/tabwithaccordian.js', array('jquery'), '', true );
    wp_enqueue_script( 'easyResponsiveTabs', get_template_directory_uri() . '/js/easyResponsiveTabs.js', array('jquery'), '', true );
	wp_enqueue_script( 'practice-custom', get_template_directory_uri() . '/js/practice-custom.js', array('jquery'), '', true );

	

}
add_action( 'wp_enqueue_scripts', 'PRenqueue_scripts' );