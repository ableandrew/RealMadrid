<?php
namespace Controllers;
class User extends Controller{
    function new_user(){
        $this->view=new \Views\User();
        $this->view->new_user();
    }
    function action_new_user(){
        $this->model = new \Models\User();
        $this->model->new_user();
        $this->view=new \Views\User();
        $this->view->action_new_user();
    }


} 