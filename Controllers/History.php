<?php

namespace Controllers;
class History extends Controller {
   function index(){
       $this->view=new \Views\History;
       $this->view->index();

}

} 