<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://www.digitaldyna.com
 * @since      1.0.0
 *
 * @package    DD_Admin_Theme
 * @subpackage DD_Admin_Theme/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    DD_Admin_Theme
 * @subpackage DD_Admin_Theme/includes
 * @author     DigitalDyna <support@digitaldyna.com>
 */
class DD_Admin_Theme_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'dd-admin-theme',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
