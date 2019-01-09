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
	}

	public function init() {
		// Module Title & Description
		$this->set_module_title( 'SV Comments' );
		$this->set_module_desc( 'This module gives the ability to manage and display comments of the current post/page via the "[sv_comments]" shortcode.' );

		// Loading Styles & Scripts
		// CSS
		$css							        = static::$scripts->create( $this );
		$css
			->set_source( $this->get_file_url( 'lib/css/frontend.css' ), $this->get_file_path( 'lib/css/frontend.css' ) );

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

		ob_start();
		include ( $this->get_file_path( 'lib/tpl/frontend.php' ) );
		$output									= ob_get_contents();
		ob_end_clean();

		return $output;
	}
}