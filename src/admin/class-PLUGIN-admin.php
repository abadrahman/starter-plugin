<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       {{plugin.uri}}
 * @since      1.0.0
 *
 * @package    {{plugin.package}}
 * @subpackage {{plugin.package}}/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    {{plugin.package}}
 * @subpackage {{plugin.package}}/admin
 * @author     {{plugin.author}} <{{plugin.author_email}}>
 */
class {{plugin.package}}_Admin {

    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $plugin_name    The ID of this plugin.
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
     * @param      string    $plugin_name       The name of this plugin.
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
        add_action( 'admin_enqueue_scripts', array($this, '{{plugin.prefix}}_enqueue_styles') );
        add_action( 'admin_enqueue_scripts', array($this, '{{plugin.prefix}}_enqueue_scripts') );
        add_action( 'admin_menu', array($this, '{{plugin.prefix}}_admin_display'), 80 );

    }


    /**
     * Create a new instance of this class and register hooks
     * @param $plugin_name
     * @param $version
     *
     * @return {{plugin.package}}_Admin
     */
    public static function create($plugin_name, $version){
        $instance = new self($plugin_name, $version);
        $instance->{{plugin.prefix}}_register_hooks();

        return $instance;
    }


    /**
     * Register the stylesheets for the admin area.
     *
     * @since    1.0.0
     */
    public function {{plugin.prefix}}_enqueue_styles() {

		/**
		 * Load all admin facing css here
		 */

        wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/{{plugin.slug}}-admin.min.css', array(), $this->version, 'all' );

    }

    /**
     * Register the JavaScript for the admin area.
     *
     * @since    1.0.0
     */
    public function {{plugin.prefix}}_enqueue_scripts() {

		/**
		 * Load all admin facing scripts here
		 */

        wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/{{plugin.slug}}-admin.min.js', array( 'jquery' ), $this->version, false );

    }

    /**
     * Register the CORE Settings.
     *
     * @since    1.0.0
     */
    public function {{plugin.prefix}}_admin_display() {
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/partials/{{plugin.slug}}-admin-display.php';

    }





}
