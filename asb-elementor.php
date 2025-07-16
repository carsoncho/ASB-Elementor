<?php
/**
 * Plugin Name: ASB Elementor Addons
 * Description: Simple hello world widgets for Elementor.
 * Version:     1.0.0
 * Author:      Carson Oldson
 * Text Domain: asb-elementor
 *
 * Requires Plugins: elementor
 * Elementor tested up to: 3.25.0
 * Elementor Pro tested up to: 3.25.0
 */

function register_asb_widgets( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/hello-world-widget-2.php' );

	$widgets_manager->register( new \Elementor_Hello_World_Widget_2() );

}
add_action( 'elementor/widgets/register', 'register_asb_widgets' );

/**
 * 
 */
function asb_plugin_register_frontend_styles() {
	wp_register_style( 'frontend-style-1', plugins_url( 'assets/css/frontend-style-1.css', __FILE__ ) );
}
add_action( 'elementor/frontend/before_register_styles', 'asb_plugin_register_frontend_styles' );

/**
 * 
 */
function asb_plugin_enqueue_frontend_styles() {
	wp_enqueue_style( 'frontend-style-1' );
}
add_action( 'elementor/frontend/before_enqueue_styles', 'asb_plugin_enqueue_frontend_styles' );