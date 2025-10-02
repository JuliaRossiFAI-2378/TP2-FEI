<?php
/**
 * Title: Featured Section 5
 * Slug: patterns-portfolio/featured-section-5
 * Categories: pricing, featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Portfolio
 * @subpackage Patterns_Portfolio/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
    
<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%">
    
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">

    <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
    <div class="wp-block-group alignwide"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.4","fontStyle":"normal","fontWeight":"300"}},"fontSize":"small"} -->
    <p class="has-small-font-size" style="font-style:normal;font-weight:300;line-height:1.4"><?php esc_html_e( 'Pricing', 'patterns-portfolio' ); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:group {"align":"full","layout":{"type":"flex","flexWrap":"nowrap"}} -->
    <div class="wp-block-group alignfull"><!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"60px"}},"backgroundColor":"secondary"} -->
    <hr class="wp-block-separator has-text-color has-secondary-color has-alpha-channel-opacity has-secondary-background-color has-background"/>
    <!-- /wp:separator --></div>
    <!-- /wp:group -->

    <!-- wp:heading -->
    <h2 class="wp-block-heading"><?php esc_html_e( 'Stay chill and pick your plan', 'patterns-portfolio' ); ?></h2>
    <!-- /wp:heading --></div>
    <!-- /wp:group -->

    <!-- wp:pattern {"slug":"patterns-portfolio/card-4"} /-->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:pattern {"slug":"patterns-portfolio/card-5"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:pattern {"slug":"patterns-portfolio/card-6"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->