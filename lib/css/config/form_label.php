<?php
	echo $_s->build_css(
		'.comment-form label',
		array_merge(
			$module->get_setting('form_label_font')->get_css_data('font-family'),
			$module->get_setting('form_label_font_size')->get_css_data('font-size','','px'),
			$module->get_setting('form_label_line_height')->get_css_data('line-height'),
			$module->get_setting('form_label_text_color')->get_css_data(),
			$module->get_setting('form_label_bg_color')->get_css_data('background-color'),
			$module->get_setting('form_label_padding')->get_css_data('padding'),
			$module->get_setting('form_label_margin')->get_css_data(),
			$module->get_setting('form_label_border')->get_css_data()
		)
	);