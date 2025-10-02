<?php
/**
 * Title: Card 3
 * Slug: patterns-portfolio/card-3
 * Categories: featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Portfolio
 * @subpackage Patterns_Portfolio/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-3.jpg","isUserOverlayColor":true,"minHeight":450,"customGradient":"linear-gradient(180deg,rgba(0,0,0,0) 0%,rgba(10,10,10,0.96) 100%)","style":{"border":{"radius":"3px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="border-radius:3px;min-height:450px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,rgba(0,0,0,0) 0%,rgba(10,10,10,0.96) 100%)"></span><img class="wp-block-cover__image-background" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-3.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover -->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
<h5 class="wp-block-heading has-text-align-center" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Mobile Application', 'patterns-portfolio' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"textTransform":"uppercase","letterSpacing":"1px"}},"textColor":"base","fontSize":"x-small"} -->
<p class="has-text-align-center has-base-color has-text-color has-link-color has-x-small-font-size" style="letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Package', 'patterns-portfolio' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->