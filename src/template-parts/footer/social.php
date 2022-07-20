<?php
/**
 * The template part for displaying FOOTER SOCIAL template part
 *
 * @package WordPress
 * @subpackage TMS-theme
 * @since TMS-theme 1.0.0
 * @version TMS-theme 1.0.0
 *
 */
?>


<nav class="footer-social" role="navigation" aria-label="<?php esc_attr_e( 'Main menu', 'tms-theme' ); ?>">

	<?php
	wp_nav_menu( array(
		'theme_location' => 'social',
		'container'      => '',
		'menu_class'     => 'social-menu',
		'depth'          => 1,
	) );
	?>

</nav>
