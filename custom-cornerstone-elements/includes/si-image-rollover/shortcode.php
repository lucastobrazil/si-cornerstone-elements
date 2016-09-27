<?php
// $output = "<a href='{$link}'>{$my_title}</a>";
// echo $output;
$class     = ( $class     != ''     ) ? 'feature-img ' . esc_attr( $class ) : 'feature-img';
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