<?php
/**
 * The template part for displaying POST META
 *
 * @package WordPress
 * @subpackage TMS-theme
 * @since TMS-theme 1.0.0
 * @version TMS-theme 1.0.0
 *
 */
?>


<div class="post-meta">

	<p><?php tms_svg_icon( array( 'icon' => 'calendar' ) ); ?> <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time( get_option( 'date_format' ) ); ?></time></p>

	<?php if ( get_the_category() ) : ?>
		<p><?php tms_svg_icon( array( 'icon' => 'folder' ) ) . ' ' . the_category( ', ' ); ?></p>
	<?php endif; ?>

	<?php if ( get_the_tags() ) : ?>
		<p><?php tms_svg_icon( array( 'icon' => 'tag' ) ) . ' ' . the_tags( '', ', ', '' ); ?></p>
	<?php endif; ?>

	<?php if ( comments_open() || get_comments_number() ) : ?>
		<p><?php tms_svg_icon( array( 'icon' => 'comments' ) ) . ' ' . comments_number(); ?></p>
	<?php endif; ?>

</div>
