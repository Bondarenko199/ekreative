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
			'menu-1' => esc_html__( 'header-menu', 'luna' ),
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

	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'tether', get_template_directory_uri() . '/js/tether.min.js', array(), false, true );

	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), false, true );

	wp_enqueue_script( 'owl.carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), false, true );

	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), false, true );
}

add_action( 'wp_enqueue_scripts', 'luna_scripts' );

//custom post types

function register_my_post_types() {

	$labels = array(
		'name'               => _x( 'Offers', 'post type general name', 'luna' ),
		'singular_name'      => _x( 'Offer', 'post type singular name', 'luna' ),
		'menu_name'          => _x( 'Offers', 'admin menu', 'luna' ),
		'name_admin_bar'     => _x( 'Offer', 'add new on admin bar', 'luna' ),
		'add_new'            => _x( 'Add New', 'offer', 'luna' ),
		'add_new_item'       => __( 'Add New Offer', 'luna' ),
		'new_item'           => __( 'New Offer', 'luna' ),
		'edit_item'          => __( 'Edit Offer', 'luna' ),
		'view_item'          => __( 'View Offer', 'luna' ),
		'all_items'          => __( 'All Offers', 'luna' ),
		'search_items'       => __( 'Search Offers', 'luna' ),
		'parent_item_colon'  => __( 'Parent Offers:', 'luna' ),
		'not_found'          => __( 'No offers found.', 'luna' ),
		'not_found_in_trash' => __( 'No offer found in Trash.', 'luna' )
	);
	$args   = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'luna' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'offer' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'taxonomies'         => array( 'category' ),
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'offer', $args );

	$labels = array(
		'name'               => _x( 'Works', 'post type general name', 'gh_exam' ),
		'singular_name'      => _x( 'Work', 'post type singular name', 'gh_exam' ),
		'menu_name'          => _x( 'Works', 'admin menu', 'gh_exam' ),
		'name_admin_bar'     => _x( 'Work', 'add new on admin bar', 'gh_exam' ),
		'add_new'            => _x( 'Add New', 'work', 'gh_exam' ),
		'add_new_item'       => __( 'Add New Work', 'gh_exam' ),
		'new_item'           => __( 'New Work', 'gh_exam' ),
		'edit_item'          => __( 'Edit Work', 'gh_exam' ),
		'view_item'          => __( 'View Work', 'gh_exam' ),
		'all_items'          => __( 'All Works', 'gh_exam' ),
		'search_items'       => __( 'Search Works', 'gh_exam' ),
		'parent_item_colon'  => __( 'Parent Works:', 'gh_exam' ),
		'not_found'          => __( 'No works found.', 'gh_exam' ),
		'not_found_in_trash' => __( 'No works found in Trash.', 'gh_exam' )
	);
	$args   = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'gh_exam' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'work' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'taxonomies'         => array( 'category' ),
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'work', $args );

	$labels = array(
		'name'               => _x( 'Slides', 'post type general name', 'luna' ),
		'singular_name'      => _x( 'Slide', 'post type singular name', 'luna' ),
		'menu_name'          => _x( 'Slides', 'admin menu', 'luna' ),
		'name_admin_bar'     => _x( 'Slide', 'add new on admin bar', 'luna' ),
		'add_new'            => _x( 'Add New', 'slide', 'luna' ),
		'add_new_item'       => __( 'Add New Slide', 'luna' ),
		'new_item'           => __( 'New Slide', 'luna' ),
		'edit_item'          => __( 'Edit Slide', 'luna' ),
		'view_item'          => __( 'View Slide', 'luna' ),
		'all_items'          => __( 'All Slides', 'luna' ),
		'search_items'       => __( 'Search Slides', 'luna' ),
		'parent_item_colon'  => __( 'Parent Slides:', 'luna' ),
		'not_found'          => __( 'No slides found.', 'luna' ),
		'not_found_in_trash' => __( 'No slides found in Trash.', 'luna' )
	);
	$args   = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'luna' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'slide' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'taxonomies'         => array( 'category' ),
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'slide', $args );
}

add_action( 'init', 'register_my_post_types' );

/**
 * Customizer template for this theme.
 */

require get_template_directory() . '/inc/customizer.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';
