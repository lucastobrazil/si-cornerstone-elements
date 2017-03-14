<?php
extract($atts);


$class = implode(' ', [
    'si-customer-box',
    esc_attr( $class ),
]);

$containerAtts = cs_atts( array(
	'id' => $id,
	'class' => $class,
	'style' => $style
) );



?>

<article <?php echo $containerAtts; ?> >
    <a href="<?php echo $link_href; ?>" class="overlay-link"></a>
    <div class="left customer-box-portrait">
        <img src="<?php echo $portrait; ?>" class="x-img x-img-circle"/>
    </div>
    <div class="right">
        <div class="customer-box-quote h5"><?php echo htmlspecialchars_decode($quote); ?></div>
        <div class="customer-box-name"><?php echo $name; ?><br/><?php echo $position; ?></div>
        <div class="customer-box-link h5"><a href="<?php echo $link_href; ?>"><?php echo $link_text; ?></a></div>
        <div class="customer-box-logo">
            <img src="<?php echo $logo; ?>"/>
        </div>
    </div>
    <div class="x-clear"></div>
</article>