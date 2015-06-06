
<?php

foreach ($data as $news) {
    extract($news);
    ?>
    <div class="news_list">
<br><center><h1><a href="http://MVC/News/article/?newsID=<?=$id?>"><?=$title?></a></h1></center><br>
    <h3 align="center"><?=$description?></h3><br>
    <center> <img class="news_img" src="http://MVC/<?=$imagepath?>"> </center><br>

    <h5>Дата публикации - <?=$date?></h5><h5>Автор - <?=$author?></h5>
<hr>
    </div>



<?php }
