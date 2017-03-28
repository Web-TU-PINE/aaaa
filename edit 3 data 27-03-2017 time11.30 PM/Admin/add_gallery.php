<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"  rel="stylesheet">

  </head>
  <body>
    <p><br/><br/></p>
    <div class="contianer">
      <?php
         include('../Logig/ManageGallery.php');
         if(isset($_POST['submit'])){
          $obj = new ManageGallery;

          if(isset($_POST['submit'])){
            if(isset($_POST)){
              $codeActivity = rand();
              $total = count($_FILES['files']['name']);
              for($i=0; $i<1; $i++) {
              foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
                $name = $_FILES['files']['name'][$key];
                $type=$_FILES['files']['type'][$key];
                 $temp = $_FILES['files']['tmp_name'][$key];
                $type = explode("/",$type);
                $type = end($type);
                echo $name."<br>";
                if($type=='JPG'||$type=='jpg'||$type=='png'||$type=='jpeg'){
                   $url = '../Logig/Image/'.$name;
                    move_uploaded_file($temp,$url);
                    if($obj->add_gallery($_POST['ActivityName'],$name,$codeActivity)){
                      echo "ส่งadd_galleryได้<br>.";
                    }else {
                      echo "ส่งadd_galleryไม่ได..<br>้";
                    }
                }else {
                  echo "ใส่ให้ตรงไอสัสสส<br>";
                }
              }
              if($type=='JPG'||$type=='jpg'||$type=='png'||$type=='jpeg'){
                 $url = '../Logig/Image/'.$name.'.'.$type;
                  move_uploaded_file($temp,$url);
                  if($obj->add_gallery($_POST['ActivityName'],$name,$codeActivity)){
                    echo "ส่งadd_galleryได้<br>.";
                  }else {
                    echo "ส่งadd_galleryไม่ได..<br>้";
                  }
              }else {
                echo "ใส่ให้ตรงไอสัสสส<br>";
              }
            }
                  if( $obj->create_activity($_POST['ActivityName'],$codeActivity)){
                    echo "ส่งcreate_activityได้<br>";
                  }
                  else {
                    echo "ส่งcreate_activityไม่ได..<br>้";
                  }
            }
              else{
            echo "Noooo";
         }
        }
       }
        ?>
    <form method="post" enctype="multipart/form-data">
        <input type="text" name="ActivityName" >
        <input type="file" name="files[]" multiple>
        <input type="submit" class="btn btn-primary" name="submit" value="upload">
    </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
