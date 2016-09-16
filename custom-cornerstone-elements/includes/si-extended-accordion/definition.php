<?php

/**
	Element Name: SI Extended Accordion
	Description: Similar to the Cornerstone Accordion, but with extra fields in the collapsed view
	Author: lucastobrazil
	Author URI: http://lucastobrazil.github.io/
	Version: 0.1.0
 */

class SI_Extended_Accordion {

	public function ui() {
        return array(
            'title'       => __( 'SI Extended Accordion', 'si-extended-accordion' ),
            'supports'    => array( 'class', 'style' ),
            'renderChild' => true,
        );
	}

    public function flags() {
		return array(
			'dynamic_child' => true
		);
	}
}