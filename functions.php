<?php

add_theme_support( 'post-thumbnails' );

function callCssJs(){

    // Calling Style
    wp_enqueue_style('bootstrap_style', get_template_directory_uri().'/plugins/bootstrap/bootstrap.min.css', null, '5.1', 'all');
    wp_enqueue_style('ionicons_style', get_template_directory_uri().'/plugins/ionicons/ionicons.min.css', null, '5.1', 'all');
    wp_enqueue_style('animate_css', get_template_directory_uri().'/plugins/animate-css/animate.css', null, '5.1', 'all');
    wp_enqueue_style('slider_style', get_template_directory_uri().'/plugins/slider/slider.css', null, '5.1', 'all');
    wp_enqueue_style('owl_carousel_style', get_template_directory_uri().'/plugins/owl-carousel/owl.carousel.css', null, '5.1', 'all');
    wp_enqueue_style('owl_theme_style', get_template_directory_uri().'/plugins/owl-carousel/owl.theme.css', null, '5.1', 'all');
    wp_enqueue_style('fancybox_style', get_template_directory_uri().'/plugins/facncybox/jquery.fancybox.css', null, '5.1', 'all');
    wp_enqueue_style('comments_style', get_template_directory_uri().'/plugins/comments.css', null, '5.1', 'all');
    wp_enqueue_style('timer_style', get_template_directory_uri().'/css/style.css', null, '5.1', 'all');
    wp_enqueue_style('main_style', get_stylesheet_uri(), null, microtime(), 'all');

    // Calling Script
    wp_enqueue_script('jquery_min', get_template_directory_uri().'/plugins/jQurey/jquery.min.js', null, '5.1', 'all');
    wp_enqueue_script('jquery_form', get_template_directory_uri().'/plugins/form-validation/jquery.form.js', null, '5.1', 'all');
    wp_enqueue_script('jquery_validate_form', get_template_directory_uri().'/plugins/form-validation/jquery.validate.min.js', null, '5.1', 'all');
    wp_enqueue_script('owl_carousel_js', get_template_directory_uri().'/plugins/owl-carousel/owl.carousel.min.js', null, '5.1', 'all');
    wp_enqueue_script('bootstrap_min_js', get_template_directory_uri().'/plugins/bootstrap/bootstrap.min.js', null, '5.1', 'all');
    wp_enqueue_script('wow_js', get_template_directory_uri().'/plugins/wow-js/wow.min.js', null, '5.1', 'all');
    wp_enqueue_script('slider_js', get_template_directory_uri().'/plugins/slider/slider.js', null, '5.1', 'all');
    wp_enqueue_script('facncybox_js', get_template_directory_uri().'/plugins/facncybox/jquery.fancybox.js', null, '5.1', 'all');
    wp_enqueue_script('main_js', get_template_directory_uri().'/js/main.js', null, '5.1', 'all');

}
add_action('wp_enqueue_scripts', 'callCssJs');

// Register Menu
register_nav_menus(array(
    'primary' => __('Primary Menu')
));

// Register Custom Navigation Walker
require_once get_template_directory().'/inc/class-wp-bootstrap-navwalker.php';

// Wedget Registration
function widget_init(){
    register_sidebar(array(
        'name'  => 'Primary Sidebar',
        'id'    => 'main_sidebar',
        'before_widget' => '<div class="author categories recent-post widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-head">',
        
    ));
}
add_action('widgets_init', 'widget_init');

// Custom Post
function custom_posts(){
    
    // Front Page Latest Work
    register_post_type('latest_work', array(
        'labels'    => array(
            'menu_name'     => 'Latest Work Menu',
            'name'          => 'Latest Work',
            'all_items'     => 'All Latest Works',
            'add_new'       => 'Add New',
            'add_new_item'  => 'Add New Item'
        ),
        'public'    => true,
        'supports'  => array('title', 'editor', 'author', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-tagcloud'
    ));

    // Front Page Feature Offer
    register_post_type('feature_offer', array(
        'labels'    => array(
            'menu_name'     => 'Feature Offer Menu',
            'name'          => 'Feature Offer',
            'all_items'     => 'All Feature Offer',
            'add_new'       => 'Add New',
            'add_new_item'  => 'Add New Item'
        ),
        'public'    => true,
        'supports'  => array('title'),
        'menu_icon' => 'dashicons-products'
    ));

    // Team Members
    register_post_type('teamMembers', array(
        'labels'    => array(
            'menu_name'     => 'Team Members Menu',
            'name'          => 'Team Members',
            'all_items'     => 'All Team Members',
            'add_new'       => 'Add New',
            'add_new_item'  => 'Add New Item'
        ),
        'public'    => true,
        'supports'  => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-groups'
    ));
}
add_action('init', 'custom_posts');

// CMB2 Custom Fields
require_once('inc/cmb2_custom_fields.php');

// Redux Theme Option
require_once('inc/redux-framework/redux-framework.php');
require_once('inc/timer_theme_option.php');