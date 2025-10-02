<?php
/**
 * Template Name: Custom Home Page
 */
get_header();

?>
<!-- banner section -->
<main id="maincontent" role="main">

  <?php do_action( 'scary_halloween_above_slider' ); ?>
  
  <?php 
    $scary_halloween_number = get_theme_mod('scary_halloween_slide_number');
    if($scary_halloween_number != ''){
  ?>
    <section class="slider-section wow fadeInRightBig" data-wow-delay=".25s">
      <div id="slider" class="mw-100 m-auto p-0">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel" data-type="multi" data-interval="false">
          <div class="carousel-inner" role="listbox">
            <?php for ($scary_halloween_i=1; $scary_halloween_i<=$scary_halloween_number; $scary_halloween_i++) {?>
              <div <?php if($scary_halloween_i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
                <?php if ( get_theme_mod('scary_halloween_slider_bg_img'.$scary_halloween_i) != "" ) {?>
                  <img class="slider-carousel-img" src="<?php echo esc_url(get_theme_mod('scary_halloween_slider_bg_img'.$scary_halloween_i)); ?>" alt="" title="#slidecaption">
                <?php } ?>
                <div class="bat-img">
                  <div class="row">
                    <?php 
                      for ($scary_halloween_j = 1; $scary_halloween_j <= 4; $scary_halloween_j++) {
                        $scary_halloween_image_url = get_theme_mod('scary_halloween_slider_img1');
                        if (empty($scary_halloween_image_url)) {
                          $scary_halloween_image_url = get_template_directory_uri() . '/assets/images/bat.png'; }?>
                        <div class="col-xl-4 col-lg-3 col-md-3">
                          <img class="bat<?php echo $scary_halloween_j; ?>" src="<?php echo esc_url($scary_halloween_image_url); ?>" alt="" title="#slidecaption">
                        </div>
                    <?php }?>
                  </div>
                </div>
                <div class="carousel-caption">
                  <div class="inner_carousel text-center">
                    <?php if(get_theme_mod('scary_halloween_slider_title'.$scary_halloween_i) != ''){ ?>
                      <h1><?php echo esc_html(get_theme_mod('scary_halloween_slider_title'.$scary_halloween_i)); ?></h1>
                    <?php }?>
                    <?php if(get_theme_mod('scary_halloween_slider_text'.$scary_halloween_i) != ''){ ?>
                      <p class="slider-text my-2"><?php echo esc_html(get_theme_mod('scary_halloween_slider_text'.$scary_halloween_i)); ?></p>
                    <?php }?>
                    <?php if( get_theme_mod('scary_halloween_slider_button_text'.$scary_halloween_i) != '' ){ ?>
                      <div class="event-btn text-center mt-4">
                        <a href="<?php echo esc_html(get_theme_mod('scary_halloween_slider_button_link'.$scary_halloween_i)); ?>"><?php echo esc_html( get_theme_mod('scary_halloween_slider_button_text'.$scary_halloween_i)); ?><i class="<?php echo esc_attr(get_theme_mod('scary_halloween_slider_btn_icon'.$scary_halloween_i,'fa-solid fa-angle-right')); ?> ps-2"></i><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('scary_halloween_slider_button_text'.$scary_halloween_i)); ?></span></a>
                      </div>
                    <?php } ?>
                    <?php if(get_theme_mod('scary_halloween_slider_word'.$scary_halloween_i) != ''){ ?>
                      <span class="slider-word"><?php echo esc_html(get_theme_mod('scary_halloween_slider_word'.$scary_halloween_i)); ?></span>
                    <?php }?>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>
        </div> 
        <?php if( get_theme_mod( 'scary_halloween_display_slider_icons', true) == true ) { ?>
          <a class="carousel-control-prev" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev" role="button">
            <span class="carousel-control-prev-icon w-auto h-auto" aria-hidden="true"><i class="<?php echo esc_attr(get_theme_mod('scary_halloween_slider_previous_icon','fa-solid fa-angle-left')); ?>" ></i></span>
            <span class="screen-reader-text"><?php esc_html_e( 'Previous','scary-halloween' );?></span>
          </a>
          <a class="carousel-control-next" data-bs-target="#carouselExampleIndicators" data-bs-slide="next" role="button">
            <span class="carousel-control-next-icon w-auto h-auto" aria-hidden="true"><i class="<?php echo esc_attr(get_theme_mod('scary_halloween_slider_next_icon','fa-solid fa-angle-right')); ?>" ></i></span>
            <span class="screen-reader-text"><?php esc_html_e( 'Next','scary-halloween' );?></span>
          </a>  
        <?php }?>
        <div class="clearfix"></div>
      </div>
    </section>
  <?php }?>
  <?php do_action( 'scary_halloween_below_slider' ); ?>

  <!-- Event Section -->
  <?php if (get_theme_mod('scary_halloween_event_section_hide_show', true)){ ?>
    <section id="event-section" class="pt-5 wow fadeInLeftBig" data-wow-delay=".25s">
      <div class="container">
        <div class="section-content text-center mb-4 pb-1">
          <?php if(get_theme_mod('scary_halloween_event_section_text') != '') {?>
            <p class="section-text mb-0"><?php echo esc_html(get_theme_mod('scary_halloween_event_section_text')) ?></p>
          <?php }?>
          <?php if(get_theme_mod('scary_halloween_event_section_title') != '') {?>
            <h2 class="section-title"><?php echo esc_html(get_theme_mod('scary_halloween_event_section_title')) ?></h2>
          <?php }?>
        </div>
        <div class="event-card">
          <?php 
            $scary_halloween_args = array(
              'post_type'      => 'mep_events', 
              'post_status'    => 'publish', 
              'posts_per_page' => -1, 
              'order'          => 'ASC',  
              'orderby'        => 'date' 
            );

            $scary_halloween_query = new WP_Query($scary_halloween_args);

            if ($scary_halloween_query->have_posts()) : ?>
              <div class="container">
                <div class="row">
                  <?php while ($scary_halloween_query->have_posts()) : 
                    $scary_halloween_query->the_post();
                    $scary_halloween_post_id = get_the_ID();

                    $scary_halloween_event_date = get_post_meta($scary_halloween_post_id, 'event_start_date', true);
                    $scary_halloween_event_time = get_post_meta($scary_halloween_post_id, 'event_start_time', true);
                    $scary_halloween_event_image = get_the_post_thumbnail_url($scary_halloween_post_id, 'full');
                    ?>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-4">
                      <div class="event-card">
                        <div class="row">
                          <div class="col-xl-4 col-lg-4 col-md-5 col-sm-12 col-12 image-box">
                            <?php if ($scary_halloween_event_image) : ?>
                              <img src="<?php echo esc_url($scary_halloween_event_image); ?>" class="event-card-img" alt="<?php the_title_attribute(); ?>">
                            <?php endif; ?>
                          </div>
                          <div class="col-xl-8 col-lg-8 col-md-7 col-sm-12 col-12">
                            <div class="card-body">
                              <?php if ($scary_halloween_event_date) : ?>
                                <p class="event-date mb-0"><?php echo esc_html($scary_halloween_event_date); ?></p>
                              <?php endif; ?>
                              <h3 class="event-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                              <div class="event-text mb-3"><?php the_excerpt(); ?></div>
                              <?php if ($scary_halloween_event_time) : ?>
                                <p class="event-time"><?php echo esc_html($scary_halloween_event_time); ?></p>
                              <?php endif; ?>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php endwhile; ?>
                </div>
              </div>
              <?php wp_reset_postdata();
            else :
              echo '<p>No events found.</p>';
            endif;
          ?>
        </div>
        <?php 
          $scary_halloween_event_side_img = get_theme_mod('scary_halloween_event_side_img'); 
          if (!empty($scary_halloween_event_side_img)) { ?>
              <img class="event-img" src="<?php echo esc_url($scary_halloween_event_side_img); ?>" alt="">
          <?php } else { ?>
              <img class="event-img" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/halloween-img.png'); ?>" alt="Default Image">
        <?php } ?>
      </div>
    </section>
  <?php }?>
  <?php do_action( 'scary_halloween_after_service' ); ?>

  <div id="content-vw" class="entry-content pt-5">
    <div class="container">
      <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. 
      ?>
    </div>
  </div>
  
</main>

<?php get_footer(); ?> 