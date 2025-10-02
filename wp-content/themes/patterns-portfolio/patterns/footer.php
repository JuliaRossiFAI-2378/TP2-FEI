<?php
/**
 * Title: Footer
 * Slug: patterns-portfolio/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: A pattern for displaying the site footer.
 *
 * @package    Patterns_Portfolio
 * @subpackage Patterns_Portfolio/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0"}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-secondary-background-color has-background">
    
<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
    
<!-- wp:column {"verticalAlignment":"center","width":"80%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:80%">
    
<!-- wp:group {"metadata":{},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide">
    
<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.4","fontStyle":"normal","fontWeight":"300"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-style:normal;font-weight:300;line-height:1.4"><?php esc_html_e( 'Get in Touch', 'patterns-portfolio' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"align":"full","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignfull"><!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"60px"}},"backgroundColor":"default"} -->
<hr class="wp-block-separator has-text-color has-default-color has-alpha-channel-opacity has-default-background-color has-background"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|default"}}}},"textColor":"default"} -->
<h2 class="wp-block-heading has-default-color has-text-color has-link-color"><?php esc_html_e( 'Let\'s Create Something Great', 'patterns-portfolio' ); ?></h2>
<!-- /wp:heading -->

</div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%">

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Let\'s Talk', 'patterns-portfolio' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->


</div>
<!-- /wp:column --></div>
<!-- /wp:columns -->



<!-- wp:separator {"align":"wide","backgroundColor":"base","className":"is-style-wide"} -->
<hr class="wp-block-separator alignwide has-text-color has-base-color has-alpha-channel-opacity has-base-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|60"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns alignwide"
    style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
    
<!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|default"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"textTransform":"uppercase","letterSpacing":"1px","lineHeight":"1.2","fontSize":"20px"},"layout":{"selfStretch":"fixed","flexSize":"100px"}}} /-->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|default"}}}},"textColor":"default","fontSize":"small"} -->
<p class="has-default-color has-text-color has-link-color has-small-font-size"><?php esc_html_e( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy', 'patterns-portfolio' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"default","iconColorValue":"#ffffff","size":"has-normal-icon-size","align":"left","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
<ul class="wp-block-social-links alignleft has-normal-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"whatsapp"} /--></ul>
<!-- /wp:social-links -->
</div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"20%"} -->
<div class="wp-block-column" style="flex-basis:20%">
    
<!-- wp:heading {"level":5,"textColor":"default"} -->
<h5 class="wp-block-heading has-default-color has-text-color"><?php esc_html_e( 'Links', 'patterns-portfolio' ); ?></h5>
<!-- /wp:heading -->


<!-- wp:navigation {"textColor":"default","overlayMenu":"never","style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Blog', 'patterns-portfolio' ); ?>","url":"#"} /-->

	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'About', 'patterns-portfolio' ); ?>","url":"#"} /-->

	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'FAQs', 'patterns-portfolio' ); ?>","url":"#"} /-->

	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Authors', 'patterns-portfolio' ); ?>","url":"#"} /-->
<!-- /wp:navigation -->

</div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%">
    
<!-- wp:heading {"level":5,"textColor":"default"} -->
<h5 class="wp-block-heading has-default-color has-text-color"><?php esc_html_e( 'Contact Info', 'patterns-portfolio' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"20px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|default"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-2.png"  style="width:20px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|default"}}}},"textColor":"default","fontSize":"x-small"} -->
<p class="has-default-color has-text-color has-link-color has-x-small-font-size"><?php esc_html_e( '60 East 65th Street, New York City, NY 10065', 'patterns-portfolio' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"20px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|default"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-3.png"  style="width:20px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"pwp-txt-dec-non","style":{"elements":{"link":{"color":{"text":"var:preset|color|default"}}}},"textColor":"default","fontSize":"x-small"} -->
<p class="has-default-color pwp-txt-dec-non has-text-color has-link-color has-x-small-font-size"><a href="<?php echo esc_url( 'mailto:info@example.com' ); ?>"><?php esc_html_e( 'info@example.com', 'patterns-portfolio' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"20px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|default"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-4.png" style="width:20px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"pwp-txt-dec-non","style":{"elements":{"link":{"color":{"text":"var:preset|color|default"}}}},"textColor":"default","fontSize":"x-small"} -->
<p class="has-default-color pwp-txt-dec-non has-text-color has-link-color has-x-small-font-size"><a href="<?php echo esc_url( 'tel:(629) 555-0129' ); ?>"><?php esc_html_e( '(629) 555-0129', 'patterns-portfolio' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

</div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"color":{"background":"#1f1f1f4d"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#1f1f1f4d;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">
    
<!-- wp:pattern {"slug":"patterns-portfolio/copyright"} /-->
</div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"patterns-portfolio/scroll-to-top-button"} /-->
 
</div>
<!-- /wp:group -->

