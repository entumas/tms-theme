<?php
/**
 * TMS functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage TMS
 * @since TMS 1.0.0
 * @version TMS 1.0.0
 *
 */





// Scripts
// ========================================

// Frontend

if ( ! is_admin() ) add_action( 'wp_enqueue_scripts', 'tms_scripts' );

if ( ! function_exists( 'tms_scripts' ) ) :

	function tms_scripts() {


		// CSS

		wp_enqueue_style(
			'styles',
			get_template_directory_uri() . '/css/styles.css',
			array(),
			wp_get_theme()->get( 'Version' ),
			'all'
		);



		// JS

		if ( ! is_404() ) :

			wp_enqueue_script( 'jquery' );

			wp_enqueue_script(
				'scripts',
				get_template_directory_uri() . '/js/scripts.js',
				array( 'jquery' ),
				wp_get_theme()->get( 'Version' ),
				true
			);

		endif;

	}

endif;


// Login

if ( $GLOBALS['pagenow'] === 'wp-login.php' ) add_action( 'login_enqueue_scripts', 'tms_login_scripts' );

if ( ! function_exists( 'tms_login_scripts' ) ) :

	function tms_login_scripts() {

		wp_enqueue_style(
			'login-styles',
			get_template_directory_uri() . '/css/login.css',
			array(), // array( 'custom-properties' ),
			wp_get_theme()->get( 'Version' ),
			'all'
		);

	}

endif;





// Setup
// ========================================

add_action( 'after_setup_theme', 'tms_setup' );

if ( ! function_exists( 'tms_setup' ) ) :

	function tms_setup () {

		// Textdomain
		load_theme_textdomain( 'tms', get_template_directory() . '/languages' );


		//Thumbnails
		add_theme_support( 'post-thumbnails' );
		// add_image_size( 'card', 400, 250, array( 'center', 'center' ) );
		remove_image_size( '1536x1536' );
		remove_image_size( '2048x2048' );

		// HTML5 support
		add_theme_support( 'html5', [
			'comment-list',
			'comment-form',
			'search-form',
			'gallery',
			'caption',
		] );


		// <head> dynamic title
		add_theme_support( 'title-tag' );

		// RSS Feeds
		add_theme_support( 'automatic-feed-links' );

	}

endif;





// Menus
// ========================================

add_action( 'init', 'tms_menus' );

if ( ! function_exists( 'tms_menus' ) ) :

	function tms_menus () {

		register_nav_menus( array(
			'main'     => __( 'Main menu', 'tms' ),
			'sidenav'  => __( 'Sidenav menu', 'tms' ),
			'top'      => __( 'Top menu', 'tms' ),
			'footer'   => __( 'Footer menu', 'tms' ),
			'legal'    => __( 'Legal menu', 'tms' ),
			'social'   => __( 'Social menu', 'tms' ),
			'language' => __( 'Language menu', 'tms' ),
		) );

	}

endif;





// Admin
// ========================================

require_once get_template_directory() . '/admin/post-states.php';





// Includes
// ========================================

require_once get_template_directory() . '/inc/favicon.php';
