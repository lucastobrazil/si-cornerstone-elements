<?php

/**
 * Shortcode handler
 */

$classes = 'si-feature-box ' . $class;

$icon_style = ( $icon_color != '' ) ? "color: $icon_color;" : '';

$icon_atts = cs_atts( array(
	'class' => 'si-feature-box-icon x-icon-' . $icon,
	'data-x-icon' => fa_entity( $icon ),
	'aria-hidden' => 'true',
	'style' => $icon_style
) );

$containerAtts = cs_atts( array(
	'id' => $id,
	'class' => $classes,
	'style' => $style
) );

?>

<div <?php echo $containerAtts; ?>>
	<div class='si-feature-box-header'>
		<i <?php echo $icon_atts ?> ></i>

		<?php if ( $heading ) : ?>
			<h5 class="si-feature-box-heading" style="color:<?php echo $heading_color;?>"> <?php echo $heading; ?></h4>
		<?php endif; ?>
	</div>
	<p style="color:<?php echo $text_color;?>">
		<?php echo $content ?>
	</p>	
</div>