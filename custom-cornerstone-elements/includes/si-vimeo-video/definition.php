<?php

/**
	Element Name: SI Vimeo Video
	Description: A video element
	Author: Mihai Radulescu
	Author URI: http://mihai-radulescu.com
	Version: 0.1.0
 */

class SI_Vimeo_Video {
	public function ui() {
		return array(
			'title' => __('SI Vimeo Video', 'si-vimeo-video') ,
			'autofocus' => array(
				'heading' => 'h4.si-vimeo-video',
				'text' => '.si-vimeo-video'
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
