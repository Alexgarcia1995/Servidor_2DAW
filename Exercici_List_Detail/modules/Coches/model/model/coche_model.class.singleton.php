<?php

$path = $_SERVER['DOCUMENT_ROOT'] . '/Servidor_2DAW/Exercici_Alta_Dropdowns/';
define('SITE_ROOT', $path);
require(SITE_ROOT . "modules/Coches/model/BLL/coche_bll.class.singleton.php");

class coche_model{
    private $bll;
    static $_instance;

    private function __construct() {
        $this->bll = coche_bll::getInstance();
    }

    public static function getInstance() {
        if (!(self::$_instance instanceof self))
            self::$_instance = new self();
        return self::$_instance;
    }

    public function create_coche($arrArgument) {
        return $this->bll->create_coche_BLL($arrArgument);
    }
    public function obtain_countries($url){
        return $this->bll->obtain_countries_BLL($url);
    }

    public function obtain_provinces(){
        return $this->bll->obtain_provinces_BLL();
    }

    public Function obtain_cities($arrArgument){
        return $this->bll->obtain_cities_BLL($arrArgument);
    }
}
