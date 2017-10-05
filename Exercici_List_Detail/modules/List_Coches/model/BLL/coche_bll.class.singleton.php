<?php

$path = $_SERVER['DOCUMENT_ROOT'] . '/Servidor_2DAW/Exercici_List_Detail/';
if (!defined('SITE_ROOT')) {
  define('SITE_ROOT', $path);
}
if (!defined('MODEL_PATH')) {
  define('MODEL_PATH', SITE_ROOT . 'model/');
}

require (MODEL_PATH . "Db.class.singleton.php");
require (SITE_ROOT . "modules/List_Coches/model/DAO/coche_dao.class.singleton.php");

class coche_bll {
    private $dao;
    private $db;
    static $_instance;

    private function __construct() {
        $this->dao = cocheDAO::getInstance();
        $this->db = Db::getInstance();
    }

    public static function getInstance() {
        if (!(self::$_instance instanceof self))
            self::$_instance = new self();
        return self::$_instance;
    }

    public function list_coches_BLL() {
        return $this->dao->list_coches_DAO($this->db);
    }
    public function list_coche_BLL($data) {
        return $this->dao->list_coche_DAO($this->db,$data);
    }

}
