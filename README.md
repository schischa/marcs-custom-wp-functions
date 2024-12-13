# Marc's Custom WP Functions Plugin

## Description

**Marc's Custom WP Functions Plugin** helps you centralize common WordPress customizations and provides a settings page to configure them without editing code. Your modifications remain intact even when you update or switch themes.

### Key Features
- **Disable URL Field in the Comment Form OR Disable Comments Entirely:**  
  Choose between simply removing the website field from the comment form or completely disabling comments site-wide. The "disable comments" code is sourced from [WPBeginner](https://www.wpbeginner.com/).
- **Disable Emojis:** Remove unnecessary emoji scripts for GDPR compliance and improved performance.
- **Remove WordPress Logo in Admin Bar:** Create a cleaner, more professional admin interface.
- **Change "Howdy" to "Hello" in the Admin Bar:** For a more user-friendly greeting.
- **Add Theme-Color Meta Tag:** Easily define a custom theme color for modern browsers.
- **White-Label the Login Page:** Replace the WordPress login logo with your site's custom logo.
- **Dedicated Settings Page:** Configure options (such as theme color and comment settings) under **Settings > Marc's Custom WP Functions**.

## Installation

1. Download the plugin or clone it from the repository.
2. Upload the `marcs-custom-wp-functions` folder to the `/wp-content/plugins/` directory.
3. Activate **Marc's Custom WP Functions Plugin** in **Plugins > Installed Plugins** within the WordPress admin.

## Usage

Once activated:
- All default customizations apply immediately.
- Visit **Settings > Marc's Custom WP Functions** to configure:
  - **Comment Settings**: Choose to remove only the URL field from comments or disable all comments entirely.
  - **Theme Color**: Set the theme-color meta tag for modern browsers.

## Customization

- Adjust comment behavior (remove URL field or disable comments completely) via the settings page.
- Change the theme-color directly in the plugin settings.
- Add additional features by creating new files in the `inc` directory and including them in the main plugin file.

## Changelog

**Version 1.4:**
- Added setting to choose between removing the comment URL field only or disabling all comments entirely.  
  *Note: Comment disabling code sourced from [WPBeginner](https://www.wpbeginner.com/).*

**Version 1.3:**
- Code refactoring and splitting functionalities into separate files for better maintainability.

**Version 1.2:**
- Introduced a settings page to configure the theme-color meta tag.

**Version 1.1:**
- White-labelling the login page with a custom logo.

**Version 1.0:**
- Initial release with:
  - Disabling URL field in comments.
  - Disabling emojis.
  - Removing WP logo from the admin bar.
  - Changing "Howdy" to "Hello" in the admin bar.
  - Adding a theme-color meta tag.

## License

This plugin is licensed under the GPL2 license.

## Author

Marc Chiroiu  
[Website](https://chiroiu.com)  
[GitHub Repository](https://github.com/schischa/marcs-custom-wp-functions)
