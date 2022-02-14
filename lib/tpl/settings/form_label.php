<?php if ( current_user_can( 'activate_plugins' ) ) { ?>
	<div class="sv_setting_subpage">
		<h2><?php _e('Form Label', 'sv100'); ?></h2>
		<div class="sv_setting_flex">
			<?php
				echo $module->get_setting( 'form_label_bg_color' )->form();
			?>
		</div>
		<div class="sv_setting_flex">
			<?php
				echo $module->get_setting( 'form_label_font' )->form();
				echo $module->get_setting( 'form_label_font_size' )->form();
				echo $module->get_setting( 'form_label_line_height' )->form();
				echo $module->get_setting( 'form_label_text_color' )->form();
			?>
		</div>
		<div class="sv_setting_flex">
			<?php
				echo $module->get_setting( 'form_label_margin' )->form();
				echo $module->get_setting( 'form_label_padding' )->form();
			?>
		</div>
		<div class="sv_setting_flex">
			<?php
				echo $module->get_setting( 'form_label_border' )->form();
			?>
		</div>
	</div>
<?php } ?>