<div class="<?php echo $this->get_prefix(); ?>">
	<h3 class="<?php echo $this->get_prefix( 'title' ); ?>">
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
	            <?php echo $comment->comment_author; ?>
            </span>
            <span class="<?php echo $this->get_prefix( 'comment_date' ); ?>">
                <?php
                echo date_i18n( 'j. F, Y', strtotime( $comment->comment_date ), true )
                     . ' '
                     . __( 'at', $this->get_module_name() )
                     . ' '
                     . date_i18n( 'H:i', strtotime( $comment->comment_date ), true );
                ?>
            </span>
            <span class="<?php echo $this->get_prefix( 'comment_content' ); ?>"><?php echo $comment->comment_content; ?></span>
            <?php
            /* @todo Check why there is no output
            comment_reply_link(
                array(
                    'reply_text'    => __( 'Reply', $this->get_module_name() ),
                    'login_text'    => __( 'Log in to leave a comment', $this->get_module_name() ),
                    'depth'         => 2,
                ),
	            $comment->comment_ID,
                $comment->comment_post_ID,
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