<?php
session_start();
$errors=array();

include 'connection.php';

// Registration
if (isset($_POST['subSignup'])) {
    $name = $connection->real_escape_string($_POST['name']);
    $age = $connection->real_escape_string($_POST['age']);
    $sex = $connection->real_escape_string($_POST['sex']);
    $cellphone = $connection->real_escape_string($_POST['cellphone']);
    $address = $connection->real_escape_string($_POST['address']);
    $email = $connection->real_escape_string($_POST['email']);
    $password = $_POST['password'];

    // Check if the email is already in the database
    $checkEmailQuery = "SELECT `email` FROM `patients` WHERE `email` = '$email'";
    $resultEmail = $connection->query($checkEmailQuery);

    // Check if the age is between 17 and 100
    if ($age < 17 || $age > 100) {
    array_push($errors,"Age must be between 17 and 100.");
    }

    if (strlen($cellphone) != 11 || !ctype_digit($cellphone)) {
        array_push($errors,"Phone number must be exactly 11 digits.");
    }

    // Password complexity validation
    if (!preg_match('/^(?=.*[A-Z])(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{8,}$/', $password)) {
        // Password does not meet complexity requirements
        array_push($errors,"Password must contain at least one capital letter, one special character, and be at least 8 characters long.");
    } elseif ($resultEmail->num_rows > 0) {
        array_push($errors,"Email already exists. Please use a different email.");
    } elseif (strlen($cellphone) != 11 || !ctype_digit($cellphone)){
        array_push($errors,"Phone number must be exactly 11 digits.");
    } elseif ($age < 17 || $age > 100) {
        array_push($errors,"Age must be between 17 and 100.");
    } else{

        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Get the current date and time
        $currentDateTime = date('Y-m-d H:i:s');

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
                 $img_upload_path = '../userupload/'.$new_img_name;
                 move_uploaded_file($tmp_name, $img_upload_path);
   
                // Insert the record into the database
                $insertQuery = "INSERT INTO `patients` (`name`,`picture`,`age`,`sex`,`phonenumber`,`address`, `email`, `password`, `regdate`) VALUES ('$name','$new_img_name','$age','$sex','$cellphone','$address','$email','$hashedPassword', '$currentDateTime')";
                $resultInsert = $connection->query($insertQuery);
                if ($resultInsert) {
                    // Redirect to index.html after successful registration
                    header("Location: ../frontend/loginForm.php");
                } else {
                    array_push($errors,"Registration failed, please try again");
                }
                
                 header("Location: ../frontend/loginForm.php");
                   exit;
               }else {
                array_push($errors,"Cannot upload this type of file");
               }
            }else {
                array_push($errors,"Registration failed, please try again");
            }
        }
        else{
            echo "No image selected.";
        }
    }
}

// Close the database connection
$connection->close();