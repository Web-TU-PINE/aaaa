<html>
    
    <head>
        <title>Add_news</title>
        
        <?php
             include('../include/TabAdminMenu.php');
            include('StyleHandle.css');
        ?>
         
    </head>
    <body>
        
        <?php
         include('../Logig/ManageNews.php');
        $obj = new ManageNews;
        if(isset($_POST['submitAddNews'])){
            if(isset($_POST)){
                $name = $_FILES['image']['name'];
            echo $obj->add_News($_POST['header'],$_POST['content'], $name);
            }
        }else{
            echo "Noooo";
        }
        ?>
        
        <h2>Add_News</h2>
       
        
        <form class="form" method="post" action="#" enctype="multipart/form-data"> 
            <p class="name">
               
                <input type="text" name="header" id="header" placeholder="header news" required />
                <label for="header">หัวข้อข่าว</label>
            </p>
            <p class="content">
               
                <textarea type="text" name="content" id="content" placeholder="content news" required></textarea>
            </p>
            <p class="Submit">
            </p><br>
             Select Main Image: 
                <input type="file" name="image"/><br><br>
                <input type="submit" name="submitAddNews" value="Add News"/>
        </form>
         <?php
            include('../include/script.php');
        ?>
    </body>
</html>