<?php
/**
 * Admin functions.
 *
 * @package Swimming Pool Service
 */

define('SWIMMING_POOL_SERVICE_SUPPORT',__('https://wordpress.org/support/theme/swimming-pool-service/','swimming-pool-service'));
define('SWIMMING_POOL_SERVICE_REVIEW',__('https://wordpress.org/support/theme/swimming-pool-service/reviews/#new-post','swimming-pool-service'));
define('SWIMMING_POOL_SERVICE_DOC_URL',__('https://preview.wpradiant.net/tutorial/swimming-pool-service-free/','swimming-pool-service'));
define('SWIMMING_POOL_SERVICE_BUY_NOW',__('https://www.wpradiant.net/products/pool-service-wordpress-theme','swimming-pool-service'));
define('SWIMMING_POOL_SERVICE_LIVE_DEMO',__('https://preview.wpradiant.net/swimming-pool-service/','swimming-pool-service'));
define('SWIMMING_POOL_SERVICE_PRO_DOC',__('https://preview.wpradiant.net/tutorial/swimming-pool-service-pro/','swimming-pool-service'));


/**
 * Register admin page.
 *
 * @since 1.0.0
 */

function swimming_pool_service_admin_menu_page() {

	$swimming_pool_service_theme = wp_get_theme( get_template() );

	add_theme_page(
		$swimming_pool_service_theme->display( 'Name' ),
		$swimming_pool_service_theme->display( 'Name' ),
		'manage_options',
		'swimming-pool-service',
		'swimming_pool_service_do_admin_page'
	);

}
add_action( 'admin_menu', 'swimming_pool_service_admin_menu_page' );

function swimming_pool_service_admin_theme_style() {
	wp_enqueue_style('swimming-pool-service-custom-admin-style', esc_url(get_template_directory_uri()) . '/get-started/getstart.css');
	wp_enqueue_script( 'admin-notice-script', get_template_directory_uri() . '/get-started/js/admin-notice-script.js', array( 'jquery' ), null, true );
    wp_localize_script(
		'admin-notice-script',
		'installPluginData',
		array(
			'ajaxurl'     => admin_url( 'admin-ajax.php' ),
			'nonce'       => wp_create_nonce( 'install_activate_nonce' ),
			'redirectUrl' => admin_url( 'themes.php?page=swimming-pool-service' ),
		)
	);
}
add_action('admin_enqueue_scripts', 'swimming_pool_service_admin_theme_style');

/**
 * Render admin page.
 *
 * @since 1.0.0
 */
function swimming_pool_service_do_admin_page() {

	$swimming_pool_service_theme = wp_get_theme( get_template() );
	?>
	<div class="swimming-pool-service-appearence wrap about-wrap">
		<div class="head-btn">
			<div><h1><?php echo $swimming_pool_service_theme->display( 'Name' ); ?></h1></div>
			
		</div>
		
		<div class="two-col">

			<div class="about-text">
				<?php
					$description_raw = $swimming_pool_service_theme->display( 'Description' );
					$main_description = explode( 'Official', $description_raw );
					?>
				<?php echo wp_kses_post( $main_description[0] ); ?>
        <p>
			    <a class="button button-primary" href="<?php echo esc_url( home_url() ); ?>" target="_blank"><?php esc_html_e( 'Visit Site', 'swimming-pool-service' ); ?></a>
			    <a class="button button-primary" id="form-button" href="<?php echo esc_url( 'https://forms.gle/RhBK4jcPYRm1z38N6' ); ?>" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'Free Theme Installation Support', 'swimming-pool-service' ); ?></a>
		    </p>
        <div class="demo-btn">
				<span>
					<a class="button button-pro" href="<?php echo esc_url( SWIMMING_POOL_SERVICE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Buy Now', 'swimming-pool-service' ); ?></a>
				</span>
				<span>
					<a class="button button-demo" href="<?php echo esc_url( SWIMMING_POOL_SERVICE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e( 'Demo', 'swimming-pool-service' ); ?></a>
				</span>
         <span>
					<a class="button btn-bundle" href="<?php echo esc_url( SWIMMING_POOL_SERVICE_BUY_BUNDLE ); ?>" target="_blank"><?php esc_html_e( 'Buy Bundle', 'swimming-pool-service' ); ?></a>
				</span>
				<span>
					<a class="button button-doc" href="<?php echo esc_url( SWIMMING_POOL_SERVICE_PRO_DOC ); ?>" target="_blank"><?php esc_html_e( 'Documentation', 'swimming-pool-service' ); ?></a>
				</span>
			</div>
			</div><!-- .col -->

			<div class="about-img">
				<a href="<?php echo esc_url( $swimming_pool_service_theme->display( 'ThemeURI' ) ); ?>" target="_blank"><img src="<?php echo trailingslashit( get_template_directory_uri() ); ?>screenshot.png" alt="<?php echo esc_attr( $swimming_pool_service_theme->display( 'Name' ) ); ?>" /></a>
			</div><!-- .col -->

		</div><!-- .two-col -->

  <nav class="nav-tab-wrapper wp-clearfix" aria-label="<?php esc_attr_e( 'Secondary menu', 'swimming-pool-service' ); ?>">
    <a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'swimming-pool-service' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['page'] ) && 'swimming-pool-service' === $_GET['page'] && ! isset( $_GET['tab'] ) ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'About', 'swimming-pool-service' ); ?></a>

    <a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'swimming-pool-service', 'tab' => 'free_vs_pro' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['tab'] ) && 'free_vs_pro' === $_GET['tab'] ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'Compare free Vs Pro', 'swimming-pool-service' ); ?></a>

    <a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'swimming-pool-service', 'tab' => 'changelog' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['tab'] ) && 'changelog' === $_GET['tab'] ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'Changelog', 'swimming-pool-service' ); ?></a>
  </nav>

    <?php
      swimming_pool_service_main_screen();

      swimming_pool_service_changelog_screen();

      swimming_pool_service_free_vs_pro();
}
/**
 * Output the main about screen.
 */
function swimming_pool_service_main_screen() {
  if ( isset( $_GET['page'] ) && 'swimming-pool-service' === $_GET['page'] && ! isset( $_GET['tab'] ) ) {
  ?>
    
<div class="four-col">

	<div class="col">

		<h3><i class="dashicons dashicons-book-alt"></i><?php esc_html_e( 'Free Theme Directives', 'swimming-pool-service' ); ?></h3>

		<p>
			<?php esc_html_e( 'This article will walk you through the different phases of setting up and handling your WordPress website.', 'swimming-pool-service' ); ?>
		</p>

		<p>
			<a class="button green button-primary" href="<?php echo esc_url( SWIMMING_POOL_SERVICE_DOC_URL ); ?>" target="_blank"><?php esc_html_e( 'Free Documentation', 'swimming-pool-service' ); ?></a>
		</p>

	</div><!-- .col -->

	<div class="col">

		<h3><i class="dashicons dashicons-admin-customizer"></i><?php esc_html_e( 'Full Site Editing', 'swimming-pool-service' ); ?></h3>

		<p>
			<?php esc_html_e( 'We have used Full Site Editing which will help you preview your changes live and fast.', 'swimming-pool-service' ); ?>
		</p>

		<p>
			<a class="button button-primary" href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>" ><?php esc_html_e( 'Use Site Editor', 'swimming-pool-service' ); ?></a>
		</p>

	</div><!-- .col -->

	<div class="col">

		<h3><i class="dashicons dashicons-book-alt"></i><?php esc_html_e( 'Leave us a review', 'swimming-pool-service' ); ?></h3>
		<p>
			<?php esc_html_e( 'We would love to hear your feedback.', 'swimming-pool-service' ); ?>
		</p>

		<p>
			<a class="button button-primary" href="<?php echo esc_url( SWIMMING_POOL_SERVICE_REVIEW ); ?>" target="_blank"><?php esc_html_e( 'Review', 'swimming-pool-service' ); ?></a>
		</p>

	</div><!-- .col -->


	<div class="col">

		<h3><i class="dashicons dashicons-sos"></i><?php esc_html_e( 'Help &amp; Support', 'swimming-pool-service' ); ?></h3>

		<p>
			<?php esc_html_e( 'If you have any question/feedback regarding theme, please post in our official support forum.', 'swimming-pool-service' ); ?>
		</p>

		<p>
			<a class="button button-primary" href="<?php echo esc_url( SWIMMING_POOL_SERVICE_SUPPORT ); ?>" target="_blank"><?php esc_html_e( 'Get Support', 'swimming-pool-service' ); ?></a>
		</p>

	</div><!-- .col -->
<div class="col">

		<h3><i class="dashicons dashicons-visibility"></i><?php esc_html_e( 'Live Demo', 'swimming-pool-service' ); ?></h3>

		<p>
			<?php esc_html_e( 'Preview the live demo to explore the homepage, inner pages, and overall design flow before setup.', 'swimming-pool-service' ); ?>
		</p>

		<p>
			<a class="button button-primary" href="<?php echo esc_url( SWIMMING_POOL_SERVICE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e( 'View Live Demo', 'swimming-pool-service' ); ?></a>
		</p>

	</div><!-- .col -->

	<?php $theme_slug = get_stylesheet(); ?>

	<div class="col">
			<h3>
				<i class="dashicons dashicons-admin-links"></i>
				<?php esc_html_e( 'Quick Link', 'swimming-pool-service' ); ?>
			</h3>

			<div class="swimming-pool-service-card-body">
				<div class="swimming-pool-service-card-btn-grp">

					<a class="button button-hero btn-col"
					   href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template_part&postId=' . $theme_slug . '//header&canvas=edit' ) ); ?>"
					   target="_blank">
						<?php esc_html_e( 'Edit Header', 'swimming-pool-service' ); ?>
					</a>

					<a class="button button-hero btn-col"
					   href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template_part&postId=' . $theme_slug . '//footer&canvas=edit' ) ); ?>"
					   target="_blank">
						<?php esc_html_e( 'Edit Footer', 'swimming-pool-service' ); ?>
					</a>

					<a class="button button-hero btn-col"
					   href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template_part&postId=' . $theme_slug . '//sidebar&canvas=edit' ) ); ?>"
					   target="_blank">
						<?php esc_html_e( 'Edit Sidebar', 'swimming-pool-service' ); ?>
					</a>

					<a class="button button-hero btn-col"
					   href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template_part' ) ); ?>"
					   target="_blank">
						<?php esc_html_e( 'All Template Parts', 'swimming-pool-service' ); ?>
					</a>

					<a class="button button-hero btn-col"
					   href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template&postId=' . $theme_slug . '//front-page&canvas=edit' ) ); ?>"
					   target="_blank">
						<?php esc_html_e( 'Edit Frontpage', 'swimming-pool-service' ); ?>
					</a>

					<a class="button button-hero btn-col"
					   href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template&postId=' . $theme_slug . '//archive&canvas=edit' ) ); ?>"
					   target="_blank">
						<?php esc_html_e( 'Edit Archive Page', 'swimming-pool-service' ); ?>
					</a>         

				</div>
			</div>
	</div>
</div>
</div><!-- .four-col -->
  <?php
  }
}

/**
 * Output the changelog screen.
 */
function swimming_pool_service_changelog_screen() {
  if ( isset( $_GET['tab'] ) && 'changelog' === $_GET['tab'] ) {
    global $wp_filesystem;
    ?>
    <div class="wrap about-wrap">
      <p class="about-description"><?php esc_html_e( 'Want to know whats been happening with the latest changes?', 'swimming-pool-service' ); ?></p>
      <?php
        // Get the path to the readme.txt file.
        $readme_file = get_template_directory() . '/README.txt';

        // Check if the readme file exists and is readable.
        if ( file_exists( $readme_file ) && is_readable( $readme_file ) ) {
          $changelog = file_get_contents( $readme_file );
          $changelog_list = swimming_pool_service_parse_changelog( $changelog );
          echo wp_kses_post( $changelog_list );
        } else {
          echo '<p>Changelog file does not exist or is not readable.</p>';
        }
      ?>
    </div>
    <?php
  }
}

/**
 * Parse changelog from readme file.
 * @param  string $content
 * @return string
 */
function swimming_pool_service_parse_changelog( $content ) {
  // Explode content with '== ' to separate main content into an array of headings.
  $content = explode( '== ', $content );

  $changelog_isolated = '';

  // Find the part that starts with 'Changelog ==', i.e., isolate changelog.
  foreach ( $content as $key => $value ) {
    if ( strpos( $value, 'Changelog ==' ) === 0 ) {
      $changelog_isolated = str_replace( 'Changelog ==', '', $value );
    }
  }

  // Explode $changelog_isolated to manipulate it and add HTML elements.
  $changelog_array = explode( '- ', $changelog_isolated );

  // Prepare the HTML structure.
  $changelog = '<pre class="changelog">';
  foreach ( $changelog_array as $value ) {
    // Add opening and closing div and span, only the first span element will have the heading class.
    $value = '<div class="block"><span class="heading">- ' . esc_html( $value ) . '</span></div>';
    // Append the value to the changelog.
    $changelog .= $value;
  }
  $changelog .= '</pre>';

  return wp_kses_post( $changelog );
}

/**
 * Import Demo data for theme using catch themes demo import plugin
 */
function swimming_pool_service_free_vs_pro() {
  if ( isset( $_GET['tab'] ) && 'free_vs_pro' === $_GET['tab'] ) {
  ?>
    <div class="wrap about-wrap">

      <h3 class="about-description"><?php esc_html_e( 'Compare Free Vs Pro', 'swimming-pool-service' ); ?></h3>
      <div class="vs-theme-table">
        <table>
          <thead>
            <tr><th class="head" scope="col"><?php esc_html_e( 'Theme Features', 'swimming-pool-service' ); ?></th>
              <th class="head" scope="col"><?php esc_html_e( 'Free Theme', 'swimming-pool-service' ); ?></th>
              <th class="head" scope="col"><?php esc_html_e( 'Pro Theme', 'swimming-pool-service' ); ?></th>
            </tr>
          </thead>
          <tbody>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><span><?php esc_html_e( 'Responsive Design', 'swimming-pool-service' ); ?></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Painless Setup', 'swimming-pool-service' ); ?></td>
              <td><span class="dashicons dashicons-saved"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Color Options', 'swimming-pool-service' ); ?></td>
              <td><span class="dashicons dashicons-saved"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Premium site demo', 'swimming-pool-service' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Multiple Block Layout', 'swimming-pool-service' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Premium Patterns', 'swimming-pool-service' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Multiple Fonts', 'swimming-pool-service' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Slider Block', 'swimming-pool-service' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Post Listing Block', 'swimming-pool-service' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'WooCommerce Filter Block', 'swimming-pool-service' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Gallery Block', 'swimming-pool-service' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Post Carousel Block', 'swimming-pool-service' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td class="feature feature--empty"></td>
              <td class="feature feature--empty"></td>
              <td headers="comp-2" class="td-btn-2"><a target="_blank" href="<?php echo esc_url( SWIMMING_POOL_SERVICE_BUY_NOW ); ?>" class="sidebar-button single-btn" target="_blank"><?php esc_html_e( 'Buy It Now', 'swimming-pool-service' ); ?></a>

              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  <?php
  }
}