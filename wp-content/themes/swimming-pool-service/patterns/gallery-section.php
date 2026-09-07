<?php
/**
 * Gallery Section
 * 
 * slug: swimming-pool-service/gallery-section
 * title: Gallery Section
 * categories: swimming-pool-service
 */

    return array(
        'title'      =>__( 'Gallery Section', 'swimming-pool-service' ),
        'categories' => array( 'swimming-pool-service' ),
        'content'    => '<!-- wp:group {"className":"services-box pool-gallery-section","layout":{"type":"constrained","contentSize":"80%"}} -->
         <div class="wp-block-group services-box pool-gallery-section"><!-- wp:group {"className":"service-group","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
         <div class="wp-block-group service-group"><!-- wp:group {"className":"gallery-section-top"} -->
         <div class="wp-block-group gallery-section-top"><!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"},"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
         <div class="wp-block-columns" style="margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:column {"verticalAlignment":"center","width":"","className":"gallery-inner-heading","style":{"spacing":{"blockGap":"0"}}} -->
         <div class="wp-block-column is-vertically-aligned-center gallery-inner-heading"><!-- wp:heading {"textAlign":"center","className":"gallery-heading","style":{"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"typography":{"fontSize":"18px"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"textColor":"secaccent","fontFamily":"rubik"} -->
         <h2 class="wp-block-heading has-text-align-center gallery-heading has-secaccent-color has-text-color has-link-color has-rubik-font-family" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20);font-size:18px">'. esc_html__('Gallery','swimming-pool-service').'</h2>
         <!-- /wp:heading -->

         <!-- wp:paragraph {"align":"center","className":"gallery-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|thirdaccent"}}}},"textColor":"thirdaccent","fontSize":"medium","fontFamily":"josefin-sans"} -->
         <p class="has-text-align-center gallery-text has-thirdaccent-color has-text-color has-link-color has-josefin-sans-font-family has-medium-font-size">'. esc_html__('Expert pool care for crystal-clear,','swimming-pool-service').'</p>
         <!-- /wp:paragraph -->

         <!-- wp:paragraph {"align":"center","className":"gallery-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|thirdaccent"}}}},"textColor":"thirdaccent","fontSize":"medium","fontFamily":"josefin-sans"} -->
         <p class="has-text-align-center gallery-text has-thirdaccent-color has-text-color has-link-color has-josefin-sans-font-family has-medium-font-size">'. esc_html__('hassle-free maintenance.','swimming-pool-service').'</p>
         <!-- /wp:paragraph --></div>
         <!-- /wp:column --></div>
         <!-- /wp:columns --></div>
         <!-- /wp:group -->

         <!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
         <div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:column -->
         <div class="wp-block-column"><!-- wp:gallery {"linkTo":"none","sizeSlug":"full","className":"gallery-section"} -->
         <figure class="wp-block-gallery has-nested-images columns-default is-cropped gallery-section"><!-- wp:image {"id":94,"sizeSlug":"full","linkDestination":"none","className":"wow rollIn"} -->
         <figure class="wp-block-image size-full wow rollIn"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/gallery1.png" alt="" class="wp-image-94"/></figure>
         <!-- /wp:image -->

         <!-- wp:image {"id":95,"sizeSlug":"full","linkDestination":"none","className":"wow bounceInUp center"} -->
         <figure class="wp-block-image size-full wow bounceInUp center"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/gallery2.png" alt="" class="wp-image-95"/></figure>
         <!-- /wp:image -->

         <!-- wp:image {"id":96,"sizeSlug":"full","linkDestination":"none","className":"wow lightSpeedIn"} -->
         <figure class="wp-block-image size-full wow lightSpeedIn"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/gallery3.png" alt="" class="wp-image-96"/></figure>
         <!-- /wp:image -->

         <!-- wp:image {"id":97,"sizeSlug":"full","linkDestination":"none","className":"wow rollIn"} -->
         <figure class="wp-block-image size-full wow rollIn"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/gallery4.png" alt="" class="wp-image-97"/></figure>
         <!-- /wp:image -->

         <!-- wp:image {"id":98,"sizeSlug":"full","linkDestination":"none","className":"wow bounceInUp center"} -->
         <figure class="wp-block-image size-full wow bounceInUp center"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/gallery5.png" alt="" class="wp-image-98"/></figure>
         <!-- /wp:image -->

         <!-- wp:image {"id":99,"sizeSlug":"full","linkDestination":"none","className":"wow lightSpeedIn"} -->
         <figure class="wp-block-image size-full wow lightSpeedIn"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/gallery6.png" alt="" class="wp-image-99"/></figure>
         <!-- /wp:image --></figure>
         <!-- /wp:gallery --></div>
         <!-- /wp:column --></div>
         <!-- /wp:columns --></div>
         <!-- /wp:group --></div>
         <!-- /wp:group -->

         <!-- wp:spacer {"height":"40px"} -->
         <div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
         <!-- /wp:spacer -->',
    );