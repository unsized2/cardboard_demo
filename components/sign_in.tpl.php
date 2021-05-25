<?php
//dependancies
$css->appendCssFile('icon');
$css->appendCssFile('modal');
$css->appendCssFile('buttons');
$custom_button_css='
/*** custom button sign_in.tpl.php ***/
.sign_in {
    width: 200px;
    height: 48px;
    text-align: left;
  }';

$css->appendCss($custom_button_css);
$html->svgSymbols( ['google_sign_in'] );

//html_template
?>
<div id='auth' class = 'modal is-hidden'>
  <h1>Sign In</h1>
    <a href='/auth/google' role='button' class="button outlined ripple sign_in"  aria-label="Sign in with Google">
      <svg class='buttonSvg'><use xlink:href='#google_sign_in'></use></svg>
      <span class="buttonText">Sign in with Google</span>
    </a>
</div>

<a href='#'>
  <div class='scrim is-hidden'></div>
</a>
