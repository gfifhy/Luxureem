<?php
// Check if form is submitted
if (isset($_POST['submit'])) {
    // Check if user input is not empty
    if (!empty($_POST['user'])) {
        // Database configuration
        $dbHost = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName = 'luxureemdb';

        // Create connection
        $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // User input
        $user = $_POST['user'];

        // Prepare statement
        $stmt = $conn->prepare("SELECT * FROM doctors WHERE name=?");

        // Bind user input
        $stmt->bind_param("s", $user);

        // Execute statement
        $stmt->execute();

        // Get results
        $result = $stmt->get_result();

        // Fetch associated array
        $row = $result->fetch_assoc();

        // Check if user exists
        if ($row) {
            // Update user information
            // You can update any column according to your requirements
            // Here I am updating name, picture, phonenumber, email, and password
            // Update these lines according to your database connection and table structure
            $name = $_POST['name'];
            $picture = $_POST['picture'];
            $phonenumber = $_POST['phonenumber'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $update = "UPDATE doctors SET name='$name', picture='$picture', phonenumber='$phonenumber', email='$email', password='$password' WHERE name='$user'";

            if ($conn->query($update) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $conn->error;
            }
        } else {
            echo "User does not exist";
        }

        // Close statement and connection
        $stmt->close();
        $conn->close();
    } else {
        echo "Please enter a user name";
    }
} else {
    echo "Access denied";
}
?>