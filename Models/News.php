<?php

namespace Models;

class News extends Model
{


    function get_data()
    {
        $array = $this->db->select("news", "", "", "id", "true", "5");
        return $array;
    }

    function add_news()
    {
        $tmp_name = $_FILES['images']['tmp_name'];

        $size=getimagesize($_FILES['images']['tmp_name']);
        switch ($size["mime"]) {
            case "image/png":
                $res = imagecreatefrompng($_FILES['images']['tmp_name']);
                break;
            case "image/jpeg":
                $res = imagecreatefromjpeg($_FILES['images']['tmp_name']);
                break;
        }
        $new_img=imagecreatetruecolor("500","300");
        imagecopyresampled($new_img,$res,0,0,0,0,500,300,$size[0],$size[1]);
        switch ($size["mime"]){
            case "image/png":
                $res=imagepng($new_img,$_FILES['images']['tmp_name'],100);
                break;
            case "image/jpeg":
                $res=imagejpeg($new_img,$_FILES['images']['tmp_name'],100);
                break;}

        $name = "images/" . $_FILES['images']['name'];
        (copy($tmp_name, $name));
        $file_names = $name;

        $this->db->insert("news", array("title" => $_POST['title'], "description" => $_POST['description'], "article" => $_POST['article'],
            "date" => $_POST['date'], "author" => $_POST['author'], "imagepath" => $file_names));
        return true;
    }

    function delete_news_list()
    {
        $array = $this->db->select("news", "", "title,id");
        return $array;
    }

    function delete_news()
    {
        $this->db->delete("news", array('id' => $_POST['id']));
        return true;
    }

    function article()
    {
        $array = $this->db->select("news", array('id' => $_GET['newsID']), "");
        return $array;
    }

    function edit_news()
    {

        $array = $this->db->select("news", array('id' => $_POST['id']));
        return $array;
    }

    function news_edit_list()
    {
        $array = $this->db->select("news", "", "title,id");
        return $array;
    }

    function action_edit_news()
    {
        $tmp_name = $_FILES['images']['tmp_name'];
        $size=getimagesize($_FILES['images']['tmp_name']);
        switch ($size["mime"]) {
            case "image/png":
                $res = imagecreatefrompng($_FILES['images']['tmp_name']);
                break;
            case "image/jpeg":
                $res = imagecreatefromjpeg($_FILES['images']['tmp_name']);
                break;
        }
        $new_img=imagecreatetruecolor("500","300");
        imagecopyresampled($new_img,$res,0,0,0,0,500,300,$size[0],$size[1]);
        switch ($size["mime"]){
            case "image/png":
                $res=imagepng($new_img,$_FILES['images']['tmp_name'],100);
                break;
            case "image/jpeg":
                $res=imagejpeg($new_img,$_FILES['images']['tmp_name'],100);
                break;}
        $name = "images/" . $_FILES['images']['name'];
        (copy($tmp_name, $name));
        $file_names = $name;
        $this->db->update("news", array("title" => $_POST['title'], "description" => $_POST['description'], "article" => $_POST['article'],
            "date" => $_POST['date'], "author" => $_POST['author'], "imagepath" => $file_names) ,array('id' => $_GET['id']));

        return true;
    }
}