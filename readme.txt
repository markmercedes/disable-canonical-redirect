=== Disable URL Autocorrect Guessing and Forced Canonical Redirection ===
Contributors: Marcos Mercedes
Tags: redirect, autocorrect, url, canonical, wordpress
Requires at least: 2.3
Tested up to: 4.5.2
Stable tag: 1.0
License: Public Domain
Author Url: https://github.com/markmercedes

Disable URL Autocorrect Guessing and Forced Canonical Redirection.

== Description ==

This plugin disables Wordpress' URL autocorrection guessing feature.
If you for example enter the URL `http://www.ninjablog.com/stuff` you won't be redirected
to `http://www.ninjablog.com/stuff-12345` anymore.

Also if you are using any kind of reverse proxy, your site won't mess up by redirecting you to the guessed domain

This code is based on this post https://www.bloggersignal.com/stop-wordpress-from-guessing-urls/

== Installation ==

1. Upload `disable-canonical-redirect.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Changelog ==

= 1.0 =
* First and last version.
