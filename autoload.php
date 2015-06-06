<?php
include_once ("core/DB.php");
include_once ("core/Routing.php");
\System\Routing::loadPage();
function __autoload($className){
include_once($className.".php");
}