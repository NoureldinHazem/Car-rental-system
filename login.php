<?php
include "DB connection.php";

if(isset($_POST['submit'])){
session_start();

$email=$_POST['email'];
$password=$_POST['pwd'];
$encrypted_password=md5($password);


 
   $query=mysqli_query($connection,"SELECT * 
                                    FROM customer  
                                    WHERE email='$email' AND password='$encrypted_password'") ;
   $res=mysqli_fetch_array($query);
   if($res){
   $query = "SELECT * FROM customer WHERE email = '$email'";
    $result = mysqli_query($connection, $query);
    $userRow = mysqli_fetch_array($result);
    $id=$userRow['customer_id'];
    $fname = $userRow['fname'];
    $lname = $userRow['lname'];
    $email = $userRow['email'];
    $phone = $userRow['phone'];
    $_SESSION['customer_id']=$id;
    $_SESSION['email']=$email;
    $_SESSION['fname']=$fname;
    $_SESSION['lname']=$lname;
    $_SESSION['phone']=$phone;
    echo"<script>alert('login successful')</script>";
    header('location:welcome.php');
   }
   else
   {
    echo"<script>alert('invalid email or password')</script>";
   }
 
}
?>
