<?php

/**
 * Element Controls
 */

return array(
	'title' => array(
		'type'    => 'text',
        'context' => 'title',
        'ui' => array(
			'title'   => __( 'Item Title', 'si-custom-elements' ),
			'tooltip' =>__( 'Include your desired title for your Accordion Item here.', 'si-custom-elements' ),
		),
	),
    'sub_title' => array(
		'type'    => 'text',
        'context' => 'sub_title',
        'ui' => array(
			'title'   => __( 'Subtitle', 'si-custom-elements' ),
			'tooltip' =>__( 'Include extra info here.', 'si-custom-elements' ),
		),
	),

    'job_location' => array(
		'type'    => 'text',
        'context' => 'job_location',
        'ui' => array(
			'title'   => __( 'Job Location', 'si-custom-elements' ),
			'tooltip' =>__( 'eg. Berlin, U.S. etc.', 'si-custom-elements' ),
		),
	),

    'job_type' => array(
		'type'    => 'text',
        'context' => 'job_type',
        'ui' => array(
			'title'   => __( 'Job Type', 'si-custom-elements' ),
			'tooltip' =>__( 'eg. Full Time, Home Office, etc.', 'si-custom-elements' ),
		),
	),
    'content' => array(
        'type'    => 'editor',
        'context' => 'content',
        'ui' => array(
			'title'   => __( 'Content', 'si-custom-elements' ),
			'tooltip' =>__( 'Include your desired content for your Accordion Item here.', 'si-custom-elements' ),
		),
        'suggest' => __( 'Click to inspect, then edit as needed.', 'si-custom-elements' ),
    ),
    'open' => array(
		'type'    => 'toggle',
        'ui' => array(
			'title'   => __( 'Starts Open', 'si-custom-elements' ),
			'tooltip' =>__( 'If the Accordion Items are linked, only one can start open.', 'si-custom-elements' ),
		)
	),
);