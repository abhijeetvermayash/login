<?php
$con=mysqli_connect("localhost","root","8579081636","login");
if (mysqli_connect_error($con))
{
 exit("error connection in mysql:" .mysqli_connect_error($con));
}

?>
