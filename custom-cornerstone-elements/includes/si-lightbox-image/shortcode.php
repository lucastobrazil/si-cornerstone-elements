<?php
extract($atts);

require_once 'extras.php';

if(!$gallery_id)
    $gallery_id = mt_rand();

$class = implode(' ', [
    'si-lightbox-image',
    'x-img',
    esc_attr( $image_style),
    'lightbox-image-'.$gallery_id,
    esc_attr( $class ),
]);

$containerAtts = cs_atts( array(
	'id' => $id,
	'class' => $class,
	'style' => $style,
    'title' => $link_title,
    'href' => $image_src
) );

$imgAtts = cs_atts( array(
    'src' => wp_get_attachment_image_url(get_attachment_id($image_src),'large'),
    'alt' => $image_alt,
) );

?>

<?php echo do_shortcode('[lightbox selector=".lightbox-image-'.$gallery_id.'"]'); ?>
<a <?php echo $containerAtts; ?>>
    <img <?php echo $imgAtts; ?>/>
</a>