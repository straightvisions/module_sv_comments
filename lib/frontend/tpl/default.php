<?php if(count( $post_comments ) > 0 || comments_open()){ ?>
<div class="<?php echo $this->get_prefix(); ?>">
	<h3 class="<?php echo $this->get_prefix( 'title' ); ?>">
		<?php
		$post_comments = get_comments(
			array(
				'post_id' 	=> get_the_ID(),
				'status'	=> 'approve'
			)
		);

		if(count( $post_comments ) > 0){
		echo count( $post_comments ) . ' ' . ( count( $post_comments ) == 1
				? __( 'Comment', 'sv100' )
				: __( 'Comments', 'sv100' ) );
		}
		?>
	</h3>

	<?php if(count( $post_comments ) > 0){ ?>
	<?php echo wp_list_comments( array( 'callback' => array( $this, 'custom_comment_list' ) ) ); ?>
	<div class="<?php echo $this->get_prefix( 'pagination' ); ?>">
		<?php echo paginate_comments_links(); ?>
	</div>
	<?php } ?>
	<?php comments_open() ? comment_form() : ''; ?>
</div>
<?php } ?>