<?php
extract($atts);

$class = implode(' ', [
    'si-rss-feed',
    esc_attr( $class ),
]);

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$containerAtts = cs_atts( array(
  'id' => $id,
  'class' => $class,
  'style' => $style
) );

if(empty($rss_url) || filter_var($rss_url, FILTER_VALIDATE_URL) === FALSE)
  return;
if(!function_exists('strip_tags_content')){
  function strip_tags_content($text, $tags = '', $invert = FALSE) { 

    preg_match_all('/<(.+?)[\s]*\/?[\s]*>/si', trim($tags), $tags); 
    $tags = array_unique($tags[1]); 
      
    if(is_array($tags) AND count($tags) > 0) { 
      if($invert == FALSE) { 
        return preg_replace('@<(?!(?:'. implode('|', $tags) .')\b)(\w+)\b.*?>.*?</\1>@si', '', $text); 
      } 
      else { 
        return preg_replace('@<('. implode('|', $tags) .')\b.*?>.*?</\1>@si', '', $text); 
      } 
    } 
    elseif($invert == FALSE) { 
      return preg_replace('@<(\w+)\b.*?>.*?</\1>@si', '', $text); 
    } 
    return $text; 
  } 
}

?>

<div <?php echo $containerAtts; ?> >

<?php

$cache_time = 300; // 5 min

$cache_file = __DIR__ .'/cache/'.sanitize_title_with_dashes($rss_url).'.rss';
$timedif = @(time() - filemtime($cache_file));

if (file_exists($cache_file) && $timedif < $cache_time) {
    $string = file_get_contents($cache_file);
} else {
    $string = file_get_contents($rss_url);
    if ($f = @fopen($cache_file, 'w')) {
        fwrite ($f, $string, strlen($string));
        fclose($f);
    }
}
$xml = simplexml_load_string($string);
$namespaces = $xml->getNamespaces(true);
// place the code below somewhere in your html
echo '<div  class="x-container"  style="margin: 0px auto;padding: 0px;"   >';
$count = 1;
// the next object is an example for a feed from wordpress
foreach ($xml->channel->item as $val) {
    if ($count <= $rss_limit) { ?>
        <?php if($count != 1 && $count % 2 == 1){
          echo '</div><div  class="x-container" style="margin: 0px auto;padding: 0px;">';
        } ?>
        <?php 
          $images = $val->children($namespaces['media']);
          $img_src = '';
          foreach ($images as $img){
            
            if(strpos($img->attributes()->url,'gravatar')===false){
              $img_src = str_replace('http://','//',$img->attributes()->url);
              break;
            }
          }?>
        <article class="x-column x-sm x-1-2" style="padding: 0px;" >
          <?php if($img_src){ ?>
          <a  class="x-img x-img-link x-img-thumbnail"  href="<?php echo $val->link; ?>"     data-options="thumbnail: '<?php echo $img_src; ?>'"><div class="si-rss-img" style="background-image:url('<?php echo trim($img_src); ?>');"></div></a>
          <?php } ?>
          <h3  class="h-custom-headline mts h4" ><span><?php echo $val->title; ?></span></h3>
          <div  class="x-text"    >
            <p><?php echo strip_tags_content($val->description); ?></p>
            <p><a href="<?php echo $val->link; ?>">Read the blogpost here →</a></p>
          </div>
        </article>
<?php
    }
    $count++;
}
echo '</div>';
?>
</div>