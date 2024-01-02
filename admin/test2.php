<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "luxureemdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$barbieid = $_POST['barbieid'];

if(isset($_POST['barbiename']) && !empty($_POST['barbiename'])) {
    $barbiename = $_POST['barbiename'];
    $sql = "UPDATE barbie SET barbiename='$barbiename' WHERE barbieid='$barbieid'";

    if ($conn->query($sql) === TRUE) {
        echo "Barbie Name updated successfully";
    } else {
        echo "Error updating Barbie Name: " . $conn->error;
    }
}

if(isset($_POST['barbiedesc']) && !empty($_POST['barbiedesc'])) {
    $barbiedesc = $_POST['barbiedesc'];
    $sql = "UPDATE barbie SET barbiedesc='$barbiedesc' WHERE barbieid='$barbieid'";

    if ($conn->query($sql) === TRUE) {
        echo "Barbie Description updated successfully";
    } else {
        echo "Error updating Barbie Description: " . $conn->error;
    }
}

if(isset($_POST['barbiepic']) && !empty($_POST['barbiepic'])) {
    $barbiepic = $_POST['barbiepic'];
    $sql = "UPDATE barbie SET barbiepic='$barbiepic' WHERE barbieid='$barbieid'";

    if ($conn->query($sql) === TRUE) {
        echo "Barbie Picture URL updated successfully";
    } else {
        echo "Error updating Barbie Picture URL: " . $conn->error;
    }
}

if(isset($_POST['barbieprice']) && !empty($_POST['barbieprice'])) {
    $barbieprice = $_POST['barbieprice'];
    $sql = "UPDATE barbie SET barbieprice='$barbieprice' WHERE barbieid='$barbieid'";

    if ($conn->query($sql) === TRUE) {
        echo "Barbie Price updated successfully";
    } else {
        echo "Error updating Barbie Price: " . $conn->error;
    }
}

$conn->close();
?>