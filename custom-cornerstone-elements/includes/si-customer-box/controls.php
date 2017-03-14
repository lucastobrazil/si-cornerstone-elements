<?php

/**
 * Element Controls
	Portrait, Name, Quote, Logo, Link HREF, Link Text
 */

return array(
	
	'portrait' => array(
		'type'    => 'image',
        'ui' => array(
			'title'   => __( 'Portrait', 'si-custom-elements' )
		),
	),
	'name' => array(
		'type'    => 'text',
		'ui' => array(
			'title'   => __( 'Name', 'si-custom-elements' ),
		),
	),
	'position' => array(
		'type'    => 'text',
		'ui' => array(
			'title'   => __( 'Position', 'si-custom-elements' ),
		),
	),
	'quote' => array(
		'type'    => 'text',
        'ui' => array(
			'title'   => __( 'Quote', 'si-custom-elements' ),
		),
	),
	'logo' => array(
		'type'    => 'image',
		'ui' => array(
			'title'   => __( 'Logo', 'si-custom-elements' ),
		)
	),
	'link_href' => array(
		'type'    => 'text',
		'ui' => array(
			'title'   => __( 'Link HREF', 'si-custom-elements' ),
		)
	),
	'link_text' => array(
		'type'    => 'text',
		'ui' => array(
			'title'   => __( 'Link Text', 'si-custom-elements' ),
		)
	),
);