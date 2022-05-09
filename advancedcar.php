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
        <form action="advancedcar.php" method="post">
          <br><br><br>
          <h2 style="color:white; text-align:center">BY CAR</h2><br>
				<br><br>
				<div style="background:darkgrey;opacity:90%; ">
<div class="container">
<label style="font-size:130%;color:white;margin-top:7px" for="plate_number" >Plate No.:</label>
<input  style="padding: 4px; width: 160px;margin-top:7px" type='text' class="form-control" name='plate_number' id="plate_number"/>


<label style="font-size:130%;color:white;margin-left:3%;margin-top:7px" for="brand">Select Car brand:</label>
<input style="padding: 4px; width: 160px;margin-top:7px" type='text' class="form-control" name='brand' id="brand">


<label style="font-size:130%;color:white;margin-left:3%;margin-top:7px"  >Model:</label>
<input style="padding: 4px; width: 160px;margin-top:7px" type='text' class="form-control" name='model' id="model"/>


<label style="font-size:130%;color:white;margin-left:3%;margin-top:7px" >Color:</label>
 <input style="padding: 4px; width: 160px;margin-top:7px" class="form-control" name='color'  id="color">

</div>
<div class="container">

<label style="font-size:130%;color:white;margin-top:7px" >Select Car Type:</label>
<input style="padding: 4px; width: 160px;margin-top:7px" type='text' class="form-control" name='type' id="type">


<label style="font-size:130%;color:white;margin-left:3%;margin-top:7px"  >Select Car Transmission:</label>
					<select style="padding: 4px; width: 160px;margin-top:7px" type='text' class="form-control"  name="transsmision" id="transmission">
							<option class="ca"  value="">---- Choose ----</option>
							<option class="ca" value="m">Manual</option>
							<option  class="ca" value="a">Automatic</option><br>
								</select>

<label style="font-size:130%;color:white;margin-left:3%;margin-top:7px" >Select Car City:</label>
						<input style="padding: 4px; width: 160px;margin-top:7px" type='text' class="form-control"  name="city" id="city">

					</div>
					<div class="container">
<label  style="font-size:130%;color:white;margin-top:7px"  >Year:</label>
			<select style="padding: 4px; width: 160px;margin-top:7px" type='number' class="form-control" name='year' id="year" >
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

<label style="font-size:130%;color:white;margin-top:7px;margin-left:3%" >No. of Seats:</label>
<input style="padding: 4px; width: 160px;margin-top:7px" type='number' class="form-control" name='seats'id="seats"/>

<label style="font-size:130%;color:white;margin-top:7px;margin-left:3%"  >Price/Day:</label>
<input style="padding: 4px; width: 160px;margin-top:7px" type='number' class="form-control" name='price' id="price"/>
</div>
<div class="container">
<label style="font-size:130%;color:white;margin-top:7px"  >Insurance:</label>
<input style="padding: 4px; width: 160px;margin-top:7px" type='number' class="form-control" name='insurance'id="insurance"/>

<label style="font-size:130%;color:white;margin-top:7px;margin-left:3%" >Image Path:</label>
<input style="padding: 4px; width: 160px;;margin-top:7px" type='text' class="form-control" name='img'id="img"/>

<label style="font-size:130%;color:white;margin-top:7px;margin-left:3%"  >Office ID:</label>
<input style="padding: 4px; width: 160px;margin-top:7px"name="office_id" type='text' class="form-control" id="office_id"/><br>

<button  type="submit" name="submit" class="btn btn-success" value='search' style="background:red;margin-left:3%;margin-top:7px"> Search </button><br><br>
</div>
</div>
</div>
        <table class="table">

  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Plate no.</th>
	  <th scope="col">State</th>

      <th scope="col">Brand</th>
      <th scope="col">Model</th>
			<th scope="col">Year</th>
			<th scope="col">type</th>
			<th scope="col">Transmission</th>
			<th scope="col">Color</th>
			<th scope="col">Price</th>
			<th scope="col">Seats</th>
			<th scope="col">Insurance</th>
			<th scope="col">img.</th>
			<th scope="col">Office ID</th>
    </tr>
  </thead>

  <?php
   include 'DB connection.php';
	if(isset($_POST['submit'])){
	$plate_number = $_POST['plate_number'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $color = $_POST['color'];
    $type = $_POST['type'];
    $transsmision = $_POST['transsmision'];
    $year = $_POST['year'];
    $seats = $_POST['seats'];
    $price = $_POST['price'];
    $insurance = $_POST['insurance'];
    $image = $_POST['img'];
    $office_id = $_POST['office_id'];
	$state= $_POST['state'];
	$city= $_POST['city'];

	$query="SELECT * from car WHERE plate_number>0 ";

	if($brand!="")  $query.="and brand ='$brand' ";
    if($model!="")  $query.="and model ='$model' ";
    if($color!="")  $query.="and color ='$color' ";
    if($type!="") $query.="and type = '$type' " ;
    if($transsmision!="") $query.= "and transmission = '$transsmision' ";
    if($year!="") $query.="and year = '$year' ";
    if($seats!="") $query.="and seats = '$seats' ";
    if($price!="")	$query.="and price ='$price' ";
    if($insurance!="")	$query.="and insurance = '$insurance' ";
	if($image!="") $query.="and image = '$image' ";
    if($office_id!="") $query.="and office_id ='$office_id' ";
	if($state!="") $query.="and state = '$state' ";
	if($city!="") $query.="and city = '$city' ";
	if($plate_number!="") $query.="and plate_number = '$plate_number' ";

$index=0;
	$result = mysqli_query($connection,$query); 

		while ($row=mysqli_fetch_array($result))  { $index++;
			?>
  <tbody class="opacity-50" style="background:white;">
    <tr>
      <th scope="row"><?php echo $index?></th>
      <td><?php echo $row['plate_number']?></td>
	  <td><?php echo $row['state']?></td>

      <td><?php echo $row['brand']?></td>
      <td><?php echo $row['model']?></td>
			<td><?php echo $row['year']?></td>
			<td><?php echo $row['type']?></td>
			<td><?php echo $row['transmission']?></td>
			<td><?php echo $row['color']?></td>
			<td><?php echo $row['price']?></td>
			<td><?php echo $row['seats']?></td>
			<td><?php echo $row['insurance']?></td>
			<td><?php echo $row['image']?></td>
			<td><?php echo $row['office_id']?></td>
			
    </tr>
    
	<?php }} ?>
  </tbody>
</table>


			</form>
		</div>
	</body>
</html>
