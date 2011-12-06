<?php

/*
  Plugin Name: qibdip-basket
  Plugin URI: http://www.qibdip.com/
  Description: Permet obtenir informació de les pàgines de basketcatala.cat
  Version: 1.0
  Author: Marc Queralt
  Author URI: http://www.qibdip.com
*/

define('QIBDIP_BASQUET', 'qibdip_Basquet');
define('QIBDIP_BASQUET_URL_CLASSIFICACIO', 'http://www.basquetcatala.cat/competicions/resultats');

// Registrar el shortcode: [qibdip-basket-classificacio id="xxx"]
add_shortcode('qibdip-basket-classificacio', 'qibdip_basket_classificacio');
wp_register_script('qibdip-basket', plugin_dir_url(__FILE__) . 'qibdip_basket.js', 'jquery', '', true);
wp_enqueue_script("jquery"); 
wp_enqueue_script('qibdip-basket');

function qibdip_basket_classificacio($attr) {
    $text = "";
    if (isset($attr['id'])):
        $text.='<div id="qibdip_basket_container">';
        $text.=sprintf('<h2 id="qibdip_basket_titol">%s</h2>', __("Classificació", QIBDIP_BASQUET));
        $text.='<div id="qibdip_basket_darrera">';
        $text.='<input type="hidden" id="qibdip_id" value="'.$attr['id'].'"/>';
        $text.='<input type="hidden" id="qibdip_parser_url" value="'.plugin_dir_url(__FILE__).'"/>';
        $text.='</div>';
        $text.='<div id="qibdip_basket_classificacio">';
        $text.='<input type="hidden" id="qibdip_id" value="'.$attr['id'].'"/>';
        $text.='<input type="hidden" id="qibdip_parser_url" value="'.plugin_dir_url(__FILE__).'"/>';
        $text.='</div>';
        $text.='<div id="qibdip_basket_propera">';
        $text.='<input type="hidden" id="qibdip_id" value="'.$attr['id'].'"/>';
        $text.='<input type="hidden" id="qibdip_parser_url" value="'.plugin_dir_url(__FILE__).'"/>';
        $text.='</div>';
        $text.='<a id="quibdip_link_classificacio" href="' . QIBDIP_BASQUET_URL_CLASSIFICACIO . '/' . $attr['id'] . '">' . __('Veure la classificació a basquetcatala.cat', QIBDIP_BASQUET) . '</a>';
        $text.='</div>';
    endif;
    return $text;
}
?>