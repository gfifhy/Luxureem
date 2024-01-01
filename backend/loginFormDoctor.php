<?php
session_start();
$errors=array();

include 'connection.php';

//Login
if (isset($_POST['subLoginDoctor'])) {
    $userLogin = $connection->real_escape_string($_POST['emailDoctor']);
    $password = $_POST['passwordDoctor'];

    // Retrieve the hashed password from the database based on the email
    $checkUserQuery = "SELECT * FROM `doctors` WHERE `email` = '$userLogin'";
    $result = $connection->query($checkUserQuery);

    if ($result->num_rows === 1) {
        // User with provided email exists
        $row = $result->fetch_assoc();
        $hashedPasswordDB = $row['password'];

        // Verify the password using password_verify
        if (password_verify($password, $hashedPasswordDB)) {
            // Password is correct, redirect to the landing page
            $_SESSION['email'] = $userLogin;
            $_SESSION['userData'] = array();
            $_SESSION['userData']['email'] = $userLogin;
            $_SESSION['userData']['name'] = $row['name'];
            $_SESSION['userData']['id'] = $row['id'];
            $_SESSION['userData']['pp'] = $row['picture'];
            header("Location: ../frontEnd/doctorDashboardProfile.php");
        } else {
            // Password is incorrect
            array_push($errors,"The Email/Password is incorrect");
        }
    } else {
        // User with provided email not found
        array_push($errors,"Email is not registered");
    }
}

// Close the database connection
$connection->close();


?>  