<?php
class ManagePerson
{
    public function ShowAllperson(){
         include('./include/connectdb.php');
         $sql = 'SELECT * FROM tbl_person';
        $query = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($query)){
            $date[] = $row;
        }
        return $date;
    }
    public function ShowTop3News($startPo=null,$endPo=null){
         include('./include/connectdb.php');
         $sql = 'SELECT * FROM tbl_news ORDER BY id  ASC  LIMIT '.$startPo.",".$endPo ;
        $query = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($query)){
            $date[] = $row;
        }
        return $date;
    }
      public function Add_person($position=null,$name=null,$lastname=null,$nameimg=null){
         include('../include/connectdb.php');
         $Fullname = $_FILES['image']['name'];
         $type = explode(".",$Fullname);
         $Cutname =reset($type);
         $type = end($type);
         $temp = $_FILES['image']['tmp_name'];
         if($type=='JPG'||$type=='jpg'||$type=='png'){
            $url = '../Logig/Image/'.$Cutname.'.'.$type;
             move_uploaded_file($temp,$url);
            $sql = "INSERT INTO tbl_person(position,name,lastname,nameimg) VALUES ('$position','$name','$lastname','$nameimg')";
            $query = mysqli_query($conn,$sql);
        if($query){
            return "Add Profile Complete";
        }else{
            return "error";
            }
        }else{
             echo "ไม่สนับสนุนไฟล์นี้";
        }
    }
     public function Edit_person($position=null,$name=null,$id=null,$lastname=null,$nameimg=null){
       include('../include/connectdb.php');
        $sql = "UPDATE tbl_person set position = '$position',name='$name',lastname='$lastname',nameimg='$nameimg' WHERE id='".$id."'";
        $query = mysqli_query($conn,$sql);
        if($query){
          header("Location: ..\person.php?status=admin");
            return "Edit person Complete";
        }else{
            return "error";
        }
    }
     public function Select_person($id=null){
          include('../include/connectdb.php');
         $sql = "SELECT*FROM tbl_person WHERE id = '".$id."'";
         $query = mysqli_query($conn,$sql);
         return mysqli_fetch_array($query);
    }
        public function Del_person($id){
			include('./include/connectdb.php');
		if(isset($id)){
			$sql = "DELETE FROM tbl_person WHERE id='$id'";
			$query = mysqli_query($conn,$sql);
			if($query){
					return $date = "Delete Complete";
			}
		}
		else {
			return false;
		}
	}
}
?>
