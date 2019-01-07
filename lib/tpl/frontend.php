<!-- Post Comments -->
<div class="<?php echo $this->get_module_name(); ?> mt-4 py-4">
	<h3 class="text-center mb-5">
		<?php
		$comments = get_comments( array( 'post_id' => get_the_ID() ) );

		echo count( $comments ) . ' ' . ( count( $comments ) < 2
				? __( 'Comment', $this->get_module_name() )
				: __( 'Comments', $this->get_module_name() )
			);
		?>
	</h3>

	<?php
	$i = 0;

	foreach ( $comments as $comment ) {
		$author = get_user_by( 'email', $comment->comment_author_email );
		?>
		<article id="comment-<?php echo $comment->comment_ID; ?>"
				 class="<?php echo $i < ( count( $comments ) - 1 ) ? 'border-bottom' : ''; ?> pb-4 mb-4">
			<div class="comment-data row">
				<!-- Comment Author Avatar -->
				<div class="comment-author-image text-right col-3 col-sm-2">
					<?php
					if ( $author ) {
						?>
						<a href="<?php echo get_author_posts_url( $author->__get( 'id' ) ); ?>">
							<?php
							echo get_avatar( $comment->comment_author_email, '100px' );
							?>
						</a>
						<?php
					} else {
						echo get_avatar( $comment->comment_author_email, '100px' );
					}
					?>
				</div>

				<!-- Comment -->
				<div class="comment col-7 col-sm-9">
					<!-- Comment Author Name -->
					<h5>
						<?php
						if ( $author ) {
							?>
							<a href="<?php echo get_author_posts_url( $author->__get( 'id' ) ); ?>">
								<?php
								echo $comment->comment_author;
								?>
							</a>
							<?php
						} else {
							echo $comment->comment_author;
						}
						?>
					</h5>

					<!-- Comment Date -->
					<div class="comment-date">
						<?php
						echo date_i18n( 'j. F, Y', strtotime( $comment->comment_date ), true )
						     . ' '
						     . __( 'at', $this->get_module_name() )
						     . ' '
						     . date_i18n( 'H:i', strtotime( $comment->comment_date ), true );
						?>
					</div>

					<!-- Comment Text -->
					<div class="comment-text mt-3"><?php echo $comment->comment_content; ?></div>
				</div>

				<!-- Comment Replay Button -->
				<div class="comment-reply col-2 col-sm-1"></div>
			</div>
		</article>
		<?php
		$i++;
	}
	?>

	<!-- Comment Form -->
	<div class="comment-form">
		<?php comment_form(); ?>
	</div>
</div>