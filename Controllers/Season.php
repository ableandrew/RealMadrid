<?php
namespace Controllers;

class Season extends Controller{
    function index (){
        $this->view=new \Views\Season;
        $this->view->index();
    }

} 