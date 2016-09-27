<?php

/**
	Element Name: SI Image Link
	Description: A circular image that has some text in hover sate
	Author: lucastobrazil
	Author URI: http://lucastobrazil.github.io/
	Version: 0.1.0
 */

class SI_Image_Rollover {
	public function ui() {
		return array(
			'title' => __('SI Image Rollover', 'si-image-rollover') ,
			'autofocus' => array(
				'heading' => 'h4.si-image-rollover',
				'text' => '.si-image-rollover'
			) ,
			'icon_group' => 'si_custom_elements',
			'supports'    => array( 'id', 'class', 'style' ),
		);
	}

	public function update_build_shortcode_atts($atts) {
		if (!isset($atts['style'])) {
			$atts['style'] = '';
		}

		if (isset($atts['background_image'])) {
			$atts['style'].= ' background-image: ' . $atts['background_image'] . ';';
			unset($atts['background_image']);
		}
		return $atts;
	}
}
