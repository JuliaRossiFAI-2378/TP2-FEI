<?php
/**
 * Scary Halloween   Theme Customizer
 *
 * @package Scary Halloween  
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function scary_halloween_custom_controls() {
	load_template( trailingslashit( get_template_directory() ) . '/inc/custom-controls.php' );
}
add_action( 'customize_register', 'scary_halloween_custom_controls' );

function scary_halloween_customize_register( $wp_customize ) {

	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

	load_template( trailingslashit( get_template_directory() ) . '/inc/icon-picker.php' );

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.logo .site-title a',
	 	'render_callback' => 'scary_halloween_Customize_partial_blogname',
	));

	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => 'p.site-description',
		'render_callback' => 'scary_halloween_Customize_partial_blogdescription',
	));

	// add home page setting pannel
	$wp_customize->add_panel( 'scary_halloween_panel_id', array(
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => esc_html__( 'Homepage Settings', 'scary-halloween' ),
		'priority' => 10,
	));

	//Menus Settings
	$wp_customize->add_section( 'scary_halloween_menu_section' , array(
    	'title' => __( 'Menus Settings', 'scary-halloween' ),
		'panel' => 'scary_halloween_panel_id'
	) );

	$wp_customize->add_setting('scary_halloween_navigation_menu_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_navigation_menu_font_size',array(
		'label'	=> __('Menus Font Size','scary-halloween'),
		'description'	=> __('Enter a value in pixels. Example:20px','scary-halloween'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'scary-halloween' ),
        ),
		'section'=> 'scary_halloween_menu_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('scary_halloween_navigation_menu_font_weight',array(
        'default' => 400,
        'transport' => 'refresh',
        'sanitize_callback' => 'scary_halloween_sanitize_choices'
	));
	$wp_customize->add_control('scary_halloween_navigation_menu_font_weight',array(
        'type' => 'select',
        'label' => __('Menus Font Weight','scary-halloween'),
        'section' => 'scary_halloween_menu_section',
        'choices' => array(
        	'100' => __('100','scary-halloween'),
            '200' => __('200','scary-halloween'),
            '300' => __('300','scary-halloween'),
            '400' => __('400','scary-halloween'),
            '500' => __('500','scary-halloween'),
            '600' => __('600','scary-halloween'),
            '700' => __('700','scary-halloween'),
            '800' => __('800','scary-halloween'),
            '900' => __('900','scary-halloween'),
        ),
	) );

	$wp_customize->add_setting('scary_halloween_menus_item_style',array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'scary_halloween_sanitize_choices'
	));
	$wp_customize->add_control('scary_halloween_menus_item_style',array(
        'type' => 'select',
        'section' => 'scary_halloween_menu_section',
		'label' => __('Menu Item Hover Style','scary-halloween'),
		'choices' => array(
            'None' => __('None','scary-halloween'),
            'Zoom In' => __('Zoom In','scary-halloween'),
        ),
	) );

	$wp_customize->add_setting('scary_halloween_header_menus_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'scary_halloween_header_menus_color', array(
		'label'    => __('Menus Color', 'scary-halloween'),
		'section'  => 'scary_halloween_menu_section',
	)));

	$wp_customize->add_setting('scary_halloween_header_menus_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'scary_halloween_header_menus_hover_color', array(
		'label'    => __('Menus Hover Color', 'scary-halloween'),
		'section'  => 'scary_halloween_menu_section',
	)));

	$wp_customize->add_setting('scary_halloween_header_submenus_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'scary_halloween_header_submenus_color', array(
		'label'    => __('Sub Menus Color', 'scary-halloween'),
		'section'  => 'scary_halloween_menu_section',
	)));

	$wp_customize->add_setting('scary_halloween_header_submenus_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'scary_halloween_header_submenus_hover_color', array(
		'label'    => __('Sub Menus Hover Color', 'scary-halloween'),
		'section'  => 'scary_halloween_menu_section',
	)));

	// Header
	$wp_customize->add_section( 'scary_halloween_top_bar' , array(
    	'title' => esc_html__( 'Header', 'scary-halloween' ),
		'panel' => 'scary_halloween_panel_id'
	) );

	$wp_customize->add_setting( 'scary_halloween_topbar_section_hide_show',array(
	    'default' => 1,
	    'transport' => 'refresh',
	    'sanitize_callback' => 'scary_halloween_switch_sanitization'
	));
	$wp_customize->add_control( new Scary_Halloween_Toggle_Switch_Custom_Control( $wp_customize, 'scary_halloween_topbar_section_hide_show',array(
	    'label' => esc_html__( 'Show / Hide Topbar','scary-halloween' ),
	    'section' => 'scary_halloween_top_bar'
	)));

	$wp_customize->add_setting('scary_halloween_email_address_icon',array(
		'default'	=> 'fa-solid fa-envelope-open-text',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Scary_Halloween_Fontawesome_Icon_Chooser(
        $wp_customize,'scary_halloween_email_address_icon',array(
		'label'	=> __('Add Email Icon','scary-halloween'),
		'transport' => 'refresh',
		'section'	=> 'scary_halloween_top_bar',
		'setting'	=> 'scary_halloween_email_address_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('scary_halloween_email_address',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_email'
	));
	$wp_customize->add_control('scary_halloween_email_address',array(
		'label'	=> __('Add Email Address','scary-halloween'),
		'input_attrs' => array(
            'placeholder' => __( 'xyz123@example.com', 'scary-halloween' ),
        ),
		'section'=> 'scary_halloween_top_bar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('scary_halloween_topbar_location_icon',array(
		'default'	=> 'fa-solid fa-location-dot',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Scary_Halloween_Fontawesome_Icon_Chooser(
        $wp_customize,'scary_halloween_topbar_location_icon',array(
		'label'	=> __('Add Location Icon','scary-halloween'),
		'transport' => 'refresh',
		'section'	=> 'scary_halloween_top_bar',
		'setting'	=> 'scary_halloween_topbar_location_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('scary_halloween_topbar_location_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_topbar_location_text',array(
		'label'	=> esc_html__('Add Location Text','scary-halloween'),
		'input_attrs' => array(
        'placeholder' => esc_html__( '317 Sports road, Buffalo, NY 92648', 'scary-halloween' ),
        ),
		'section'=> 'scary_halloween_top_bar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('scary_halloween_track_locatin_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control('scary_halloween_track_locatin_url',array(
		'label'	=> esc_html__( 'Add Location URL', 'scary-halloween' ), 
		'section'	=> 'scary_halloween_top_bar',
		'setting'	=> 'scary_halloween_track_locatin_url',
		'type'	=> 'url',
	));

	$wp_customize->add_setting('scary_halloween_phone_icon',array(
		'default'	=> 'fa-solid fa-phone',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Scary_Halloween_Fontawesome_Icon_Chooser(
        $wp_customize,'scary_halloween_phone_icon',array(
		'label'	=> __('Add Phone Icon','scary-halloween'),
		'transport' => 'refresh',
		'section'	=> 'scary_halloween_top_bar',
		'setting'	=> 'scary_halloween_phone_icon',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('scary_halloween_phone_number',array(
		'default'=> '',
		'sanitize_callback'	=> 'scary_halloween_sanitize_phone_number'
	));
	$wp_customize->add_control('scary_halloween_phone_number',array(
		'label'	=> __('Add Phone number','scary-halloween'),
		'input_attrs' => array(
      'placeholder' => __( '(123) 456-7890', 'scary-halloween' ),
    ),
		'section'=> 'scary_halloween_top_bar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('scary_halloween_social_icons',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_social_icons',array(
		'label' =>  __('Steps to setup social icons','scary-halloween'),
		'description' => __('<p>1. Go to Dashboard >> Appearance >> Widgets</p>
			<p>2. Add Vw Social Icon Widget in Social Widget area.</p>
			<p>3. Add social icons url and save.</p>','scary-halloween'),
		'section'=> 'scary_halloween_top_bar',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting( 'scary_halloween_search_hide_show',array(
        'default' => 1,
        'transport' => 'refresh',
        'sanitize_callback' => 'scary_halloween_switch_sanitization'
    ));
    $wp_customize->add_control( new Scary_Halloween_Toggle_Switch_Custom_Control( $wp_customize, 'scary_halloween_search_hide_show',array(
        'label' => esc_html__( 'Show / Hide Search','scary-halloween' ),
        'section' => 'scary_halloween_top_bar'
    )));

	$wp_customize->add_setting('scary_halloween_topbar_button_text',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_topbar_button_text',array(
		'label' => __('Add Button Text','scary-halloween'),
		'input_attrs' => array(
        'placeholder' => __( 'Get Party Ticket', 'scary-halloween' ),
        ),
		'section' => 'scary_halloween_top_bar',
		'setting' => 'scary_halloween_topbar_button_text',
		'type' => 'text'
	));

	$wp_customize->add_setting('scary_halloween_topbar_button_link',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('scary_halloween_topbar_button_link',array(
		'label'	=> __('Add Button Link','scary-halloween'),
		'input_attrs' => array(
        'placeholder' => __( 'www.example-info.com', 'scary-halloween' ),
      ),
		'section'	=> 'scary_halloween_top_bar',
		'setting'	=> 'scary_halloween_topbar_button_link',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('scary_halloween_search_open_icon',array(
		'default'	=> 'fas fa-search',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Scary_Halloween_Fontawesome_Icon_Chooser(
        $wp_customize,'scary_halloween_search_open_icon',array(
		'label'	=> __('Search Button Icon','scary-halloween'),
		'transport' => 'refresh',
		'section'	=> 'scary_halloween_top_bar',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('scary_halloween_search_close_icon',array(
		'default'	=> 'fa fa-window-close',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Scary_Halloween_Fontawesome_Icon_Chooser(
        $wp_customize,'scary_halloween_search_close_icon',array(
		'label'	=> __('Search Button Icon','scary-halloween'),
		'transport' => 'refresh',
		'section'	=> 'scary_halloween_top_bar',
		'type'		=> 'icon'
	)));

	//Sticky Header
	$wp_customize->add_setting( 'scary_halloween_sticky_header',array(
	    'default' => 0,
	    'transport' => 'refresh',
	    'sanitize_callback' => 'scary_halloween_switch_sanitization'
  	) );
  	$wp_customize->add_control( new Scary_Halloween_Toggle_Switch_Custom_Control( $wp_customize, 'scary_halloween_sticky_header',array(
	    'label' => esc_html__( 'Sticky Header','scary-halloween' ),
	    'section' => 'scary_halloween_top_bar'
  	)));

	//Slider
	$wp_customize->add_section( 'scary_halloween_slider_section' , array(
	  	'title'      => __( 'Slider Settings', 'scary-halloween' ),
		'panel' => 'scary_halloween_panel_id',
		'description' => __('For more options of Slider section </br> <a class="go-pro-btn" target="blank" href="https://www.vwthemes.com/products/scary-halloween-wordpress-theme">GET PRO</a>','scary-halloween'),
	) );

	$wp_customize->add_setting('scary_halloween_slide_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'scary_halloween_sanitize_choices',
	));
	$wp_customize->add_control('scary_halloween_slide_number',array(
		'label'	=> __('Number of slides to show','scary-halloween'),
		'description' => __('Selct Max 3 number Of slide and refresh page','scary-halloween'),
		'section'	=> 'scary_halloween_slider_section',
		'type'		=> 'select',
		'choices'  => array(
			'1' => '1',
			'2' => '2',
			'3' => '3',
		),
	));

	$scary_halloween_count =  get_theme_mod('scary_halloween_slide_number');

	for($scary_halloween_i=1; $scary_halloween_i<=$scary_halloween_count; $scary_halloween_i++) {		

		$wp_customize->add_setting('scary_halloween_slider_bg_img'.$scary_halloween_i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
		));
		$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'scary_halloween_slider_bg_img'.$scary_halloween_i,array(
		   'label' => __('Add Image','scary-halloween'),
		   'section' => 'scary_halloween_slider_section',
		   'description' => __('Image Size (1200 × 750px) and use transparent image.','scary-halloween'),
		)));

	 	$wp_customize->add_setting('scary_halloween_slider_title'.$scary_halloween_i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('scary_halloween_slider_title'.$scary_halloween_i,array(
			'label'	=> __('Slider Title','scary-halloween'),
			'section'	=> 'scary_halloween_slider_section',
			'input_attrs' => array(
	        'placeholder' => __( 'Enjoy your Halloween with us and have a great time', 'scary-halloween' ),
	    	),
			'type'	=> 'text'
		));

	 	$wp_customize->add_setting('scary_halloween_slider_text'.$scary_halloween_i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('scary_halloween_slider_text'.$scary_halloween_i,array(
			'label'	=> __('Slider Content','scary-halloween'),
			'section'	=> 'scary_halloween_slider_section',
			'input_attrs' => array(
	        'placeholder' => __( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'scary-halloween' ),
	    	),
			'type'		=> 'text'
		));

		$wp_customize->add_setting('scary_halloween_slider_button_text'.$scary_halloween_i,array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field'
		));
		$wp_customize->add_control('scary_halloween_slider_button_text'.$scary_halloween_i,array(
			'label' => __('Add Button Text','scary-halloween'),
			'input_attrs' => array(
	        	'placeholder' => __( 'Our Events', 'scary-halloween' ),
	      	),
			'section' => 'scary_halloween_slider_section',
			'setting' => 'scary_halloween_slider_button_text'.$scary_halloween_i,
			'type' => 'text'
		));

		$wp_customize->add_setting('scary_halloween_slider_btn_icon'.$scary_halloween_i,array(
			'default'	=> 'fa-solid fa-angle-right',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control(new Scary_Halloween_Fontawesome_Icon_Chooser(
	        $wp_customize,'scary_halloween_slider_btn_icon'.$scary_halloween_i,array(
			'label'	=> __('Slider Button Icon','scary-halloween'),
			'transport' => 'refresh',
			'section'	=> 'scary_halloween_slider_section',
			'type'		=> 'icon'
		)));

		$wp_customize->add_setting('scary_halloween_slider_button_link'.$scary_halloween_i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw'
		));
		$wp_customize->add_control('scary_halloween_slider_button_link'.$scary_halloween_i,array(
			'label'	=> __('Add Button Link','scary-halloween'),
			'input_attrs' => array(
	        	'placeholder' => __( 'www.example-info.com', 'scary-halloween' ),
	      	),
			'section'	=> 'scary_halloween_slider_section',
			'setting'	=> 'scary_halloween_slider_button_link'.$scary_halloween_i,
			'type'	=> 'url'
		));

		$wp_customize->add_setting('scary_halloween_slider_word'.$scary_halloween_i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('scary_halloween_slider_word'.$scary_halloween_i,array(
			'label'	=> __('Slider Word','scary-halloween'),
			'section'	=> 'scary_halloween_slider_section',
			'input_attrs' => array(
	        'placeholder' => __( 'HALLOWEEN', 'scary-halloween' ),
	    	),
			'type'	=> 'text'
		));
	}

	$wp_customize->add_setting('scary_halloween_slider_img1',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'scary_halloween_slider_img1',array(
	   'label' => __('Add Image','scary-halloween'),
	   'section' => 'scary_halloween_slider_section',
	   'description' => __('Image Size (110px × 80px) and use transparent image.','scary-halloween'),
	)));

	$wp_customize->add_setting('scary_halloween_spider_img',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'scary_halloween_spider_img',array(
	   'label' => __('Add Image','scary-halloween'),
	   'section' => 'scary_halloween_slider_section',
	   'description' => __('Image Size (50px × 50px) and use transparent image.','scary-halloween'),
	)));

	$wp_customize->add_setting('scary_halloween_slider_previous_icon',array(
		'default'	=> 'fa-solid fa-angle-left',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Scary_Halloween_Fontawesome_Icon_Chooser(
        $wp_customize,'scary_halloween_slider_previous_icon',array(
		'label'	=> __('Slider Previous Icon','scary-halloween'),
		'transport' => 'refresh',
		'section'	=> 'scary_halloween_slider_section',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('scary_halloween_slider_next_icon',array(
		'default'	=> 'fa-solid fa-angle-right',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Scary_Halloween_Fontawesome_Icon_Chooser(
        $wp_customize,'scary_halloween_slider_next_icon',array(
		'label'	=> __('Slider Next Icon','scary-halloween'),
		'transport' => 'refresh',
		'section'	=> 'scary_halloween_slider_section',
		'type'		=> 'icon'
	)));

	//About Us Section
	$wp_customize->add_section('scary_halloween_aboutus', array(
		'title'       => __('About Us Section', 'scary-halloween'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','scary-halloween'),
		'priority'    => null,
		'panel'       => 'scary_halloween_panel_id',
	));

	$wp_customize->add_setting('scary_halloween_aboutus_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_aboutus_text',array(
		'description' => __('<p>1. More options for about us section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for about us section.</p>','scary-halloween'),
		'section'=> 'scary_halloween_aboutus',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('scary_halloween_aboutus_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_aboutus_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='https://www.vwthemes.com/products/scary-halloween-wordpress-theme'>More Info</a>",
		'section'=> 'scary_halloween_aboutus',
		'type'=> 'hidden'
	));

	//our service Section
	$wp_customize->add_section('scary_halloween_our_service', array(
		'title'       => __('Our Service Section', 'scary-halloween'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','scary-halloween'),
		'priority'    => null,
		'panel'       => 'scary_halloween_panel_id',
	));

	$wp_customize->add_setting('scary_halloween_our_service_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_our_service_text',array(
		'description' => __('<p>1. More options for our service section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for our service section.</p>','scary-halloween'),
		'section'=> 'scary_halloween_our_service',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('scary_halloween_our_service_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_our_service_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='https://www.vwthemes.com/products/scary-halloween-wordpress-theme'>More Info</a>", 
		'section'=> 'scary_halloween_our_service',
		'type'=> 'hidden'
	));

	//our  Gallary Section
	$wp_customize->add_section('scary_halloween_our_gallary', array(
		'title'       => __('Our Gallary Section', 'scary-halloween'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','scary-halloween'),
		'priority'    => null,
		'panel'       => 'scary_halloween_panel_id',
	));

	$wp_customize->add_setting('scary_halloween_our_gallary_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_our_gallary_text',array(
		'description' => __('<p>1. More options for our gallary section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for our gallary section.</p>','scary-halloween'),
		'section'=> 'scary_halloween_our_gallary',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('scary_halloween_our_gallary_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_our_gallary_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='https://www.vwthemes.com/products/scary-halloween-wordpress-theme'>More Info</a>", 
		'section'=> 'scary_halloween_our_gallary',
		'type'=> 'hidden'
	));

	//Lougue Category Section
	$wp_customize->add_section('scary_halloween_lougue_category', array(
		'title'       => __('Lougue Category Section', 'scary-halloween'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','scary-halloween'),
		'priority'    => null,
		'panel'       => 'scary_halloween_panel_id',
	));

	$wp_customize->add_setting('scary_halloween_lougue_category_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_lougue_category_text',array(
		'description' => __('<p>1. More options for lougue category section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for our gallary section.</p>','scary-halloween'),
		'section'=> 'scary_halloween_lougue_category',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('scary_halloween_lougue_category_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_lougue_category_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='https://www.vwthemes.com/products/scary-halloween-wordpress-theme'>More Info</a>", 
		'section'=> 'scary_halloween_lougue_category',
		'type'=> 'hidden'
	));


	// Event Section
	$wp_customize->add_section('scary_halloween_event_section', array(
	    'title' => __('Event Section', 'scary-halloween'),
	    'panel' => 'scary_halloween_panel_id',
	    'description' => __('For more options of Event section </br> <a class="go-pro-btn" target="blank" href="https://www.vwthemes.com/products/scary-halloween-wordpress-theme">GET PRO</a>','scary-halloween'),
	));

	$wp_customize->add_setting( 'scary_halloween_event_section_hide_show',array(
	    'default' => 1,
	    'transport' => 'refresh',
	    'sanitize_callback' => 'scary_halloween_switch_sanitization'
	));
	$wp_customize->add_control( new Scary_Halloween_Toggle_Switch_Custom_Control( $wp_customize, 'scary_halloween_event_section_hide_show',array(
	    'label' => esc_html__( 'Show / Hide Products Section','scary-halloween' ),
	    'section' => 'scary_halloween_event_section'
	)));

	$wp_customize->add_setting('scary_halloween_event_section_text',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_event_section_text',array(
		'type' => 'text',
		'label' => __('Event text','scary-halloween'),
		'input_attrs' => array(
	        'placeholder' => __( 'Party Events', 'scary-halloween' ),
	    ),
		'section' => 'scary_halloween_event_section'
	));

	$wp_customize->add_setting('scary_halloween_event_section_title',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_event_section_title',array(
		'type' => 'text',
		'label' => __('Event Title','scary-halloween'),
		'input_attrs' => array(
	        'placeholder' => __( 'Our Events For The Halloween Night', 'scary-halloween' ),
	    ),
		'section' => 'scary_halloween_event_section'
	));

	$wp_customize->add_setting('scary_halloween_event_side_img',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'scary_halloween_event_side_img',array(
	   'label' => __('Add Image','scary-halloween'),
	   'section' => 'scary_halloween_event_section',
	   'description' => __('Image Size (110 × 150px) and use transparent image.','scary-halloween'),
	)));

	//Our Award Section
	$wp_customize->add_section('scary_halloween_our_award', array(
		'title'       => __('Our Award Section', 'scary-halloween'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','scary-halloween'),
		'priority'    => null,
		'panel'       => 'scary_halloween_panel_id',
	));

	$wp_customize->add_setting('scary_halloween_our_award_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_our_award_text',array(
		'description' => __('<p>1. More options for our award section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for our award section.</p>','scary-halloween'),
		'section'=> 'scary_halloween_our_award',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('scary_halloween_our_award_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_our_award_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='https://www.vwthemes.com/products/scary-halloween-wordpress-theme'>More Info</a>", 
		'section'=> 'scary_halloween_our_award',
		'type'=> 'hidden'
	));

	//Our Team Section
	$wp_customize->add_section('scary_halloween_our_team', array(
		'title'       => __('Our Team Section', 'scary-halloween'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','scary-halloween'),
		'priority'    => null,
		'panel'       => 'scary_halloween_panel_id',
	));

	$wp_customize->add_setting('scary_halloween_our_team_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_our_team_text',array(
		'description' => __('<p>1. More options for our team section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for our team section.</p>','scary-halloween'),
		'section'=> 'scary_halloween_our_team',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('scary_halloween_our_team_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_our_team_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='https://www.vwthemes.com/products/scary-halloween-wordpress-theme'>More Info</a>", 
		'section'=> 'scary_halloween_our_team',
		'type'=> 'hidden'
	));

	//pricingPlan Section 
	$wp_customize->add_section('scary_halloween_pricingplan', array(
		'title'       => __('Pricing Plan Section', 'scary-halloween'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','scary-halloween'),
		'priority'    => null,
		'panel'       => 'scary_halloween_panel_id',
	));

	$wp_customize->add_setting('scary_halloween_pricingplan_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_pricingplan_text',array(
		'description' => __('<p>1. More options for our pricing plan section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for our pricing plan section.</p>','scary-halloween'),
		'section'=> 'scary_halloween_pricingplan',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('scary_halloween_pricingplan_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_pricingplan_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='https://www.vwthemes.com/products/scary-halloween-wordpress-theme'>More Info</a>", 
		'section'=> 'scary_halloween_pricingplan',
		'type'=> 'hidden'
	));

	//Currency Banner Section
	$wp_customize->add_section('scary_halloween_currencybanner', array(
		'title'       => __('Currency Banner Section', 'scary-halloween'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','scary-halloween'),
		'priority'    => null,
		'panel'       => 'scary_halloween_panel_id',
	));

	$wp_customize->add_setting('scary_halloween_currencybanner_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_currencybanner_text',array(
		'description' => __('<p>1. More options for currencybanner section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for currencybanner section.</p>','scary-halloween'),
		'section'=> 'scary_halloween_currencybanner',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('scary_halloween_currencybanner_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_currencybanner_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='https://www.vwthemes.com/products/scary-halloween-wordpress-theme'>More Info</a>", 
		'section'=> 'scary_halloween_currencybanner',
		'type'=> 'hidden'
	));


	//Testimonials Section
	$wp_customize->add_section('scary_halloween_testimonials', array(
		'title'       => __('Testimonials Section', 'scary-halloween'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','scary-halloween'),
		'priority'    => null,
		'panel'       => 'scary_halloween_panel_id',
	));

	$wp_customize->add_setting('scary_halloween_testimonials_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_testimonials_text',array(
		'description' => __('<p>1. More options for testimonials section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for testimonials section.</p>','scary-halloween'),
		'section'=> 'scary_halloween_testimonials',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('scary_halloween_testimonials_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_testimonials_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='https://www.vwthemes.com/products/scary-halloween-wordpress-theme'>More Info</a>", 
		'section'=> 'scary_halloween_testimonials',
		'type'=> 'hidden'
	));

	//Our Blogs Section
	$wp_customize->add_section('scary_halloween_our_blogs', array(
		'title'       => __('Our Blogs Section', 'scary-halloween'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','scary-halloween'),
		'priority'    => null,
		'panel'       => 'scary_halloween_panel_id',
	));

	$wp_customize->add_setting('scary_halloween_our_blogs_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_our_blogs_text',array(
		'description' => __('<p>1. More options for our blogs section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for our blogs section.</p>','scary-halloween'),
		'section'=> 'scary_halloween_our_blogs',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('scary_halloween_our_blogs_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_our_blogs_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='https://www.vwthemes.com/products/scary-halloween-wordpress-theme'>More Info</a>", 
		'section'=> 'scary_halloween_our_blogs',
		'type'=> 'hidden'
	));

	//Newsletter Section
	$wp_customize->add_section('scary_halloween_newsletter', array(
		'title'       => __('Newsletter Section', 'scary-halloween'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','scary-halloween'),
		'priority'    => null,
		'panel'       => 'scary_halloween_panel_id',
	));

	$wp_customize->add_setting('scary_halloween_newsletter_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_newsletter_text',array(
		'description' => __('<p>1. More options for newsletter section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for newsletter section.</p>','scary-halloween'),
		'section'=> 'scary_halloween_newsletter',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('scary_halloween_newsletter_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_newsletter_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='https://www.vwthemes.com/products/scary-halloween-wordpress-theme'>More Info</a>", 
		'section'=> 'scary_halloween_newsletter',
		'type'=> 'hidden'
	));

	//Footer Text
	$wp_customize->add_section('scary_halloween_footer',array(
		'title'	=> esc_html__('Footer Settings','scary-halloween'),
		'panel' => 'scary_halloween_panel_id',
		'description' => __('For more options of Footer section </br> <a class="go-pro-btn" target="blank" href="https://www.vwthemes.com/products/scary-halloween-wordpress-theme">GET PRO</a>','scary-halloween'),
	));

	$wp_customize->add_setting( 'scary_halloween_footer_hide_show',array(
	    'default' => 1,
	    'transport' => 'refresh',
	    'sanitize_callback' => 'scary_halloween_switch_sanitization'
	));
	$wp_customize->add_control( new Scary_Halloween_Toggle_Switch_Custom_Control( $wp_customize, 'scary_halloween_footer_hide_show',array(
	    'label' => esc_html__( 'Show / Hide Footer','scary-halloween' ),
	    'section' => 'scary_halloween_footer'
	)));

 	// font size
	$wp_customize->add_setting('scary_halloween_button_footer_font_size',array(
		'default'=> 25,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_button_footer_font_size',array(
		'label'	=> __('Footer Heading Font Size','scary-halloween'),
  		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
		'section'=> 'scary_halloween_footer',
	));

	$wp_customize->add_setting('scary_halloween_button_footer_heading_letter_spacing',array(
		'default'=> 1,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_button_footer_heading_letter_spacing',array(
		'label'	=> __('Heading Letter Spacing','scary-halloween'),
  		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
	),
		'section'=> 'scary_halloween_footer',
	));

	// text trasform
	$wp_customize->add_setting('scary_halloween_button_footer_text_transform',array(
		'default'=> 'Capitalize',
		'sanitize_callback'	=> 'scary_halloween_sanitize_choices'
	));
	$wp_customize->add_control('scary_halloween_button_footer_text_transform',array(
		'type' => 'radio',
		'label'	=> __('Heading Text Transform','scary-halloween'),
		'choices' => array(
			'Uppercase' => __('Uppercase','scary-halloween'),
			'Capitalize' => __('Capitalize','scary-halloween'),
			'Lowercase' => __('Lowercase','scary-halloween'),
		),
		'section'=> 'scary_halloween_footer',
	));

	$wp_customize->add_setting('scary_halloween_footer_heading_weight',array(
        'default' => '500',
        'transport' => 'refresh',
        'sanitize_callback' => 'scary_halloween_sanitize_choices'
	));
	$wp_customize->add_control('scary_halloween_footer_heading_weight',array(
        'type' => 'select',
        'label' => __('Heading Font Weight','scary-halloween'),
        'section' => 'scary_halloween_footer',
        'choices' => array(
        	'100' => __('100','scary-halloween'),
            '200' => __('200','scary-halloween'),
            '300' => __('300','scary-halloween'),
            '400' => __('400','scary-halloween'),
            '500' => __('500','scary-halloween'),
            '600' => __('600','scary-halloween'),
            '700' => __('700','scary-halloween'),
            '800' => __('800','scary-halloween'),
            '900' => __('900','scary-halloween'),
        ),
	) );

	$wp_customize->add_setting('scary_halloween_footer_template',array(
		'default'	=> esc_html('scary_halloween-footer-one'),
		'sanitize_callback'	=> 'scary_halloween_sanitize_choices'
	));
	$wp_customize->add_control('scary_halloween_footer_template',array(
		'label'	=> esc_html__('Footer style','scary-halloween'),
		'section'	=> 'scary_halloween_footer',
		'setting'	=> 'scary_halloween_footer_template',
		'type' => 'select',
		'choices' => array(
			'scary_halloween-footer-one' => esc_html__('Style 1', 'scary-halloween'),
			'scary_halloween-footer-two' => esc_html__('Style 2', 'scary-halloween'),
			'scary_halloween-footer-three' => esc_html__('Style 3', 'scary-halloween'),
			'scary_halloween-footer-four' => esc_html__('Style 4', 'scary-halloween'),
			'scary_halloween-footer-five' => esc_html__('Style 5', 'scary-halloween'),
		)
	));

	$wp_customize->add_setting('scary_halloween_footer_background_color', array(
		'default'           => '#E3652D',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'scary_halloween_footer_background_color', array(
		'label'    => __('Footer Background Color', 'scary-halloween'),
		'section'  => 'scary_halloween_footer',
	)));

	$wp_customize->add_setting('scary_halloween_footer_background_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'scary_halloween_footer_background_image',array(
        'label' => __('Footer Background Image','scary-halloween'),
        'section' => 'scary_halloween_footer'
	)));

	$wp_customize->add_setting('scary_halloween_footer_img_position',array(
	  'default' => 'center center',
	  'transport' => 'refresh',
	  'sanitize_callback' => 'scary_halloween_sanitize_choices'
	));
	$wp_customize->add_control('scary_halloween_footer_img_position',array(
		'type' => 'select',
		'label' => __('Footer Image Position','scary-halloween'),
		'section' => 'scary_halloween_footer',
		'choices' 	=> array(
			'left top' 		=> esc_html__( 'Top Left', 'scary-halloween' ),
			'center top'   => esc_html__( 'Top', 'scary-halloween' ),
			'right top'   => esc_html__( 'Top Right', 'scary-halloween' ),
			'left center'   => esc_html__( 'Left', 'scary-halloween' ),
			'center center'   => esc_html__( 'Center', 'scary-halloween' ),
			'right center'   => esc_html__( 'Right', 'scary-halloween' ),
			'left bottom'   => esc_html__( 'Bottom Left', 'scary-halloween' ),
			'center bottom'   => esc_html__( 'Bottom', 'scary-halloween' ),
			'right bottom'   => esc_html__( 'Bottom Right', 'scary-halloween' ),
		),
	));

  // Footer
  $wp_customize->add_setting('scary_halloween_img_footer',array(
    'default'=> 'scroll',
    'sanitize_callback' => 'scary_halloween_sanitize_choices'
  ));
  $wp_customize->add_control('scary_halloween_img_footer',array(
    'type' => 'select',
    'label' => __('Footer Background Attatchment','scary-halloween'),
    'choices' => array(
      'fixed' => __('fixed','scary-halloween'),
      'scroll' => __('scroll','scary-halloween'),
    ),
    'section'=> 'scary_halloween_footer',
  ));

  // footer padding
  $wp_customize->add_setting('scary_halloween_footer_padding',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('scary_halloween_footer_padding',array(
    'label' => __('Footer Top Bottom Padding','scary-halloween'),
    'description' => __('Enter a value in pixels. Example:20px','scary-halloween'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'scary-halloween' ),
    ),
    'section'=> 'scary_halloween_footer',
    'type'=> 'text'
  ));

  $wp_customize->add_setting('scary_halloween_footer_widgets_heading',array(
    'default' => 'Left',
    'transport' => 'refresh',
    'sanitize_callback' => 'scary_halloween_sanitize_choices'
  ));
  $wp_customize->add_control('scary_halloween_footer_widgets_heading',array(
    'type' => 'select',
    'label' => __('Footer Widget Heading','scary-halloween'),
    'section' => 'scary_halloween_footer',
    'choices' => array(
      'Left' => __('Left','scary-halloween'),
      'Center' => __('Center','scary-halloween'),
      'Right' => __('Right','scary-halloween')
    ),
  ) );

  $wp_customize->add_setting('scary_halloween_footer_widgets_content',array(
    'default' => 'Left',
    'transport' => 'refresh',
    'sanitize_callback' => 'scary_halloween_sanitize_choices'
  ));
  $wp_customize->add_control('scary_halloween_footer_widgets_content',array(
    'type' => 'select',
    'label' => __('Footer Widget Content','scary-halloween'),
    'section' => 'scary_halloween_footer',
    'choices' => array(
      'Left' => __('Left','scary-halloween'),
      'Center' => __('Center','scary-halloween'),
      'Right' => __('Right','scary-halloween')
  	),
	) );
	
	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('scary_halloween_footer_text', array(
		'selector' => '.copyright p',
		'render_callback' => 'scary_halloween_Customize_partial_scary_halloween_footer_text',
	));

	$wp_customize->add_setting('scary_halloween_footer_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_footer_text',array(
		'label'	=> esc_html__('Copyright Text','scary-halloween'),
		'input_attrs' => array(
      'placeholder' => esc_html__( 'Copyright 2024, .....', 'scary-halloween' ),
      ),
		'section'=> 'scary_halloween_footer',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'scary_halloween_copyright_hide_show',array(
	  'default' => 1,
	  'transport' => 'refresh',
	  'sanitize_callback' => 'scary_halloween_switch_sanitization'
	));
	$wp_customize->add_control( new Scary_Halloween_Toggle_Switch_Custom_Control( $wp_customize, 'scary_halloween_copyright_hide_show',array(
		'label' => esc_html__( 'Show / Hide Copyright','scary-halloween' ),
		'section' => 'scary_halloween_footer'
	)));

	$wp_customize->add_setting( 'scary_halloween_copyright_sticky',array(
      'default' => 0,
      'transport' => 'refresh',
      'sanitize_callback' => 'scary_halloween_switch_sanitization'
  	) );
  	$wp_customize->add_control( new Scary_Halloween_Toggle_Switch_Custom_Control( $wp_customize, 'scary_halloween_copyright_sticky',array(
      'label' => esc_html__( 'Show / Hide Sticky Copyright','scary-halloween' ),
      'section' => 'scary_halloween_footer'
  	)));

	$wp_customize->add_setting('scary_halloween_copyright_alingment',array(
	    'default' => 'center',
	    'sanitize_callback' => 'scary_halloween_sanitize_choices'
		));
		$wp_customize->add_control(new Scary_Halloween_Image_Radio_Control($wp_customize, 'scary_halloween_copyright_alingment', array(
	    'type' => 'select',
	    'label' => esc_html__('Copyright Alignment','scary-halloween'),
	    'section' => 'scary_halloween_footer',
	    'settings' => 'scary_halloween_copyright_alingment',
	    'choices' => array(
	        'left' => esc_url(get_template_directory_uri()).'/assets/images/copyright1.png',
	        'center' => esc_url(get_template_directory_uri()).'/assets/images/copyright2.png',
	        'right' => esc_url(get_template_directory_uri()).'/assets/images/copyright3.png'
	))));

	$wp_customize->add_setting('scary_halloween_copyright_background_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'scary_halloween_copyright_background_color', array(
		'label'    => __('Copyright Background Color', 'scary-halloween'),
		'section'  => 'scary_halloween_footer',
	)));

	$wp_customize->add_setting('scary_halloween_copyright_font_size',array(
		'default'=> '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_copyright_font_size',array(
		'label' => __('Copyright Font Size','scary-halloween'),
		'description' => __('Enter a value in pixels. Example:20px','scary-halloween'),
		'input_attrs' => array(
      	'placeholder' => __( '10px', 'scary-halloween' ),
	    ),
		'section'=> 'scary_halloween_footer',
		'type'=> 'text'
	));

  $wp_customize->add_setting( 'scary_halloween_hide_show_scroll',array(
  	'default' => 1,
  	'transport' => 'refresh',
  	'sanitize_callback' => 'scary_halloween_switch_sanitization'
  ));
  $wp_customize->add_control( new Scary_Halloween_Toggle_Switch_Custom_Control( $wp_customize, 'scary_halloween_hide_show_scroll',array(
  	'label' => esc_html__( 'Show / Hide Scroll to Top','scary-halloween' ),
  	'section' => 'scary_halloween_footer'
  )));

  //Selective Refresh
	$wp_customize->selective_refresh->add_partial('scary_halloween_scroll_to_top_icon', array(
		'selector' => '.scrollup i',
		'render_callback' => 'scary_halloween_Customize_partial_scary_halloween_scroll_to_top_icon',
	));

  $wp_customize->add_setting('scary_halloween_scroll_top_alignment',array(
    'default' => 'Right',
    'sanitize_callback' => 'scary_halloween_sanitize_choices'
	));
	$wp_customize->add_control(new Scary_Halloween_Image_Radio_Control($wp_customize, 'scary_halloween_scroll_top_alignment', array(
    'type' => 'select',
    'label' => esc_html__('Scroll To Top','scary-halloween'),
    'section' => 'scary_halloween_footer',
    'settings' => 'scary_halloween_scroll_top_alignment',
    'choices' => array(
        'Left' => esc_url(get_template_directory_uri()).'/assets/images/layout1.png',
        'Center' => esc_url(get_template_directory_uri()).'/assets/images/layout2.png',
        'Right' => esc_url(get_template_directory_uri()).'/assets/images/layout3.png'
  ))));

 	$wp_customize->add_setting('scary_halloween_scroll_top_icon',array(
    'default' => 'fas fa-long-arrow-alt-up',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(new Scary_Halloween_Fontawesome_Icon_Chooser($wp_customize,'scary_halloween_scroll_top_icon',array(
    'label' => __('Add Scroll to Top Icon','scary-halloween'),
    'transport' => 'refresh',
    'section' => 'scary_halloween_footer',
    'setting' => 'scary_halloween_scroll_top_icon',
    'type'    => 'icon'
  )));

  $wp_customize->add_setting('scary_halloween_scroll_to_top_font_size',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('scary_halloween_scroll_to_top_font_size',array(
    'label' => __('Icon Font Size','scary-halloween'),
    'description' => __('Enter a value in pixels. Example:20px','scary-halloween'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'scary-halloween' ),
    ),
    'section'=> 'scary_halloween_footer',
    'type'=> 'text'
  ));

  $wp_customize->add_setting('scary_halloween_scroll_to_top_padding',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('scary_halloween_scroll_to_top_padding',array(
    'label' => __('Icon Top Bottom Padding','scary-halloween'),
    'description' => __('Enter a value in pixels. Example:20px','scary-halloween'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'scary-halloween' ),
    ),
    'section'=> 'scary_halloween_footer',
    'type'=> 'text'
  ));

  $wp_customize->add_setting('scary_halloween_scroll_to_top_width',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('scary_halloween_scroll_to_top_width',array(
    'label' => __('Icon Width','scary-halloween'),
    'description' => __('Enter a value in pixels Example:20px','scary-halloween'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'scary-halloween' ),
  ),
	  'section'=> 'scary_halloween_footer',
	  'type'=> 'text'
  ));

  $wp_customize->add_setting('scary_halloween_scroll_to_top_height',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('scary_halloween_scroll_to_top_height',array(
    'label' => __('Icon Height','scary-halloween'),
    'description' => __('Enter a value in pixels. Example:20px','scary-halloween'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'scary-halloween' ),
    ),
    'section'=> 'scary_halloween_footer',
    'type'=> 'text'
  ));

  $wp_customize->add_setting( 'scary_halloween_scroll_to_top_border_radius', array(
    'default'              => '',
    'transport'        => 'refresh',
    'sanitize_callback'    => 'scary_halloween_sanitize_number_range'
  ) );
  $wp_customize->add_control( 'scary_halloween_scroll_to_top_border_radius', array(
    'label'       => esc_html__( 'Icon Border Radius','scary-halloween' ),
    'section'     => 'scary_halloween_footer',
    'type'        => 'range',
    'input_attrs' => array(
      'step'             => 1,
      'min'              => 1,
      'max'              => 50,
    ),
  ) );

  // footer social icon
	$wp_customize->add_setting( 'scary_halloween_footer_icon',array(
		'default' => false,
		'transport' => 'refresh',
		'sanitize_callback' => 'scary_halloween_switch_sanitization'
  ) );
	$wp_customize->add_control( new Scary_Halloween_Toggle_Switch_Custom_Control( $wp_customize, 'scary_halloween_footer_icon',array(
		'label' => esc_html__( 'Show / Hide Footer Social Icon','scary-halloween' ),
		'section' => 'scary_halloween_footer'
  )));

  $wp_customize->add_setting('scary_halloween_footer_social_icons_font_size',array(
    'default'=> 16,
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('scary_halloween_footer_social_icons_font_size',array(
    'label' => __('Social Icon Font Size','scary-halloween'),
    	'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
		'section'=> 'scary_halloween_footer',
	));

  	$wp_customize->add_setting('scary_halloween_align_footer_social_icon',array(
        'default' => 'center',
        'sanitize_callback' => 'scary_halloween_sanitize_choices'
	));
	$wp_customize->add_control('scary_halloween_align_footer_social_icon',array(
        'type' => 'select',
        'label' => __('Social Icon Alignment ','scary-halloween'),
        'section' => 'scary_halloween_footer',
        'choices' => array(
            'left' => __('Left','scary-halloween'),
            'right' => __('Right','scary-halloween'),
            'center' => __('Center','scary-halloween'),
        ),
	) );

 	//Blog Post
	$wp_customize->add_panel( 'scary_halloween_blog_post_parent_panel', array(
		'title' => esc_html__( 'Blog Post Settings', 'scary-halloween' ),
		'panel' => 'scary_halloween_panel_id',
		'priority' => 20,
	));

	// Add example section and controls to the middle (second) panel
	$wp_customize->add_section( 'scary_halloween_post_settings', array(
		'title' => esc_html__( 'Post Settings', 'scary-halloween' ),
		'panel' => 'scary_halloween_blog_post_parent_panel',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('scary_halloween_toggle_postdate', array(
		'selector' => '.post-main-box h2 a',
		'render_callback' => 'scary_halloween_Customize_partial_scary_halloween_toggle_postdate',
	));

	//Blog layout
  $wp_customize->add_setting('scary_halloween_blog_layout_option',array(
    'default' => 'Default',
    'sanitize_callback' => 'scary_halloween_sanitize_choices'
  ));
  $wp_customize->add_control(new Scary_Halloween_Image_Radio_Control($wp_customize, 'scary_halloween_blog_layout_option', array(
    'type' => 'select',
    'label' => __('Blog Post Layouts','scary-halloween'),
    'section' => 'scary_halloween_post_settings',
    'choices' => array(
      'Default' => esc_url(get_template_directory_uri()).'/assets/images/blog-layout1.png',
      'Center' => esc_url(get_template_directory_uri()).'/assets/images/blog-layout2.png',
      'Left' => esc_url(get_template_directory_uri()).'/assets/images/blog-layout3.png',
  ))));

	$wp_customize->add_setting('scary_halloween_theme_options',array(
    'default' => 'Right Sidebar',
    'sanitize_callback' => 'scary_halloween_sanitize_choices'
	));
	$wp_customize->add_control('scary_halloween_theme_options',array(
    'type' => 'select',
    'label' => esc_html__('Post Sidebar Layout','scary-halloween'),
    'description' => esc_html__('Here you can change the sidebar layout for posts. ','scary-halloween'),
    'section' => 'scary_halloween_post_settings',
    'choices' => array(
        'Left Sidebar' => esc_html__('Left Sidebar','scary-halloween'),
        'Right Sidebar' => esc_html__('Right Sidebar','scary-halloween'),
        'One Column' => esc_html__('One Column','scary-halloween'),
        'Three Columns' => esc_html__('Three Columns','scary-halloween'),
        'Four Columns' => esc_html__('Four Columns','scary-halloween'),
        'Grid Layout' => esc_html__('Grid Layout','scary-halloween')
    ),
	) );


	$wp_customize->add_setting('scary_halloween_toggle_postdate_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Scary_Halloween_Fontawesome_Icon_Chooser(
  $wp_customize,'scary_halloween_toggle_postdate_icon',array(
		'label'	=> __('Add Post Date Icon','scary-halloween'),
		'transport' => 'refresh',
		'section'	=> 'scary_halloween_post_settings',
		'setting'	=> 'scary_halloween_toggle_postdate_icon',
		'type'		=> 'icon'
	)));

 	$wp_customize->add_setting( 'scary_halloween_blog_toggle_postdate',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'scary_halloween_switch_sanitization'
  ));
  $wp_customize->add_control( new Scary_Halloween_Toggle_Switch_Custom_Control( $wp_customize, 'scary_halloween_blog_toggle_postdate',array(
    'label' => esc_html__( 'Show / Hide Post Date','scary-halloween' ),
    'section' => 'scary_halloween_post_settings'
  )));

	$wp_customize->add_setting('scary_halloween_toggle_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Scary_Halloween_Fontawesome_Icon_Chooser(
  $wp_customize,'scary_halloween_toggle_author_icon',array(
		'label'	=> __('Add Author Icon','scary-halloween'),
		'transport' => 'refresh',
		'section'	=> 'scary_halloween_post_settings',
		'setting'	=> 'scary_halloween_toggle_author_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'scary_halloween_blog_toggle_author',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'scary_halloween_switch_sanitization'
  ));
  $wp_customize->add_control( new Scary_Halloween_Toggle_Switch_Custom_Control( $wp_customize, 'scary_halloween_blog_toggle_author',array(
		'label' => esc_html__( 'Show / Hide Author','scary-halloween' ),
		'section' => 'scary_halloween_post_settings'
  )));

  $wp_customize->add_setting('scary_halloween_toggle_comments_icon',array(
		'default'	=> 'fa fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Scary_Halloween_Fontawesome_Icon_Chooser(
  $wp_customize,'scary_halloween_toggle_comments_icon',array(
		'label'	=> __('Add Comments Icon','scary-halloween'),
		'transport' => 'refresh',
		'section'	=> 'scary_halloween_post_settings',
		'setting'	=> 'scary_halloween_toggle_comments_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'scary_halloween_blog_toggle_comments',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'scary_halloween_switch_sanitization'
  ) );
  $wp_customize->add_control( new Scary_Halloween_Toggle_Switch_Custom_Control( $wp_customize, 'scary_halloween_blog_toggle_comments',array(
		'label' => esc_html__( 'Show / Hide Comments','scary-halloween' ),
		'section' => 'scary_halloween_post_settings'
  )));

  $wp_customize->add_setting('scary_halloween_toggle_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Scary_Halloween_Fontawesome_Icon_Chooser(
  $wp_customize,'scary_halloween_toggle_time_icon',array(
		'label'	=> __('Add Time Icon','scary-halloween'),
		'transport' => 'refresh',
		'section'	=> 'scary_halloween_post_settings',
		'setting'	=> 'scary_halloween_toggle_time_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'scary_halloween_blog_toggle_time',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'scary_halloween_switch_sanitization'
  ) );
  $wp_customize->add_control( new Scary_Halloween_Toggle_Switch_Custom_Control( $wp_customize, 'scary_halloween_blog_toggle_time',array(
		'label' => esc_html__( 'Show / Hide Time','scary-halloween' ),
		'section' => 'scary_halloween_post_settings'
  )));

  $wp_customize->add_setting( 'scary_halloween_featured_image_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'scary_halloween_switch_sanitization'
	));
  $wp_customize->add_control( new Scary_Halloween_Toggle_Switch_Custom_Control( $wp_customize, 'scary_halloween_featured_image_hide_show', array(
		'label' => esc_html__( 'Show / Hide Featured Image','scary-halloween' ),
		'section' => 'scary_halloween_post_settings'
  )));

  $wp_customize->add_setting( 'scary_halloween_featured_image_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'scary_halloween_sanitize_number_range'
	) );
	$wp_customize->add_control( 'scary_halloween_featured_image_border_radius', array(
		'label'       => esc_html__( 'Featured Image Border Radius','scary-halloween' ),
		'section'     => 'scary_halloween_post_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'scary_halloween_featured_image_box_shadow', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'scary_halloween_sanitize_number_range'
	) );
	$wp_customize->add_control( 'scary_halloween_featured_image_box_shadow', array(
		'label'       => esc_html__( 'Featured Image Box Shadow','scary-halloween' ),
		'section'     => 'scary_halloween_post_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	//Featured Image
	$wp_customize->add_setting('scary_halloween_blog_post_featured_image_dimension',array(
   'default' => 'default',
   'sanitize_callback'	=> 'scary_halloween_sanitize_choices'
	));
	$wp_customize->add_control('scary_halloween_blog_post_featured_image_dimension',array(
		'type' => 'select',
		'label'	=> __('Blog Post Featured Image Dimension','scary-halloween'),
		'section'	=> 'scary_halloween_post_settings',
		'choices' => array(
		'default' => __('Default','scary-halloween'),
		'custom' => __('Custom Image Size','scary-halloween'),
      ),
	));

	$wp_customize->add_setting('scary_halloween_blog_post_featured_image_custom_width',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
		));
	$wp_customize->add_control('scary_halloween_blog_post_featured_image_custom_width',array(
		'label'	=> __('Featured Image Custom Width','scary-halloween'),
		'description'	=> __('Enter a value in pixels. Example:20px','scary-halloween'),
		'input_attrs' => array(
    	'placeholder' => __( '10px', 'scary-halloween' ),),
		'section'=> 'scary_halloween_post_settings',
		'type'=> 'text',
		'active_callback' => 'scary_halloween_blog_post_featured_image_dimension'
		));

	$wp_customize->add_setting('scary_halloween_blog_post_featured_image_custom_height',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_blog_post_featured_image_custom_height',array(
		'label'	=> __('Featured Image Custom Height','scary-halloween'),
		'description'	=> __('Enter a value in pixels. Example:20px','scary-halloween'),
		'input_attrs' => array(
    	'placeholder' => __( '10px', 'scary-halloween' ),),
		'section'=> 'scary_halloween_post_settings',
		'type'=> 'text',
		'active_callback' => 'scary_halloween_blog_post_featured_image_dimension'
	));

  $wp_customize->add_setting( 'scary_halloween_excerpt_number', array(
		'default'              => 30,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'scary_halloween_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'scary_halloween_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','scary-halloween' ),
		'section'     => 'scary_halloween_post_settings',
		'type'        => 'range',
		'settings'    => 'scary_halloween_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('scary_halloween_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','scary-halloween'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','scary-halloween'),
		'section'=> 'scary_halloween_post_settings',
		'type'=> 'text'
	));

  $wp_customize->add_setting('scary_halloween_excerpt_settings',array(
    'default' => 'Excerpt',
    'transport' => 'refresh',
    'sanitize_callback' => 'scary_halloween_sanitize_choices'
	));
	$wp_customize->add_control('scary_halloween_excerpt_settings',array(
    'type' => 'select',
    'label' => esc_html__('Post Content','scary-halloween'),
    'section' => 'scary_halloween_post_settings',
    'choices' => array(
    	'Content' => esc_html__('Content','scary-halloween'),
        'Excerpt' => esc_html__('Excerpt','scary-halloween'),
        'No Content' => esc_html__('No Content','scary-halloween')
        ),
	) );

  $wp_customize->add_setting('scary_halloween_blog_page_posts_settings',array(
    'default' => 'Into Blocks',
    'transport' => 'refresh',
    'sanitize_callback' => 'scary_halloween_sanitize_choices'
	));
	$wp_customize->add_control('scary_halloween_blog_page_posts_settings',array(
    'type' => 'select',
    'label' => __('Display Blog Posts','scary-halloween'),
    'section' => 'scary_halloween_post_settings',
    'choices' => array(
    	'Into Blocks' => __('Into Blocks','scary-halloween'),
        'Without Blocks' => __('Without Blocks','scary-halloween')
        ),
	) );

	$wp_customize->add_setting( 'scary_halloween_blog_pagination_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'scary_halloween_switch_sanitization'
  ));
  $wp_customize->add_control( new Scary_Halloween_Toggle_Switch_Custom_Control( $wp_customize, 'scary_halloween_blog_pagination_hide_show',array(
		'label' => esc_html__( 'Show / Hide Blog Pagination','scary-halloween' ),
		'section' => 'scary_halloween_post_settings'
  )));

	$wp_customize->add_setting('scary_halloween_blog_excerpt_suffix',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_blog_excerpt_suffix',array(
		'label'	=> __('Add Excerpt Suffix','scary-halloween'),
		'input_attrs' => array(
      'placeholder' => __( '[...]', 'scary-halloween' ),
        ),
		'section'=> 'scary_halloween_post_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'scary_halloween_blog_pagination_type', array(
    'default'			=> 'blog-page-numbers',
    'sanitize_callback'	=> 'scary_halloween_sanitize_choices'
  ));
  $wp_customize->add_control( 'scary_halloween_blog_pagination_type', array(
    'section' => 'scary_halloween_post_settings',
    'type' => 'select',
    'label' => __( 'Blog Pagination', 'scary-halloween' ),
    'choices'		=> array(
      'blog-page-numbers'  => __( 'Numeric', 'scary-halloween' ),
      'next-prev' => __( 'Older Posts/Newer Posts', 'scary-halloween' ),
  )));

  // Button Settings
	$wp_customize->add_section( 'scary_halloween_button_settings', array(
		'title' => esc_html__( 'Button Settings', 'scary-halloween' ),
		'panel' => 'scary_halloween_blog_post_parent_panel',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('scary_halloween_button_text', array(
		'selector' => '.post-main-box .more-btn a',
		'render_callback' => 'scary_halloween_Customize_partial_scary_halloween_button_text',
	));

  $wp_customize->add_setting('scary_halloween_button_text',array(
		'default'=> esc_html__('Read More','scary-halloween'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_button_text',array(
		'label'	=> esc_html__('Add Button Text','scary-halloween'),
		'input_attrs' => array(
    'placeholder' => esc_html__( 'Read More', 'scary-halloween' ),
        ),
		'section'=> 'scary_halloween_button_settings',
		'type'=> 'text'
	));

	// font size button
	$wp_customize->add_setting('scary_halloween_button_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_button_font_size',array(
		'label'	=> __('Button Font Size','scary-halloween'),
		'description'	=> __('Enter a value in pixels. Example:20px','scary-halloween'),
		'input_attrs' => array(
  		'placeholder' => __( '10px', 'scary-halloween' ),
    ),
  	'type'        => 'text',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
		'section'=> 'scary_halloween_button_settings',
	));


	$wp_customize->add_setting( 'scary_halloween_button_border_radius', array(
		'default'              => 5,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'scary_halloween_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'scary_halloween_button_border_radius', array(
		'label'       => esc_html__( 'Button Border Radius','scary-halloween' ),
		'section'     => 'scary_halloween_button_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	// button padding
	$wp_customize->add_setting('scary_halloween_button_top_bottom_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_button_top_bottom_padding',array(
		'label'	=> __('Button Top Bottom Padding','scary-halloween'),
		'description'	=> __('Enter a value in pixels. Example:20px','scary-halloween'),
		'input_attrs' => array(
      'placeholder' => __( '10px', 'scary-halloween' ),
    ),
		'section'=> 'scary_halloween_button_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('scary_halloween_button_left_right_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_button_left_right_padding',array(
		'label'	=> __('Button Left Right Padding','scary-halloween'),
		'description'	=> __('Enter a value in pixels. Example:20px','scary-halloween'),
		'input_attrs' => array(
      'placeholder' => __( '10px', 'scary-halloween' ),
    ),
		'section'=> 'scary_halloween_button_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('scary_halloween_button_letter_spacing',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_button_letter_spacing',array(
		'label'	=> __('Button Letter Spacing','scary-halloween'),
		'description'	=> __('Enter a value in pixels. Example:20px','scary-halloween'),
		'input_attrs' => array(
      	'placeholder' => __( '10px', 'scary-halloween' ),
  ),
  	'type'        => 'text',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
	),
		'section'=> 'scary_halloween_button_settings',
	));

	// text trasform
	$wp_customize->add_setting('scary_halloween_button_text_transform',array(
		'default'=> 'Capitalize',
		'sanitize_callback'	=> 'scary_halloween_sanitize_choices'
	));
	$wp_customize->add_control('scary_halloween_button_text_transform',array(
		'type' => 'radio',
		'label'	=> __('Button Text Transform','scary-halloween'),
		'choices' => array(
      'Uppercase' => __('Uppercase','scary-halloween'),
      'Capitalize' => __('Capitalize','scary-halloween'),
      'Lowercase' => __('Lowercase','scary-halloween'),
    ),
		'section'=> 'scary_halloween_button_settings',
	));

	// Related Post Settings
	$wp_customize->add_section( 'scary_halloween_related_posts_settings', array(
		'title' => esc_html__( 'Related Posts Settings', 'scary-halloween' ),
		'panel' => 'scary_halloween_blog_post_parent_panel',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('scary_halloween_related_post_title', array(
		'selector' => '.related-post h3',
		'render_callback' => 'scary_halloween_Customize_partial_scary_halloween_related_post_title',
	));

  	$wp_customize->add_setting( 'scary_halloween_related_post',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'scary_halloween_switch_sanitization'
  	) );
  	$wp_customize->add_control( new Scary_Halloween_Toggle_Switch_Custom_Control( $wp_customize, 'scary_halloween_related_post',array(
		'label' => esc_html__( 'Related Post','scary-halloween' ),
		'section' => 'scary_halloween_related_posts_settings'
  	)));

  	$wp_customize->add_setting('scary_halloween_related_post_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_related_post_title',array(
		'label'	=> esc_html__('Add Related Post Title','scary-halloween'),
		'input_attrs' => array(
      'placeholder' => esc_html__( 'Related Post', 'scary-halloween' ),
        ),
		'section'=> 'scary_halloween_related_posts_settings',
		'type'=> 'text'
	));

 	$wp_customize->add_setting('scary_halloween_related_posts_count',array(
		'default'=> 3,
		'sanitize_callback'	=> 'scary_halloween_sanitize_number_absint'
	));
	$wp_customize->add_control('scary_halloween_related_posts_count',array(
		'label'	=> esc_html__('Add Related Post Count','scary-halloween'),
		'input_attrs' => array(
      'placeholder' => esc_html__( '3', 'scary-halloween' ),
        ),
		'section'=> 'scary_halloween_related_posts_settings',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'scary_halloween_related_posts_excerpt_number', array(
		'default'              => 20,
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'scary_halloween_sanitize_number_range'
	) );
	$wp_customize->add_control( 'scary_halloween_related_posts_excerpt_number', array(
		'label'       => esc_html__( 'Related Posts Excerpt length','scary-halloween' ),
		'section'     => 'scary_halloween_related_posts_settings',
		'type'        => 'range',
		'settings'    => 'scary_halloween_related_posts_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'scary_halloween_related_toggle_postdate',array(
	    'default' => 1,
	    'transport' => 'refresh',
	    'sanitize_callback' => 'scary_halloween_switch_sanitization'
	));
	$wp_customize->add_control( new Scary_Halloween_Toggle_Switch_Custom_Control( $wp_customize, 'scary_halloween_related_toggle_postdate',array(
	    'label' => esc_html__( 'Show / Hide Post Date','scary-halloween' ),
	    'section' => 'scary_halloween_related_posts_settings'
	)));

  	$wp_customize->add_setting('scary_halloween_related_postdate_icon',array(
	    'default' => 'fas fa-calendar-alt',
	    'sanitize_callback' => 'sanitize_text_field'
  	));
  	$wp_customize->add_control(new Scary_Halloween_Fontawesome_Icon_Chooser(
  	$wp_customize,'scary_halloween_related_postdate_icon',array(
	    'label' => __('Add Post Date Icon','scary-halloween'),
	    'transport' => 'refresh',
	    'section' => 'scary_halloween_related_posts_settings',
	    'setting' => 'scary_halloween_related_postdate_icon',
	    'type'    => 'icon'
  	)));

	$wp_customize->add_setting( 'scary_halloween_related_toggle_author',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'scary_halloween_switch_sanitization'
  	));
  	$wp_customize->add_control( new Scary_Halloween_Toggle_Switch_Custom_Control( $wp_customize, 'scary_halloween_related_toggle_author',array(
		'label' => esc_html__( 'Show / Hide Author','scary-halloween' ),
		'section' => 'scary_halloween_related_posts_settings'
  	)));

  	$wp_customize->add_setting('scary_halloween_related_author_icon',array(
	    'default' => 'fas fa-user',
	    'sanitize_callback' => 'sanitize_text_field'
  	));
  	$wp_customize->add_control(new Scary_Halloween_Fontawesome_Icon_Chooser(
  	$wp_customize,'scary_halloween_related_author_icon',array(
	    'label' => __('Add Author Icon','scary-halloween'),
	    'transport' => 'refresh',
	    'section' => 'scary_halloween_related_posts_settings',
	    'setting' => 'scary_halloween_related_author_icon',
	    'type'    => 'icon'
  	)));

	$wp_customize->add_setting( 'scary_halloween_related_toggle_comments',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'scary_halloween_switch_sanitization'
  	) );
  	$wp_customize->add_control( new Scary_Halloween_Toggle_Switch_Custom_Control( $wp_customize, 'scary_halloween_related_toggle_comments',array(
		'label' => esc_html__( 'Show / Hide Comments','scary-halloween' ),
		'section' => 'scary_halloween_related_posts_settings'
  	)));

	$wp_customize->add_setting('scary_halloween_related_comments_icon',array(
	    'default' => 'fa fa-comments',
	    'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control(new Scary_Halloween_Fontawesome_Icon_Chooser(
	$wp_customize,'scary_halloween_related_comments_icon',array(
	    'label' => __('Add Comments Icon','scary-halloween'),
	    'transport' => 'refresh',
	    'section' => 'scary_halloween_related_posts_settings',
	    'setting' => 'scary_halloween_related_comments_icon',
	    'type'    => 'icon'
	)));

	$wp_customize->add_setting( 'scary_halloween_related_toggle_time',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'scary_halloween_switch_sanitization'
	) );
	$wp_customize->add_control( new Scary_Halloween_Toggle_Switch_Custom_Control( $wp_customize, 'scary_halloween_related_toggle_time',array(
			'label' => esc_html__( 'Show / Hide Time','scary-halloween' ),
			'section' => 'scary_halloween_related_posts_settings'
	)));

 	$wp_customize->add_setting('scary_halloween_related_time_icon',array(
	    'default' => 'fas fa-clock',
	    'sanitize_callback' => 'sanitize_text_field'
  	));
  	$wp_customize->add_control(new Scary_Halloween_Fontawesome_Icon_Chooser(
  	$wp_customize,'scary_halloween_related_time_icon',array(
	    'label' => __('Add Time Icon','scary-halloween'),
	    'transport' => 'refresh',
	    'section' => 'scary_halloween_related_posts_settings',
	    'setting' => 'scary_halloween_related_time_icon',
	    'type'    => 'icon'
  	)));

  	$wp_customize->add_setting('scary_halloween_related_post_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_related_post_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','scary-halloween'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','scary-halloween'),
		'section'=> 'scary_halloween_related_posts_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'scary_halloween_related_image_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'scary_halloween_switch_sanitization'
	));
  	$wp_customize->add_control( new Scary_Halloween_Toggle_Switch_Custom_Control( $wp_customize, 'scary_halloween_related_image_hide_show', array(
		'label' => esc_html__( 'Show / Hide Featured Image','scary-halloween' ),
		'section' => 'scary_halloween_related_posts_settings'
  	)));

  	$wp_customize->add_setting( 'scary_halloween_related_image_box_shadow', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'scary_halloween_sanitize_number_range'
	) );
	$wp_customize->add_control( 'scary_halloween_related_image_box_shadow', array(
		'label'       => esc_html__( 'Related post Image Box Shadow','scary-halloween' ),
		'section'     => 'scary_halloween_related_posts_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

  	$wp_customize->add_setting('scary_halloween_related_button_text',array(
		'default'=> esc_html__('Read More','scary-halloween'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_related_button_text',array(
		'label'	=> esc_html__('Add Button Text','scary-halloween'),
		'input_attrs' => array(
      'placeholder' => esc_html__( 'Read More', 'scary-halloween' ),
        ),
		'section'=> 'scary_halloween_related_posts_settings',
		'type'=> 'text'
	));

	// Single Posts Settings
	$wp_customize->add_section( 'scary_halloween_single_blog_settings', array(
		'title' => __( 'Single Post Settings', 'scary-halloween' ),
		'panel' => 'scary_halloween_blog_post_parent_panel',
	));

	$wp_customize->add_setting('scary_halloween_single_postdate_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Scary_Halloween_Fontawesome_Icon_Chooser(
  $wp_customize,'scary_halloween_single_postdate_icon',array(
		'label'	=> __('Add Post Date Icon','scary-halloween'),
		'transport' => 'refresh',
		'section'	=> 'scary_halloween_single_blog_settings',
		'setting'	=> 'scary_halloween_single_postdate_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'scary_halloween_single_postdate',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'scary_halloween_switch_sanitization'
	) );
	$wp_customize->add_control( new Scary_Halloween_Toggle_Switch_Custom_Control( $wp_customize, 'scary_halloween_single_postdate',array(
		'label' => esc_html__( 'Show / Hide Date','scary-halloween' ),
		'section' => 'scary_halloween_single_blog_settings'
	)));

	$wp_customize->add_setting('scary_halloween_single_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Scary_Halloween_Fontawesome_Icon_Chooser(
  $wp_customize,'scary_halloween_single_author_icon',array(
		'label'	=> __('Add Author Icon','scary-halloween'),
		'transport' => 'refresh',
		'section'	=> 'scary_halloween_single_blog_settings',
		'setting'	=> 'scary_halloween_single_author_icon',
		'type'		=> 'icon'
	)));

  	$wp_customize->add_setting( 'scary_halloween_single_author',array(
	    'default' => 1,
	    'transport' => 'refresh',
	    'sanitize_callback' => 'scary_halloween_switch_sanitization'
	) );
	$wp_customize->add_control( new Scary_Halloween_Toggle_Switch_Custom_Control( $wp_customize, 'scary_halloween_single_author',array(
    	'label' => esc_html__( 'Show / Hide Author','scary-halloween' ),
    	'section' => 'scary_halloween_single_blog_settings'
	)));

 	$wp_customize->add_setting('scary_halloween_single_comments_icon',array(
		'default'	=> 'fa fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Scary_Halloween_Fontawesome_Icon_Chooser(
  	$wp_customize,'scary_halloween_single_comments_icon',array(
		'label'	=> __('Add Comments Icon','scary-halloween'),
		'transport' => 'refresh',
		'section'	=> 'scary_halloween_single_blog_settings',
		'setting'	=> 'scary_halloween_single_comments_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'scary_halloween_single_comments',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'scary_halloween_switch_sanitization'
	) );
	$wp_customize->add_control( new Scary_Halloween_Toggle_Switch_Custom_Control( $wp_customize, 'scary_halloween_single_comments',array(
    'label' => esc_html__( 'Show / Hide Comments','scary-halloween' ),
    'section' => 'scary_halloween_single_blog_settings'
	)));

	$wp_customize->add_setting('scary_halloween_single_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Scary_Halloween_Fontawesome_Icon_Chooser(
  	$wp_customize,'scary_halloween_single_time_icon',array(
		'label'	=> __('Add Time Icon','scary-halloween'),
		'transport' => 'refresh',
		'section'	=> 'scary_halloween_single_blog_settings',
		'setting'	=> 'scary_halloween_single_time_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'scary_halloween_single_time',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'scary_halloween_switch_sanitization'
	) );
	$wp_customize->add_control( new Scary_Halloween_Toggle_Switch_Custom_Control( $wp_customize, 'scary_halloween_single_time',array(
    'label' => esc_html__( 'Show / Hide Time','scary-halloween' ),
    'section' => 'scary_halloween_single_blog_settings'
	)));

	$wp_customize->add_setting( 'scary_halloween_toggle_tags',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'scary_halloween_switch_sanitization'
	));
  	$wp_customize->add_control( new Scary_Halloween_Toggle_Switch_Custom_Control( $wp_customize, 'scary_halloween_toggle_tags', array(
		'label' => esc_html__( 'Show / Hide Tags','scary-halloween' ),
		'section' => 'scary_halloween_single_blog_settings'
 	 )));

	$wp_customize->add_setting( 'scary_halloween_single_post_breadcrumb',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'scary_halloween_switch_sanitization'
  	) );
 	$wp_customize->add_control( new Scary_Halloween_Toggle_Switch_Custom_Control( $wp_customize, 'scary_halloween_single_post_breadcrumb',array(
		'label' => esc_html__( 'Show / Hide Breadcrumb','scary-halloween' ),
		'section' => 'scary_halloween_single_blog_settings'
  	)));

  	$wp_customize->add_setting( 'scary_halloween_singlepost_image_box_shadow', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'scary_halloween_sanitize_number_range'
	) );
	$wp_customize->add_control( 'scary_halloween_singlepost_image_box_shadow', array(
		'label'       => esc_html__( 'Single post Image Box Shadow','scary-halloween' ),
		'section'     => 'scary_halloween_single_blog_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	// Single Posts Category
 	 $wp_customize->add_setting( 'scary_halloween_single_post_category',array(
		'default' => true,
		'transport' => 'refresh',
		'sanitize_callback' => 'scary_halloween_switch_sanitization'
  	) );
	$wp_customize->add_control( new Scary_Halloween_Toggle_Switch_Custom_Control( $wp_customize, 'scary_halloween_single_post_category',array(
		'label' => esc_html__( 'Show / Hide Category','scary-halloween' ),
		'section' => 'scary_halloween_single_blog_settings'
  	)));

	$wp_customize->add_setting('scary_halloween_single_post_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_single_post_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','scary-halloween'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','scary-halloween'),
		'section'=> 'scary_halloween_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'scary_halloween_single_blog_post_navigation_show_hide',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'scary_halloween_switch_sanitization'
	));
	$wp_customize->add_control( new Scary_Halloween_Toggle_Switch_Custom_Control( $wp_customize, 'scary_halloween_single_blog_post_navigation_show_hide', array(
	  'label' => esc_html__( 'Show / Hide Post Navigation','scary-halloween' ),
	  'section' => 'scary_halloween_single_blog_settings'
	)));

	$wp_customize->add_setting( 'scary_halloween_single_post_breadcrumb',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'scary_halloween_switch_sanitization'
    ) );
 	$wp_customize->add_control( new Scary_Halloween_Toggle_Switch_Custom_Control( $wp_customize, 'scary_halloween_single_post_breadcrumb',array(
		'label' => esc_html__( 'Show / Hide Breadcrumb','scary-halloween' ),
		'section' => 'scary_halloween_single_blog_settings'
  )));

	//navigation text
	$wp_customize->add_setting('scary_halloween_single_blog_prev_navigation_text',array(
		'default'=> 'PREVIOUS',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_single_blog_prev_navigation_text',array(
		'label'	=> __('Post Navigation Text','scary-halloween'),
		'input_attrs' => array(
      'placeholder' => __( 'PREVIOUS', 'scary-halloween' ),
      ),
		'section'=> 'scary_halloween_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('scary_halloween_single_blog_next_navigation_text',array(
		'default'=> 'NEXT',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_single_blog_next_navigation_text',array(
		'label'	=> __('Post Navigation Text','scary-halloween'),
		'input_attrs' => array(
      'placeholder' => __( 'NEXT', 'scary-halloween' ),
        ),
		'section'=> 'scary_halloween_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('scary_halloween_single_blog_comment_title',array(
		'default'=> 'Leave a Reply',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('scary_halloween_single_blog_comment_title',array(
		'label'	=> __('Add Comment Title','scary-halloween'),
		'input_attrs' => array(
      'placeholder' => __( 'Leave a Reply', 'scary-halloween' ),
    	),
		'section'=> 'scary_halloween_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('scary_halloween_single_blog_comment_button_text',array(
		'default'=> 'Post Comment',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('scary_halloween_single_blog_comment_button_text',array(
		'label'	=> __('Add Comment Button Text','scary-halloween'),
		'input_attrs' => array(
    'placeholder' => __( 'Post Comment', 'scary-halloween' ),
        ),
		'section'=> 'scary_halloween_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('scary_halloween_single_blog_comment_width',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_single_blog_comment_width',array(
		'label'	=> __('Comment Form Width','scary-halloween'),
		'description'	=> __('Enter a value in %. Example:50%','scary-halloween'),
		'input_attrs' => array(
      'placeholder' => __( '100%', 'scary-halloween' ),
        ),
		'section'=> 'scary_halloween_single_blog_settings',
		'type'=> 'text'
	));

	 // Grid layout setting
	$wp_customize->add_section( 'scary_halloween_grid_layout_settings', array(
		'title' => __( 'Grid Layout Settings', 'scary-halloween' ),
		'panel' => 'scary_halloween_blog_post_parent_panel',
	));

	$wp_customize->add_setting('scary_halloween_grid_postdate_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Scary_Halloween_Fontawesome_Icon_Chooser(
        $wp_customize,'scary_halloween_grid_postdate_icon',array(
		'label'	=> __('Add Post Date Icon','scary-halloween'),
		'transport' => 'refresh',
		'section'	=> 'scary_halloween_grid_layout_settings',
		'setting'	=> 'scary_halloween_grid_postdate_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'scary_halloween_grid_postdate',array(
	  'default' => 1,
	  'transport' => 'refresh',
	  'sanitize_callback' => 'scary_halloween_switch_sanitization'
  ) );
  $wp_customize->add_control( new Scary_Halloween_Toggle_Switch_Custom_Control( $wp_customize, 'scary_halloween_grid_postdate',array(
    'label' => esc_html__( 'Show / Hide Post Date','scary-halloween' ),
    'section' => 'scary_halloween_grid_layout_settings'
  )));

	$wp_customize->add_setting('scary_halloween_grid_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Scary_Halloween_Fontawesome_Icon_Chooser(
        $wp_customize,'scary_halloween_grid_author_icon',array(
		'label'	=> __('Add Author Icon','scary-halloween'),
		'transport' => 'refresh',
		'section'	=> 'scary_halloween_grid_layout_settings',
		'setting'	=> 'scary_halloween_grid_author_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'scary_halloween_grid_author',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'scary_halloween_switch_sanitization'
  ) );
  $wp_customize->add_control( new Scary_Halloween_Toggle_Switch_Custom_Control( $wp_customize, 'scary_halloween_grid_author',array(
		'label' => esc_html__( 'Show / Hide Author','scary-halloween' ),
		'section' => 'scary_halloween_grid_layout_settings'
  )));

  $wp_customize->add_setting('scary_halloween_grid_comments_icon',array(
		'default'	=> 'fa fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Scary_Halloween_Fontawesome_Icon_Chooser(
        $wp_customize,'scary_halloween_grid_comments_icon',array(
		'label'	=> __('Add Comments Icon','scary-halloween'),
		'transport' => 'refresh',
		'section'	=> 'scary_halloween_grid_layout_settings',
		'setting'	=> 'scary_halloween_grid_comments_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'scary_halloween_grid_time',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'scary_halloween_switch_sanitization'
  ) );
  $wp_customize->add_control( new Scary_Halloween_Toggle_Switch_Custom_Control( $wp_customize, 'scary_halloween_grid_time',array(
		'label' => esc_html__( 'Show / Hide Time','scary-halloween' ),
		'section' => 'scary_halloween_grid_layout_settings'
  )));

  $wp_customize->add_setting('scary_halloween_grid_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Scary_Halloween_Fontawesome_Icon_Chooser(
        $wp_customize,'scary_halloween_grid_time_icon',array(
		'label'	=> __('Add Time Icon','scary-halloween'),
		'transport' => 'refresh',
		'section'	=> 'scary_halloween_grid_layout_settings',
		'setting'	=> 'scary_halloween_grid_time_icon',
		'type'		=> 'icon'
	)));

	 $wp_customize->add_setting( 'scary_halloween_grid_comments',array(
			'default' => 1,
			'transport' => 'refresh',
			'sanitize_callback' => 'scary_halloween_switch_sanitization'
	 ) );
	 $wp_customize->add_control( new Scary_Halloween_Toggle_Switch_Custom_Control( $wp_customize, 'scary_halloween_grid_comments',array(
			'label' => esc_html__( 'Show / Hide Comments','scary-halloween' ),
			'section' => 'scary_halloween_grid_layout_settings'
	 )));

	$wp_customize->add_setting( 'scary_halloween_grid_image_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'scary_halloween_switch_sanitization'
	));
  	$wp_customize->add_control( new Scary_Halloween_Toggle_Switch_Custom_Control( $wp_customize, 'scary_halloween_grid_image_hide_show', array(
		'label' => esc_html__( 'Show / Hide Featured Image','scary-halloween' ),
		'section' => 'scary_halloween_grid_layout_settings'
  	)));

 	$wp_customize->add_setting('scary_halloween_grid_post_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_grid_post_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','scary-halloween'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','scary-halloween'),
		'section'=> 'scary_halloween_grid_layout_settings',
		'type'=> 'text'
	));

  $wp_customize->add_setting('scary_halloween_display_grid_posts_settings',array(
    'default' => 'Into Blocks',
    'transport' => 'refresh',
    'sanitize_callback' => 'scary_halloween_sanitize_choices'
	));
	$wp_customize->add_control('scary_halloween_display_grid_posts_settings',array(
    'type' => 'select',
    'label' => __('Display Grid Posts','scary-halloween'),
    'section' => 'scary_halloween_grid_layout_settings',
    'choices' => array(
    	'Into Blocks' => __('Into Blocks','scary-halloween'),
      'Without Blocks' => __('Without Blocks','scary-halloween')
      ),
	) );

	$wp_customize->add_setting('scary_halloween_grid_button_text',array(
		'default'=> esc_html__('Read More','scary-halloween'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_grid_button_text',array(
		'label'	=> esc_html__('Add Button Text','scary-halloween'),
		'input_attrs' => array(
      'placeholder' => esc_html__( 'Read More', 'scary-halloween' ),
        ),
		'section'=> 'scary_halloween_grid_layout_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('scary_halloween_grid_excerpt_suffix',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_grid_excerpt_suffix',array(
		'label'	=> __('Add Excerpt Suffix','scary-halloween'),
		'input_attrs' => array(
        'placeholder' => __( '[...]', 'scary-halloween' ),
        ),
		'section'=> 'scary_halloween_grid_layout_settings',
		'type'=> 'text'
	));

  $wp_customize->add_setting('scary_halloween_grid_excerpt_settings',array(
    'default' => 'Excerpt',
    'transport' => 'refresh',
    'sanitize_callback' => 'scary_halloween_sanitize_choices'
	));
	$wp_customize->add_control('scary_halloween_grid_excerpt_settings',array(
    'type' => 'select',
    'label' => esc_html__('Grid Post Content','scary-halloween'),
    'section' => 'scary_halloween_grid_layout_settings',
    'choices' => array(
    	'Content' => esc_html__('Content','scary-halloween'),
      'Excerpt' => esc_html__('Excerpt','scary-halloween'),
      'No Content' => esc_html__('No Content','scary-halloween')
    ),
	) );

  $wp_customize->add_setting( 'scary_halloween_grid_featured_image_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'scary_halloween_sanitize_number_range'
	) );
	$wp_customize->add_control( 'scary_halloween_grid_featured_image_border_radius', array(
		'label'       => esc_html__( 'Grid Featured Image Border Radius','scary-halloween' ),
		'section'     => 'scary_halloween_grid_layout_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'scary_halloween_grid_featured_image_box_shadow', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'scary_halloween_sanitize_number_range'
	) );
	$wp_customize->add_control( 'scary_halloween_grid_featured_image_box_shadow', array(
		'label'       => esc_html__( 'Grid Featured Image Box Shadow','scary-halloween' ),
		'section'     => 'scary_halloween_grid_layout_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	//Other
	$wp_customize->add_panel( 'scary_halloween_other_parent_panel', array(
		'title' => esc_html__( 'Other Settings', 'scary-halloween' ),
		'panel' => 'scary_halloween_panel_id',
		'priority' => 20,
	));

	// Layout
	$wp_customize->add_section( 'scary_halloween_left_right', array(
  	'title' => esc_html__('General Settings', 'scary-halloween'),
		'panel' => 'scary_halloween_other_parent_panel'
	) );

	$wp_customize->add_setting('scary_halloween_width_option',array(
    'default' => 'Full Width',
    'sanitize_callback' => 'scary_halloween_sanitize_choices'
	));
	$wp_customize->add_control(new Scary_Halloween_Image_Radio_Control($wp_customize, 'scary_halloween_width_option', array(
    'type' => 'select',
    'label' => esc_html__('Width Layouts','scary-halloween'),
    'description' => esc_html__('Here you can change the width layout of Website.','scary-halloween'),
    'section' => 'scary_halloween_left_right',
    'choices' => array(
        'Full Width' => esc_url(get_template_directory_uri()).'/assets/images/full-width.png',
        'Wide Width' => esc_url(get_template_directory_uri()).'/assets/images/wide-width.png',
        'Boxed' => esc_url(get_template_directory_uri()).'/assets/images/boxed-width.png',
  ))));

	$wp_customize->add_setting('scary_halloween_page_layout',array(
    'default' => 'One_Column',
    'sanitize_callback' => 'scary_halloween_sanitize_choices'
	));
	$wp_customize->add_control('scary_halloween_page_layout',array(
    'type' => 'select',
    'label' => esc_html__('Page Sidebar Layout','scary-halloween'),
    'description' => esc_html__('Here you can change the sidebar layout for pages. ','scary-halloween'),
    'section' => 'scary_halloween_left_right',
    'choices' => array(
        'Left_Sidebar' => esc_html__('Left Sidebar','scary-halloween'),
        'Right_Sidebar' => esc_html__('Right Sidebar','scary-halloween'),
        'One_Column' => esc_html__('One Column','scary-halloween')
    ),
	) );

	//Wow Animation
	$wp_customize->add_setting( 'scary_halloween_animation',array(
	    'default' => 1,
	    'transport' => 'refresh',
	    'sanitize_callback' => 'scary_halloween_switch_sanitization'
  	));
  	$wp_customize->add_control( new Scary_Halloween_Toggle_Switch_Custom_Control( $wp_customize, 'scary_halloween_animation',array(
      'label' => esc_html__( 'Show / Hide Animations','scary-halloween' ),
      'description' => __('Here you can disable overall site animation effect','scary-halloween'),
	    'section' => 'scary_halloween_left_right'
  	)));
	
    // Pre-Loader
	$wp_customize->add_setting( 'scary_halloween_loader_enable',array(
	    'default' => 0,
	    'transport' => 'refresh',
	    'sanitize_callback' => 'scary_halloween_switch_sanitization'
	  ) );
	  $wp_customize->add_control( new Scary_Halloween_Toggle_Switch_Custom_Control( $wp_customize, 'scary_halloween_loader_enable',array(
	    'label' => esc_html__( 'Pre-Loader','scary-halloween' ),
	    'section' => 'scary_halloween_left_right'
	  )));

	$wp_customize->add_setting('scary_halloween_preloader_bg_color', array(
		'default'           => '#E3652D',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'scary_halloween_preloader_bg_color', array(
		'label'    => __('Pre-Loader Background Color', 'scary-halloween'),
		'section'  => 'scary_halloween_left_right',
	)));

	$wp_customize->add_setting('scary_halloween_preloader_border_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'scary_halloween_preloader_border_color', array(
		'label'    => __('Pre-Loader Border Color', 'scary-halloween'),
		'section'  => 'scary_halloween_left_right',
	)));

	$wp_customize->add_setting('scary_halloween_preloader_bg_img',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'scary_halloween_preloader_bg_img',array(
    'label' => __('Preloader Background Image','scary-halloween'),
    'section' => 'scary_halloween_left_right'
	)));

	$wp_customize->add_setting( 'scary_halloween_single_page_breadcrumb',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'scary_halloween_switch_sanitization'
    ) );
    $wp_customize->add_control( new Scary_Halloween_Toggle_Switch_Custom_Control( $wp_customize, 'scary_halloween_single_page_breadcrumb',array(
		'label' => esc_html__( 'Show / Hide Page Breadcrumb','scary-halloween' ),
		'section' => 'scary_halloween_left_right'
    )));

   $wp_customize->add_setting('scary_halloween_bradcrumbs_alignment',array(
        'default' => 'Left',
        'sanitize_callback' => 'scary_halloween_sanitize_choices'
	));
	$wp_customize->add_control('scary_halloween_bradcrumbs_alignment',array(
        'type' => 'select',
        'label' => __('Bradcrumbs Alignment','scary-halloween'),
        'section' => 'scary_halloween_left_right',
        'choices' => array(
            'Left' => __('Left','scary-halloween'),
            'Right' => __('Right','scary-halloween'),
            'Center' => __('Center','scary-halloween'),
        ),
	) );

    //404 Page Setting
	$wp_customize->add_section('scary_halloween_404_page',array(
		'title'	=> __('404 Page Settings','scary-halloween'),
		'panel' => 'scary_halloween_other_parent_panel',
	));

	$wp_customize->add_setting('scary_halloween_404_page_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('scary_halloween_404_page_title',array(
		'label'	=> __('Add Title','scary-halloween'),
		'input_attrs' => array(
            'placeholder' => __( '404 Not Found', 'scary-halloween' ),
        ),
		'section'=> 'scary_halloween_404_page',
		'type'=> 'text'
	));

	$wp_customize->add_setting('scary_halloween_404_page_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('scary_halloween_404_page_content',array(
		'label'	=> __('Add Text','scary-halloween'),
		'input_attrs' => array(
            'placeholder' => __( 'Looks like you have taken a wrong turn, Dont worry, it happens to the best of us.', 'scary-halloween' ),
        ),
		'section'=> 'scary_halloween_404_page',
		'type'=> 'text'
	));

	$wp_customize->add_setting('scary_halloween_404_page_button_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_404_page_button_text',array(
		'label'	=> __('Add Button Text','scary-halloween'),
		'input_attrs' => array(
            'placeholder' => __( 'Go Back', 'scary-halloween' ),
        ),
		'section'=> 'scary_halloween_404_page',
		'type'=> 'text'
	));

	//No Result Page Setting
	$wp_customize->add_section('scary_halloween_no_results_page',array(
		'title'	=> __('No Results Page Settings','scary-halloween'),
		'panel' => 'scary_halloween_other_parent_panel',
	));

	$wp_customize->add_setting('scary_halloween_no_results_page_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('scary_halloween_no_results_page_title',array(
		'label'	=> __('Add Title','scary-halloween'),
		'input_attrs' => array(
            'placeholder' => __( 'Nothing Found', 'scary-halloween' ),
        ),
		'section'=> 'scary_halloween_no_results_page',
		'type'=> 'text'
	));

	$wp_customize->add_setting('scary_halloween_no_results_page_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('scary_halloween_no_results_page_content',array(
		'label'	=> __('Add Text','scary-halloween'),
		'input_attrs' => array(
            'placeholder' => __( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'scary-halloween' ),
        ),
		'section'=> 'scary_halloween_no_results_page',
		'type'=> 'text'
	));

	//Social Icon Setting
	$wp_customize->add_section('scary_halloween_social_icon_settings',array(
		'title'	=> __('Sidebar Social Icons Settings','scary-halloween'),
		'panel' => 'scary_halloween_other_parent_panel',
	));

	$wp_customize->add_setting('scary_halloween_social_icon_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_social_icon_font_size',array(
		'label'	=> __('Icon Font Size','scary-halloween'),
		'description'	=> __('Enter a value in pixels. Example:20px','scary-halloween'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'scary-halloween' ),
        ),
		'section'=> 'scary_halloween_social_icon_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('scary_halloween_social_icon_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_social_icon_padding',array(
		'label'	=> __('Icon Padding','scary-halloween'),
		'description'	=> __('Enter a value in pixels. Example:20px','scary-halloween'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'scary-halloween' ),
        ),
		'section'=> 'scary_halloween_social_icon_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('scary_halloween_social_icon_width',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_social_icon_width',array(
		'label'	=> __('Icon Width','scary-halloween'),
		'description'	=> __('Enter a value in pixels. Example:20px','scary-halloween'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'scary-halloween' ),
        ),
		'section'=> 'scary_halloween_social_icon_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('scary_halloween_social_icon_height',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_social_icon_height',array(
		'label'	=> __('Icon Height','scary-halloween'),
		'description'	=> __('Enter a value in pixels. Example:20px','scary-halloween'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'scary-halloween' ),
        ),
		'section'=> 'scary_halloween_social_icon_settings',
		'type'=> 'text'
	));

	//Responsive Media Settings
	$wp_customize->add_section('scary_halloween_responsive_media',array(
		'title'	=> esc_html__('Responsive Media','scary-halloween'),
		'panel' => 'scary_halloween_other_parent_panel',
	));

	$wp_customize->add_setting( 'scary_halloween_stickyheader_hide_show',array(
	    'default' => 0,
	    'transport' => 'refresh',
	    'sanitize_callback' => 'scary_halloween_switch_sanitization'
  	));  
  	$wp_customize->add_control( new Scary_Halloween_Toggle_Switch_Custom_Control( $wp_customize, 'scary_halloween_stickyheader_hide_show',array(
	    'label' => esc_html__( 'Show / Hide Sticky Header','scary-halloween' ),
	    'section' => 'scary_halloween_responsive_media'
  	)));

	$wp_customize->add_setting( 'scary_halloween_resp_topbar_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'scary_halloween_switch_sanitization'
  	));
  	$wp_customize->add_control( new Scary_Halloween_Toggle_Switch_Custom_Control( $wp_customize, 'scary_halloween_resp_topbar_hide_show',array(
    	'label' => esc_html__( 'Show / Hide Topbar','scary-halloween' ),
    	'section' => 'scary_halloween_responsive_media'
  	)));

	$wp_customize->add_setting( 'scary_halloween_sidebar_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'scary_halloween_switch_sanitization'
  	));
  	$wp_customize->add_control( new Scary_Halloween_Toggle_Switch_Custom_Control( $wp_customize, 'scary_halloween_sidebar_hide_show',array(
    	'label' => esc_html__( 'Show / Hide Sidebar','scary-halloween' ),
    	'section' => 'scary_halloween_responsive_media'
  	)));

  	$wp_customize->add_setting( 'scary_halloween_responsive_preloader_hide',array(
      'default' => false,
      'transport' => 'refresh',
      'sanitize_callback' => 'scary_halloween_switch_sanitization'
  	) );
  	$wp_customize->add_control( new Scary_Halloween_Toggle_Switch_Custom_Control( $wp_customize, 'scary_halloween_responsive_preloader_hide',array(
      'label' => esc_html__( 'Show / Hide Preloader','scary-halloween' ),
      'section' => 'scary_halloween_responsive_media'
  	)));

	$wp_customize->add_setting( 'scary_halloween_resp_scroll_top_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'scary_halloween_switch_sanitization'
	));
	$wp_customize->add_control( new Scary_Halloween_Toggle_Switch_Custom_Control( $wp_customize, 'scary_halloween_resp_scroll_top_hide_show',array(
    	'label' => esc_html__( 'Show / Hide Scroll To Top','scary-halloween' ),
    	'section' => 'scary_halloween_responsive_media'
	)));

  	$wp_customize->add_setting('scary_halloween_res_open_menu_icon',array(
		'default'	=> 'fas fa-bars',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Scary_Halloween_Fontawesome_Icon_Chooser(
        $wp_customize,'scary_halloween_res_open_menu_icon',array(
		'label'	=> __('Add Open Menu Icon','scary-halloween'),
		'transport' => 'refresh',
		'section'	=> 'scary_halloween_responsive_media',
		'setting'	=> 'scary_halloween_res_open_menu_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('scary_halloween_res_close_menu_icon',array(
		'default'	=> 'fas fa-times',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Scary_Halloween_Fontawesome_Icon_Chooser(
        $wp_customize,'scary_halloween_res_close_menu_icon',array(
		'label'	=> __('Add Close Menu Icon','scary-halloween'),
		'transport' => 'refresh',
		'section'	=> 'scary_halloween_responsive_media',
		'setting'	=> 'scary_halloween_res_close_menu_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('scary_halloween_resp_menu_toggle_btn_bg_color', array(
		'default'           => '#E3652D',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'scary_halloween_resp_menu_toggle_btn_bg_color', array(
		'label'    => __('Toggle Button Bg Color', 'scary-halloween'),
		'section'  => 'scary_halloween_responsive_media',
	)));

  //Woocommerce settings
	$wp_customize->add_section('scary_halloween_woocommerce_section', array(
		'title'    => __('WooCommerce Layout', 'scary-halloween'),
		'priority' => null,
		'panel'    => 'woocommerce',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial( 'scary_halloween_woocommerce_shop_page_sidebar', array( 'selector' => '.post-type-archive-product #sidebar',
		'render_callback' => 'scary_halloween_customize_partial_scary_halloween_woocommerce_shop_page_sidebar', ) );

    //Woocommerce Shop Page Sidebar
	$wp_customize->add_setting( 'scary_halloween_woocommerce_shop_page_sidebar',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'scary_halloween_switch_sanitization'
  ) );
  $wp_customize->add_control( new Scary_Halloween_Toggle_Switch_Custom_Control( $wp_customize, 'scary_halloween_woocommerce_shop_page_sidebar',array(
		'label' => esc_html__( 'Show / Hide Shop Page Sidebar','scary-halloween' ),
		'section' => 'scary_halloween_woocommerce_section'
  )));

   $wp_customize->add_setting('scary_halloween_shop_page_layout',array(
    'default' => 'Right Sidebar',
    'sanitize_callback' => 'scary_halloween_sanitize_choices'
	));
	$wp_customize->add_control('scary_halloween_shop_page_layout',array(
    'type' => 'select',
    'label' => __('Shop Page Sidebar Layout','scary-halloween'),
    'section' => 'scary_halloween_woocommerce_section',
    'choices' => array(
        'Left Sidebar' => __('Left Sidebar','scary-halloween'),
        'Right Sidebar' => __('Right Sidebar','scary-halloween'),
    ),
	) );

   //Selective Refresh
	$wp_customize->selective_refresh->add_partial( 'scary_halloween_woocommerce_single_product_page_sidebar', array( 'selector' => '.single-product #sidebar',
		'render_callback' => 'scary_halloween_customize_partial_scary_halloween_woocommerce_single_product_page_sidebar', ) );

    //Woocommerce Single Product page Sidebar
	$wp_customize->add_setting( 'scary_halloween_woocommerce_single_product_page_sidebar',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'scary_halloween_switch_sanitization'
   ) );
 	$wp_customize->add_control( new Scary_Halloween_Toggle_Switch_Custom_Control( $wp_customize, 'scary_halloween_woocommerce_single_product_page_sidebar',array(
		'label' => esc_html__( 'Show / Hide Single Product Sidebar','scary-halloween' ),
		'section' => 'scary_halloween_woocommerce_section'
  )));

   $wp_customize->add_setting('scary_halloween_single_product_layout',array(
    'default' => 'Right Sidebar',
    'sanitize_callback' => 'scary_halloween_sanitize_choices'
	));
	$wp_customize->add_control('scary_halloween_single_product_layout',array(
    'type' => 'select',
    'label' => __('Single Product Sidebar Layout','scary-halloween'),
    'section' => 'scary_halloween_woocommerce_section',
    'choices' => array(
        'Left Sidebar' => __('Left Sidebar','scary-halloween'),
        'Right Sidebar' => __('Right Sidebar','scary-halloween'),
    ),
	) );

	//Products per page
    $wp_customize->add_setting('scary_halloween_products_per_page',array(
		'default'=> '9',
		'sanitize_callback'	=> 'scary_halloween_sanitize_float'
	));
	$wp_customize->add_control('scary_halloween_products_per_page',array(
		'label'	=> __('Products Per Page','scary-halloween'),
		'description' => __('Display on shop page','scary-halloween'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'scary_halloween_woocommerce_section',
		'type'=> 'number',
	));

    //Products per row
    $wp_customize->add_setting('scary_halloween_products_per_row',array(
		'default'=> '4',
		'sanitize_callback'	=> 'scary_halloween_sanitize_choices'
	));
	$wp_customize->add_control('scary_halloween_products_per_row',array(
		'label'	=> __('Products Per Row','scary-halloween'),
		'description' => __('Display on shop page','scary-halloween'),
		'choices' => array(
            '2' => '2',
			'3' => '3',
			'4' => '4',
        ),
		'section'=> 'scary_halloween_woocommerce_section',
		'type'=> 'select',
		));

	//Products padding
	$wp_customize->add_setting('scary_halloween_products_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_products_padding_top_bottom',array(
		'label'	=> __('Products Padding Top Bottom','scary-halloween'),
		'description'	=> __('Enter a value in pixels. Example:20px','scary-halloween'),
		'input_attrs' => array(
        'placeholder' => __( '10px', 'scary-halloween' ),
        ),
		'section'=> 'scary_halloween_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('scary_halloween_products_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_products_padding_left_right',array(
		'label'	=> __('Products Padding Left Right','scary-halloween'),
		'description'	=> __('Enter a value in pixels. Example:20px','scary-halloween'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'scary-halloween' ),
        ),
		'section'=> 'scary_halloween_woocommerce_section',
		'type'=> 'text'
	));

	//Products box shadow
	$wp_customize->add_setting( 'scary_halloween_products_box_shadow', array(
		'default'              => '',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'scary_halloween_sanitize_number_range'
	) );
	$wp_customize->add_control( 'scary_halloween_products_box_shadow', array(
		'label'       => esc_html__( 'Products Box Shadow','scary-halloween' ),
		'section'     => 'scary_halloween_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	//Products border radius
    $wp_customize->add_setting( 'scary_halloween_products_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'scary_halloween_sanitize_number_range'
	) );
	$wp_customize->add_control( 'scary_halloween_products_border_radius', array(
		'label'       => esc_html__( 'Products Border Radius','scary-halloween' ),
		'section'     => 'scary_halloween_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'scary_halloween_products_button_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'scary_halloween_sanitize_number_range'
	) );
	$wp_customize->add_control( 'scary_halloween_products_button_border_radius', array(
		'label'       => esc_html__( 'Products Button Border Radius','scary-halloween' ),
		'section'     => 'scary_halloween_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('scary_halloween_products_btn_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_products_btn_padding_top_bottom',array(
		'label'	=> __('Products Button Padding Top Bottom','scary-halloween'),
		'description'	=> __('Enter a value in pixels. Example:20px','scary-halloween'),
		'input_attrs' => array(
        'placeholder' => __( '10px', 'scary-halloween' ),
        ),
		'section'=> 'scary_halloween_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('scary_halloween_products_btn_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_products_btn_padding_left_right',array(
		'label'	=> __('Products Button Padding Left Right','scary-halloween'),
		'description'	=> __('Enter a value in pixels. Example:20px','scary-halloween'),
		'input_attrs' => array(
        'placeholder' => __( '10px', 'scary-halloween' ),
        ),
		'section'=> 'scary_halloween_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('scary_halloween_woocommerce_sale_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_woocommerce_sale_font_size',array(
		'label'	=> __('Sale Font Size','scary-halloween'),
		'description'	=> __('Enter a value in pixels. Example:20px','scary-halloween'),
		'input_attrs' => array(
        'placeholder' => __( '10px', 'scary-halloween' ),
        ),
		'section'=> 'scary_halloween_woocommerce_section',
		'type'=> 'text'
	));

	//Products Sale Badge
	$wp_customize->add_setting('scary_halloween_woocommerce_sale_position',array(
    'default' => 'right',
    'sanitize_callback' => 'scary_halloween_sanitize_choices'
	));
	$wp_customize->add_control('scary_halloween_woocommerce_sale_position',array(
    'type' => 'select',
    'label' => __('Sale Badge Position','scary-halloween'),
    'section' => 'scary_halloween_woocommerce_section',
    'choices' => array(
        'left' => __('Left','scary-halloween'),
        'right' => __('Right','scary-halloween'),
    ),
	) );

	$wp_customize->add_setting('scary_halloween_woocommerce_sale_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_woocommerce_sale_padding_top_bottom',array(
		'label'	=> __('Sale Padding Top Bottom','scary-halloween'),
		'description'	=> __('Enter a value in pixels. Example:20px','scary-halloween'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'scary-halloween' ),
        ),
		'section'=> 'scary_halloween_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('scary_halloween_woocommerce_sale_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('scary_halloween_woocommerce_sale_padding_left_right',array(
		'label'	=> __('Sale Padding Left Right','scary-halloween'),
		'description'	=> __('Enter a value in pixels. Example:20px','scary-halloween'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'scary-halloween' ),
        ),
		'section'=> 'scary_halloween_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'scary_halloween_woocommerce_sale_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'scary_halloween_sanitize_number_range'
	) );
	$wp_customize->add_control( 'scary_halloween_woocommerce_sale_border_radius', array(
		'label'       => esc_html__( 'Sale Border Radius','scary-halloween' ),
		'section'     => 'scary_halloween_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	// Related Product
  $wp_customize->add_setting( 'scary_halloween_related_product_show_hide',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'scary_halloween_switch_sanitization'
  ) );
  $wp_customize->add_control( new Scary_Halloween_Toggle_Switch_Custom_Control( $wp_customize, 'scary_halloween_related_product_show_hide',array(
    'label' => esc_html__( 'Show / Hide Related product','scary-halloween' ),
    'section' => 'scary_halloween_woocommerce_section'
  )));

}

add_action( 'customize_register', 'scary_halloween_customize_register' );

load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Scary_Halloween_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	*/
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Scary_Halloween_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section( new Scary_Halloween_Customize_Section_Pro( $manager,'scary_halloween_go_pro', array(
			'priority'   => 1,
			'title'    => esc_html__( 'SCARY HALLOWEEN PRO', 'scary-halloween' ),
			'pro_text' => esc_html__( 'UPGRADE PRO', 'scary-halloween' ),
			'pro_url'  => esc_url('https://www.vwthemes.com/products/scary-halloween-wordpress-theme'),
		) )	);

		$manager->add_section(new Scary_Halloween_Customize_Section_Pro($manager,'scary_halloween_get_started_link',array(
			'priority'   => 1,
			'title'    => esc_html__( 'DOCUMENTATION', 'scary-halloween' ),
			'pro_text' => esc_html__( 'DOCS', 'scary-halloween' ),
			'pro_url'  => esc_url('https://preview.vwthemesdemo.com/docs/free-scary-halloween/'),
		)));
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'scary-halloween-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'scary-halloween-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Scary_Halloween_Customize::get_instance();