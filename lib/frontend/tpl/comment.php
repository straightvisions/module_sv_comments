<div id="comment-<?php echo $comment->comment_ID; ?>" class="<?php echo $this->get_prefix( 'comment' ); ?>">
	<div class="<?php echo $this->get_prefix( 'author_avatar_wrapper' ); ?>">
		<div class="<?php echo $this->get_prefix( 'author_avatar' ); ?>">
			<?php
				if ( get_avatar( $comment->comment_author_email, '80px' ) ) {
					echo get_avatar( $comment->comment_author_email, '80px' );
				}
			?>
		</div>
	</div>
	<div class="<?php echo $this->get_prefix( 'comment_content_wrapper' ); ?>">
            <span class="<?php echo $this->get_prefix( 'author' ); ?>">
	            <?php echo ( $comment->comment_author_url
					? '<a href="' . $comment->comment_author_url . '" target="_blank">' . $comment->comment_author . '</a>'
					: $comment->comment_author ); ?>
            </span>
		<span class="<?php echo $this->get_prefix( 'comment_date' ); ?>">
                <?php
					echo get_comment_date( '', $comment->comment_ID );
				?>
            </span>
		<span class="<?php echo $this->get_prefix( 'comment_content' ); ?>"><?php comment_text(); ?></span>
		<?php
			comment_reply_link(
				array(
					'before'	=> '<span class="' . $this->get_prefix( 'comment_reply_link' ) . '">',
					'after'		=> '</span>',
					'depth' 	=> $depth,
					'max_depth' => $args[ 'max_depth' ]
				),
				$comment->comment_ID,
				$comment->comment_post_ID
			);
		?>
	</div>
</div>
