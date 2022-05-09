<?php
session_start();
include "DB connection.php";

$date=$_POST['date'];

$query1="Select brand,model,year
        From car natural join service 
        where                                                   //cars out of service //not working
        start_date <='$date' and end_date >= '$date'
        ";

$sql1 = mysqli_query($connection,$query1);
$res1=mysqli_fetch_array($sql1);


$query2="Select brand,model,year
        From car left (outer) join service 
        where                                                   //working cars
        start_date <='$date' and end_date >= '$date'
        ";

$sql2 = mysqli_query($connection,$query2);
$res2=mysqli_fetch_array($sql2);

?>