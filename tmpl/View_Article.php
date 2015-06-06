
<?php

foreach ($data as $news) {
    extract($news);

    ?>
    <div class="article">
    <br><center><h1><?=$title?></h1></center><br>

    <h3 align="center"><?=$description?></h3><br>

    <center><img class="news_img" src="http://MVC/<?=$imagepath?>"></center><br>
    <h2 align="center"><?=$article?></h2><br><br>
    <h5>Дата публикации - <?=$date?></h5>
    <h5>Автор - <?=$author?></h5>
        <hr>
    </div>




<?php }
