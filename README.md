# Marc's Custom WP Functions Plugin

## Description

**Marc's Custom WP Functions Plugin** is a simple WordPress plugin created to handle custom functions without the need for a child theme. It allows you to add specific customizations to your WordPress site while keeping them independent of the theme, ensuring your modifications are preserved during theme updates.

This plugin includes the following features:

1. **Disable the URL Field in the Comment Form**: Removes the "Website" URL field from the comment form to help reduce spam and improve user experience.
2. **Disable Emojis for GDPR Compliance**: Disables WordPress's built-in emoji functionality by removing related scripts and styles from the site and the WordPress admin area. This can help with GDPR compliance or reduce unnecessary JavaScript and CSS loading.
3. **Remove WordPress Logo from Admin Bar**: Removes the default WordPress logo and links from the admin bar for a cleaner interface.
4. **Change "Howdy" Text to "Hello" in Admin Bar**: Replaces the "Howdy," greeting in the WordPress admin bar with "Hello" for a more neutral tone.
5. **Add Theme-Color Meta Tag**: Adds a `<meta>` tag to set a theme color for modern browsers, providing a more cohesive visual experience. *(Default: `#db5945`, can be changed to fit your site's color scheme.)*
6. **White-label the Login Page**: Replaces the WordPress login screen logo with your site's custom logo (if set in your theme options). If no custom logo is set, the default WordPress logo will be used. Also modifies the login logo link and title attribute to point to your site's homepage and display your site's name.

## Features

- **Disable URL Field in Comments**
- **Disable Emojis**
- **Remove WordPress Logo in Admin Bar**
- **Change "Howdy" to "Hello" in Admin Bar**
- **Add Theme-Color Meta Tag**
- **White-label the Login Page**

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
- Disable emojis and related scripts/styles.
- Remove the WordPress logo and links from the admin bar.
- Replace the "Howdy," greeting in the admin bar with "Hello."
- Add a theme-color meta tag for supported browsers.
- Change the login page logo to your custom logo (if set), link the logo to your site's homepage, and update the title attribute to your site's name.

## Customization

You can add additional functions or modify existing ones within this plugin to further customize your WordPress site. Keeping these functions in a standalone plugin ensures they are safe from theme updates or changes.

## Changelog

**Version 1.1:**
- White-labelling the login page to use the site's custom logo and updated login URL/title attributes.

**Version 1.0:**
- Initial release with features to disable the URL field in comments, disable emojis for GDPR compliance, remove the WordPress logo from the admin bar, change "Howdy" to "Hello," and add a theme-color meta tag.

## License

This plugin is licensed under the GPL2 license.

## Author

Marc Chiroiu  
[Website](https://chiroiu.com)  
[GitHub Repository](https://github.com/schischa/marcs-custom-wp-functions)
