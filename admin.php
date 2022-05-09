<?php include('admin_login.php') ?>

<html>
<head>
<link rel="stylesheet" media="screen" href="bootstrap.min.css">


<script type = "text/javascript">
   function do_login_admin()
   {
      
      var email = document.forms["form1"]["email"].value;
      var pass = document.forms["form1"]["pwd"].value;
     
      if(required())
      {
         
         $.ajax
            ({
            type:'post',
            url:'login.php',
            data:{
               do_login:"do_login",
               email:email,
               password:pass
            },
            success:function(response) 
            {
               if(response=="success")
               {
                  window.location.href="welcome.php";
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
   function required()
   {
      var empt1 = document.forms["form1"]["email"].value;
      var empt2 = document.forms["form1"]["pwd"].value;
      if (empt1.trim() == "" || empt2.trim()=="")
      {
         return false;
      }
      else 
      {
         return true; 
      }
   }


</script>
   
</head>
<body class="modal-body">
<style>
body {
  background-image: url('wall.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  overflow-x: hidden;

}
</style>
<main  class="container" style="margin-top: 10%;margin-left:60%"> 

<h1 style="color:white;margin-left:30 ">Admin Log in<h1>
<form action='#' method='post' onsubmit="return do_login_admin();" id="form1">
<div class="form-group">
<label style="width:20%;font-size:20;color:white;" class="form-control-plaintext" >Email:</label>
<input style="width:30%;font-size:20;color:black;" type='text' class="form-control" name='email' id='email'/>
<label style="width:30%;font-size:20;color:white;" class="form-control-plaintext" >Password:</label>
<input style="width:30%;font-size:20;color:black;" type='password' class="form-control" class="form-control"  name='pwd' id='password'/>

</div>
<div style="margin-left: 20%">
<input style="color:white;background-color:red;border: none;font-size:20;margin-left:-80" type='submit' name='submit' class="btn btn-success" value='Log in'/>
</div>
</form>

<a  href="signup.php" style="color:white ; font-size: 18px">Create an account</a><br>
<a href="index.php" style="color:white ; font-size: 18px">Log in </a>


</form>
</main>
</body>
</html>