<html>

    <head>
        <title>Edit_news</title>
       <?php

                include('StyleHandle.css');
        ?>


    </head>
    <body>

        <?php
         include('../Logig/ManageNews.php');
        $obj = new ManageNews;
        if(isset($_POST['submitEditNews'])&&isset($_GET['id'])){
            if(isset($_POST)){
            echo $obj->Edit_News($_POST['header'],$_POST['content'],$_GET['id'],$_POST['image']);
            }
        }else{
            echo "Noooo";
        }
        $row = $obj->Select_News($_GET['id']);
        ?>

        <h2>Edit_News</h2>

        <form class="form" method="post" action="#">
            <p class="name">

                <input type="text" name="header" id="header"
                 placeholder="header news" value="<?php  echo $row['header'];?>" />
                <label for="header">หัวข้อข่าว</label>
            </p>
            <p class="content">

                <textarea type="text" name="content" id="content"    placeholder="content news" >
                <?php
                    echo $row['content'];

                    ?>
                    </textarea>
            </p>
           Select Main Image:
                <input type="file" name="image"/><br><br>
                <input type="submit" name="submitEditNews" value="Edit News"/>
        </form>

    </body>
</html>
