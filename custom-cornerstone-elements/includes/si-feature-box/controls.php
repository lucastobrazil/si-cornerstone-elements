<?php

/**
 * Element Controls
 */

return array(

	'heading' => array(
		'type'    => 'text',
		'ui' => array(
			'title'   => __( 'Heading &amp; Content', 'si-custom-elements' ),
			'tooltip' => __( 'Tooltip to describe your controls.', 'si-custom-elements' ),
		),
    	'suggest' => __( 'Heading', 'si-custom-elements' ),
	),
	'content' => array(
		'type'    => 'textarea',
		'ui' => array(
			'title'   => __( 'Heading &amp; Content', 'si-custom-elements' ),
		),
		'suggest' => __( 'Click to inspect, then edit as needed.', 'si-custom-elements' ),
	),

	'common' => array( 'text_align' ),

	'heading_color' => array(
	 	'type' => 'color',
	 	'ui' => array(
			'title'   => __( 'Heading Color', 'si-custom-elements' )
		)
	),

	'text_color' => array(
	 	'type' => 'color',
	 	'ui' => array(
			'title'   => __( 'Text Color', 'si-custom-elements' )
		)
	),

	'icon' => array(
		'type' => 'icon-choose',
		'ui'   => array(
			'title'   => __( 'Icon', 'cornerstone' ),
			'tooltip' => __( 'Specify the icon you would like to use.', 'cornerstone' ),
		),
    	'suggest' => 'lightbulb-o',
	),

	'icon_color' => array(
		'type' => 'color',
		'ui' => array(
			'title'   => __( 'Icon Color', 'cornerstone' ),
			'tooltip' =>__( 'Choose a custom color for your icon.', 'cornerstone' ),
		)
	),

);