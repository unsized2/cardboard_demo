<?php

//dependancies

//create slide array from a

$alias=array_keys($data['listing'])[0];
$captions=$data['listing'][$alias]['caption'];


$img_dir = IMG.'/'.$alias;  // file path of images
$img_url = '/img/'.$alias;

$slides=carousel_array($img_dir, $captions, $img_dir, $img_url );

//print_r($slides);
$css->appendCssFile('carousel');

/*
$custom_css = "

.carousel {
  border-radius:  $small_radius $small_radius 0 0;
  overflow: hidden;
}
";
$css->appendCss($custom_css);
*/

//html_template
?>
<section class='carousel'>
  <?php $x=0; foreach ($slides as $k => $slide){  ?>

  <input type='radio' id='<?= $slide['label']?>' name="activator" <?php echo ($k==0) ? "checked":"";?> >
   <div class='figure is-hidden' <?php echo ($k==0) ? "style='background-image: url(\"$slide[low_res_64]\")'":"";?> >
     <img src="<?= $slide['url'] ?>" alt="<?= $slide['alt'] ?>" >
     <div class='caption'><?= $slide['caption'] ?></div>
     <label class="prev arrow" for="<?= $slide['prev'] ?>"></label>
     <label class="next arrow" for="<?= $slide['next'] ?>"></label>
     <ul class='indicator'>
       <?= $slide['indicator'] ?>
     </ul>
   </div>
<?php } ?>
</section>


<?php
//CDreate the slide array for the carousel html
// Given a directory of slides


function carousel_array($alias,  $captions=[], $img_dir='', $img_url='' ){
// variables - photo directory [alias]
// photo_url [optional]
// size - optional
/*** Do not edit below this line - development - carousel creator ***/

//$img_dir = IMG.'/'.$alias;  // file path of images
//$img_url = '/img/'.$alias;  // url

/* Retrieve photos from directory. */
if (scandir($img_dir)){
  $photos = array_diff(scandir($img_dir), array('..', '.'));
  $x=0;
  foreach ($photos AS $photo){
    if ($x==0){
      $image=$img_dir.'/'.$photo;
      $base64_img=jpeg_to_base64($image);  //first image - create lowres base64
     }
    $slide[]['url']=$img_url.'/'.$photo;
    $x++;
  }
$slide[0]['low_res_64'] = $base64_img;  // low res image to be set as background

$total= count($slide);
$last_slide = $total - 1;

// slide[x][prev]
foreach ($slide AS $k => $v){    // radio control labels - prev, next
  if ($k==0){
    $prev=$last_slide;
    }
  else {$prev=$k-1;
  }
  if ($k==$last_slide){
    $next=0;}
  else {$next=$k+1;
  }

$slide[$k]['label']=$alias.'-'.$k;
$slide[$k]['next']=$alias.'-'.$next;
$slide[$k]['prev']=$alias.'-'.$prev;

//captions
if (isset($captions[$k])){
  $slide[$k]['caption']=$captions[$k];
  } else {$slide[$k]['caption']='';
      }

//$filename=$slide[$k]['url'];

preg_match('/_([a-zA-Z0-9-]+)\./', $slide[$k]['url'], $matches);  // alt-image names
//print_r($matches);
//echo $alt_text= ucwords( str_replace('-',' ', $matches[1]) );

$slide[$k]['alt'] = strtotitle( str_replace('-',' ', $matches[1]) );

//indicator
$i=0;
$indicator='';
  while ($i < $total){
    if ($k == $i){
      $selected = ' class="selected"';
    } else{ $selected='';}

  $indicator=$indicator.'<li'.$selected.'></li>';
  $i++;
  }
$slide[$k]['indicator']=$indicator;
}

}

return $slide;
}//end function
