<?php
	require( $module->get_path( 'lib/css/config/comments_wrapper.php' ) );
	require( $module->get_path( 'lib/css/config/comments_entry.php' ) );

	if(comments_open()) {
		require($module->get_path('lib/css/config/form_wrapper.php'));
		require($module->get_path('lib/css/config/form_label.php'));
		require($module->get_path('lib/css/config/form_fields.php'));
		require($module->get_path('lib/css/config/form_submit.php'));
	}