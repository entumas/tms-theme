<?php
/**
 * The template for ERROR-404
 *
 * @package WordPress
 * @subpackage TMS
 * @since TMS 1.0.0
 * @version TMS 1.0.0
 *
 */

get_header();
?>


<p><?php _e( 'It may help:', 'tms' ); ?></p>

<?php get_search_form(); ?>

<p><a class="btn btn-primary" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php _e( 'Go to the Home', 'tms' ); ?></a></p>


<?php get_footer(); ?>
