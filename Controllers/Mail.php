<?php

namespace Controllers;

class Mail extends Controller {

    function index(){
        $this->view=new \Views\Mail;
        $this->view->index();
    }

    function action(){
        $this->model = new \Models\Mail();
        $data=$this->model->get_data();
        $this->view=new \Views\Mail;
        $this->view->send_mail($data);
    }


}