<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://github.com/gmarokov/mvp-widgets-plugin
 * @since      0.1
 *
 * @package    Mvp_Widgets
 * @subpackage Mvp_Widgets/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Mvp_Widgets
 * @subpackage Mvp_Widgets/admin
 * @author     Georgi Marokov <georgi.marokov@gmail.com>
 */
class Mvp_Widgets_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    0.1
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    0.1
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    0.1
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the custom post types
	 *
	 * @since    0.1
	 */
	public function register_custom_post_types() {
		
		/**
		* This function is provided for demonstration purposes only.
		*
		* An instance of this class should be passed to the run() function
		* defined in Mvp_Widgets_Loader as all of the hooks are defined
		* in that particular class.
		*
		* The Mvp_Widgets_Loader will then create the relationship
		* between the defined hooks and the functions defined in this
		* class.
		*/
		$custom_post_types_files = glob(plugin_dir_path( dirname( __FILE__ ) ) . 'includes/custom_post_types/*.php');
		
		foreach ($custom_post_types_files as $file) {
			require_once($file);   
		}
		
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    0.1
	 */
	function register_mvp_widgets() { 

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Mvp_Widgets_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Mvp_Widgets_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		$widget_files = glob(plugin_dir_path( dirname( __FILE__ ) ) . 'includes/widgets/*.php');
		
		foreach ($widget_files as $file) {
			require_once($file);   
		}
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    0.1
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Mvp_Widgets_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Mvp_Widgets_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/mvp-widgets-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    0.1
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Mvp_Widgets_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Mvp_Widgets_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/mvp-widgets-admin.js', array( 'jquery' ), $this->version, false );

	}

}
