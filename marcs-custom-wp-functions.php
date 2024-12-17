<?php
/**
 * Plugin Name: Marc's Custom WP Functions Plugin
 * Description: A simple plugin to handle custom WordPress functions without a child theme.
 * Author URI: https://chiroiu.com
 * Plugin URI: https://github.com/schischa/marcs-custom-wp-functions
 * Version: 1.4.1
 * Author: Marc Chiroiu
 * License: GPL2
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

// Include all feature files
require_once plugin_dir_path(__FILE__) . 'inc/comments.php';
require_once plugin_dir_path(__FILE__) . 'inc/emojis.php';
require_once plugin_dir_path(__FILE__) . 'inc/admin-bar.php';
require_once plugin_dir_path(__FILE__) . 'inc/login.php';
require_once plugin_dir_path(__FILE__) . 'inc/theme-color.php';
require_once plugin_dir_path(__FILE__) . 'inc/settings-page.php';

// Set default options on plugin activation
function marcs_cwf_set_default_options() {
    if (get_option('marcs_cwf_theme_color') === false) {
        add_option('marcs_cwf_theme_color', '#db5945'); // Default theme color
    }
}
register_activation_hook(__FILE__, 'marcs_cwf_set_default_options');
