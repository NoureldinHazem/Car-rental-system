<?php session_start()?>

<html>
	<head>
	<style>
	body {
	background-image: url('welcome.jpg');
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
	}
	</style>
		<link rel="stylesheet" media="screen" href="bootstrap.min.css">

			<title>delete car</title>


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
			<form action="servicecar.php" method="post">
				<br><br><br>
				<h2 style="color:white; text-align:center">Add Car to service</h2>

				<div style="background:lightgrey;opacity:90%; " >


					<div class="form-group">
							<label style="width:20%;font-size:20;color:black;margin-left:20%" class="form-control-plaintext" >Plate Number:</label>
							<input required style="width:25%;font-size:20;color:black;margin-left:20%"type='text' class="form-control" name='plate_number' id="plate_number"/>
							

							<label  style="font-size:130%;color:black;margin-left:20%;margin-top:1%"for="from_date">From:</label>
							<input required style="padding: 4px; width: 160px;"  value=""type="date" id="start_date" name="start_date">
							<br></br>
							<label  style="font-size:130%;color:black;margin-left:20%"for="to_date" >To:</label>
							<input required style="padding: 4px; width: 160px;" type="date" id="end_date" name="end_date">
					</div>
					
					<div style="margin-left:60%">
						<input style="color:white;background-color:red;border: none;font-size:20;margin-left:30%" class="btn btn-primary btn-lg" id="submit" type="submit" name="submit" value="Add car to service"> <br></br>

					</div>

				</div>

			</form>
		</div>

		<?php
   include 'DB connection.php';
	if(isset($_POST['submit'])){
		$start_date=$_POST['start_date'];
		$end_date=$_POST['end_date'];
		$plate_number=$_POST['plate_number'];
		$sql = "INSERT INTO `service` (plate_number,`start_date`,end_date) VALUES ('$plate_number','$start_date','$end_date')";
	    $result = mysqli_query($connection,$sql); 
header('location:adminhome.php');
	}
?>

</body>
</html>
