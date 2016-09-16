<?php

/**
    Element Name: SI Extended Accordion Item
    Description: Individual Items for the SI Extended Accordion
    Author: lucastobrazil
    Author URI: http://lucastobrazil.github.io/
    Version: 0.1.0
*/
class SI_Extended_Accordion_Item {

	public function ui() {
        return array(
            'name' => 'si-extended-accordion-item',
            'title'       => __( 'SI Careers Accordion Item', 'si-extended-accordion-item' ),
            'section'     => 'content',
            'description' => __( 'Accordion description.', 'si-extended-accordion-item' ),
            'supports'    => array( 'id', 'class', 'style' ),
        );
	}

    public function flags() {
		return array(
			'child' => true
		);
	}

	public function update_build_shortcode_atts( $atts ) {
		return $atts;
	}
}