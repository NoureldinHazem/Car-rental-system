<?php
session_start();
include "DB connection.php";

$start_date=$_POST['start_date'];
$end_date=$_POST['end_date'];

$query="Select brand ,model,year,fname,lname,email,start_date,end_date
        From car natural join reservation natural join customer
        where 
        start_date <'$end_date' and end_date > '$end_date'
        OR start_date <'$start_date' and end_date > '$start_date'
        ";

$sql = mysqli_query($connection,$query);
$res=mysqli_fetch_array($sql);

?>
