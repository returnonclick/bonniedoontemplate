<?php

    include_once (TEMPLATEPATH . '/server/roc_meta_tag_post.php');

    ROC_Meta_Tag_Post()->register_post_area_services();



    /*
	 * Enable support for custom logo.
	 *
	 * @since Twenty Fifteen 1.5
	 */
    add_theme_support( 'custom-logo', array(
        'height'      => 248,
        'width'       => 248,
        'flex-height' => true,
    ) );







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


/**
 * Custom template tags for this theme.
 *
 * @since Twenty Fifteen 1.0
 */
require get_template_directory() . '/inc/template-tags.php';


