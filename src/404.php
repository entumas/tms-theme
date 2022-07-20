<?php
/**
 * The template for ERROR-404
 *
 * @package WordPress
 * @subpackage TMS-theme
 * @since TMS-theme 1.0.0
 * @version TMS-theme 1.0.0
 *
 */

get_header();
?>


<p><?php _e( 'It may help:', 'tms-theme' ); ?></p>

<?php get_search_form(); ?>

<p><a class="btn btn-primary" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php _e( 'Go to the Home', 'tms-theme' ); ?></a></p>


<?php get_footer(); ?>
