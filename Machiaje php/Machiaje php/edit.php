<?php

include "connectare.php";
$id=$_GET['id'];
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $cpu=$_POST['tipten'];
    $gpu=$_POST['brand'];
    $ram=$_POST['ziseara'];
    $price=$_POST['pret'];

    $sql1="UPDATE name SET id=$id WHERE id=$id";
    $query1=mysqli_query($con,$sql1);

    $sql9="UPDATE name SET name='$name' WHERE id=$id";
    $query9=mysqli_query($con,$sql9);

   
        $sql2="UPDATE cpu SET tipten='$tipten' WHERE id=$id";
        $query2=mysqli_query($con,$sql2);
       
    

    
        $sql3="UPDATE gpu SET brand='$brand' WHERE id=$id";
        $query3=mysqli_query($con,$sql3);
        
    

    
        $sql4="UPDATE ram SET ziseara='$ziseara' WHERE id=$id";
        $query4=mysqli_query($con,$sql4);
       
    

    
        $sql5="UPDATE price SET pret='$pret' WHERE id=$id";
        $query5=mysqli_query($con,$sql5);
        
    

    if($query5){
        
        header('location:index.php?msg=Machiaj updatat!');
    }else{
        die(mysqli_error($con));
    }
}



?>















<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Machiaje</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-light justify-content-center fs3 mb-5" style="background-color: #00ff7572">Machiaje</nav>

<div class="container">

<div class="text-center mb-4">
    <h3>Editeaza un machiaj</h3>
    <p class="text-muted">Click UPDATE when you're done</p>
</div>

<?php
$id=$_GET['id'];

$sql="SELECT * from name WHERE id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];

$sql="SELECT * from tipten WHERE id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$cpu=$row['tipten'];

$sql="SELECT * from brand WHERE id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$gpu=$row['brand'];

$sql="SELECT * from ziseara WHERE id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$ram=$row['ziseara'];

$sql="SELECT * from pret WHERE id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$price=$row['pret'];

?>



<div class="container d-flex justify-content-center">
    <form action="" method="post" style="width:50vw;min-width:300px;">
<div class="row">
    <div class="mb-3">
        <label class="form-label">Nume</label>
        <input type="text" class="form-control" name="name" value="<?php echo $name ?>">
    </div>
 <div></div>
    <div class="mb-3">
        <label class="form-label">Tip de ten</label>
        <input type="text" class="form-control" name="tipten" value="<?php echo $tipten ?>">
    </div>
    <div></div>
    <div class="mb-3">
        <label class="form-label">Brand</label>
        <input type="text" class="form-control" name="brand" value="<?php echo $brand ?>">
    </div>
    <div></div>
    <div class="mb-3">
        <label class="form-label">Produs de zi sau de seara</label>
        <input type="text" class="form-control" name="ziseara" value="<?php echo $ziseara ?>">
    </div>
    <div></div>
    <div class="mb-3">
        <label class="form-label">Pret</label>
        <input type="text" class="form-control" name="pret" value="<?php echo $pret ?>">
    </div>
</div>
<div>

<button type="submit" class="btn btn-success" name="submit">Update</button>
<a href="index.php" class="btn btn-danger">Cancel</a>
</div>
</form>
</div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>