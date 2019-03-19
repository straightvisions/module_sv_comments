<div class="<?php echo $this->get_prefix(); ?>">
	<h3 class="<?php echo $this->get_prefix( 'title' ); ?>">
		<?php
		$comments = get_comments( array(
				'post_id' 						=> get_the_ID() ,
				'status'						=> 'approve'
		));

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
            <span class="<?php echo $this->get_prefix( 'comment_content' ); ?>"><?php echo $comment->comment_content; ?></span>
            <?php
			/* @todo Disabled due not working reply function
            comment_reply_link(
                array(
					'add_below'		=> $comment->comment_ID,
	                'depth'         => 1,
                    'max_depth'		=> 3,
                    'reply_text'    => __( 'Reply', $this->get_module_name() ),
                    'login_text'    => __( 'Log in to leave a comment', $this->get_module_name() ),
                )
            );
			*/
            ?>
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