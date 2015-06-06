<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 18.05.2015
 * Time: 21:32
 */

namespace Views;


class User extends View {
function new_user(){
    $this->loadHeader();
    $this->loadLeftBar();
    include_once("tmpl/View_New_User.php");
    $this->loadRightBar();
    $this->loadFooter();
}
    function action_new_user(){
        $this->loadHeader();
        $this->loadLeftBar();
        include_once("tmpl/View_Action_New_User.php");
        $this->loadRightBar();
        $this->loadFooter();
    }
} 