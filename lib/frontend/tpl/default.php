<div class="<?php echo $this->get_prefix(); ?>">
	<h3 class="<?php echo $this->get_prefix( 'title' ); ?>">
		<?php
		$post_comments = get_comments( array(
				'post_id' 						=> get_the_ID() ,
				'status'						=> 'approve'
		));

		echo count( $post_comments ) . ' ' . ( count( $post_comments ) == 1
				? __( 'Comment', 'straightvisions_100' )
				: __( 'Comments', 'straightvisions_100' )
			);
		?>
	</h3>

	<?php
	$i = 0;

	foreach ( $post_comments as $post_comment ) {
		$author = get_user_by( 'email', $post_comment->comment_author_email );
	?>

    <div id="comment-<?php echo $post_comment->comment_ID; ?>" class="<?php echo $this->get_prefix( 'comment' ); ?>">
        <div class="<?php echo $this->get_prefix( 'author_avatar_wrapper' ); ?>">
	        <div class="<?php echo $this->get_prefix( 'author_avatar' ); ?>">
		        <?php
		        if ( get_avatar( $post_comment->comment_author_email, '80px' ) ) {
			        echo get_avatar( $post_comment->comment_author_email, '80px' );
		        }
		        ?>
            </div>
        </div>
        <div class="<?php echo $this->get_prefix( 'comment_content_wrapper' ); ?>">
            <span class="<?php echo $this->get_prefix( 'author' ); ?>">
	            <?php echo ( $post_comment->comment_author_url
					? '<a href="' . $post_comment->comment_author_url . '" target="_blank">' . $post_comment->comment_author . '</a>'
					: $post_comment->comment_author ); ?>
            </span>
            <span class="<?php echo $this->get_prefix( 'comment_date' ); ?>">
                <?php
                echo get_comment_date( '', $post_comment->comment_ID );
                ?>
            </span>
            <span class="<?php echo $this->get_prefix( 'comment_content' ); ?>"><?php echo $post_comment->comment_content; ?></span>
        </div>
    </div>

    <?php
		$i++;
	}
	?>

	<div class="<?php echo $this->get_prefix( 'comment_form' ); ?>">
		<?php comment_form(); ?>
	</div>
</div>