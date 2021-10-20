<?php
$css->appendCssFile('icon');
$css->appendCssFile('nav');
$css->appendCssFile('layout');
$css->appendCssFile('buttons');
$html->svgSymbols( ['sign_in'] );
//html
?><header class='navbar'>
    <h6 class='title'><?= nav_title(); ?></h6>
    <a href='#auth' class='button icon primary surface l-tr-4'>
      <svg class='icon'>
        <use xlink:href='#sign_in'></use>
      </svg>
    </a>
  </header>
