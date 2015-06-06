<?php
namespace Views;
class Login extends View{
    function index() {
        $this->loadHeader();
        $this->loadLeftBar();
        include_once("tmpl/View_Main.php");
        $this->loadRightBar();
        $this->loadFooter();
    }
}