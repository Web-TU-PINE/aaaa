
.<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Log-in </title>
        <link rel="stylesheet" href="stylelogin.css">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">
    </head>
    <body>
        <?php
            include('../Logig/LoginProcess.php');
             $obj = new LoginProcess;
            if(isset($_POST['submitLogin'])){
               $obj->CheckUser($_POST['user'],$_POST['pass']);
            }
        ?>
        <html lang="en-US"/>
        <div id="login">
            <form name="form-login" method="POST" action="#">
                <span class="fontawesome-user"></span>
                <input type="text" name="user" id="user" placeholder="Username" required/>
                
                <span class="fontawesome-lock"></span>
                <input type="password" name="pass" id="pass" placeholder="Password" required/>
                
                <input type="submit" value="Login" name="submitLogin">

            </form>
        </div>
    </body>
</html>