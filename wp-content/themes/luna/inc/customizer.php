<?php
/**
 * luna Theme Customizer
 *
 * @package luna
 */

function luna_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'luna_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'luna_customize_partial_blogdescription',
		) );
	}

	/*--------------------------------------PANELS--------------------------------------*/

	$wp_customize->add_panel( 'home_page_options', array(
		'title'    => __( 'Home page options', 'luna' ),
		'priority' => 10
	) );

	/*-------------------------------Home Section 1-------------------------------*/

	$wp_customize->add_section( 'section_1', array(
		'title'    => __( 'Section 1', 'luna' ),
		'panel'    => 'home_page_options',
		'priority' => 10
	) );

	$wp_customize->add_setting( 'section_1_bg', array(
		'default'   => '#4ca9cc',
		'transport' => 'refresh'
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'section_1_bg', array(
		'label'    => __( 'Intro background', 'luna' ),
		'section'  => 'section_1',
		'settings' => 'section_1_bg'
	) ) );

	/*-------------------------------Home Section 2-------------------------------*/

	$wp_customize->add_section( 'section_2', array(
		'title'    => __( 'Section 2', 'luna' ),
		'panel'    => 'home_page_options',
		'priority' => 20
	) );

	$wp_customize->add_setting( 'section_2_headline', array(
		'default'   => 'Headline',
		'transport' => 'refresh'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'section_2_headline', array(
		'label'    => __( 'Section headline', 'luna' ),
		'section'  => 'section_2',
		'settings' => 'section_2_headline'
	) ) );

	$wp_customize->add_setting( 'section_2_text', array(
		'default'   => 'Text',
		'transport' => 'refresh'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'section_2_text', array(
		'label'    => __( 'Section header text', 'luna' ),
		'section'  => 'section_2',
		'type'     => 'textarea',
		'settings' => 'section_2_text'
	) ) );

	$wp_customize->add_setting( 'section_2_image_1', array(
		'default'   => 'Headline',
		'transport' => 'refresh'
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'section_2_image_1', array(
		'label'    => __( 'Section headline', 'luna' ),
		'section'  => 'section_2',
		'settings' => 'section_2_image_1'
	) ) );

	$wp_customize->add_setting( 'section_2_image_2', array(
		'default'   => 'Headline',
		'transport' => 'refresh'
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'section_2_image_2', array(
		'label'    => __( 'Section headline', 'luna' ),
		'section'  => 'section_2',
		'settings' => 'section_2_image_2'
	) ) );

	$wp_customize->add_setting( 'section_2_image_3', array(
		'default'   => 'Headline',
		'transport' => 'refresh'
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'section_2_image_3', array(
		'label'    => __( 'Section headline', 'luna' ),
		'section'  => 'section_2',
		'settings' => 'section_2_image_3'
	) ) );

	$wp_customize->add_setting( 'section_2_image_4', array(
		'default'   => 'Headline',
		'transport' => 'refresh'
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'section_2_image_4', array(
		'label'    => __( 'Section headline', 'luna' ),
		'section'  => 'section_2',
		'settings' => 'section_2_image_4'
	) ) );

	/*-------------------------------Home Section 3-------------------------------*/

	$wp_customize->add_section( 'section_3', array(
		'title'    => __( 'Section 3', 'luna' ),
		'panel'    => 'home_page_options',
		'priority' => 30
	) );

	$wp_customize->add_setting( 'section_3_header_headline', array(
		'default'   => 'Headline',
		'transport' => 'refresh'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'section_3_header_headline', array(
		'label'    => __( 'Section headline', 'luna' ),
		'section'  => 'section_3',
		'settings' => 'section_3_header_headline'
	) ) );

	$wp_customize->add_setting( 'section_3_custom_button_link', array(
		'transport' => 'refresh'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'section_3_custom_button_link', array(
		'label'    => __( 'Button custom link', 'luna' ),
		'section'  => 'section_3',
		'settings' => 'section_3_custom_button_link'
	) ) );

	$wp_customize->add_setting( 'section_3_button_link', array(
		'transport' => 'refresh'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'section_3_button_link', array(
		'label'    => __( 'Button link', 'luna' ),
		'section'  => 'section_3',
		'type'     => 'dropdown-pages',
		'settings' => 'section_3_button_link'
	) ) );

	$wp_customize->add_setting( 'section_3_button_text', array(
		'default'   => 'show more',
		'transport' => 'refresh'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'section_3_button_text', array(
		'label'    => __( 'Button text', 'luna' ),
		'section'  => 'section_3',
		'settings' => 'section_3_button_text'
	) ) );

	/*-------------------------------Footer-------------------------------*/

	$wp_customize->add_section( 'footer_options', array(
		'title'    => __( 'Footer options', 'luna' ),
		'priority' => 10
	) );

	$wp_customize->add_setting( 'footer_logo', array(
		'default'   => '',
		'transport' => 'refresh'
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_logo', array(
		'label'    => __( 'Footer logo', 'luna' ),
		'section'  => 'footer_options',
		'settings' => 'footer_logo'
	) ) );

	$wp_customize->add_setting( 'footer_text', array(
		'default'   => '',
		'transport' => 'refresh'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_text', array(
		'label'    => __( 'Footer text', 'luna' ),
		'section'  => 'footer_options',
		'type'     => 'textarea',
		'settings' => 'footer_text'
	) ) );

	$wp_customize->add_setting( 'contact_button_text', array(
		'default'   => '',
		'transport' => 'refresh'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_button_text', array(
		'label'    => __( 'Contact button text', 'luna' ),
		'section'  => 'footer_options',
		'settings' => 'contact_button_text'
	) ) );
}

add_action( 'customize_register', 'luna_customize_register' );

function customizer_styles() {
	?>
    <style>
        .intro {
            background: url("<?php echo get_theme_mod('section_1_bg') ?>") no-repeat 50% 50%;
            background-size: cover;
        }
    </style>
	<?php
}

add_action( 'wp_head', 'customizer_styles' );

function luna_customize_partial_blogname() {
	bloginfo( 'name' );
}

function luna_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

function luna_customize_preview_js() {
	wp_enqueue_script( 'luna-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}

add_action( 'customize_preview_init', 'luna_customize_preview_js' );
