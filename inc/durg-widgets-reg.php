<?php
// Block direct access
if( !defined( 'ABSPATH' ) ){
    exit( 'Direct script access denied.' );
}

/**
 * @Packge     : Durg
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 

function durg_widgets_init() {
    // sidebar widgets register
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'durg' ),
        'id'            => 'durg-post-sidebar',
        'before_widget' => '<div id="%1$s" class="single_sidebar_widget widget blog-post-archives %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget_title">',
        'after_title'   => '</h4>',
    ) );
    
    // footer widgets register
    register_sidebar( array(
        'name'          => esc_html__( 'Footer One', 'durg' ),
        'id'            => 'footer-1',
        'before_widget' => '<div id="%1$s" class="single-footer-widget widget footer_1 %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Two', 'durg' ),
        'id'            => 'footer-2',
        'before_widget' => '<div class="col-sm-6 col-md-2 col-xl-2"><div id="%1$s" class="single-footer-widget widget %2$s">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Three', 'durg' ),
        'id'            => 'footer-3',
        'before_widget' => '<div class="col-sm-6 col-md-3 col-xl-3"><div id="%1$s" class="single-footer-widget widget %2$s">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Four', 'durg' ),
        'id'            => 'footer-4',
        'before_widget' => '<div class="col-sm-6 col-md-3 col-xl-3"><div id="%1$s" class="single-footer-widget widget %2$s">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    
    
}
add_action( 'widgets_init', 'durg_widgets_init' );
