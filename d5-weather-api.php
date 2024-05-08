<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://design519.com
 * @since             1.0.0
 * @package           D5_Weather_Api
 *
 * @wordpress-plugin
 * Plugin Name:       D5 Weather API
 * Plugin URI:        https://plugins.design519.com/
 * Description:       Consume and display data from a weather API
 * Version:           1.0.0
 * Author:            Dee Five
 * Author URI:        https://design519.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       d5-weather-api
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
define( 'D5_WEATHER_API_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-d5-weather-api-activator.php
 */
function activate_d5_weather_api() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-d5-weather-api-activator.php';
	D5_Weather_Api_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-d5-weather-api-deactivator.php
 */
function deactivate_d5_weather_api() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-d5-weather-api-deactivator.php';
	D5_Weather_Api_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_d5_weather_api' );
register_deactivation_hook( __FILE__, 'deactivate_d5_weather_api' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-d5-weather-api.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_d5_weather_api() {

	$plugin = new D5_Weather_Api();
	$plugin->run();

}
run_d5_weather_api();
