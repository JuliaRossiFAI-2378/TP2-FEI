<?php
/**
 * Custom Social Widget
 */

class Scary_Halloween_Social_Widget extends WP_Widget {
	
	function __construct() {
		parent::__construct(
			'Scary_Halloween_Social_Widget',
			__('VW Social Icon', 'scary-halloween'),
			array( 'description' => __( 'Widget for Social icons section', 'scary-halloween' ), ) 
		);
	}

	public function widget( $scary_halloween_args, $scary_halloween_instance ) { ?>
		<div class="widget">
			<?php
			$scary_halloween_title = isset( $scary_halloween_instance['title'] ) ? $scary_halloween_instance['title'] : '';
			$scary_halloween_facebook = isset( $scary_halloween_instance['facebook'] ) ? $scary_halloween_instance['facebook'] : '';
			$scary_halloween_twitter = isset( $scary_halloween_instance['twitter'] ) ? $scary_halloween_instance['twitter'] : '';
			$scary_halloween_instagram = isset( $scary_halloween_instance['instagram'] ) ? $scary_halloween_instance['instagram'] : '';
			$scary_halloween_youtube = isset( $scary_halloween_instance['youtube'] ) ? $scary_halloween_instance['youtube'] : '';
			$scary_halloween_dribbal = isset( $scary_halloween_instance['dribbal'] ) ? $scary_halloween_instance['dribbal'] : '';
			$scary_halloween_linkedin = isset( $scary_halloween_instance['linkedin'] ) ? $scary_halloween_instance['linkedin'] : '';
			$scary_halloween_pinterest = isset( $scary_halloween_instance['pinterest'] ) ? $scary_halloween_instance['pinterest'] : '';
			$scary_halloween_tumblr = isset( $scary_halloween_instance['tumblr'] ) ? $scary_halloween_instance['tumblr'] : '';
			

	        echo '<div class="custom-social-icons">';

	        if(!empty($scary_halloween_title) ){ ?><h3 class="custom_title"><?php echo esc_html($scary_halloween_title); ?></h3><?php } ?>
	        <?php if(!empty($scary_halloween_facebook) ){ ?><p class="mb-0"><a class="custom_facebook fff" target= "_blank" href="<?php echo esc_url($scary_halloween_facebook); ?>"><i class="fab fa-facebook-f"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook','scary-halloween' );?></span></a></p><?php } ?>

	        <?php if(!empty($scary_halloween_twitter) ){ ?><p class="mb-0"><a class="custom_twitter" target= "_blank" href="<?php echo esc_url($scary_halloween_twitter); ?>"><i class="fa-brands fa-x-twitter"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter','scary-halloween' );?></span></a></p><?php } ?>
	        
	        <?php if(!empty($scary_halloween_instagram) ){ ?><p class="mb-0"><a class="custom_instagram" target= "_blank" href="<?php echo esc_url($scary_halloween_instagram); ?>"><i class="fab fa-instagram"></i><span class="screen-reader-text"><?php esc_html_e( 'Instagram','scary-halloween' );?></span></a></p><?php } ?>

	        <?php if(!empty($scary_halloween_youtube) ){ ?><p class="mb-0"><a class="custom_youtube" target= "_blank" href="<?php echo esc_url($scary_halloween_youtube); ?>"><i class="fab fa-youtube"></i><span class="screen-reader-text"><?php esc_html_e( 'Youtube','scary-halloween' );?></span></a></p><?php } ?>

	        <?php if(!empty($scary_halloween_dribbal) ){ ?><p class="mb-0"><a class="custom_dribbal" target= "_blank" href="<?php echo esc_url($scary_halloween_dribbal); ?>"><i class="fa-solid fa-basketball"></i><span class="screen-reader-text"><?php esc_html_e( 'Dribbal','scary-halloween' );?></span></a></p><?php } ?>

	        <?php if(!empty($scary_halloween_linkedin) ){ ?><p class="mb-0"><a class="custom_linkedin" target= "_blank" href="<?php echo esc_url($scary_halloween_linkedin); ?>"><i class="fab fa-linkedin-in"></i><span class="screen-reader-text"><?php esc_html_e( 'Linkedin','scary-halloween' );?></span></a></p><?php } ?>
	        

	        <?php if(!empty($scary_halloween_pinterest) ){ ?><p class="mb-0"><a class="custom_pinterest" target= "_blank" href="<?php echo esc_url($scary_halloween_pinterest); ?>"><i class="fab fa-pinterest-p"></i><span class="screen-reader-text"><?php esc_html_e( 'Pinterest','scary-halloween' );?></span></a></p><?php } ?>
	        

	        <?php if(!empty($scary_halloween_tumblr) ){ ?><p class="mb-0"><a class="custom_tumblr" target= "_blank" href="<?php echo esc_url($scary_halloween_tumblr); ?>"><i class="fab fa-tumblr"></i><span class="screen-reader-text"><?php esc_html_e( 'Tumblr','scary-halloween' );?></span></a></p><?php } ?>

	        <?php echo '</div>';
			?>
		</div>
		<?php
	}
	
	// Widget Backend 
	public function form( $scary_halloween_instance ) {

		$scary_halloween_title= ''; $scary_halloween_facebook = ''; $scary_halloween_twitter = ''; $scary_halloween_linkedin = '';  $scary_halloween_pinterest = '';$scary_halloween_tumblr = ''; $scary_halloween_instagram = ''; $scary_halloween_youtube = ''; 

		$scary_halloween_title = isset( $scary_halloween_instance['title'] ) ? $scary_halloween_instance['title'] : '';
		$scary_halloween_facebook = isset( $scary_halloween_instance['facebook'] ) ? $scary_halloween_instance['facebook'] : '';
		$scary_halloween_instagram = isset( $scary_halloween_instance['instagram'] ) ? $scary_halloween_instance['instagram'] : '';
		$scary_halloween_twitter = isset( $scary_halloween_instance['twitter'] ) ? $scary_halloween_instance['twitter'] : '';
		$scary_halloween_youtube = isset( $scary_halloween_instance['youtube'] ) ? $scary_halloween_instance['youtube'] : '';
		$scary_halloween_dribbal = isset( $scary_halloween_instance['dribbal'] ) ? $scary_halloween_instance['dribbal'] : '';
		$scary_halloween_linkedin = isset( $scary_halloween_instance['linkedin'] ) ? $scary_halloween_instance['linkedin'] : '';
		$scary_halloween_pinterest = isset( $scary_halloween_instance['pinterest'] ) ? $scary_halloween_instance['pinterest'] : '';
		$scary_halloween_tumblr = isset( $scary_halloween_instance['tumblr'] ) ? $scary_halloween_instance['tumblr'] : '';
		
		?>
		<p>
        <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:','scary-halloween'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($scary_halloween_title); ?>">
    	</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('facebook')); ?>"><?php esc_html_e('Facebook:','scary-halloween'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('facebook')); ?>" name="<?php echo esc_attr($this->get_field_name('facebook')); ?>" type="text" value="<?php echo esc_attr($scary_halloween_facebook); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('twitter')); ?>"><?php esc_html_e('Twitter:','scary-halloween'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('twitter')); ?>" name="<?php echo esc_attr($this->get_field_name('twitter')); ?>" type="text" value="<?php echo esc_attr($scary_halloween_twitter); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('instagram')); ?>"><?php esc_html_e('Instagram:','scary-halloween'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('instagram')); ?>" name="<?php echo esc_attr($this->get_field_name('instagram')); ?>" type="text" value="<?php echo esc_attr($scary_halloween_instagram); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('youtube')); ?>"><?php esc_html_e('Youtube:','scary-halloween'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('youtube')); ?>" name="<?php echo esc_attr($this->get_field_name('youtube')); ?>" type="text" value="<?php echo esc_attr($scary_halloween_youtube); ?>">
		</p>
		<label for="<?php echo esc_attr($this->get_field_id('dribbal')); ?>"><?php esc_html_e('Dribbal:','scary-halloween'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('dribbal')); ?>" name="<?php echo esc_attr($this->get_field_name('dribbal')); ?>" type="text" value="<?php echo esc_attr($scary_halloween_dribbal); ?>">
		</p>

		<label for="<?php echo esc_attr($this->get_field_id('linkedin')); ?>"><?php esc_html_e('Linkedin:','scary-halloween'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('linkedin')); ?>" name="<?php echo esc_attr($this->get_field_name('linkedin')); ?>" type="text" value="<?php echo esc_attr($scary_halloween_linkedin); ?>">
		</p>
		<p>
		
		<label for="<?php echo esc_attr($this->get_field_id('pinterest')); ?>"><?php esc_html_e('Pinterest:','scary-halloween'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('pinterest')); ?>" name="<?php echo esc_attr($this->get_field_name('pinterest')); ?>" type="text" value="<?php echo esc_attr($scary_halloween_pinterest); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('tumblr')); ?>"><?php esc_html_e('Tumblr:','scary-halloween'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('tumblr')); ?>" name="<?php echo esc_attr($this->get_field_name('tumblr')); ?>" type="text" value="<?php echo esc_attr($scary_halloween_tumblr); ?>">
		</p>
		<p>
		
		<?php 
	}
	
	public function update( $scary_halloween_new_instance, $scary_halloween_old_instance ) {
		$scary_halloween_instance = array();
		$scary_halloween_instance['title'] = (!empty($scary_halloween_new_instance['title']) ) ? strip_tags($scary_halloween_new_instance['title']) : '';	
        $scary_halloween_instance['facebook'] = (!empty($scary_halloween_new_instance['facebook']) ) ? esc_url_raw($scary_halloween_new_instance['facebook']) : '';
        $scary_halloween_instance['twitter'] = (!empty($scary_halloween_new_instance['twitter']) ) ? esc_url_raw($scary_halloween_new_instance['twitter']) : '';
        $scary_halloween_instance['instagram'] = (!empty($scary_halloween_new_instance['instagram']) ) ? esc_url_raw($scary_halloween_new_instance['instagram']) : '';
        $scary_halloween_instance['youtube'] = (!empty($scary_halloween_new_instance['youtube']) ) ? esc_url_raw($scary_halloween_new_instance['youtube']) : '';
        $scary_halloween_instance['dribbal'] = (!empty($scary_halloween_new_instance['dribbal']) ) ? esc_url_raw($scary_halloween_new_instance['dribbal']) : '';
        $scary_halloween_instance['linkedin'] = (!empty($scary_halloween_new_instance['linkedin']) ) ? esc_url_raw($scary_halloween_new_instance['linkedin']) : '';
        $scary_halloween_instance['pinterest'] = (!empty($scary_halloween_new_instance['pinterest']) ) ? esc_url_raw($scary_halloween_new_instance['pinterest']) : '';
        $scary_halloween_instance['tumblr'] = (!empty($scary_halloween_new_instance['tumblr']) ) ? esc_url_raw($scary_halloween_new_instance['tumblr']) : '';
     	
     	
		return $scary_halloween_instance;
	}
}

function scary_halloween_custom_load_widget() {
	register_widget( 'Scary_Halloween_Social_Widget' );
}
add_action( 'widgets_init', 'scary_halloween_custom_load_widget' );