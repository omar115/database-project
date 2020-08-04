<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}


</style>
</head>
<body>

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

$sql = "SELECT donor_id, username, email FROM donors";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>donor_id</th><th>username</th><th>email</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["donor_id"]. "</td><td>" . $row["username"]. "</td><td>" . $row["email"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>