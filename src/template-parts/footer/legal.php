<?php
/**
 * The template part for displaying FOOTER LEGAL template part
 *
 * @package WordPress
 * @subpackage TMS
 * @since TMS 1.0.0
 * @version TMS 1.0.0
 *
 */
?>


<nav class="footer-legal" role="navigation" aria-label="<?php esc_attr_e( 'Main menu', 'tms' ); ?>">

	<?php
	wp_nav_menu( array(
		'theme_location' => 'legal',
		'container'      => '',
		'menu_class'     => 'legal-menu',
		'depth'          => 1,
	) );
	?>

</nav>
