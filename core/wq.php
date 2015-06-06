<?php
function get_data()
{
    $urlPath = explode("/", preg_replace("/\?.", "", $_SERVER["REQUEST_URI"]));
    $com = $urlPath[6];
    if ($com == "oneArticle" AND ($_GET[id])) {
        $a = new Model_api();
        $array = $a->select('news', array(id => $_GET[id]));
        return $array;
    } elseif ($com == "allArticle" AND (!$_GET[id])) {
        $a = new Model_api();
        $array = $a->select('news');
        return $array;
    } elseif ($com == "user_login" AND ($_GET[login]) AND ($_GET[password])) {
        $a = new Model_api();
        $array = $a->select('users', array(/*login => $_GET[login],*/
                password => $_GET[password]), id);
        return $array;
    } else {
        return "Error 201. read the documentation more attentively";
    }
}