<?php include 'register_car.php'?>
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
							<a class="nav-link" href="customersreport.php">Customers <span class="sr-only">(current)</span></a>
						</li>
            <li class="nav-item active">
							<a class="nav-link" href="carsreport.php">Cars <span class="sr-only">(current)</span></a>
						</li>
            <li class="nav-item active">
							<a class="nav-link" href="reports.php">Reports <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="editcars.php">Add/Delete Cars<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="all_reservations.php">Reservations <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="advanced.php">Advanced Search <span class="sr-only">(current)</span></a>
						</li>
      </ul>
    </div>
  </div>
</nav>

	</head>

	<body class="modal-body">
		<div>
			<form action="add.php" method="post">
				<h2 style="color:white; text-align:center">ADD A Car</h2>

<div style="background:lightgrey;opacity:90%; " >


<div class="form-group">
	<label style="width:20%;font-size:20;color:black;margin-left:20%" class="form-control-plaintext" >Plate No.:</label>
	<input required style="width:25%;font-size:20;color:black;margin-left:20%"type='text' class="form-control" name='plate_number' id="plate_number"/>


	<label style="width:20%;font-size:20;color:black;margin-left:20%" class="form-control-plaintext">Select Car brand:</label>
	<input required style="width:25%;font-size:20;color:black;margin-left:20%" type='text' class="form-control" name='brand' id="brand">


	<label style="width:20%;font-size:20;color:black;margin-left:20%" class="form-control-plaintext" >Model:</label>
	<input required style="width:25%;font-size:20;color:black;margin-left:20%" type='text' class="form-control" name='model' id="model"/>

	<label style="width:20%;font-size:20;color:black;margin-left:20%" class="form-control-plaintext">Color:</label>
	 <input required style="width:25%;font-size:20;color:black;margin-left:20%" type='text' class="form-control" name='color'  id="color">


	<label style="width:20%;font-size:20;color:black;margin-left:20%" class="form-control-plaintext">Select Car Type:</label>
	<input required style="width:25%;font-size:20;color:black;margin-left:20%"type='text' class="form-control" name='type' id="type">


	<label style="width:20%;font-size:20;color:black;margin-left:20%" class="form-control-plaintext" >Select Car Transmission:</label>
						<select required style="width:25%;font-size:20;color:black;margin-left:20%" class="form-control" n name="transsmision" id="transmission">
								<option class="ca"  value="">-----------Choose an option-----------</option>
								<option class="ca" value="m">Manual</option>
								<option  class="ca" value="a">Automatic</option>
									</select>

	<label  style="width:20%;font-size:20;color:black;margin-left:20%" class="form-control-plaintext" >Year:</label>
				<select required style="width:14%;font-size:20;color:black;margin-left:20%"type='number' class="form-control" name='year' id="year" >
																							<option value="">-----Choose----</option>
																							<option value="1999">1999</option>
																							<option value="1999">2000</option>
																							<option value="2001">2001</option>
																							<option value="2002">2002</option>
																							<option value="2003">2003</option>
																							<option value="2004">2004</option>
																							<option value="2005">2005</option>
																							<option value="2006">2006</option>
																							<option value="2007">2007</option>
																			 		        <option value="2008">2008</option>
																							<option value="2009">2009</option>
																							<option value="2010">2010</option>
																							<option value="2011">2011</option>
																							<option value="2012">2012</option>
																							<option value="2013">2013</option>
																							<option value="2014">2014</option>
																							<option value="2015">2015</option>
																							<option value="2016">2016</option>
																							<option value="2017">2017</option>
																							<option value="2018">2018</option>
																							<option value="2019">2019</option>
																							<option value="2020">2020</option>
																							<option value="2021">2021</option>
																							<option value="2022">2022</option>
					</select>

	<label style="width:20%;font-size:20;color:black;margin-left:20%" class="form-control-plaintext" >No. of Seats:</label>
	<input required style="width:25%;font-size:20;color:black;margin-left:20%"type='number' class="form-control" name='seats'id="seats"/><br>

	<label style="width:20%;font-size:20;color:black;margin-left:20%" class="form-control-plaintext" >Price/Day:</label>
	<input required style="width:25%;font-size:20;color:black;margin-left:20%"type='number' class="form-control" name='price' id="price"/>

	<label style="width:20%;font-size:20;color:black;margin-left:20%" class="form-control-plaintext" >Insurance:</label>
	<input required style="width:25%;font-size:20;color:black;margin-left:20%"type='number' class="form-control" name='insurance'id="insurance"/>

	<label style="width:20%;font-size:20;color:black;margin-left:20%" class="form-control-plaintext" >Image Path:</label>
	<input required style="width:25%;font-size:20;color:black;margin-left:20%"type='text' class="form-control" name='img'id="img"/><br>

	<label style="width:20%;font-size:20;color:black;margin-left:20%" class="form-control-plaintext" >Office ID</label>
	<input required style="width:25%;font-size:20;color:black;margin-left:20%"type='text' class="form-control" name="office_id" id="office_id"/><br>

</div>
<div style="margin-left:60%">
<input style="color:white;background-color:red;border: none;font-size:20;margin-left:30%" class="btn btn-primary btn-lg" herf="adminhome.php" id=submit type="submit" name="add_car" value="ADD CAR!"> <BR></BR>
</div>

</div>

</form>
</div>


</body>
</html>
