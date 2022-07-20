<?php
/**
 * Inc -> Favicon
 *
 * @package WordPress
 * @subpackage TMS-theme
 * @since TMS-theme 1.0.0
 * @version TMS-theme 1.0.0
 *
 */


if ( ! function_exists( 'tms_favicon' ) ) :

	add_action( 'wp_head', 'tms_favicon' );
	add_action( 'login_head', 'tms_favicon' );
	add_action( 'admin_head', 'tms_favicon' );

	function tms_favicon() {

		$admin = ( ! is_admin() ) ? '' : '-admin';

		echo '<link rel="shortcut icon" href="' . get_stylesheet_directory_uri() . '/images/favicon' . $admin . '.png" />';

	}

endif;
