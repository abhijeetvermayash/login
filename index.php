<?php
session_start();
require 'dbconfig/dbconfig.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Loginpage</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style ="background-color:#7f8c8d">


<div id="main-wrapper">
<center><h2>LOGIN FORM</h2>
<img src="abhi.jpeg" class="abhiimg">
<form class="myform" action="index.php" method="post"><br><br>
   <label><b>Username</label><br>
   <input name="username" type="text" class="inputvalues" placeholder="Type your username" required/><br>
   <label><b>Password</label><br>
   <input name="password" type="password" class="inputvalues" placeholder="Type your password" required/><br><br>
   <input name="loginbtn" type="submit" id="login_btn" value="Login"/><br><br>
   <a href="signin.php"><input type="button" id="signin_btn" value="Signin"/></a>
</form>
<?php
if(isset($_POST['loginbtn']))
{
      $username=$_POST['username'];
      $password=$_POST['password'];
      $query="select * from userinfo where username='$username' AND password='$password' ";
      $query_run=mysqli_query($con,$query);
                                  if(mysqli_num_rows($query_run)>0)
                                       {
                                           $_SESSION['username']=$username; 
                                           header("location:homepage.php");    
                                       }
                                  else
                                       {
       
                                         echo '<script type=text/javascript> alert("invalid username and password.......please signin first if you have not ") </script>';
                                        }
}
?>
   
   
   
</center>
</div>

</body>
</html>