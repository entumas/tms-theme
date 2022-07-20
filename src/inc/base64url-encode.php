<?php
/**
 * Inc -> Base64url code
 *
 * @package WordPress
 * @subpackage TMS-theme
 * @since TMS-theme 1.0.0
 * @version TMS-theme 1.0.0
 *
 */



// Encode ========================================

if ( ! function_exists( 'mrfino_base64url_encode' ) ) :

	function mrfino_base64url_encode( $data ) {

		return rtrim( strtr( base64_encode( $data ), '+/', '-_' ), '=' );

	}

endif;



// Decode ========================================

if ( ! function_exists( 'mrfino_base64url_decode' ) ) :

	function mrfino_base64url_decode( $data ) {

		return base64_decode( str_pad( strtr( $data, '-_', '+/' ), strlen( $data ) % 4, '=', STR_PAD_RIGHT ) );

	}

endif;
