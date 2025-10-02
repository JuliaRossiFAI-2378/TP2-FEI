<?php
/**
 * Title: Primary Sidebar
 * Slug: patterns-portfolio/primary-sidebar
 * Categories: posts
 * Block Types: core/template-part/primary-sidebar
 * Description: Display a collection of blocks for primary sidebar template part.
 *
 * @package    Patterns_Portfolio
 * @subpackage Patterns_Portfolio/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
    <!-- wp:pattern {"slug":"patterns-portfolio/search-form"} /-->
    <!-- wp:pattern {"slug":"patterns-portfolio/latest-posts"} /-->
    <!-- wp:pattern {"slug":"patterns-portfolio/latest-comments"} /-->
</div>
<!-- /wp:group -->