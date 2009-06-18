<?php
/*
Plugin Name: GetUserAgent
Version: 0.1
Plugin URI: http://bloggs.be/
Description: Viser lenke til twitter hash (#) tagger søk
Author: Rune Gulbrandsøy
Author URI: http://bloggs.be/rune/

  Copyright 2009 Rune (http://bloggs.be/rune/)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/*
Hvordan bruke dette innstikket
===============================

Det er ikke laget en admin meny, da dette egentlig ikke trenger en admin meny...
Som vanlig laster du opp innstikket til /wp-content/plugins og går til admin siden din og
aktiverer innstikket.

Du kan bruke innstikket på følgende måte;

Bruk denne som en del av din(e) egne innstikk. For å finne ut hvilken nettleser dine besøkende
bruker, lar du en variabel få ressultatet fra nettleser rutinen; $leser = nettleser($data); Med 
denne inneholder variabelen nå ID på nettleseren. Du kan nå jobbe videre med f.eks å laste forskjellige
stilsett (CSS) avhengig av hvilken nettleser som er på besøk.

================================

Lykke til! Bruk http://norskwpu.net til spørsmål

*/

function nettleser($data){
global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;
$nettleser = '';
	if($is_lynx) $data_nettleser[] = 'lynx';
	elseif($is_gecko) $data_nettleser[] = 'gecko';
	elseif($is_opera) $data_nettleser[] = 'opera';
	elseif($is_NS4) $data_nettleser[] = 'ns4';
	elseif($is_safari) $data_nettleser[] = 'safari';
	elseif($is_chrome) $data_nettleser[] = 'chrome';
	elseif($is_IE) $data_nettleser[] = 'ie';
	else $data_nettleser[] = 'unknown';
	if($is_iphone) $data_nettleser[] = 'iphone';
	for (reset($data_nettleser); list($key, $value) = each($data_nettleser);) {
 		$nettleser .= $value;
 		}
$data .= $nettleser;

return $data;
}
    
function brukerdata(){

$leser = nettleser($data);
echo $leser;
}

?>