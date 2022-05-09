<?php
include "DB connection.php";
session_start();
$date=$_POST['date'];
$query="Select * FROM car natural join reservation 
        WHERE plate_number  in ( select plate_number
                                  From reservation   
                                  where start_date <='$date' and end_date >= '$date'
                                )";
$sql = mysqli_query($connection,$query);
$res=mysqli_fetch_array($sql);                                

?>