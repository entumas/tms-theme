<?php
/**
 * The template part for displaying SIDENAV content
 *
 * @package WordPress
 * @subpackage TMS
 * @since TMS 1.0.0
 * @version TMS 1.0.0
 *
 */
?>


<div id="sidenav" class="sidenav">


	<div class="sidenav-header">

		<img class="logo" src="<?php echo esc_url( get_template_directory_uri() ) . '/images/simbol.svg'; ?>" title="<?php bloginfo( 'name' ); ?>">

		<div>

			<p><?php bloginfo( 'name' ); ?></p>

			<p><?php bloginfo( 'description' ); ?></p>

		</div>

	</div>


	<nav class="sidenav-menu" role="navigation" aria-label="<?php esc_attr_e( 'Sidenav menu', 'tms' ); ?>">

		<?php
		wp_nav_menu( array(
			'theme_location' => 'sidenav',
			'container'      => '',
			'menu_class'     => '',
			'depth'          => 1,
		) );
		?>

	</nav>


</div>
