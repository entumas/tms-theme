<?php
/**
 * The template for displaying SEARCH FORM
 *
 * @package WordPress
 * @subpackage TMS-theme
 * @since TMS-theme 1.0.0
 * @version TMS-theme 1.0.0
 *
 */
?>


<form class="search-form" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">

	<label class="search-label screen-reader-text" for="s"><?php _e( 'Search', 'tms-theme' ); ?></label>

	<input id="s" class="search-input validate" type="search" name="s" placeholder="<?php echo esc_attr__( 'Search...', 'tms-theme' ); ?>" value="<?php echo get_search_query(); ?>" title="<?php echo esc_attr__( 'Search:', 'tms-theme' ); ?>" autocomplete="off" onkeyup="fetch()">

	<button type="submit" class="search-button" value="<?php echo esc_attr__( 'Search', 'tms-theme' ); ?>"><?php tms_svg_icon( array( 'icon' => 'search' ) ); ?></button>

</form>
