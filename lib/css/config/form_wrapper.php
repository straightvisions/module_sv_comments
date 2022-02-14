<?php
	echo $_s->build_css(
		'.comment-respond',
		array_merge(
			$module->get_setting('form_padding')->get_css_data('padding'),
			$module->get_setting('form_margin')->get_css_data(),
			$module->get_setting('form_border')->get_css_data()
		)
	);