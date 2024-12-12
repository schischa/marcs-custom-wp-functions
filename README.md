# Marc's Custom WP Functions Plugin

## Description

**Marc's Custom WP Functions Plugin** is a simple WordPress plugin designed to centralize common customizations without relying on a child theme. It ensures your modifications remain intact when you update or switch themes.

Key Features:
- Disable URL field in the comment form.
- Disable emojis for GDPR compliance.
- Remove the WordPress logo from the admin bar.
- Change "Howdy" to "Hello" in the admin bar.
- Add a theme-color meta tag for modern browsers.
- White-label the login page with your custom logo.
- **NEW:** Dedicated settings page to edit the theme color used by `<meta name="theme-color">`.

## Features

1. **Disable the URL Field in the Comment Form**
2. **Disable Emojis** for GDPR compliance.
3. **Remove the WordPress Logo** from the admin bar.
4. **Change "Howdy" to "Hello"** in the admin bar.
5. **Add Theme-Color Meta Tag**: Easily set a custom color for modern browsers.
6. **White-Label the Login Page**: Use your site's custom logo in the login screen.
7. **Settings Page**: A settings page under **Settings > Marc's Custom WP Functions** allows you to customize the theme-color meta tag without editing code.

## Installation

1. Download the plugin file.
2. Create a folder named `marcs-custom-wp-functions` in the `wp-content/plugins/` directory of your WordPress installation.
3. Upload the `marcs-custom-wp-functions.php` file into this folder.
4. In the WordPress admin dashboard, go to **Plugins > Installed Plugins** and activate **Marc's Custom WP Functions Plugin**.

## Usage

Once activated, the plugin:
- Automatically applies the customizations listed above.
- Adds a new menu item under **Settings > Marc's Custom WP Functions**, where you can change the theme color used by the `<meta>` tag.

## Customization

- To change the theme color, navigate to **Settings > Marc's Custom WP Functions** and enter a new hex color code.
- Additional custom functions can be added by editing the plugin file.

## Changelog

**Version 1.2:**
- Introduced a settings page under "Settings" to customize the theme-color meta tag.

**Version 1.1:**
- White-labelling the login page with a custom logo.

**Version 1.0:**
- Initial release with features to:
  - Disable the URL field in comments.
  - Disable emojis.
  - Remove the WordPress logo from the admin bar.
  - Change "Howdy" to "Hello" in the admin bar.
  - Add a theme-color meta tag.

## License

This plugin is licensed under the GPL2 license.

## Author

Marc Chiroiu  
[Website](https://chiroiu.com)  
[GitHub Repository](https://github.com/schischa/marcs-custom-wp-functions)
