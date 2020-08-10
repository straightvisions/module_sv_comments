<?php
	namespace sv100;
	
	/**
	 * @version         4.022
	 * @author			straightvisions GmbH
	 * @package			sv100
	 * @copyright		2019 straightvisions GmbH
	 * @link			https://straightvisions.com
	 * @since			1.000
	 * @license			See license.txt or https://straightvisions.com
	 */
	
	class sv_comments extends init {
		public function init() {
			$this->set_module_title( __( 'SV Comments', 'sv100' ) )
				->set_module_desc( __( 'Display and manage comments in your posts.', 'sv100' ) )
				->load_settings()
				->register_scripts()
				->set_section_title( __( 'Comments', 'sv100' ) )
				->set_section_desc( __( 'Text & Color settings', 'sv100' ) )
				->set_section_type( 'settings' )
				->set_section_template_path( $this->get_path( 'lib/backend/tpl/settings.php' ) )
				->set_section_order(34)
				->get_root()
				->add_section( $this );
		}
		
		protected function load_settings(): sv_comments {
			$this->load_settings_comments()
			->load_settings_form();

			return $this;
		}
		protected function load_settings_comments(): sv_comments {
			// Text Settings
			$this->get_setting( 'font' )
				->set_title( __( 'Font Family', 'sv100' ) )
				->set_description( __( 'Choose a font for your text.', 'sv100' ) )
				->set_options( $this->get_module( 'sv_webfontloader' )->get_font_options() )
				->set_is_responsive(true)
				->load_type( 'select' );

			$this->get_setting( 'font_size' )
				->set_title( __( 'Font Size', 'sv100' ) )
				->set_description( __( 'Font Size in pixel.', 'sv100' ) )
				->set_default_value( 16 )
				->set_is_responsive(true)
				->load_type( 'number' );

			$this->get_setting( 'line_height' )
				->set_title( __( 'Line Height', 'sv100' ) )
				->set_description( __( 'Set line height as multiplier or with a unit.', 'sv100' ) )
				->set_is_responsive(true)
				->load_type( 'text' );

			$this->get_setting( 'text_color' )
				->set_title( __( 'Text Color', 'sv100' ) )
				->set_default_value( '0,0,0,1' )
				->set_is_responsive(true)
				->load_type( 'color' );

			$this->get_setting( 'margin' )
				->set_title( __( 'Margin', 'sv100' ) )
				->set_is_responsive(true)
				->load_type( 'margin' );

			$this->get_setting( 'padding' )
				->set_title( __( 'Padding', 'sv100' ) )
				->set_is_responsive(true)
				->load_type( 'margin' );

			$this->get_setting( 'border' )
				->set_title( __( 'Border', 'sv100' ) )
				->set_is_responsive(true)
				->load_type( 'border' );

			// Color Settings
			$this->get_setting( 'bg_color' )
				->set_title( __( 'Background Color', 'sv100' ) )
				->set_default_value( '245,245,245,1' )
				->set_is_responsive(true)
				->load_type( 'color' );

			// Title Settings
			$this->get_setting( 'font_title' )
				->set_title( __( 'Font Family', 'sv100' ) )
				->set_description( __( 'Choose a font for your text.', 'sv100' ) )
				->set_options( $this->get_module( 'sv_webfontloader' )->get_font_options() )
				->set_is_responsive(true)
				->load_type( 'select' );

			$this->get_setting( 'font_size_title' )
				->set_title( __( 'Font Size', 'sv100' ) )
				->set_description( __( 'Font Size in pixel.', 'sv100' ) )
				->set_default_value( 32 )
				->set_is_responsive(true)
				->load_type( 'number' );

			$this->get_setting( 'line_height_title' )
				->set_title( __( 'Line Height', 'sv100' ) )
				->set_description( __( 'Set line height as multiplier or with a unit.', 'sv100' ) )
				->set_is_responsive(true)
				->load_type( 'text' );

			$this->get_setting( 'text_color_title' )
				->set_title( __( 'Text Color', 'sv100' ) )
				->set_default_value( '#1e1e1e' )
				->set_is_responsive(true)
				->load_type( 'color' );

			$this->get_setting( 'text_align_title' )
				->set_title( __( 'Text Align', 'sv100' ) )
				->set_options(array(
					'left'			=> __('left','sv100'),
					'center'		=> __('center','sv100'),
					'right'			=> __('right','sv100')
				))
				->set_default_value( 'center' )
				->set_is_responsive(true)
				->load_type( 'select' );

			// Author Settings
			$this->get_setting( 'font_author' )
				->set_title( __( 'Font Family', 'sv100' ) )
				->set_description( __( 'Choose a font for your text.', 'sv100' ) )
				->set_options( $this->get_module( 'sv_webfontloader' )->get_font_options() )
				->set_is_responsive(true)
				->load_type( 'select' );

			$this->get_setting( 'font_size_author' )
				->set_title( __( 'Font Size', 'sv100' ) )
				->set_description( __( 'Font Size in pixel.', 'sv100' ) )
				->set_default_value( 12 )
				->set_is_responsive(true)
				->load_type( 'number' );

			$this->get_setting( 'line_height_author' )
				->set_title( __( 'Line Height', 'sv100' ) )
				->set_description( __( 'Set line height as multiplier or with a unit.', 'sv100' ) )
				->set_is_responsive(true)
				->load_type( 'text' );

			$this->get_setting( 'text_color_author' )
				->set_title( __( 'Text Color', 'sv100' ) )
				->set_default_value( '0,0,0,1' )
				->set_is_responsive(true)
				->load_type( 'color' );

			// Date Settings
			$this->get_setting( 'font_date' )
				->set_title( __( 'Font Family', 'sv100' ) )
				->set_description( __( 'Choose a font for your text.', 'sv100' ) )
				->set_options( $this->get_module( 'sv_webfontloader' )->get_font_options() )
				->set_is_responsive(true)
				->load_type( 'select' );

			$this->get_setting( 'font_size_date' )
				->set_title( __( 'Font Size', 'sv100' ) )
				->set_description( __( 'Font Size in pixel.', 'sv100' ) )
				->set_default_value( 12 )
				->set_is_responsive(true)
				->load_type( 'number' );

			$this->get_setting( 'line_height_date' )
				->set_title( __( 'Line Height', 'sv100' ) )
				->set_description( __( 'Set line height as multiplier or with a unit.', 'sv100' ) )
				->set_is_responsive(true)
				->load_type( 'text' );

			$this->get_setting( 'text_color_date' )
				->set_title( __( 'Text Color', 'sv100' ) )
				->set_default_value( '0,0,0,1' )
				->set_is_responsive(true)
				->load_type( 'color' );

			// Reply Settings
			$this->get_setting( 'font_reply' )
				->set_title( __( 'Font Family', 'sv100' ) )
				->set_description( __( 'Choose a font for your text.', 'sv100' ) )
				->set_options( $this->get_module( 'sv_webfontloader' )->get_font_options() )
				->set_is_responsive(true)
				->load_type( 'select' );

			$this->get_setting( 'font_size_reply' )
				->set_title( __( 'Font Size', 'sv100' ) )
				->set_description( __( 'Font Size in pixel.', 'sv100' ) )
				->set_default_value( 12 )
				->set_is_responsive(true)
				->load_type( 'number' );

			$this->get_setting( 'line_height_reply' )
				->set_title( __( 'Line Height', 'sv100' ) )
				->set_description( __( 'Set line height as multiplier or with a unit.', 'sv100' ) )
				->set_is_responsive(true)
				->load_type( 'text' );

			$this->get_setting( 'text_color_reply' )
				->set_title( __( 'Text Color', 'sv100' ) )
				->set_default_value( '0,0,0,1' )
				->set_is_responsive(true)
				->load_type( 'color' );

			// Link Settings
			$this->get_setting( 'font_link' )
				->set_title( __( 'Font Family', 'sv100' ) )
				->set_description( __( 'Choose a font for your text.', 'sv100' ) )
				->set_options( $this->get_module( 'sv_webfontloader' )->get_font_options() )
				->set_is_responsive(true)
				->load_type( 'select' );

			$this->get_setting( 'text_color_link' )
				->set_title( __( 'Text Color', 'sv100' ) )
				->set_default_value( '#000000' )
				->set_is_responsive(true)
				->load_type( 'color' );

			return $this;
		}
		protected function load_settings_form(): sv_comments {
			// Form Settings
			$this->get_setting( 'form_margin' )
				->set_title( __( 'Margin', 'sv100' ) )
				->set_is_responsive(true)
				->load_type( 'margin' );

			$this->get_setting( 'form_padding' )
				->set_title( __( 'Padding', 'sv100' ) )
				->set_is_responsive(true)
				->load_type( 'margin' );

			$this->get_setting( 'form_border' )
				->set_title( __( 'Border', 'sv100' ) )
				->set_is_responsive(true)
				->load_type( 'border' );

			// Form Input Settings
			$this->get_setting( 'form_input_font' )
				->set_title( __( 'Font Family', 'sv100' ) )
				->set_description( __( 'Choose a font for your text.', 'sv100' ) )
				->set_options( $this->get_module( 'sv_webfontloader' )->get_font_options() )
				->set_is_responsive(true)
				->load_type( 'select' );

			$this->get_setting( 'form_input_font_size' )
				->set_title( __( 'Font Size', 'sv100' ) )
				->set_description( __( 'Font Size in pixel.', 'sv100' ) )
				->set_default_value( 16 )
				->set_is_responsive(true)
				->load_type( 'number' );

			$this->get_setting( 'form_input_line_height' )
				->set_title( __( 'Line Height', 'sv100' ) )
				->set_description( __( 'Set line height as multiplier or with a unit.', 'sv100' ) )
				->set_is_responsive(true)
				->load_type( 'text' );

			$this->get_setting( 'form_input_text_color' )
				->set_title( __( 'Text Color', 'sv100' ) )
				->set_default_value( '0,0,0,1' )
				->set_is_responsive(true)
				->load_type( 'color' );

			$this->get_setting( 'form_input_bg_color' )
				->set_title( __( 'Background Color', 'sv100' ) )
				->set_default_value( '245,245,245,1' )
				->set_is_responsive(true)
				->load_type( 'color' );

			$this->get_setting( 'form_input_margin' )
				->set_title( __( 'Margin', 'sv100' ) )
				->set_is_responsive(true)
				->load_type( 'margin' );

			$this->get_setting( 'form_input_padding' )
				->set_title( __( 'Padding', 'sv100' ) )
				->set_is_responsive(true)
				->load_type( 'margin' );

			$this->get_setting( 'form_input_border' )
				->set_title( __( 'Border', 'sv100' ) )
				->set_is_responsive(true)
				->load_type( 'border' );

			// Form Label Settings
			$this->get_setting( 'form_label_font' )
				->set_title( __( 'Font Family', 'sv100' ) )
				->set_description( __( 'Choose a font for your text.', 'sv100' ) )
				->set_options( $this->get_module( 'sv_webfontloader' )->get_font_options() )
				->set_is_responsive(true)
				->load_type( 'select' );

			$this->get_setting( 'form_label_font_size' )
				->set_title( __( 'Font Size', 'sv100' ) )
				->set_description( __( 'Font Size in pixel.', 'sv100' ) )
				->set_default_value( 16 )
				->set_is_responsive(true)
				->load_type( 'number' );

			$this->get_setting( 'form_label_line_height' )
				->set_title( __( 'Line Height', 'sv100' ) )
				->set_description( __( 'Set line height as multiplier or with a unit.', 'sv100' ) )
				->set_is_responsive(true)
				->load_type( 'text' );

			$this->get_setting( 'form_label_text_color' )
				->set_title( __( 'Text Color', 'sv100' ) )
				->set_default_value( '0,0,0,1' )
				->set_is_responsive(true)
				->load_type( 'color' );

			$this->get_setting( 'form_label_bg_color' )
				->set_title( __( 'Background Color', 'sv100' ) )
				->set_default_value( '0,0,0,0' )
				->set_is_responsive(true)
				->load_type( 'color' );

			$this->get_setting( 'form_label_margin' )
				->set_title( __( 'Margin', 'sv100' ) )
				->set_is_responsive(true)
				->load_type( 'margin' );

			$this->get_setting( 'form_label_padding' )
				->set_title( __( 'Padding', 'sv100' ) )
				->set_is_responsive(true)
				->load_type( 'margin' );

			$this->get_setting( 'form_label_border' )
				->set_title( __( 'Border', 'sv100' ) )
				->set_is_responsive(true)
				->load_type( 'border' );

			// Form Submit Settings
			$this->get_setting( 'form_submit_font' )
				->set_title( __( 'Font Family', 'sv100' ) )
				->set_description( __( 'Choose a font for your text.', 'sv100' ) )
				->set_options( $this->get_module( 'sv_webfontloader' )->get_font_options() )
				->set_is_responsive(true)
				->load_type( 'select' );

			$this->get_setting( 'form_submit_font_size' )
				->set_title( __( 'Font Size', 'sv100' ) )
				->set_description( __( 'Font Size in pixel.', 'sv100' ) )
				->set_default_value( 16 )
				->set_is_responsive(true)
				->load_type( 'number' );

			$this->get_setting( 'form_submit_line_height' )
				->set_title( __( 'Line Height', 'sv100' ) )
				->set_description( __( 'Set line height as multiplier or with a unit.', 'sv100' ) )
				->set_is_responsive(true)
				->load_type( 'text' );

			$this->get_setting( 'form_submit_text_color' )
				->set_title( __( 'Text Color', 'sv100' ) )
				->set_default_value( '0,0,0,1' )
				->set_is_responsive(true)
				->load_type( 'color' );

			$this->get_setting( 'form_submit_bg_color' )
				->set_title( __( 'Background Color', 'sv100' ) )
				->set_default_value( '245,245,245,1' )
				->set_is_responsive(true)
				->load_type( 'color' );

			$this->get_setting( 'form_submit_margin' )
				->set_title( __( 'Margin', 'sv100' ) )
				->set_is_responsive(true)
				->load_type( 'margin' );

			$this->get_setting( 'form_submit_padding' )
				->set_title( __( 'Padding', 'sv100' ) )
				->set_is_responsive(true)
				->load_type( 'margin' );

			$this->get_setting( 'form_submit_border' )
				->set_title( __( 'Border', 'sv100' ) )
				->set_is_responsive(true)
				->load_type( 'border' );

			return $this;
		}
	
		protected function register_scripts(): sv_comments {
			// Register Styles
			$this->get_script( 'common' )
				 ->set_path( 'lib/frontend/css/common.css' );
			
			$this->get_script( 'config' )
				 ->set_path( 'lib/frontend/css/config.php' )
				 ->set_inline( true );
	
			return $this;
		}
	
		public function load( $settings = array() ): string {
			$settings								= shortcode_atts(
				array(
					'inline'						=> false,
				),
				$settings,
				$this->get_module_name()
			);
	
			return $this->router( $settings );
		}
	
		// Handles the routing of the templates
		protected function router( array $settings ): string {
			$template = array(
				'name'      => 'default',
				'scripts'   => array(
					$this->get_script( 'common' )->set_inline( $settings['inline'] ),
				),
			);
	
			return $this->load_template( $template, $settings );
		}
	
		// Loads the templates
		protected function load_template( array $template, array $settings ) :string {
			ob_start();
			
			foreach ( $template['scripts'] as $script ) {
				$script->set_is_enqueued();
			}
			
			$this->get_script( 'config' )->set_is_enqueued();
			
			// WP Comment Reply Script
			wp_enqueue_script( 'comment-reply' );
			
			// Loads the template
			include ( $this->get_path('lib/frontend/tpl/' . $template['name'] . '.php' ) );
			$output							        = ob_get_contents();
			ob_end_clean();
	
			return $output;
		}
		
		public function custom_comment_list( $comment, $args, $depth ) {
			// Loads the comment template
			include ( $this->get_path('lib/frontend/tpl/comment.php' ) );
		}
	}