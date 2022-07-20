<?php
/**
 * The template for displaying SEARCH FORM
 *
 * @package WordPress
 * @subpackage TMS
 * @since TMS 1.0.0
 * @version TMS 1.0.0
 *
 */
?>


<form class="search-form" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">

	<label class="search-label screen-reader-text" for="s"><?php _e( 'Search', 'tms' ); ?></label>

	<input id="s" class="search-input validate" type="search" name="s" placeholder="<?php echo esc_attr__( 'Search...', 'tms' ); ?>" value="<?php echo get_search_query(); ?>" title="<?php echo esc_attr__( 'Search:', 'tms' ); ?>" autocomplete="off" onkeyup="fetch()">

	<button type="submit" class="search-button" value="<?php echo esc_attr__( 'Search', 'tms' ); ?>"><?php tms_svg_icon( array( 'icon' => 'search' ) ); ?></button>

</form>
