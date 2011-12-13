<?php
include_once('qibdip-cache.php');

define('QIBDIP_URL_CLASSIFICACIO', 'http://www.basquetcatala.cat/competicions/resultats/');
define('QIBDIP_URL_CALENDARI_TOTS','http://www.basquetcatala.cat/partits/llistatpartitsclub/');
define('QIBDIP_URL_CALENDARI_MES','http://www.basquetcatala.cat/partits/calendari_club_mensual/');

$qibdip_cache=new qibdip_cache();
$qibdip_cache->setCacheTime(60*60*4);
if (isset($_GET['op']) && isset($_GET['id'])):
    $op = $_GET['op'];
    $id = $_GET['id'];
    switch ($op) {
        case 'classificacio':
            $url = QIBDIP_URL_CLASSIFICACIO . $id;
            $qibdip_cache->getURL($url);
            break;
        case 'darrer':
            $url = QIBDIP_URL_CLASSIFICACIO . $id;
            $qibdip_cache->getURL($url);
            break;
        case 'calendaritots':
            $url = QIBDIP_URL_CALENDARI_TOTS . $id;
            $qibdip_cache->getURL($url);
            break;
        case 'calendari':
            $url = QIBDIP_URL_CALENDARI_MES . $id;
            $qibdip_cache->getURL($url);
            break;
        default:
            break;
}
endif;
?>