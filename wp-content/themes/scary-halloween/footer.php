<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Scary Halloween 
 */
?>

    <footer role="contentinfo">
        <div class="footer-section">
            <?php if (get_theme_mod('scary_halloween_footer_hide_show', true)){ ?>
                <aside id="footer" class="copyright-wrapper" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'scary-halloween' ); ?>">
                    <div class="container">
                        <?php
                            $scary_halloween_count = 0;
                            
                            if ( is_active_sidebar( 'footer-1' ) ) {
                                $scary_halloween_count++;
                            }
                            if ( is_active_sidebar( 'footer-2' ) ) {
                                $scary_halloween_count++;
                            }
                            if ( is_active_sidebar( 'footer-3' ) ) {
                                $scary_halloween_count++;
                            }
                            if ( is_active_sidebar( 'footer-4' ) ) {
                                $scary_halloween_count++;
                            }
                            // $scary_halloween_count == 0 none
                            if ( $scary_halloween_count == 1 ) {
                                $scary_halloween_colmd = 'col-md-12 col-sm-12';
                            } elseif ( $scary_halloween_count == 2 ) {
                                $scary_halloween_colmd = 'col-md-6 col-sm-6';
                            } elseif ( $scary_halloween_count == 3 ) {
                                $scary_halloween_colmd = 'col-md-4 col-sm-4';
                            } else {
                                $scary_halloween_colmd = 'col-lg-3 col-md-6 col-sm-6';
                            }
                        ?>
                        <div class="row wow bounceInUp center delay-1000">
                            <div class="<?php echo !is_active_sidebar('footer-1') ? 'footer_hide' : esc_attr($scary_halloween_colmd); ?> col-lg-3 col-md-6 col-xs-12 footer-block">
                                <?php if (is_active_sidebar('footer-1')) : ?>
                                    <?php dynamic_sidebar('footer-1'); ?>
                                <?php else : ?>
                                    <aside id="search" class="widget py-3" role="complementary" aria-label="firstsidebar">
                                        <h3 class="widget-title"><?php esc_html_e( 'Search', 'scary-halloween' ); ?></h3>
                                        <?php get_search_form(); ?>
                                    </aside>
                                <?php endif; ?>
                            </div>
                            <div class="<?php echo !is_active_sidebar('footer-2') ? 'footer_hide' : esc_attr($scary_halloween_colmd); ?> col-lg-3 col-md-6 col-xs-12 footer-block">
                                <?php if (is_active_sidebar('footer-2')) : ?>
                                    <?php dynamic_sidebar('footer-2'); ?>
                                <?php else : ?>
                                    <aside id="archives" class="widget py-3" role="complementary" >
                                        <h3 class="widget-title"><?php esc_html_e( 'Archives', 'scary-halloween' ); ?></h3>
                                        <ul>
                                            <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
                                        </ul>
                                    </aside>
                                <?php endif; ?>
                            </div>
                            <div class="<?php echo !is_active_sidebar('footer-3') ? 'footer_hide' : esc_attr($scary_halloween_colmd); ?> col-lg-3 col-md-6 col-xs-12 footer-block">
                                <?php if (is_active_sidebar('footer-3')) : ?>
                                    <?php dynamic_sidebar('footer-3'); ?>
                                <?php else : ?>
                                    <aside id="meta" class="widget py-3" role="complementary" >
                                        <h3 class="widget-title"><?php esc_html_e( 'Meta', 'scary-halloween' ); ?></h3>
                                        <ul>
                                            <?php wp_register(); ?>
                                            <li><?php wp_loginout(); ?></li>
                                            <?php wp_meta(); ?>
                                        </ul>
                                    </aside>
                                <?php endif; ?>
                            </div>
                            <div class="<?php echo !is_active_sidebar('footer-4') ? 'footer_hide' : esc_attr($scary_halloween_colmd); ?> col-lg-3 col-md-6 col-xs-12 footer-block">
                                <?php if (is_active_sidebar('footer-4')) : ?>
                                    <?php dynamic_sidebar('footer-4'); ?>
                                <?php else : ?>
                                    <aside id="categories" class="widget py-3" role="complementary"> 
                                        <h3 class="widget-title"><?php esc_html_e( 'Categories', 'scary-halloween' ); ?></h3>          
                                        <ul>
                                            <?php wp_list_categories('title_li=');  ?>
                                        </ul>
                                    </aside>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </aside>
            <?php }?>
        </div>
        <div class="footer <?php if( get_theme_mod( 'scary_halloween_copyright_sticky', false) == 1) { ?> copyright-sticky"<?php } else { ?>close-sticky <?php } ?>">
            <?php if (get_theme_mod('scary_halloween_copyright_hide_show', true)) {?>
                <div id="footer-2" class="text-center">
                  	<div class="copyright container">
                        <p class="mb-0 py-3"><?php scary_halloween_credit(); ?> <?php echo esc_html(get_theme_mod('scary_halloween_footer_text',__('By VWThemes','scary-halloween'))); ?></p>
                        <?php if(get_theme_mod('scary_halloween_footer_icon',false) != false) {?>
                            <?php dynamic_sidebar('footer-icon'); ?>
                        <?php }?>
                        <?php if( get_theme_mod( 'scary_halloween_hide_show_scroll',true) == 1 || get_theme_mod( 'scary_halloween_resp_scroll_top_hide_show',true) == 1) { ?>
                            <?php $scary_halloween_theme_lay = get_theme_mod( 'scary_halloween_scroll_top_alignment','Right');
                            if($scary_halloween_theme_lay == 'Left'){ ?>
                                <a href="#" class="scrollup left"><i class="<?php echo esc_attr(get_theme_mod('scary_halloween_scroll_top_icon','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'scary-halloween' ); ?></span></a>
                            <?php }else if($scary_halloween_theme_lay == 'Center'){ ?>
                                <a href="#" class="scrollup center"><i class="<?php echo esc_attr(get_theme_mod('scary_halloween_scroll_top_icon','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'scary-halloween' ); ?></span></a>
                            <?php }else{ ?>
                                <a href="#" class="scrollup"><i class="<?php echo esc_attr(get_theme_mod('scary_halloween_scroll_top_icon','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'scary-halloween' ); ?></span></a>
                            <?php }?>
                        <?php }?>
                  	</div>
                  	<div class="clear"></div>
                </div>
            <?php }?>
        </div>    
    </footer>
        <?php wp_footer(); ?>
    </body>
</html>