<?php
/**
 * Classe que implementa la cache de continguts
 * @since 1.3
 */
class qibdip_cache {
    private $cachetime = 3600;
    private $cachedir = './cache/';
    private $cacheext = '.html';

    public function setCacheTime($new) {
        $this->cachetime=$new;
    }
    public function setCacheDir($new) {
        $this->cachedir=$new;
    }
    public function setCacheExt($new) {
        $this->cacheext=$new;
    }
    public function showCacheInfo() {
        print_r($this);
    }
    public function getURL($url) {
        if (!file_exists($this->cachedir)):
            mkdir($this->cachedir);
        endif;
        $time=time();
        $fitxer=md5($url).$this->cacheext;
        $nomcomplet=$this->cachedir.$fitxer;
        $updatetime=(file_exists($nomcomplet))?filemtime($nomcomplet):0;
        if($updatetime+$this->cachetime<$time):
            $contingut=file_get_contents($url);
            file_put_contents($nomcomplet, $contingut);
        endif;
        readfile($nomcomplet);
        echo "final getURL";
    }
}
?>
