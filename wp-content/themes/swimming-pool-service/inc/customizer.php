<?php
/**
 * Customizer
 * 
 * @package WordPress
 * @subpackage swimming-pool-service
 * @since swimming-pool-service 1.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function swimming_pool_service_customize_register( $wp_customize ) {
	$wp_customize->add_section( new Swimming_Pool_Service_Upsell_Section($wp_customize,'upsell_section',array(
		'title'            => __( 'Swimming Pool Service Pro', 'swimming-pool-service' ),
		'button_text'      => __( 'Upgrade Pro', 'swimming-pool-service' ),
		'url'              => 'https://www.wpradiant.net/products/pool-service-wordpress-theme',
		'priority'         => 0,
	)));
}
add_action( 'customize_register', 'swimming_pool_service_customize_register' );

/**
 * Enqueue script for custom customize control.
 */
function swimming_pool_service_custom_control_scripts() {
	wp_enqueue_script( 'swimming-pool-service-custom-controls-js', get_template_directory_uri() . '/assets/js/custom-controls.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-sortable' ), '1.0', true );
	wp_enqueue_style( 'swimming-pool-service-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
}
add_action( 'customize_controls_enqueue_scripts', 'swimming_pool_service_custom_control_scripts' );