
        
        <!--START NAV SECTION-->
        <div class="navbar navbar-inverse ">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target =".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Thammasat</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                    <?php if(isset($_GET['status'])){
                    if($_GET['status']=='admin'){
                        echo "<li><a href='AdminMenu.php?status=admin'>Admin</a></li>";
                        echo "<li><a href='Home.php?status=admin'>HOME</a></li>";
                        echo " <li><a href='HISTORY.php?status=admin'>HISTORY</a></li>";
                        echo " <li class='dropdown'>
                            <a >COURSE</a>
                            <div class='dropdown-content'>
                                <a href='CourseSoftware.php?status=admin'>SOFTWARE</a>
                                <a href='CourseAuto.php?status=admin'>AUTOMOTIVE</a>
                            </div>
                        </li>";
                        echo "<li><a href='person.php?status=admin'>PERSON</a></li>";
                        echo "<li><a href='Life.php?status=admin'>LIFE</a></li>";
                        echo " <li><a href='gallery.php?status=admin'>GALLERY</a></li>";
                        }
                     }else{
                        echo "<li><a href='Home.php'>HOME</a></li>";
                        echo " <li><a href='HISTORY.php'>HISTORY</a></li>";
                        echo " <li class='dropdown'>
                            <a >COURSE</a>
                            <div class='dropdown-content'>
                                <a href='CourseSoftware.php'>SOFTWARE</a>
                                <a href='CourseAuto.php?'>AUTOMOTIVE</a>
                            </div>
                        </li>";
                        echo "<li><a href='person.php'>PERSON</a></li>";
                        echo "<li><a href='Life.php'>LIFE</a></li>";
                        echo " <li><a href='gallery.php'>GALLERY</a></li>";
                     }   
                    ?>
                    </ul>
                </div>
            </div>
        </div>
        <!--END NAV SECTION-->
        
    