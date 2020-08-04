<?php
$con = mysqli_connect("localhost","root","","refugee_camp");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$rhouse_id = $_POST["rhouse_id"];
$name = $_POST["name"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$parent = $_POST["parent"];
$sql = "INSERT INTO refugee (rhouse_id,name,age,gender,parent) VALUES ('$rhouse_id','$name','$age','$gender','$parent')";
$con->query($sql);
 header("Location: /refugee/adminLogin/donorFund/donorTable.php");
?>