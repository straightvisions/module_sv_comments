<?php if ( current_user_can( 'activate_plugins' ) ) { ?>
	<div class="sv_section_description"><?php echo $module->get_section_desc(); ?></div>
	<div class="sv_setting_subpages">
		<ul class="sv_setting_subpages_nav"></ul>
		<?php
			require_once( $module->get_path( 'lib/tpl/settings/comments.php' ) );
			require_once( $module->get_path( 'lib/tpl/settings/form_wrapper.php' ) );
			require_once( $module->get_path( 'lib/tpl/settings/form_label.php' ) );
			require_once( $module->get_path( 'lib/tpl/settings/form_fields.php' ) );
			require_once( $module->get_path( 'lib/tpl/settings/form_submit.php' ) );
		?>
	</div>
	<?php
}