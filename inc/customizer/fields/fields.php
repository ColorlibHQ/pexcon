<?php 
/**
 * @Packge     : Pexcon
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
    'pexcon_theme_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Theme Color', 'pexcon' ),
        'description' => esc_html__( 'Select the theme color.', 'pexcon' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'pexcon_general_section',
        'default'     => '#ff5e13',
    )
);

// Header right button field
Epsilon_Customizer::add_field(
    'pexcon_header_btn',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Header button show/hide', 'pexcon' ),
        'section'     => 'pexcon_header_section',
        'default'     => true
    )
);

// Header right button label
Epsilon_Customizer::add_field(
    'header_btn_label',
    array(
        'type'              => 'text',
        'label'             => esc_html__( 'Header button label', 'pexcon' ),
        'section'           => 'pexcon_header_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => esc_html__( 'Get a Quote', 'pexcon' ),
    )
);

// Header right button url
Epsilon_Customizer::add_field(
    'booking_btn_url',
    array(
        'type'              => 'text',
        'label'             => esc_html__( 'Header button url', 'pexcon' ),
        'section'           => 'pexcon_header_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => '#',
    )
);

// Header right button hover background color
Epsilon_Customizer::add_field(
    'pexcon_booking_btn_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Button Hover BG Color', 'pexcon' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'pexcon_header_section',
        'default'     => '#001b5e'
    )
);

// Header color sections
Epsilon_Customizer::add_field(
    'header_color_section',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Header Color Section', 'pexcon' ),
        'section'     => 'pexcon_header_section',

    )
);
 
// Header background color field
Epsilon_Customizer::add_field(
    'pexcon_header_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Sticky Header BG Color', 'pexcon' ),
        'description' => esc_html__( 'Select the header background color.', 'pexcon' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'pexcon_header_section',
        'default'     => '#ffffff',
    )
);

// Header nav menu color field
Epsilon_Customizer::add_field(
    'pexcon_header_menu_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header menu color', 'pexcon' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'pexcon_header_section',
        'default'     => '#000000',
    )
);

// Header nav menu hover color field
Epsilon_Customizer::add_field(
    'pexcon_header_menu_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header menu hover color', 'pexcon' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'pexcon_header_section',
        'default'     => '#ff5e13',
    )
);

// Header dropdown menu bg color field
Epsilon_Customizer::add_field(
    'pexcon_header_drop_menu_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Dropdown menu BG color', 'pexcon' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'pexcon_header_section',
        'default'     => '#fafafa',
    )
);

// Header dropdown menu color field
Epsilon_Customizer::add_field(
    'pexcon_header_drop_menu_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Dropdown menu color', 'pexcon' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'pexcon_header_section',
        'default'     => '#000000',
    )
);

// Header dropdown menu hover color field
Epsilon_Customizer::add_field(
    'pexcon_header_drop_menu_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Dropdown menu hover color', 'pexcon' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'pexcon_header_section',
        'default'     => '#ff5e13',
    )
);

/***********************************
 * Blog Section Fields
 ***********************************/
 
// Post excerpt length field
Epsilon_Customizer::add_field(
    'pexcon_excerpt_length',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Set post excerpt length', 'pexcon' ),
        'description' => esc_html__( 'Set post excerpt length.', 'pexcon' ),
        'section'     => 'pexcon_blog_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => '30',
    )
);

// Blog single page social share icon
Epsilon_Customizer::add_field(
    'pexcon_blog_meta',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog page post meta show/hide', 'pexcon' ),
        'section'     => 'pexcon_blog_section',
        'default'     => true
    )
);
Epsilon_Customizer::add_field(
    'pexcon_like_btn',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Single Page Like Button show/hide', 'pexcon' ),
        'section'     => 'pexcon_blog_section',
        'default'     => true
    )
);
Epsilon_Customizer::add_field(
    'pexcon_blog_share',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Single Page Share show/hide', 'pexcon' ),
        'section'     => 'pexcon_blog_section',
        'default'     => true
    )
);

/***********************************
 * 404 Page Section Fields
 ***********************************/

// 404 text #1 field
Epsilon_Customizer::add_field(
    'pexcon_fof_titleone',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #1', 'pexcon' ),
        'section'           => 'pexcon_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #2 field
Epsilon_Customizer::add_field(
    'pexcon_fof_titletwo',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #2', 'pexcon' ),
        'section'           => 'pexcon_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #1 color field
Epsilon_Customizer::add_field(
    'pexcon_fof_textone_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #1 Color', 'pexcon' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'pexcon_fof_section',
        'default'     => '#000000',
    )
);
// 404 text #2 color field
Epsilon_Customizer::add_field(
    'pexcon_fof_texttwo_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #2 Color', 'pexcon' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'pexcon_fof_section',
        'default'     => '#656565',
    )
);
// 404 background color field
Epsilon_Customizer::add_field(
    'pexcon_fof_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Page Background Color', 'pexcon' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'pexcon_fof_section',
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
        'label'       => esc_html__( 'Footer Widget Section', 'pexcon' ),
        'section'     => 'pexcon_footer_section',

    )
);

// Footer widget toggle field
Epsilon_Customizer::add_field(
    'pexcon_footer_widget_toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Footer widget show/hide', 'pexcon' ),
        'description' => esc_html__( 'Toggle to display footer widgets.', 'pexcon' ),
        'section'     => 'pexcon_footer_section',
        'default'     => true,
    )
);

// Footer Copyright section
Epsilon_Customizer::add_field(
    'pexcon_footer_copyright_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Copyright Section', 'pexcon' ),
        'section'     => 'pexcon_footer_section',
        'default'     => true,

    )
);

// Footer copyright text field
// Copy right text
$url = 'https://colorlib.com/';
$copyText = sprintf( __( 'Theme by %s colorlib %s Copyright &copy; %s  |  All rights reserved.', 'pexcon' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );
Epsilon_Customizer::add_field(
    'pexcon_footer_copyright_text',
    array(
        'type'        => 'epsilon-text-editor',
        'label'       => esc_html__( 'Footer copyright text', 'pexcon' ),
        'section'     => 'pexcon_footer_section',
        'default'     => wp_kses_post( $copyText ),
    )
);

// Footer widget background color field
Epsilon_Customizer::add_field(
    'pexcon_footer_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Background Color', 'pexcon' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'pexcon_footer_section',
        'default'     => '#091b27',
    )
);

// Footer widget text color field
Epsilon_Customizer::add_field(
    'pexcon_footer_widget_text_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Text Color', 'pexcon' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'pexcon_footer_section',
        'default'     => '#83868c',
    )
);

// Footer widget title color field
Epsilon_Customizer::add_field(
    'pexcon_footer_widget_title_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Widget Title Color', 'pexcon' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'pexcon_footer_section',
        'default'     => '#ffffff',
    )
);

// Footer widget anchor color field
Epsilon_Customizer::add_field(
    'pexcon_footer_widget_anchor_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Color', 'pexcon' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'pexcon_footer_section',
        'default'     => '#83868c',
    )
);

// Footer widget anchor hover color field
Epsilon_Customizer::add_field(
    'pexcon_footer_widget_anchor_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Hover Color', 'pexcon' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'pexcon_footer_section',
        'default'     => '#ff5e13',
    )
);

