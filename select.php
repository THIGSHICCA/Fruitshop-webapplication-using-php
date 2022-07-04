<?php
include "db.php";
$email=$_POST['email'];
$pwd=$_POST['password'];

$sql="select * from user where email='$email' and password='$pwd'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
if($count>0){
    header("location:home.php");
}
else{
    header("location:signin.php");
}
?>