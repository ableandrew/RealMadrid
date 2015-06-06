<?php

namespace Views;

class Mail extends View
{
    function index()
    {
        $this->loadHeader();
        $this->loadLeftBar();
        include_once("tmpl/View_Mail.php");
        $this->loadRightBar();
        $this->loadFooter();
    }

    function send_mail($data)
    {
        $this->loadHeader();
        $this->loadLeftBar();
        include_once("tmpl/View_Action_Mail.php");
        $this->loadRightBar();
        $this->loadFooter();
    }
}