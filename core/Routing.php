<?php
namespace System;
class Routing
{
    static function loadPage()
    {
        $part = explode("/", preg_replace("/\?.*/", "", $_SERVER["REQUEST_URI"]));
        if (!$part[1]) {
            $part[1] = "Main";
        }
        if (!$part[2]) {
            $part[2] = "index";
        }
        $className = "\\Controllers\\" . $part[1];
        if (class_exists($className)) {
            $obj = new $className;
                $obj->$part[2]($part);
        }
    }
}
