<?php
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
    // Existing settings...
    register_setting('marcs_cwf_settings_group', 'marcs_cwf_theme_color', array(
        'type'              => 'string',
        'sanitize_callback' => 'sanitize_hex_color',
        'default'           => '#db5945',
    ));

    register_setting('marcs_cwf_settings_group', 'marcs_cwf_disable_comments', array(
        'type'              => 'boolean',
        'sanitize_callback' => 'absint',
        'default'           => 0,
    ));

    register_setting('marcs_cwf_settings_group', 'marcs_cwf_disable_xmlrpc', array(
        'type'              => 'boolean',
        'sanitize_callback' => 'absint',
        'default'           => 0,
    ));

    // New settings for update email disabling
    register_setting('marcs_cwf_settings_group', 'marcs_cwf_disable_core_update_emails', array(
        'type'              => 'boolean',
        'sanitize_callback' => 'absint',
        'default'           => 0,
    ));
    register_setting('marcs_cwf_settings_group', 'marcs_cwf_disable_plugin_update_emails', array(
        'type'              => 'boolean',
        'sanitize_callback' => 'absint',
        'default'           => 0,
    ));
    register_setting('marcs_cwf_settings_group', 'marcs_cwf_disable_theme_update_emails', array(
        'type'              => 'boolean',
        'sanitize_callback' => 'absint',
        'default'           => 0,
    ));

    // Existing sections...
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

    add_settings_section(
        'marcs_cwf_comment_section',
        'Comment Settings',
        'marcs_cwf_comment_section_cb',
        'marcs_cwf_settings_group'
    );
    add_settings_field(
        'marcs_cwf_disable_comments_field',
        'Disable Comments',
        'marcs_cwf_disable_comments_field_cb',
        'marcs_cwf_settings_group',
        'marcs_cwf_comment_section'
    );

    add_settings_section(
        'marcs_cwf_advanced_section',
        'Advanced Settings',
        'marcs_cwf_advanced_section_cb',
        'marcs_cwf_settings_group'
    );
    add_settings_field(
        'marcs_cwf_disable_xmlrpc_field',
        'Disable XML-RPC',
        'marcs_cwf_disable_xmlrpc_field_cb',
        'marcs_cwf_settings_group',
        'marcs_cwf_advanced_section'
    );

    // New Updates Notifications Section
    add_settings_section(
        'marcs_cwf_updates_section',
        'Update Notifications',
        'marcs_cwf_updates_section_cb',
        'marcs_cwf_settings_group'
    );
    add_settings_field(
        'marcs_cwf_disable_core_update_emails_field',
        'Disable Core Update Emails',
        'marcs_cwf_disable_core_update_emails_field_cb',
        'marcs_cwf_settings_group',
        'marcs_cwf_updates_section'
    );
    add_settings_field(
        'marcs_cwf_disable_plugin_update_emails_field',
        'Disable Plugin Update Emails',
        'marcs_cwf_disable_plugin_update_emails_field_cb',
        'marcs_cwf_settings_group',
        'marcs_cwf_updates_section'
    );
    add_settings_field(
        'marcs_cwf_disable_theme_update_emails_field',
        'Disable Theme Update Emails',
        'marcs_cwf_disable_theme_update_emails_field_cb',
        'marcs_cwf_settings_group',
        'marcs_cwf_updates_section'
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

function marcs_cwf_comment_section_cb() {
    echo '<p>Configure how comments behave on your website.</p>';
}

function marcs_cwf_disable_comments_field_cb() {
    $disable_comments = get_option('marcs_cwf_disable_comments', 0);
    ?>
    <fieldset>
        <label>
            <input type="radio" name="marcs_cwf_disable_comments" value="0" <?php checked($disable_comments, 0); ?>>
            Remove only the URL field from the comment form.
        </label><br>
        <label>
            <input type="radio" name="marcs_cwf_disable_comments" value="1" <?php checked($disable_comments, 1); ?>>
            Disable all comments entirely (Code sourced from WPBeginner).
        </label>
    </fieldset>
    <?php
}

function marcs_cwf_advanced_section_cb() {
    echo '<p>Configure advanced settings to improve security or adjust site functionality.</p>';
}

function marcs_cwf_disable_xmlrpc_field_cb() {
    $disable_xmlrpc = get_option('marcs_cwf_disable_xmlrpc', 0);
    ?>
    <fieldset>
        <label>
            <input type="checkbox" name="marcs_cwf_disable_xmlrpc" value="1" <?php checked($disable_xmlrpc, 1); ?>>
            Disable XML-RPC (recommended for improved security if not needed)
        </label>
    </fieldset>
    <?php
}

function marcs_cwf_updates_section_cb() {
    echo '<p>Control update notification emails. If you don\'t want to receive certain update emails, disable them here.</p>';
}

function marcs_cwf_disable_core_update_emails_field_cb() {
    $disable_core = get_option('marcs_cwf_disable_core_update_emails', 0);
    ?>
    <fieldset>
        <label>
            <input type="checkbox" name="marcs_cwf_disable_core_update_emails" value="1" <?php checked($disable_core, 1); ?>>
            Disable Core Update Success Emails
        </label>
    </fieldset>
    <?php
}

function marcs_cwf_disable_plugin_update_emails_field_cb() {
    $disable_plugin = get_option('marcs_cwf_disable_plugin_update_emails', 0);
    ?>
    <fieldset>
        <label>
            <input type="checkbox" name="marcs_cwf_disable_plugin_update_emails" value="1" <?php checked($disable_plugin, 1); ?>>
            Disable Plugin Update Emails
        </label>
    </fieldset>
    <?php
}

function marcs_cwf_disable_theme_update_emails_field_cb() {
    $disable_theme = get_option('marcs_cwf_disable_theme_update_emails', 0);
    ?>
    <fieldset>
        <label>
            <input type="checkbox" name="marcs_cwf_disable_theme_update_emails" value="1" <?php checked($disable_theme, 1); ?>>
            Disable Theme Update Emails
        </label>
    </fieldset>
    <?php
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
