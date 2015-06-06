<?php

namespace Views;

class Contacts extends View{
    function index() {
        $this->loadHeader();
        $this->loadLeftBar();
        include_once("tmpl/View_Contacts.php");
        $this->loadRightBar();
        $this->loadFooter();
    }
}