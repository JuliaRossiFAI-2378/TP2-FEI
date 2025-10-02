<?php

Class Scary_Halloween_My_Recent_Posts_Widget extends WP_Widget_Recent_Posts {
  function widget($scary_halloween_args, $scary_halloween_instance) {
      if ( ! isset( $scary_halloween_args['widget_id'] ) ) {
      $scary_halloween_args['widget_id'] = $this->id;
    }
    $scary_halloween_title = ( ! empty( $scary_halloween_instance['title'] ) ) ? $scary_halloween_instance['title'] : __( 'Recent Posts', 'scary-halloween' );
    /** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
    $scary_halloween_title = apply_filters( 'widget_title', $scary_halloween_title, $scary_halloween_instance, $this->id_base );
    $scary_halloween_number = ( ! empty( $scary_halloween_instance['number'] ) ) ? absint( $scary_halloween_instance['number'] ) : 5;
    if ( ! $scary_halloween_number )
        $scary_halloween_number = 5;
    $scary_halloween_show_date = isset( $scary_halloween_instance['show_date'] ) ? $scary_halloween_instance['show_date'] : false;
    /**
     * Filter the arguments for the Recent Posts widget.
     *
     * @since 3.4.0
     *
     * @see WP_Query::get_posts()
     *
     * @param array $scary_halloween_args An array of arguments used to retrieve the recent posts.
     */
    $scary_halloween_r = new WP_Query( apply_filters( 'widget_posts_args', array(
        'posts_per_page'      => $scary_halloween_number,
        'no_found_rows'       => true,
        'post_status'         => 'publish',
        'ignore_sticky_posts' => true
    ) ) );
    if ($scary_halloween_r->have_posts()) :
    ?>
    <?php echo $scary_halloween_args['before_widget']; ?>
    <?php if ( $scary_halloween_title ) {
        echo $scary_halloween_args['before_title'] . esc_html($scary_halloween_title) . $scary_halloween_args['after_title'];
    } ?>
    <ul>
      <?php while ( $scary_halloween_r->have_posts() ) : $scary_halloween_r->the_post(); ?>
      <li>
        <div class="recent-post-box">
          <div class="media post-thumb">
            <?php if(has_post_thumbnail()) { the_post_thumbnail(); } ?>
            <div class="media-body post-content">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              <div class="d-flex date-comment">
               <?php if ( $scary_halloween_show_date ) : ?>
                <p class="post-date"><?php the_date(); ?></p>
               <?php endif; ?>
               <div class="date-comment1"><?php comments_number( __('0 Comment', 'scary-halloween'), __('0 Comments', 'scary-halloween'), __('% Comments', 'scary-halloween') ); ?></div>
              </div>
            </div>
          </div>
        </div>
      </li>
      <?php endwhile;
      wp_reset_postdata(); ?>
    </ul>

    <?php echo $scary_halloween_args['after_widget'];

    endif;
  }
}
function scary_halloween_my_recent_widget_registration() {
  unregister_widget('WP_Widget_Recent_Posts');
  register_widget('Scary_Halloween_My_Recent_Posts_Widget');
}
add_action('widgets_init', 'scary_halloween_my_recent_widget_registration');
