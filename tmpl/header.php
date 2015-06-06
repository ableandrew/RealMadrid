<!DOCTYPE html >

<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=windows-1251"/>
    <title>Real Madrid</title>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <link href="http://MVC/def.css" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" href="http://MVC/images/favicon.ico">

</head>
<body>
<div class="wrapper">
    <div class="header">
        <div class="logo">
            <img src="http://MVC/images/logos.gif" alt=""/>
        </div>
        <div class="top_navig">
            <div class="top_menu">
                <img src="http://MVC/images/logo.jpg" alt=""/>
                <ul>
                    <li><a class="button18" tabindex="0" href="http://MVC/News">News</a></li>
                    <li><a class="button18" tabindex="0" href="http://MVC/Team">Team</a></li>
                    <li><a class="button18" tabindex="0" href="http://MVC/Players">Players</a></li>
                    <li><a class="button18" tabindex="0" href="http://MVC/Season">Season</a></li>
                    <li><a class="button18" tabindex="0" href="http://MVC/Castilla">FC Castilla</a></li>
                </ul>
            </div>
            <div class="avtoriz">
                <?php
                if (!$_COOKIE["user"]) {

                    ?>
                    <form method='post' action="http://MVC/Login">
                        <p> LOGIN</p>
                        <input class="input" type='text' name='login'><br>

                        <p> Password</p>
                        <input class="input" type='password' name='password'><br><br>
                        <input type='submit' value='LOGIN'><br><br>
                    </form>
                    <a class="forgot" href='http://MVC/User/new_user'> Registration </a>&nbsp;&nbsp;  <a class="forgot" href='#'> Forgot
                        password? </a>
                <?php
                } else {
                    ?>
                    <h2>Hello, <?=$_COOKIE["name"]?></h2>
                    <img src="http://mvc/<?=$_COOKIE["avatar"]?>"/>
                    <h3><a class="forgot" href="http://MVC/Logout">Exit</a></h3>
                <?php } ?>
            </div>
        </div>


    </div>