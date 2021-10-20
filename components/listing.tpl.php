<?php
/* listing */

$css->appendCssFile('card');

/*** custom button sign_in.tpl.php ***/

$vacancy='vacancy';
$title='title';
$description='description';
$alias='alias';
?>
<article class='card'>
  <?php include ('carousel.tpl.php'); ?>
  <h6 class=overline><?= $vacancy ?></h6>
  <h4><?= $title ?></h4>

<p><?= $description ?></p>
  <footer><?= $alias ?></footer>
</article>
