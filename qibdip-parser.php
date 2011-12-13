<?php

define(QIBDIP_BASKET_TIMEOUT, 5);

/**
* retrieves a webpage based on its url
* @param string $url url to retrieve
* @return mixed an structured object containing html, info and error
* @uses curl_init
* @uses curl_setopt
* @uses curl_exec
* @uses curl_getinfo
* @uses curl_error
* @uses curl_close
* @since 1.3
*/
function qibdip_get_webpage($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, QIBDIP_TIMEOUT);

    $result['html'] = curl_exec($ch);
    $result['info'] = curl_getinfo($ch);
    $result['error'] = curl_error($ch);

    curl_close($ch);

    return $result;
}
function qibdip_escapsar($string,$tag){
    $resultat=stristr($string,$tag);
    return $resultat;
}
function qibdip_escuar($string,$tag){
    $pos=stripos($string, $tag);
    $resultat=substr($string,0,$pos).$tag;
    return $resultat;
}

define('QIBDIP_URL_CLASSIFICACIO', 'http://www.basquetcatala.cat/competicions/resultats/');
define('QIBDIP_URL_CALENDARI_TOTS','http://www.basquetcatala.cat/partits/llistatpartitsclub/');
define('QIBDIP_URL_CALENDARI_MES','http://www.basquetcatala.cat/partits/calendari_club_mensual/');


define('QIBDIP_CLASSIFICACIO_INICI','<table id="classificacio">');
define('QIBDIP_CLASSIFICACIO_FI','</table>');
$contingut = '';
if (isset($_GET['op']) && isset($_GET['id'])):
    $op = $_GET['op'];
    $id = $_GET['id'];
    switch ($op) {
        case 'classificacio':
            $url = QIBDIP_URL_CLASSIFICACIO . $id;
            break;
        case 'darrer':
            $url = QIBDIP_URL_CLASSIFICACIO . $id;
            break;
        case 'calendaritots':
            $url = QIBDIP_URL_CALENDARI_TOTS . $id;
            break;
        case 'calendari':
            $url = QIBDIP_URL_CALENDARI_MES . $id;
            break;
        default:
            break;
    }
    $web = qibdip_get_webpage($url);
    if ('' == $web['error']):
        $contingut=$web['html'];
    else:
        $contingut=$web['error'];
    endif;
endif;
echo ($contingut);
?>