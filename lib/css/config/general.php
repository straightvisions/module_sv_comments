<?php
	echo $_s->build_css(
		'.sv100_sv_comments h3',
		array_merge(
			$script->get_parent()->get_setting('font_title')->get_css_data('font-family'),
			$script->get_parent()->get_setting('font_size_title')->get_css_data('font-size','','px'),
			$script->get_parent()->get_setting('line_height_title')->get_css_data('line-height'),
			$script->get_parent()->get_setting('text_color_title')->get_css_data(),
			$script->get_parent()->get_setting('text_align_title')->get_css_data('text-align')
		)
	);

	echo $_s->build_css(
		'.sv100_sv_comments .sv100_sv_comments_comment',
		array_merge(
			$script->get_parent()->get_setting('font')->get_css_data('font-family'),
			$script->get_parent()->get_setting('font_size')->get_css_data('font-size','','px'),
			$script->get_parent()->get_setting('line_height')->get_css_data('line-height'),
			$script->get_parent()->get_setting('text_color')->get_css_data(),
			$script->get_parent()->get_setting('bg_color')->get_css_data('background-color'),
			$script->get_parent()->get_setting('padding')->get_css_data('padding'),
			$script->get_parent()->get_setting('margin')->get_css_data(),
			$script->get_parent()->get_setting('border')->get_css_data()
		)
	);

	echo $_s->build_css(
		'.sv100_sv_comments .sv100_sv_comments_author',
		array_merge(
			$script->get_parent()->get_setting('font_author')->get_css_data('font-family'),
			$script->get_parent()->get_setting('font_size_author')->get_css_data('font-size','','px'),
			$script->get_parent()->get_setting('line_height_author')->get_css_data('line-height'),
			$script->get_parent()->get_setting('text_color_author')->get_css_data()
		)
	);

	echo $_s->build_css(
		'.sv100_sv_comments .sv100_sv_comments_comment_date',
		array_merge(
			$script->get_parent()->get_setting('font_date')->get_css_data('font-family'),
			$script->get_parent()->get_setting('font_size_date')->get_css_data('font-size','','px'),
			$script->get_parent()->get_setting('line_height_date')->get_css_data('line-height'),
			$script->get_parent()->get_setting('text_color_date')->get_css_data()
		)
	);

	echo $_s->build_css(
		'.sv100_sv_comments .sv100_sv_comments_comment_reply_link a',
		array_merge(
			$script->get_parent()->get_setting('font_reply')->get_css_data('font-family'),
			$script->get_parent()->get_setting('font_size_reply')->get_css_data('font-size','','px'),
			$script->get_parent()->get_setting('line_height_reply')->get_css_data('line-height'),
			$script->get_parent()->get_setting('text_color_reply')->get_css_data()
		)
	);

	echo $_s->build_css(
		'.sv100_sv_comments .sv100_sv_comments_comment a',
		array_merge(
			$script->get_parent()->get_setting('font_link')->get_css_data('font-family'),
			$script->get_parent()->get_setting('text_color_link')->get_css_data()
		)
	);