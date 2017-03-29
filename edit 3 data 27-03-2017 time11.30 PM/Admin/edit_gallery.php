<html>

    <head>
        <title>Edit_news</title>
       <?php

                include('StyleHandle.css');
        ?>


    </head>
    <body>

        <?php
         include('../Logig/ManageGallery.php');
        $obj = new ManageGallery;
        if(isset($_POST['submitGallery'])&&isset($_GET['id'])){
            if(isset($_POST)){
            echo $obj->Edit_gallery($_POST['ActivityName'],$_POST['ActivityCode'],$_GET['id'],$_POST['name_img']);
            }
        }else{
            echo "Noooo";
        }
        $row = $obj->Select_gellery($_GET['id']);
        ?>

        <h2>Edit_gallery</h2>

        <form class="form" method="post" action="#">
            <p class="name">

                <input type="text" name="ActivityName" id="ActivityName"
                 placeholder="ActivityName" value="<?php  echo $row['ActivityName'];?>" />
                <label for="ActivityName">ตำแหน่ง</label>
            </p>


           Select Main Image:
                <input type="file" name="image" value="<?php "../assets/css/img".$row['name_img']?>"/><br><br>
                <input type="submit" name="submitgelley" value="Edit gellery"/>
        </form>

    </body>
</html>
