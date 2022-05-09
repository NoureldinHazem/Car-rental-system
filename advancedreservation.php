<html>
	<head>
	<style>
	body {
	background-image: url('welcome.jpg');
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
	}
	.container{
    display: flex;
    flex-direction: row;
    align-items: flex-start
    }
	</style>
		<link rel="stylesheet" media="screen" href="bootstrap.min.css">

			<title>Home Page</title>


      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <a class="navbar-brand" href="adminhome.php">
   						 <img src="logo2.png" width="60" height="40" alt="">
					</a>
						<li class="nav-item active">
							<a class="nav-link" href="customersreport.php">CustomersREPORT <span class="sr-only">(current)</span></a>
						</li>
            <li class="nav-item active">
							<a class="nav-link" href="carsreport.php">CarsREPORT <span class="sr-only">(current)</span></a>
						</li>
            <li class="nav-item active">
							<a class="nav-link" href="reports.php">REPORTS <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="editcars.php">ADD/DEL CARS<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="all_reservations.php">VIEW RESERVATIONS <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="advanced.php">ADVANCEDSearch <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a  class="nav-link" href="logout.php">Logout</a>
						</li>
      </ul>
    </div>
  </div>
</nav>

	</head>

	<body class="modal-body">
		<div>
        <form action="advancedreservation.php" method="post">
          <br><br><br>
          <h2 style="color:white; text-align:center">By Reservation</h2><br>
				<br><br>
				<div style="background:darkgrey;opacity:90%; ">
<div class="container">
<label style="font-size:130%;color:white;margin-top:7px" for="plate_number" >Reservation ID:</label>
<input  style="padding: 4px; width: 160px;margin-top:7px" type='text' class="form-control" name='reservation_id' id="reservation_id"/>


<label style="font-size:130%;color:white;margin-left:1%;margin-top:7px" for="brand">Customer ID:</label>
<input style="padding: 4px; width: 160px;margin-top:7px" type='text' class="form-control" name='customer_id' id="customer_id">


<label style="font-size:130%;color:white;margin-left:1%;margin-top:7px"  >Plate No.:</label>
<input style="padding: 4px; width: 160px;margin-top:7px" type='number' class="form-control" name='plate_number' id="plate_number"/>


<label style="font-size:130%;color:white;margin-top:7px" >Total Cost:</label>
						<input style="padding: 4px; width: 160px;margin-top:7px" type='number' class="form-control"  name="total_cost" id="total_cost">


</div>
<div class="container">
	<label style="font-size:130%;color:white;margin-top:7px" >Start Date:</label>
	 <input style="padding: 4px; width: 160px;margin-top:7px" type='date'class="form-control" name='start_date'  id="start_date">

<label style="font-size:130%;color:white;margin-left:3%;margin-top:7px" >End Date:</label>
<input style="padding: 4px; width: 160px;margin-top:7px" type='date' class="form-control" name='end_date' id="end_date">



<label style="font-size:130%;color:white;margin-left:3%;margin-top:7px" >Reseration Date:</label>
<input style="padding: 4px; width: 160px;margin-top:7px" type='date' class="form-control" name='reserv_date'id="reserv_date"/>

</div>
<div class="container">

<label style="font-size:130%;color:white;margin-top:7px"  >Cash Date:</label>
<input style="padding: 4px; width: 160px;margin-top:7px" type='date' class="form-control" name='cash_date' id="cash_date"/>

<label style="font-size:130%;color:white;margin-left:3%;margin-top:7px"  >City:</label>
<input style="padding: 4px; width: 160px;margin-top:7px" type='text' class="form-control" name='city' id="office_id"/><br>

<button type="submit"  class="btn btn-success" name='search' value='search' style="background:red;margin-left:3%;margin-top:7px"> Search </button><br><br>
</div>
</div>
</div>
        <table class="table">

  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
			<th scope="col">ReservationID</th>
			<th scope="col">CustomerID</th>
      <th scope="col">Plate no.</th>
      <th scope="col">Start Date</th>
      <th scope="col">End Date</th>
			<th scope="col">Total Cost</th>
			<th scope="col">reservation Date</th>
			<th scope="col">Cash Date</th>
			<th scope="col">Office</th>
    </tr>
  </thead>
  <?php
   include 'DB connection.php';
	if(isset($_POST['search'])){
		$reservation_id=$_POST['reservation_id'];
		$customer_id=$_POST['customer_id'];
		$plate_number=$_POST['plate_number'];
		$total_cost=$_POST['total_cost'];
		$start_date=$_POST['start_date'];
		$end_date=$_POST['end_date'];
		$reservation_date=$_POST['reserv_date'];
		$cash_date=$_POST['cash_date'];
		$city=$_POST['city'];

		$query="SELECT * FROM reservation natural join car natural join office WHERE plate_number>0 ";

		if($reservation_id!="")	$query.="and reservation_id = '$reservation_id' ";
		if($customer_id!="")	$query.="and customer_id = '$customer_id' ";
		if($plate_number!="")	$query.="and plate_number = '$plate_number' ";
		if($total_cost!="")	$query.="and total_cost = '$total_cost' ";
		if($start_date!="")	$query.="and `start_date` = '$start_date' ";
		if($end_date!="")	$query.="and end_date = '$end_date' ";
		if($reservation_date!="")	$query.="and reserv_date = '$reservation_date' ";
		if($cash_date!="")	$query.="and cash_date = '$cash_date' ";
		if($city!="")	$query.="and city = '$city' ";

		$result = mysqli_query($connection,$query); 
        $index=1;
		while ($row=mysqli_fetch_array($result))  {$index++; 
			?>
	<tbody class="opacity-50" style="background:white;">

  <tr>
      <th scope="row"><?php echo $index?></th>
      <td><?php echo $row['reservation_id']?></td>
      <td><?php echo $row['customer_id']?></td>
      <td><?php echo $row['plate_number']?></td>
			<td><?php echo $row['start_date']?></td>
			<td><?php echo $row['end_date']?></td>
			<td><?php echo $row['total_cost']?></td>
			<td><?php echo $row['reserv_date']?></td>
			<td><?php echo $row['cash_date']?></td>
			<td><?php echo $row['city'] ?> <?php echo $row['location'] ?></td>


    </tr>
	<?php }} ?>

    
    
  </tbody>
</table>


			</form>
		</div>
	</body>
</html>
