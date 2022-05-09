
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
			<form action="modifycar.php" method="post">
				<br>
				<h2 style="color:white; text-align:center">Modify CAR</h2>
        <br>
<div style="background:lightgrey;opacity:90%; " >
  <label style="width:20%;font-size:20;color:black;margin-left:20%" class="form-control-plaintext" >Plate Number:</label>
  <input required style="width:25%;font-size:20;color:black;margin-left:20%"type='text' class="form-control" name='plate_number' id="plate_number"/>
<br>
  <div style="margin-left:38%">
  <input style="color:white;background-color:red;font-size:20;" class="btn btn-primary btn-lg" herf="#" id=submit type="submit" name="search" value="Search!"> <BR></BR>
  </div>
  <br>


  <table class="table">

  <thead class="thead-dark">
  <tr>
  <th scope="col">#</th>
  <th scope="col">Plate no.</th>
  <th scope="col">Brand</th>
  <th scope="col">Type</th>
  <th scope="col">Model</th>
  <th scope="col">Year</th>
  <th scope="col">Transmission</th>
  <th scope="col">Color</th>
  <th scope="col">Price</th>
  <th scope="col">Seats</th>
  <th scope="col">State</th>
  <th scope="col">Insurance</th>
  <th scope="col">img.</th>
  <th scope="col">Office ID</th>
  </tr>
  </thead>

  <?php
   include 'DB connection.php';
	if(isset($_POST['search'])){
  $plate_number=$_POST['plate_number'];
  $query="SELECT * FROM car WHERE plate_number='$plate_number' ";
  $index=0;
	$result = mysqli_query($connection,$query); 
  		while ($row=mysqli_fetch_array($result))  { $index++?>

  <tbody class="opacity-50" style="background:white;">
  <tr>
  <th scope="row"><?php echo $index?></th>
      <td><?php echo $row['plate_number']?></td>
      <td><?php echo $row['brand']?></td>
      <td><?php echo $row['type']?></td>
      <td><?php echo $row['model']?></td>
      <td><?php echo $row['year']?></td>
      <td><?php echo $row['transmission']?></td>
      <td><?php echo $row['color']?></td>
			<td><?php echo $row['price']?></td>
			<td><?php echo $row['seats']?></td>
      <td><?php echo $row['state']?></td>
			<td><?php echo $row['insurance']?></td>
			<td><?php echo $row['image']?></td>
			<td><?php echo $row['office_id']?></td>
  </tr>
  <?php }} ?>

  </tbody>
  </table>

</BR>




<div class="container">
<label style="font-size:130%;color:black;margin-top:7px">Color:</label>
	<input style="padding: 4px; width: 160px;margin-top:7px" type='text' class="form-control" name='color'  id="color">

	<label style="font-size:130%;color:black;margin-top:7px;margin-left: 20px" >Price/Day:</label>
	<input style="padding: 4px; width: 160px;margin-top:7px" type='number' class="form-control" name='price' id="price"/>

	<label style="font-size:130%;color:black;margin-top:7px;margin-left: 20px" >Insurance:</label>
	<input style="padding: 4px; width: 160px;margin-top:7px"type='number' class="form-control" name='insurance'id="insurance"/>

</div>

<div class="container">

 
	<label style="font-size:130%;color:black;margin-top:12px">Image Path:</label>
	<input style="padding: 4px; width: 160px;margin-top:12px" type='text' class="form-control" name='img'id="img"/><br>

	<label style="font-size:130%;color:black;margin-top:12px;margin-left: 20px;" >Office ID</label>
	<input style="padding: 4px; width: 160px;margin-top:12px"type='text' name="office_id"class="form-control" id="office_id"/><br>

</div>


<div style="margin-left:80%">
<input style="color:white;background-color:red;border: none;font-size:20;margin-left:30%" class="btn btn-primary btn-lg" herf="#" id=submit type="submit" name="modify" value="MODIFY!"> <BR></BR>
</div>
</div>

</form>
</div>

<?php
if(isset($_POST['modify'])){
include 'DB connection.php';
$plate_number=$_POST['plate_number'];
$color=$_POST['color'];
$insurance=$_POST['insurance'];
$price=$_POST['price'];
$image=$_POST['img'];
$office_id=$_POST['office_id'];

if($color!=""){
  $sql = "UPDATE car SET color='$color' WHERE plate_number='$plate_number' ";
	$result = mysqli_query($connection,$sql); 
  }

  if($insurance!=""){
    $sql = "UPDATE car SET insurance='$insurance'  WHERE plate_number='$plate_number' ";
    $result = mysqli_query($connection,$sql); 
  }

  if($price!=""){
    $sql = "UPDATE car SET price='$price'  WHERE plate_number='$plate_number' ";
    $result = mysqli_query($connection,$sql); 
  }

  if($image!=""){
    $sql = "UPDATE car SET `image`='$image'  WHERE plate_number='$plate_number' ";
    $result = mysqli_query($connection,$sql); 
  }


  if($office_id!=""){
    $sql = "UPDATE car SET office_id='$office_id'  WHERE plate_number='$plate_number' ";
    $result = mysqli_query($connection,$sql); 
  }
}
?>


</body>
</html>
