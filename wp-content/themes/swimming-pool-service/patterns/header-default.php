<?php
/**
 * Header Default
 * 
 * slug: swimming-pool-service/header-default
 * title: Header Default
 * categories: swimming-pool-service
 */

return array(
    'title'      =>__( 'Header Default', 'swimming-pool-service' ),
    'categories' => array( 'swimming-pool-service' ),
    'content'    => '<!-- wp:group {"className":"header-box-upper","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group header-box-upper" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"border":{"radius":"0px"}},"backgroundColor":"accent"} -->
    <div class="wp-block-columns are-vertically-aligned-center has-accent-background-color has-background" style="border-radius:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":"15%","className":"left-empty"} -->
    <div class="wp-block-column is-vertically-aligned-center left-empty" style="flex-basis:15%"></div>
    <!-- /wp:column -->

    <!-- wp:column {"verticalAlignment":"center","width":"75%","className":"inner-menu-col inner-header","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-column is-vertically-aligned-center inner-menu-col inner-header" style="padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40);flex-basis:75%"><!-- wp:columns {"className":"menu-group","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"margin":{"top":"0","bottom":"0"},"blockGap":{"left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px","topLeft":"10px","topRight":"10px"}}}} -->
    <div class="wp-block-columns menu-group" style="border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)"><!-- wp:column {"verticalAlignment":"center","width":"30%","className":"header-logo","style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"8px","bottom":"8px"},"blockGap":"0"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
    <div class="wp-block-column is-vertically-aligned-center header-logo has-primary-color has-text-color has-link-color" style="padding-top:8px;padding-right:var(--wp--preset--spacing--40);padding-bottom:8px;padding-left:var(--wp--preset--spacing--40);flex-basis:30%"><!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontSize":"25px","fontStyle":"normal","fontWeight":"400"}},"textColor":"accent","fontFamily":"josefin-sans"} /--></div>
    <!-- /wp:column -->

    <!-- wp:column {"verticalAlignment":"center","width":"","className":"header-inner-menu","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
    <div class="wp-block-column is-vertically-aligned-center header-inner-menu" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:navigation {"textColor":"accent","icon":"menu","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account","woocommerce/mini-cart"]},"className":"is-head-menu","style":{"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"300"}},"fontSize":"small","fontFamily":"syne","layout":{"type":"flex","justifyContent":"left"}} --><!-- wp:navigation-link {"label":"Home","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->
            
        <!-- wp:navigation-link {"label":"About Us","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->
        
        <!-- wp:navigation-link {"label":"Gallery","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

        <!-- wp:navigation-link {"label":"Contact","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

        <!-- wp:navigation-link {"label":"Get Pro","type":"","url":"https://www.wpradiant.net/products/pool-service-wordpress-theme","kind":"custom","isTopLevelLink":true,"className":"getpro","opensInNewTab":true} /-->

        <!-- /wp:navigation --></div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"90px","className":"toggler_icon_col","style":{"spacing":{"padding":{"right":"0","left":"0"},"blockGap":"0"}}} -->
    <div class="wp-block-column toggler_icon_col" style="padding-right:0;padding-left:0;flex-basis:90px"><!-- wp:image {"id":15,"width":"25px","height":"auto","aspectRatio":"1","scale":"contain","sizeSlug":"full","linkDestination":"none","align":"left","className":"toggler_icon"} -->
    <figure class="wp-block-image alignleft size-full is-resized toggler_icon"><a href="#"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/toggle.png" alt="" class="wp-image-15" style="aspect-ratio:1;object-fit:contain;width:25px;height:auto"/></a></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:column -->

    <!-- wp:column {"verticalAlignment":"center","width":"10%","className":"right-empty"} -->
    <div class="wp-block-column is-vertically-aligned-center right-empty" style="flex-basis:10%"></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->

    <!-- wp:columns {"className":"pool_toggler_body"} -->
    <div class="wp-block-columns pool_toggler_body"><!-- wp:column {"width":"65%"} -->
    <div class="wp-block-column" style="flex-basis:65%"></div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"35%","className":"toggler_content_col","style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"backgroundColor":"background"} -->
    <div class="wp-block-column toggler_content_col has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30);flex-basis:35%"><!-- wp:image {"id":20,"width":"30px","height":"30px","scale":"contain","sizeSlug":"full","linkDestination":"none","className":"toggler_close"} -->
    <figure class="wp-block-image size-full is-resized toggler_close"><a href="#"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/cross.png" alt="" class="wp-image-20" style="object-fit:contain;width:30px;height:30px"/></a></figure>
    <!-- /wp:image -->

    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent","fontFamily":"lexend_deca"} -->
    <h2 class="wp-block-heading has-accent-color has-text-color has-link-color has-lexend-deca-font-family">'. esc_html__('Phone','swimming-pool-service').'</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"small","fontFamily":"lexend_deca"} -->
    <p class="has-lexend-deca-font-family has-small-font-size" style="font-style:normal;font-weight:400"><a href="tel:+123 324 456 78">'. esc_html__('+123 324 456 78','swimming-pool-service').'</a></p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent","fontFamily":"lexend_deca"} -->
    <h2 class="wp-block-heading has-accent-color has-text-color has-link-color has-lexend-deca-font-family">'. esc_html__('Email','swimming-pool-service').'</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"small","fontFamily":"lexend_deca"} -->
    <p class="has-lexend-deca-font-family has-small-font-size" style="font-style:normal;font-weight:400"><a href="mailto:pool@example.com">'. esc_html__('pool@example.com','swimming-pool-service').'</a></p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent","fontFamily":"lexend_deca"} -->
    <h2 class="wp-block-heading has-accent-color has-text-color has-link-color has-lexend-deca-font-family">'. esc_html__('Address','swimming-pool-service').'</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"small","fontFamily":"lexend_deca"} -->
    <p class="has-lexend-deca-font-family has-small-font-size" style="font-style:normal;font-weight:400"><a href="#">123 Glassford Street New York, USA'. esc_html__('Follow Us','swimming-pool-service').'</a></p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group -->

    <!-- wp:social-links {"openInNewTab":true,"className":"header-social-icon","style":{"spacing":{"margin":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"blockGap":{"left":"var:preset|spacing|20"}}}} -->
    <ul class="wp-block-social-links header-social-icon" style="margin-top:var(--wp--preset--spacing--60);margin-right:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--60);margin-left:var(--wp--preset--spacing--30)"><!-- wp:social-link {"url":"www.facebook.com","service":"facebook"} /-->

    <!-- wp:social-link {"url":"www.instagram.com","service":"instagram"} /-->

    <!-- wp:social-link {"url":"www.twitter.com","service":"x"} /-->

    <!-- wp:social-link {"url":"www.youtube.com","service":"youtube"} /--></ul>
    <!-- /wp:social-links --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->',
    );