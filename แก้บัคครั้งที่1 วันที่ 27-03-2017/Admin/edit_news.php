<html>
    
    <head>
        <title>Edit_news</title>
        <style>
            body{
    padding: 50px 100px;
    font-size: 13px;
    font-style: Verdana, Tahoma, sans-sarif;
    background-color: beige;
                }
            h2{
    margin-bottom: 20px;
    color: #474E69;
}
            input,textarea{
    padding: 10px;
    border: 1px solid #E5E5E5;
    width: 200px;
    color: #999999;
    box-shadow: rgba(0,0,0,0.1)0px 0px 8px;
}
            textarea{
                width: 400px;
                height: 150px;
                max-width: 400px;
                line-height: 18px;
            }
            input:hover,textarea:hover
            input:focus, textarea:focus{
                border-color: 1px solid #C9C9C9;
                box-shadow: rgba(0,0,0,0.2) 0px 0px 8px;
                -moz-box-shadow: rgba(0,0,0,0.2) 0px 0px 8px;
                -webkit-box-shadow: rgba(0,0,0,0.2) 0px 0px 8px;
            }
            .form label{
                margin-left: 10px;
                color: #999999;
            }
            .Submit input{
                width: 100px;
                height: 40px;
                background-color: #474E69;
                color: #FFF;
                border-radius: 3px;
                -moz-border-radius: 3px;
                -webkit-border-radius: 3px;
            }
        </style>
    </head>
    <body>
        
        <?php
         include('C:\xampp\htdocs\www\v4\aj.tai\ajtai\phpclass\ManageNews.php');
        $obj = new ManageNews;
        if(isset($_POST['submitEditNews'])&&isset($_GET['id'])){
            if(isset($_POST)){
            echo $obj->Edit_News($_POST['header'],$_POST['content'],$_GET['id']);
            }
        }else{
            echo "Noooo";
        }
        $row = $obj->Select_News($_GET['id']);
        ?>
        
        <h2>Edit_News</h2>
        
        <form class="form" method="post" action="#"> 
            <p class="name">
               
                <input type="text" name="header" id="header"  
                 placeholder="header news" value="<?php  echo $row['header'];?>" />
                <label for="header">หัวข้อข่าว</label>
            </p>
            <p class="content">
               
                <textarea type="text" name="content" id="content"    placeholder="content news" >
                <?php 
                    echo $row['content'];
                 
                    ?>
                    </textarea>
            </p>
           Select Main Image: 
                <input type="file" name="image"/><br><br>
                <input type="submit" name="submitAddNews" value="Add News"/>
        </form>
        
    </body>
</html>