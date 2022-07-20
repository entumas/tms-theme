<?php
/**
 * The template part for displaying FOOTER MENU template part
 *
 * @package WordPress
 * @subpackage TMS
 * @since TMS 1.0.0
 * @version TMS 1.0.0
 *
 */
?>


<nav class="footer-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Main menu', 'tms-theme' ); ?>">

	<?php
	wp_nav_menu( array(
		'theme_location' => 'footer',
		'container'      => '',
		'menu_class'     => 'footer-menu',
		'depth'          => 2,
	) );
	?>

</nav>
