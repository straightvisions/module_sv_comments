<div id="comment-<?php echo $comment->comment_ID; ?>" class="<?php echo $this->get_prefix( 'comment' ); ?>">
	<?php if ( get_option('show_avatars') === '1' && get_avatar( $comment->comment_author_email, '80px' ) ) { ?>
		<div class="<?php echo $this->get_prefix( 'author_avatar_wrapper' ); ?>">
			<div class="<?php echo $this->get_prefix( 'author_avatar' ); ?>">
				<?php echo get_avatar( $comment->comment_author_email, '80px' ); ?>
			</div>
		</div>
	<?php } ?>
	<div class="<?php echo $this->get_prefix( 'comment_content_wrapper' ); ?>">
		<div class="<?php echo $this->get_prefix( 'comment_content_meta' ); ?>">
			<div class="<?php echo $this->get_prefix( 'author' ); ?>">
				<?php echo ( $comment->comment_author_url
					? '<a href="' . $comment->comment_author_url . '" target="_blank">' . $comment->comment_author . '</a>'
					: $comment->comment_author ); ?>
			</div>
			<div class="<?php echo $this->get_prefix( 'comment_date' ); ?>">
				<?php
					echo get_comment_date( '', $comment->comment_ID );
				?>
			</div>
			<?php
				comment_reply_link(
					array(
						'before'	=> '<div class="' . $this->get_prefix( 'comment_reply_link' ) . '">',
						'after'		=> '</div>',
						'depth' 	=> $depth,
						'max_depth' => $args[ 'max_depth' ]
					),
					$comment->comment_ID,
					$comment->comment_post_ID
				);
			?>
		</div>
		<div class="<?php echo $this->get_prefix( 'comment_content' ); ?>"><?php comment_text(); ?></div>
	</div>
</div>
