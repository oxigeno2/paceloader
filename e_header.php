<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2014 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * Related configuration module - News
 *
 *
*/

if (!defined('e107_INIT')) { exit; }


if(deftrue('USER_AREA')) // prevents inclusion of JS/CSS/meta in the admin area.
{
	e107::js('paceloader', 'js/pace.min.js');      // loads e107_plugins/paceloader/js/paceloader.js on every page.

$pacecolor = e107::getPlugPref('paceloader', 'paceloader_color');
$pacetheme = e107::getPlugPref('paceloader', 'paceloader_theme');



	e107::css('paceloader', 'includes/themes/'.$pacecolor.'/pace-theme-'.$pacetheme.'.css');    // loads e107_plugins/paceloader/css/paceloader.css on every page
	//e107::meta('keywords', 'paceloader,words');   // sets meta keywords on every page.
}



