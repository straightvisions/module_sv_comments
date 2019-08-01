<div class="<?php echo $this->get_prefix(); ?>">
	<h3 class="<?php echo $this->get_prefix( 'title' ); ?>">
		<?php
		$post_comments = get_comments(
			array(
				'post_id' 	=> get_the_ID(),
				'status'	=> 'approve'
			)
		);

		echo count( $post_comments ) . ' ' . ( count( $post_comments ) == 1 ? __( 'Comment', 'sv100' ) : __( 'Comments', 'sv100' ) );
		?>
	</h3>

	<?php
	// @todo Custom Comments Loop, muss durch wp_list_comments() ersetzt werden.

	/*
	 *
	 * https://gist.github.com/georgiecel/9445357
	 *https://digwp.com/2010/02/custom-comments-html-output/
	 * https://lab-dh.straightvisions.com/wp-admin/themes.php?page=themecheck
	 */
    echo wp_list_comments();
    
    
	// Ende der custom loop
	?>
	<div class="<?php echo $this->get_prefix( 'pagination' ); ?>">
		<?php echo paginate_comments_links(); ?>
	</div>
	<div class="<?php echo $this->get_prefix( 'comment_form' ); ?>">
		<?php comment_form(); ?>
	</div>
</div>
<?php
echo "------------------------------ TARGET LOOK --------------------------------";
include(__DIR__.'/default_bkp.php');
?>