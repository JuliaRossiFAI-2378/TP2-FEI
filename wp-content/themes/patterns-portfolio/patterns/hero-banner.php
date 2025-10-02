<?php
/**
 * Title: Hero Banner
 * Slug: patterns-portfolio/hero-banner
 * Categories: banner
 * Description: A layout for displaying hero banner content with a background and SVGs.
 *
 * @package    Patterns_Portfolio
 * @subpackage Patterns_Portfolio/patterns
 * @since      1.0.0
 */

?>
<!-- wp:cover {"overlayColor":"secondary","isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","contentPosition":"bottom center","metadata":{"name":"Hero Banner"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"0px","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-center" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--30);padding-bottom:0px;padding-left:var(--wp--preset--spacing--30);min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container">

<!-- wp:pattern {"slug":"patterns-portfolio/hero-banner-content"} /-->

</div></div>
<!-- /wp:cover -->
