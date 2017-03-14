<?php

/**
	Element Name: SI Customer Box
	Description: A customer box
	Author: Mihai Radulescu
	Author URI: http://mihai-radulescu.com
	Version: 0.1.0
 */

class SI_Customer_Box {
	public function ui() {
		return array(
			'title' => __('SI Customer Box', 'si-customer-box') ,
			'autofocus' => array(
				'heading' => 'h4.si-customer-box',
				'text' => '.si-customer-box'
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
