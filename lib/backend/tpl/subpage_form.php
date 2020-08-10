<?php if ( current_user_can( 'activate_plugins' ) ) { ?>
<div class="sv_setting_subpage">
	<h2><?php _e('Form', 'sv100'); ?></h2>
	<h3 class="divider"><?php _e( 'Form Wrapper', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_setting( 'form_margin' )->form();
			echo $module->get_setting( 'form_padding' )->form();
		?>
	</div>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_setting( 'form_border' )->form();
		?>
	</div>
	<h3 class="divider"><?php _e( 'Form Fields', 'sv100' ); ?></h3>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_setting( 'form_input_bg_color' )->form();
		?>
	</div>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_setting( 'form_input_font' )->form();
			echo $module->get_setting( 'form_input_font_size' )->form();
			echo $module->get_setting( 'form_input_line_height' )->form();
			echo $module->get_setting( 'form_input_text_color' )->form();
		?>
	</div>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_setting( 'form_input_margin' )->form();
			echo $module->get_setting( 'form_input_padding' )->form();
		?>
	</div>
	<div class="sv_setting_flex">
		<?php
			echo $module->get_setting( 'form_input_border' )->form();
		?>
	</div>
	<h3 class="divider"><?php _e( 'Form Label', 'sv100' ); ?></h3>
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
	<h3 class="divider"><?php _e( 'Form Submit', 'sv100' ); ?></h3>
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