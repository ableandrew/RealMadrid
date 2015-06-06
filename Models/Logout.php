<?php

namespace Models;

class Logout extends Model{
    function get_data(){
        unset($_COOKIE['login']);
        unset($_COOKIE['password']);
        unset($_COOKIE['avatar']);
        setcookie('user',$_COOKIE['rules'],time()-1);
        setcookie('login',$_COOKIE['login'],time()-1);
        setcookie('avatar',$_COOKIE['avatar'],time()-1);
        header("Location: http://MVC/Main");
    }

} 