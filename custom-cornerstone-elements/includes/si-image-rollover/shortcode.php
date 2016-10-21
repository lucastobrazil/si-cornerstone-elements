<?php
$borderClass = ( true === $border_toggle ) ? 'feature-img--bordered' : '';
$shapeClass = ( true === $circular ) ? 'feature-img--circular' : '';

$class = implode(' ', [
    'feature-img',
    esc_attr( $class ),
    $size,
    $borderClass,
    $shapeClass
]);

$containerAtts = cs_atts( array(
	'id' => $id,
	'class' => $class,
	'style' => $style . 'background-image:url("' . $graphic . '");'
) );
?>

<div <?php echo $containerAtts; ?>>
    <div class="hidden-content">
        <h3><?php echo $text_title; ?></h3>
        <?php echo $content; ?>
    </div>
</div>