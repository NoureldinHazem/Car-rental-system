<?php
session_start();
$id=$_SESSION['customer_id'];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="stylesheet" media="screen" href="bootstrap.min.css">

    <title>My reservations</title>
    <style>
	body {
	background-image: url('cards_background.png');
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
	}
	</style>
  <nav class="navbar navbar-expand-lg navbar-light bg-light ">
				
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
					<a class="navbar-brand" href="#">
   						 <img src="logo2.png" width="60" height="40" alt="">
					</a>
						<li class="nav-item active">
							<a class="nav-link" href="search_design.php">For Booking <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="reservations.php">My Reservations <span class="sr-only">(current)</span></a>
						</li>
					
						<li class="nav-item">
							<a  class="nav-link" href="logout.php">Logout</a>
						</li>

					</ul>	
				</div>

			</nav>

  </head>




<form action='#'method='post';>
  <body >
  <?php 
    include 'DB connection.php';
      $query="SELECT fname,lname,SSN,email,brand,model,`year`,plate_number,`start_date`,end_date,total_cost,reservation_id,reserv_date,transmission,seats,city,total_cost,price,insurance,`image`
        From customer natural join reservation natural join car natural join office
        where customer_id='$id' 
        order by reservation_id desc";
        $result = mysqli_query($connection,$query);

        while ($row=mysqli_fetch_array($result)) { ?>
      <div class="accordion-item" id="accordion">
          <h2 class="accordion-header" id="headingone">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseone" aria-expanded="false" aria-controls="collapseone">
              Reservation ID: <?php echo $row['reservation_id'];?>           ( Reservation Date: <?php echo $row['reserv_date'];?>)
            </button>
          </h2>
          <div id="collapseone" class="accordion-collapse collapse" aria-labelledby="headingone" data-bs-parent="#accordionExample">
            <div class="accordion-body">

              <div class="card">
                <div class="card-header">
                Start from :  <?php echo $row['start_date'];?> <br>To : <?php echo $row['end_date'];?>
                </div>
                <div class="card-body">
                 
                  <div class="card mb-3" style="max-width: 540px;">
                          <div class="row g-0">
                            <div class="col-md-4">
                            <img style="height:295px;width:700px"src="cars/<?php echo $row['image'];?>" class="img-fluid rounded-start" alt="...">
                            </div>
                            
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title"><?php echo $row['brand'];?> <?php echo $row['model'];?> <?php echo $row['year'];?></h5>
                                <p class="card-text">Number of seats: <?php echo $row['seats'];?><br>Transmission: <?php echo $row['transmission'];?><br> Price/Day: <?php echo $row['price'];?> EGP<br>Insurance: <?php echo $row['insurance'];?> EGP<br>City: <?php echo $row['city'];?> </p>

                              </div>
                            </div>
                          </div>
                        </div>
                  <p class="card-text">Invoice: <?php echo $row['total_cost'];?> EGP</p>
                </div>
              </div>
            </div>
            </div>

      </div>
</div>
<?php } ?>
<label style="width:20%;font-size:150%;color:white;margin-left:10%" class="form-control-plaintext" >Enter Reserve Id You want to pay :</label>
<input style="color:black;width:20%;margin-left:10%"type='text' class="form-control" name='rev_id' id="rev_id"/>
<button style="margin-top:2%;margin-left:10%" href="adminhome.php" class="btn btn-primary btn-lg" name="pay"  value="pay">PAY</button>
<?php
    if(isset($_POST['pay'])){
           $reservation_id = $_POST['rev_id'];

           $date = date('y-m-d');
            $sql = "UPDATE reservation SET `cash_date`='$date'  WHERE customer_id='$id' And reservation_id='$reservation_id'";
            $result = mysqli_query($connection,$sql);
           }
    
?>
        </form>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
