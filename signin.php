<?php

require 'dbconfig/dbconfig.php';

?>
<!DOCTYPE html>
<html>
<head>
<title>Signinpage</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style ="background-color:#7f8c8d">


<div id="main-wrapper">
<center><h2>SIGNUP FORM</h2>
<img src="abhi.jpeg" class="abhiimg">
<form class="myform" action="signin.php" method="post"><br><br>
   <label><b>Username</label><br>
   <input name="username" type="text" class="inputvalues" placeholder="Type your username" required/><br>
   <label><b>Password</label><br>
   <input name="password" type="password" class="inputvalues" placeholder="Type your password" required/><br><br>
   <label><b>Confirm Password</label><br>
   <input name="cpassword"  type="password" class="inputvalues" placeholder="Confirm your password" required/><br><br>
   <input name="signupbtn" type="submit" id="signup_btn" value="SignUp"/><br><br>
   <a href="index.php"><input type="button" id="back_btn" value="Back to login"/></a>
</form>


<?php
  if(isset($_POST['signupbtn']))
  { //echo '<script type=text/javascript> alert("singup button clicked") </script>';
    $username=$_POST['username'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    if($password==$cpassword)
    {
      $query="select * from userinfo where username='$username'";
      $query_run=mysqli_query($con,$query);
      if(mysqli_num_rows($query_run)>0)
          {
             echo '<script type=text/javascript> alert("username exist use another user name") </script>';
          }
      else
          {
 
              $query="insert into userinfo values('$username','$password')";
              $query_run=mysqli_query($con,$query);
              
              if($query_run)
                         {
                           echo '<script type=text/javascript> alert("user registered..........Go to loginpage") </script>';
                         }
                    else
                         {
                          echo '<script type=text/javascript> alert("error!") </script>';
                          }
    
          }

    }
  else
     {
      echo '<script type=text/javascript> alert("password does not match with confirm password") </script>';
     }
  
 }
  

?>
   
   
   
</center>
</div>

</body>
</html>