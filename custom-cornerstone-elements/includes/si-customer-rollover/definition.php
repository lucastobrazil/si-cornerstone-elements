<?php

/**
	Element Name: SI Customer Rollover
	Description: A logo with extra metadata on hover
	Author: lucastobrazil
	Author URI: http://lucastobrazil.github.io/
	Version: 0.1.0
 */

class SI_Customer_Rollover {
	public function ui() {
		return array(
			'title' => __('SI Customer Rollover', 'si-customer-rollover') ,
			'autofocus' => array(
				'heading' => 'h4.si-customer-rollover',
				'text' => '.si-customer-rollover'
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
