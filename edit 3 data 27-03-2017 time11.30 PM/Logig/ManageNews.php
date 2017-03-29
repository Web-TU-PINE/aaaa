<?php
class ManageNews
{
    public function ShowAllNews(){
         include('./include/connectdb.php');
         $sql = 'SELECT * FROM tbl_news';
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

      public function Add_News($header=null,$content=null,$nameimg=null){
         include('../include/connectdb.php');
         $Fullname = $_FILES['image']['name'];
         $type = explode(".",$Fullname);
         $Cutname =reset($type);
         $type = end($type);
         $temp = $_FILES['image']['tmp_name'];
         if($type=='JPG'||$type=='jpg'||$type=='png'){
            $url = '../Logig/Image/'.$Cutname.'.'.$type;
             move_uploaded_file($temp,$url);
            $sql = "INSERT INTO tbl_news(header,content,nameimg) VALUES ('$header','$content','$nameimg')";
            $query = mysqli_query($conn,$sql);
        if($query){
            header("Location: ..\AdminMenu.php?status=admin");
            return "Add Profile Complete";
        }else{
            return "error";
            }
        }else{
             echo "ไม่สนับสนุนไฟล์นี้";
        }
    }
    //  public function Edisadast_News($header=null,$content=null,$id=null,$nameimg=null){
    //    include('../include/connectdb.php');
    //     $sql = "UPDATE tbl_news set header = '$header',content='$content',nameimg='$nameimg' WHERE id='".$id."'";
    //     $query = mysqli_query($conn,$sql);
    //     if($query){
    //         header("Location: ..\showAllnew.php?status=admin");
    //         return "Edit News Complete";
    //     }else{
    //         return "error";
    //     }
    //
    // }
    public function Edit_News($header=null,$content=null,$id=null,$nameimg=null){
      include('../include/connectdb.php');
      
      $type = explode(".",$nameimg);
      $Cutname =reset($type);
      $type = end($type);
      $temp = $_FILES['image']['tmp_name'];
      if($type=='JPG'||$type=='jpg'||$type=='png'){
         $url = '../Logig/Image/'.$Cutname.'.'.$type;
          move_uploaded_file($temp,$url);
           $sql = "UPDATE tbl_news set header = '$header',content='$content',nameimg='$nameimg' WHERE id='".$id."'";
         $query = mysqli_query($conn,$sql);
     if($query){
         header("Location: ..\AdminMenu.php?status=admin");
         return "Add Profile Complete";
     }else{
         return "error";
         }
     }else{
          echo "ไม่สนับสนุนไฟล์นี้";
     }
   }

     public function Select_News($id=null){
          include('./include/connectdb.php');
         $sql = "SELECT*FROM tbl_news WHERE id = '".$id."'";
         $query = mysqli_query($conn,$sql);
         return mysqli_fetch_array($query);

    }
    public function Select_News_edit($id=null){
         include('../include/connectdb.php');
        $sql = "SELECT*FROM tbl_news WHERE id = '".$id."'";
        $query = mysqli_query($conn,$sql);
        return mysqli_fetch_array($query);

   }

        public function Del_News($id){
			include('./include/connectdb.php');

		if(isset($id)){
			$sql = "DELETE FROM tbl_news WHERE id='$id'";
			$query = mysqli_query($conn,$sql);
			if($query){
                header("Location: ..\project\showAllnew.php?status=admin");
					return $date = "Delete Complete";
			}
		}
		else {
			return false;
		}
	}

}
?>
