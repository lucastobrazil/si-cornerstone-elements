<?php

/**
	Element Name: SI Feature Box
	Description: Similar to the Cornerstone Feature Box, but with Icon and Title in the same container
	Author: lucastobrazil
	Author URI: http://lucastobrazil.github.io/
	Version: 0.1.0
 */

class SI_Feature_Box {
	public

	function ui() {
		return array(
			'title' => __('SI Feature Box', 'si-feature-box') ,
			'autofocus' => array(
				'heading' => 'h4.si-feature-box-heading',
				'text' => '.si-feature-box'
			) ,
			'icon_group' => 'si_custom_elements'
		);
	}

	public function update_build_shortcode_atts($atts) {
		/* 
			This allows us to manipulate attributes that will be assigned to the shortcode
			Here we will inject a background-color into the style attribute which is
			already present for inline user styles
		*/

		if (!isset($atts['style'])) {
			$atts['style'] = '';
		}

		if (isset($atts['background_color'])) {
			$atts['style'].= ' background-color: ' . $atts['background_color'] . ';';
			unset($atts['background_color']);
		}

		return $atts;
	}
}
