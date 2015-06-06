<?php
namespace Controllers;

class Main extends Controller {
    function index (){
        $this->view = new \Views\Main();
        $this->view->index();
    }

} 