<?php
/**
 * Swimming Pool Service functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package swimming-pool-service
 * @since swimming-pool-service 1.0
 */

if ( ! function_exists( 'swimming_pool_service_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since swimming-pool-service 1.0
	 *
	 * @return void
	 */
	function swimming_pool_service_support() {

		load_theme_textdomain( 'swimming-pool-service', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		add_theme_support( 'align-wide' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		add_theme_support( 'responsive-embeds' );
		
		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );
	}

endif;

add_action( 'after_setup_theme', 'swimming_pool_service_support' );

if ( ! function_exists( 'swimming_pool_service_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since swimming-pool-service 1.0
	 *
	 * @return void
	 */
	function swimming_pool_service_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'swimming-pool-service-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		wp_enqueue_style( 
			'swimming-pool-service-animate-css',
			esc_url(get_template_directory_uri()).'/assets/css/animate.css' 
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'swimming-pool-service-style' );

		wp_style_add_data( 'swimming-pool-service-style', 'rtl', 'replace' );

		wp_enqueue_style( 'dashicons' );
	}

endif;

add_action( 'wp_enqueue_scripts', 'swimming_pool_service_styles' );

/* Enqueue Custom Js */
function swimming_pool_service_scripts() {

	wp_enqueue_script( 
		'swimming-pool-service-wow', esc_url(get_template_directory_uri()) . '/assets/js/wow.js', 
		array('jquery') 
	);

	wp_enqueue_script(
		'swimming-pool-service-custom', esc_url(get_template_directory_uri()) . '/assets/js/custom.js',
		array('jquery')
	);

	wp_enqueue_script(
        'swimming-pool-service-scroll-to-top',
        esc_url(get_template_directory_uri()) . '/assets/js/scroll-to-top.js',
        array(), 
        null, 
        true // Load in footer
    );
}
add_action( 'wp_enqueue_scripts', 'swimming_pool_service_scripts' );

/* Enqueue admin-notice-script js */
add_action('admin_enqueue_scripts', function ($hook) {
    if ($hook !== 'appearance_page_swimming-pool-service') return;

    wp_enqueue_script('admin-notice-script', get_template_directory_uri() . '/get-started/js/admin-notice-script.js', ['jquery'], null, true);
    wp_localize_script('admin-notice-script', 'pluginInstallerData', [
        'ajaxurl'     => admin_url('admin-ajax.php'),
        'nonce'       => wp_create_nonce('install_activate_nonce'), // Match this with PHP nonce check
        'redirectUrl' => admin_url('themes.php?page=swimming-pool-service'),
    ]);
});

add_action('wp_ajax_check_wordclever_activation', function () {
    include_once ABSPATH . 'wp-admin/includes/plugin.php';
    $swimming_pool_service_plugin_file = 'wordclever-ai-content-writer/wordclever.php';

    if (is_plugin_active($swimming_pool_service_plugin_file)) {
        wp_send_json_success(['active' => true]);
    } else {
        wp_send_json_success(['active' => false]);
    }
});
add_filter( 'woocommerce_enable_setup_wizard', '__return_false' );

function swimming_pool_service_theme_setting() {
	
	// Add block patterns
	require get_template_directory() . '/inc/block-pattern.php';

	// Add block Style
	require get_template_directory() . '/inc/block-style.php';

	// TGM
	require get_template_directory() . '/inc/tgm/plugin-activation.php';

	// Get Started
	require get_template_directory() . '/get-started/getstart.php';

	// Get Notice
	require get_template_directory() . '/get-started/notice.php';

	// Get Notice
	require get_template_directory() . '/inc/customizer.php';

}
add_action('after_setup_theme', 'swimming_pool_service_theme_setting');


/* Enqueue admin-notice-script js */
add_action('admin_enqueue_scripts', function ($hook) {
    if ($hook !== 'appearance_page_swimming-pool-service') return;

    wp_enqueue_script('admin-notice-script', get_template_directory_uri() . '/get-started/js/admin-notice-script.js', ['jquery'], null, true);
    wp_localize_script('admin-notice-script', 'pluginInstallerData', [
        'ajaxurl'     => admin_url('admin-ajax.php'),
        'nonce'       => wp_create_nonce('install_activate_nonce'), // Match this with PHP nonce check
        'redirectUrl' => admin_url('themes.php?page=swimming-pool-service'),
    ]);
});

add_action('wp_ajax_check_plugin_activation', function () {
    if (!isset($_POST['plugin']) || empty($_POST['plugin'])) {
        wp_send_json_error(['message' => 'Missing plugin identifier']);
    }

    include_once ABSPATH . 'wp-admin/includes/plugin.php';

    // Map plugin identifiers to their main files
    $swimming_pool_service_plugin_map = [
        'woocommerce'          => 'woocommerce/woocommerce.php',
        'wordclever_ai_content_writer'    => 'wordclever-ai-content-writer/wordclever.php',
    ];

    $swimming_pool_service_requested_plugin = sanitize_text_field($_POST['plugin']);

    if (!isset($swimming_pool_service_plugin_map[$swimming_pool_service_requested_plugin])) {
        wp_send_json_error(['message' => 'Invalid plugin']);
    }

    $swimming_pool_service_plugin_file = $swimming_pool_service_plugin_map[$swimming_pool_service_requested_plugin];
    $swimming_pool_service_is_active   = is_plugin_active($swimming_pool_service_plugin_file);

    wp_send_json_success(['active' => $swimming_pool_service_is_active]);
});

add_filter( 'woocommerce_enable_setup_wizard', '__return_false' );