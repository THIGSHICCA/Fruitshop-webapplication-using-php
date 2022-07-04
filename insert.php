<?php
include "db.php";
$name=$_POST["name"];
$gender=$_POST["gender"];
$email=$_POST["email"];
$phonenumber=$_POST["phone_number"];
$password=$_POST["password"];

$sql="INSERT INTO `user`(`name`,`gender`,`email`,`phone_number`,`password`) VALUES ('$name','$gender','$email','$phonenumber', '$password')";

$result=mysqli_query($con,$sql);
if($result){
    header("location: signin.php");
}
else{
    echo "error";
}
?>