<?php
/**
 * The template for displaying the HEADER
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage TMS
 * @since TMS 1.0.0
 * @version TMS 1.0.0
 *
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header id="site-header" class="site-header">

	<?php
	get_template_part( 'template-parts/header/logo' );
	get_template_part( 'template-parts/header/navigation' );
	get_template_part( 'template-parts/header/burger' );
	?>

</header>

<?php get_template_part( 'template-parts/sidenav' ); ?>

<?php get_template_part( 'template-parts/before' ); ?>
