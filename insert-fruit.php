<?php
include "db.php";
$fid=$_POST["fid"];
$name=$_POST["name"];
$weight=$_POST["weight"];
$price=$_POST["price"];

$sql="INSERT INTO `fruit`( `fid`, `name`, `weight`, `price`) VALUES ('$fid','$name','$weight','$price')";

$result=mysqli_query($con,$sql);
if($result){
    header("location: home.php");
}
else{
    echo "error";
}


?>