<?php
/**
 * The template part for displaying PAGINATION template part
 *
 * @package WordPress
 * @subpackage TMS
 * @since TMS 1.0.0
 * @version TMS 1.0.0
 *
 */


if ( is_singular() ) :

	echo '<nav class="pagination single-pagination">';

		$prev_post = get_adjacent_post( false, '', true );
		if( !empty( $prev_post ) ) :
			echo '<a class="nav-previous" href="' . get_permalink( $prev_post->ID ) . '" title="' . $prev_post->post_title . '">' . tms_get_svg_icon( array( 'icon' => 'left' ) ) . ' <span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'tms' ) . '</span> <span class="screen-reader-text"> ' . __( 'Previous post:', 'tms' ) . ' ' . $prev_post->post_title . '</span></a>';
		endif;

		$next_post = get_adjacent_post( false, '', false );
		if( !empty( $next_post ) ) :
			echo '<a class="nav-next" href="' . get_permalink( $next_post->ID ) . '" title="' . $next_post->post_title . '"><span class="meta-nav" aria-hidden="true">' . __( 'Next', 'tms' ) . '</span> ' . tms_get_svg_icon( array( 'icon' => 'right' ) ) . ' <span class="screen-reader-text"> ' . __( 'Next post:', 'tms' ) . ' ' . $next_post->post_title . '</span></a>';
		endif;

	echo '</nav>';


else :

	echo '<nav class="pagination archive-pagination">';

		echo paginate_links( array(

			'prev_text' =>  tms_get_svg_icon( array( 'icon' => 'left' ) ) . ' <span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'tms' ) . '</span> ' . '<span class="screen-reader-text"> ' . __( 'Previous post:', 'tms' ) . '</span>',

			'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'tms' ) . '</span> ' . tms_get_svg_icon( array( 'icon' => 'right' ) ) . ' <span class="screen-reader-text"> ' . __( 'Next post:', 'tms' ) . '</span>',
		) );
	echo '</nav>';

endif;
