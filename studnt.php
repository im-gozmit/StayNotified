<?php
$con=mysqli_connect('localhost','root','','staynotified');
$year=$_POST['year'];
$batch=$_POST['batch'];
$variable="select mobile from studentrec where year='$year' AND batch='$batch'";
$sql=mysqli_query($con,$variable);
if(!$sql){
    echo 'hey';
}
else if(mysqli_num_rows($sql)>0)
{
    $row=mysqli_fetch_array($sql,MYSQLI_ASSOC);
    
}
mysqli_close($con);
?>
