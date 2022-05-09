<?php
session_start();
include "DB connection.php";

$start_date=$_POST['start_date'];
$end_date=$_POST['end_date'];
$plate_number=$_POST['plate_number'];

$query="Select brand,model,year,start_date,end_date
        From car natural join reservation 
        where plate_number='$plate_number' and (
        start_date <'$end_date' and end_date > '$end_date'
        OR start_date <'$start_date' and end_date > '$start_date')
        ";

$sql = mysqli_query($connection,$query);
$res=mysqli_fetch_array($sql);

?>
