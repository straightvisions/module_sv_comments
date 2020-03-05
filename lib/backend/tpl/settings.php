<?php
	if ( current_user_can( 'activate_plugins' ) ) {
		?>
		<div class="sv_section_description"><?php echo $module->get_section_desc(); ?></div>

		<h3 class="divider"><?php _e( 'Texts', 'sv100' ); ?></h3>
		<div class="sv_setting_flex">
			<?php
				echo $module->get_settings_component( 'font_family' )->form();
				echo $module->get_settings_component( 'font_size' )->form();
				echo $module->get_settings_component( 'line_height' )->form();
				echo $module->get_settings_component( 'text_color' )->form();
			?>
		</div>

		<h3 class="divider"><?php _e( 'Titles', 'sv100' ); ?></h3>
		<div class="sv_setting_flex">
			<?php
				echo $module->get_settings_component( 'font_family_title' )->form();
				echo $module->get_settings_component( 'font_size_title' )->form();
				echo $module->get_settings_component( 'line_height_title' )->form();
				echo $module->get_settings_component( 'text_color_title' )->form();
			?>
		</div>

		<h3 class="divider"><?php _e( 'Colors', 'sv100' ); ?></h3>
		<div class="sv_setting_flex">
			<?php
				echo $module->get_settings_component( 'bg_color' )->form();
				echo $module->get_settings_component( 'highlight_color' )->form();
				echo $module->get_setting( 'author_color' )->form();
			?>
		</div>
		<?php
	}