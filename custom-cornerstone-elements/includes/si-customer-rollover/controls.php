<?php

/**
 * Element Controls
	quote, description, link, logo 
 */

return array(
	
	'quote' => array(
		'type'    => 'textarea',
		'ui' => array(
			'title'   => __( 'Customer Quote', 'si-custom-elements' ),
		),
	),
	'description' => array(
		'type'    => 'textarea',
		'ui' => array(
			'title'   => __( 'Description', 'si-custom-elements' ),
		),
	),
	'link' => array(
		'type'    => 'text',
        'ui' => array(
			'title'   => __( 'Link URL', 'si-custom-elements' ),
			'description'   => __( 'Just paste the URL, no html tags', 'si-custom-elements' ),
		),
	),
	'is_external_link' => array(
		'type'    => 'toggle',
        'ui' => array(
			'title'   => __( 'External Link', 'si-custom-elements' ),
			'tooltip' =>__( 'This will make the link open in a new window', 'si-custom-elements' ),
		)
	),
	'logo' => array(
		'type'    => 'image',
		'ui' => array(
			'title'   => __( 'Logo', 'si-custom-elements' ),
            'condition' => array(
            	'graphic' => 'image'
            )
		),
	),
	'show_corner_label' => array(
		'type'    => 'toggle',
        'ui' => array(
			'title'   => __( 'Show Corner Label?', 'si-custom-elements' )
		)
	),
);