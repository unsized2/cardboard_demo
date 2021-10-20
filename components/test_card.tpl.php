<?php
/**********truncate_variables*****************/
$summary_lines = 5;
$font_size = .875;
$line_height = 1.4;
$padding = 0.5;
$target_name='description';
/********end truncate_variables***************/

$css->appendCssFile('card');


$alias='cool-cats';


$demo_card_css="

.card {
  background-color: beige;
  /*overflow:hidden;*/
}

.card > .carousel{
  border-radius:  $small_radius $small_radius 0 0;
  overflow:hidden;
}

.image_blank{
  border-radius:  $small_radius $small_radius 0 0;
  width: 344px;
  height:194px;
  background-color: grey;
  position: static;
}



.is-summary {
  position: relative;
  box-sizing: border-box;
  padding: 0.5rem;
  height: 6rem;
  opacity:0.8;
}

svg.inline.icon {
  height: 1rem;
  width: 1rem;
  margin-right: -0.25rem;
}

";


$css->appendCss($demo_card_css);
$html->svgSymbols( ['vacancies', 'venus', 'mars'] );

?>

    <div class='is-summary' id='is-summary'>
      <div class='overline'>Cool Cats - Edgbaston B17</div>
    <!--  <h6>Female Grad? New to B'ham?</h6> -->
      <div class='subtitle2'>
        <svg class='icon'><use xlink:href='#vacancies'></use></svg>
        x 2 - Available Now - £400pcm
      </div>
    </div>
    <!--
    <div class='subtitle2'>Adam, Scarlett, James, David
      <svg class='inline icon'><use xlink:href='#venus'></use></svg>
      <svg class='inline icon'><use xlink:href='#mars'></use></svg>
      <svg class='inline icon'><use xlink:href='#mars'></use></svg>
      <svg class='inline icon'><use xlink:href='#mars'></use></svg>
    </div> -->
