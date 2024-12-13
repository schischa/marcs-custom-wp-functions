<?php
// Create a settings page under "Settings" menu
add_action('admin_menu', 'marcs_cwf_create_settings_page');
function marcs_cwf_create_settings_page() {
    add_options_page(
        "Marc's Custom WP Functions",
        "Marc's Custom WP Functions",
        'manage_options',
        'marcs-custom-wp-functions',
        'marcs_cwf_settings_page_html'
    );
}

add_action('admin_init', 'marcs_cwf_register_settings');
function marcs_cwf_register_settings() {
    register_setting('marcs_cwf_settings_group', 'marcs_cwf_theme_color', array(
        'type'              => 'string',
        'sanitize_callback' => 'sanitize_hex_color',
        'default'           => '#db5945',
    ));

    add_settings_section(
        'marcs_cwf_theme_section',
        'Theme Settings',
        'marcs_cwf_theme_section_cb',
        'marcs_cwf_settings_group'
    );

    add_settings_field(
        'marcs_cwf_theme_color_field',
        'Theme Color',
        'marcs_cwf_theme_color_field_cb',
        'marcs_cwf_settings_group',
        'marcs_cwf_theme_section'
    );
}

function marcs_cwf_theme_section_cb() {
    echo '<p>Set the theme color used by modern browsers for UI elements.</p>';
}

function marcs_cwf_theme_color_field_cb() {
    $theme_color = get_option('marcs_cwf_theme_color', '#db5945');
    echo '<input type="text" name="marcs_cwf_theme_color" value="' . esc_attr($theme_color) . '" class="regular-text" />';
    echo '<p class="description">Enter a valid hex color code (e.g. #db5945).</p>';
}

function marcs_cwf_settings_page_html() {
    if (!current_user_can('manage_options')) {
        return;
    }
    ?>
    <div class="wrap">
        <h1>Marc's Custom WP Functions Settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('marcs_cwf_settings_group');
            do_settings_sections('marcs_cwf_settings_group');
            submit_button();
            ?>
        </form>
    </div>
    <?php
}
