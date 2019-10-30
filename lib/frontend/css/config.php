<?php
	// Fetches all settings and creates new variables with the setting ID as name and setting data as value.
	// This reduces the lines of code for the needed setting values.
	foreach ( $script->get_parent()->get_settings() as $setting ) {
		${ $setting->get_ID() } = $setting->run_type()->get_data();
		
		// If setting is color, it gets the value in the RGB-Format
		if ( $setting->get_type() === 'setting_color' ) {
			${ $setting->get_ID() } = $setting->get_rgb( ${ $setting->get_ID() } );
		}
	}
	
	// Text Settings
	$font_family				= $script->get_parent()->get_setting( 'font_family' )->run_type()->get_data();
	
	if ( $font_family ) {
		$font					= $script->get_parent()->get_module( 'sv_webfontloader' )->get_font_by_label( $font_family );
	} else {
		$font                     = false;
	}

	// Title Settings
	$font_family_title			= $script->get_parent()->get_setting( 'font_family_title' )->run_type()->get_data();
	
	if ( $font_family_title ) {
		$font_title				= $script->get_parent()->get_module( 'sv_webfontloader' )->get_font_by_label( $font_family_title );
	} else {
		$font_title				= false;
	}
?>

.sv100_sv_comments,
.sv100_sv_comments .sv100_sv_comments_author,
.sv100_sv_comments .sv100_sv_comments_author a {
	font-family: <?php echo ( $font ? '"' . $font['family'] . '", ' : '' ); ?>sans-serif;
	font-weight: <?php echo ( $font ? $font['weight'] : '400' ); ?>;
	font-size: <?php echo $font_size; ?>px;
	color: rgba(<?php echo $text_color; ?>);
	line-height: <?php echo $line_height; ?>px;
}

.sv100_sv_comments a,
.sv100_sv_comments .sv100_sv_comments_comment a,
.sv100_sv_comments .comment-form a,
.sv100_sv_comments .sv100_sv_comments_comment,
.sv100_sv_comments .comment-form .comment-form-comment textarea,
.sv100_sv_comments .comment-form .comment-form-author input,
.sv100_sv_comments .comment-form .comment-form-email input,
.sv100_sv_comments .comment-form .comment-form-url input,
.sv100_sv_comments .comment-form .comment-form-comment textarea:hover,
.sv100_sv_comments .comment-form .comment-form-author input:hover,
.sv100_sv_comments .comment-form .comment-form-email input:hover,
.sv100_sv_comments .comment-form .comment-form-url input:hover,
.sv100_sv_comments .comment-form .comment-form-comment textarea:focus,
.sv100_sv_comments .comment-form .comment-form-author input:focus,
.sv100_sv_comments .comment-form .comment-form-email input:focus,
.sv100_sv_comments .comment-form .comment-form-url input:focus,
.sv100_sv_comments .comment-form input[type="submit"],
.sv100_sv_comments_pagination .page-numbers,
.sv100_sv_comments_pagination .page-numbers:hover,
.sv100_sv_comments_pagination .page-numbers:focus {
	color: rgba(<?php echo $text_color; ?>);
}

.sv100_sv_comments a:hover,
.sv100_sv_comments a:focus,
.sv100_sv_comments .sv100_sv_comments_comment a:hover,
.sv100_sv_comments .sv100_sv_comments_comment a:focus,
.sv100_sv_comments .comment-form a:hover,
.sv100_sv_comments .comment-form a:focus,
.sv100_sv_comments .comment-form input[type="submit"]:hover,
.sv100_sv_comments .comment-form input[type="submit"]:focus {
	color: rgba(<?php echo $highlight_color; ?>);
}

.sv100_sv_comments h3 {
	font-family: <?php echo ( $font_title ? '"' . $font_title['family'] . '", ' : '' ); ?>sans-serif;
	font-weight: <?php echo ( $font_title ? $font_title['weight'] : '400' ); ?>;
	font-size: <?php echo $font_size_title; ?>px;
	color: rgba(<?php echo $text_color_title; ?>);
	line-height: <?php echo $line_height_title; ?>px;
}

.sv100_sv_comments h3::after {
	background-color: rgba(<?php echo $highlight_color; ?>);
}

.sv100_sv_comments .comment-form label {
	color: rgba(<?php echo $text_color_title; ?>);
}

.sv100_sv_comments .sv100_sv_comments_comment,
.sv100_sv_comments .comment-form .comment-form-comment textarea,
.sv100_sv_comments .comment-form .comment-form-author input,
.sv100_sv_comments .comment-form .comment-form-email input,
.sv100_sv_comments .comment-form .comment-form-url input,
.sv100_sv_comments .comment-form input[type="submit"] {
	background-color: rgba(<?php echo $bg_color; ?>);
}

.sv100_sv_comments .sv100_sv_comments_author,
.sv100_sv_comments .sv100_sv_comments_author a {
	color: rgba(<?php echo $author_color; ?>);
	font-weight: bold;
}

.sv100_sv_comments .comment-form input[type="checkbox"] {
	border-color: rgba(<?php echo $text_color_title; ?>);
}

.sv100_sv_comments .comment-form input[type="checkbox"]::before {
	background-color: rgba(<?php echo $text_color_title; ?>);
}

.sv100_sv_comments_pagination .page-numbers::after {
	background-color: rgba(<?php echo $highlight_color; ?>);
}