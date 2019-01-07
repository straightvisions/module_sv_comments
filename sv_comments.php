<?php
namespace sv_100;

/**
 * @author			straightvisions
 * @package			sv_100
 * @copyright		2019 Matthias Bathke
 * @link			https://straightvisions.com
 * @since			1.0
 * @license			See license.txt or https://straightvisions.com
 */

class sv_comments extends init {
	static $scripts_loaded						= false;

	public function __construct( $path, $url ) {
		$this->path								= $path;
		$this->url								= $url;
		$this->name								= get_class( $this );

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

		$this->module_enqueue_scripts( $settings['inline'] );

		ob_start();
		include ( $this->get_file_path( 'lib/tpl/frontend.php' ) );
		$output									= ob_get_contents();
		ob_end_clean();

		return $output;
	}
}