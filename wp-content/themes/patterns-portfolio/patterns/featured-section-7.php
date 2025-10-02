<?php
/**
 * Title: Featured Section 7
 * Slug: patterns-portfolio/featured-section-7
 * Categories: query, posts, featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Portfolio
 * @subpackage Patterns_Portfolio/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"metadata":{},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

<!-- wp:group {"align":"wide","layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"30rem"}} -->
<div class="wp-block-group alignwide">

    <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
    <div class="wp-block-group alignwide"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.4","fontStyle":"normal","fontWeight":"300"}},"fontSize":"small"} -->
    <p class="has-small-font-size" style="font-style:normal;font-weight:300;line-height:1.4"><?php esc_html_e( 'News &amp; Articles', 'patterns-portfolio' ); ?></p>
    <!-- /wp:paragraph -->
    
    <!-- wp:group {"align":"full","layout":{"type":"flex","flexWrap":"nowrap"}} -->
    <div class="wp-block-group alignfull"><!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"60px"}},"backgroundColor":"secondary"} -->
    <hr class="wp-block-separator has-text-color has-secondary-color has-alpha-channel-opacity has-secondary-background-color has-background"/>
    <!-- /wp:separator --></div>
    <!-- /wp:group -->
    
    <!-- wp:heading  -->
    <h2 class="wp-block-heading"><?php esc_html_e( 'Get The Latest Articles About The Different Aspects', 'patterns-portfolio' ); ?></h2>
    <!-- /wp:heading --></div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
    
<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%">
    
<!-- wp:query {"queryId":0,"query":{"perPage":"2","pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"aspectRatio":"1","width":"400px","dimRatio":100,"customGradient":"linear-gradient(180deg,rgba(0,0,0,0) 30%,rgba(10,10,10,0.96) 100%)"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
    
<!-- wp:post-title {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} /-->

<!-- wp:post-excerpt {"excerptLength":25,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"base"} /-->

<!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"},":hover":{"color":{"text":"var:preset|color|accent"}}}}},"textColor":"primary","fontSize":"x-small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

</div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%">
    
<!-- wp:query {"queryId":46,"query":{"perPage":"1","pages":0,"offset":"4","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:cover {"useFeaturedImage":true,"isUserOverlayColor":true,"minHeight":550,"customGradient":"linear-gradient(180deg,rgba(0,0,0,0) 0%,rgba(10,10,10,0.96) 100%)","contentPosition":"bottom center","style":{"border":{"radius":"5px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="border-radius:5px;min-height:550px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient" style="background:linear-gradient(180deg,rgba(0,0,0,0) 0%,rgba(10,10,10,0.96) 100%)"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"},":hover":{"color":{"text":"var:preset|color|accent"}}}}},"textColor":"primary","fontSize":"x-small"} /-->

<!-- wp:post-title {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|default"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"default"} /--></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

</div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

