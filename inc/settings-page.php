<?php
// Add a settings page under "Settings" menu
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
    // Existing settings are here...

    // Register the XML-RPC option
    register_setting('marcs_cwf_settings_group', 'marcs_cwf_disable_xmlrpc', array(
        'type'              => 'boolean',
        'sanitize_callback' => 'absint',
        'default'           => 0,
    ));

    // Add a new section for "Advanced Settings"
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
