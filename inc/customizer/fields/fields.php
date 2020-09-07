<?php 
/**
 * @Packge     : Durg
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer section fields
 *
 */

/***********************************
 * General Section Fields
 ***********************************/

 // Theme color field
Epsilon_Customizer::add_field(
    'durg_theme_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Theme Color', 'durg' ),
        'description' => esc_html__( 'Select the theme color.', 'durg' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'durg_general_section',
        'default'     => '#ff5e13',
    )
);

// Header Topbar section
Epsilon_Customizer::add_field(
    'header_topbar_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Header Topbar Section', 'durg' ),
        'section'     => 'durg_header_section',
        'default'     => true,

    )
);
// Header Topbar Show/Hide
Epsilon_Customizer::add_field(
    'durg_header_topbar_toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Header Topbar Show/Hide', 'durg' ),
        'section'     => 'durg_header_section',
        'default'     => true,
    )
);
// Header Phone number
Epsilon_Customizer::add_field(
    'durg_phone_number',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Header Phone Number', 'durg' ),
        'section'     => 'durg_header_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => '+880 256 356 256',
    )
);
// Header Email
Epsilon_Customizer::add_field(
    'durg_email_field',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Header Email', 'durg' ),
        'section'     => 'durg_header_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => 'support24@durg.com',
    )
);



// Header Quote Button
Epsilon_Customizer::add_field(
    'header_quote_btn_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Header Quote Button Section', 'durg' ),
        'section'     => 'durg_header_section',
        'default'     => true,

    )
);
// Header quote button label
Epsilon_Customizer::add_field(
    'durg_quote_btn_label',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Header Quote Button Label', 'durg' ),
        'section'     => 'durg_header_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => esc_html__( 'Get a quote', 'durg' ),
    )
);
// Header quote button url
Epsilon_Customizer::add_field(
    'durg_quote_btn_url',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Header Quote Button URL', 'durg' ),
        'section'     => 'durg_header_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => '#',
    )
);
// Header quote button bg color
Epsilon_Customizer::add_field(
    'durg_quote_btn_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Quote Button BG Color', 'durg' ),
        'description' => esc_html__( 'Select the background color.', 'durg' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'durg_header_section',
        'default'     => '#ff5e13',
    )
);
// Header quote button hover text color
Epsilon_Customizer::add_field(
    'durg_quote_btn_hvr_text_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Quote Button Hover Text Color', 'durg' ),
        'description' => esc_html__( 'Select the hover text color.', 'durg' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'durg_header_section',
        'default'     => '#ff5e13',
    )
);


// Header color sections
Epsilon_Customizer::add_field(
    'header_color_section',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Header Color Section', 'durg' ),
        'section'     => 'durg_header_section',

    )
);
 
// Header background color field
Epsilon_Customizer::add_field(
    'durg_header_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Sticky Header BG Color', 'durg' ),
        'description' => esc_html__( 'Select the header background color.', 'durg' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'durg_header_section',
        'default'     => '#ffffff',
    )
);

// Header nav menu color field
Epsilon_Customizer::add_field(
    'durg_header_menu_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header menu color', 'durg' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'durg_header_section',
        'default'     => '#191d34',
    )
);

// Header nav menu hover color field
Epsilon_Customizer::add_field(
    'durg_header_menu_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header menu hover color', 'durg' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'durg_header_section',
        'default'     => '#ff5e13',
    )
);

/***********************************
 * Blog Section Fields
 ***********************************/
 
// Post excerpt length field
Epsilon_Customizer::add_field(
    'durg_excerpt_length',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Set post excerpt length', 'durg' ),
        'description' => esc_html__( 'Set post excerpt length.', 'durg' ),
        'section'     => 'durg_blog_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => '30',
    )
);

// Blog single page social share icon
Epsilon_Customizer::add_field(
    'durg_blog_meta',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog page post meta show/hide', 'durg' ),
        'section'     => 'durg_blog_section',
        'default'     => true
    )
);
Epsilon_Customizer::add_field(
    'durg_like_btn',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Single Page Like Button show/hide', 'durg' ),
        'section'     => 'durg_blog_section',
        'default'     => true
    )
);
Epsilon_Customizer::add_field(
    'durg_blog_share',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Single Page Share show/hide', 'durg' ),
        'section'     => 'durg_blog_section',
        'default'     => true
    )
);


/***********************************
 * Portfolio Section Fields
 ***********************************/
 
// Portfolio related project toggle
Epsilon_Customizer::add_field(
    'durg_portfolio_single_rp',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Portfolio related project Show/Hide', 'durg' ),
        'section'     => 'durg_portfolio_section',
        'default'     => true,
    )
);

// Portfolio related project's section title
Epsilon_Customizer::add_field(
    'durg_portfolio_related_projects_sec_title',
    array(
        'type'              => 'text',
        'label'             => esc_html__( 'Related project\'s section title', 'durg' ),
        'section'           => 'durg_portfolio_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => esc_html__( 'Related work', 'durg' ),
    )
);

// Portfolio related project's item
Epsilon_Customizer::add_field(
    'durg_portfolio_related_projects_item',
    array(
        'type'              => 'text',
        'label'             => esc_html__( 'Related project\'s item', 'durg' ),
        'section'           => 'durg_portfolio_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => absint(3),
    )
);

/***********************************
 * CTA Section Fields
 ***********************************/

 // Section title
Epsilon_Customizer::add_field(
    'durg_cta_section_title',
    array(
        'type'              => 'textarea',
        'label'             => esc_html__( 'Section Title', 'durg' ),
        'section'           => 'durg_cta_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Let\'s talk about your <br>industrial problems'
    )
);

// Section text
Epsilon_Customizer::add_field(
    'durg_cta_section_text',
    array(
        'type'              => 'textarea',
        'label'             => esc_html__( 'Section Text', 'durg' ),
        'section'           => 'durg_cta_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Waters make fish every without firmament saw had. <br>Morning air subdue very one. Whales grass is fish <br> whales winged.'
    )
);

// Button Label
Epsilon_Customizer::add_field(
    'durg_cta_section_btn_label',
    array(
        'type'              => 'text',
        'label'             => esc_html__( 'Button Label', 'durg' ),
        'section'           => 'durg_cta_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => esc_html__( 'Discuss now', 'durg' ),
    )
);

// Button URL
Epsilon_Customizer::add_field(
    'durg_cta_section_btn_url',
    array(
        'type'              => 'text',
        'label'             => esc_html__( 'Button URL', 'durg' ),
        'section'           => 'durg_cta_section',
        'sanitize_callback' => 'wp_kses_post',
        'default'           => '#'
    )
);


/***********************************
 * Contact Details Section
 ***********************************/

//Contact fields
Epsilon_Customizer::add_field(
	'durg_contact_details_section_fields',
	array(
		'type'         => 'epsilon-repeater',
		'section'      => 'durg_contact_details_section',
		'label'        => esc_html__( 'Contact Sections', 'durg' ),
        'button_label' => esc_html__( 'Add new item', 'durg' ),
		'row_label'    => array(
			'type'     => 'field',
			'field'    => 'contact_item_title',
		),
		'default'      => [
            [
                'contact_item_title'    => esc_html__( 'Our Location', 'durg' ),
                'contact_item_txt'      => '127, Manchaster city, London <br>86/A, green street, California, USA',
                'anchor_text'           => 'Get Direction',
                'anchor_url'            => '#',
            ],
            [
                'contact_item_title'    => esc_html__( 'Opening hour', 'durg' ),
                'contact_item_txt'      => 'Mon-Fri (9.00-19.00) <br>Sat-Sun',
                'anchor_text'           => 'Closed',
                'anchor_url'            => '#',
            ],
            [
                'contact_item_title'    => esc_html__( 'Drop a message', 'durg' ),
                'contact_item_txt'      => 'support@durg.com <br>456 267 3572',
                'anchor_text'           => 'Mail Us',
                'anchor_url'            => '#',
            ],
        ],
		'fields'       => array(
			'contact_item_title'        => array(
				'label'                 => esc_html__( 'Item Title', 'durg' ),
				'type'                  => 'text',
				'sanitize_callback'     => 'wp_kses_post',
				'default'               => 'Our Location',
			),
			'contact_item_txt'          => array(
				'label'                 => esc_html__( 'Item Text', 'durg' ),
				'type'                  => 'textarea',
				'sanitize_callback'     => 'wp_kses_post',
				'default'               => '127, Manchaster city, London <br>86/A, green street, California, USA',
			),			
			'anchor_text'          => array(
				'label'                 => esc_html__( 'Anchor Text', 'durg' ),
				'type'                  => 'text',
				'sanitize_callback'     => 'wp_kses_post',
				'default'               => 'Get Direction',
			),			
			'anchor_url'          => array(
				'label'                 => esc_html__( 'Anchor URL', 'durg' ),
				'type'                  => 'text',
				'sanitize_callback'     => 'sanitize_text_field',
				'default'               => '#',
			),			
		),
	)
);





 
/***********************************
 * 404 Page Section Fields
 ***********************************/

// 404 text #1 field
Epsilon_Customizer::add_field(
    'durg_fof_titleone',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #1', 'durg' ),
        'section'           => 'durg_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #2 field
Epsilon_Customizer::add_field(
    'durg_fof_titletwo',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #2', 'durg' ),
        'section'           => 'durg_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #1 color field
Epsilon_Customizer::add_field(
    'durg_fof_textone_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #1 Color', 'durg' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'durg_fof_section',
        'default'     => '#000000',
    )
);
// 404 text #2 color field
Epsilon_Customizer::add_field(
    'durg_fof_texttwo_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #2 Color', 'durg' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'durg_fof_section',
        'default'     => '#656565',
    )
);
// 404 background color field
Epsilon_Customizer::add_field(
    'durg_fof_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Page Background Color', 'durg' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'durg_fof_section',
        'default'     => '#fff',
    )
);

/***********************************
 * Footer Section Fields
 ***********************************/

// Footer Widget section
Epsilon_Customizer::add_field(
    'footer_widget_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Widget Section', 'durg' ),
        'section'     => 'durg_footer_section',

    )
);

// Footer widget toggle field
Epsilon_Customizer::add_field(
    'durg_footer_widget_toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Footer widget show/hide', 'durg' ),
        'description' => esc_html__( 'Toggle to display footer widgets.', 'durg' ),
        'section'     => 'durg_footer_section',
        'default'     => true,
    )
);

// Footer Copyright section
Epsilon_Customizer::add_field(
    'durg_footer_copyright_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Copyright Section', 'durg' ),
        'section'     => 'durg_footer_section',
        'default'     => true,

    )
);

// Footer copyright text field
$url = 'https://colorlib.com/';
$copyText = sprintf( __( 'Theme by %s colorlib %s Copyright &copy; %s  |  All rights reserved.', 'durg' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );
Epsilon_Customizer::add_field(
    'durg_footer_copyright_text',
    array(
        'type'        => 'epsilon-text-editor',
        'label'       => esc_html__( 'Footer copyright text', 'durg' ),
        'section'     => 'durg_footer_section',
        'default'     => wp_kses_post( $copyText ),
    )
);

// Footer widget background color field
Epsilon_Customizer::add_field(
    'durg_footer_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Background Color', 'durg' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'durg_footer_section',
        'default'     => '#ffffff',
    )
);

// Footer widget text color field
Epsilon_Customizer::add_field(
    'durg_footer_widget_heading_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Heading Color', 'durg' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'durg_footer_section',
        'default'     => '#020c26',
    )
);

// Footer widget text color field
Epsilon_Customizer::add_field(
    'durg_footer_widget_text_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Text Color', 'durg' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'durg_footer_section',
        'default'     => '#5c5c5c',
    )
);

// Footer widget anchor color field
Epsilon_Customizer::add_field(
    'durg_footer_widget_anchor_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Color', 'durg' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'durg_footer_section',
        'default'     => '#5c5c5c',
    )
);

// Footer widget anchor hover color field
Epsilon_Customizer::add_field(
    'durg_footer_widget_anchor_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Hover Color', 'durg' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'durg_footer_section',
        'default'     => '#ff5e13',
    )
);

