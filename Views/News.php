<?php

namespace Views;

class News extends View{
    function index($data) {
        $this->loadHeader();
        $this->loadLeftBar();
        include_once("tmpl/View_News.php");
        $this->loadRightBar();
        $this->loadFooter();
    }
    function add_news() {
        $this->loadHeader();
        $this->loadLeftBar();
        include_once("tmpl/View_Add_News.php");
        $this->loadRightBar();
        $this->loadFooter();
    }
    function action_add_news() {
        $this->loadHeader();
        $this->loadLeftBar();
        include_once("tmpl/View_Action_Add_News.php");
        $this->loadRightBar();
        $this->loadFooter();
    }
    function delete_news_list($data) {
        $this->loadHeader();
        $this->loadLeftBar();
        include_once("tmpl/View_Delete.php");
        $this->loadRightBar();
        $this->loadFooter();
    }
    function delete_news($data) {
        $this->loadHeader();
        $this->loadLeftBar();
        include_once("tmpl/View_Action_Delete.php");
        $this->loadRightBar();
        $this->loadFooter();
    }
    function article($data) {
        $this->loadHeader();
        $this->loadLeftBar();
        include_once("tmpl/View_Article.php");
        $this->loadRightBar();
        $this->loadFooter();
    }
    function edit_news($data) {
        $this->loadHeader();
        $this->loadLeftBar();
        include_once("tmpl/View_Edit.php");
        $this->loadRightBar();
        $this->loadFooter();
    }
    function edit_list($data) {
        $this->loadHeader();
        $this->loadLeftBar();
        include_once("tmpl/View_Edit_List.php");
        $this->loadRightBar();
        $this->loadFooter();
    }
    function action_edit_news($data) {
        $this->loadHeader();
        $this->loadLeftBar();
        include_once("tmpl/View_Action_Edit_News.php");
        $this->loadRightBar();
        $this->loadFooter();
    }

}