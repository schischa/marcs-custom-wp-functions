<?php
/**
 * Plugin Name: Marc's Custom WP Functions Plugin
 * Description: A simple plugin to handle custom WordPress functions without a child theme.
 * Author URI: https://chiroiu.com
 * Plugin URI: https://github.com/schischa/marcs-custom-wp-functions
 * Version: 1.6
 * Author: Marc Chiroiu
 * License: GPL2
 */

if (!defined('WPINC')) {
    die;
}

require_once plugin_dir_path(__FILE__) . 'inc/comments.php';
require_once plugin_dir_path(__FILE__) . 'inc/emojis.php';
require_once plugin_dir_path(__FILE__) . 'inc/admin-bar.php';
require_once plugin_dir_path(__FILE__) . 'inc/login.php';
require_once plugin_dir_path(__FILE__) . 'inc/theme-color.php';
require_once plugin_dir_path(__FILE__) . 'inc/xmlrpc.php';
require_once plugin_dir_path(__FILE__) . 'inc/updates.php';
require_once plugin_dir_path(__FILE__) . 'inc/settings-page.php';

// Set default options on plugin activation
function marcs_cwf_set_default_options() {
    if (get_option('marcs_cwf_theme_color') === false) {
        add_option('marcs_cwf_theme_color', '#db5945');
    }
    if (get_option('marcs_cwf_disable_comments') === false) {
        add_option('marcs_cwf_disable_comments', 0);
    }
    if (get_option('marcs_cwf_disable_xmlrpc') === false) {
        add_option('marcs_cwf_disable_xmlrpc', 0);
    }
    if (get_option('marcs_cwf_disable_core_update_emails') === false) {
        add_option('marcs_cwf_disable_core_update_emails', 0);
    }
    if (get_option('marcs_cwf_disable_plugin_update_emails') === false) {
        add_option('marcs_cwf_disable_plugin_update_emails', 0);
    }
    if (get_option('marcs_cwf_disable_theme_update_emails') === false) {
        add_option('marcs_cwf_disable_theme_update_emails', 0);
    }
}
register_activation_hook(__FILE__, 'marcs_cwf_set_default_options');
