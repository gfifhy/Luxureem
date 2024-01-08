<?php
session_start();
$errors=array();

include '../backend/connection.php';

// Add
if (isset($_POST['adminSub'])) {
    $name = $connection->real_escape_string($_POST['name']);
    $phone = $connection->real_escape_string($_POST['phone']);
    $email = $connection->real_escape_string($_POST['email']);
    $password = $_POST['password'];

    //Check if the email is already in the database
    $checkEmailQuery = "SELECT `email` FROM `doctors` WHERE `email` = '$email'";
    $resultEmail = $connection->query($checkEmailQuery);

    // Password complexity validation
    if (!preg_match('/^(?=.*[A-Z])(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{8,}$/', $password)) {
        // Password does not meet complexity requirements
        array_push($errors,"Password must contain at least one capital letter, one special character, and be at least 8 characters long.");
    } elseif ($resultEmail->num_rows > 0) {
        array_push($errors,"Email already exists. Please use a different email.");
    } else {

        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
     
        if (isset($_FILES['pp']['name']) AND !empty($_FILES['pp']['name'])) {
         
            $img_name = $_FILES['pp']['name'];
            $tmp_name = $_FILES['pp']['tmp_name'];
            $error = $_FILES['pp']['error'];
            
            if($error === 0){
               $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
               $img_ex_to_lc = strtolower($img_ex);
   
               $allowed_exs = array('jpg', 'jpeg', 'png');
               if(in_array($img_ex_to_lc, $allowed_exs)){
                 $new_img_name = uniqid($name, true).'.'.$img_ex_to_lc;
                 $img_upload_path = '../upload/'.$new_img_name;
                 move_uploaded_file($tmp_name, $img_upload_path);
   
                 // Insert into Database
                 $insertQuery = "INSERT INTO `doctors` (`name`,`picture`,`phonenumber`, `email`, `password`) VALUES ('$name','$new_img_name','$phone','$email','$hashedPassword')";
                 $resultInsert = $connection->query($insertQuery);
   
                 header("Location: #");
                   exit;
               }else {
                array_push($errors,"Cannot upload this type of file");
               }
            }else {
                array_push($errors,"Registration failed, please try again");
            }
   
         }else {
            // Insert the record into the database
            $insertQuery = "INSERT INTO `doctors` (`name`,`phonenumber`, `email`, `password`) VALUES ('$name','$phone','$email','$hashedPassword')";
            $resultInsert = $connection->query($insertQuery);

            if ($resultInsert) {
            // Redirect to index.html after successful registration
            header("Location: #");
            } else {
            array_push($errors,"Registration failed, please try again");
            }
         }
 
    }
}

if (isset($_POST['delete'])) {
    $userid = $_POST['userid'];

    // Delete the user from the database
    $sql = "DELETE FROM doctors WHERE id='$userid'";

    if ($connection->query($sql) === TRUE) {
        echo "User deleted successfully";
    } else {
        echo "Error deleting user: " . $connection->error;
    }
}

// Close the database connection
$connection->close();