<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// Add menu item for plugin settings
function fallingpetals_add_admin_menu() {
    add_menu_page(
        esc_html__('Falling Petals Effect Settings', 'falling-petals-effect'),
        esc_html__('Falling Petals', 'falling-petals-effect'),
        'manage_options',
        'fallingpetals_settings',
        'fallingpetals_settings_page',
        'dashicons-buddicons-groups',
        100
    );
}
add_action('admin_menu', 'fallingpetals_add_admin_menu');

// Register settings
function fallingpetals_register_settings() {
    register_setting(
        'fallingpetals_settings_group', 
        'fallingpetals_enabled', 
        array(
            'type'              => 'boolean',
            'sanitize_callback' => 'fallingpetals_sanitize_enabled',
        )
    );

    register_setting(
        'fallingpetals_settings_group', 
        'fallingpetals_petal1_image', 
        array(
            'type'              => 'string',
            'sanitize_callback' => 'esc_url_raw',
        )
    );
}
add_action('admin_init', 'fallingpetals_register_settings');

// Sanitization callback for fallingpetals_enabled
function fallingpetals_sanitize_enabled($input) {
    return ($input === '1') ? 1 : 0;
}

// Settings page content
function fallingpetals_settings_page() {
    if (!current_user_can('manage_options')) {
        wp_die(esc_html__('You do not have sufficient permissions to access this page.', 'falling-petals-effect'));
    }
    ?>
    <div class="wrap">
        <h1><?php esc_html_e('Falling Petals Effect Settings', 'falling-petals-effect'); ?></h1>
        <form method="post" action="options.php">
            <?php settings_fields('fallingpetals_settings_group'); ?>
            <?php do_settings_sections('fallingpetals_settings_group'); ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row"><?php esc_html_e('Enable Falling Petals Effect', 'falling-petals-effect'); ?></th>
                    <td>
                        <label>
                            <input type="checkbox" name="fallingpetals_enabled" value="1" <?php checked(1, (int) get_option('fallingpetals_enabled', 0), true); ?>>
                            <?php esc_html_e('Enable on all pages', 'falling-petals-effect'); ?>
                        </label>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row"><?php esc_html_e('Petal 1 Image', 'falling-petals-effect'); ?></th>
                    <td>
                        <input type="text" name="fallingpetals_petal1_image" value="<?php echo esc_attr(get_option('fallingpetals_petal1_image', '')); ?>" class="regular-text">
                        <p class="description"><?php esc_html_e('Please enter the image URL. The uploaded image should be in PNG/JPEG format and have no background.', 'falling-petals-effect'); ?></p>
                    </td>
                </tr>
            </table>
            <?php submit_button(); ?>
        </form>
        <p style="margin-top: 10px;">
            <?php esc_html_e('Upgrade to the premium version to customize effects for specific pages and access more effect images. ', 'falling-petals-effect'); ?>
            <a href="https://woomec.io.vn/" target="_blank"><?php esc_html_e('Here', 'falling-petals-effect'); ?></a>.
        </p>
    </div>
    <?php
}
?>
