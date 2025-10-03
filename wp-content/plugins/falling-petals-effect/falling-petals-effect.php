<?php
/*
Plugin Name: Falling Petals Effect
Plugin URI: https://woomec.io.vn/index.php/san-pham/falling-petals-effect-plugin/
Description: A plugin to create a falling petals effect on website with customizable images.
Version: 1.0.1
Author: WooMEC
Author URI: https://woomec.io.vn/
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: falling-petals-effect
*/

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// Load admin settings
require_once plugin_dir_path(__FILE__) . 'includes/admin-settings.php';

// Use a unique prefix to avoid conflicts
function fallingpetals_enqueue_scripts() {
    if (get_option('fallingpetals_enabled')) { 
        wp_enqueue_style('fallingpetals-style', plugins_url('assets/css/style.css', __FILE__), array(), '1.0.2'); 
        wp_enqueue_script('fallingpetals-script', plugins_url('assets/js/script.js', __FILE__), array('jquery'), '1.0.2', true);
    }
}
add_action('wp_enqueue_scripts', 'fallingpetals_enqueue_scripts');

// Add falling petals effect to the footer
function fallingpetals_add_falling_petals() {
    if (get_option('fallingpetals_enabled')) {
        echo '<div class="falling-petals"></div>';
    }
}
add_action('wp_footer', 'fallingpetals_add_falling_petals');

// Add dynamic styles for petal images
function fallingpetals_dynamic_styles() {
    if (get_option('fallingpetals_enabled')) { 
        $petal1_image = esc_url(get_option('fallingpetals_petal1_image', ''));
        wp_add_inline_style('fallingpetals-style', "
            .falling-petals .petal.petal1 {
                background-image: url('{$petal1_image}');
            }
        ");
    }
}
add_action('wp_enqueue_scripts', 'fallingpetals_dynamic_styles');
?>
