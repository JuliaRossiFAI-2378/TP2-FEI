<?php
/**
 * The template part for Top Header
 *
 * @package Scary Halloween 
 * @subpackage scary-halloween
 * @since scary-halloween 1.0
 */
?>

<div class="main-header <?php if( get_theme_mod( 'scary_halloween_sticky_header', false) == 1 || get_theme_mod( 'scary_halloween_stickyheader_hide_show', false) == 1) { ?> header-sticky"<?php } else { ?>close-sticky <?php } ?>">
  <div class="container">
    <div class="main-topbar ps-2">
      <div class="row">
        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12 align-self-center">
          <div class="logo text-center pb-0 pb-md-0">
            <?php if ( has_custom_logo() ) : ?>
              <div class="site-logo"><?php the_custom_logo(); ?></div>
            <?php endif; ?>
            <?php $scary_halloween_blog_info = get_bloginfo( 'name' ); ?>
              <?php if ( ! empty( $scary_halloween_blog_info ) ) : ?>
                <?php if ( is_front_page() && is_home() ) : ?>
                  <?php if( get_theme_mod('scary_halloween_logo_title_hide_show',true) == 1){ ?>
                    <p class="site-title mb-0 text-center"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                  <?php } ?>
                <?php else : ?>
                  <?php if( get_theme_mod('scary_halloween_logo_title_hide_show',true) == 1){ ?>
                    <p class="site-title mb-0 text-center"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                  <?php } ?>
                <?php endif; ?>
              <?php endif; ?>
              <?php
                $scary_halloween_description = get_bloginfo( 'description', 'display' );
                if ( $scary_halloween_description || is_customize_preview() ) :
              ?>
              <?php if( get_theme_mod('scary_halloween_tagline_hide_show',false) == 1){ ?>
                <p class="site-description mb-0 text-center">
                  <?php echo esc_html($scary_halloween_description); ?>
                </p>
              <?php } ?>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12 align-self-center">
          <?php if (get_theme_mod('scary_halloween_topbar_section_hide_show', true) || get_theme_mod('scary_halloween_resp_topbar_hide_show',true)) { ?>
            <div class="contact-info">
              <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 align-self-center mail">
                  <?php if(get_theme_mod('scary_halloween_email_address') != ''){ ?>
                    <i class="<?php echo esc_attr(get_theme_mod('scary_halloween_email_address_icon','me-2 fa-solid fa-envelope-open-text')); ?>"></i><a href="mailto:<?php echo esc_attr(get_theme_mod('scary_halloween_email_address',''));?>"><?php echo esc_html(get_theme_mod('scary_halloween_email_address',''));?></a>
                  <?php } ?>
                </div>
                <div class="col-xl-4 col-lg-3 col-md-4 col-sm-12 col-12 align-self-center location">
                  <?php if(get_theme_mod('scary_halloween_topbar_location_text') != ''){ ?>
                    <a href="<?php echo esc_url(get_theme_mod('scary_halloween_track_locatin_url',false));?>" target="_blank">
                      <p class="mb-0"> <i class="<?php echo esc_attr(get_theme_mod('scary_halloween_topbar_location_icon','me-2 fa-solid fa-location-dot')); ?>"></i><?php echo esc_html(get_theme_mod('scary_halloween_topbar_location_text')) ?></p>
                    </a>
                  <?php }?>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 align-self-center phone-number">
                  <?php if(get_theme_mod('scary_halloween_phone_number') != ''){ ?>
                    <span><i class="<?php echo esc_attr(get_theme_mod('scary_halloween_phone_icon','fa-solid fa-phone')); ?> me-2"></i><a href="tel:<?php echo esc_attr( get_theme_mod('scary_halloween_phone_number','') ); ?>"><?php echo esc_html(get_theme_mod('scary_halloween_phone_number',''));?></a></span>
                  <?php }?>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-2 col-sm-6 col-12 align-self-center topbar-social-icon">
                  <?php if (is_active_sidebar('topbar-social-icon')) : ?>
                    <?php dynamic_sidebar('topbar-social-icon'); ?>
                  <?php else : ?>
                    <!-- Default Social Icons Widgets -->
                      <div class="widget">
                          <ul class="custom-social-icons" >
                            <li><a href="https://facebook.com" target="_blank"><i class="fab fa-facebook"></i></a></li> 
                            <li><a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a></li> 
                            <li><a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li> 
                            <li><a href="https://youtube.com" target="_blank"><i class="fab fa-youtube"></i></a></li>                     
                          </ul>
                      </div>
                  <?php endif; ?>  
                </div>
              </div>
            </div>
          <?php }?>
          <div class="row">
            <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-3 col-sm-3 col-3 align-self-center header-sec-top">
              <?php get_template_part('template-parts/header/navigation'); ?>
            </div>
            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6 align-self-center">
              <?php if( get_theme_mod('scary_halloween_topbar_button_text') != '' ){ ?>
                <div class="topbar-btn text-center">
                  <a href="<?php echo esc_html(get_theme_mod('scary_halloween_topbar_button_link')); ?>"><?php echo esc_html( get_theme_mod('scary_halloween_topbar_button_text')); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('scary_halloween_topbar_button_text')); ?></span></a>
                </div>
              <?php } ?>
            </div>
            <div class="col-xxl-1 col-xl-1 col-lg-2 col-md-3 col-sm-3 col-3 align-self-center">
              <?php if (get_theme_mod('scary_halloween_search_hide_show', true)){ ?>
                <div class="search-box">
                  <span><a href="#"><i class='<?php echo esc_attr(get_theme_mod('scary_halloween_search_open_icon','fas fa-search')); ?>'></i></a></span>
                </div>
                <div class="serach_outer">
                  <div class="closepop"><a href="#maincontent"><i class="<?php echo esc_attr(get_theme_mod('scary_halloween_search_close_icon','fa fa-window-close')); ?>"></i></a></div>
                  <div class="serach_inner">
                    <?php get_search_form(); ?>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>