<?php
/**
 * Title: Hero Banner Content
 * Slug: patterns-portfolio/hero-banner-content
 * Categories: featured
 * Description: A layout that displays a title, content, and button group, suited for showcasing a hero banner.
 *
 * @package    Patterns_Portfolio
 * @subpackage Patterns_Portfolio/patterns
 * @since      1.0.0
 */

?>
<!-- wp:columns {"metadata":{"name":"Hero content"},"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|80"}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center">
    
<!-- wp:column {"verticalAlignment":"center","width":"60%","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">

<!-- wp:spacer {"height":"var:preset|spacing|80"} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

    
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php 
printf(
    esc_html__('👋 Hello, I\'m %s', 'patterns-portfolio'),
    '<mark style="background-color:rgba(0, 0, 0, 0);" class="has-inline-color has-primary-color">' . esc_html__('John Doe', 'patterns-portfolio') . '</mark>'
);
?>
</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"300","lineHeight":"1.5"}},"textColor":"default","fontSize":"medium"} -->
<p class="has-default-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:300;line-height:1.5"><?php esc_html_e( 'I\'m creative designer, and I\'m very passionate and dedicated to my work. Say Hello Maecenas finibus nec sem ut imperdiet. Ut tincidunt est ac dolor aliquam sodales.', 'patterns-portfolio' ); ?></p>
<!-- /wp:paragraph -->

 </div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|60"} -->
<div style="height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->


<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|80"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
    
<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase","letterSpacing":"1px"}},"textColor":"default","fontSize":"x-small"} -->
<p class="has-default-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:400;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Find with Me', 'patterns-portfolio' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"default","iconColorValue":"#ffffff","size":"has-normal-icon-size","className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"whatsapp"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
    
<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase","letterSpacing":"1px"}},"textColor":"default","fontSize":"x-small"} -->
<p class="has-default-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:400;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Best skill On', 'patterns-portfolio' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group">
    
<!-- wp:image {"width":"40px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|default"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-6.png" style="width:40px"/></figure>
<!-- /wp:image -->
<!-- wp:image {"width":"40px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|default"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-5.png" style="width:40px"/></figure>
<!-- /wp:image -->
<!-- wp:image {"width":"40px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|default"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-7.png" style="width:40px"/></figure>
<!-- /wp:image -->


</div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
    

<!-- wp:group {"style":{"dimensions":{"minHeight":"550px"},"color":{"gradient":"linear-gradient(180deg,rgba(0,0,0,0) 15%,rgb(30,33,37) 0%)"}},"layout":{"type":"default"}} -->
<div class="wp-block-group has-background" style="background:linear-gradient(180deg,rgba(0,0,0,0) 15%,rgb(30,33,37) 0%);min-height:550px">

<!-- wp:image {"width":"auto","height":"700px","sizeSlug":"full","linkDestination":"none","align":"center","style":{"color":[]}} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-1.png" style="width:auto;height:700px"/></figure>
<!-- /wp:image -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:column --></div>
<!-- /wp:columns -->