<?php 
// Update the user name

if (isset($_POST['updatename'])) {
    $id = $_SESSION['id'];
    
    $query = "UPDATE patients SET `name`='" . mysqli_real_escape_string($connection, $_POST['fullname']) . "' WHERE id = $id";       
    $result = mysqli_query($connection, $query);
    $fetchQuery = "SELECT * FROM patients WHERE id = $id";
    $fetchResult = mysqli_query($connection, $fetchQuery);

    if ($fetchResult && $row = mysqli_fetch_assoc($fetchResult)) {
        // Update the session variable with the new name
        $_SESSION['name'] = $row['name'];
    }
    }

if (isset($_POST['updateprofile'])) {
    if (isset($_FILES['profilepic']['name']) && !empty($_FILES['profilepic']['name'])) {
        $img_name = $_FILES['profilepic']['name'];
        $tmp_name = $_FILES['profilepic']['tmp_name'];
        $error = $_FILES['profilepic']['error'];

        if ($error === 0) {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_to_lc = strtolower($img_ex);

            $allowed_exs = array('jpg', 'jpeg', 'png');
            if (in_array($img_ex_to_lc, $allowed_exs)) {
                // Generate a unique name for the image
                $new_img_name = uniqid($img_name, true) . '.' . $img_ex_to_lc;
                $img_upload_path = '../userupload/' . $new_img_name;

                // Move the uploaded file to the new location
                move_uploaded_file($tmp_name, $img_upload_path);

                // Update the record in the database with the new profile picture
                $id = $_SESSION['id'];
                $updateQuery = "UPDATE patients SET `picture`='$new_img_name' WHERE id = $id";
                $resultUpdate = $connection->query($updateQuery);

                // Update the session variable with the new picture
                $_SESSION['picture'] = $new_img_name;
            } else {
                array_push($errors, "Cannot upload this type of file");
            }
        }
    }
}

if (isset($_POST['updatephone'])) {
    $id = $_SESSION['id'];
    
    $query = "UPDATE patients SET `phonenumber`='" . mysqli_real_escape_string($connection, $_POST['phone']) . "' WHERE id = $id";       
    $result = mysqli_query($connection, $query);

    }

if (isset($_POST['updateadd'])) {
    $id = $_SESSION['id'];
    
    $query = "UPDATE patients SET `address`='" . mysqli_real_escape_string($connection, $_POST['address']) . "' WHERE id = $id";       
    $result = mysqli_query($connection, $query);

    }
?>