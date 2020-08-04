<?php
session_start();
$con = mysqli_connect("localhost","root","","refugee_camp");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 $hhouse_id = $_POST["hhouse_id"];
 $rice = $_POST["rice"];
 $water = $_POST["water"];
 $sql = "INSERT INTO house_fund (hhouse_id,rice,water) VALUES ('$hhouse_id','$rice','$water')";
 if(!mysqli_query($con,$sql))
 {
	 echo"not inserted";
 }
 else {
	 $sql1 = "UPDATE fund SET frice=frice-$rice,fwater=fwater-$water WHERE id='1'";
	 mysqli_query($con,$sql1);
	 header("Location: lastPage/index.html");
 }
 
?>