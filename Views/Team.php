<?php

namespace Views;

class Team extends View{
    function index() {
        $this->loadHeader();
        $this->loadLeftBar();
        include_once("tmpl/View_Team.php");
        $this->loadRightBar();
        $this->loadFooter();
    }
}