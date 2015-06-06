<div class="main_content">
    <div class="left_menu">
        <ul>
            <li><a href="http://MVC/Main" class="button18 left" >Main Page
                </a></li>
            <li><a href="http://MVC/History" class="button18 left">Club history
                </a></li>
            <li><a href="http://MVC/Stadium" class="button18 left">Santiago Bernabéu
                </a></li>
            <li><a href="http://MVC/Mail" class="button18 left">Send Mail
                </a></li>
            <li><a href="http://MVC/Contacts" class="button18 left">Contact
                </a></li>
            <img class="match_image"  src="http://MVC/images/match.jpg" alt=""/>
            <?php if ($_COOKIE["user"]==7){ ?>
                <li><a href="http://MVC/News/add_news" class="button18 left" >Add News
                    </a></li>
                <li><a href="http://MVC/News/news_edit_list" class="button18 left">Update News
                    </a></li>
                <li><a href="http://MVC/News/news_list?a=Delete" class="button18 left">Delete News
                    </a></li>
            <?php }?>
        </ul>
    </div>
    <div class="center_content">
        <div class="content">