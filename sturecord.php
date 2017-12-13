<?php

$con=mysqli_connect('localhost','root','','staynotified');
$name=$_POST['name'];
$email=$_POST['email'];
$enroll=$_POST['enrollment'];
$year=$_POST['Year'];
$batch=$_POST['batch'];
$mobile=$_POST['mobno'];

$var1="INSERT INTO studentrec VALUES('$name','$email','$enroll','$year','$batch','$mobile')";
$pl=mysqli_query($con,$var1);
?>