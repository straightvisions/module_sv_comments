<?php
	echo $_s->build_css(
		'.comment-respond',
		array_merge(
			$script->get_parent()->get_setting('form_padding')->get_css_data('padding'),
			$script->get_parent()->get_setting('form_margin')->get_css_data(),
			$script->get_parent()->get_setting('form_border')->get_css_data()
		)
	);

	echo $_s->build_css(
		'.comment-form input, .comment-form textarea',
		array_merge(
			$script->get_parent()->get_setting('form_input_font')->get_css_data('font-family'),
			$script->get_parent()->get_setting('form_input_font_size')->get_css_data('font-size','','px'),
			$script->get_parent()->get_setting('form_input_line_height')->get_css_data('line-height'),
			$script->get_parent()->get_setting('form_input_text_color')->get_css_data(),
			$script->get_parent()->get_setting('form_input_bg_color')->get_css_data('background-color'),
			$script->get_parent()->get_setting('form_input_padding')->get_css_data('padding'),
			$script->get_parent()->get_setting('form_input_margin')->get_css_data(),
			$script->get_parent()->get_setting('form_input_border')->get_css_data()
		)
	);

	echo $_s->build_css(
		'.comment-form label',
		array_merge(
			$script->get_parent()->get_setting('form_label_font')->get_css_data('font-family'),
			$script->get_parent()->get_setting('form_label_font_size')->get_css_data('font-size','','px'),
			$script->get_parent()->get_setting('form_label_line_height')->get_css_data('line-height'),
			$script->get_parent()->get_setting('form_label_text_color')->get_css_data(),
			$script->get_parent()->get_setting('form_label_bg_color')->get_css_data('background-color'),
			$script->get_parent()->get_setting('form_label_padding')->get_css_data('padding'),
			$script->get_parent()->get_setting('form_label_margin')->get_css_data(),
			$script->get_parent()->get_setting('form_label_border')->get_css_data()
		)
	);

	echo $_s->build_css(
		'.comment-respond .form-submit .submit',
		array_merge(
			$script->get_parent()->get_setting('form_submit_font')->get_css_data('font-family'),
			$script->get_parent()->get_setting('form_submit_font_size')->get_css_data('font-size','','px'),
			$script->get_parent()->get_setting('form_submit_line_height')->get_css_data('line-height'),
			$script->get_parent()->get_setting('form_submit_text_color')->get_css_data(),
			$script->get_parent()->get_setting('form_submit_bg_color')->get_css_data('background-color'),
			$script->get_parent()->get_setting('form_submit_padding')->get_css_data('padding'),
			$script->get_parent()->get_setting('form_submit_margin')->get_css_data(),
			$script->get_parent()->get_setting('form_submit_border')->get_css_data()
		)
	);