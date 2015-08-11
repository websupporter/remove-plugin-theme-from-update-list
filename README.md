# remove-plugin-theme-from-update-list
It can happen a WordPress plugin or theme, you have created for a single client collides with a plugin or theme in the WordPress repository. In this case, if the client "updates" the plugin/theme using the WP interface, the wrong files will be downloaded from the repository.

This script demonstrates, how you can prevent the "update"-action to show up for specified themes or plugins. You just have to alter the $slug with the ID of your plugin or theme.

I hope this helps.
