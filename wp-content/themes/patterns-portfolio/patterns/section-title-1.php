<?php
/**
 * Title: Section Title 1
 * Slug: patterns-portfolio/section-title-1
 * Categories: text, featured
 * Description: A layout featuring a title, content, and button group in centered alignment, commonly used for section titles in feature areas.
 *
 * @package    Patterns_Portfolio
 * @subpackage Patterns_Portfolio/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.4","fontStyle":"normal","fontWeight":"300"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-style:normal;font-weight:300;line-height:1.4"><?php esc_html_e( 'About Me', 'patterns-portfolio' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"align":"full","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignfull"><!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"60px"}},"backgroundColor":"secondary"} -->
<hr class="wp-block-separator has-text-color has-secondary-color has-alpha-channel-opacity has-secondary-background-color has-background"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:heading -->
<h2><?php esc_html_e( 'I can develop that help people', 'patterns-portfolio' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->
