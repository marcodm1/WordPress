<?php

// Prefijo común
function diw_add_theme_assets() {
  wp_enqueue_style('diw-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'diw_add_theme_assets');



if ( ! function_exists( 'myfirsttheme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function myfirsttheme_setup() {
 
    /**
     * Make theme available for translation.
     * Translations can be placed in the /languages/ directory.
     */
    load_theme_textdomain( 'myfirsttheme', get_template_directory() . '/languages' );
 
    /**
     * Add default posts and comments RSS feed links to <head>.
     */
    add_theme_support( 'automatic-feed-links' );
 
    /**
     * Enable support for post thumbnails and featured images.
     */
    add_theme_support( 'post-thumbnails' );
 
    /**
     * Add support for two custom navigation menus.
     */
    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'myfirsttheme' ),
        'secondary' => __('Secondary Menu', 'myfirsttheme' )
    ) );
 
    /**
     * Enable support for the following post formats:
     * aside, gallery, quote, image, and video
     */
    add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
}
endif; // myfirsttheme_setup
//add_action( 'after_setup_theme', 'myfirsttheme_setup' );




function diw_sidebar_widgets() { // esta funcion registra un sidebar con varios comos
  register_sidebar(array(
    'id'            => 'primary-sidebar',
    'name'          => esc_html( 'Primary Sidebar', 'diw' ),
    'description'   => esc_html( 'Este es mi sidebar', 'diw' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ));
}
//add_action('widgets_init', 'diw_sidebar_widgets'); // un hook




?>
