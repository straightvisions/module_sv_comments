<?php if ( current_user_can( 'activate_plugins' ) ) { ?>
	<div class="sv_setting_subpage">
		<h2><?php _e('Form Submit', 'sv100'); ?></h2>
		<div class="sv_setting_flex">
			<?php
				echo $module->get_setting( 'form_submit_bg_color' )->form();
			?>
		</div>
		<div class="sv_setting_flex">
			<?php
				echo $module->get_setting( 'form_submit_font' )->form();
				echo $module->get_setting( 'form_submit_font_size' )->form();
				echo $module->get_setting( 'form_submit_line_height' )->form();
				echo $module->get_setting( 'form_submit_text_color' )->form();
			?>
		</div>
		<div class="sv_setting_flex">
			<?php
				echo $module->get_setting( 'form_submit_margin' )->form();
				echo $module->get_setting( 'form_submit_padding' )->form();
			?>
		</div>
		<div class="sv_setting_flex">
			<?php
				echo $module->get_setting( 'form_submit_border' )->form();
			?>
		</div>
	</div>
<?php } ?>