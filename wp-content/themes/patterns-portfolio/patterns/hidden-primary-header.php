<?php
/**
 * Title: Primary Header
 * Slug: patterns-portfolio/hidden-primary-header
 * Inserter: no
 *
 * @package    Patterns_Portfolio
 * @subpackage Patterns_Portfolio/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull">


<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">

    <!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
    <div class="wp-block-group alignwide">	
        
        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group"> 
                <!-- wp:pattern {"slug":"patterns-portfolio/site-identity"} /-->
                <!-- wp:pattern {"slug":"patterns-portfolio/navigation-menu"} /-->
            </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
        <div class="wp-block-group">
            
        <!-- wp:image {"width":"50px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}}} -->
        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-1.png" style="width:50px"/></figure>
        <!-- /wp:image -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:paragraph {"fontSize":"x-small"} -->
        <p class="has-x-small-font-size"><?php esc_html_e( 'Have any Questions?', 'patterns-portfolio' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"className":"pwp-txt-dec-non","fontSize":"medium"} -->
        <p class="pwp-txt-dec-non has-medium-font-size"><a href="<?php echo esc_url( 'mailto:info@demo.com' ); ?>"><?php esc_html_e( 'info@demo.com', 'patterns-portfolio' ); ?></a></p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group -->
    

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->


