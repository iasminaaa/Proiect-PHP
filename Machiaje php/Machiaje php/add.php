<?php

include "connectare.php";

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $cpu=$_POST['tipten'];
    $gpu=$_POST['brand'];
    $ram=$_POST['ziseara'];
    $price=$_POST['pret'];

    $sql="insert into name (name) values('$name')";
    $query=mysqli_query($con,$sql);

    
        $sql2="insert into tipten (tipten) values('$tipten')";
        $query2=mysqli_query($con,$sql2);
       
    

    
        $sql3="insert into brand (brand) values('$brand')";
        $query3=mysqli_query($con,$sql3);
        
    

  
        $sql4="insert into ziseara (ziseara) values('$ziseara')";
        $query4=mysqli_query($con,$sql4);
       
    

   
        $sql5="insert into pret (pret) values('$pret')";
        $query5=mysqli_query($con,$sql5);
        
    

    if($query5){
        header('location:index.php?msg=Machiaj adaugat!');
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
    <h3>Adauga un machiaj</h3>
    <p class="text-muted">Fill the form</p>
</div>

<div class="container d-flex justify-content-center">
    <form action="" method="post" style="width:50vw;min-width:300px;">
<div class="row">
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" name="name">
    </div>
 <div></div>
    <div class="mb-3">
        <label class="form-label">Tip de ten</label>
        <input type="text" class="form-control" name="tipten">
    </div>
    <div></div>
    <div class="mb-3">
        <label class="form-label">Brand</label>
        <input type="text" class="form-control" name="brand">
    </div>
    <div></div>
    <div class="mb-3">
        <label class="form-label">Produs de zi sau de seara</label>
        <input type="text" class="form-control" name="ziseara">
    </div>
    <div></div>
    <div class="mb-3">
        <label class="form-label">Pret</label>
        <input type="text" class="form-control" name="pret">
    </div>
</div>
<div>

<button type="submit" class="btn btn-success" name="submit">Save</button>
<a href="index.php" class="btn btn-danger">Cancel</a>
</div>
</form>
</div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>