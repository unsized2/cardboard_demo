<?php

// truncate using checkbox as state control
// advantage - html is very light
// toggle / state control of entire area is easy

$css->appendCssFile('card');
$css->appendCssFile('icon-chevron');
$css->appendCssFile('button.inline');
$css->appendCssFile('layout');

$alias='cool-cats';
$description =  $data['listing'][$alias]['description'];

$custom_css_card="

  .card {
    background-color: beige;
    }

  .image_blank{
    border-radius:  $small_radius $small_radius 0 0;
    width: 344px;
    height:194px;
    background-color: grey;
    position: static;
    }

  .title_blank{
    position: relative;
    width: 344px;
    height:88px;
    background-color: $surface;
    }


    p {
      line-height: 1.5;
    }

";

$css->appendCss($custom_css_card);

?>
  <div class='card'>
    <div class='image_blank'>
    </div>
    <div id='article' class='title_blank'>

      <p style='text-align: center;' >
        Some <a href='#' class='inline button'>text</a> with a <a href='#' class ='button outlined'>button</a> inline
        Here is some text to see how it sits with the expand collapse button. the button need to be small enough such that is stays inline with the text.
      </p>

<!-- toggle button 2 buttons absolutely positioned above each other-->
      <div class='is-on l-br' >
        <a href='#article' class='inline button round' ><i class='icss-chevron is-down'></i></a>
      </div>

      <div class='is-off l-br' >
        <a href='#' class='inline button round' ><i class='icss-chevron is-down'></i></a>
      </div>
    </div>

    <div id='full-story' class='compact' >
      <div class= 'overflow-wrapper'>
        <p class='overflow'><?= __($description) ?><span class='fade'></span> <a href='#full-story' class=' expand-more  button ripple '><i class='icss chevron down'></i></a> <span class='underflow-mask'><i class='icss'></i></span></p>
      </div>

      <div class=' expand-less'>
        <a href='#' class='inline button ripple'><i class='icss chevron up'></i></a>
      </div>
      <div class='mask'></div>
    </div>
  </div>
