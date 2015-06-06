<?php
namespace Controllers;

class Castilla extends Controller{
    function index(){
       $this->view=new \Views\Castilla;
        $this->view->index();
    }
} 