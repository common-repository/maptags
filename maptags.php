<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              maptags
 * @since             1.0.0
 * @package           Maptags
 *
 * @wordpress-plugin
 * Plugin Name:       maptags
 * Plugin URI:        maptags
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            maptags
 * Author URI:        maptags
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       maptags
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-maptags-activator.php
 */
function activate_maptags() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-maptags-activator.php';
	Maptags_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-maptags-deactivator.php
 */
function deactivate_maptags() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-maptags-deactivator.php';
	Maptags_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_maptags' );
register_deactivation_hook( __FILE__, 'deactivate_maptags' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-maptags.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_maptags() {

	$plugin = new Maptags();
	$plugin->run();

}
run_maptags();
