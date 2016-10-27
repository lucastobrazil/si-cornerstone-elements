<?php

/*
Plugin Name: Custom Cornerstone Elements
Plugin URI:
Description: A Wordpress Plugin that registers new custom elements for Cornerstone editor
Elements included: Extended Accordion, Feature Box
Author: lucastobrazil
Author URI: http://lucastobrazil.github.io/
Version: 0.1.1

Notes:
-------
Instead of making the one plugin = one CS element, I wanted to make one single plugin that houses *all* the custom elements I design, so it's more like a library.
For this example, the client's initials are "SI", so the naming is prefixed with "SI".

// Taken from the Cornerstone documentation
https://community.theme.co/kb/cornerstone-custom-elements/ 
*/
function loadCustomElements() {
	define( 'EXTENSION_PATH', plugin_dir_path( __FILE__ ) );
	define( 'EXTENSION_URL', plugin_dir_url( __FILE__ ) );
	define( 'ELEMENTS_URL', EXTENSION_URL . '/includes/' );

	$elements = array(
		'SI_Feature_Box'	=> array(
			'name'		=> 'si-feature-box',
			'directory'		=> 'si-feature-box',
		),
		'SI_Extended_Accordion'	=> array(
			'name'		=> 'si-extended-accordion',
			'directory'		=> 'si-extended-accordion',
		),
		'SI_Extended_Accordion_Item'	=> array(
			'name'		=> 'si-extended-accordion-item',
			'directory'		=> 'si-extended-accordion/si-extended-accordion-item',
		),
		'SI_Image_Rollover'	=> array(
			'name'		=> 'si-image-rollover',
			'directory'		=> 'si-image-rollover',
		),
		'SI_Customer_Rollover'	=> array(
			'name'		=> 'si-customer-rollover',
			'directory'		=> 'si-customer-rollover',
		)
	);

	/* Register Elements */
	add_action( 'cornerstone_register_elements', function() use ( $elements ) {
		foreach ($elements as $key => $value) {
			$className = $key;
			$name = $value['name'];
			$directory = $value['directory'];

			/* see cornerstone/includes/utility/api.php */
			cornerstone_register_element( $className, $name, EXTENSION_PATH . 'includes/' . $directory );
		}
	});
	/* Enqueue JS and CSS for Elements */
	add_action( 'wp_enqueue_scripts', function() use ( $elements ) {
		foreach ($elements as $key => $value) {
			$title = $key;
			$name = $value['name'];
			$directory = $value['directory'];

			$cssFilePath = EXTENSION_PATH . 'includes/' . $directory . '/styles/element.css';
			$cssFileUrl = EXTENSION_URL . 'includes/' . $directory . '/styles/element.css';
			$jsFilePath = EXTENSION_PATH . 'includes/' . $directory . '/scripts/element.js';
			$jsFileUrl = EXTENSION_URL . 'includes/' . $directory . '/scripts/element.js';
			
			if(file_exists($cssFilePath)) {
				wp_enqueue_style( $name . '-style', $cssFileUrl, array(), '0.1.0' );	
			}
			if(file_exists($jsFilePath)) {
				wp_enqueue_script( $name . '-script', $jsFileUrl, array(), '0.1.0' );
			}
		}
	});

	add_filter( 'cornerstone_icon_map', 'si_custom_elements_icon_map' );

	/* Mapping of SVG icon so when you're searching in CS Elements, it has a nice graphic. */
	function si_custom_elements_icon_map( $icon_map ) {
		$icon_map['si_custom_elements'] = EXTENSION_URL . '/assets/svg/icons.svg';
		return $icon_map;
	}
}
loadCustomElements();
