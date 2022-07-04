<?php
include "db.php";
if(isset($_POST['update'])){
    $fid=$_POST['fid'];
    $na=$_POST['name'];
    $wt=$_POST['weight'];
    $pr=$_POST['price'];

    $sql = "UPDATE `fruit` SET `name`='$na',`weight`='$wt',`price`='$pr' WHERE `fid`='$fid'";
$result=$con->query($sql);

if($result == True){
    echo "Record updated successfully";
}else
{
    echo "Error:".$sql."<br>".$con->error;
}


}

if (isset($_GET['id'])){
    $fid=$_GET['id'];

$sql="SELECT * FROM fruit WHERE fid='$fid'";
$result = $con->query($sql);

if ($result->num_rows > 0){

    while($row = $result->fetch_assoc()){
        $na=$row['name'];
        $wt=$row['weight'];
        $pr=$row['price'];
        $fid=$row['fid'];
    }
    ?>
     <div class="text-center mb-4">
            <H1>Register</H1>
        </div>
    
    <div class="container">
        <form  action="" method="post">
            <div class="row">
                <div class="col-3 mr-2">
                    <input class="form-control"  type="text" name="name" value="<?php echo $na;?>">
                </div>
                <input type="hidden" name="fid" value="<?php echo $fid;?>">
                <div class="col-3 mr-2">
                    <input class="form-control" type="text" name="weight" value="<?php echo $wt;?>">
                </div>
                <div class="col-3 mr-2">
                    <input class="form-control" type="text" name="price" value="<?php echo $pr;?>">
                </div>
                <div class="col mr-2">
                    <input class="btn btn-primary" type="submit" name="update" value="update">
                </div>
            </div>
            <a href="home.php"> home</a>
        </form>
</body>
        </html>
<?php
}
}else{
    header('location: signup.php');

}

?>