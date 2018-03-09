<?php

/**
 * Fired during plugin deactivation
 *
 * @link       {{plugin.uri}}
 * @since      1.0.0
 *
 * @package    {{plugin.package}}
 * @subpackage {{plugin.package}}/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    {{plugin.package}}
 * @subpackage {{plugin.package}}/includes
 * @author     {{plugin.author}} <{{plugin.author_email}}>
 */
class {{plugin.package}}_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {
		update_option( '{{plugin.function_slug}}_active', 0 );
	}

}
