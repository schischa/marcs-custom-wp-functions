<?php
/**
 * Plugin Name: Marc's Custom WP Functions Plugin
 * Description: A simple plugin to handle custom WordPress functions without a child theme.
 * Author URI: https://chiroiu.com
 * Plugin URI: https://github.com/schischa/marcs-custom-wp-functions
 * Version: 1.1
 * Author: Marc Chiroiu
 * License: GPL2
 */

// Disable the URL field in the comment form
add_filter('comment_form_default_fields', 'cfp_remove_url_field');
function cfp_remove_url_field($fields) {
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

// Disable WP Logos and Links in admin bar
add_action('admin_bar_menu', 'remove_wp_logo', 999);
function remove_wp_logo($wp_admin_bar) {
    $wp_admin_bar->remove_node('wp-logo');
}

// Change howdy text to Hello
add_filter('admin_bar_menu', 'chr_replace_howdy', 25);
function chr_replace_howdy($wp_admin_bar) {
    $my_account = $wp_admin_bar->get_node('my-account');
    $greeting = str_replace('Howdy,', 'Hello ', $my_account->title);
    $wp_admin_bar->add_node(array(
        'id'    => 'my-account',
        'title' => $greeting,
    ));
}

// Add theme-color Meta Tag
add_action('wp_head', 'inject_wp_head');
function inject_wp_head() {
    ?>
    <meta name="theme-color" content="#db5945">
    <?php
}

// Whitelabelling: Change login logo to website's custom logo (or default WP logo if none set)
add_action('login_enqueue_scripts', 'custom_login_logo');
function custom_login_logo() {
    $custom_logo_id = get_theme_mod('custom_logo');
    $logo_url = wp_get_attachment_image_url($custom_logo_id, 'full');

    if (!$logo_url) {
        $logo_url = admin_url('images/wordpress-logo.svg');
    }

    echo '<style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(' . esc_url($logo_url) . ');
            height: 150px;
            width: 100%;
            background-size: contain;
            background-repeat: no-repeat;
        }
    </style>';
}

// Modify login logo link URL to point to site's homepage
add_filter('login_headerurl', 'custom_login_logo_url');
function custom_login_logo_url() {
    return home_url();
}

// Modify the login logo title attribute to the site's name
add_filter('login_headertext', 'custom_login_logo_url_title');
function custom_login_logo_url_title() {
    return get_bloginfo('name');
}
