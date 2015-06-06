<?php
namespace Controllers;
class Login extends Controller {
    function index(){
        $this->model = new \Models\Login();
        $this->model->get_data();

    }

}