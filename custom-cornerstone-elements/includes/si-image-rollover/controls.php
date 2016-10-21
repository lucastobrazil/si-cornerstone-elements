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
	'size' => array(
		'type'    => 'select',
		'ui' => array(
			'title'   => __( 'Graphic Size', 'si-custom-elements' ),
		),
		'options' => array(
			'choices' => array(
				array( 'value' => '',   'label' => __( 'Normal (260px)', 'si-custom-elements' ) ),
				array( 'value' => 'feature-img--small',   'label' => __( 'Small (130px)', 'si-custom-elements' ) ),
			)
		)
	),
	'border_toggle' => array(
		'type'    => 'toggle',
        'ui' => array(
			'title'   => __( 'Border', 'si-custom-elements' ),
		)
	),
	'circular' => array(
		'type'    => 'toggle',
        'ui' => array(
			'title'   => __( 'Circular', 'si-custom-elements' ),
		)
	),
);