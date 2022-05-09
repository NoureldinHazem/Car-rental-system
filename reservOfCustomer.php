
<?php
session_start();
include "DB connection.php";
$email=$_POST['email'];


//all reservations of specific customer including customer information, car model and plate id

$query="Select fname,lname,SSN,email,brand,model,year,plate_number,start_date,end_date,total_cost
        From customer natural join reservations natural join car
        where email='$email";

        $sql = mysqli_query($connection,$query);
$res=mysqli_fetch_array($sql);

?>
