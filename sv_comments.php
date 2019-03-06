<?php
namespace sv_100;

/**
 * @version         1.00
 * @author			straightvisions
 * @package			sv_100
 * @copyright		2019 Matthias Bathke
 * @link			https://straightvisions.com
 * @since			1.0
 * @license			See license.txt or https://straightvisions.com
 */

class sv_comments extends init {
	public function __construct() {
	
	}

	public function init() {
		// Module Info
		$this->set_module_title( 'SV Comments' );
		$this->set_module_desc( __( 'This module gives the ability to display comments of the current post/page via the "[sv_comments]" shortcode.', $this->get_module_name() ) );

		// Shortcodes
		add_shortcode( $this->get_module_name(), array( $this, 'shortcode' ) );
	}

	public function shortcode( $settings ) {
		$settings								= shortcode_atts(
			array(
				'inline'						=> false,
			),
			$settings,
			$this->get_module_name()
		);
		
		// Loads Styles
		static::$scripts->create( $this )
						->set_path('lib/css/frontend.css')
						->set_inline($settings['inline']);
		
		
		ob_start();
		include ( $this->get_path( 'lib/tpl/frontend.php' ) );
		$output									= ob_get_contents();
		ob_end_clean();

		return $output;
	}
}