<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       {{plugin.uri}}
 * @since      1.0.0
 *
 * @package    {{plugin.package}}
 * @subpackage {{plugin.package}}/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    {{plugin.package}}
 * @subpackage {{plugin.package}}/includes
 * @author     {{plugin.author}} <{{plugin.author_email}}>
 */
class {{plugin.package}}_i18n {
	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $moreniche    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register class hooks
	 *
	 * @since 1.0.0	 *
	 */
	public function {{plugin.prefix}}_register_hooks(){

		// Set locale
		add_action( 'plugins_loaded', array($this, '{{plugin.prefix}}_load_textdomain') );

	}

	/**
	 * Create a new instance of this class and register hooks
	 * @param $moreniche
	 * @param $version
	 *
	 * @return {{plugin.package}}_i18n
	 */
	public static function create($plugin_name, $version){
		$instance = new self($plugin_name, $version);
		$instance->{{plugin.prefix}}_register_hooks();
		return $instance;
	}

	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function {{plugin.prefix}}_load_textdomain() {

		load_plugin_textdomain(
			'{{plugin.slug}}',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
