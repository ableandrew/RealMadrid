<br><h1 align="center">Добавить новость</h1><br><br><br>

<div class="add_form">
<form method="post" action="http://MVC/News/action_add_news" enctype=multipart/form-data>
    <p>Заголовок статьи</p>
    <input type="text" name="title"><br><br>
    <p>Описание статьи</p>
    <input type="text" name="description"><br><br>
    <p>Текст статьи</p>
    <textarea name="article" cols="90" rows="20"></textarea><br><br>
    <p>Дата размещения статьи</p>
    <input type="text" name="date"><br><br>
    <p>Автор</p>
    <input type="text" name="author"><br><br>
    <p>Фотография к статье</p>
    <input type=file name='images'><br><br>
    <input type="submit" value="Разместить статью">
</form>
</div>
