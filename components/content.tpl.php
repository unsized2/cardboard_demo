<?php

$css->appendCssFile('card');

$custom_css="
.content {
    box-sizing: border-box;
    background-color: $background;
    width: 100%;
    height: 100%;
    padding: 16px 0;
  }
.text {
  position: relative;
}

.carousel > .figure {
border-radius:  $small_radius $small_radius 0 0;
}

h1 {
  margin: 0;
  }

  ";
$css->appendCss($custom_css);

?>

<div class='content_old'>
</div>

  <div class='card'>
    <?php include ('carousel.tpl.php'); ?>
    <div class= 'text'>
    <h2>Title</h2>
  </div>
  </div>
