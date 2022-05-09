<?php

if(isset($_POST['search'])){
    $year=$_POST['year'];
    $brand=$_POST['brand'];
    $city=$_POST['city'];
    $max_price=$_POST['tprice'];
    $min_price=$_POST['fprice'];
    $transmission=$_POST['transmission'];
    $type=$_POST['type'];
    $start_date=$_POST['RStart_date'];
    $end_date=$_POST['REnd_date'];

    
    $sql = "SELECT *
    FROM  car natural join office
    WHERE  `year` >= '$year' and city='$city' and transmission='$transmission' and price >= '$min_price' and price <='$max_price' and plate_number NOT IN  ( 
    SELECT  plate_number
    FROM reservation   
    WHERE  
    (start_date <='$start_date' and end_date >= '$start_date') OR (start_date <='$end_date' and end_date >= '$end_date')                      
    Union
    SELECT plate_number 
    FROM service
    WHERE 
    (start_date <='$start_date' and end_date >= '$start_date') OR (start_date <='$end_date' and end_date >= '$end_date'))";
    
    $brand_query="and brand= '$brand' " ;
    $type_query="and type ='$type' " ;
    $query_end="and plate_number NOT IN  ( 
    SELECT  plate_number
    FROM reservation   
    WHERE  
    (start_date <='$start_date' and end_date >= '$start_date') OR (start_date <='$end_date' and end_date >= '$end_date')                      
    Union
    SELECT plate_number 
    FROM service
    WHERE 
    (start_date <='$start_date' and end_date >= '$start_date') OR (start_date <='$end_date' and end_date >= '$end_date') ";

  if($brand!=""){
    $sql.=$brand_query;
  }

  if($type!=""){
    $sql.=$type_query;
  }
  $_SESSION['done']=$sql;
header('location:cards.php');
}


?>