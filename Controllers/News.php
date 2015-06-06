<?php
namespace Controllers;
class News extends  Controller {
    function __construct(){
       $this->model = new \Models\News();
       $this->view = new \Views\News();
    }
    function index ()
    {
        $data=$this->model->get_data();
        $this->view->index($data);
    }
    function add_news(){
        $this->view->add_news();
    }
    function action_add_news(){
        $data=$this->model->add_news();
        $this->view->action_add_news();
    }
    function news_list(){
        $data=$this->model->delete_news_list();
        $this->view->delete_news_list($data);
    }
    function delete_news(){
        $data=$this->model->delete_news();
        $this->view->delete_news($data);
    }
    function article(){
        $data=$this->model->article();
        $this->view->article($data);
    }
    function edit_news(){
        $data=$this->model->edit_news();
        $this->view->edit_news($data);
    }
    function news_edit_list(){
        $data=$this->model->news_edit_list();
        $this->view->edit_list($data);
    }
    function action_edit_news(){
        $data=$this->model->action_edit_news();
        $this->view->action_edit_news($data);
    }
}

