<?php
	echo $_s->build_css(
		'.comment-form input, .comment-form textarea',
		array_merge(
			$module->get_setting('form_input_font')->get_css_data('font-family'),
			$module->get_setting('form_input_font_size')->get_css_data('font-size','','px'),
			$module->get_setting('form_input_line_height')->get_css_data('line-height'),
			$module->get_setting('form_input_text_color')->get_css_data(),
			$module->get_setting('form_input_bg_color')->get_css_data('background-color'),
			$module->get_setting('form_input_padding')->get_css_data('padding'),
			$module->get_setting('form_input_margin')->get_css_data(),
			$module->get_setting('form_input_border')->get_css_data()
		)
	);