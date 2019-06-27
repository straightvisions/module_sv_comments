<?php
namespace sv100;

/**
 * @version         1.00
 * @author			straightvisions
 * @package			sv100
 * @copyright		2019 Matthias Bathke
 * @link			https://straightvisions.com
 * @since			1.0
 * @license			See license.txt or https://straightvisions.com
 */

class sv_comments extends init {
	public function init() {
		// Module Info
		$this->set_module_title( 'SV Comments' );
		$this->set_module_desc( __( 'This module gives the ability to display comments of the current post/page via the "[sv_comments]" shortcode.', 'sv100' ) );

		$this->register_scripts();
	}

	protected function register_scripts() :sv_comments {
		// Register Styles
		$this->scripts_queue['default']        = static::$scripts
			->create( $this )
			->set_ID( 'default' )
			->set_path( 'lib/frontend/css/default.css' );

		return $this;
	}

	public function load( $settings = array() ) :string {
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
	protected function router( array $settings ) :string {
		$template = array(
			'name'      => 'default',
			'scripts'   => array(
				$this->scripts_queue[ 'default' ]->set_inline( $settings['inline'] ),
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

		// Loads the template
		include ( $this->get_path('lib/frontend/tpl/' . $template['name'] . '.php' ) );
		$output							        = ob_get_contents();
		ob_end_clean();

		return $output;
	}
}