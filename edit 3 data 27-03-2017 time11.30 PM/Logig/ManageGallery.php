<?php
 class ManageGallery{
   public function ShowAllgallery(){
        include('./include/connectdb.php');
        $sql = 'SELECT * FROM main';
       $query = mysqli_query($conn,$sql);
       while($row = mysqli_fetch_array($query)){
           $date[] = $row;
       }
       return $date;
   }
   public function ShowAllgalleryImage($code=null){
        include('./include/connectdb.php');
        $sql = "SELECT*FROM multiupload WHERE ActivityCode = '".$code."'";
       $query = mysqli_query($conn,$sql);
       while($row = mysqli_fetch_array($query)){
           $date[] = $row;
       }
       return $date;
   }
 	public function add_gallery($ActivityName=null,$name=null,$codeActivity){
 		include('../include/connectdb.php');
            $sql="INSERT into multiupload (	ActivityName,name_img,ActivityCode) VALUES('$ActivityName','$name','$codeActivity') ";
            $query = mysqli_query($conn,$sql);
            if($query){
              echo "โคตรไดadd_gallery้<br>";
            }
            else{
              echo "สัสสสสส";
            }
 	}

  public function create_activity($ActivityName=null,$codeActivity=null){
 		include('../include/connectdb.php');
            $sql="INSERT into main (Activity,	ActivityCode) VALUES('$ActivityName','$codeActivity') ";
            $query = mysqli_query($conn,$sql);
            if($query){
              echo "โคตรไดaaacreate_activity<br>";
            }
            else{
              echo "สัสสสสส";
            }
 	}
 }
?>
