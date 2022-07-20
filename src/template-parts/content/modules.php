<?php
/**
 * The template part for displaying CASE content
 *
 * @package WordPress
 * @subpackage TMS
 * @since TMS 1.0.0
 * @version TMS 1.0.0
 *
 */


if ( have_rows( 'modules' ) ):

	while ( have_rows( 'modules' ) ) :

		the_row();


		if ( get_row_layout() == 'module_1' ) :

			get_template_part( 'template-parts/acf/module_1' );

		elseif ( get_row_layout() == 'module_2' ) :

			get_template_part( 'template-parts/acf/module_2' );

		elseif ( get_row_layout() == 'module_3' ) :

			get_template_part( 'template-parts/acf/module_3' );

		endif;


	endwhile;

endif;
