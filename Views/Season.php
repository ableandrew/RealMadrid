<?php

namespace Views;

class Season extends View{
    function index() {
        $this->loadHeader();
        $this->loadLeftBar();
        include_once("tmpl/View_Season.php");
        $this->loadRightBar();
        $this->loadFooter();
    }
}