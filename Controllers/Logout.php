<?php
namespace Controllers;

class Logout extends Controller{


        function index(){
            $this->model = new \Models\Logout();
            $this->model->get_data();

        }
    }
