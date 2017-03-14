<?php
extract($atts);


$class = implode(' ', [
    'si-vimeo-video',
    esc_attr( $class ),
]);

if($has_description)
    $class = implode(' ', [
        'has-description',
        esc_attr( $class ),
    ]);

$containerAtts = cs_atts( array(
	'id' => $id,
	'class' => $class,
	'style' => $style
) );

$rand = mt_rand();

?>

<article <?php echo $containerAtts; ?> >
    <?php echo do_shortcode('[lightbox selector=".video-link-'.$rand.'"]'); ?>
    <a class="video-link video-link-<?php echo $rand; ?>" href="https://player.vimeo.com/video/<?php echo $vimeo_id; ?>?autoplay=1">
        <div class="overlay"></div>
        <img src="<?php echo $vimeo_screenshot; ?>"/>
        <?php if($vimeo_duration){ ?>
        <div class="time">
            <?php echo do_shortcode('[x_icon type="clock-o"]'); ?> <?php echo $vimeo_duration; ?>
        </div>
        <?php } ?>
        <div class="play-button">
            <?php echo do_shortcode('[x_icon type="play"]'); ?>
        </div>
    </a>
    <?php if($has_description){ ?>
    <div class="content-info">
        <?php if($element_title){ ?>
        <strong><?php echo $element_title; ?></strong><br/>
        <?php } ?>
        <?php echo $element_description; ?>
    </div>
    <?php } ?>
</article>