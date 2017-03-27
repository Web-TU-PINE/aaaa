<!DOCTYPE html>

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
        
       


        <!-- START NEWS SECTIOLN  - <!-- Page Content -->
    <div class="container">

          <!-- Wrapper for Slides -->
            <div id="myCarousel" class="carousel slide">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                   
                </ol>
                <!-- Wrapper for Slides -->
                <div class="carousel-inner">
                  
                    <!-- <div class="item  active"> -->
                    <?php
                      include('Logig/ManageNews.php');
                        $obj = new ManageNews;
                 foreach($obj->ShowTop3News(6,7) as $value){
                    
                      echo "<div class='item active'>";
                     echo "<div class='row'>";
                     echo "<div class='col-md-8'>";
                     echo"<img class='img-responsive img-rounded' src='".$value['url']."'  alt='' height='1200px' width='700px'>";
                     echo "</div>
                        <div class='col-md-4'>";
                      echo "<h2>".$value['header']."</h2>";
                      echo "<p>".$value['content']."</p>";
                      echo "<a class='btn btn-primary btn-lg' href='showNews.php?id=".$value['id']."'>Read More >> </a>";
                      echo "</div>                      
                    </div>";
                     // <!-- /.row -->
                    echo "</div>";
                     }
                   
                   ?>
                   <!-- </div> -->
                    
                    <!-- <div class="item "> -->
                    <?php
                      
                        $obj = new ManageNews;
                 foreach($obj->ShowTop3News(1,3) as $value){
                    
                      echo "<div class='item'>";
                     echo "<div class='row'>";
                     echo "<div class='col-md-8'>";
                     echo"<img class='img-responsive img-rounded' src='".$value['url']."'  alt='' height='1200px' width='700px'>";
                     echo "</div>
                        <div class='col-md-4'>";
                      echo "<h2>".$value['header']."</h2>";
                      echo "<p>".$value['content']."</p>";
                      echo "<a class='btn btn-primary btn-lg' href='showNews.php?id=".$value['id']."'>Read More >> </a>";
                      echo "</div>                      
                    </div>";
                     // <!-- /.row -->
                    echo "</div>";
                     }
                   
                   ?>
                   <!-- </div> -->
                 </div>
                 <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
            </div>
           
            <!-- /.col-md-4 -->
      

        <hr>
        
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

         <!-- Content Row -->
        <div class="row">
            <?php
                   
            foreach($obj->ShowTop3News(4,6) as $value){
                echo "<div class='col-md-4'>";
                echo "<h2>".$value['header']."</h2>";
                echo "<p>".$value['content']."</p>";
                echo "<a class='btn btn-info' href='showNews.php?id=".$value['id']."'>More Info</a>";
                echo "</div>";
            }
            
            ?>
           
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->
        <div>
            <h1><a class='btn btn-success' href='showAllnew.php'>ข่าวทั้งหมด</a></h1>
        </div>
        <!-- END NEWS SECTIOLN  -->
        
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
