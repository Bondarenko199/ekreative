<?php
/**
 * luna functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package luna
 */

if ( ! function_exists( 'luna_setup' ) ) :
	function luna_setup() {
		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'luna' ),
		) );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'luna_setup' );

function luna_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'luna_content_width', 640 );
}

add_action( 'after_setup_theme', 'luna_content_width', 0 );

function luna_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'luna' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'luna' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}

add_action( 'widgets_init', 'luna_widgets_init' );

function luna_scripts() {
	wp_enqueue_style( 'luna-style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'luna_scripts' );

require get_template_directory() . '/inc/customizer.php';
