<?php
/**
 * Title: Page Header With Post Title
 * Slug: patterns-portfolio/single-header
 * Block Types: core/template-part/single-header
 * Description: Page header that displays the post, page or post type title.
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
        <!-- wp:post-title {"textAlign":"left","level":1,"style":{"typography":{"textTransform":"capitalize"}},"textColor":"default","fontSize":"xx-large"} /-->
        </div>
<!-- /wp:group -->
</div>
</div>
<!-- /wp:cover -->