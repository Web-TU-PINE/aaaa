<html>

    <head>
        <title>Edit_person</title>
       <?php

                include('StyleHandle.css');
        ?>


    </head>
    <body>

        <?php
         include('../Logig/ManagePerson.php');
        $obj = new ManagePerson;
        if(isset($_POST['submitEditPerson'])&&isset($_GET['id'])){
            if(isset($_POST)){
            echo $obj->Edit_person($_POST['position'],$_POST['name'],$_POST['lastname'],$_GET['id'],$_POST['image']);
            }
        }else{
            echo "Noooo";
        }
        $row = $obj->Select_person($_GET['id']);
        ?>

        <h2>Edit_person</h2>

        <form class="form" method="post" action="#">
            <p class="name">

                <input type="text" name="position" id="position"
                 placeholder="position" value="<?php  echo $row['position'];?>" />
                <label for="position">ตำแหน่ง</label>
            </p>
            <p class="name">

                <input type="text" name="name" id="name"
                 placeholder="name" value="<?php  echo $row['name'];?>" />
                <label for="name">ชื่อ</label>
            </p>
            <p class="name">

                <input type="text" name="lastname" id="lastname"
                 placeholder="lastname" value="<?php  echo $row['lastname'];?>" />
                <label for="lastname">นามสกุล</label>
            </p>

           Select Main Image:
           <input type="file" name="image"/><br><br>
           <input type="submit" name="submitEditPerson" value="Edit Person"/>
        </form>

    </body>
</html>
