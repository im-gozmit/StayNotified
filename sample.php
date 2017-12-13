<?php
$con=mysqli_connect('localhost','root','','staynotified');
$user=$_POST['username'];
$pass=$_POST['password'];
$variable="select username from signupstudent where username='$user' AND password='$pass'";
$sql=mysqli_query($con,$variable);
if(!$sql){
    echo 'hey';
}
else if(mysqli_num_rows($sql)==1)
{
    session_start();
    header('location: newuser.php');
}
mysqli_close($con);
?>
