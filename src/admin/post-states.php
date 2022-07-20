<?php
/**
 * Admin -> Post states
 *
 * @package WordPress
 * @subpackage TMS
 * @since TMS 1.0.0
 * @version TMS 1.0.0
 *
 */


if ( ! function_exists( 'tms_post_states' ) ) :

	add_filter( 'display_post_states', 'tms_post_states', 10, 2 );

	function tms_post_states( $states, $post ) {


		// Modules
		if (
			( 'page' == get_post_type( $post->ID ) )
				&&
			( 'page-templates/modules.php' == get_page_template_slug( $post->ID ) )
		) :
			$states[] = __( 'Modules', 'tms' );
		endif;


		return $states;

	}

endif;
