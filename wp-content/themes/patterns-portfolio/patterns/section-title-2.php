<?php
/**
 * Title: Section Title 2
 * Slug: patterns-portfolio/section-title-2
 * Categories: text, featured
 * Description: A layout featuring a title, content, and button group in centered alignment, commonly used for section titles in feature areas.
 *
 * @package    Patterns_Portfolio
 * @subpackage Patterns_Portfolio/patterns
 * @since      1.0.0
 */

?>
<!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
    
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.4","fontStyle":"normal","fontWeight":"300"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-style:normal;font-weight:300;line-height:1.4"><?php esc_html_e( 'Services', 'patterns-portfolio' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"align":"full","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignfull"><!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"60px"}},"backgroundColor":"secondary"} -->
<hr class="wp-block-separator has-text-color has-secondary-color has-alpha-channel-opacity has-secondary-background-color has-background"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Unique Ideas for Your Business', 'patterns-portfolio' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
    
<!-- wp:paragraph {"align":"left","textColor":"base","fontSize":"medium"} -->
<p class="has-text-align-left has-base-color has-text-color has-medium-font-size"><?php esc_html_e( 'We Envision Design &amp; Develop Digital Digital Experience that create possibility in an ever changing world.', 'patterns-portfolio' ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:column --></div>
<!-- /wp:columns -->