<?php
/**
 * Title: Featured Section 4
 * Slug: patterns-portfolio/featured-section-4
 * Categories: testimonials, featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Portfolio
 * @subpackage Patterns_Portfolio/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"backgroundColor":"quinary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-quinary-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
    
<!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
    <div class="wp-block-column is-vertically-aligned-center">

<!-- wp:image {"lightbox":{"enabled":false},"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-8.png" style="object-fit:cover"/></figure>
<!-- /wp:image -->
    
</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
    <div class="wp-block-column is-vertically-aligned-center">
    
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.4","fontStyle":"normal","fontWeight":"300"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-style:normal;font-weight:300;line-height:1.4"><?php esc_html_e( 'Testimonials', 'patterns-portfolio' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"align":"full","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignfull"><!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"60px"}},"backgroundColor":"secondary"} -->
<hr class="wp-block-separator has-text-color has-secondary-color has-alpha-channel-opacity has-secondary-background-color has-background"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Customer Voices Hear What They Say !', 'patterns-portfolio' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","wideSize":""}} -->
<div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--60)"><!-- wp:image {"width":"60px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-14.png" style="width:60px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"textColor":"quaternary","fontSize":"medium"} -->
<p class="has-quaternary-color has-text-color has-medium-font-size"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'patterns-portfolio' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"300","lineHeight":"1.7"}},"textColor":"quaternary","fontSize":"small"} -->
<p class="has-quaternary-color has-text-color has-small-font-size" style="font-style:normal;font-weight:300;line-height:1.7"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores', 'patterns-portfolio' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|10"} -->
<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"60px","height":"60px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-rounded","style":{"border":{"width":"4px"}},"borderColor":"primary"} -->
<figure class="wp-block-image aligncenter size-full is-resized has-custom-border is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-9.png" class="has-border-color has-primary-border-color" style="border-width:4px;object-fit:cover;width:60px;height:60px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">

<!-- wp:heading {"textAlign":"left","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
<h5 class="wp-block-heading has-text-align-left" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Savannah Nguyen', 'patterns-portfolio' ); ?></h5>
<!-- /wp:heading -->


<!-- wp:paragraph -->
<p><?php esc_html_e( 'Executive CEO', 'patterns-portfolio' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

</div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->