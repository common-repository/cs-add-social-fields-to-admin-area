<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://chetansatasiya.com/blog
 * @since      1.0.0
 *
 * @package    Cs_Add_Social_Fields_To_Admin_Area
 * @subpackage Cs_Add_Social_Fields_To_Admin_Area/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Cs_Add_Social_Fields_To_Admin_Area
 * @subpackage Cs_Add_Social_Fields_To_Admin_Area/includes
 * @author     Chetan Satasiya <chetansatasiya88@gmail.com>
 */
class Cs_Add_Social_Fields_To_Admin_Area_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'cs-add-social-fields-to-admin-area',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
