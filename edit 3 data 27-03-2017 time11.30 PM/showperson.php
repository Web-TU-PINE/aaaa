<html lang="en">
<!--<![endif]-->
    <head>
        <title>Home</title>
    <?php
        include('include/head-tag.php');
    ?>
    </head>
    <body>

         <!--START HOME SECTION-->
        <div id="home-sec">
            <div class="img-head">
                <img src="assets/img/logo.gif">
            </div>
        </div>
        <!--END HOME SECTION-->
       <!--START NAV SECTION-->
         <?php
            include('include/MENU.php');
        ?>
        <!--END NAV SECTION-->

          <!-- Call to Action Well -->
        <div class="row">
            <div class="col-lg-12">
                <div class="well text-center">
                   บุคลากรมหาวิทยาลัยธรรมศาสตร์ ศูนย์พัทยา
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->


            <?php
            include('Logig/ManagePerson.php');
                    $obj = new ManagePerson;
                    $row = $obj->Select_person($_GET['id']);

            ?>
        <div class="row">
        <div class="showNew col-md-8">

             <p>
             </p>
                <p>  <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ตำแหน่ง</h5><?php
                         echo $row['position'];
                    ?>
                    </p>

               <p> <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ชื่อ-นามสกุล</h5><?php
                        echo $row['name']; echo " "; echo $row['lastname'];
                   ?>
                   </p>


          </p>

            <div class="  col-md-8 ">
                 <?php
                    //$url=$row['nameimg'];
                        //echo "$url";
                        //echo "<img src='C:/xampp/htdocs/www/v4/aj.tai/ajtai/Image/".$row['nameimg']."'/>";
                 $url="Logig/Image/".$row['name_img'];
                 // <!-- echo "<a href='View.php?video=$url'>$name</a><br>"; -->
                 echo "<img src='$url' width='200' height='200'/>";
                    ?>

            </div>
            </div>
            <div class="showTabNew col-md-4">

                   <?php


                   
            ?>
            </div>

        </div>




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


    <!-- Script to Activate the Carousel -->

        <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>


    </body>
</html>
