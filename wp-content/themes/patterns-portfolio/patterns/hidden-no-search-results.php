<?php
/**
 * Title: No Search Result
 * Slug: patterns-portfolio/hidden-no-search-results
 * Inserter: no
 *
 * @package    Patterns_Portfolio
 * @subpackage Patterns_Portfolio/patterns
 * @since      1.0.0
 */

?>
<!-- wp:paragraph -->
<p>
<?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'patterns-portfolio' ); ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php echo esc_html_x( 'Search', 'label', 'patterns-portfolio' ); ?>","placeholder":"<?php echo esc_attr_x( 'Search...', 'placeholder for search field', 'patterns-portfolio' ); ?>","showLabel":false,"buttonText":"<?php esc_attr_e( 'Search', 'patterns-portfolio' ); ?>","buttonUseIcon":true} /-->
