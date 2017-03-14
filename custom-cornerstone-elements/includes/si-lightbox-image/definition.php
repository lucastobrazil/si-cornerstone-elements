<?php

/**
	Element Name: SI Lightbox Image
	Description: Extended Image Element with Lightbox
	Author: Mihai Radulescu
	Author URI: http://mihai-radulescu.com
	Version: 0.1.0
 */

class SI_Lightbox_Image {
	public function ui() {
		return array(
			'title' => __('SI Lightbox Image', 'si-lightbox-image') ,
			'autofocus' => array(
				'heading' => 'h4.si-lightbox-image',
				'text' => '.si-lightbox-image'
			) ,
			'icon_group' => 'si_custom_elements',
			'supports'    => array( 'id', 'class', 'style' ),
		);
	}

	public function update_build_shortcode_atts($atts) {
		if (!isset($atts['style'])) {
			$atts['style'] = '';
		}
		return $atts;
	}
}
