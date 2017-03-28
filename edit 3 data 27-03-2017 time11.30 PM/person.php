<!DOCTYPE html>

<html lang="en">
<!--<![endif]-->
<head>

    <title>PERSONAL</title>
   <?php
        include('include/head-tag.php');
    ?>
   </head>
    <body>

         <!--START HOME SECTION-->
        <div class="home-sec">

                <img src="assets/img/logo1.jpg" width="100%" height="100%">

        </div>
        <!--END HOME SECTION-->


       <!--START NAV SECTION-->
         <?php
            include('include/MENU.php');
        ?>
        <!--END NAV SECTION-->

        <!--PERSON SECTION START -->
        <!-- <div class="row">
              <div class="col-md-10" style="text-align:center;">
                <div class="col-md-4">
                    <img class="img-person" src="assets/img/logo1.jpg" width="300" height="430"/>
                </div>
                <div class="col-md-12">

                </div>
              </div>
        </div> -->
        <?php
         include('Logig\ManagePerson.php');
                $obj = new ManagePerson;
            if(isset($_GET['del'])){
                $obj->Del_person($_GET['del']);
        }
        ?>
        <!--Start Show Person-->
        <div class="row">
            <?php

            foreach($obj->ShowAllperson() as $value){
                echo "<div class='col-md-10' style='text-align:center;margin-bottom:30px;'>";
                echo "<div class='col-md-3'></div><div class='col-md-2' >
                    <img class='img-person' src='Logig/Image/".$value['nameimg']."' width='200' height='280'/>
                    </div>";
                echo "<div class='box-person col-md-4' style='padding-top:100px;'>";
                echo "Name : ".$value['name']." &nbsp; &nbsp;".$value['lastname']."<br><br>";
                echo "ตำแหน่ง : ".$value['position']."<br><br>";
                if(isset($_GET['status'])){
                    if($_GET['status']=='admin'){
                        echo "<a class='btn btn-success'  href='Admin/edit_person.php?id=".$value['id']."'>Edit</a>&nbsp";
                         echo "<a class='btn btn-danger' href='?del=".$value['id']."'>Delete</a>";
                    }
                }
                echo "</div></div>";
                echo "<div class='col-md-3'></div> <br><br><br>";
            }
            ?>
        </div>
        <!--End  Show Person-->

        <!--START FOOTER-->
        <div class="col-md-12 footer">
        <?php
            include('include/FOOTER.php');
        ?>
        </div>
        <!--END FOOTER-->

    <?php
            include('include/script.php');
        ?>

    </body>
</html>
