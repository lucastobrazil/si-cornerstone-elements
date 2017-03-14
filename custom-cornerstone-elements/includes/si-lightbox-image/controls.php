<?php

/**
 * Element Controls
	Style, SRC, Alt, Link title
 */

return array(
	
	'image_style' => array(
		'type'    => 'select',
        'ui' => array(
			'title'   => __( 'Image style', 'si-custom-elements' )
		),
		'options' => array(
			'choices' => array(
				array( 'value' => 'x-img-none',   'label' => __( 'None', 'cornerstone' ) ),
				array( 'value' => 'x-img-thumbnail', 'label' => __( 'Thumbnail', 'cornerstone' ) ),
				array( 'value' => 'x-img-rounded',  'label' => __( 'Rounded', 'cornerstone' ) ),
				array( 'value' => 'x-img-circle',  'label' => __( 'Circle', 'cornerstone' ) )
	    	)
	    )
	),
	'image_src' => array(
		'type'    => 'image',
		'ui' => array(
			'title'   => __( 'SRC', 'si-custom-elements' ),
		),
	),
	'image_alt' => array(
		'type'    => 'text',
        'ui' => array(
			'title'   => __( 'Alt', 'si-custom-elements' )
		),
	),
	'link_title' => array(
		'type'    => 'text',
        'ui' => array(
			'title'   => __( 'Link title', 'si-custom-elements' )
		),
	),
	'gallery_id' => array(
		'type'    => 'text',
        'ui' => array(
			'title'   => __( 'Gallery ID', 'si-custom-elements' ),
			'tooltip' => __('Images with the same ID will be scrollable.', 'si-custom-elements')
		),
	),
);