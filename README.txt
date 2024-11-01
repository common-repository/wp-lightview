2.2 release

WP-Lightview is a Wordpress plugin that lets you integrate in an easy way the Lightview image overlay mechanism in your Wordpress posts and pages. What WP-Lightview plugin does is to include all the mandatory CSS and Javascript files required by Lightview in the header of your blog.

The plugin has only been tested on Wordpress 2.3, but should work on previous 2.x releases.

HOW TO INSTALL IT

   1. Extract the ZIP archive into your "wp-content/plugins/" directory. A new folder named "wp-lightview" will be created.
   2. Log into your administration panel, click on "Plugins" tab and activate the "WP-Lightview" plugin.

CONFIGURATION

Lightview requires Prototype and Scriptaculous libraries to work properly. Those libraries are bundled with WP-Lightview. So you can start using WP-Lightview without any extra configuration. But in case you've already had some plugins that add Prototype and Scriptaculous, you may end up with conflicts. By editing the "wp-content/plugins/wp-lightview/wp_lightview.php" file, you can disable the inclusion of Prototype and Scriptaculous. Just set the "$include_Prototype_Scriptaculous" variable to "false".

HOW TO USE IT?

When editing a blog post or a blog page through the administration panel, simply add rel="lightview" attribute to any link tag you want to configure. For instance: "<a href="image1.jpg" class="lightview" title="my caption"><img src="image1_thumb.jpg" width="50" height="100"/></a>"