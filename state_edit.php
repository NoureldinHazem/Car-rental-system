<?php
include 'DB Connection.php';



if(isset($_POST['edit'])){
    $plate_number = $_POST['plate_number'];
    $state = $_POST['state'];
   

    $sql = "SELECT * FROM car WHERE plate_number='$plate_number'";
    $result = mysqli_query($connection,$sql);


    if(mysqli_num_rows($result) != 0)
    {
        $sql = "UPDATE car SET `state`='$state'  WHERE plate_number='$plate_number'";
        $result = mysqli_query($connection,$sql);

        if($result)
        {
            echo"<script> alert('Car Modified  Successfully')</script>";
            header('location:adminhome.php');
        }else {
            echo "<script>alert('Something went wrong')</script>";
             }
    }else {
        echo "<script>alert('No Car with this plate number!!')</script>";
          }   
        }
    
?>