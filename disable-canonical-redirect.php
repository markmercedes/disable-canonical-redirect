<?php
/*
Plugin Name: Disable Canonical Redirect
Description: This plugin disables Wordpress' URL autocorrection guessing feature. If you for example enter the URL `http://www.ninjablog.com/stuff` you won't be redirected to `http://www.ninjablog.com/stuff-12345` anymore. Also if you are using any kind of reverse proxy, your site won't mess up by redirecting you to the guessed domain
Author: Marcos Mercedes
Version: 1.0
Author URI: https://github.com/markmercedes/disable-canonical-redirect
License: Public Domain
*/

// This code is based on this post https://www.bloggersignal.com/stop-wordpress-from-guessing-urls/

add_filter('redirect_canonical', function($redirect_url) { return false; });