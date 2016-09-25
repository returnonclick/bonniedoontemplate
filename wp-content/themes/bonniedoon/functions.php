<?php

    include_once (TEMPLATEPATH . '/server/roc_meta_tag_post.php');

    ROC_Meta_Tag_Post()->register_post_type();

/**
 * Custom template tags for this theme.
 *
 * @since Twenty Fifteen 1.0
 */
require get_template_directory() . '/inc/template-tags.php';



if ( ! function_exists( 'booniedoon_setup' ) ) :

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @since Twenty Fifteen 1.0
 */
function booniedoon_setup() {

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );

    // This theme uses wp_nav_menu() in two locations.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu',      'bonniedoon' ),
        'social'  => __( 'Social Links Menu', 'bonniedoon' ),
    ) );

    /*
	 * Enable support for custom logo.
	 *
	 * @since Twenty Fifteen 1.5
	 */
    add_theme_support( 'custom-logo', array(
        'height'      => 148,
        'width'       => 148,
        'flex-height' => true,
    ) );

}

endif;

add_action( 'after_setup_theme', 'booniedoon_setup' );



/**
 * Register two widget areas.
 *
 * @since Bonnie Doon 1.0
 */
function booniedoon_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Footer Widget Area', 'booniedoon' ),
        'id'            => 'footer-1',
        'description'   => __( 'Appears in the footer section of the site.', 'booniedoon' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Secondary Footer Widget Area', 'booniedoon' ),
        'id'            => 'footer-2',
        'description'   => __( 'Appears in the footer section of the site.', 'booniedoon' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}

add_action( 'widgets_init', 'booniedoon_widgets_init' );



function add_menuclass($ulclass) {
    return preg_replace('/<a /', '<a class="page-scroll"', $ulclass);
}

add_filter('wp_nav_menu','add_menuclass');