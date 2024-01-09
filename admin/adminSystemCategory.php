<?php 

$conn = new mysqli('localhost', 'root', '', 'luxureemdb');
if ($conn->connect_error) {
  echo "Connection error: " . $conn->connect_error;
}

if (isset($_POST['insert'])) {
    $catname = $_POST['addcat'];
    
    // Check if the category already exists in the table
    $sql = "SELECT * FROM `cattable` WHERE `catname` = '$catname'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        echo "Error: The category already exists";
    } else {
        // Insert the category to the database
        $sql = "INSERT INTO `cattable` (`catname`) VALUES ('$catname')";
        if ($conn->query($sql) === TRUE) {
            
        } 
    }
}

if (isset($_POST['delete'])) {
    $catid = $_POST['delcat'];

    // Delete the category from the database
    $sql = "DELETE FROM cattable WHERE catid='$catid'";

    if ($conn->query($sql) === TRUE) {
        echo "User deleted successfully";
    } else {
        echo "Error deleting user: " . $conn->error;
    }
}





?>