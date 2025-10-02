<div class="theme-offer">
    <?php 


        // Check if the demo import has been completed
        $scary_halloween_demo_import_completed = get_option('scary_halloween_demo_import_completed', false);

        // If the demo import is completed, display the "View Site" button

        if ($scary_halloween_demo_import_completed) {
            echo '<p class="notice-text">' . esc_html__('Your demo import has been completed successfully.', 'scary-halloween') . '</p>';
            echo '<span id="view-site-btn"><a href="' . esc_url(home_url()) . '" class="button button-primary site-btn" target="_blank">' . esc_html__('View Site', 'scary-halloween') . '</a></span>';
        }
        
        // POST and update the customizer and other related data
        if (isset($_POST['submit'])) {

        // Function to install and activate Event Manager and Tickets Selling plugin
        function install_and_activate_event_plugin() {
            // Check if plugin is already active
            if (!is_plugin_active('mage-eventpress/woocommerce-event-press.php')) {
                $plugin_file = 'mage-eventpress/woocommerce-event-press.php';

                // Include necessary files for plugin installation and activation
                include_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
                include_once(ABSPATH . 'wp-admin/includes/file.php');
                include_once(ABSPATH . 'wp-admin/includes/misc.php');
                include_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');

                // Check if plugin is already installed
                if (!isset(get_plugins()[$plugin_file])) {
                    // Install the plugin
                    $upgrader = new Plugin_Upgrader();
                    $upgrader->install('https://downloads.wordpress.org/plugin/mage-eventpress.latest-stable.zip');
                }

                // Activate the plugin
                activate_plugin($plugin_file);
            }
        }
        add_action('after_switch_theme', 'install_and_activate_event_plugin');

        // Check if ibtana visual editor is installed and activated
        if (!is_plugin_active('ibtana-visual-editor/plugin.php')) {
          // Install the plugin if it doesn't exist
          $scary_halloween_plugin_slug = 'ibtana-visual-editor';
          $scary_halloween_plugin_file = 'ibtana-visual-editor/plugin.php';

          // Check if plugin is installed
          $scary_halloween_installed_plugins = get_plugins();
          if (!isset($scary_halloween_installed_plugins[$scary_halloween_plugin_file])) {
              include_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
              include_once(ABSPATH . 'wp-admin/includes/file.php');
              include_once(ABSPATH . 'wp-admin/includes/misc.php');
              include_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');

              // Install the plugin
              $scary_halloween_upgrader = new Plugin_Upgrader();
              $scary_halloween_upgrader->install('https://downloads.wordpress.org/plugin/ibtana-visual-editor.latest-stable.zip');
          }
          // Activate the plugin
          activate_plugin($scary_halloween_plugin_file);
        }


        // Function to create a demo page with [event-list] shortcode
        function create_demo_event_page() {
            // Check if demo page already exists
            $page_check = get_page_by_title('Demo Events');
            if (!isset($page_check->ID)) {
                // Create new page with [event-list] shortcode
                $page_id = wp_insert_post(array(
                    'post_title'     => 'Demo Events',
                    'post_content'   => '[event-list style="list"]',
                    'post_status'    => 'publish',
                    'post_type'      => 'page',
                ));
            }
        }
        add_action('after_switch_theme', 'create_demo_event_page');

        // Ensure events are loaded and displayed
        function load_events_data() {
            // Trigger event data loading if needed
            if (function_exists('mage_eventpress_load_events')) {
                mage_eventpress_load_events();
            }
        }
        add_action('init', 'load_events_data');


        // Check if Event Manager and Tickets Selling is installed and activated
        if (!is_plugin_active('mage-eventpress/woocommerce-event-press.php')) {
          // Install the plugin if it doesn't exist
          $scary_halloween_plugin_slug = 'mage-eventpress';
          $scary_halloween_plugin_file = 'mage-eventpress/woocommerce-event-press.php';

          $scary_halloween_installed_plugins = get_plugins();
          if (!isset($scary_halloween_installed_plugins[$scary_halloween_plugin_file])) {
              include_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
              include_once(ABSPATH . 'wp-admin/includes/file.php');
              include_once(ABSPATH . 'wp-admin/includes/misc.php');
              include_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');

              $scary_halloween_upgrader = new Plugin_Upgrader();
              $scary_halloween_upgrader->install('https://downloads.wordpress.org/plugin/mage-eventpress.latest-stable.zip');
          }
          // Activate the plugin
          activate_plugin($scary_halloween_plugin_file);
        }

        // ======================================================================================

        if (!is_plugin_active('woocommerce/woocommerce.php')) {
            // Install the plugin if it doesn't exist
            $scary_halloween_woocomm_slug = 'woocommerce';
            $scary_halloween_woocomm_file = 'woocommerce/woocommerce.php';

            // Check if plugin is installed
            $scary_halloween_installed_woocomm = get_plugins();
            if (!isset($scary_halloween_installed_woocomm[$scary_halloween_woocomm_file])) {
                include_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
                include_once(ABSPATH . 'wp-admin/includes/file.php');
                include_once(ABSPATH . 'wp-admin/includes/misc.php');
                include_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');

                $scary_halloween_woocomm = new Plugin_Upgrader();
                $scary_halloween_woocomm->install('https://downloads.wordpress.org/plugin/woocommerce.latest-stable.zip');
            }
            
            activate_plugin($scary_halloween_woocomm_file);
        }
    
        // ==================================================================================


            // ------- Create Nav Menu --------
            $scary_halloween_menuname = 'Main Menus';
            $scary_halloween_bpmenulocation = 'primary';
            $scary_halloween_menu_exists = wp_get_nav_menu_object($scary_halloween_menuname);

            if (!$scary_halloween_menu_exists) {
                $scary_halloween_menu_id = wp_create_nav_menu($scary_halloween_menuname);

                // Create Home Page
                $scary_halloween_home_title = 'Home';
                $scary_halloween_home = array(
                    'post_type' => 'page',
                    'post_title' => $scary_halloween_home_title,
                    'post_content' => '',
                    'post_status' => 'publish',
                    'post_author' => 1,
                    'post_slug' => 'home'
                );
                $scary_halloween_home_id = wp_insert_post($scary_halloween_home);
                // Assign Home Page Template
                add_post_meta($scary_halloween_home_id, '_wp_page_template', 'page-template/custom-home-page.php');
                // Update options to set Home Page as the front page
                update_option('page_on_front', $scary_halloween_home_id);
                update_option('show_on_front', 'page');
                // Add Home Page to Menu
                wp_update_nav_menu_item($scary_halloween_menu_id, 0, array(
                    'menu-item-title' => __('Home', 'scary-halloween'),
                    'menu-item-classes' => 'home',
                    'menu-item-url' => home_url('/'),
                    'menu-item-status' => 'publish',
                    'menu-item-object-id' => $scary_halloween_home_id,
                    'menu-item-object' => 'page',
                    'menu-item-type' => 'post_type'
                ));

                // Create Pages Page with Dummy Content
                $scary_halloween_pages_title = 'Pages';
                $scary_halloween_pages_content = '
                Explore all the pages we have on our website. Find information about our services, company, and more.
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br>
                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
                $scary_halloween_pages = array(
                    'post_type' => 'page',
                    'post_title' => $scary_halloween_pages_title,
                    'post_content' => $scary_halloween_pages_content,
                    'post_status' => 'publish',
                    'post_author' => 1,
                    'post_slug' => 'pages'
                );
                $scary_halloween_pages_id = wp_insert_post($scary_halloween_pages);
                // Add Pages Page to Menu
                wp_update_nav_menu_item($scary_halloween_menu_id, 0, array(
                    'menu-item-title' => __('Pages', 'scary-halloween'),
                    'menu-item-classes' => 'pages',
                    'menu-item-url' => home_url('/pages/'),
                    'menu-item-status' => 'publish',
                    'menu-item-object-id' => $scary_halloween_pages_id,
                    'menu-item-object' => 'page',
                    'menu-item-type' => 'post_type'
                ));

                // Create About Us Page with Dummy Content
                $scary_halloween_about_title = 'About Us';
                $scary_halloween_about_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...<br>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br>
                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.<br>
                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
                $scary_halloween_about = array(
                    'post_type' => 'page',
                    'post_title' => $scary_halloween_about_title,
                    'post_content' => $scary_halloween_about_content,
                    'post_status' => 'publish',
                    'post_author' => 1,
                    'post_slug' => 'about-us'
                );
                $scary_halloween_about_id = wp_insert_post($scary_halloween_about);
                // Add About Us Page to Menu
                wp_update_nav_menu_item($scary_halloween_menu_id, 0, array(
                    'menu-item-title' => __('About Us', 'scary-halloween'),
                    'menu-item-classes' => 'about-us',
                    'menu-item-url' => home_url('/about-us/'),
                    'menu-item-status' => 'publish',
                    'menu-item-object-id' => $scary_halloween_about_id,
                    'menu-item-object' => 'page',
                    'menu-item-type' => 'post_type'
                ));

                // Set the menu location if it's not already set
                if (!has_nav_menu($scary_halloween_bpmenulocation)) {
                    $scary_halloween_locations = get_theme_mod('nav_menu_locations'); // Use 'nav_menu_locations' to get locations array
                    if (empty($scary_halloween_locations)) {
                        $scary_halloween_locations = array();
                    }
                    $scary_halloween_locations[$scary_halloween_bpmenulocation] = $scary_halloween_menu_id;
                    set_theme_mod('nav_menu_locations', $scary_halloween_locations);
                }
            } 


            // Set the demo import completion flag
            update_option('scary_halloween_demo_import_completed', true);
            
            // Display success message and "View Site" button
            echo '<p class="notice-text">' . esc_html__('Your demo import has been completed successfully.', 'scary-halloween') . '</p>';
            echo '<span><a href="' . esc_url(home_url()) . '" class="button button-primary site-btn" target="_blank">' . esc_html__('View Site', 'scary-halloween') . '</a></span>';
            
            // Header
            set_theme_mod( 'scary_halloween_email_address_icon', 'fa-solid fa-envelope-open-text' );
            set_theme_mod( 'scary_halloween_email_address', 'xyz123@example.com' );
            set_theme_mod( 'scary_halloween_topbar_location_icon', 'fa-solid fa-location-dot' );
            set_theme_mod( 'scary_halloween_topbar_location_text', '317 Sports road, Buffalo, NY 92648' );
            set_theme_mod( 'scary_halloween_track_locatin_url', '#' );
            set_theme_mod( 'scary_halloween_phone_icon', 'fa-solid fa-phone' );
            set_theme_mod( 'scary_halloween_phone_number', '(123) 456-7890' );
            set_theme_mod( 'scary_halloween_topbar_button_text', 'Get Party Ticket' );
            set_theme_mod( 'scary_halloween_topbar_button_link', '#' );

            // slider section start //        
            set_theme_mod( 'scary_halloween_slide_number', '3' );
            for($scary_halloween_i=1; $scary_halloween_i<=3; $scary_halloween_i++) {
                set_theme_mod( 'scary_halloween_slider_bg_img'.$scary_halloween_i, get_template_directory_uri().'/assets/images/slider'.$scary_halloween_i.'.png' );
                set_theme_mod( 'scary_halloween_slider_title'.$scary_halloween_i, 'Enjoy your Halloween with us and have a great time' );
                set_theme_mod( 'scary_halloween_slider_text'.$scary_halloween_i, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry' );
                set_theme_mod( 'scary_halloween_slider_button_text'.$scary_halloween_i, 'Our Events' );
                set_theme_mod( 'scary_halloween_slider_btn_icon'.$scary_halloween_i, 'fa-solid fa-angle-right' );
                set_theme_mod( 'scary_halloween_slider_button_link'.$scary_halloween_i, '#' );
                set_theme_mod( 'scary_halloween_slider_word'.$scary_halloween_i, 'HALLOWEEN' );
            }

            // Event Section
            set_theme_mod( 'scary_halloween_event_section_text', 'Party Events' );
            set_theme_mod( 'scary_halloween_event_section_title', 'Our Events For The Halloween Night' );

            //Copyright Text
            set_theme_mod( 'scary_halloween_footer_text', 'By VWThemes' ); 
          
            echo '<script>location.reload();</script>';
            

        }

    ?>
  
    <p><?php esc_html_e('Please back up your website if it’s already live with data. This importer will overwrite your existing settings with the new customizer values for Scary Halloween.','scary-halloween'); ?></p>
    <form action="<?php echo esc_url(home_url()); ?>/wp-admin/themes.php?page=scary_halloween_guide" method="POST" onsubmit="return validate(this);">
    <?php if (!get_option('scary_halloween_demo_import_completed')) : ?>
        <form method="post">
            <input class= "run-import" type="submit" name="submit" value="<?php esc_attr_e('Run Importer','scary-halloween'); ?>" class="button button-primary button-large">
        </form>
    <?php endif; ?>
    </form>
    <script type="text/javascript">

        function validate(valid) {
             if(confirm("Do you really want to import the theme demo content?")){
                document.forms[0].submit();
            }
            else {
                return false;
            }
        }

    </script>

</div>

