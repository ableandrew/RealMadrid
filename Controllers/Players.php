<?php
namespace Controllers;

class Players extends Controller {
    function index(){
        $this->view=new \Views\Players;
        $this->view->index();
    }

} 