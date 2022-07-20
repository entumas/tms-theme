<?php
/**
 * The template part for displaying NONE content
 *
 * @package WordPress
 * @subpackage TMS-theme
 * @since TMS-theme 1.0.0
 * @version TMS-theme 1.0.0
 *
 */
?>


<p class="content-none"><?php _e( 'Sorry! The requested content don\'t exist. 🙄', 'tms-theme' ); ?></p>

<?php if ( ! is_search() ) : ?>

	<p class="text-align-center"><?php _e( 'Make a search to find what you want.', 'tms-theme' ); ?></p>

	<?php get_search_form(); ?>

<?php endif; ?>
