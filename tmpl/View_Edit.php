<?php

foreach ($data as $datas){
    extract($datas);
}
?>

<br><h1 align="center">Редактировать новость</h1><br><br><br>

<div class="add_form">
    <form method="post" action="http://MVC/News/action_edit_news?id=<?=$_POST['id']?>" enctype=multipart/form-data>
        <p>Заголовок статьи</p>
        <input type="text" name="title" value="<?=$title?>"><br><br>
        <p>Описание статьи</p>
        <input type="text" name="description" value="<?=$description?>"><br><br>
        <p>Текст статьи</p>
        <textarea name="article" cols="90" rows="20"> <?=$article?> </textarea><br><br>
        <p>Дата размещения статьи</p>
        <input type="text" name="date" value="<?=$date?>"><br><br>
        <p>Автор</p>
        <input type="text" name="author" value="<?=$author?>"><br><br>
        <p>Фотография к статье</p>
        <input type=file name='images'><br><br>
        <input type="submit" value="Разместить статью">
    </form>
</div>