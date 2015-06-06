<?php
namespace Models;
class Login extends Model
{
    function get_data()
    {
        if (!empty($_POST['login']) && !empty($_POST['password'])) {
            $pass = $this->db->select('users',array('login' => $_POST['login']));
            if (!empty($pass)) {
                foreach ($pass as $value) {
                    extract($value);
                }
                if ($password == $_POST['password']) {
              setcookie('user', $rules);
                    setcookie('name', $login);
                    setcookie('avatar', $avatar);

              header("Location: http://MVC/Main");
                }
                else {
                }
            }
        }
    }
}