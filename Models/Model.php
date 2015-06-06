<?php
namespace Models;
use System\DB;
class Model
{
    function __construct(){
       $this->db=new DB();
       /* $pdo=Model::instance();*/
    }

/*



/*
    static function instance(){
        static $pdo;
        if (!isset($pdo)) {
            $pdo = new PDO("mysql:host=localhost;dbname=real;charset=utf8", "root", "");
        }
        return $pdo;
    }*/
}
