<?php

/*
Plugin Name: Custom Cornerstone Elements
Plugin URI:
Description: A Wordpress Plugin that registers new custom elements for Cornerstone editor
Author: lucastobrazil
Author URI: http://lucastobrazil.github.io/
Version: 0.1.0

Notes:
-------
Instead of making the one plugin = one CS element, I wanted to make one single plugin that houses *all* the custom elements I design, so it's more like a library.
For this example, the client's initials are "SI", so the naming is prefixed with "SI".

// Taken from the Cornerstone documentation
https://community.theme.co/kb/cornerstone-custom-elements/ 
*/
 
define( 'EXTENSION_PATH', plugin_dir_path( __FILE__ ) );
define( 'EXTENSION_URL', plugin_dir_url( __FILE__ ) );
add_action( 'wp_enqueue_scripts', 'si_custom_elements_enqueue' );
add_action( 'cornerstone_register_elements', 'si_custom_elements_register_elements' );
add_filter( 'cornerstone_icon_map', 'si_custom_elements_icon_map' );

/* Register Elements */
function si_custom_elements_register_elements() {
	cornerstone_register_element( 'SI_Feature_Box', 'si-feature-box', EXTENSION_PATH . 'includes/si-feature-box' );
	cornerstone_register_element( 'SI_Extended_Accordion', 'si-extended-accordion', EXTENSION_PATH . 'includes/si-extended-accordion' );
	cornerstone_register_element( 'SI_Extended_Accordion_Item', 'si-extended-accordion-item', EXTENSION_PATH . 'includes/si-extended-accordion/si-extended-accordion-item' );
}

/* 
	Todo: Should we be enqueueing individual CSS files for each element?
	The issue here is that the css is only updated if I re-install the plugin completely. Not cool :( 
*/
function si_custom_elements_enqueue() {
	wp_enqueue_style( 'si_custom_elements-styles', EXTENSION_URL . '/assets/styles/si_custom_elements.css', array(), '0.1.0' );
}

/* Mapping of SVG icon so when you're searching in CS Elements, it has a nice graphic. */
function si_custom_elements_icon_map( $icon_map ) {
	$icon_map['si_custom_elements'] = EXTENSION_URL . '/assets/svg/icons.svg';
	return $icon_map;
}
