# Marc's Custom WP Functions Plugin

## Description

**Marc's Custom WP Functions Plugin** helps you centralize common WordPress customizations and provides a settings page for configuration. Your modifications persist through theme updates, allowing for easy, code-free adjustments.

### Key Features
- **Comment Settings**: Remove the URL field only or disable comments entirely (code sourced from [WPBeginner](https://www.wpbeginner.com/)).
- **Disable Emojis**: For GDPR compliance and improved performance.
- **Remove WordPress Logo in Admin Bar**: Make the admin interface cleaner.
- **Change "Howdy" to "Hello"**: More user-friendly greeting in the admin bar.
- **Theme-Color Meta Tag**: Easily set a custom theme color for modern browsers.
- **White-Label the Login Page**: Use your site's logo on the login screen.
- **Disable XML-RPC**: Improve security by disabling XML-RPC if not needed.
- **Dedicated Settings Page**: Manage all these settings under **Settings > Marc's Custom WP Functions**.

## Installation

1. Download or clone the repository.
2. Upload `marcs-custom-wp-functions` to `/wp-content/plugins/`.
3. Activate **Marc's Custom WP Functions Plugin** in **Plugins > Installed Plugins**.

## Usage

- After activation, changes are applied immediately.
- Go to **Settings > Marc's Custom WP Functions**:
  - Adjust comment settings.
  - Set the theme-color.
  - Disable XML-RPC if desired.

## Customization

- Configure options via the settings page.
- Add new features by extending the `inc` directory.

## Changelog

**Version 1.5:**
- Added an option to disable XML-RPC for improved security.

**Version 1.4.1:**
- Enhanced "disable comments" option to fully remove the comment icon/count from the admin bar.

**Version 1.4:**
- Added setting to choose between removing the comment URL field only or disabling comments entirely (code from WPBeginner).

**Version 1.3:**
- Refactored code into separate files for maintainability.

**Version 1.2:**
- Introduced a settings page for theme-color configuration.

**Version 1.1:**
- White-labelling the login page with a custom logo.

**Version 1.0:**
- Initial release.

## License

GPL2

## Author

Marc Chiroiu  
[Website](https://chiroiu.com)  
[GitHub Repository](https://github.com/schischa/marcs-custom-wp-functions)
