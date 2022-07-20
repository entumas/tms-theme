<?php
/**
 * The template for displaying the FOOTER
 *
 * Contains the closing of the .site-content div and all content after
 *
 * @package WordPress
 * @subpackage TMS
 * @since TMS 1.0.0
 * @version TMS 1.0.0
 *
 */
?>


<?php get_template_part( 'template-parts/after' ); ?>

<footer id="site-footer" class="site-footer">

	<?php
	get_template_part( 'template-parts/footer/logo' );
	get_template_part( 'template-parts/footer/menu' );
	get_template_part( 'template-parts/footer/social' );
	get_template_part( 'template-parts/footer/legal' );
	get_template_part( 'template-parts/footer/copy' );
	?>

</footer>

<?php wp_footer(); ?>

</body>
</html>
