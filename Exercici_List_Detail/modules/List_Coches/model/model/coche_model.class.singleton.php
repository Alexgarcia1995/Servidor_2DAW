<?php

$path = $_SERVER['DOCUMENT_ROOT'] . '/Servidor_2DAW/Exercici_List_Detail/';
define('SITE_ROOT', $path);
require(SITE_ROOT . "modules/List_Coches/model/BLL/coche_bll.class.singleton.php");

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

    public function list_coches() {
        return $this->bll->list_coches_BLL();
    }
    public function list_coche($data) {
        return $this->bll->list_coche_BLL($data);
    }
}
