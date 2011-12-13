<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
//echo("<pre>");
include_once('qibdip-cache.php');
$c=new qibdip_cache();
$c->setCacheDir('./cache/');
$c->setCacheTime(10);
//$c->showCacheInfo();
$url="http://www.xamba.cat";
$c->getURL($url);
//echo "\nfinal\n";
//echo("</pre>");
?>
