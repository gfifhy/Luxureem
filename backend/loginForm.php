<?php
session_start();
$errors=array();

include 'connection.php';

//Login
if (isset($_POST['subLogin'])) {
    $userLogin = $connection->real_escape_string($_POST['email']);
    $password = $_POST['password'];

    // Retrieve the hashed password from the database based on the email
    $checkUserQuery = "SELECT * FROM `patients` WHERE `email` = '$userLogin'";
    $result = $connection->query($checkUserQuery);

    if ($result->num_rows === 1) {
        // User with provided email exists
        $row = $result->fetch_assoc();
        $hashedPasswordDB = $row['password'];

        // Verify the password using password_verify
        if (password_verify($password, $hashedPasswordDB)) {
            // Password is correct, redirect to the landing page
            $_SESSION['email'] = $userLogin;
            $_SESSION['id'] = $row['id'];
            $_SESSION['picture'] = $row['picture'];
            $_SESSION['name'] = $row['name'];
            header("Location: ../frontEnd/productUserDashboard.php?id=" . $_SESSION['name']);
        } else {
            // Password is incorrect
            array_push($errors,"The Email/Password is incorrect");
        }
    } else {
        // User with provided email not found
        array_push($errors,"Email is not registered");
    }
}

?>
