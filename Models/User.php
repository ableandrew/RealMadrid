<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 18.05.2015
 * Time: 21:20
 */

namespace Models;


class User extends Model
{
    function new_user()
    {
        $tmp_name = $_FILES['avatar']['tmp_name'];
        $size=getimagesize($_FILES['avatar']['tmp_name']);
       switch ($size["mime"]) {
           case "image/png":
               $res = imagecreatefrompng($_FILES['avatar']['tmp_name']);
               break;
           case "image/jpeg":
               $res = imagecreatefromjpeg($_FILES['avatar']['tmp_name']);
               break;
       }
       $new_img=imagecreatetruecolor("130","130");
       imagecopyresampled($new_img,$res,0,0,0,0,130,130,$size[0],$size[1]);
       switch ($size["mime"]){
           case "image/png":
               $res=imagepng($new_img,$_FILES['avatar']['tmp_name'],100);
               break;
           case "image/jpeg":
               $res=imagejpeg($new_img,$_FILES['avatar']['tmp_name'],100);
               break;}
        $name = "images/avatar/" . $_FILES['avatar']['name'];
        copy($tmp_name, $name);
        $file_names = $name;
       $this->db->insert("users", array("login" => $_POST['login'], "password" => $_POST['password'], "avatar" => $file_names,
       "rules"=>1));
        return true;
    }
}
