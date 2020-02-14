<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Homepage</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style ="background-color:#7f8c8d">


<div id="main-wrapper">
<center>
<h1>HOME PAGE</h1>
<h2>WELCOME
<?php echo $_SESSION['username']
?></h2>
<img src="abhi.jpeg" class="abhiimg">
<form class="myform" action="index.php" method="post"><br><br>
 <a href="index.php"><input type="button" id="signout_btn" value="SignOut"/></a>
</center>
</div>
</body>
</html>