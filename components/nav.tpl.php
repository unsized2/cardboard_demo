<?php
$css->appendCssFile('nav');
$css->appendCssFile('layout');
$html->svgSymbols( ['sign_in'] );
//html
?><header class='navbar'>
    <div class='string-line'></div>
    <h6 class='title'><?= __( $data['app']['nav_title'] ); ?></h6>
    <a href='#auth' class='button icon primary surface l-tr-4'>
      <svg class='icon'>
        <use xlink:href='#sign_in'></use>
      </svg>
    </a>
  </header>
