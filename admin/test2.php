<?php

// Database credentials
$db_host = 'localhost';
$db_database = 'luxureemdb';
$db_username = 'root';
$db_password = '';

try {
    // Create a new PDO instance
    $dbh = new PDO("mysql:host=$db_host;dbname=$db_database", $db_username, $db_password);

    // Set the PDO error mode to exception
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Update the sales column with the submitted value
    $stmt = $dbh->prepare("UPDATE barbie SET sales = :sales");
    $stmt->bindParam(':sales', $_POST['sales']);
    $stmt->execute();

    echo "Sales updated successfully!";
} catch(PDOException $error) {
    die("ERROR: Could not connect. " . $error->getMessage());
}

?>