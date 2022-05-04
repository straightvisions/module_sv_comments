<?php if ( current_user_can( 'activate_plugins' ) ) { ?>
	<div class="sv_setting_subpage">
		<h2><?php _e('Comments Wrapper', 'sv100'); ?></h2>
		<h3 class="divider"><?php _e( 'Title', 'sv100' ); ?></h3>
		<div class="sv_setting_flex">
			<?php
				echo $module->get_setting( 'font_title' )->form();
				echo $module->get_setting( 'font_size_title' )->form();
				echo $module->get_setting( 'line_height_title' )->form();
				echo $module->get_setting( 'text_color_title' )->form();
			?>
		</div>
		<div class="sv_setting_flex">
			<?php
				echo $module->get_setting( 'text_align_title' )->form();
				echo $module->get_setting( 'max_width' )->form();
			?>
		</div>
		<h3 class="divider"><?php _e( 'Wrapper', 'sv100' ); ?></h3>
		<div class="sv_setting_flex">
			<?php
				echo $module->get_setting( 'margin_wrapper' )->form();
				echo $module->get_setting( 'padding_wrapper' )->form();
			?>
		</div>
		<div class="sv_setting_flex">
			<?php
				echo $module->get_setting( 'bg_color_wrapper' )->form();
				echo $module->get_setting( 'border_wrapper' )->form();
			?>
		</div>
		<h3 class="divider"><?php _e( 'Comment', 'sv100' ); ?></h3>
		<div class="sv_setting_flex">
			<?php
				echo $module->get_setting( 'margin_comment' )->form();
				echo $module->get_setting( 'padding_comment' )->form();
			?>
		</div>
		<div class="sv_setting_flex">
			<?php
				echo $module->get_setting( 'bg_color_comment' )->form();
				echo $module->get_setting( 'border_comment' )->form();
			?>
		</div>
		<h3 class="divider"><?php _e( 'Children', 'sv100' ); ?></h3>
		<div class="sv_setting_flex">
			<?php
				echo $module->get_setting( 'margin_children' )->form();
				echo $module->get_setting( 'padding_children' )->form();
			?>
		</div>
		<div class="sv_setting_flex">
			<?php
				echo $module->get_setting( 'bg_color_children' )->form();
				echo $module->get_setting( 'border_children' )->form();
			?>
		</div>
	</div>
<?php } ?>