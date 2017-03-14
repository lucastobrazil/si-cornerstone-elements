<?php

/**
 * Element Controls
	Vimeo ID, Vimeo Screenshot, Vimeo Duration, Title, Description 
 */

return array(
	
	'vimeo_id' => array(
		'type'    => 'text',
        'ui' => array(
			'title'   => __( 'Vimeo ID', 'si-custom-elements' ),
			'tooltip'   => __( 'Paste the Vimeo ID to pull the screenshot', 'si-custom-elements' ),
		),
	),
	'vimeo_screenshot' => array(
		'type'    => 'image',
		'ui' => array(
			'title'   => __( 'Vimeo Screenshot', 'si-custom-elements' ),
		),
	),
	'vimeo_duration' => array(
		'type'    => 'text',
        'ui' => array(
			'title'   => __( 'Vimeo Video Duration', 'si-custom-elements' ),
			'tooltip'   => __( 'Format m:ss', 'si-custom-elements' ),
		),
	),
	'has_description' => array(
		'type'    => 'toggle',
        'ui' => array(
			'title'   => __( 'Has text content?', 'si-custom-elements' ),
			'tooltip' =>__( 'This will make the text content visible', 'si-custom-elements' ),
		)
	),
	'element_title' => array(
		'type'    => 'text',
		'ui' => array(
			'title'   => __( 'Title', 'si-custom-elements' ),
		),
		'condition' => array(
        	'has_description' => true,
        )
	),
	'element_description' => array(
		'type'    => 'textarea',
		'ui' => array(
			'title'   => __( 'Description', 'si-custom-elements' ),
		),
		'condition' => array(
        	'has_description' => true,
        )
	),
);