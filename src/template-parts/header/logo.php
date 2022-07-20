<?php
/**
 * The template part for displaying HEADER LOGO template part
 *
 * @package WordPress
 * @subpackage TMS
 * @since TMS 1.0.0
 * @version TMS 1.0.0
 *
 */
?>


<a class="header-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"  rel="home"><span class="screen-reader-text"><?php bloginfo( 'name' ); ?></span><img class="logo" src="<?php echo esc_url( get_template_directory_uri() ) . '/images/logo.svg'; ?>" title="<?php bloginfo( 'name' ); ?>"></a>
