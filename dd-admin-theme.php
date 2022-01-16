<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://www.digitaldyna.com
 * @since             1.0.0
 * @package           DD_Admin_Theme
 *
 * @wordpress-plugin
 * Plugin Name:       DD Admin Theme
 * Plugin URI:        https://wordpress.org/plugins/dd-admin-theme/
 * Description:       DD WordPress Admin Theme.
 * Version:           1.0
 * Author:            DigitalDyna
 * Author URI:        http://www.digitaldyna.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       dd-admin-theme
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'DD_ADMIN_THEME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-dd-admin-theme-activator.php
 */
function activate_dda_theme() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-dd-admin-theme-activator.php';
	DD_Admin_Theme_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-dd-admin-theme-deactivator.php
 */
function deactivate_dda_theme() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-dd-admin-theme-deactivator.php';
	DD_Admin_Theme_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_dda_theme' );
register_deactivation_hook( __FILE__, 'deactivate_dda_theme' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-dd-admin-theme.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_dd_admin_theme() {

	$plugin = new DD_Admin_Theme();
	$plugin->run();

}
run_dd_admin_theme();
