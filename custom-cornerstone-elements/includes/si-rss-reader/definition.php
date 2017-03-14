<?php

/**
	Element Name: SI RSS Feed
	Description: An RSS Parser
	Author: Mihai Radulescu
	Author URI: http://mihai-radulescu.com
	Version: 0.1.0
 */

class SI_RSS_Reader {
	public function ui() {
		return array(
			'title' => __('SI RSS Feed', 'si-rss-feed') ,
			'autofocus' => array(
				'heading' => 'h4.si-rss-feed',
				'text' => '.si-rss-feed'
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
