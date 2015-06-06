<?php

namespace Views;

class Players extends View{
    function index() {
        $this->loadHeader();
        $this->loadLeftBar();
        include_once("tmpl/View_Players.php");
        $this->loadRightBar();
        $this->loadFooter();
    }
}