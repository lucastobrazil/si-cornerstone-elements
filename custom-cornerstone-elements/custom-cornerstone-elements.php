<?php

/*
Plugin Name: Custom Cornerstone Elements
Plugin URI:
Description: A Wordpress Plugin that registers new custom elements for Cornerstone editor
Elements included: Extended Accordion, Feature Box
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
define( 'ELEMENTS_URL', EXTENSION_URL . '/includes/' );

add_action( 'wp_enqueue_scripts', 'si_custom_elements_enqueue' );
add_action( 'cornerstone_register_elements', 'si_custom_elements_register_elements' );
add_filter( 'cornerstone_icon_map', 'si_custom_elements_icon_map' );

/* 
	@params is the name of the element
	 namespace needs to match the folder name inside /includes/
*/
$elements = array(
	'SI_Feature_Box'	=> array(
		'namespace'		=> 'si-feature-box',
		'directory'		=> 'si-feature-box',
	),
	'SI_Extended_Accordion'	=> array(
		'namespace'		=> 'si-extended-accordion',
		'directory'		=> 'si-extended-accordion',
	),
	'SI_Extended_Accordion_Item'	=> array(
		'namespace'		=> 'si-extended-accordion-item',
		'directory'		=> 'si-extended-accordion/si-extended-accordion-item',
	)
);

/* Register Elements */
function si_custom_elements_register_elements() {
	global $elements;
	foreach ($elements as $key => $value) {
		$title = $key;
		$namespace = $value['namespace'];
		$directory = $value['directory'];

		cornerstone_register_element( $title, $namespace, EXTENSION_PATH . 'includes/' . $directory );
	}
}

function si_custom_elements_enqueue() {
	global $elements;
	foreach ($elements as $key => $value) {
		$title = $key;
		$namespace = $value['namespace'];
		$directory = $value['directory'];

		$cssFilePath = EXTENSION_PATH . 'includes/' . $directory . '/styles/element.css';
		$cssFileUrl = EXTENSION_URL . 'includes/' . $directory . '/styles/element.css';
		$jsFilePath = EXTENSION_PATH . 'includes/' . $directory . '/scripts/element.js';
		$jsFileUrl = EXTENSION_URL . 'includes/' . $directory . '/scripts/element.js';
		
		if(file_exists($cssFilePath)) {
			wp_enqueue_style( $namespace . '-style', $cssFileUrl, array(), '0.1.0' );	
		}
		if(file_exists($jsFilePath)) {
			wp_enqueue_script( $namespace . '-script', $jsFileUrl, array(), '0.1.0' );
		}
	}
}

/* Mapping of SVG icon so when you're searching in CS Elements, it has a nice graphic. */
function si_custom_elements_icon_map( $icon_map ) {
	$icon_map['si_custom_elements'] = EXTENSION_URL . '/assets/svg/icons.svg';
	return $icon_map;
}
