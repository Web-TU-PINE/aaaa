<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
  <!-- <img src="http://placehold.it/1200x400"/> -->
<!--[if (gte IE 9)|!(IE)]><!-->
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
            include('MENU.php');
        ?>
        <!--END NAV SECTION-->
        
          <!-- Call to Action Well -->
        <div class="row">
            <div class="col-lg-12">
                <div class="well text-center">
                   ข่าวสารคณะวิศวกรรมมศาสตร์ มหาวิทยาลัยธรรมศาสตร์ ศูนย์พัทยา
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        
         
            <?php
            include('phpclass/ManageNews.php');
                    $obj = new ManageNews;
                    $row = $obj->Select_News($_GET['id']);
          
            ?>  
        <div class="row">
        <div class="showNew col-md-8">
            <div class="header ">
                <h1> <?php
                        echo $row['header']."<br><br>";
                    ?>
                    </h1>
            </div>
             <div class="content text-center col-md-8 ">
                <p> <?php
                        echo $row['content'];
                    ?>
                    </p>
            </div>
            <div class="  col-md-8 ">
                 <?php
                    //$url=$row['nameimg'];
                        //echo "$url";
                        //echo "<img src='C:/xampp/htdocs/www/v4/aj.tai/ajtai/Image/".$row['nameimg']."'/>";
                 $url="phpclass/Image/".$row['nameimg'];
                 // <!-- echo "<a href='View.php?video=$url'>$name</a><br>"; -->
                 echo "<img src='$url' />";
                    ?>
                    
            </div>
            </div>
            <div class="showTabNew col-md-4">
            <div class="header"> <h1>หัวข้อข่าว</h1></div>
                   <?php
               
            foreach($obj->ShowAllNews() as $value){
                echo "<div class='col-md-10 '>";
               // echo "<h2>".$value['header']."</h2>";
                //echo "<div class='pull-right'>".$value['id']."</div><hr />";
                echo "<a class='btn pull-left' href='showNews.php?id=".$value['id']."'><h5>-->".$value['header']."</h5></a>&nbsp";
                if(isset($_GET['status'])){
                    if($_GET['status']=='admin'){
                        echo "<a class='btn btn-success'  href='Admin/edit_news.php?id=".$value['id']."'>Edit</a>&nbsp";
                         echo "<a class='btn btn-danger' href='?del=".$value['id']."'>Delete</a>";
                    }
                }
                echo "</div>";
            }
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
