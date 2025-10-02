<?php
/**
 * Title: Featured Section 3
 * Slug: patterns-portfolio/featured-section-3
 * Categories: portfolio, gallery, featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Portfolio
 * @subpackage Patterns_Portfolio/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
    
<!-- wp:group {"align":"wide","layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"30rem"}} -->
<div class="wp-block-group alignwide">

    <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
    <div class="wp-block-group alignwide"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.4","fontStyle":"normal","fontWeight":"300"}},"fontSize":"small"} -->
    <p class="has-small-font-size" style="font-style:normal;font-weight:300;line-height:1.4"><?php esc_html_e( 'Recent Projects', 'patterns-portfolio' ); ?></p>
    <!-- /wp:paragraph -->
    
    <!-- wp:group {"align":"full","layout":{"type":"flex","flexWrap":"nowrap"}} -->
    <div class="wp-block-group alignfull"><!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"60px"}},"backgroundColor":"secondary"} -->
    <hr class="wp-block-separator has-text-color has-secondary-color has-alpha-channel-opacity has-secondary-background-color has-background"/>
    <!-- /wp:separator --></div>
    <!-- /wp:group -->
    
    <!-- wp:heading -->
    <h2 class="wp-block-heading"><?php esc_html_e( 'Bring to better disruptive view of innovation.', 'patterns-portfolio' ); ?></h2>
    <!-- /wp:heading --></div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">

    
<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%">

    <!-- wp:pattern {"slug":"patterns-portfolio/card-3"} /-->
    
</div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column" style="flex-basis:60%">
    

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-4.jpg","isUserOverlayColor":true,"minHeight":450,"customGradient":"linear-gradient(180deg,rgba(0,0,0,0) 0%,rgba(10,10,10,0.96) 100%)","style":{"border":{"radius":"3px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="border-radius:3px;min-height:450px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,rgba(0,0,0,0) 0%,rgba(10,10,10,0.96) 100%)"></span><img class="wp-block-cover__image-background" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-4.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover -->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
    
<!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
<h5 class="wp-block-heading has-text-align-center" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Agency Website', 'patterns-portfolio' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"textTransform":"uppercase","letterSpacing":"1px"}},"textColor":"base","fontSize":"x-small"} -->
<p class="has-text-align-center has-base-color has-text-color has-link-color has-x-small-font-size" style="letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Branding', 'patterns-portfolio' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->


</div>
<!-- /wp:column --></div>
<!-- /wp:columns -->


<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column">
    
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-5.jpg","isUserOverlayColor":true,"minHeight":450,"customGradient":"linear-gradient(180deg,rgba(0,0,0,0) 0%,rgba(10,10,10,0.96) 100%)","style":{"border":{"radius":"3px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="border-radius:3px;min-height:450px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,rgba(0,0,0,0) 0%,rgba(10,10,10,0.96) 100%)"></span><img class="wp-block-cover__image-background" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-5.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover -->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
<h5 class="wp-block-heading has-text-align-center" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Grid Mockup', 'patterns-portfolio' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"textTransform":"uppercase","letterSpacing":"1px"}},"textColor":"base","fontSize":"x-small"} -->
<p class="has-text-align-center has-base-color has-text-color has-link-color has-x-small-font-size" style="letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Branding', 'patterns-portfolio' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
    
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-6.jpg","isUserOverlayColor":true,"minHeight":450,"customGradient":"linear-gradient(180deg,rgba(0,0,0,0) 0%,rgba(10,10,10,0.96) 100%)","style":{"border":{"radius":"3px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="border-radius:3px;min-height:450px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,rgba(0,0,0,0) 0%,rgba(10,10,10,0.96) 100%)"></span><img class="wp-block-cover__image-background" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-6.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover -->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
<h5 class="wp-block-heading has-text-align-center" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Agency Website', 'patterns-portfolio' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"textTransform":"uppercase","letterSpacing":"1px"}},"textColor":"base","fontSize":"x-small"} -->
<p class="has-text-align-center has-base-color has-text-color has-link-color has-x-small-font-size" style="letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Branding', 'patterns-portfolio' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
    

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-7.jpg","isUserOverlayColor":true,"minHeight":450,"customGradient":"linear-gradient(180deg,rgba(0,0,0,0) 0%,rgba(10,10,10,0.96) 100%)","style":{"border":{"radius":"3px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="border-radius:3px;min-height:450px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,rgba(0,0,0,0) 0%,rgba(10,10,10,0.96) 100%)"></span><img class="wp-block-cover__image-background" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-7.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover -->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
<h5 class="wp-block-heading has-text-align-center" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Agency Website', 'patterns-portfolio' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"textTransform":"uppercase","letterSpacing":"1px"}},"textColor":"base","fontSize":"x-small"} -->
<p class="has-text-align-center has-base-color has-text-color has-link-color has-x-small-font-size" style="letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Branding', 'patterns-portfolio' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

</div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->