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
        
       <section id="port-sec">
            <div class="container">
                <div class="row g-pad-bottom">
                    <div class="text-center g-pad-bottom">
                        <div class="col-md-12 col-sm-12 alert-info">
                            <h4>กิจกรรมทั้งหมด</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <img src="https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-0/c50.0.200.200/p200x200/15170826_1026987500756411_7056300136751481514_n.jpg?oh=a366ca1f92a74c28056ee65c5952662e&oe=59303839" width="300">
                        <h6 class="">ปลูกป่าชายเลน อ่าวทุ่งโปร่ง กองพันลาดตระเวณ</h6>
                        <div class="text-center"><a href="galleryShow.php"><button class="btn btn-success" onclick="www.google.com">ดูรูปภาพ</button></a></div>
                    </div>
                      <div class="col-md-6">
                        <img src="https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-0/c63.0.200.200/p200x200/15391072_1042148729240288_8974622533666676364_n.jpg?oh=8c7a6590b9531ea22c2c7f2dc4537cc6&oe=593B3E1A" width="300">
                        <h6 class="">กิจกรรมกีฬาสานสัมพันธ์นักศึกษา,อาจารย์และเจ้าหน้าที่</h6>
                        <div class="text-center"><a href="galleryShow.php"><button class="btn btn-success" onclick="www.google.com">ดูรูปภาพ</button></a></div>
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

    </body>
</html>
