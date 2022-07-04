<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
    HELLO
    <br>
<button><a href=signin.php>Log out</a></button>


    <form action="insert-fruit.php" method="post">
        <h2 class="text-center">Fruit</h2>
        <br>
        <br>       
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Name" required="required" name="name">
        </div>
        <br>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Weight" required="required" name="weight">
        </div>
        <br>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Price" required="required" name="price">
        </div>

    <br>
    <br>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block container" >submit</button>
        </div>
            
    </form>
</div>


    <div class="container">
    <table class="table">
        <tr> 
            <th>fID</th>
            <th>Name</th>
            <th>Weight</th>
            <th>Price</th>
            <th></th>
            <th></th>
            </tr>

        <tbody>



            <?php
            session_start();

            include ("db.php");
            $sql="select * from fruit";
            $result=$con->query($sql);

                 if($result->num_rows>0){
                    while($row=$result->fetch_assoc()){
                        ?>
                         <tr>
               <th><?php echo $row['fid'];?></th>
               <th><?php echo $row['name'];?></th>
               <th><?php echo $row['weight'];?></th>
               <th><?php echo $row['price'];?></th>
               <th><a class="btn btn-outline-primary " href="update.php?id=<?php echo $row['fid'];?>">Edit</a></th>
               <th><a class="btn btn-outline-danger" href="delete.php?id=<?php echo $row['fid'];?>">Delete</a></th>

</tr>
<?php


                    }
                 }
           ?>
             </tbody>
             <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
         
    </table>
            </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>