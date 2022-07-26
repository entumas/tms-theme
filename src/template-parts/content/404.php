<?php
/**
 * The template for ERROR-404 content
 *
 * @package WordPress
 * @subpackage TMS-theme
 * @since TMS-theme 1.0.0
 * @version TMS-theme 1.0.0
 *
 */
?>


<header class="error-header">

	<h1>404</h1>

	<p><?php esc_html_e( 'Oops! That page can&rsquo;t be found. 😲', 'tms-theme' ); ?></p>

</header>


<div class="error-form">

	<?php get_template_part( 'searchform' ); ?>

</div>
