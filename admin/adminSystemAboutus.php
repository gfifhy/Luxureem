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
    $target_dir = "../imgaboutus/";
    $currentHeaderPic = $target_dir . mysqli_fetch_assoc(mysqli_query($conn, "SELECT sec1pic1 FROM aboutus WHERE aboutusid=1"))['sec1pic1'];
    
    $sec1pic1 = $target_dir . basename($_FILES["sec1pic1"]["name"]);
    $sec1pic2 = $target_dir . basename($_FILES["sec1pic2"]["name"]);

    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($sec1pic1, PATHINFO_EXTENSION));

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["sec1pic1"]["tmp_name"], $sec1pic1) && move_uploaded_file($_FILES["sec1pic2"]["tmp_name"], $sec1pic2)) {
        // Update the database with the new header picture
         $query = "UPDATE aboutus SET sec1pic1='" . basename($_FILES["sec1pic1"]["name"]) . "', sec1pic2='" . basename($_FILES["sec1pic2"]["name"]) . "' WHERE aboutusid=1";
         $result = mysqli_query($conn, $query);
         if ($result) {
             
         } else {
             
         }
        } else {
            
        }
    }

     // Update the webheader label 1
     if ($_POST['sec1label'] != "") {
        $query = "UPDATE aboutus SET sec1label='" . mysqli_real_escape_string($conn, $_POST['sec1label']) . "' WHERE aboutusid=1";       
        $result = mysqli_query($conn, $query);
           if ($result) {
            
           } else {
               
           }
        }
    
     // Update the webheader label 1
     if ($_POST['sec1desc'] != "") {
        $query = "UPDATE aboutus SET sec1desc='" . mysqli_real_escape_string($conn, $_POST['sec1desc']) . "' WHERE aboutusid=1";       
        $result = mysqli_query($conn, $query);
           if ($result) {
            
           } else {
               
           }
        }
 }

 if (isset($_POST['update2'])) {

     if ($_POST['sec2label1'] != "") {
        $query = "UPDATE aboutus SET sec2label1='" . mysqli_real_escape_string($conn, $_POST['sec2label1']) . "' WHERE aboutusid=1";       
        $result = mysqli_query($conn, $query);
           if ($result) {
            
           } else {
               
           }
        }
    
     if ($_POST['sec2sublabel1'] != "") {
        $query = "UPDATE aboutus SET sec2sublabel1='" . mysqli_real_escape_string($conn, $_POST['sec2sublabel1']) . "' WHERE aboutusid=1";       
        $result = mysqli_query($conn, $query);
           if ($result) {
            
           } else {
               
           }
        }

     if ($_POST['sec2sublabel2'] != "") {
        $query = "UPDATE aboutus SET sec2sublabel2='" . mysqli_real_escape_string($conn, $_POST['sec2sublabel2']) . "' WHERE aboutusid=1";       
        $result = mysqli_query($conn, $query);
           if ($result) {
            
           } else {
               
           }
        }

     if ($_POST['sec2sublabel3'] != "") {
        $query = "UPDATE aboutus SET sec2sublabel3='" . mysqli_real_escape_string($conn, $_POST['sec2sublabel3']) . "' WHERE aboutusid=1";       
        $result = mysqli_query($conn, $query);
           if ($result) {
            
           } else {
               
           }
        }

     if ($_POST['sec2sublabel4'] != "") {
        $query = "UPDATE aboutus SET sec2sublabel4='" . mysqli_real_escape_string($conn, $_POST['sec2sublabel4']) . "' WHERE aboutusid=1";       
        $result = mysqli_query($conn, $query);
           if ($result) {
            
           } else {
               
           }
        }

     if ($_POST['sec2desc1'] != "") {
        $query = "UPDATE aboutus SET sec2desc1='" . mysqli_real_escape_string($conn, $_POST['sec2desc1']) . "' WHERE aboutusid=1";       
        $result = mysqli_query($conn, $query);
           if ($result) {
            
           } else {
                   
           }
        }

     if ($_POST['sec2desc2'] != "") {
        $query = "UPDATE aboutus SET sec2desc2='" . mysqli_real_escape_string($conn, $_POST['sec2desc2']) . "' WHERE aboutusid=1";       
        $result = mysqli_query($conn, $query);
           if ($result) {
            
           } else {
                   
           }
        }
        
     if ($_POST['sec2desc3'] != "") {
        $query = "UPDATE aboutus SET sec2desc3='" . mysqli_real_escape_string($conn, $_POST['sec2desc3']) . "' WHERE aboutusid=1";       
        $result = mysqli_query($conn, $query);
           if ($result) {
            
           } else {
                   
           }
        }

     if ($_POST['sec2desc4'] != "") {
        $query = "UPDATE aboutus SET sec2desc4='" . mysqli_real_escape_string($conn, $_POST['sec2desc4']) . "' WHERE aboutusid=1";       
        $result = mysqli_query($conn, $query);
           if ($result) {
            
           } else {
                   
           }
        }

        $target_dir = "../imgaboutus/";
        $currentHeaderPic = $target_dir . mysqli_fetch_assoc(mysqli_query($conn, "SELECT sec2pic1 FROM aboutus WHERE aboutusid=1"))['sec2pic1'];
        
        $sec2pic1 = $target_dir . basename($_FILES["sec2pic1"]["name"]);
    
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($sec2pic1, PATHINFO_EXTENSION));
    
        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            
            $uploadOk = 0;
        }
    
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["sec2pic1"]["tmp_name"], $sec2pic1)) {
            // Update the database with the new header picture
             $query = "UPDATE aboutus SET sec2pic1='" . basename($_FILES["sec2pic1"]["name"]) . "' WHERE aboutusid=1";
             $result = mysqli_query($conn, $query);
             if ($result) {
                 
             } else {
                 
             }
            } else {
                
            }
        }
        
 }

 if (isset($_POST['update3'])) {

    if ($_POST['sec2label2'] != "") {
       $query = "UPDATE aboutus SET sec2label2='" . mysqli_real_escape_string($conn, $_POST['sec2label2']) . "' WHERE aboutusid=1";       
       $result = mysqli_query($conn, $query);
          if ($result) {
           
          } else {
              
          }
       }

    if ($_POST['sec2desc5'] != "") {
       $query = "UPDATE aboutus SET sec2desc5='" . mysqli_real_escape_string($conn, $_POST['sec2desc5']) . "' WHERE aboutusid=1";       
       $result = mysqli_query($conn, $query);
          if ($result) {
           
          } else {
              
          }
       }       

       $target_dir = "../imgaboutus/";
       $currentHeaderPic = $target_dir . mysqli_fetch_assoc(mysqli_query($conn, "SELECT sec2pic2 FROM aboutus WHERE aboutusid=1"))['sec2pic2'];
       
       $sec2pic2 = $target_dir . basename($_FILES["sec2pic2"]["name"]);
   
       $uploadOk = 1;
       $imageFileType = strtolower(pathinfo($sec2pic2, PATHINFO_EXTENSION));
   
       // Allow certain file formats
       if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
           
           $uploadOk = 0;
       }
   
       // Check if $uploadOk is set to 0 by an error
       if ($uploadOk == 0) {
           
           // if everything is ok, try to upload file
       } else {
           if (move_uploaded_file($_FILES["sec2pic2"]["tmp_name"], $sec2pic2)) {
           // Update the database with the new header picture
            $query = "UPDATE aboutus SET sec2pic2='" . basename($_FILES["sec2pic2"]["name"]) . "' WHERE aboutusid=1";
            $result = mysqli_query($conn, $query);
            if ($result) {
                
            } else {
                
            }
           } else {
               
           }
       }
       
}


?>