<?php
// Disable WP Logos and Links in admin bar
add_action('admin_bar_menu', 'remove_wp_logo', 999);
function remove_wp_logo($wp_admin_bar) {
    $wp_admin_bar->remove_node('wp-logo');
}

// Replace "Howdy" with "Hello" only for English admin users
function chr_replace_howdy($wp_admin_bar) {
    if (strpos(get_user_locale(), 'en') !== 0) {
        return;
    }

    $my_account = $wp_admin_bar->get_node('my-account');

    if ($my_account && isset($my_account->title)) {
        $greeting = str_replace('Howdy,', 'Hello ', $my_account->title);
        $wp_admin_bar->add_node(array(
            'id'    => 'my-account',
            'title' => $greeting,
        ));
    }
}
add_filter('admin_bar_menu', 'chr_replace_howdy', 25);