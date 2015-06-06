<?php

namespace Models;
class Mail extends Model{
    function get_data(){

        $to="upakovka002@gmail.com";
        $subject=$_POST['mail_title'];
        $body=$_POST['mail_text'];
        if ((mail($to,$subject,$body))==true){
            return "Ваше письмо было успешно отправленно!";
        }
        else{
            return "Ваше письмо не было отправленно, попробуйте еще раз позже!";
        }
    }
} 