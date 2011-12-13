<?php

/*
Plugin Name: qibdip-basket
Plugin URI: http://www.qibdip.com/
Description: Permet obtenir informació de les pàgines de basketcatala.cat
Version: 1.2
Author: Marc Queralt
Author URI: http://www.qibdip.com
*/

define('QIBDIP_BASQUET', 'qibdip_Basquet');
define('QIBDIP_BASQUET_URL_CLASSIFICACIO', 'http://www.basquetcatala.cat/competicions/resultats');
define('QIBDIP_BASQUET_URL_CALENDARI_TOTS','http://www.basquetcatala.cat/partits/llistatpartitsclub');
define('QIBDIP_BASQUET_URL_CALENDARI_MES','http://www.basquetcatala.cat/partits/calendari_club_mensual');

// Registrar el shortcode: [qibdip-basket-classificacio id="xxx"]
add_shortcode('qibdip-basket-classificacio', 'qibdip_basket_classificacio');
add_shortcode('qibdip-basket-calendari-tots','qibdip_basket_calendari_tots');
add_shortcode('qibdip-basket-calendari','qibdip_basket_calendari');

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
/**
 * @since 1.2
 */
function qibdip_basket_calendari_tots($attr) {
    $text = "";
    if (isset($attr['id'])):
        $text.='<div id="qibdip_basket_container">';
        $text.='<div id="qibdip_basket_calendari_tots">';
        $text.='<input type="hidden" id="qibdip_id" value="'.$attr['id'].'"/>';
        $text.='<input type="hidden" id="qibdip_parser_url" value="'.plugin_dir_url(__FILE__).'"/>';
        $text.='</div>';
        $text.='</div>';
        $text.='<a id="quibdip_link_calendari_tots" href="' . QIBDIP_BASQUET_URL_CALENDARI_TOTS . '/' . $attr['id'] . '">' . __('Veure el calendari complet a basquetcatala.cat', QIBDIP_BASQUET) . '</a>';
    endif;
    return $text;
}
function qibdip_basket_calendari($attr) {
    $text = "";
    if (isset($attr['id'])):
        $text.='<div id="qibdip_basket_container">';
        $text.='<div id="qibdip_basket_calendari">';
        $text.='<input type="hidden" id="qibdip_id" value="'.$attr['id'].'"/>';
        $text.='<input type="hidden" id="qibdip_parser_url" value="'.plugin_dir_url(__FILE__).'"/>';
        $text.='</div>';
        $text.='</div>';
        $text.='<a id="quibdip_link_calendari" href="' . QIBDIP_BASQUET_URL_CALENDARI_MES . '/' . $attr['id'] . '">' . __('Veure el calendari del mes <span class="el_mes">en curs</span> a basquetcatala.cat', QIBDIP_BASQUET) . '</a>';
    endif;
    return $text;
}
?>