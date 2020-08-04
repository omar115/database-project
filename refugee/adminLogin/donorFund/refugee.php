<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>

<link href="styles.css" rel="stylesheet" type="text/css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
.w3-button {width:150px;}
</style>

</head>
<body>


<div class="wrapper">
  
 <p><a href="add/index.html"<button class="w3-button w3-teal w3-border"><b>ADD</b></button></a></p> 
 <p><a href="delete/index.html" class="w3-button w3-red w3-border"><b>DELETE</b></a></p>
</div>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "refugee_camp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT refugee_id,rhouse_id, name,age FROM refugee";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Refugee ID</th><th>House ID</th><th>Name</th><th>Age</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<tr><td>" . $row["refugee_id"]. "</td><td>" . $row["rhouse_id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["age"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>