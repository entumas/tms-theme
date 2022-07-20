<?php
/**
 * The template part for displaying ARCHIVE content
 *
 * @package WordPress
 * @subpackage TMS-theme
 * @since TMS-theme 1.0.0
 * @version TMS-theme 1.0.0
 *
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class( 'archive-article' ); ?> role="article">

	<?php the_post_thumbnail( 'medium' ); ?>

	<div>
		<header>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php get_template_part( 'template-parts/post-meta' ) ?>
		</header>

		<?php the_excerpt(); ?>

	</div>

</article>
