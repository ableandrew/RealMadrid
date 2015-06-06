<?php
namespace Views;
class View {
    function loadHeader() {
        include_once("tmpl/header.php");
    }
    function  loadLeftBar(){
        include_once("tmpl/leftbar.php");
    }
    function  loadRightBar(){
        include_once("tmpl/rightbar.php");
    }
    function  loadFooter(){
        include_once("tmpl/footer.php");
    }
} 