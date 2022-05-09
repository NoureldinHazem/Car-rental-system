<?php 
    include 'DB connection.php';
	if(isset($_POST['submit'])){

	$start_date=$_POST['RStart_date'];
    $end_date=$_POST['REnd_date'];
	$query1="SELECT plate_number FROM service 
	WHERE 
	 (start_date <='$start_date' and end_date >= '$start_date') 
	 OR (start_date <='$end_date' and end_date >= '$end_date')";
     
	$result = mysqli_query($connection,$query1); 






    $query2="SELECT plate_number FROM service 
	WHERE 
	 (start_date >'$start_date' and start_date > '$end_date') 
	 OR (end_date <'$end_date' and end_date < '$start_date')";

	 $result = mysqli_query($connection,$query2); 








}
?>