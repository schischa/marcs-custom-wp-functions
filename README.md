# Marc's Custom WP Functions Plugin

## Description

**Marc's Custom WP Functions Plugin** is a simple WordPress plugin created to handle custom functions without the need for a child theme. It allows you to add specific customizations to your WordPress site while keeping them independent of the theme, ensuring your modifications are preserved during theme updates.

This plugin includes two main features:

1. **Disable the URL Field in the Comment Form**: Removes the "Website" URL field from the comment form to help reduce spam and improve user experience.
2. **Disable Emojis for GDPR Compliance**: Disables WordPress's built-in emoji functionality by removing related scripts and styles from the site and the WordPress admin area. This can help with GDPR compliance or reduce unnecessary JavaScript and CSS loading.

## Features

- **Disable URL Field in Comments**: Automatically removes the URL input field from the comment form to minimize external links and reduce the chance of spam.
  
- **Disable Emojis**: Disables the emoji detection script, related styles, and TinyMCE plugin, improving page load speed and minimizing unnecessary content for GDPR compliance.

## Installation

1. Download the plugin file.
2. Create a folder called `marcs-custom-wp-functions` in the `wp-content/plugins/` directory of your WordPress installation.
3. Upload the PHP plugin file (`marcs-custom-wp-functions.php`) to this folder.
4. Go to the WordPress admin dashboard.
5. Navigate to **Plugins > Installed Plugins**.
6. Activate **Marc's Custom WP Functions Plugin**.

## Usage

Once the plugin is activated, it will automatically:

- Remove the URL field from the comment form.
- Disable emoji-related scripts, styles, and the TinyMCE emoji plugin.

## Customization

You can add additional functions or modify existing ones within this plugin to further customize your WordPress site. Keeping these functions in a standalone plugin ensures they are safe from theme updates or changes.

## Changelog

**Version 1.0:**
- Initial release with features to disable the URL field in comments and disable emojis for GDPR compliance.

## License

This plugin is licensed under the GPL2 license.

## Author

Marc Chiroiu  
[Website](https://chiroiu.com)  
[GitHub Repository](https://github.com/schischa/marcs-custom-wp-functions)
