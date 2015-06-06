<?php
namespace Controllers;

class Stadium extends Controller{
    function index(){
        $this->view=new \Views\Stadium;
        $this->view->index();
    }

} 