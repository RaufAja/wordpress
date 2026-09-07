<?php
/**
 * Banner Section
 * 
 * slug: swimming-pool-service/banner
 * title: Banner
 * categories: swimming-pool-service
 */

return array(
    'title'      =>__( 'Banner', 'swimming-pool-service' ),
    'categories' => array( 'swimming-pool-service' ),
    'content'    => '<!-- wp:group {"className":"slider-main-box pool-banner-section wow zoomInDown","style":{"spacing":{"blockGap":"0","padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained","contentSize":"100%","wideSize":"100%"}} -->
<div class="wp-block-group slider-main-box pool-banner-section wow zoomInDown" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"'.esc_url(get_template_directory_uri()) .'/assets/images/slider.png","id":38,"dimRatio":40,"isUserOverlayColor":true,"minHeight":700,"minHeightUnit":"px","contentPosition":"center center","sizeSlug":"large","className":"banner-section","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"80%","wideSize":"80%"}} -->
<div class="wp-block-cover banner-section" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:700px"><img class="wp-block-cover__image-background wp-image-38 size-large" alt="" src="'.esc_url(get_template_directory_uri()) .'/assets/images/slider.png" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-40 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"center","className":"banner-col01","style":{"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"0","right":"0"}},"border":{"radius":"0px"}}} -->
<div class="wp-block-columns are-vertically-aligned-center banner-col01" style="border-radius:0px;margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50);padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":"","className":"banner-inner-col","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-center banner-inner-col" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"textAlign":"center","className":"banner-heading","style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"45px","lineHeight":"1.5"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontFamily":"teko"} -->
<h2 class="wp-block-heading has-text-align-center banner-heading has-background-color has-text-color has-link-color has-teko-font-family" style="font-size:45px;font-style:normal;font-weight:500;line-height:1.5">'. esc_html__('Reliable Pool Service for a Clean, Sparkling Swim!','swimming-pool-service').'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"banner-text","style":{"typography":{"lineHeight":"1.3"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"upper-heading","fontFamily":"josefin-sans"} -->
<p class="banner-text has-background-color has-text-color has-link-color has-josefin-sans-font-family has-upper-heading-font-size" style="line-height:1.3">'. esc_html__('Keep your pool crystal clear and well-maintained with our professional pool services, including cleaning, repairs, and maintenance, ensuring a safe, refreshing, and enjoyable swimming experience all year round.','swimming-pool-service').'</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"banner-button","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons banner-button"><!-- wp:button {"backgroundColor":"background","textColor":"accent","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"border":{"radius":"50px"},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"medium","fontFamily":"pacifico"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-accent-color has-background-background-color has-text-color has-background has-link-color has-pacifico-font-family has-medium-font-size has-custom-font-size wp-element-button" style="border-radius:50px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--60)">'. esc_html__('Explore','swimming-pool-service').'</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->',
);

    