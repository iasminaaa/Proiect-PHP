<?php
$con=new mysqli('localhost','root','','machiaj');
if(!$con){
    die(mysqli_error($con));
}
//echo "connected"
?>