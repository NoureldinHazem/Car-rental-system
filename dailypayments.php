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

			<title>DailyPayments</title>


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
							<a class="nav-link" href="editcars.php">ADD/DEL Cars<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="all_reservations.php">Reservations <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="advanced.php">Advanced Search <span class="sr-only">(current)</span></a>
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
			<form action="dailypayments.php" method="post">
				<br><br><br>
				<h2 style="color:white; text-align:center">Daily Payment</h2><br>
        <label  style="font-size:130%;color:white" for="from_date">From:</label>
        <input required style="padding: 4px; width: 160px;" value="" type="date" id="RStart_date" name="RStart_date">
        <label  style="font-size:130%;color:white"for="to_date" >To:</label>
        <input required style="padding: 4px; width: 160px;" type="date" id="REnd_date" name="REnd_date">
        <button name="submit" type="submit"  class="btn btn-success" value='search' style="background:grey;">Search</button>
    <br><br><br><br>

        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Date</th>
		  <th scope="col">Daily Payment</th>

    </tr>
  </thead>


  <?php 
    include 'DB connection.php';
    if(isset($_POST['submit'])){
     $start_date=$_POST['RStart_date']  ; 
	 $end_date=$_POST['REnd_date'] ; 


	$query="SELECT cash_date,SUM(total_cost) as sum FROM reservation 
	WHERE cash_date BETWEEN '$start_date' and '$end_date'
	 GROUP by cash_date";
  
  
	$result = mysqli_query($connection,$query); 
	$index=0;
	$total=0;

	while ($row=mysqli_fetch_array($result)) {  $index=$index+1;
		?>
  <tbody class="opacity-50" style="background:white;">
    <tr>
      <th scope="row"><?php echo $index?></th>
      <td><?php echo $row['cash_date']?></td>
      <td><?php echo $row['sum']?></td>
	  <?php $total=$total+$row['sum'];
	 }} ?>
  </tbody>
</table>
<label style="font-size:130%;color:white" for="total" >Total: </label>
        <output style=" background:white ;padding: 4px; width: 160px;" type="text" id="total" name="total"><?php echo $total?> EGP</output>

			</form>
		</div>
	</body>
</html>
