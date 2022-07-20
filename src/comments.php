<?php
/**
 * The template for displaying COMMENTS
 *
 * @package WordPress
 * @subpackage TMS
 * @since TMS 1.0.0
 * @version TMS 1.0.0
 *
 */


if ( post_password_required() ) :
	return;
endif;
?>

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>

		<p class="comments-title"><?php
			$comments_number = get_comments_number();
			if ( '1' === $comments_number ) :
				printf( _x( 'One comment on &ldquo;%s&rdquo;', 'comments title', 'tms-theme' ), get_the_title() );
			else :
				printf(
					_nx(
						'%1$s comment on &ldquo;%2$s&rdquo;',
						'%1$s comments on &ldquo;%2$s&rdquo;',
						$comments_number,
						'comments title',
						'tms-theme'
					),
					number_format_i18n( $comments_number ),
					get_the_title()
				);
			endif;
		?></p>


		<?php
		$paginate_comments = array(
			'prev_text' => tms_get_svg_icon( array( 'icon' => 'chevron-left', 'class' => 'meta-nav' ) ) . '<span class="screen-reader-text" aria-hidden="true"> ' . __( 'Previous post:', 'tms-theme' ) . '</span>',
			'next_text' => tms_get_svg_icon( array( 'icon' => 'chevron-right', 'class' => 'meta-nav' ) ) . ' <span class="screen-reader-text" aria-hidden="true"> ' . __( 'Next post:', 'tms-theme' ) . '</span>',
		);
		?>


		<nav class="pagination comment-pagination">
			<?php paginate_comments_links( $paginate_comments ); ?>
		</nav>


		<ol class="comments-list">
			<?php
			wp_list_comments( array(
				'style'       => 'ol',
				'short_ping'  => true,
				'avatar_size' => 48,
			) );
			?>
		</ol>


		<nav class="pagination comment-pagination">
			<?php paginate_comments_links( $paginate_comments ); ?>
		</nav>

	<?php endif; ?>


	<?php
	// If comments are closed and there are comments, let's leave a little note
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
		echo '<p class="no-comments">' . __( 'Comments are closed.', 'tms-theme' ) . '</p>';
	endif;
	?>


	<?php
	$comments_args = array(
		'title_reply_before' => '<p id="reply-title" class="comment-reply-title">',
		'title_reply_after' => '</p>',
	);

	comment_form( $comments_args );
	?>

</div>
