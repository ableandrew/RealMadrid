<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 19.05.2015
 * Time: 22:58
 */

namespace Controllers;

class Api extends Controller
{
    function __construct()
    {
        $this->model = new \Models\Api();
    }
    function post()
    {
    }
    function get($urlPath)
    {
        $obj = new \Models\Api();
        if (method_exists($obj, "get_" . $urlPath[3])) {
            $method = "get_" . $urlPath[3];
            $data = $obj->$method();
            echo "<pre>";
            print_r($data);
            echo "</pre>";
        }
    }
}





