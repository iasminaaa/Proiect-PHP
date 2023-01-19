<?php
include "connectare.php";
$id=$_GET['id'];
$sql="DELETE FROM name WHERE id=$id; DELETE FROM tipten WHERE id=$id;DELETE FROM brand WHERE id=$id;DELETE FROM ziseara WHERE id=$id;DELETE FROM pret WHERE id=$id";
    $result=mysqli_multi_query($con,$sql);
    if($result){
        header('location:index.php?msg=Machiaj sters!');
    }else{
        die(mysqli_error($con));
    }



?>