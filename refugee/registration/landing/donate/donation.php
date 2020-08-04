<?php
session_start();
$username = $_SESSION['username'];
$con = mysqli_connect("localhost","root","","refugee_camp");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 $email = $_POST["email"];
 $rice = $_POST["rice"];
 $water = $_POST["water"];
 $sql = "SELECT donor_id FROM donors where username = '$username'";
 $result=mysqli_query($con,$sql);
 $row=mysqli_fetch_array($result);
 $donor_id=$row[0];
 $sql2 = "INSERT INTO donor_fund (ddonor_id,username,drice,dwater) VALUES ('$donor_id','$username','$rice','$water')";
 if(!mysqli_query($con,$sql2))
 {
	 echo"not inserted";
 }
 else {
	 $sql1 = "UPDATE fund SET frice=frice+$rice,fwater=fwater+$water WHERE id='1'";
	 mysqli_query($con,$sql1);
	 header("Location: lastPage/index.html");
 }
 
?>