
<html>
	<head>
		<title>Booking Page</title>
		<style>
		body {
		background-image: url('cards_background.png');
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: cover;
		}
		</style>
		<link rel="stylesheet" media="screen" href="bootstrap.min.css">



		<script type = "text/javascript">

   function do_search()
   {
      
	var RStart_date = document.forms["form3"]["RStart_date"].value;
      var REnd_date = document.forms["form3"]["REnd_date"].value;
	  var fprice = document.forms["form3"]["fprice"].value;
      var tprice = document.forms["form3"]["tprice"].value;

     
      if(reg())
      {
         
         $.ajax
            ({
            type:'post',
            url:'search_design.php',
            data:{
               do_search:"do_search",
			   RStart_date:RStart_date,
               REnd_date:REnd_date,
			   fprice:fprice,
			   tprice:tprice,
            },
            success:function(response) 
            {
               if(response=="success")
               {
                  window.location.href="cards.php";
               }
               else
               {
                     
                     alert("Wrong Details");
               }
            }
         });
      }

      else
      {
         alert("Please Fill All The Details");
      }

      return false;
   }
   
   function reg()
   {
      var emptt1 = document.forms["form3"]["RStart_date"].value;
      var emptt2 = document.forms["form3"]["REnd_date"].value;
      var emptt3 = document.forms["form3"]["city"].value;
	  var emptt4 = document.forms["form3"]["fprice"].value;
      var emptt5 = document.forms["form3"]["tprice"].value;

	  if (empt1.trim() == "" || empt2.trim()=="" || empt3.trim()=="")
	  {
         alert("Please fill the empty field");
         return false;
      }
      else if(emptt1 < emptt2)
      {
         alert("please choose a valid start and end date");
         return false;
      }
	  else if(emptt4 <= emptt5)
      {
         alert("please choose a valid price");
         return false;
      }
      else 
      {
         return true; 
      }
   }

</script>

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
							<a style="color:black"class="nav-link" href="search_design.php">For Booking</a>
						</li>
						<li class="nav-item active">
							<a style="color:black"class="nav-link" href="reservations.php">My Reservations </a>
						</li>
						
						
						<li class="nav-item">
							<a  class="nav-link" href="logout.php">Logout</a>
						</li>

					</ul>	
				</div>

			</nav>
	</head>

	<body style="text-align:center" class="modal-body">
	<div class="card" style="width: 40%;margin-left:30%;margin-top:2%">
 		 <div class="card-body">
			  <br>
		  <h5 style="font-size:200%"class="card-title">Select your car specs</h5>
	<br>
	<div>
				
		<form action='cards.php' method='post' onsubmit="return do_search();" id="form3">
		
	<!-- <h2 style="color:white">Search</h2> -->
		
	
			<label  style="font-size:130%"for="from_date">From:</label>
			<input required style="padding: 4px; width: 160px;"  value=""type="date" id="RStart_date" name="RStart_date">
			<label  style="font-size:130%"for="to_date">To:</label>
			<input  required style="padding: 4px; width: 160px;" type="date" id="REnd_date" name="REnd_date">
		
	

   			<br><br>
			   <label style="font-size:130%">Location:</label>
								<select required name="city" id="city">
								<option class="ca"  value="">You must pick city</option>
   				<?php 
				   		include'DB connection.php';
						$sql1 = "SELECT DISTINCT city from office";
						$result1 = mysqli_query($connection,$sql1);
						while($row1 = mysqli_fetch_array($result1))
						{
							echo "<option value='".$row1['city']."'>".$row1['city']."</options>";
						}
				?>
																			</select>
																			<br></br>

		
		<label style="font-size:130%">Car brand:</label>
							<select name="brand" id="brand">
							<option class="ca"  value="">Default (all)</option>
		<?php
   				$sql = "SELECT DISTINCT brand FROM car";
   				$result = mysqli_query($connection,$sql);
				while($row = mysqli_fetch_array($result))
				{
				 echo "<option value='".$row['brand']."'>" .$row['brand'] ."</options>" ;
				}
				  
		?>
								</select><br>
		<br>



		<label style="font-size:130% ">Car Transmission:</label>
					<select name="transmission" id="transmission">
							<option class="ca"  value="a">Default (Automatic)</option>
							<option class="ca" value="m">Manual</option>
							<option  class="ca" value="a">Automatic</option><br>

								</select><br>

			<br>
		<label style="font-size:130%">Car Type:</label>
														<select name="type" id="type">
															<option class="ca"  value="">Default (all)</option>
		<?php
				$sql2 = "SELECT DISTINCT `type` FROM car";
				$result2 = mysqli_query($connection,$sql2);
				while($row2 = mysqli_fetch_array($result2))
				{
					echo "<option value='".$row2['type']."'>" .$row2['type'] ."</options>" ;
				} 
				?>
														</select>
														<br></br>
			
														<label style="font-size:130%"> Price:</label>
							<select name="fprice" id="fprice">
								<option class="ca"  value="0"> From </option>
								<option class="ca" value="500">500</option>
								<option  class="ca" value="1000">1000</option>
								<option  class="ca" value="1500">1500</option>
								<option  class="ca" value="2000">2000</option>
								<option  class="ca" value="2500">2500</option>
								<option  class="ca" value="3000">3000</option>
								<option  class="ca" value="3500">3500</option>
								<option  class="ca" value="400">4000</option>
								<option  class="ca" value="4500">4500</option>
								<option  class="ca" value="5000">5000</option>

							</select>

													<select name="tprice" id="tprice">
													<option class="ca"  value="10000"> To </option>
								<option  class="ca" value="1000">1000</option>
								<option  class="ca" value="1500">1500</option>
								<option  class="ca" value="2000">2000</option>
								<option  class="ca" value="2500">2500</option>
								<option  class="ca" value="3000">3000</option>
								<option  class="ca" value="3500">3500</option>
								<option  class="ca" value="400">4000</option>
								<option  class="ca" value="4500">4500</option>
								<option  class="ca" value="5000">5000</option>
								<option  class="ca" value="5500">5500</option>
								<option  class="ca" value="6000">6000</option>
								<option  class="ca" value="6500">6500</option>
								<option  class="ca" value="7000">7000</option>
								<option  class="ca" value="7500">7500</option>
								<option  class="ca" value="8000">8000</option>
								<option  class="ca" value="8500">8500</option>
								<option  class="ca" value="9000">9000</option>
								<option  class="ca" value="9500">9500</option>
								<option  class="ca" value="10000">10000</option>

													</select><br>

	
		<br>
			<label  style="font-size:130%"for="year">Starting From Year:</label>
			<select name="year"  id="year" >
																						<option value="1999">Default (1999)</option>
																						<option value="1999">1999</option>
																						<option value="2000">2000</option>
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
		<br></br>


			<button type="submit"  class="btn btn-success" value='search' name='search' >Search Available Cars</button>


						</form>
					</div>
						<a style="color:black" href="welcome.php" class="ca">Back</a>
					</div>
			</form>
			</div>
			</div>
		</div>
		
	</body>
</html>
