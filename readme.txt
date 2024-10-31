=== Restore jQuery ===
Contributors: silverks
Donate link: http://www.khairul-syahir.com/
Tags: jquery,restore,revert,default,javascript,library
Requires at least: 3.0
Tested up to: 3.3.1
Stable tag: trunk

Restore the loaded jQuery library to the version bundled with WordPress.

== Description ==

Some plugins and themes replace the default jQuery library that comes bundled with WordPress with another version, 
typically from the Google AJAX CDN. This is generally bad practice, since many other plugins and themes rely on and
expect that the WordPress-bundled jQuery version is being loaded.

Also, typically the alternative jQuery library being loaded is not executed in the jQuery noConflict mode, which tend
to cause conflicts with other JavaScript frameworks, like Prototype and MooTools. 

This plugin simply restores the version of jQuery being loaded to the one that comes bundled with WordPress. It only
does this if jQuery is already in the WordPress scripts queue, and won't do anything otherwise.

== Installation ==

1. Upload the entire `restore-jquery` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the **WP Admin > Plugins** menu in WordPress

== Frequently Asked Questions ==

= Plugin so-and-so no longer works! =

This is most likely due to that particular plugin being coded to utilise a specific version of jQuery, or a version of
jQuery that is not executed in the noConflict mode.

You have three choices:

* ask the plugin's developer to update the plugin's codes to use WordPress-bundled jQuery version, or
* switch to another plugin that provides similar function, but uses the WordPress-bundled jQuery version instead, or
* stop using the Restore jQuery plugin.

= Where's the options page? Screenshots? =

This plugin contains very simple codes that works behind the scene. There's no need for user interaction, so there's no
options page for the plugin, and hence no screenshots.

== Changelog ==

= 1.0 =
* Initial release