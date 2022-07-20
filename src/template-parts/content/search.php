<?php
/**
 * The template for displaying SEARCH RESULTS content
 *
 * @package WordPress
 * @subpackage TMS
 * @since TMS 1.0.0
 * @version TMS 1.0.0
 *
 */
?>


<header class="search-header">

	<h1 class="<?php echo $class_title; ?>"><?php _e( 'Search results for:', 'tms-theme' ); ?> <?php echo strtoupper( get_search_query() ); ?></h1>

	<?php get_template_part( 'searchform' ); ?>

</header>


<?php if ( '' != get_search_query() ) : ?>

	<div class="search-content">

		<?php
		if ( have_posts() ) :

			while ( have_posts() ) :

				the_post();

				get_template_part( 'template-parts/content/search-result' );

			endwhile;

		else :

			get_template_part( 'template-parts/content/none' );

		endif;

		wp_reset_postdata();
		wp_reset_query();

		get_template_part( 'template-parts/pagination' );
		?>

	</div>

<?php endif; ?>
