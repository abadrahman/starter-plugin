<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              {{plugin.uri}}
 * @since             {{plugin.version}}
 * @package           {{plugin.package}}
 *
 * @wordpress-plugin
 * Plugin Name:       {{plugin.name}}
 * Plugin URI:        {{plugin.uri}}
 * Description:       {{plugin.desc}}
 * Version:           {{plugin.version}}
 * Author:            {{plugin.author}}
 * Author URI:        {{plugin.author_uri}}
 * Requires at least: {{plugin.requires_version}}
 * Tested up to:      {{plugin.tested_version}}
 * Text Domain:       {{plugin.slug}}
 * Domain Path:       /languages
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-moreniche-activator.php
 */
function {{plugin.prefix}}_activate_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-{{plugin.slug}}-activator.php';
	{{plugin.package}}_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-moreniche-deactivator.php
 */
function {{plugin.prefix}}_deactivate_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-{{plugin.slug}}-deactivator.php';
	{{plugin.package}}_Deactivator::deactivate();
}

register_activation_hook( __FILE__, '{{plugin.prefix}}_activate_plugin' );
register_deactivation_hook( __FILE__, '{{plugin.prefix}}_deactivate_plugin' );



/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-{{plugin.slug}}.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function {{plugin.prefix}}_run() {

	${{plugin.function_slug}} = new {{plugin.package}}();
	${{plugin.function_slug}}->run();

}

{{plugin.prefix}}_run();
