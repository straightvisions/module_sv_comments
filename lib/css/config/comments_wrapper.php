<?php
	echo $_s->build_css(
		'.sv100_sv_comments#comments',
		array_merge(
			$module->get_setting('max_width')->get_css_data('max-width'),
			$module->get_setting('bg_color_wrapper')->get_css_data('background-color'),
			$module->get_setting('padding_wrapper')->get_css_data('padding'),
			$module->get_setting('margin_wrapper')->get_css_data(),
			$module->get_setting('border_wrapper')->get_css_data()
		)
	);
	echo $_s->build_css(
		'.sv100_sv_comments .sv100_sv_comments_comment',
		array_merge(
			$module->get_setting('bg_color_comment')->get_css_data('background-color'),
			$module->get_setting('padding_comment')->get_css_data('padding'),
			$module->get_setting('margin_comment')->get_css_data(),
			$module->get_setting('border_comment')->get_css_data()
		)
	);

	echo $_s->build_css(
		'.sv100_sv_comments ul.children',
		array_merge(
			$module->get_setting('bg_color_children')->get_css_data('background-color'),
			$module->get_setting('border_children')->get_css_data()
		)
	);
	echo $_s->build_css(
		'.sv100_sv_comments ul.children .sv100_sv_comments_comment',
		array_merge(
			$module->get_setting('padding_children')->get_css_data('padding'),
			$module->get_setting('margin_children')->get_css_data()
		)
	);