<?php

/**
 * Element Controls
 */

return array(
	'elements' => array(
		'type'    => 'sortable',
        'ui' => array(
			'title'   => __( 'Add Items', 'si-custom-elements' ),
			'tooltip' =>__( 'Add a new item to your accordion..', 'si-custom-elements' ),
		),
        'options' => array(
            'element' => 'si-extended-accordion-item',
            'newTitle' => __( 'Item %s', 'si-custom-elements' ),
            'floor'    => 1
        ),
        'suggest' => array(
            array( 
                'title' => __( 'SI Accordion Item 1', 'si-custom-elements' ),
                'sub_title' => __( 'Sub Title', 'si-custom-elements' ), 
                'content' => __( 'Add some content to your accordion item here.', 'si-extended-accordion' ), 
                'open' => true 
            ),
            array(
                'title' => __( 'SI Accordion Item 2', 'si-custom-elements' ),
                'sub_title' => __( 'Sub Title', 'si-custom-elements' ),
                'content' => __( 'Add some content to your accordion item here.', 'si-extended-accordion' ) 
            )
        )
	),
    'link_items' => array(
		'type'    => 'toggle',
        'ui' => array(
			'title'   => __( 'Link Items', 'si-custom-elements' ),
			'tooltip' =>__( 'This will make opening one item close the others.', 'si-custom-elements' ),
		)
	),

);