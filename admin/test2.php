<?php
// database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "luxureemdb";

// create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}

// retrieve form data
$pid = $_POST['pid'];
$dob = $_POST['dob'];

// create query
$sql = "UPDATE patients SET `date`='$dob' WHERE id='$pid'";

// execute query
if ($conn->query($sql) === TRUE) {
 echo "Record updated successfully";
} else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}

// close connection
$conn->close();
?>