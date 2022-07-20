<?php
/**
 * Template Name: Modules
 *
 * The template for displaying MODULES
 *
 * @package WordPress
 * @subpackage TMS
 * @since TMS 1.0.0
 * @version TMS 1.0.0
 *
 */


get_header();


if ( have_posts() ) :

	while ( have_posts() ) :

		the_post();

		get_template_part( 'template-parts/content/modules' );

	endwhile;

else :

	get_template_part( 'template-parts/content/none' );

endif;

wp_reset_postdata();
wp_reset_query();


get_footer();
