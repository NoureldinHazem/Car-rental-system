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
			<form action="bycustomer.php" method="post">
				<br><br><br>
				<h2 style="color:white; text-align:center">Search By Customer</h2><br>

        <label style="font-size:130%;color:white" for="customer_id" >Customer Email: </label>
        <input style=" background:white ;padding: 4px; width: 160px;"name="email" type="text" id="email" ></input>
        <button type="submit" name="submit"  class="btn btn-success" value='search' style="background:grey;">Search</button>
    <br><br><br><br>

    <table class="table">
    <thead class="thead-dark">
    <tr>
    <th scope="col">customer_id</th>
    <th scope="col">SSN</th>
    <th scope="col">fname</th>
    <th scope="col">Lname</th>
    <th scope="col">phone</th>
    <th scope="col">email</th>
    <th scope="col">reg_date</th>
    <th scope="col">sex</th>
    <th scope="col">birth_date</th>
    <th scope="col">address</th>
    </tr>
    </thead>

    <?php 
    include 'DB connection.php';
    if(isset($_POST['submit'])){
      $email=$_POST['email'];
   


	$query="SELECT * FROM customer WHERE email='$email' ";
  
  
	$result = mysqli_query($connection,$query); 
	$index=0;

	while ($row=mysqli_fetch_array($result)) {  $index=$index+1;
		?>
    <tbody class="opacity-50" style="background:white;">
    <tr>
    <th scope="row"><?php echo $row['customer_id']?></th>
    <td><?php echo $row['SSN']?></td>
    <td><?php echo $row['fname']?></td>
    <td><?php echo $row['lname']?></td>
    <td><?php echo $row['phone']?></td>
    <td><?php echo $row['email']?></td>
    <td><?php echo $row['reg_date']?></td>
    <td><?php echo $row['sex']?></td>
    <td><?php echo $row['birth_date']?></td>
    <td><?php echo $row['address']?></td>

    </tr>
    <?php }} ?>


    </tbody>
    </table>

    <br></br>






        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Reservation ID</th>
		  <th scope="col">Plate number</th>
      <th scope="col">Brand</th>
      <th scope="col">Model</th>
      <th scope="col">Year</th>
			<th scope="col">Office</th>
      <th scope="col">From</th>
      <th scope="col">To</th>



    </tr>
  </thead>

  <?php 
    include 'DB connection.php';
    if(isset($_POST['submit'])){
      $email=$_POST['email'];
   


	$query="SELECT * FROM customer natural join reservation natural join car natural join office WHERE email='$email' ";
  
  
	$result = mysqli_query($connection,$query); 
	$index=0;

	while ($row=mysqli_fetch_array($result)) {  $index=$index+1;
		?>
  <tbody class="opacity-50" style="background:white;">
    <tr>
      <th scope="row"><?php echo $index?></th>
      <td><?php echo $row['reservation_id']?></td>
      <td><?php echo $row['plate_number']?></td>
      <td><?php echo $row['brand']?></td>
      <td><?php echo $row['model']?></td>
			<td><?php echo $row['year']?></td>
      <td><?php echo $row['city']?> - <?php echo $row['location']?></td>
      <td><?php echo $row['start_date']?></td>
      <td><?php echo $row['end_date']?></td>







    </tr>
    <?php }} ?>


    
  </tbody>
</table>


			</form>
		</div>
	</body>
</html>
