<?php
include 'loginForm.php';
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

if (isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])) {
    $barbiepic = ($_FILES['image']['error'] === 0 && in_array(strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION)), array('jpg', 'jpeg', 'png'))) ? basename($_FILES['image']['name']) : null;
    
    if ($barbiepic !== null) {
        $img_upload_path = '../userreceipts/'.$barbiepic;
        move_uploaded_file($_FILES['image']['tmp_name'], $img_upload_path);

// retrieve form data
$pid = $_SESSION['id'];
$dob = $_POST['date'];

// create query
$sql = "UPDATE patients SET `date`='$dob', receipt='$barbiepic' WHERE id='$pid'";

// execute query
if ($conn->query($sql) === TRUE) {

    header("Location: ../frontend/index.php");
    $_SESSION['showModal'] = true;
} else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}


    }
}
// close connection
$conn->close();
?>
