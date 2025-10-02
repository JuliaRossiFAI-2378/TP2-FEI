<?php
/**
 * Title: Archives
 * Slug: patterns-portfolio/archives
 * Categories: posts
 * Description: Display a date-based archive of posts, commonly placed in sidebars, footers, or site maps.
 *
 * @package    Patterns_Portfolio
 * @subpackage Patterns_Portfolio/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
    
<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading"><?php esc_html_e( 'Archives', 'patterns-portfolio' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:archives {"showPostCounts":true} /-->

</div>
<!-- /wp:group -->
