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

// Add Products
if (isset($_POST['adminSub'])) {
    $barbiecat = $conn->real_escape_string($_POST['barbiecat']);
    $barbiename = $conn->real_escape_string($_POST['prodname']);
    $barbiedesc = $conn->real_escape_string($_POST['desc']);
    $barbieprice = $conn->real_escape_string($_POST['price']);


    if (isset($_FILES['barbiepic']['name']) AND !empty($_FILES['barbiepic']['name'])) {
        $barbiepic = basename($_FILES['barbiepic']['name']);
        $img_name = $_FILES['barbiepic']['name'];
        $tmp_name = $_FILES['barbiepic']['tmp_name'];
        $error = $_FILES['barbiepic']['error'];
        
        if($error === 0){
           $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
           $img_ex_to_lc = strtolower($img_ex);
    
           $allowed_exs = array('jpg', 'jpeg', 'png');
           if(in_array($img_ex_to_lc, $allowed_exs)){
             $img_upload_path = '../productupload/'.$barbiepic;
             move_uploaded_file($tmp_name, $img_upload_path);
             $sql = "INSERT INTO `barbie` (`barbiecat`,`barbiename`,`barbiedesc`,`barbiepic`, `barbieprice`) VALUES ('$barbiecat','$barbiename','$barbiedesc','$barbiepic','$barbieprice')";
        
    
             if ($conn->query($sql) === TRUE) {
                 echo "";
             } else {
                 echo "Error updating Barbie Picture URL: " . $conn->error;
             }
           }
        }
     }
    }
?>

<?php
// Edit Products
if (isset($_POST['update'])){
$barbieid = $_POST['barbieid'];

if(isset($_POST['barbiename']) && !empty($_POST['barbiename'])) {
    $barbiename = $_POST['barbiename'];
    $sql = "UPDATE barbie SET barbiename='$barbiename' WHERE barbieid='$barbieid'";

    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error updating Barbie Name: " . $conn->error;
    }
}

if(isset($_POST['barbiedesc']) && !empty($_POST['barbiedesc'])) {
    $barbiedesc = $_POST['barbiedesc'];
    $sql = "UPDATE barbie SET barbiedesc='$barbiedesc' WHERE barbieid='$barbieid'";

    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error updating Barbie Description: " . $conn->error;
    }
}

if (isset($_FILES['barbiepic']['name']) AND !empty($_FILES['barbiepic']['name'])) {
    $barbiepic = basename($_FILES['barbiepic']['name']);
    $img_name = $_FILES['barbiepic']['name'];
    $tmp_name = $_FILES['barbiepic']['tmp_name'];
    $error = $_FILES['barbiepic']['error'];
    
    if($error === 0){
       $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
       $img_ex_to_lc = strtolower($img_ex);

       $allowed_exs = array('jpg', 'jpeg', 'png');
       if(in_array($img_ex_to_lc, $allowed_exs)){
         $img_upload_path = '../productupload/'.$barbiepic;
         move_uploaded_file($tmp_name, $img_upload_path);
         $sql = "UPDATE barbie SET barbiepic='$barbiepic' WHERE barbieid='$barbieid'";
    

         if ($conn->query($sql) === TRUE) {
             echo "";
         } else {
             echo "Error updating Barbie Picture URL: " . $conn->error;
         }
       }
    }
 } 

if(isset($_POST['barbieprice']) && !empty($_POST['barbieprice'])) {
    $barbieprice = $_POST['barbieprice'];
    $sql = "UPDATE barbie SET barbieprice='$barbieprice' WHERE barbieid='$barbieid'";

    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error updating Barbie Price: " . $conn->error;
    }
}

if(isset($_POST['barbiecat']) && !empty($_POST['barbiecat'])) {
    $barbiecat = $_POST['barbiecat'];
    $sql = "UPDATE barbie SET barbiecat='$barbiecat' WHERE barbieid='$barbieid'";

    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error updating Barbie Price: " . $conn->error;
    }
}

}
?>

<?php
// Edit Products
// if delete button is clicked
if (isset($_POST['delete'])) {
    $barbieid = $_POST['barbieid'];

    // check if barbie id is not empty
    if (!empty($barbieid)) {
        // sql query to delete a product with the given barbie id
        $sql = "DELETE FROM barbie WHERE barbieid='$barbieid'";

        if ($conn->query($sql) === TRUE) {
            echo "";
        } else {
            echo "Error updating Barbie Price: " . $conn->error;
        }

    } else {
        echo "Barbie ID is empty.";
    }
}

?>