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

if (isset($_POST['update1'])) {

$target_dir = "../profileauthor/";

$blogpic = $target_dir . basename($_FILES["blogpic"]["name"]);
$blogauthorpic = $target_dir . basename($_FILES["blogauthorpic"]["name"]);

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($blogauthorpic, PATHINFO_EXTENSION));

// Allow certain file formats
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    
    // if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["blogpic"]["tmp_name"], $blogpic) && move_uploaded_file($_FILES["blogauthorpic"]["tmp_name"], $blogauthorpic)) {
        $query = "INSERT INTO `blogs` (`blogtitle`,`blogdesc`,`blogpic`,`blogauthor`,`blogauthorpic`,`blogdate`,`blogcat`) 
        VALUES (
            '" . mysqli_real_escape_string($conn, $_POST['blogtitle']) . "',
            '" . mysqli_real_escape_string($conn, $_POST['blogdesc']) . "',
            '" . basename($_FILES["blogpic"]["name"]) . "',
            '" . mysqli_real_escape_string($conn, $_POST['blogauthor']) . "',
            '" . basename($_FILES["blogauthorpic"]["name"]) . "',
            '" . mysqli_real_escape_string($conn, $_POST['monthname']) . "',
            '" . mysqli_real_escape_string($conn, $_POST['blogcat']) . "',
            '" . mysqli_real_escape_string($conn, $_POST['bloglink']) . "'
        )";       
    } 
        $result = mysqli_query($conn, $query);
}

}

if (isset($_POST['delete'])) {
    $blogid = $_POST['blogid'];

    // Delete the user from the database
    $sql = "DELETE FROM blogs WHERE blogid='$blogid'";

    if ($conn->query($sql) === TRUE) {
        echo "User deleted successfully";
    } else {
        echo "Error deleting user: " . $conn->error;
    }
}





?>