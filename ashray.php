<?php
$con=mysqli_connect('localhost','root','','staynotified');
$name=$_POST['name'];
$user=$_POST['username'];
$email=$_POST['email'];
$pass=$_POST['password'];
$var1="INSERT INTO signupstudent VALUES('$name','$user','$email','$pass')";
$pl=mysqli_query($con,$var1);
if($pl)
{
    echo'
<!doctype html>
<html lang="en">
  <head>
    <title>Help Student</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/style.css">
      <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<link href="https://fonts.googleapis.com/css?family=Acme|Patua+One" rel="stylesheet">

  </head>
  <body style="background-color: black">

<div id="particles">
    </div>    <div>  <div id="header" class="header">
<div id="navbar" class="containernav borderYtoX">
<p style="color: white">  <a >HOME</a>
  <a href="index.html#about">ABOUT US</a>
    
    <a href="index.html#contacts" >CONTACT US</a>
    <a href="register.html" >REGISTER</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    
    <a href="login.html">LOGIN</a>
    <a href="signup.html">SIGNUP</a></p>
          
</div>

</div></div>
      <center>
      <h1 style="color:white">User Registered !!!!</h1></center>
    </body>
</html>

'
}
?>