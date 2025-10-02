<?php
/**
 * Custom Contact us Widget
 */

class Scary_Halloween_Contact_Widget extends WP_Widget {
	function __construct() {
		parent::__construct(
			'Scary_Halloween_Contact_Widget', 
			__('VW Contact us', 'scary-halloween'),
			array( 'description' => __( 'Widget for contact us section in sidebar', 'scary-halloween' ), ) 
		);
	}
	
	public function widget( $scary_halloween_args, $scary_halloween_instance ) {
		?>
		<aside class="widget">
			<?php
			$scary_halloween_title = isset( $scary_halloween_instance['title'] ) ? $scary_halloween_instance['title'] : '';
			$scary_halloween_phone = isset( $scary_halloween_instance['phone'] ) ? $scary_halloween_instance['phone'] : '';
			$scary_halloween_email = isset( $scary_halloween_instance['email'] ) ? $scary_halloween_instance['email'] : '';
			$scary_halloween_address = isset( $scary_halloween_instance['address'] ) ? $scary_halloween_instance['address'] : '';
			$scary_halloween_timing = isset( $scary_halloween_instance['timing'] ) ? $scary_halloween_instance['timing'] : '';
			$scary_halloween_longitude = isset( $scary_halloween_instance['longitude'] ) ? $scary_halloween_instance['longitude'] : '';
			$scary_halloween_latitude = isset( $scary_halloween_instance['latitude'] ) ? $scary_halloween_instance['latitude'] : '';
			$scary_halloween_contact_form = isset( $scary_halloween_instance['contact_form'] ) ? $scary_halloween_instance['contact_form'] : '';

	        echo '<div class="custom-contact-us">';
	        if(!empty($scary_halloween_title) ){ ?><h3 class="custom_title1"><?php echo esc_html($scary_halloween_title); ?></h3><?php } ?>
		        <?php if(!empty($scary_halloween_phone) ){ ?>
		        	<div class="row contact-detail">
		        		<div class="col-lg-2 col-md-2 align-self-center">
		        			<span class="custom_details"><i class="fa-solid fa-phone-volume me-2"></i></span>
		        		</div>
		        		<div class="col-lg-10 col-md-10 align-self-center">
		        			<span class="contact-title"><?php echo esc_html('Contact', 'scary-halloween'); ?></span><span class="custom_desc"><?php echo esc_html($scary_halloween_phone); ?></span>
		        		</div>		        		
		        	</div>
		        <?php } ?>
		        <?php if(!empty($scary_halloween_email) ){ ?>
		        	<div class="row contact-detail">
		        		<div class="col-lg-2 col-md-2 align-self-center">
		        			<span class="custom_details"><i class="fa-regular fa-envelope me-2"></i></span>
		        		</div>
		        		<div class="col-lg-10 col-md-10 align-self-center">
		        			<span class="contact-title"><?php echo esc_html('Mail Address', 'scary-halloween'); ?></span><span class="custom_desc"><?php echo esc_html($scary_halloween_email); ?></span>
		        		</div>
		        	</div>
		        <?php } ?>
		        <?php if(!empty($scary_halloween_address) ){ ?>
		        	<div class="row contact-detail">
		        		<div class="col-lg-2 col-md-2 align-self-center">
		        			<span class="custom_details"><i class="fa-solid fa-location-dot me-2"></i></span>
		        		</div>
			        	<div class="col-lg-10 col-md-10 align-self-center">
			        		<span class="contact-title"><?php echo esc_html('Location', 'scary-halloween'); ?></span><span class="custom_desc"><?php echo esc_html($scary_halloween_address); ?></span>
			        	</div>
			        </div>
			    <?php } ?> 
		        <?php if(!empty($scary_halloween_timing) ){ ?><p><span class="custom_details"><?php esc_html_e('Opening Time: ','scary-halloween'); ?></span><span class="custom_desc"><?php echo esc_html($scary_halloween_timing); ?></span></p><?php } ?>
		        <?php if(!empty($scary_halloween_longitude) ){ ?><embed width="100%" height="200px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=<?php echo esc_html($scary_halloween_longitude); ?>,<?php echo esc_html($scary_halloween_latitude); ?>&hl=es;z=14&amp;output=embed"></embed><?php } ?>
		        <?php if(!empty($scary_halloween_contact_form) ){ ?><?php echo do_shortcode($scary_halloween_contact_form); ?><?php } ?>
	        <?php echo '</div>';
			?>
		</aside>
		<?php
	}
	
	// Widget Backend 
	public function form( $scary_halloween_instance ) {

		$scary_halloween_title= ''; $scary_halloween_phone= ''; $scary_halloween_email = ''; $scary_halloween_address = ''; $scary_halloween_timing = ''; $scary_halloween_longitude = ''; $scary_halloween_latitude = ''; $scary_halloween_contact_form = ''; 
		
		$scary_halloween_title = isset( $scary_halloween_instance['title'] ) ? $scary_halloween_instance['title'] : '';
		$scary_halloween_phone = isset( $scary_halloween_instance['phone'] ) ? $scary_halloween_instance['phone'] : '';
		$scary_halloween_email = isset( $scary_halloween_instance['email'] ) ? $scary_halloween_instance['email'] : '';
		$scary_halloween_address = isset( $scary_halloween_instance['address'] ) ? $scary_halloween_instance['address'] : '';
		$scary_halloween_timing = isset( $scary_halloween_instance['timing'] ) ? $scary_halloween_instance['timing'] : '';
		$scary_halloween_longitude = isset( $scary_halloween_instance['longitude'] ) ? $scary_halloween_instance['longitude'] : '';
		$scary_halloween_latitude = isset( $scary_halloween_instance['latitude'] ) ? $scary_halloween_instance['latitude'] : '';
		$scary_halloween_contact_form = isset( $scary_halloween_instance['contact_form'] ) ? $scary_halloween_instance['contact_form'] : '';
		
		?>

		<p>
        	<label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:','scary-halloween'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($scary_halloween_title); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('phone')); ?>"><?php esc_html_e('Phone Number:','scary-halloween'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('phone')); ?>" name="<?php echo esc_attr($this->get_field_name('phone')); ?>" type="text" value="<?php echo esc_attr($scary_halloween_phone); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('email')); ?>"><?php esc_html_e('Email id:','scary-halloween'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('email')); ?>" name="<?php echo esc_attr($this->get_field_name('email')); ?>" type="text" value="<?php echo esc_attr($scary_halloween_email); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('address')); ?>"><?php esc_html_e('Address:','scary-halloween'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('address')); ?>" name="<?php echo esc_attr($this->get_field_name('address')); ?>" type="text" value="<?php echo esc_attr($scary_halloween_address); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('timing')); ?>"><?php esc_html_e('Opening Time:','scary-halloween'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('timing')); ?>" name="<?php echo esc_attr($this->get_field_name('timing')); ?>" type="text" value="<?php echo esc_attr($scary_halloween_timing); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('longitude')); ?>"><?php esc_html_e('Longitude:','scary-halloween'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('longitude')); ?>" name="<?php echo esc_attr($this->get_field_name('longitude')); ?>" type="text" value="<?php echo esc_attr($scary_halloween_longitude); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('latitude')); ?>"><?php esc_html_e('Latitude:','scary-halloween'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('latitude')); ?>" name="<?php echo esc_attr($this->get_field_name('latitude')); ?>" type="text" value="<?php echo esc_attr($scary_halloween_latitude); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('contact_form')); ?>"><?php esc_html_e('Contact Form Shortcode:','scary-halloween'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('contact_form')); ?>" name="<?php echo esc_attr($this->get_field_name('contact_form')); ?>" type="text" value="<?php echo esc_attr($scary_halloween_contact_form); ?>">
    	</p>
		
		<?php 
	}
	
	// Updating widget replacing old instances with new
	public function update( $scary_halloween_new_instance, $scary_halloween_old_instance ) {
		$scary_halloween_instance = array();	
		$scary_halloween_instance['title'] = (!empty($scary_halloween_new_instance['title']) ) ? strip_tags($scary_halloween_new_instance['title']) : '';
		$scary_halloween_instance['phone'] = (!empty($scary_halloween_new_instance['phone']) ) ? scary_halloween_sanitize_phone_number($scary_halloween_new_instance['phone']) : '';
		$scary_halloween_instance['email'] = (!empty($scary_halloween_new_instance['email']) ) ? sanitize_email($scary_halloween_new_instance['email']) : '';
		$scary_halloween_instance['address'] = (!empty($scary_halloween_new_instance['address']) ) ? strip_tags($scary_halloween_new_instance['address']) : '';
		$scary_halloween_instance['timing'] = (!empty($scary_halloween_new_instance['timing']) ) ? strip_tags($scary_halloween_new_instance['timing']) : '';
		$scary_halloween_instance['longitude'] = (!empty($scary_halloween_new_instance['longitude']) ) ? strip_tags($scary_halloween_new_instance['longitude']) : '';
		$scary_halloween_instance['latitude'] = (!empty($scary_halloween_new_instance['latitude']) ) ? strip_tags($scary_halloween_new_instance['latitude']) : '';
		$scary_halloween_instance['contact_form'] = (!empty($scary_halloween_new_instance['contact_form']) ) ? strip_tags($scary_halloween_new_instance['contact_form']) : '';
        
		return $scary_halloween_instance;
	}
}
// Register and load the widget
function scary_halloween_contact_custom_load_widget() {
	register_widget( 'Scary_Halloween_Contact_Widget' );
}
add_action( 'widgets_init', 'scary_halloween_contact_custom_load_widget' );