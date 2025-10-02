<?php
/**
 * Title: Archive Page Header
 * Slug: patterns-portfolio/list-archive-header
 * Categories: header
 * Block Types: core/template-part/list-archive-header
 * Description: Layout template for displaying the header of an archive page.
 *
 * @package    Patterns_Portfolio
 * @subpackage Patterns_Portfolio/patterns
 * @since      1.0.0
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-4.jpg","dimRatio":90,"overlayColor":"secondary","isUserOverlayColor":true,"focalPoint":{"x":0.5,"y":0.5},"minHeight":40,"minHeightUnit":"vh","align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|default"}},"heading":{"color":{"text":"var:preset|color|default"}}}},"textColor":"default","layout":{"type":"constrained"}} -->
    <div class="wp-block-cover alignfull has-default-color has-text-color has-link-color" style="min-height:40vh"><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-90 has-background-dim"></span><img class="wp-block-cover__image-background" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-4.jpg" style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%"/><div class="wp-block-cover__inner-container">
    <!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
    <div class="wp-block-group alignwide">
       <!-- wp:heading {"metadata":{"bindings":{"content":{"source":"patterns-portfolio/archive-title","args":{"key":"archive-title"}}}}, "textAlign":"left","level":1,"style":{"typography":{"textTransform":"capitalize"}},"textColor":"default","fontSize":"xx-large"} -->
			<h1 class="wp-block-heading has-text-align-left has-default-color has-text-color has-xx-large-font-size" style="text-transform:capitalize"></h1>
			<!-- /wp:heading -->
    </div>
<!-- /wp:group -->
</div>
</div>
<!-- /wp:cover -->