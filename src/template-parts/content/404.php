<?php
/**
 * The template for ERROR-404 content
 *
 * @package WordPress
 * @subpackage TMS
 * @since TMS 1.0.0
 * @version TMS 1.0.0
 *
 */
?>


<header class="error-header">

	<h1>404</h1>

	<p><?php esc_html_e( 'Oops! That page can&rsquo;t be found. 😲', 'tms' ); ?></p>

</header>


<div class="error-form">

	<?php get_template_part( 'searchform' ); ?>

</div>
