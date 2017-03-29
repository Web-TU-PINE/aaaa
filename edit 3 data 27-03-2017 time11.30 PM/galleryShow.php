
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>

    <title>All Gallery</title>
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

        <!--PERSON SECTION START -->
        <section id="port-sec">
            <div class="container">
                <div class="row g-pad-bottom">
                    <div class="text-center g-pad-bottom">
                        <div class="col-md-12 col-sm-12 alert-info">
                          <h2>ภาพกิจกรรม</h2>
                        </div>

        <div class="container">
            <div class="row">
                <?php

                  include('Logig/ManageGallery.php');
                  // $obj = new ManageNews;
                  // echo $obj->ShowTop3News(6,7);
                    $obj = new ManageGallery;
             foreach($obj->ShowAllgalleryImage($_GET['id']) as $value){

                 echo "<div class='col-md-2'>";
                  echo "<a data-fancybox='gallery' href='Logig/Image/".$value['name_img']."'>";
                  echo "  <img src='Logig/Image/".$value['name_img']."' height='200' width='200'/>";
                  echo "</a></div>";


                 }

               ?>

            </div>
            <!--row-->
        </div>

                    </div>
                </div>
            </div>
        </section>

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
    <!--Jquery-->
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
    <style type="text/css">
        .thumbnail{
            width: 100%;
            overflow: hidden;
        }
        img{
            -webkit-transition:all 0.5s ease;
        }
        img:hover{
            transform: scale(1.2);
        }
    </style>
         <script src="//code.jquery.com/jquery-3.1.1.min.js" type="text/javascript"></script>
        <link  href="assets/dist/jquery.fancybox.css" rel="stylesheet">
         <script src="assets/dist/jquery.fancybox.js"></script>

    </body>
</html>
