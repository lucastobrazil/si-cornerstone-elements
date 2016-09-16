<?php

/**
 * Shortcode handler
 */

extract( $atts );
$link = ( true === $link_items ) ? ' link="true" ' : '';

$shortcode = "[x_accordion{$link}]" . do_shortcode( $content ) . "[/x_accordion]";
echo $shortcode;

?>

