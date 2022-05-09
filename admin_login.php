<?php
include "DB connection.php";

if(isset($_POST['submit'])){
session_start();

$email=$_POST['email'];
$password=$_POST['pwd'];
$encrypted_password=md5($password);


 
   $query=mysqli_query($connection,"SELECT * 
                                    FROM admin  
                                    WHERE email='$email' AND password='$encrypted_password'") ;
   $res=mysqli_fetch_array($query);
   if($res){
   $query = "SELECT * FROM admin WHERE email = '$email'";
    $result = mysqli_query($connection, $query);
    $userRow = mysqli_fetch_array($result);
    $fname = $userRow['fname'];
    $lname = $userRow['lname'];
    $email = $userRow['email'];
    $_SESSION['email']=$email;
    $_SESSION['fname']=$fname;
    $_SESSION['lname']=$lname;
    header('location:adminhome.php');
    echo"<script>alert('login successfully')</script>";
   }
   else
   {
    echo"<script>alert('invalid email or password!')</script>";
   }
 
}
 
?>