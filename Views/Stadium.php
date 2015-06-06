<?php

namespace Views;

class Stadium extends View{
    function index() {
        $this->loadHeader();
        $this->loadLeftBar();
        include_once("tmpl/View_Stadium.php");
        $this->loadRightBar();
        $this->loadFooter();
    }
}