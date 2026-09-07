<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage swimming-pool-service
 * @since swimming-pool-service 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since swimming-pool-service 1.0
	 *
	 * @return void
	 */
	function swimming_pool_service_register_block_styles() {
		

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'swimming-pool-service-border',
				'label' => esc_html__( 'Borders', 'swimming-pool-service' ),
			)
		);

		
	}
	add_action( 'init', 'swimming_pool_service_register_block_styles' );
}