<?php
/**
 * The template part for displaying SEARCH RESULT content
 *
 * @package WordPress
 * @subpackage TMS-theme
 * @since TMS-theme 1.0.0
 * @version TMS-theme 1.0.0
 *
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class( 'search-result' ); ?> role="article">

	<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

	<p class="link"><?php the_permalink(); ?></p>

	<?php the_excerpt(); ?>

</article>
