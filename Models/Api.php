<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 19.05.2015
 * Time: 23:02
 */

namespace Models;


class Api extends Model {
    function get_all_news(){
        $array=$this->db->select("news");
        return $array;
    }
    function get_news(){

        $array = $this->db->select("news", array('id' => $_GET['id']));

        if (!$array){
            return "Нет статьи с данным id, попробуйте другое значение id ";
        }
        else
        return $array;
    }
} 