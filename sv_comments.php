<?php
	namespace sv100;
	
	/**
	 * @version         4.000
	 * @author			straightvisions GmbH
	 * @package			sv100
	 * @copyright		2019 straightvisions GmbH
	 * @link			https://straightvisions.com
	 * @since			1.000
	 * @license			See license.txt or https://straightvisions.com
	 */
	
	class sv_comments extends init {
		public function init() {
			$this->set_module_title( 'SV Comments' )
				 ->set_module_desc( __( 'Display and manage comments in your posts.', 'sv100' ) )
				 ->load_settings()
				 ->register_scripts()
				 ->set_section_title( __( 'Comments', 'sv100' ) )
				 ->set_section_desc( __( 'Text & Color settings', 'sv100' ) )
				 ->set_section_type( 'settings' )
				 ->set_section_template_path( $this->get_path( 'lib/backend/tpl/settings.php' ) )
				 ->get_root()
				 ->add_section( $this );
		}
		
		protected function load_settings(): sv_comments {
			// Text Settings
			$this->get_settings_component( 'font_family','font_family' );
			$this->get_settings_component( 'font_size','font_size', 16 );
			$this->get_settings_component( 'text_color','text_color', '#828282' );
			$this->get_settings_component( 'line_height','line_height', 23 );
			
			// Title Settings
			$this->get_settings_component( 'font_family_title','font_family' );
			$this->get_settings_component( 'font_size_title','font_size', 32 );
			$this->get_settings_component( 'text_color_title','text_color', '#1e1e1e' );
			$this->get_settings_component( 'line_height_title','line_height', 48 );
			
			// Color Settings
			$this->get_settings_component( 'bg_color','background_color', '#f5f5f5' );
			$this->get_settings_component( 'highlight_color','highlight_color', '#328ce6' );
			
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
			$this->get_script( 'default' )
				 ->set_path( 'lib/frontend/css/default.css' );
			
			$this->get_script( 'inline_config' )
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
					$this->get_script( 'default' )->set_inline( $settings['inline'] ),
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
			
			$this->get_script( 'inline_config' )->set_is_enqueued();
	
			// Loads the template
			include ( $this->get_path('lib/frontend/tpl/' . $template['name'] . '.php' ) );
			$output							        = ob_get_contents();
			ob_end_clean();
	
			return $output;
		}
	}