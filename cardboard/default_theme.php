<?php

//framework_dir
//icon_dir
//css_dir
//component_dir
/*** this is a config file for getting the css theme for a given website ***/
/** Unique to a given website - not a helper file!! ***/
/***theme varables for changing the website style ***/
//function css_theme()
//{
//flag as a dependancy!!! class?? mdc class??
//include css elevation

//need to include the z axis
// excluded from shapes - App Bar, Banner, Checkbox, Divider, Radio button, bottom sheet, Tabs *}

$t['font_family'] = '-apple-system, BlinkMacSystemFont, “Segoe UI”, “Roboto”, “Oxygen”, “Ubuntu”, “Cantarell”, “Fira Sans”, “Droid Sans”, “Helvetica Neue”, sans-serif';
$t['small_radius'] = '4px';  //   buttons, chips, textfield, snackbar, tooltip - table!
$t['medium_radius'] = '1vh'; //  card, dialogue, menu
$t['large_radius'] = '0px';  //  {*backdrop, table, modal, nav drawer, side sheet *}

// states_primary
$t['primary']              = $purple[800];
$t['primary_hover']        = $white_alpha[8];
$t['primary_focus']        = $white_alpha[67];
$t['primary_hover_focus']  = $white;
$t['primary_active']       = $black_alpha[16];
$t['primary_checked']      = $black_alpha[4];

$t['secondary']            = $purple[100];
$t['background']           = $purple[50];
$t['valid']                = $green[900];
$t['error']                = $red[900];

/***surface is the cardboard****/
$t['surface']              = $green[900];
$t['surface_hover']        = $black_alpha[4];
$t['surface_focus']        = $black_alpha[12];
$t['surface_hover_focus']  = $black_alpha[16];

/***inks on the surface ***/
$t['on_primary']           = $white;
$t['on_secondary']         = $white;
$t['on_error']             = $white;
$t['on_surface']           = $black_alpha[87];
$t['on_surface_medium']    = $black_alpha[60];
$t['on_surface_disabled']  = $black_alpha[38];
$t['on_background']        = $black;

/*** motion variables ***/
$t['decelerated_easing']   = 'cubic-bezier(0.0, 0.0, 0.2, 1)';
$t['accelerated_easing']   = 'cubic-bezier(0.4, 0.0, 1, 1)';


//return $t;
//}
