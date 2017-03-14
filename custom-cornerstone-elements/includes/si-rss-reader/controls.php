<?php

/**
 * Element Controls
	rss_url, rss_limit
 */

return array(
	
	'rss_url' => array(
		'type'    => 'text',
        'ui' => array(
			'title'   => __( 'RSS feed URL', 'si-custom-elements' ),
			'tooltip'   => __( 'Paste the Vimeo ID to pull the screenshot', 'si-custom-elements' ),
		),
	),
	'rss_limit' => array(
		'type'    => 'text',
		'ui' => array(
			'title'   => __( 'Posts Limit', 'si-custom-elements' ),
		),
	),
);