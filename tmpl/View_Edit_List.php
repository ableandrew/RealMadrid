<div>
<br><center><h1>Удаление или редактирование статьи</h1></center><br>
<form method="post" action="http://MVC/News/edit_news">
    <h2>Выберете статью для удаления/редактирования!!!</h2><br><br>

    <?php foreach ($data as $article){
        extract($article);
        ?>

  <input type="radio" name="id" value="<?=$id?>"><?=$title?><br>

    <?php }?>
    <br>

    <input type="submit" value="Edit">


</form>
    </div>