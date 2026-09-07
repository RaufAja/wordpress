<?php

define('SWIMMING_POOL_SERVICE_NOTICE_BUY_NOW',__('https://www.wpradiant.net/products/pool-service-wordpress-theme','swimming-pool-service'));

define('SWIMMING_POOL_SERVICE_BUY_BUNDLE',__('https://www.wpradiant.net/products/wordpress-theme-bundle','swimming-pool-service'));

// Upsell
if ( class_exists( 'WP_Customize_Section' ) ) {
	class Swimming_Pool_Service_Upsell_Section extends WP_Customize_Section {
		public $type = 'swimming-pool-service-upsell';
		public $button_text = '';
		public $url = '';
		public $background_color = '';
		public $text_color = '';
		protected function render() {
			$background_color = ! empty( $this->background_color ) ? esc_attr( $this->background_color ) : '#3e5aef';
			$text_color       = ! empty( $this->text_color ) ? esc_attr( $this->text_color ) : '#fff';
			?>
			<li id="accordion-section-<?php echo esc_attr( $this->id ); ?>" class="swimming_pool_service_upsell_section accordion-section control-section control-section-<?php echo esc_attr( $this->id ); ?> cannot-expand">
				<h3 class="accordion-section-title" style="color:#fff; background:<?php echo esc_attr( $background_color ); ?>;border-left-color:<?php echo esc_attr( $background_color ); ?>;">
					<?php echo esc_html( $this->title ); ?>
					<a href="<?php echo esc_url( $this->url ); ?>" class="button button-secondary alignright" target="_blank" style="margin-top: -4px;"><?php echo esc_html( $this->button_text ); ?></a>
				</h3>
			</li>
			<?php
		}
	}
}
function swimming_pool_service_admin_notice_style() {
	wp_enqueue_style('swimming-pool-service-custom-admin-notice-style', esc_url(get_template_directory_uri()) . '/get-started/getstart.css');
}
add_action('admin_enqueue_scripts', 'swimming_pool_service_admin_notice_style');

/**
 * Display the admin notice if not dismissed.
 */
function swimming_pool_service_admin_notice() {
    // Check if the notice is dismissed
    $swimming_pool_service_dismissed = get_user_meta(get_current_user_id(), 'swimming_pool_service_dismissed_notice', true);
    $swimming_pool_service_current_page = '';
    if(isset($_GET['page'])) {
    	$swimming_pool_service_current_page = admin_url( "admin.php?page=".sanitize_text_field($_GET["page"]));
    }

    // Display the notice only if not dismissed
    if (!$swimming_pool_service_dismissed && $swimming_pool_service_current_page != admin_url( "admin.php?page=wordclever-templates")) {
        ?>
        <div class="updated notice notice-success is-dismissible notice-get-started-class" data-notice="get-start" style="display: flex;padding: 10px;">
        		<div class="notice-content">
	        		<div class="notice-holder">
	                        <h5><span class="theme-name"><span><?php echo __('Welcome to Swimming Pool Service', 'swimming-pool-service'); ?></span></h5>
	                        <h1><?php echo __('Enhance Your Website Development with Radiant Blocks!!', 'swimming-pool-service'); ?></h1>
	                        </h3>
	                        <div class="notice-text">
	                            <p class="blocks-text"><?php echo __('Effortlessly craft websites for any niche with Radiant Blocks! Experience seamless functionality and stunning responsiveness as you enhance your digital presence with Block WordPress Themes. Start building your ideal website today!', 'swimming-pool-service') ?></p>
	                        </div>
	                        <a href="javascript:void(0);" id="install-activate-button" class="button admin-button info-button" data-redirect="<?php echo esc_url( admin_url( 'themes.php?page=swimming-pool-service' ) ); ?>">
							   <?php echo __('Getting started', 'swimming-pool-service'); ?>
							</a>


	                       <a href="<?php echo esc_url( SWIMMING_POOL_SERVICE_NOTICE_BUY_NOW ); ?>" target="_blank" id="go-pro-button" class="button admin-button buy-now-button"><?php echo __('Buy Now ', 'swimming-pool-service'); ?></a>

	                        <a href="<?php echo esc_url( 'https://forms.gle/RhBK4jcPYRm1z38N6' ); ?>" target="_blank" rel="noopener noreferrer" id="form-button" class="button admin-button installation-form-button"><?php echo esc_html__( 'Free Theme Installation Support', 'swimming-pool-service' ); ?></a>
	                        
							<a href="<?php echo esc_url( SWIMMING_POOL_SERVICE_BUY_BUNDLE ); ?>" target="_blank" id="bundle-button" class="button admin-button bundle-button"><?php echo __('Get Bundle', 'swimming-pool-service'); ?></a>

	                        <a href="<?php echo esc_url( SWIMMING_POOL_SERVICE_DOC_URL ); ?>" target="_blank" id="doc-button" class="button admin-button bundle-button"><?php echo __('Free Documentation', 'swimming-pool-service'); ?></a>
	            	</div>
	            </div>
                <div class="theme-hero-screens">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/get-started/notice.png'); ?>" />
                </div>
        </div>
        <?php
    }
}

// Hook to display the notice
add_action('admin_notices', 'swimming_pool_service_admin_notice');

/**
 * AJAX handler to dismiss the notice.
 */
function swimming_pool_service_dismissed_notice() {
    // Set user meta to indicate the notice is dismissed
    update_user_meta(get_current_user_id(), 'swimming_pool_service_dismissed_notice', true);
    die();
}

// Hook for the AJAX action
add_action('wp_ajax_swimming_pool_service_dismissed_notice', 'swimming_pool_service_dismissed_notice');

/**
 * Clear dismissed notice state when switching themes.
 */
function swimming_pool_service_switch_theme() {
    // Clear the dismissed notice state when switching themes
    delete_user_meta(get_current_user_id(), 'swimming_pool_service_dismissed_notice');
}

// Hook for switching themes
add_action('after_switch_theme', 'swimming_pool_service_switch_theme');  