<?php
class LoginProcess{ 
  
    public function CheckUser($username = null,$password=null){
			if(isset($username)&&isset($password)){
				include('..\include\connectdb.php');
				$sql = "SELECT * FROM member WHERE username ='".$username."' and  password='".$password."'";
				$query = mysqli_query($conn,$sql);
				$row = mysqli_num_rows($query);
				if ($row!=0) {
                    header("Location: ..\AdminMenu.php?status=admin");
				}else{
					 header("Location: Login.php");
				}
			}
	}
}
?>