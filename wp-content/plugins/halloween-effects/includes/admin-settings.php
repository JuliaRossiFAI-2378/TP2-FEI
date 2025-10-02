<?php
// Create the admin menu and settings page
function halloween_add_admin_menu() {
    add_menu_page(
        'Halloween Settings',         // Page title
        'Halloween Effects',                  // Menu title
        'manage_options',                 // Capability required
        'halloween-settings',           // Menu slug
        'halloween_settings_page', // Callback function
        'dashicons-welcome-widgets-menus',           // Icon (optional)
        100
    );
}
add_action('admin_menu', 'halloween_add_admin_menu');

// Function to render the settings page content
function halloween_settings_page() {
    // Check user capabilities
    if (!current_user_can('manage_options')) {
        return;
    }
    $options = get_option('halloween_options');
    ?>
    <div class="wrap">
        <h1>Halloween Effects Settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('halloween_group');
            do_settings_sections('halloween-settings');
            submit_button('Save Settings');
            ?>
        </form>
    </div>
    <?php
}

// Register plugin settings
function halloween_register_settings() {
    register_setting('halloween_group', 'halloween_options', 'halloween_sanitize_options');

    // Section for plugin general setting
    add_settings_section(
        'halloween_general_section', // ID of the section
        'General Settings',               // Title
        'halloween_general_section_callback', // Callback function
        'halloween-settings'         // Page
    );
   // Enable snow
    add_settings_field(
    'enable_halloween',                        // ID
    'Enable Halloween',                     // Title
    'halloween_enable_halloween_callback', // Callback function
    'halloween-settings',         // Page
    'halloween_general_section'    // Section
    );
    
   // Color field
    add_settings_field(
        'halloween_color',                    // ID
        'Halloween Color',                // Title
        'halloween_color_callback',  // Callback
        'halloween-settings',            // Page
        'halloween_general_section' // Section
    );

    // Music option field
     add_settings_field(
        'music_option',                // ID
        'Music Option',                // Title
        'halloween_music_callback',  // Callback
        'halloween-settings',            // Page
        'halloween_general_section' // Section
    );

    // Apply to field
    add_settings_field(
        'apply_to',               // ID
        'Apply Effect To',           // Title
        'halloween_apply_to_callback', // Callback
        'halloween-settings',   // Page
        'halloween_general_section' // Section
    );
    // Single page select field
    add_settings_field(
        'selected_page',                  // ID
        'Select Page',                // Title
        'halloween_select_page_callback',    // Callback function
        'halloween-settings',             // Page
        'halloween_general_section'        // Section
     );

    // Add settings field for enabling Pumpkin
     add_settings_field(
        'enable_font',                        // ID
        'Enable Font',                 // Title
        'halloween_enable_font_callback', // Callback function
        'halloween-settings',              // Page
        'halloween_general_section'        // Section
    );
     
    // Add settings field for enabling Pumpkin
    add_settings_field(
        'enable_pumpkin',                        // ID
        'Enable Pumpkin Image',                 // Title
        'halloween_enable_pumpkin_callback', // Callback function
        'halloween-settings',              // Page
        'halloween_general_section'        // Section
    );

    // Add settings field for Pumpkin Position
    add_settings_field(
        'pumpkin_position',                        // ID
        'Pumpkin Position',                       // Title
        'halloween_pumpkin_position_callback', // Callback function
        'halloween-settings',              // Page
        'halloween_general_section'        // Section
    );
}
add_action('admin_init', 'halloween_register_settings');

// Callback function for general section
function halloween_general_section_callback() {
    echo '<p>Customize the halloween effect.</p>';
}
// Enable snow callback
function halloween_enable_halloween_callback() {
     $options = get_option('halloween_options');
     $enabled = isset($options['enable_halloween']) ? intval($options['enable_halloween']) : 0;
    ?>
    <input type="checkbox" name="halloween_options[enable_halloween]" id="enable_halloween" value="1" <?php checked(1, $enabled); ?> />
    <label for="enable_halloween">Enable Halloween effect.</label>
    <?php
}

// Enable Pumpkin callback
function halloween_enable_pumpkin_callback() {
    $options = get_option('halloween_options');
    $enabled = isset($options['enable_pumpkin']) ? intval($options['enable_pumpkin']) : 0;
    ?>
    <input type="checkbox" name="halloween_options[enable_pumpkin]" id="enable_pumpkin" value="1" <?php checked(1, $enabled); ?> />
    <label for="enable_pumpkin">Enable Pumpkin image effect on the frontend.</label>
    <?php
}

// Enable Pumpkin callback
function halloween_enable_font_callback() {
    $options = get_option('halloween_options');
    $enabled = isset($options['enable_font']) ? intval($options['enable_font']) : 0;
    ?>
    <input type="checkbox" name="halloween_options[enable_font]" id="enable_font" value="1" <?php checked(1, $enabled); ?> />
    <label for="enable_font">Enable Fonts on the frontend.</label>
    <?php
}

// Pumpkin Position callback
function halloween_pumpkin_position_callback() {
    $options = get_option('halloween_options');
    $position = isset($options['pumpkin_position']) ? esc_attr($options['pumpkin_position']) : 'top-left';
    ?>
    <select name="halloween_options[pumpkin_position]" id="pumpkin_position_select">
        <option value="top-left" <?php selected('top-left', $position); ?>>Top Left</option>
        <option value="top-right" <?php selected('top-right', $position); ?>>Top Right</option>
        <option value="bottom-left" <?php selected('bottom-left', $position); ?>>Bottom Left</option>
        <option value="bottom-right" <?php selected('bottom-right', $position); ?>>Bottom Right</option>
    </select>
    <p class="description">Select the position of the Pumpkin image.</p>
    <?php
}

// Color callback function
function halloween_color_callback() {
    $options = get_option('halloween_options');
    $color = isset($options['halloween_color']) ? esc_attr($options['halloween_color']) : '#ffffff';
    ?>
    <input type="text" name="halloween_options[halloween_color]" value="<?php echo esc_attr($color); ?>" class="halloween-color-field" data-default-color="#ffffff"/>
      <p class="description">Choose a color for the Bats.</p>
    <?php
}

// Music callback function
function halloween_music_callback() {
    $options = get_option('halloween_options');
    $selected_option = isset($options['music_option']) ? esc_attr($options['music_option']) : 'none';
    ?>
    <select name="halloween_options[music_option]">
          <option value="none" <?php selected('none', $selected_option); ?>>None</option>
          <option value="halloweenbeats" <?php selected('halloweenbeats', $selected_option); ?>>Halloween Beats</option>
          <option value="creepyhalloweenbelltrapmelody" <?php selected('creepyhalloweenbelltrapmelody', $selected_option); ?>>Creepy Halloween</option>
          <option value="halloweenpad" <?php selected('halloweenpad', $selected_option); ?>>Halloween Pad</option>          
          <!-- Add more options here -->
    </select>
    <p class="description">Select a music to play along with the halloween.</p>
    <?php
}

// Apply to callback
function halloween_apply_to_callback() {
    $options = get_option('halloween_options');
    $apply_to = isset($options['apply_to']) ? esc_attr($options['apply_to']) : 'all';
    ?>
    <select name="halloween_options[apply_to]" id="apply_to_select">
        <option value="all" <?php selected('all', $apply_to); ?>>All Website</option>
        <option value="single" <?php selected('single', $apply_to); ?>>Single Page</option>
    </select>
    <p class="description">Choose where to display the halloween.</p>
    <?php
}

// Single page select callback
function halloween_select_page_callback(){
    $options = get_option('halloween_options');
    $selected_page = isset($options['selected_page']) ? intval($options['selected_page']) : 0;
     $pages = get_pages();
    ?>
    <select name="halloween_options[selected_page]" id="selected_page_select">
        <option value="0" <?php selected(0, $selected_page); ?>>-- Select a page --</option>
        <?php
        foreach ($pages as $page) {
            echo '<option value="' . esc_attr($page->ID) . '"' . selected($page->ID, $selected_page, false) . '>' . esc_html($page->post_title) . '</option>';
        }
        ?>
    </select>
    <p class="description">Select the page on which the halloween effect will be applied.</p>
    <?php
}

// Sanitize settings
function halloween_sanitize_options($input) {
    $sanitized_input = array();
    if (isset($input['enable_halloween'])) {
        $sanitized_input['enable_halloween'] = intval($input['enable_halloween']);
    }
    if (isset($input['halloween_color'])) {
        $sanitized_input['halloween_color'] = sanitize_hex_color($input['halloween_color']);
    }
    if (isset($input['music_option'])) {
         $sanitized_input['music_option'] = sanitize_text_field($input['music_option']);
    }
    if (isset($input['apply_to'])) {
        $sanitized_input['apply_to'] = sanitize_text_field($input['apply_to']);
    }
    if (isset($input['selected_page'])) {
        $sanitized_input['selected_page'] = intval($input['selected_page']);
    }
    if (isset($input['enable_font'])) {
        $sanitized_input['enable_font'] = intval($input['enable_font']);
    }
    if (isset($input['enable_pumpkin'])) {
        $sanitized_input['enable_pumpkin'] = intval($input['enable_pumpkin']);
    }
    if (isset($input['pumpkin_position'])) {
        $sanitized_input['pumpkin_position'] = sanitize_text_field($input['pumpkin_position']);
    }
    return $sanitized_input;
}
?>