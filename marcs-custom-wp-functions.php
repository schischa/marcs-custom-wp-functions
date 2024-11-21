<?php
/**
 * Plugin Name: Marc's custom WP functions plugin
 * Description: A simple plugin to handle custom WordPress functions without a child theme.
 * Author URI: https://chiroiu.com
 * Plugin URI: https://github.com/schischa/marcs-custom-wp-functions
 * Version: 1.0
 * Author: Marc Chiroiu
 * License: GPL2
 */

// Disable the URL field in the comment form
add_filter('comment_form_default_fields', 'cfp_remove_url_field');
function cfp_remove_url_field($fields)
{
    if (isset($fields['url'])) {
        unset($fields['url']);
    }
    return $fields;
}

// Disable emojis in WordPress for GDPR compliance
add_action('init', 'chr_disable_emojis');
function chr_disable_emojis() {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
    add_filter('tiny_mce_plugins', 'chr_disable_emojis_tinymce');
}

function chr_disable_emojis_tinymce($plugins) {
    if (is_array($plugins)) {
        return array_diff($plugins, array('wpemoji'));
    }
    return array();
}