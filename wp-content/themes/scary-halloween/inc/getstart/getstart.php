<?php
//about theme info
add_action( 'admin_menu', 'scary_halloween_gettingstarted' );
function scary_halloween_gettingstarted() {
	add_theme_page( esc_html__('About Scary Halloween ', 'scary-halloween'), esc_html__('Theme Demo Import', 'scary-halloween'), 'edit_theme_options', 'scary_halloween_guide', 'scary_halloween_mostrar_guide');
}

// Add a Custom CSS file to WP Admin Area
function scary_halloween_admin_theme_style() {
	wp_enqueue_style('scary-halloween-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getstart/getstart.css');
	wp_enqueue_script('scary-halloween-tabs', esc_url(get_template_directory_uri()) . '/inc/getstart/js/tab.js');
}
add_action('admin_enqueue_scripts', 'scary_halloween_admin_theme_style');

//guidline for about theme
function scary_halloween_mostrar_guide() { 
	//custom function about theme customizer
	$scary_halloween_return = add_query_arg( array()) ;
	$scary_halloween_theme = wp_get_theme( 'scary-halloween' );
?>

<div class="wrapper-info">
    <div class="col-left sshot-section">
    	<h2><?php esc_html_e( 'Welcome to Scary Halloween ', 'scary-halloween' ); ?> <span class="version"><?php esc_html_e( 'Version', 'scary-halloween' ); ?>: <?php echo esc_html($scary_halloween_theme['Version']);?></span></h2>
    	<p><?php esc_html_e('All our WordPress themes are modern, minimalist, 100% responsive, seo-friendly,feature-rich, and multipurpose that best suit designers, bloggers and other professionals who are working in the creative fields.','scary-halloween'); ?></p>
    </div>

    <div class="col-right coupen-section">
    	<div class="logo-section">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png" alt="" />
		</div>
		<div class="logo-right">			
			<div class="update-now">
				<div class="theme-info">
					<div class="theme-info-left">
						<h2><?php esc_html_e('TRY PREMIUM','scary-halloween'); ?></h2>
						<h4><?php esc_html_e('SCARY HALLOWEEN THEME','scary-halloween'); ?></h4>
					</div>	
					<div class="theme-info-right"></div>
				</div>	
				<div class="dicount-row">
					<div class="disc-sec">	
						<h5 class="disc-text"><?php esc_html_e('GET THE FLAT DISCOUNT OF','scary-halloween'); ?></h5>
						<h1 class="disc-per"><?php esc_html_e('20%','scary-halloween'); ?></h1>	
					</div>
					<div class="coupen-info">
						<h5 class="coupen-code"><?php esc_html_e('"VWPRO20"','scary-halloween'); ?></h5>
						<h5 class="coupen-text"><?php esc_html_e('USE COUPON CODE','scary-halloween'); ?></h5>
						<div class="info-link">						
							<a href="<?php echo esc_url( SCARY_HALLOWEEN_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'UPGRADE TO PRO', 'scary-halloween' ); ?></a>
						</div>	
					</div>	
				</div>				
			</div>
		</div>
		
    </div>

    <div class="tab-sec">
    	<div class="tab">
    		<button class="tablinks" onclick="scary_halloween_open_tab(event, 'theme_offer')"><?php esc_html_e( 'Demo Importer', 'scary-halloween' ); ?></button>
			<button class="tablinks" onclick="scary_halloween_open_tab(event, 'lite_theme')"><?php esc_html_e( 'Setup With Customizer', 'scary-halloween' ); ?></button>
			<button class="tablinks" onclick="scary_halloween_open_tab(event, 'theme_pro')"><?php esc_html_e( 'Get Premium', 'scary-halloween' ); ?></button>
  			<button class="tablinks" onclick="scary_halloween_open_tab(event, 'free_pro')"><?php esc_html_e( 'Free VS Premium', 'scary-halloween' ); ?></button>
  			<button class="tablinks" onclick="scary_halloween_open_tab(event, 'get_bundle')"><?php esc_html_e( 'Get 350+ Themes Bundle at $99', 'scary-halloween' ); ?></button>
		</div>

		<?php 
			$scary_halloween_plugin_custom_css = '';
			if(class_exists('Ibtana_Visual_Editor_Menu_Class')){
				$scary_halloween_plugin_custom_css ='display: block';
			}
		?>

		<div id="theme_offer" class="tabcontent open">
			<div class="demo-content">
				<h3><?php esc_html_e( 'Click the below run importer button to import demo content', 'scary-halloween' ); ?></h3>
				<?php 
				/* Get Started. */ 
				require get_parent_theme_file_path( '/inc/getstart/demo-content.php' );
			 	?>
			</div> 	
		</div>
		
		<div id="lite_theme" class="tabcontent">
			<?php  if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
				$plugin_ins = Scary_Halloween_Plugin_Activation_Settings::get_instance();
				$scary_halloween_actions = $plugin_ins->recommended_actions;
				?>
				<div class="scary-halloween-recommended-plugins">
				    <div class="scary-halloween-action-list">
				        <?php if ($scary_halloween_actions): foreach ($scary_halloween_actions as $key => $scary_halloween_actionValue): ?>
				                <div class="scary-halloween-action" id="<?php echo esc_attr($scary_halloween_actionValue['id']);?>">
			                        <div class="action-inner">
			                            <h3 class="action-title"><?php echo esc_html($scary_halloween_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($scary_halloween_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($scary_halloween_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" get-start-tab-id="lite-theme-tab" href="javascript:void(0);"><?php esc_html_e('Skip','scary-halloween'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="lite-theme-tab" style="<?php echo esc_attr($scary_halloween_plugin_custom_css); ?>">
				<h3><?php esc_html_e( 'Lite Theme Information', 'scary-halloween' ); ?></h3>
				<hr class="h3hr">
				<p><?php esc_html_e('The Scary Halloween WordPress Theme is a dynamic and visually captivating template designed specifically for Halloween enthusiasts, party planners, and event organisers. This theme is ideal for those who want to create an engaging website to showcase Halloween costumes, Scary Halloween, Halloween Decorations, Halloween Costumes, Halloween Party Ideas, Haunted House, Spooky Halloween, Scary Costumes, Halloween Horror, Halloween Scary Makeup, Halloween Parties, Creepy Decorations, Scary Halloween Games, Halloween Night, Halloween Monsters, Halloween Ghosts, Trick or Treat, Halloween Horror Movies, Halloween Themes, Scary Pumpkin Designs, Halloween Witch Costumes, Scary Stories for Halloween, spooky decorations, or host virtual Halloween events. Whether you are organising a haunted house attraction, planning a Halloween party, or selling themed decorations and treats, this theme has everything you need to bring your ideas to life online. The Scary Halloween WordPress Theme is crafted with a chilling aesthetic, including dark backgrounds, eerie fonts, and striking imagery that create an atmosphere perfect for the season. This theme features customizable sections for promoting Halloween party supplies, costume ideas, haunted attractions, and even fun family activities like pumpkin carving and Halloween crafts for kids. Visual elements like spooky decor, Halloween props, and horror-themed graphics make your website an immersive experience, while sections for Halloween recipes, makeup tutorials, and playlists add value for readers seeking inspiration. The Scary Halloween WordPress Theme is mobile-friendly and SEO-optimized, making it easy for users to find and engage with your content on any device. With its extensive customization options, this theme allows you to create a truly unique and eerie Halloween experience for your audience.','scary-halloween'); ?></p>
			  	<div class="col-left-inner">
			  		<h4><?php esc_html_e( 'Theme Documentation', 'scary-halloween' ); ?></h4>
					<p><?php esc_html_e( 'If you need any assistance regarding setting up and configuring the Theme, our documentation is there.', 'scary-halloween' ); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( SCARY_HALLOWEEN_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'scary-halloween' ); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Theme Customizer', 'scary-halloween'); ?></h4>
					<p> <?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'scary-halloween'); ?></p>
					<div class="info-link">
						<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'scary-halloween'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Having Trouble, Need Support?', 'scary-halloween'); ?></h4>
					<p> <?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'scary-halloween'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( SCARY_HALLOWEEN_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'scary-halloween'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Reviews & Testimonials', 'scary-halloween'); ?></h4>
					<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'scary-halloween'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( SCARY_HALLOWEEN_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'scary-halloween'); ?></a>
					</div>

					<div class="link-customizer">
						<h3><?php esc_html_e( 'Link to customizer', 'scary-halloween' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','scary-halloween'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-category"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=scary_halloween_top_bar') ); ?>" target="_blank"><?php esc_html_e('Header','scary-halloween'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-slides"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=scary_halloween_slider_section') ); ?>" target="_blank"><?php esc_html_e('Slider Settings','scary-halloween'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-category"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=scary_halloween_event_section') ); ?>" target="_blank"><?php esc_html_e('Event Section','scary-halloween'); ?></a>
								</div>
							</div>
						
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=scary_halloween_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','scary-halloween'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','scary-halloween'); ?></a>
								</div>
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=scary_halloween_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','scary-halloween'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=scary_halloween_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','scary-halloween'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','scary-halloween'); ?></a>
								</div>
							</div>
						</div>
					</div>
			  	</div>
				<div class="col-right-inner">
					<h3 class="page-template"><?php esc_html_e('How to set up Home Page Template','scary-halloween'); ?></h3>
				  	<hr class="h3hr">
					<p><?php esc_html_e('Follow these instructions to setup Home page.','scary-halloween'); ?></p>
                  	<p><span class="strong"><?php esc_html_e('1. Create a new page :','scary-halloween'); ?></span><?php esc_html_e(' Go to ','scary-halloween'); ?>
					  	<b><?php esc_html_e(' Dashboard >> Pages >> Add New Page','scary-halloween'); ?></b></p>
                  	<p><?php esc_html_e('Name it as "Home" then select the template "Custom Home Page".','scary-halloween'); ?></p>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/home-page-template.png" alt="" />
                  	<p><span class="strong"><?php esc_html_e('2. Set the front page:','scary-halloween'); ?></span><?php esc_html_e(' Go to ','scary-halloween'); ?>
					  	<b><?php esc_html_e(' Settings >> Reading ','scary-halloween'); ?></b></p>
				  	<p><?php esc_html_e('Select the option of Static Page, now select the page you created to be the homepage, while another page to be your default page.','scary-halloween'); ?></p>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/set-front-page.png" alt="" />
                  	<p><?php esc_html_e(' Once you are done with setup, then follow the','scary-halloween'); ?> <a class="doc-links" href="<?php echo esc_url( SCARY_HALLOWEEN_FREE_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation','scary-halloween'); ?></a></p>
			  	</div>
			</div>
		</div>

		<div id="theme_pro" class="tabcontent">
		  	<h3><?php esc_html_e( 'Premium Theme Information', 'scary-halloween' ); ?></h3>
			<hr class="h3hr">
		    <div class="col-left-pro">
		    	<p><?php esc_html_e('The Scary Halloween WordPress Theme is a dynamic and visually captivating template designed specifically for Halloween enthusiasts, party planners, and event organisers. This theme is ideal for those who want to create an engaging website to showcase Halloween costumes, Scary Halloween, Halloween Decorations, Halloween Costumes, Halloween Party Ideas, Haunted House, Spooky Halloween, Scary Costumes, Halloween Horror, Halloween Scary Makeup, Halloween Parties, Creepy Decorations, Scary Halloween Games, Halloween Night, Halloween Monsters, Halloween Ghosts, Trick or Treat, Halloween Horror Movies, Halloween Themes, Scary Pumpkin Designs, Halloween Witch Costumes, Scary Stories for Halloween, spooky decorations, or host virtual Halloween events. Whether you are organising a haunted house attraction, planning a Halloween party, or selling themed decorations and treats, this theme has everything you need to bring your ideas to life online. The Scary Halloween WordPress Theme is crafted with a chilling aesthetic, including dark backgrounds, eerie fonts, and striking imagery that create an atmosphere perfect for the season. This theme features customizable sections for promoting Halloween party supplies, costume ideas, haunted attractions, and even fun family activities like pumpkin carving and Halloween crafts for kids. Visual elements like spooky decor, Halloween props, and horror-themed graphics make your website an immersive experience, while sections for Halloween recipes, makeup tutorials, and playlists add value for readers seeking inspiration. The Scary Halloween WordPress Theme is mobile-friendly and SEO-optimized, making it easy for users to find and engage with your content on any device. With its extensive customization options, this theme allows you to create a truly unique and eerie Halloween experience for your audience.','scary-halloween'); ?></p>
		    </div>
		    <div class="col-right-pro">
		    	<div class="pro-links">
			    	<a href="<?php echo esc_url( SCARY_HALLOWEEN_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'scary-halloween'); ?></a>
					<a href="<?php echo esc_url( SCARY_HALLOWEEN_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'scary-halloween'); ?></a>
					<a href="<?php echo esc_url( SCARY_HALLOWEEN_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'scary-halloween'); ?></a>
					<a href="<?php echo esc_url( SCARY_HALLOWEEN_THEME_BUNDLE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get 350+ Themes Bundle at $99', 'scary-halloween'); ?></a>
				</div>
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/responsive.png" alt="" />
		    </div>
		</div>

		<div id="free_pro" class="tabcontent">
		  	<div class="featurebox">
			    <h3><?php esc_html_e( 'Theme Features', 'scary-halloween' ); ?></h3>
				<hr class="h3hr">
				<div class="table-image">
					<table class="tablebox">
						<thead>
							<tr>
								<th></th>
								<th><?php esc_html_e('Free Themes', 'scary-halloween'); ?></th>
								<th><?php esc_html_e('Premium Themes', 'scary-halloween'); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php esc_html_e('Theme Customization', 'scary-halloween'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Responsive Design', 'scary-halloween'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Logo Upload', 'scary-halloween'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Social Media Links', 'scary-halloween'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Banner Settings', 'scary-halloween'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Template Pages', 'scary-halloween'); ?></td>
								<td class="table-img"><?php esc_html_e('3', 'scary-halloween'); ?></td>
								<td class="table-img"><?php esc_html_e('10', 'scary-halloween'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Home Page Template', 'scary-halloween'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'scary-halloween'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'scary-halloween'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Theme sections', 'scary-halloween'); ?></td>
								<td class="table-img"><?php esc_html_e('2', 'scary-halloween'); ?></td>
								<td class="table-img"><?php esc_html_e('13', 'scary-halloween'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Contact us Page Template / Support Templates', 'scary-halloween'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('1', 'scary-halloween'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Blog Templates & Layout', 'scary-halloween'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Full width/Left/Right Sidebar)', 'scary-halloween'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Page Templates & Layout', 'scary-halloween'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Left/Right Sidebar)', 'scary-halloween'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Color Pallete For Particular Sections', 'scary-halloween'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Global Color Option', 'scary-halloween'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Reordering', 'scary-halloween'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Demo Importer', 'scary-halloween'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Allow To Set Site Title, Tagline, Logo', 'scary-halloween'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Enable Disable Options On All Sections, Logo', 'scary-halloween'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Full Documentation', 'scary-halloween'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Latest WordPress Compatibility', 'scary-halloween'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Support 3rd Party Plugins', 'scary-halloween'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Secure and Optimized Code', 'scary-halloween'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Exclusive Functionalities', 'scary-halloween'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Enable / Disable', 'scary-halloween'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Section Google Font Choices', 'scary-halloween'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Video Gallery', 'scary-halloween'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Simple & Mega Menu Option', 'scary-halloween'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support to add custom CSS / JS ', 'scary-halloween'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Shortcodes', 'scary-halloween'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Background, Colors, Header, Logo & Menu', 'scary-halloween'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Premium Membership', 'scary-halloween'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Budget Friendly Value', 'scary-halloween'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Priority Error Fixing', 'scary-halloween'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Feature Addition', 'scary-halloween'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('All Access Theme Pass', 'scary-halloween'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Seamless Customer Support', 'scary-halloween'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Scary Halloween ', 'scary-halloween'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Detail Services', 'scary-halloween'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('About Business Page', 'scary-halloween'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Team Member Page', 'scary-halloween'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Project Description Page', 'scary-halloween'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support Page', 'scary-halloween'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td></td>
								<td class="table-img"></td>
								<td class="update-link"><a href="<?php echo esc_url( SCARY_HALLOWEEN_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade to Pro', 'scary-halloween'); ?></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div id="get_bundle" class="tabcontent">		  	
		   	<div class="col-left-pro">
		   		<h3><?php esc_html_e( 'WP Theme Bundle', 'scary-halloween' ); ?></h3>
		    	<p><?php esc_html_e('Enhance your website effortlessly with our WP Theme Bundle. Get access to 350+ premium WordPress themes and 5+ powerful plugins, all designed to meet diverse business needs. Enjoy seamless integration with any plugins, ultimate customization flexibility, and regular updates to keep your site current and secure. Plus, benefit from our dedicated customer support, ensuring a smooth and professional web experience.','scary-halloween'); ?></p>
		    	<div class="feature">
		    		<h4><?php esc_html_e( 'Features:', 'scary-halloween' ); ?></h4>
		    		<p><?php esc_html_e('350+ Premium Themes & 5+ Plugins.', 'scary-halloween'); ?></p>
		    		<p><?php esc_html_e('Seamless Integration.', 'scary-halloween'); ?></p>
		    		<p><?php esc_html_e('Customization Flexibility.', 'scary-halloween'); ?></p>
		    		<p><?php esc_html_e('Regular Updates.', 'scary-halloween'); ?></p>
		    		<p><?php esc_html_e('Dedicated Support.', 'scary-halloween'); ?></p>
		    	</div>
		    	<p><?php esc_html_e('Upgrade now and give your website the professional edge it deserves, all at an unbeatable price of $99!', 'scary-halloween'); ?></p>
		    	<div class="pro-links">
					<a href="<?php echo esc_url( SCARY_HALLOWEEN_THEME_BUNDLE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'scary-halloween'); ?></a>
					<a href="<?php echo esc_url( SCARY_HALLOWEEN_THEME_BUNDLE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'scary-halloween'); ?></a>
				</div>
		   	</div>
		   	<div class="col-right-pro">
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/bundle.png" alt="" />
		   	</div>		    
		</div>
	</div>
</div>

<?php } ?>