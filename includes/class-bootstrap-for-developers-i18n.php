<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.upwork.com/fl/azmatmehmood
 * @since      1.0.0
 *
 * @package    Bootstrap_For_Developers
 * @subpackage Bootstrap_For_Developers/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Bootstrap_For_Developers
 * @subpackage Bootstrap_For_Developers/includes
 * @author     Azmat Mehmood <mehmood.azmat@gmail.com>
 */
class Bootstrap_For_Developers_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'bootstrap-for-developers',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
