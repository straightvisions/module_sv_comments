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
			// Text Settings
			$this->get_setting( 'font_family' )
				 ->set_title( __( 'Font Family', 'sv100' ) )
				 ->set_description( __( 'Choose a font for your text.', 'sv100' ) )
				 ->set_options( $this->get_module( 'sv_webfontloader' )->get_font_options() )
				 ->load_type( 'select' );

			$this->get_setting( 'font_size' )
				 ->set_title( __( 'Font Size', 'sv100' ) )
				 ->set_description( __( 'Font Size in pixel.', 'sv100' ) )
				 ->set_default_value( 16 )
				 ->load_type( 'number' );

			$this->get_setting( 'line_height' )
				 ->set_title( __( 'Line Height', 'sv100' ) )
				 ->set_description( __( 'Set line height as multiplier or with a unit.', 'sv100' ) )
				 ->set_default_value( '23px' )
				 ->load_type( 'text' );

			$this->get_setting( 'text_color' )
				 ->set_title( __( 'Text Color', 'sv100' ) )
				 ->set_default_value( '#828282' )
				 ->load_type( 'color' );
			
			// Title Settings
			$this->get_setting( 'font_family_title' )
				 ->set_title( __( 'Font Family', 'sv100' ) )
				 ->set_description( __( 'Choose a font for your text.', 'sv100' ) )
				 ->set_options( $this->get_module( 'sv_webfontloader' )->get_font_options() )
				 ->load_type( 'select' );

			$this->get_setting( 'font_size_title' )
				 ->set_title( __( 'Font Size', 'sv100' ) )
				 ->set_description( __( 'Font Size in pixel.', 'sv100' ) )
				 ->set_default_value( 32 )
				 ->load_type( 'number' );

			$this->get_setting( 'line_height_title' )
				 ->set_title( __( 'Line Height', 'sv100' ) )
				 ->set_description( __( 'Set line height as multiplier or with a unit.', 'sv100' ) )
				 ->set_default_value( '48px' )
				 ->load_type( 'text' );

			$this->get_setting( 'text_color_title' )
				 ->set_title( __( 'Text Color', 'sv100' ) )
				 ->set_default_value( '#1e1e1e' )
				 ->load_type( 'color' );
			
			// Color Settings
			$this->get_setting( 'bg_color' )
				 ->set_title( __( 'Background Color', 'sv100' ) )
				 ->set_default_value( '#f5f5f5' )
				 ->load_type( 'color' );

			$this->get_setting( 'highlight_color' )
				 ->set_title( __( 'Highlight Color', 'sv100' ) )
				 ->set_description( __( 'This color is used for highlighting elements, like links on hover/focus.', 'sv100' ) )
				 ->set_default_value( '#328ce6' )
				 ->load_type( 'color' );
			
			$this->s['author_color'] =
				$this->get_setting()
					 ->set_ID( 'author_color' )
					 ->set_title( __( 'Author Color', 'sv100' ) )
					 ->set_description( __( 'This color is used for the author name.', 'sv100' ) )
					 ->set_default_value( '#1e1e1e' )
					 ->load_type( 'color' );
			
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
	
			return comments_open() ? $this->router( $settings ) : '';
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