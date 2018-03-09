<?php

/**
 * Fired during plugin activation
 *
 * @link       {{plugin.uri}}
 * @since      1.0.0
 *
 * @package    {{plugin.package}}
 * @subpackage {{plugin.package}}/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    {{plugin.package}}
 * @subpackage {{plugin.package}}/includes
 * @author     {{plugin.author}} <{{plugin.author_email}}>
 */
class {{plugin.package}}_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		update_option( '{{plugin.function_slug}}_active', 1 );
	}

}
