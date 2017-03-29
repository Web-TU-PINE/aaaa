<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>

    <title>Gallery</title>
   <?php
        include('include/head-tag.php');
    ?>
   </head><!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>

    <title>Gallery</title>
   <?php
        include('include/head-tag.php');
    ?>
   </head>
    <body>
         <!--START HOME SECTION-->
         <?php
             include('include/imageHeade.php');
         ?>
        <!--END HOME SECTION-->


       <!--START NAV SECTION-->
       <?php
            include('include/MENU.php');
            include('Logig\ManageGallery.php');
                   $obj = new ManageGallery;
               if(isset($_GET['del'])){
                   $obj->Del_gallery($_GET['del']);
            }
        ?>
        <!--END NAV SECTION-->

       <div class="row">
         <div class="col-md-12">
            <div class="text-center"><h1> กิจกรรม </h1></div>
         </div>
       </div>

       <div class="row">
        <div class="col-md-12"style="padding-left:20px;padding-right:20px;">
          <!-- <div class="item  active"> -->
          <div class="row" style="padding-left:120px;padding-r:10px; text-align:center;">
          <?php
            include('Logig/ManageGallery.php');
            // $obj = new ManageNews;
            // echo $obj->ShowTop3News(6,7);
              $obj = new ManageGallery;
       foreach($obj->ShowAllgallery() as $value){
           echo "<div class='col-md-4' >";
            echo "<h2>".$value['Activity']."</h2>";
            echo "<a class='btn btn-primary btn-lg' href='galleryShow.php?id=".$value['ActivityCode']."'>Read More >> </a>";
            if(isset($_GET['status'])){
                if($_GET['status']=='admin'){
                    echo "<a class='btn btn-success'  href='Admin/Edit_gallery.php?id=".$value['id']."'>Edit</a>&nbsp";
                     echo "<a class='btn btn-danger' href='?del=".$value['id']."'>Delete</a>";
                }
            }
            echo "</div>";

           }

         ?>
           </div>
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

    </body>
</html>

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

       <div class="row">
         <div class="col-md-12">
            <div class="text-center"><h1> กิจกรรม </h1></div>
         </div>
       </div>

       <div class="row">
        <div class="col-md-12"style="padding-left:20px;padding-right:20px;">
          <!-- <div class="item  active"> -->
          <div class="row" style="padding-left:120px;padding-r:10px; text-align:center;">
          <?php
            include('Logig/ManageGallery.php');
            // $obj = new ManageNews;
            // echo $obj->ShowTop3News(6,7);
              $obj = new ManageGallery;
       foreach($obj->ShowAllgallery() as $value){
           echo "<div class='col-md-4' >";
            echo "<h2>".$value['Activity']."</h2>";
            echo "<a class='btn btn-primary btn-lg' href='galleryShow.php?id=".$value['ActivityCode']."'>Read More >> </a>";
            echo "</div>";

           }

         ?>
           </div>
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

    </body>
</html>
