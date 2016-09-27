<?php

/**
 * Element Controls
title, link, graphic, graphic_icon 
 */

return array(
	'text_title' => array(
		'type'    => 'text',
        'ui' => array(
			'title'   => __( 'Item Title', 'si-custom-elements' ),
			'tooltip' =>__( 'Include your desired title for your Accordion Item here.', 'si-custom-elements' ),
		),
	),
	'content' => array(
		'type'    => 'textarea',
		'ui' => array(
			'title'   => __( 'Link Content', 'si-custom-elements' ),
		),
	),
    'graphic' => array(
		'type'    => 'image',
		'ui' => array(
			'title'   => __( 'Image', 'si-custom-elements' ),
            'condition' => array(
            'graphic' => 'image'
            )
		),
	),
);