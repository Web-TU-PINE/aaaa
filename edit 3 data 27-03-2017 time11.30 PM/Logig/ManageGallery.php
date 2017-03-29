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
  public function Select_gellery($id=null){
       include('./include/connectdb.php');
      $sql = "SELECT*FROM multiupload WHERE id = '".$id."'";
      $query = mysqli_query($conn,$sql);
      return mysqli_fetch_array($query);

 }
  public function Del_gallery($id){
  include('./include/connectdb.php');
  if(isset($id)){
    //$sql="delete from bill_deposit where id_dep='$id' ";
/*(ลบข้อมูลจากตาราง 2 ตาราง)*/ $sql="DELETE FROM `main`,`multiupload` USING `main`
INNER JOIN `multiupload`
WHERE `ActivityName`.`id` = '$id'
AND `ActivityCode`.`id` = `ActivityName`.`id`";
$result=mysql_db_query($dbname,$sql);
if ($result) {
echo "<script> alert('ลบข้อการขายฝากเรียบร้อยแล้ว')</script>";
echo" <meta http-equiv='refresh' content='0; url=admin_edit_pledge.php' />";
} else {
echo "<h3>ไม่สามารถลบข้อมูลได้ครับ</h3>";
}
mysql_close();

    $query = mysqli_query($conn,$sql);
    if($query){
              header("Location: ..\gallery.php?status=admin");
        return $date = "Delete Complete";
    }

  }
  else {
    return false;
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
