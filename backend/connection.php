<?php

// Your database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "luxureemdb";

// Create a new connection
$connection = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}


?>