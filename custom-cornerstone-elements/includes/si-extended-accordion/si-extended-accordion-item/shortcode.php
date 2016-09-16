<?php

/**
 * Shortcode handler
 */

$id        = ( $id        != ''     ) ? 'id="' . esc_attr( $id ) . '"' : '';
$class     = ( $class     != ''     ) ? 'x-accordion-group ' . esc_attr( $class ) : 'x-accordion-group';
$style     = ( $style     != ''     ) ? 'style="' . $style . '"' : '';
$parent_id = ( $parent_id != ''     ) ? 'data-cs-collapse-parent="#' . $parent_id . '"' : '';
$collapse  = ( $open      == 'true' ) ? 'collapse in' : 'collapse';
$collapsed = ( $open      != 'true' ) ? ' collapsed' : '';

// Maybe make these empty if not set?
$title     = ( $title     != ''     ) ? $title : 'Set a Title';
$sub_title     = ( $sub_title     != ''     ) ? $sub_title : '';
$job_location     = ( $job_location     != ''     ) ? $job_location : '';
$job_type     = ( $job_type     != ''     ) ? $job_type : '';

$atts = cs_atts( array(
	'id' => $id,
	'class' => $class,
	'style' => $style
) );

$accordionHeader = "<div class=\"si-extended-accordion-row\">"
                        . "<span class=\"si-extended-accordion-title\">{$title}</span>"
                        . "<span class=\"si-extended-accordion-location\">{$job_location}</span>"
                    . "</div>"
                    . "<div class=\"si-extended-accordion-row\">"
                        . ($sub_title ? "<span class=\"si-extended-accordion-subtitle\">{$sub_title}</span>" : '')
                        . ($job_type ? "<span class=\"si-extended-accordion-type\">{$job_type}</span>" : '')
                    . "</div>"; 

$output = "<div {$id} class=\"{$class}\" {$style} data-cs-collapse-group>"
            . '<div class="x-accordion-heading si-extended-accordion-heading">'
                . "<div class=\"x-accordion-toggle{$collapsed}\" data-cs-collapse-toggle {$parent_id} >"
                    . $accordionHeader
                ."</div>"
            . '</div>'
            . "<div class=\"x-accordion-body {$collapse}\" data-cs-collapse-content>"
              . '<div class="x-accordion-inner">'
                . do_shortcode( $content )
              . '</div>'
            . '</div>'
          . '</div>';

echo $output;

?>
