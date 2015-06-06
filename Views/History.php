<?php

namespace Views;

class History extends View{
    function index() {
        $this->loadHeader();
        $this->loadLeftBar();
        include_once("tmpl/View_History.php");
        $this->loadRightBar();
        $this->loadFooter();
    }
}