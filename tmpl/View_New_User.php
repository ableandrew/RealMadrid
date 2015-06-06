<br><h1 align="center">Регистрация нового пользователя</h1><br><br><br>

<div class="add_form">
    <form method="post" action="http://MVC/User/action_new_user" enctype=multipart/form-data>
        <p>Логин</p>
        <input type="text" name="login"><br><br>
        <p>Пароль</p>
        <input type="password" name="password"><br><br>
        <p>Аватарка</p>
        <input type=file name='avatar'><br><br>
        <input type="submit" value="Зарегестрироваться">
    </form>
</div>