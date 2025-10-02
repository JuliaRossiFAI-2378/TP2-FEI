<?php
/**
 * Title: Card 6
 * Slug: patterns-portfolio/card-6
 * Categories: featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Portfolio
 * @subpackage Patterns_Portfolio/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"0"},"border":{"radius":"3px"}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="border-radius:3px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)"><!-- wp:image {"width":"60px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|default"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-17.png" style="width:60px"/></figure>
<!-- /wp:image -->
<!-- wp:spacer {"height":"var:preset|spacing|10"} -->
<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:heading {"textAlign":"left","level":4,"textColor":"default"} -->
<h4 class="wp-block-heading has-text-align-left has-default-color has-text-color"><?php esc_html_e( 'Static frontend design', 'patterns-portfolio' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|default"}}},"spacing":{"padding":{"right":"var:preset|spacing|10","left":"var:preset|spacing|10"}}},"textColor":"default","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-default-color has-text-color has-link-color" style="padding-right:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:list {"className":"is-style-checkmark-list","fontSize":"small"} -->
<ul class="wp-block-list is-style-checkmark-list has-small-font-size"><!-- wp:list-item -->
<li><?php esc_html_e( 'Lorem ipsum dolor sit amet', 'patterns-portfolio' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Lorem ipsum dolor sit amet', 'patterns-portfolio' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Lorem ipsum dolor sit amet', 'patterns-portfolio' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Lorem ipsum dolor sit amet', 'patterns-portfolio' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"left","textColor":"default"} -->
<h2 class="wp-block-heading has-text-align-left has-default-color has-text-color"><?php esc_html_e( '$69', 'patterns-portfolio' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"var:preset|spacing|20"} -->
<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Order Now', 'patterns-portfolio' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

</div>
<!-- /wp:group -->