<?php
/**
 *
 * Plugin Name: Halloween Effects
 * Plugin URI:  https://wordpress.org/plugins/halloween-effects
 * Description: This plugin allows you to add a Pumpkin effect to your website with a moving Ghost image. 
 * Version:     1.0
 * Author:      DyXperts
 * Author URI:  https://profiles.wordpress.org/dyexperts/
 * License:     GPLv2 or later
 * License URI: http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * Text Domain: halloween-effects
 * Domain Path: 
 * Requires at least: 5.0
 * Requires PHP: 7.2
 * 
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License version 2, as published by the Free Software Foundation. You may NOT assume
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */


// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Include the settings page and save settings
include_once plugin_dir_path(__FILE__) . 'includes/admin-settings.php';

// Enqueue styles and scripts for front-end if enabled and needed
function halloween_enqueue_scripts() {
    $options = get_option('halloween_options');

    // Check if halloween  is enabled
    if (isset($options['enable_halloween']) && $options['enable_halloween'] == 1) {
        // Enqueue the snow effect script
        wp_enqueue_script('halloween', plugins_url('assets/js/halloween.js', __FILE__), array('jquery'), '1.0.0', true);
        // Enqueue the snow style
        wp_enqueue_style('halloween-style', plugins_url('assets/css/halloween.css', __FILE__), array(), '1.0.0');
        
        $pumpkin_image_url = plugin_dir_url(__FILE__) . 'assets/pumpkin.gif';
        $ghosturl = plugin_dir_url(__FILE__) . 'assets/ghost.svg';

        // Pass settings to JavaScript
        $settings = array(            
            'color' => isset($options['halloween_color']) ? esc_attr($options['halloween_color']) : '#ffffff',
            'musicOption' => isset($options['music_option']) ? esc_attr($options['music_option']) : 'none',
            'animationSpeed' => isset($options['animation_speed']) ? esc_attr($options['animation_speed']) : 'normal',
            'applyTo' => isset($options['apply_to']) ? esc_attr($options['apply_to']) : 'all',
            'pageId' => isset($options['selected_page']) ? intval($options['selected_page']) : 0,  // Get the selected page ID
            'cssRules' => halloween_generate_css_rules(),
            'enablePumpkin' => $options['enable_pumpkin'] ?? 0,
            'enableFont' => $options['enable_font'] ?? 0,
            'pumpkinImageUrl' => $pumpkin_image_url,
            'ghosturl' => $ghosturl,
            'pumpkinPosition' => isset($options['pumpkin_position']) ? esc_attr($options['pumpkin_position']) : '',
        );
        wp_localize_script('halloween', 'halloweenSettings', $settings);

        // Enqueue inline style for dynamic css
        add_action('wp_head', 'halloween_dynamic_css', 10);
    }
}
add_action('wp_enqueue_scripts', 'halloween_enqueue_scripts');

// Generate dynamic CSS rules based on user settings
function halloween_generate_css_rules() {
    $options = get_option('halloween_options');
    $fontSize = isset($options['font_size']) ? esc_attr($options['font_size']) : '20px';
    $color = isset($options['halloween_color']) ? esc_attr($options['halloween_color']) : '#ffffff';
    $animationSpeed = isset($options['animation_speed']) ? esc_attr($options['animation_speed']) : 'normal';

    // Determine animation duration based on selected speed
    $animationDuration = '15s'; // default value
    if ($animationSpeed === 'low') {
        $animationDuration = '25s';
    } elseif ($animationSpeed === 'fast') {
        $animationDuration = '8s';
    }

    $css =  ".halloween {
            font-size: {$fontSize};
            color: {$color};
            animation-duration: {$animationDuration};
            position: absolute;
            top: -10%;
            pointer-events: none;
            white-space: nowrap;
            animation-name: fall;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
            opacity: 0.8;
            }
           
           @keyframes fall {
               0% {
                  top: -10%;
                  opacity: 0.8;
              }
                100% {
                top: 100%;
                opacity: 0.3;
               }
            }
             ";
    // Add pumpkin positioning if enabled
    if (isset($options['enable_pumpkin']) && $options['enable_pumpkin'] == 1) {
        $position = isset($options['pumpkin_position']) ? esc_attr($options['pumpkin_position']) : 'bottom-right';
        $positions = array(
            'top-left' => 'top: 10px; left: 10px;',
            'top-right' => 'top: 10px; right: 10px;',
            'bottom-left' => 'bottom: 10px; left: 10px;',
            'bottom-right' => 'bottom: 10px; right: 10px;'
        );

        $positionStyle = isset($positions[$position]) ? $positions[$position] : $positions['bottom-right'];

        $css .= ".pumpkin-image {
            position: fixed;
            z-index: 9999;
            position: {$positionStyle};
        }";
    }    
    return $css;
}

// Add music URL to JavaScript
function halloween_add_music_url() {
    $music_url = plugin_dir_url(__FILE__) . 'assets/audio/';
    wp_localize_script('halloween', 'halloween_music_url', array('musicURL' => $music_url));
}
add_action('wp_enqueue_scripts', 'halloween_add_music_url');

// Enqueue styles and scripts for admin panel
function halloween_enqueue_admin_scripts($hook) {
    if ('toplevel_page_halloween-settings' !== $hook) {
        return;
    }
    // Enqueue the color picker
    wp_enqueue_style( 'wp-color-picker' );
    wp_enqueue_script( 'wp-color-picker' );
    wp_enqueue_script('halloween-admin', plugins_url('assets/js/admin.js', __FILE__), array('jquery','wp-color-picker'), '1.0.0', true);
    wp_enqueue_style('halloween-admin-style', plugins_url('assets/css/admin.css', __FILE__), array(), '1.0.0');

}

add_action('admin_enqueue_scripts', 'halloween_enqueue_admin_scripts');

// Enqueuw Dashicon
function halloween_enqueue_dashicons() {
    // Only enqueue the stylesheet in the admin area
    if (is_admin()) {
        wp_enqueue_style('dashicons');
    }
}
add_action('admin_enqueue_scripts', 'halloween_enqueue_dashicons');

// Add inline style to head
function halloween_dynamic_css(){

    $options = get_option('halloween_options');

    if(isset($options['enable_halloween']) && $options['enable_halloween'] == 1){

        $css_rules =  halloween_generate_css_rules();

        $sanitized_css = esc_html($css_rules);

        wp_add_inline_style('halloween-style', $sanitized_css);
    }
}

// Run this function on plugin activation
register_activation_hook(__FILE__, 'halloween_activation');

function halloween_activation(){
    // Set default options
    $default_options = array(
        'enable_halloween' => 0, // disabled by default        
        'halloween_color' => '#000',
        'music_option' => 'none',
        'animation_speed' => 'normal',
        'apply_to' => 'all',
        'selected_page' => 0,
        'enable_pumpkin' => 0,
        'pumpkin_position' => 'bottom-right',
    );
    add_option('halloween_options', $default_options);
}

// Run this function on plugin deactivation
register_deactivation_hook(__FILE__, 'halloween_deactivation');

function halloween_deactivation() {
    // Reset settings or any clean-up code
    delete_option('halloween_options'); // Optional: Delete plugin options on deactivation
}