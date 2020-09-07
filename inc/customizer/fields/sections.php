<?php 
/**
 * @Packge     : Durg
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer panels and sections
 *
 */

/***********************************
 * Register customizer panels
 ***********************************/

$panels = array(
    /**
     * Theme Options Panel
     */
    array(
        'id'   => 'durg_theme_options_panel',
        'args' => array(
            'priority'       => 0,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => esc_html__( 'Theme Options', 'durg' ),
        ),
    )
);


/***********************************
 * Register customizer sections
 ***********************************/


$sections = array(

    /**
     * General Section
     */
    array(
        'id'   => 'durg_general_section',
        'args' => array(
            'title'    => esc_html__( 'General', 'durg' ),
            'panel'    => 'durg_theme_options_panel',
            'priority' => 1,
        ),
    ),
    
    /**
     * Header Section
     */
    array(
        'id'   => 'durg_header_section',
        'args' => array(
            'title'    => esc_html__( 'Header', 'durg' ),
            'panel'    => 'durg_theme_options_panel',
            'priority' => 2,
        ),
    ),

    /**
     * Blog Section
     */
    array(
        'id'   => 'durg_blog_section',
        'args' => array(
            'title'    => esc_html__( 'Blog', 'durg' ),
            'panel'    => 'durg_theme_options_panel',
            'priority' => 3,
        ),
    ),

    /**
     * CTA Section
     */
    array(
        'id'   => 'durg_cta_section',
        'args' => array(
            'title'    => esc_html__( 'CTA Settings', 'durg' ),
            'panel'    => 'durg_theme_options_panel',
            'priority' => 5,
        ),
    ),

    /**
     * Contact Details Section
     */
    array(
        'id'   => 'durg_contact_details_section',
        'args' => array(
            'title'    => esc_html__( 'Contact Details Settings', 'durg' ),
            'panel'    => 'durg_theme_options_panel',
            'priority' => 6,
        ),
    ),


    /**
     * 404 Page Section
     */
    // array(
    //     'id'   => 'durg_fof_section',
    //     'args' => array(
    //         'title'    => esc_html__( '404 Page', 'durg' ),
    //         'panel'    => 'durg_theme_options_panel',
    //         'priority' => 7,
    //     ),
    // ),

    /**
     * Footer Section
     */
    array(
        'id'   => 'durg_footer_section',
        'args' => array(
            'title'    => esc_html__( 'Footer Page', 'durg' ),
            'panel'    => 'durg_theme_options_panel',
            'priority' => 8,
        ),
    ),



);


/***********************************
 * Add customizer elements
 ***********************************/
$collection = array(
    'panel'   => $panels,
    'section' => $sections,
);

Epsilon_Customizer::add_multiple( $collection );

?>