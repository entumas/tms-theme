<?php
/**
 * The template for displaying ARCHIVES, SINGLES and PAGES
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage TMS
 * @since TMS 1.0.0
 * @version TMS 1.0.0
 *
 */


get_header();


if ( have_posts() && ! is_search() ) :

	while ( have_posts() ) :

		the_post();


		if ( is_home() || is_archive() ) :

			get_template_part( 'template-parts/content/archive' );

		elseif ( is_single() ) :

			get_template_part( 'template-parts/content/single' );
			get_template_part( 'template-parts/pagination' );

			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		elseif ( is_page() ) :

			get_template_part( 'template-parts/content/page' );

		endif;

	endwhile;


elseif ( is_search() ) :
	get_template_part( 'template-parts/content/search' );

elseif ( is_404() ) :
	get_template_part( 'template-parts/content/404' );

else :
	get_template_part( 'template-parts/content/none' );
endif;


wp_reset_postdata();
wp_reset_query();


if ( is_home() || is_archive() ) :
	get_template_part( 'template-parts/pagination' );
endif;


get_footer();
