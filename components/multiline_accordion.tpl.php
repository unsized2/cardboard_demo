<?php

$description =  $data['listing']['cool-cats']['description'];


/********** multiline_accordion *****************/
$summary_lines = 5;
$font_size = .875;
$line_height = 1.4;
$padding = 0.5;
$target_name='description';
/********end_variables***************/

$css->appendCssFile('icon-chevron');
$css->appendCssFile('button.inline');

$max_height = ($summary_lines * $font_size * $line_height) ;//+ $padding
$min_height = ($summary_lines * $font_size * $line_height) + (2 * $padding);//+ $padding
$font_height = $line_height * $font_size;

$max_height .= 'rem';
$min_height .= 'rem';
$font_size .= 'rem';
$font_height .= 'rem';
$padding .= 'rem';

$alias='cool-cats';


$multiline_accordion_css="

.is-compact {
  position:relative;
  max-height: $min_height;
  min-height: $min_height;
  background-color: $surface;
  overflow:hidden;
  z-index: -1;
}

:target.is-compact {
  max-height: 280rem;
}

:not(:target).is-compact {
 transition: max-height .5s cubic-bezier(0, 1, 0, 1);
}

.overflow-wrapper {
  box-sizing: border-box;
  padding: 0.5rem;
  margin: 0rem;
  position: relative;
  background-color: $surface ;
}

:target .overflow-wrapper::after {
  content: '\a \a';
}

.overflow {
  box-sizing: border-box;
  overflow:hidden;
  position: relative;
  max-height: $max_height;
  white-space: pre-wrap;
  line-height: $line_height;
  font-size: $font_size;
  margin:0;
  width: 100%;
  background: $surface;
  /*transition: max-height .5s cubic-bezier(0, 1, 0, 1);*/
  margin-bottom: -0.4rem;
  }

.overflow::after {
    content:'';
    position: absolute;
    right: 0;
    width: 3rem;
    height: $font_height;
    margin-right: -.25rem;
    background: $surface;
    /*opacity: .5;*/
    z-index:2;
    transition: height 0s .5s, width 0s .5s;
    /*background: orange;*/
  }

:target .overflow::after {
  content:'\a \a \a';
  position: relative;
  height:0;
  width:0;
}

:target > .overflow-wrapper > .overflow {
  max-height: 280rem;
}

:not(:target) > .overflow-wrapper > .overflow {
  transition: max-height .5s cubic-bezier(0, 1, 0, 1);  /* remove delay at start */
}


/* fixed fade on bottom line - need turn off if no overflow [how?]  */
.fade {
  display:inline-block;
  position: absolute;
  bottom: 0.5rem;     /* match wrapper padding */
  height: $font_height;
  right: 0rem;
  width:90%;
  background: linear-gradient(to right, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 1) 80%); /** change to surface color  rgb_surface?  **/
  opacity:1;
}


/***********toggle button and mask line up *************/

.l-toggle {
    bottom: 0.125rem;
    right: 0.9rem;
    }

  .is-on, .is-off {
      z-index:1;
      line-height:0;
  }


/* bodge adjustment allow for mask lineup */
  :target .l-toggle {
    bottom: 0.5rem;
    transition: bottom 0.5s;
  }
";

$css->appendCss($multiline_accordion_css);

?>

<!-- expand / collapse -->
    <div id='<?= $target_name ?>' class='is-compact' >
      <div class= 'overflow-wrapper'>
        <p class='overflow'><?= __($description) ?>  </p>
        <!-- toggle button 2 buttons absolutely positioned above each other :target state control-->
        <div class='is-on l-toggle' >
          <a href='#<?= $target_name ?>' class='inline button round' ><i class='icss-chevron small is-down'></i></a>
        </div>

        <div class='is-off l-toggle' >
          <a href='#' class='inline button round' ><i class='icss-chevron small is-down'></i></a>
        </div>
        <!-- end toggle :target -->
      </div>
      <span class='fade'></span>
    </div>
<!-- expand / collapse -->
