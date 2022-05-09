<?php
session_start();
include "DB connection.php";

$plate_number=$_POST['plate_number'];
$query="Select * from car
        from car natural join reservation natural join service
        where plate_number='$plate_number'";

$sql = mysqli_query($connection,$query);
$res=mysqli_fetch_array($sql);

?>