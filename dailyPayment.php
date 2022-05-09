<?php
session_start();
include "DB connection.php";

$start_date=$_POST['start_date'];
$end_date=$_POST['end_date'];

$query="Select cash_date, SUM(total_cost)
        from reservation
        where cash_date BETWEEN '$start_date' and '$end_date'
        GROUP by cash_date";


$sql = mysqli_query($connection,$query);
$res=mysqli_fetch_array($sql);

?>