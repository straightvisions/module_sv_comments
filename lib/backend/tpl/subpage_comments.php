<?php if ( current_user_can( 'activate_plugins' ) ) { ?>
	<div class="sv_setting_subpage">
		<h2><?php _e('Comments', 'sv100'); ?></h2>
		<h3 class="divider"><?php _e( 'Colors', 'sv100' ); ?></h3>
		<div class="sv_setting_flex">
			<?php
				echo $module->get_setting( 'bg_color' )->form();
			?>
		</div>

		<h3 class="divider"><?php _e( 'Texts', 'sv100' ); ?></h3>
		<div class="sv_setting_flex">
			<?php
				echo $module->get_setting( 'font' )->form();
				echo $module->get_setting( 'font_size' )->form();
				echo $module->get_setting( 'line_height' )->form();
				echo $module->get_setting( 'text_color' )->form();
			?>
		</div>
		<div class="sv_setting_flex">
			<?php
				echo $module->get_setting( 'margin' )->form();
				echo $module->get_setting( 'padding' )->form();
			?>
		</div>
		<div class="sv_setting_flex">
			<?php
				echo $module->get_setting( 'border' )->form();
			?>
		</div>
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
			?>
		</div>

		<h3 class="divider"><?php _e( 'Author', 'sv100' ); ?></h3>
		<div class="sv_setting_flex">
			<?php
				echo $module->get_setting( 'font_author' )->form();
				echo $module->get_setting( 'font_size_author' )->form();
				echo $module->get_setting( 'line_height_author' )->form();
				echo $module->get_setting( 'text_color_author' )->form();
			?>
		</div>

		<h3 class="divider"><?php _e( 'Date', 'sv100' ); ?></h3>
		<div class="sv_setting_flex">
			<?php
				echo $module->get_setting( 'font_date' )->form();
				echo $module->get_setting( 'font_size_date' )->form();
				echo $module->get_setting( 'line_height_date' )->form();
				echo $module->get_setting( 'text_color_date' )->form();
			?>
		</div>

		<h3 class="divider"><?php _e( 'Reply Link', 'sv100' ); ?></h3>
		<div class="sv_setting_flex">
			<?php
				echo $module->get_setting( 'font_reply' )->form();
				echo $module->get_setting( 'font_size_reply' )->form();
				echo $module->get_setting( 'line_height_reply' )->form();
				echo $module->get_setting( 'text_color_reply' )->form();
			?>
		</div>

		<h3 class="divider"><?php _e( 'Links', 'sv100' ); ?></h3>
		<div class="sv_setting_flex">
			<?php
				echo $module->get_setting( 'font_link' )->form();
				echo $module->get_setting( 'text_color_link' )->form();
			?>
		</div>
	</div>
<?php } ?>