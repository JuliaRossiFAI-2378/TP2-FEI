<?php
/**
 * Related posts based on categories and tags.
 * 
 */

 $scary_halloween_archive_year  = esc_html(get_the_time('Y')); 
 $scary_halloween_archive_month = esc_html(get_the_time('m')); 
 $scary_halloween_archive_day   = esc_html(get_the_time('d')); 

$scary_halloween_related_posts_taxonomy = get_theme_mod( 'scary_halloween_related_posts_taxonomy', 'category' );

$scary_halloween_post_args = array(
    'posts_per_page'    => absint( get_theme_mod( 'scary_halloween_related_posts_count', '3' ) ),
    'orderby'           => 'rand',
    'post__not_in'      => array( get_the_ID() ),
);

$scary_halloween_tax_terms = wp_get_post_terms( get_the_ID(), 'category' );
$scary_halloween_terms_ids = array();
foreach( $scary_halloween_tax_terms as $tax_term ) {
	$scary_halloween_terms_ids[] = $tax_term->term_id;
}

$scary_halloween_post_args['category__in'] = $scary_halloween_terms_ids; 

if(get_theme_mod('scary_halloween_related_post',true)==1){

$scary_halloween_related_posts = new WP_Query( $scary_halloween_post_args );

if ( $scary_halloween_related_posts->have_posts() ) : ?>
    <div class="related-post wow zoomInUp delay-1000" data-wow-duration="2s">
        <h3><?php echo esc_html(get_theme_mod('scary_halloween_related_post_title','Related Post'));?></h3>
        <div class="row">
            <?php while ( $scary_halloween_related_posts->have_posts() ) : $scary_halloween_related_posts->the_post(); ?>
                <div class="col-lg-4 col-md-6">
                    <article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
                        <div class="post-main-box">
                            <?php if( get_theme_mod( 'scary_halloween_related_image_hide_show',true) == 1) { ?>
                                <div class="box-image">
                                    <?php 
                                        if(has_post_thumbnail()) { 
                                          the_post_thumbnail(); 
                                        }
                                    ?>
                                </div>
                            <?php } ?>
                            <h2 class="section-title"><a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
                            <?php if( get_theme_mod( 'scary_halloween_related_toggle_postdate',true) == 1 || get_theme_mod( 'scary_halloween_related_toggle_author',true) == 1 || get_theme_mod( 'scary_halloween_related_toggle_comments',true) == 1 || get_theme_mod( 'scary_halloween_related_toggle_time',true) == 1) { ?>
                                <div class="post-info p-2 my-3">
                                  <?php if(get_theme_mod('scary_halloween_related_toggle_postdate',true)==1){ ?>
                                    <i class="<?php echo esc_attr(get_theme_mod('scary_halloween_related_postdate_icon','fas fa-calendar-alt')); ?> me-2"></i><span class="entry-date"><a href="<?php echo esc_url( get_day_link( $scary_halloween_archive_year, $scary_halloween_archive_month, $scary_halloween_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span><span><?php echo esc_html(get_theme_mod('scary_halloween_related_post_meta_field_separator', '|'));?></span>
                                  <?php } ?>

                                  <?php if(get_theme_mod('scary_halloween_related_toggle_author',true)==1){ ?>
                                    <i class="<?php echo esc_attr(get_theme_mod('scary_halloween_related_author_icon','fas fa-user')); ?> me-2"></i><span class="entry-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span><span><?php echo esc_html(get_theme_mod('scary_halloween_related_post_meta_field_separator', '|'));?></span>
                                  <?php } ?>

                                  <?php if(get_theme_mod('scary_halloween_related_toggle_comments',true)==1){ ?>
                                    <i class="<?php echo esc_attr(get_theme_mod('scary_halloween_related_comments_icon','fa fa-comments')); ?> me-2" aria-hidden="true"></i><span class="entry-comments"><?php comments_number( __('0 Comment', 'scary-halloween'), __('0 Comments', 'scary-halloween'), __('% Comments', 'scary-halloween') ); ?></span><span><?php echo esc_html(get_theme_mod('scary_halloween_related_post_meta_field_separator', '|'));?></span>
                                  <?php } ?>

                                  <?php if(get_theme_mod('scary_halloween_related_toggle_time',true)==1){ ?>
                                    <i class="<?php echo esc_attr(get_theme_mod('scary_halloween_related_time_icon','fas fa-clock')); ?> me-2"></i><span class="entry-time"><?php echo esc_html( get_the_time() ); ?></span>
                                  <?php } ?>
                                  <?php echo esc_html (scary_halloween_edit_link()); ?>
                                </div>
                            <?php } ?>

                            <div class="new-text">
                                <div class="entry-content">
                                    <?php $scary_halloween_theme_lay = get_theme_mod( 'scary_halloween_excerpt_settings','Excerpt');
                                        if($scary_halloween_theme_lay == 'Content'){ ?>
                                          <?php the_content(); ?>
                                        <?php }
                                        if($scary_halloween_theme_lay == 'Excerpt'){ ?>
                                          <?php if(get_the_excerpt()) { ?>
                                            <p><?php $scary_halloween_excerpt = get_the_excerpt(); echo esc_html( scary_halloween_string_limit_words( $scary_halloween_excerpt, esc_attr(get_theme_mod('scary_halloween_related_posts_excerpt_number','30')))); ?></p>
                                          <?php }?>
                                        <?php }?>
                                </div>
                            </div>
                            <?php if( get_theme_mod('scary_halloween_related_button_text','Read More') != ''){ ?>
                                <div class="more-btn">
                                    <a href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html(get_theme_mod('scary_halloween_related_button_text',__('Read More','scary-halloween')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('scary_halloween_related_button_text',__('Read More','scary-halloween')));?></span><span class="top-icon"></span></a>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="clearfix"></div>
                    </article>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif;
wp_reset_postdata();

}