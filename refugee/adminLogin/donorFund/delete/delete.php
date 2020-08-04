<?php
$con = mysqli_connect("localhost","root","","refugee_camp");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 $refugee_id = $_POST["refugee_id"];
$sql = "DELETE FROM refugee WHERE refugee_id='$refugee_id'";
$con->query($sql);
 header("Location: /refugee/adminLogin/donorFund/donorTable.php");
?>