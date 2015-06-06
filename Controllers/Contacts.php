<?php

namespace Controllers;

class Contacts extends Controller {
    function index(){
        $this->view=new \Views\Contacts;
        $this->view->index();
    }

} 