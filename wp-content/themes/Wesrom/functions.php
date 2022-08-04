<?php

//CSS & JS Scripts
function resources(){
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
        wp_enqueue_style('style', get_template_directory_uri() . '/src/css/main.css', array(), false, 'all');
        wp_enqueue_script('jquery','https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', 'all', 'all', true);
        wp_enqueue_script('bootstrapjs', get_template_directory_uri(). '/js/bootstrap.min.js', 'jquery', false, true);
}

add_action('wp_enqueue_scripts', 'resources');


//Theme Options
add_theme_support('menus');
register_nav_menus(
    array(
        'main-navigation' => 'Main Navigation',
        'mobile-menu' => 'Mobile Menu'
    )
    );
add_theme_support('custom-logo');


/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );
?>