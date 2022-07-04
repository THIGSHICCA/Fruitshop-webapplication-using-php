<?php
$con=mysqli_connect("localhost","root","","fruitshop-3");
if($con){
    echo "connected";
}
else{
    echo "check your connection";
}

?>