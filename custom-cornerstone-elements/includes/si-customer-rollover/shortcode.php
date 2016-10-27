<?php
extract($atts);
$window_target = ( true === $is_external_link ) ? ' target="_blank"' : '';
$link_text = ( true === $is_external_link ) ? $link : 'Read the testimonial';
$cornerLabelClass = ( true === $show_corner_label ) ? 'more-info' : '';


$class = implode(' ', [
    'si-customer-rollover',
    esc_attr( $class ),
]);

$logoClasses = implode(' ' , [
    'logo',
    $cornerLabelClass
]);

$containerAtts = cs_atts( array(
	'id' => $id,
	'class' => $class,
	'style' => $style
) );

?>

<div <?php echo $containerAtts; ?> >
    <a class="<?php echo $logoClasses; ?>" href="<?php echo $link ?>" <?php echo $window_target; ?>>
        <div class="logoBox">
            <div class="lazy" style="background-image: url('<?php echo $logo; ?>');"></div>
        </div>

        <div class="insight hoverInfo">
            <div>
                <div>
                    <?php echo $description; ?>
                </div>
            </div>
        </div>

        <div class="blurb hoverInfo">
            <div>
                <div>
                    <div class="miniquote">
                        <?php echo $quote; ?>
                    </div>
                    <span class="item-link">
                        <?php echo $link_text; ?>
                    </span> 
                </div>
            </div>
        </div>
    </a>
</div>