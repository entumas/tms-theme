<?php
/**
 * The template for displaying the HERO template part
 *
 * @package WordPress
 * @subpackage TMS-theme
 * @since TMS-theme 1.0.0
 * @version TMS-theme 1.0.0
 *
 */
?>


<header class="hero">

	<?php if ( has_post_thumbnail() ) the_post_thumbnail(); ?>

	<?php the_title( '<h1 class="title">', '</h1>' ); ?>

</header>
