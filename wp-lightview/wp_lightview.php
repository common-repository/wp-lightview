<?php
/*
Plugin Name: WP-Lightview
Plugin URI: http://www.nicolasleroy.fr/wp-lightview/
Feed URI: 
Description: Integrate the Lightview image overlay mechanism in your Wordpress posts and pages
Version: 2.1
Author: Nicolas Leroy
Author URI: http://www.nicolasleroy.fr
License:
*/

class wp_lightview {
	
	/* If you've already have some other plugin that includes Prototype and Scriptaculous, you may set this variable to "false".*/	
	var $include_Prototype_Scriptaculous = true;

	function wp_lightview() {
	}
	
	function generateHeader() {
		$path = get_option('siteurl') . '/wp-content/plugins/wp-lightview/';
		echo '<link rel="stylesheet" href="' . $path . 'css/lightview.css" type="text/css"/>';
		
		if ($this->include_Prototype_Scriptaculous) {
			echo '<script type="text/javascript" src="' . $path . 'js/protoculous-effects-shrinkvars.js"></script>';
		}
		
		echo '<script type="text/javascript" src="' . $path . 'js/lightview.js"></script>';		
	}
}

function wp_lightview_header() {
	$W = new wp_lightview();
	$W->generateHeader();
}

add_action('wp_head', 'wp_lightview_header');

