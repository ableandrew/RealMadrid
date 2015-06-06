<?php
namespace Controllers;

class Team extends  Controller {
    function index ()
    {
        $this->view=new \Views\Team;
        $this->view->index();

    }
}

