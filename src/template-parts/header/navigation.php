<?php
/**
 * The template part for displaying HEADER NAVIGATION template part
 *
 * @package WordPress
 * @subpackage TMS
 * @since TMS 1.0.0
 * @version TMS 1.0.0
 *
 */
?>


<nav id="navigation" class="header-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Main menu', 'tms' ); ?>">

	<?php
	wp_nav_menu( array(
		'theme_location' => 'main',
		'container'      => '',
		'menu_class'     => 'site-menu',
		'depth'          => 3,
	) );
	?>

</nav>
