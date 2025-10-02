<?php
/**
 * Custom About us Widget
 */

class Scary_Halloween_About_Widget extends WP_Widget {
	function __construct() {
		parent::__construct(
			'Scary_Halloween_About_Widget',
			__('VW About us', 'scary-halloween'),
			array( 'description' => __( 'Widget for about us section in sidebar', 'scary-halloween' ), ) 
		);
	}
	
	public function widget( $scary_halloween_args, $scary_halloween_instance ) {
		?>
		<aside class="widget">
			<?php
			$scary_halloween_title = isset( $scary_halloween_instance['title'] ) ? $scary_halloween_instance['title'] : '';
			$scary_halloween_author = isset( $scary_halloween_instance['author'] ) ? $scary_halloween_instance['author'] : '';
			$scary_halloween_designation = isset( $scary_halloween_instance['designation'] ) ? $scary_halloween_instance['designation'] : '';
			$scary_halloween_description = isset( $scary_halloween_instance['description'] ) ? $scary_halloween_instance['description'] : '';
			$scary_halloween_read_more_url = isset( $scary_halloween_instance['read_more_url'] ) ? $scary_halloween_instance['read_more_url'] : '';
			$scary_halloween_read_more_text = isset( $scary_halloween_instance['read_more_text'] ) ? $scary_halloween_instance['read_more_text'] : '';
			$scary_halloween_upload_image = isset( $scary_halloween_instance['upload_image'] ) ? $scary_halloween_instance['upload_image'] : '';

	        echo '<div class="custom-about-us">';
	        if(!empty($scary_halloween_title) ){ ?><h3 class="custom_title"><?php echo esc_html($scary_halloween_title); ?></h3><?php } ?>
		        <?php if($scary_halloween_upload_image): ?>
	      			<img src="<?php echo esc_url($scary_halloween_upload_image); ?>" alt="">
				<?php endif; ?>
				<?php if(!empty($scary_halloween_author) ){ ?><p class="custom_author"><?php echo esc_html($scary_halloween_author); ?></p><?php } ?>
				<?php if(!empty($scary_halloween_designation) ){ ?><p class="custom_designation"><?php echo esc_html($scary_halloween_designation); ?></p><?php } ?>
		        <?php if(!empty($scary_halloween_description) ){ ?><p class="custom_desc"><?php echo esc_html($scary_halloween_description); ?></p><?php } ?>
		        <?php if(!empty($scary_halloween_read_more_url) ){ ?><div class="more-button"><a class="custom_read_more" href="<?php echo esc_url($scary_halloween_read_more_url); ?>"><?php if(!empty($scary_halloween_read_more_text) ){ ?><?php echo esc_html($scary_halloween_read_more_text); ?><?php } ?></a></div><?php } ?>
	        <?php echo '</div>';
			?>
		</aside>
		<?php
	}
	
	// Widget Backend 
	public function form( $scary_halloween_instance ) {	

		$scary_halloween_title= ''; $scary_halloween_author = ''; $scary_halloween_designation = ''; $scary_halloween_description= ''; $scary_halloween_read_more_text = ''; $scary_halloween_read_more_url = ''; $scary_halloween_upload_image = '';

		$scary_halloween_title = isset( $scary_halloween_instance['title'] ) ? $scary_halloween_instance['title'] : '';
		$scary_halloween_author = isset( $scary_halloween_instance['author'] ) ? $scary_halloween_instance['author'] : '';
		$scary_halloween_designation = isset( $scary_halloween_instance['designation'] ) ? $scary_halloween_instance['designation'] : '';
		$scary_halloween_description = isset( $scary_halloween_instance['description'] ) ? $scary_halloween_instance['description'] : '';
		$scary_halloween_read_more_url = isset( $scary_halloween_instance['read_more_url'] ) ? $scary_halloween_instance['read_more_url'] : '';
		$scary_halloween_read_more_text = isset( $scary_halloween_instance['read_more_text'] ) ? $scary_halloween_instance['read_more_text'] : '';
		$scary_halloween_upload_image = isset( $scary_halloween_instance['upload_image'] ) ? $scary_halloween_instance['upload_image'] : '';
	?>
		<p>
        <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:','scary-halloween'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($scary_halloween_title); ?>">
    	</p>
    	<p>
        <label for="<?php echo esc_attr($this->get_field_id('author')); ?>"><?php esc_html_e('Author Name:','scary-halloween'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('author')); ?>" name="<?php echo esc_attr($this->get_field_name('author')); ?>" type="text" value="<?php echo esc_attr($scary_halloween_author); ?>">
    	</p>
    	<p>
        <label for="<?php echo esc_attr($this->get_field_id('designation')); ?>"><?php esc_html_e('Designation:','scary-halloween'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('designation')); ?>" name="<?php echo esc_attr($this->get_field_name('designation')); ?>" type="text" value="<?php echo esc_attr($scary_halloween_designation); ?>">
    	</p>
    	<p>
        <label for="<?php echo esc_attr($this->get_field_id('description')); ?>"><?php esc_html_e('Description:','scary-halloween'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('description')); ?>" name="<?php echo esc_attr($this->get_field_name('description')); ?>" type="text" value="<?php echo esc_attr($scary_halloween_description); ?>">
    	</p>
    	<p>
		<label for="<?php echo esc_attr($this->get_field_id('read_more_text')); ?>"><?php esc_html_e('Button Text:','scary-halloween'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('read_more_text')); ?>" name="<?php echo esc_attr($this->get_field_name('read_more_text')); ?>" type="text" value="<?php echo esc_attr($scary_halloween_read_more_text); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('read_more_url')); ?>"><?php esc_html_e('Button Url:','scary-halloween'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('read_more_url')); ?>" name="<?php echo esc_attr($this->get_field_name('read_more_url')); ?>" type="text" value="<?php echo esc_attr($scary_halloween_read_more_url); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id( 'upload_image' )); ?>"><?php esc_html_e( 'Image Url:','scary-halloween'); ?></label>
		<?php
			if ( $scary_halloween_upload_image != '' ) :
			echo '<img class="custom_media_image" src="' . esc_url($scary_halloween_upload_image) . '" style="margin:10px 0;padding:0;max-width:100%;float:left;display:inline-block" /><br />';
			endif;
		?>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'upload_image' ) ); ?>" name="<?php echo esc_attr($this->get_field_name( 'upload_image' )); ?>" type="text" value="<?php echo esc_url( $scary_halloween_upload_image ); ?>" />
	   	</p>
		<?php 
	}
	
	// Updating widget replacing old instances with new
	public function update( $scary_halloween_new_instance, $scary_halloween_old_instance ) {
		$scary_halloween_instance = array();	
		$scary_halloween_instance['title'] = (!empty($scary_halloween_new_instance['title']) ) ? strip_tags($scary_halloween_new_instance['title']) : '';
		$scary_halloween_instance['author'] = ( ! empty( $scary_halloween_new_instance['author'] ) ) ? strip_tags($scary_halloween_new_instance['author']) : '';
		$scary_halloween_instance['designation'] = ( ! empty( $scary_halloween_new_instance['designation'] ) ) ? strip_tags($scary_halloween_new_instance['designation']) : '';
		$scary_halloween_instance['description'] = (!empty($scary_halloween_new_instance['description']) ) ? strip_tags($scary_halloween_new_instance['description']) : '';
        $scary_halloween_instance['read_more_text'] = (!empty($scary_halloween_new_instance['read_more_text']) ) ? strip_tags($scary_halloween_new_instance['read_more_text']) : '';
        $scary_halloween_instance['read_more_url'] = (!empty($scary_halloween_new_instance['read_more_url']) ) ? esc_url_raw($scary_halloween_new_instance['read_more_url']) : '';
        $scary_halloween_instance['upload_image'] = ( ! empty( $scary_halloween_new_instance['upload_image'] ) ) ? strip_tags($scary_halloween_new_instance['upload_image']) : '';

		return $scary_halloween_instance;
	}
}
// Register and load the widget
function scary_halloween_about_custom_load_widget() {
	register_widget( 'Scary_Halloween_About_Widget' );
}
add_action( 'widgets_init', 'scary_halloween_about_custom_load_widget' );