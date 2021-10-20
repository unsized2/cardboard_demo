<?php
$css->appendCssFile('icon');
$css->appendCssFile('nav');
$css->appendCssFile('layout');
$css->appendCssFile('buttons');
$html->svgSymbols( ['sign_out'] );
//html
?><header class='navbar'>
    <h6 class='title'><?= nav_title(); ?></h6>
    <a href='/logout' class='button icon primary surface l-tr-4'>
      <svg class='icon'>
        <use xlink:href='#sign_out'></use>
      </svg>
    </a>
  </header>
