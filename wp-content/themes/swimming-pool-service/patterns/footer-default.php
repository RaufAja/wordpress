<?php
/**
 * Footer Default
 * 
 * slug: swimming-pool-service/footer-default
 * title: Footer Default
 * categories: swimming-pool-service
 */
$theme_data = wp_get_theme();
$theme_uri = $theme_data->get( 'ThemeURI' );
$author_uri = $theme_data->get( 'AuthorURI' );
$wordpress_uri = '//wordpress.org/';
return array(
    'title'      =>__( 'Footer Default', 'swimming-pool-service' ),
    'categories' => array( 'swimming-pool-service' ),
    'content'    => '<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|fourground"}}},"color":{"background":"#000"}},"textColor":"background","fontFamily":"josefin-sans","layout":{"type":"constrained","contentSize":"85%"}} -->
<div class="wp-block-group has-background-color has-text-color has-background has-link-color has-raleway-font-family" style="background-color:#000"><!-- wp:columns {"className":"alignwide footer-content","style":{"spacing":{"padding":{"top":"35px","bottom":"35px","right":"0px","left":"0px"},"blockGap":{"top":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
    <div class="wp-block-columns alignwide footer-content" style="margin-top:0;margin-bottom:0;padding-top:35px;padding-right:0px;padding-bottom:35px;padding-left:0px"><!-- wp:column {"width":"%","className":"footer-box","style":{"spacing":{"blockGap":"20px","padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","bottom":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontFamily":"josefin-sans"} -->
    <div class="wp-block-column footer-box has-background-color has-text-color has-link-color has-josefin-sans-font-family" style="padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"className":"wp-block-heading","style":{"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"500"}},"textColor":"background","fontFamily":"josefin-sans"} -->
    <h2 class="wp-block-heading has-background-color has-text-color has-josefin-sans-font-family" style="font-size:22px;font-style:normal;font-weight:500">'. esc_html__('About Us','swimming-pool-service') .'</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"className":"has-medium-font-size","style":{"typography":{"lineHeight":"1.3"}},"fontSize":"medium","fontFamily":"josefin-sans"} -->
    <p class="has-medium-font-size has-raleway-font-family" style="line-height:1.3">'. esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','swimming-pool-service') .'</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:social-links {"customIconBackgroundColor":"#ffffff47","iconBackgroundColorValue":"#ffffff47","openInNewTab":true,"size":"has-normal-icon-size","className":"is-style-default social-box","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"0","right":"0"},"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
    <ul class="wp-block-social-links has-normal-icon-size has-icon-background-color is-style-default social-box" style="margin-top:var(--wp--preset--spacing--50);margin-right:0;margin-bottom:var(--wp--preset--spacing--50);margin-left:0"><!-- wp:social-link {"url":"www.facebook.com","service":"facebook"} /-->
    
    <!-- wp:social-link {"url":"www.twitter.com","service":"twitter"} /-->
    
    <!-- wp:social-link {"url":"www.instagram.com","service":"instagram"} /-->
    
    <!-- wp:social-link {"url":"www.linkedin.com","service":"linkedin"} /--></ul>
    <!-- /wp:social-links --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"className":"footer-box","style":{"spacing":{"blockGap":"20px","padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","bottom":"var:preset|spacing|50"}}}} -->
    <div class="wp-block-column footer-box" style="padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"className":"wp-block-heading","style":{"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"500"}},"textColor":"background","fontFamily":"josefin-sans"} -->
    <h2 class="wp-block-heading has-background-color has-text-color has-josefin-sans-font-family" style="font-size:22px;font-style:normal;font-weight:500">'. esc_html__('Quick Links','swimming-pool-service') .'</h2>
    <!-- /wp:heading -->
    
    <!-- wp:navigation {"textColor":"#E1E1E1","overlayMenu":"never","className":"is-head-menu","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontFamily":"josefin-sans","layout":{"type":"flex","justifyContent":"left","orientation":"vertical"}} -->
    <!-- wp:navigation-link {"label":"Home","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->
    
    <!-- wp:navigation-link {"label":"About Us","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->
    
    <!-- wp:navigation-link {"label":"Services","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->
    
    <!-- wp:navigation-link {"label":"Gallery","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->
    <!-- /wp:navigation --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"className":"footer-box","style":{"spacing":{"padding":{"right":"0","left":"var:preset|spacing|40","bottom":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"medium","fontFamily":"bricolage-grotesque"} -->
    <div class="wp-block-column footer-box has-background-color has-text-color has-link-color has-bricolage-grotesque-font-family has-medium-font-size" style="padding-right:0;padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"className":"wp-block-heading","style":{"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"500"}},"textColor":"background","fontFamily":"josefin-sans"} -->
    <h2 class="wp-block-heading has-background-color has-text-color has-josefin-sans-font-family" style="font-size:22px;font-style:normal;font-weight:500">'. esc_html__('Our Services','swimming-pool-service') .'</h2>
    <!-- /wp:heading -->
    
    <!-- wp:navigation {"textColor":"#E1E1E1","overlayMenu":"never","className":"is-head-menu","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontFamily":"josefin-sans","layout":{"type":"flex","justifyContent":"left","orientation":"vertical"}} -->
    <!-- wp:navigation-link {"label":"Pool Cleaning","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->
    
    <!-- wp:navigation-link {"label":"Pool Maintenance","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->
    
    <!-- wp:navigation-link {"label":"Pool Repair","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->
    
    <!-- wp:navigation-link {"label":"Pool Installation","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->
    <!-- /wp:navigation --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"className":"footer-box","style":{"spacing":{"blockGap":"20px","padding":{"bottom":"var:preset|spacing|50"}}}} -->
    <div class="wp-block-column footer-box" style="padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:heading {"className":"wp-block-heading","style":{"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"500"}},"textColor":"background","fontFamily":"josefin-sans"} -->
    <h2 class="wp-block-heading has-background-color has-text-color has-josefin-sans-font-family" style="font-size:22px;font-style:normal;font-weight:500">'. esc_html__('Contact Us','swimming-pool-service') .'</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"left","className":"has-link-color","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"background","fontSize":"medium","fontFamily":"josefin-sans"} -->
    <p class="has-text-align-left has-link-color has-background-color has-text-color has-raleway-font-family has-medium-font-size" style="font-style:normal;font-weight:400"><span class="dashicons dashicons-email-alt"></span><a href="mailto:info@example.com">'. esc_html__('info@example.com','swimming-pool-service') .'</a></p>
    <!-- /wp:paragraph -->
    
    <!-- wp:paragraph {"className":"has-link-color","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"background","fontSize":"medium","fontFamily":"josefin-sans"} -->
    <p class="has-link-color has-background-color has-text-color has-raleway-font-family has-medium-font-size" style="font-style:normal;font-weight:500"><span class="dashicons dashicons-phone"></span><a href="tel:+1 (143) 456-7897">'. esc_html__('+1 (143) 456-7897','swimming-pool-service') .'</a></p>
    <!-- /wp:paragraph -->
    
    <!-- wp:paragraph {"className":"has-link-color","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"background","fontSize":"medium","fontFamily":"josefin-sans"} -->
    <p class="has-link-color has-background-color has-text-color has-raleway-font-family has-medium-font-size" style="font-style:normal;font-weight:500"><span class="dashicons dashicons-admin-home"></span> <a href="#">'. esc_html__('123 Glassford Street New York, USA','swimming-pool-service') .'</a></p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->
    
  <!-- wp:group {"className":"copyright-text","gradient":"primary-gradient","layout":{"type":"constrained","contentSize":"85%"}} -->
<div class="wp-block-group copyright-text has-primary-gradient-gradient-background has-background"><!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"width":"100%"} -->
    <div class="wp-block-column" style="flex-basis:100%"><!-- wp:paragraph {"align":"center","className":"has-raleway-font-family","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"},":hover":{"color":{"text":"var:preset|color|accent"}}}}},"textColor":"background","fontSize":"medium","fontFamily":"josefin-sans"} -->
    <p class="has-text-align-center has-josefin-sans-font-family has-background-color has-text-color has-link-color has-raleway-font-family has-medium-font-size"><a href="
<p class="has-text-align-center has-raleway-font-family has-background-color has-text-color has-link-color has-poppins-font-family has-medium-font-size"><a href="'. esc_url( $theme_uri ) .'" target="_blank">'. esc_html__(' Swimming Pool Service WordPress Theme','swimming-pool-service') .'</a>'. esc_html__(' By ','swimming-pool-service') .'<a href="'. esc_url( $author_uri ) .'" target="_blank">'. esc_html__('WP Radiant','swimming-pool-service') .'</a> |'. esc_html__(' Proudly powered by','swimming-pool-service') .' <a href="'. esc_url( $wordpress_uri ) .'" target="_blank">  '. esc_html__('WordPress','swimming-pool-service') .'</a></p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->
    
    <!-- wp:buttons -->
    <div class="wp-block-buttons"><!-- wp:button {"className":"scroll-top-button"} -->
    <div class="wp-block-button scroll-top-button"><a class="wp-block-button__link wp-element-button"><span class="dashicons dashicons-arrow-up-alt"></span></a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons -->',
);