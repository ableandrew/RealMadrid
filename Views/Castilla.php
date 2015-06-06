<?php

namespace Views;

class Castilla extends View{
    function index() {
        $this->loadHeader();
        $this->loadLeftBar();
        include_once("tmpl/View_Castilla.php");
        $this->loadRightBar();
        $this->loadFooter();
    }
}