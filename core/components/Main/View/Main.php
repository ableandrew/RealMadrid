<?php

namespace Views;

class Main extends View{
    function index() {
        $this->loadHeader();
        $this->loadLeftBar();
        include_once("tmpl/View_Main.php");
        $this->loadRightBar();
        $this->loadFooter();
    }
}