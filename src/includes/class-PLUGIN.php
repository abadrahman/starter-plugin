<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       {{plugin.uri}}
 * @since      1.0.0
 *
 * @package    {{plugin.package}}
 * @subpackage {{plugin.package}}/includes
 */

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    {{plugin.package}}
 * @subpackage {{plugin.package}}/includes
 * @author     {{plugin.author}} <{{plugin.author_email}}>
 */
class {{plugin.package}} {

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $moreniche    The string used to uniquely identify this plugin.
	 */
	protected $plugin_name;

	/**
	 * The current version of the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $version    The current version of the plugin.
	 */
	protected $version;

	/**
	 * The class responsible for defining internationalization functionality
	 * of the plugin.
	 *
	 * @since   1.0.0
	 * @access  protected
	 * @var     {{plugin.package}}_i18n
	 */
	protected $i18n;

	/**
	 * The class responsible for defining all actions that occur in the admin area.
	 *
	 * @since   1.0.0
	 * @access  protected
	 * @var     {{plugin.package}}_Admin
	 */
	protected $admin;

	/**
	 * The class responsible for defining all actions that occur in the public-facing
	 * side of the site.
	 *
	 * @since   1.0.0
	 * @access  protected
	 * @var     {{plugin.package}}_Public
	 */
	protected $public;


	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {

		$this->plugin_name = '{{plugin.slug}}';
		$this->version = '{{plugin.version}}';

	}

	/**
	 * Load the required dependencies for this plugin.	 *
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function load_dependencies() {

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-{{plugin.slug}}-i18n.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-{{plugin.slug}}-admin.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-{{plugin.slug}}-public.php';

	}

	/**
	 * Load class instances and register hooks
	 *
	 * @since   1.0.0
	 * @access  private
	 */
	private function load_classes(){

		$this->i18n = {{plugin.package}}_i18n::create($this->get_plugin_name(), $this->get_version());
		$this->public = {{plugin.package}}_Public::create($this->get_plugin_name(), $this->get_version());
		$this->admin = {{plugin.package}}_Admin::create($this->get_plugin_name(), $this->get_version());

	}

	/**
	 * Run the loader to execute all of the hooks with WordPress.
	 *
	 * @since   1.0.0
	 */
	public function run() {

		$this->load_dependencies();
		$this->load_classes();

	}

	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @since     1.0.0
	 * @return    string    The name of the plugin.
	 */
	public function get_plugin_name() {

		return $this->plugin_name;

	}

	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @since     1.0.0
	 * @return    string    The version number of the plugin.
	 */
	public function get_version() {

		return $this->version;

	}

}
