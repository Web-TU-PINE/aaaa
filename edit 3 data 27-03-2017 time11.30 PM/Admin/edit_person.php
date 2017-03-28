<html>

    <head>
        <title>Edit_news</title>
       <?php

                include('StyleHandle.css');
        ?>


    </head>
    <body>

        <?php
         include('../Logig/ManagePerson.php');
        $obj = new ManagePerson;
        if(isset($_POST['submitPerson'])&&isset($_GET['id'])){
            if(isset($_POST)){
            echo $obj->Edit_person($_POST['position'],$_POST['name'],$_GET['id'],$_POST['lastname'],$_POST['image']);
            }
        }else{
            echo "Noooo";
        }
        $row = $obj->Select_person($_GET['id']);
        ?>

        <h2>Edit_News</h2>

        <form class="form" method="post" action="#">
            <p class="name">

                <input type="text" name="position" id="position"
                 placeholder="header news" value="<?php  echo $row['position'];?>" />
                <label for="header">ตำแหน่ง</label>
            </p>
            <p class="name">

                <input type="text" name="name" id="name"
                 placeholder="header news" value="<?php  echo $row['name'];?>" />
                <label for="header">ชื่อ</label>
            </p>
            <p class="name">

                <input type="text" name="lastname" id="lastname"
                 placeholder="header news" value="<?php  echo $row['lastname'];?>" />
                <label for="header">นามสกุล</label>
            </p>

           Select Main Image:
                <input type="file" name="image" value="<?php "../assets/css/img".$row['nameimg']?>"/><br><br>
                <input type="submit" name="submitPerson" value="Edit Person"/>
        </form>

    </body>
</html>
