<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://chetansatasiya.com/blog
 * @since             1.0.0
 * @package           Cs_Add_Social_Fields_To_Admin_Area
 *
 * @wordpress-plugin
 * Plugin Name:       CS Add Social Fields to Admin Area
 * Plugin URI:        http://chetansatasiya.com
 * Description:       This plugin will add Social Profile Fields into the user detail page..
 * Version:           1.0.1
 * Author:            Chetan Satasiya
 * Author URI:        http://chetansatasiya.com/blog
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       cs-add-social-fields-to-admin-area
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-cs-add-social-fields-to-admin-area-activator.php
 */
function activate_cs_add_social_fields_to_admin_area() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-cs-add-social-fields-to-admin-area-activator.php';
	Cs_Add_Social_Fields_To_Admin_Area_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-cs-add-social-fields-to-admin-area-deactivator.php
 */
function deactivate_cs_add_social_fields_to_admin_area() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-cs-add-social-fields-to-admin-area-deactivator.php';
	Cs_Add_Social_Fields_To_Admin_Area_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_cs_add_social_fields_to_admin_area' );
register_deactivation_hook( __FILE__, 'deactivate_cs_add_social_fields_to_admin_area' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-cs-add-social-fields-to-admin-area.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_cs_add_social_fields_to_admin_area() {

	$plugin = new Cs_Add_Social_Fields_To_Admin_Area();
	$plugin->run();

}
run_cs_add_social_fields_to_admin_area();
