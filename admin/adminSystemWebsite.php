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
    $currentWebname = mysqli_fetch_assoc(mysqli_query($conn, "SELECT webname FROM webcontent WHERE webid=1"))['webname'];
    $target_dir = "../frontend/img/";

    if ($_POST['webname'] != "") {
        $query = "UPDATE webcontent SET webname='" . mysqli_real_escape_string($conn, $_POST['webname']) . "' WHERE webid=1";
        $result = mysqli_query($conn, $query);
        if ($result) {
            
        } else {
           
        }
    }

    $target_file = $target_dir . basename($_FILES["weblogo"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
      $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      
    // if everything is ok, try to upload file
    } else {
      // Delete the current logo image from the local storage if it exists
      $currentLogo = $target_dir . mysqli_fetch_assoc(mysqli_query($conn, "SELECT weblogo FROM webcontent WHERE webid=1"))['weblogo'];
      if (!empty($currentLogo)) {
          if(file_exists($currentLogo)){
              unlink($currentLogo);
          } else {
             
          }
      }

      if (move_uploaded_file($_FILES["weblogo"]["tmp_name"], $target_file)) {
       

        $query = "UPDATE webcontent SET weblogo='" . basename($_FILES["weblogo"]["name"]) . "' WHERE webid=1";
        $result = mysqli_query($conn, $query);
        if ($result) {
            
        } else {
            
        }
      } else {
       
      }
    }
 }


 if (isset($_POST['update2'])) {
    // Get the original data for the webheaderpic
    $target_dir = "../frontend/img/";
    $currentHeaderPic = $target_dir . mysqli_fetch_assoc(mysqli_query($conn, "SELECT webheaderpic FROM webcontent WHERE webid=1"))['webheaderpic'];
    $target_file = $target_dir . basename($_FILES["webheaderpic"]["name"]);

    // Check if the file has been modified
    if ($_FILES["webheaderpic"]["size"] > 0) {
       // Delete the current header picture from the local storage if it exists
       if (!empty($currentHeaderPic)) {
         if(file_exists($currentHeaderPic)){
             unlink($currentHeaderPic);
         } else {
             
         }
       }
   
       // Upload the new header picture
       if (move_uploaded_file($_FILES["webheaderpic"]["tmp_name"], $target_file)) {
         echo "The file " . htmlspecialchars(basename($_FILES["webheaderpic"]["name"])) . " has been uploaded.";
   
         // Update the database with the new header picture
         $query = "UPDATE webcontent SET webheaderpic='" . basename($_FILES["webheaderpic"]["name"]) . "' WHERE webid=1";
         $result = mysqli_query($conn, $query);
         if ($result) {
             
         } else {
             
         }
       } else {
         
       }
    }
   
    // Update the webheader label
    if ($_POST['heroh'] != "") {
    $query = "UPDATE webcontent SET heroh='" . mysqli_real_escape_string($conn, $_POST['heroh']) . "' WHERE webid=1";       $result = mysqli_query($conn, $query);
       if ($result) {
        
       } else {
           
       }
    }
   
    // Update the webheader paragraph
    if ($_POST['herop'] != "") {
       $query = "UPDATE webcontent SET herop='" . mysqli_real_escape_string($conn, $_POST['herop']) . "' WHERE webid=1";
       $result = mysqli_query($conn, $query);
       if ($result) {
           
       } else {
           
       }
    }
   
    // Update the webheader button
    if ($_POST['herob'] != "") {
       $query = "UPDATE webcontent SET herob='" . mysqli_real_escape_string($conn, $_POST['herob']) . "' WHERE webid=1";
       $result = mysqli_query($conn, $query);
       if ($result) {
           
       } else {
          
       }
    }
   }


   if (isset($_POST['update3'])) {
    // Get the original data for the webheaderpic
    $target_dir = "../frontend/img/";
    $currentHeaderPic = $target_dir . mysqli_fetch_assoc(mysqli_query($conn, "SELECT webheaderpic FROM webcontent WHERE webid=1"))['webheaderpic'];
    
    $gallerypic1 = $target_dir . basename($_FILES["gallerypic1"]["name"]);
    $gallerypic2 = $target_dir . basename($_FILES["gallerypic2"]["name"]);
    $gallerypic3 = $target_dir . basename($_FILES["gallerypic3"]["name"]);
    $gallerypic4 = $target_dir . basename($_FILES["gallerypic4"]["name"]);

    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($gallerypic1, PATHINFO_EXTENSION));

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["gallerypic1"]["tmp_name"], $gallerypic1) && move_uploaded_file($_FILES["gallerypic2"]["tmp_name"], $gallerypic2) && move_uploaded_file($_FILES["gallerypic3"]["tmp_name"], $gallerypic3) && move_uploaded_file($_FILES["gallerypic4"]["tmp_name"], $gallerypic4)) {
        // Update the database with the new header picture
         $query = "UPDATE webcontent SET gallerypic1='" . basename($_FILES["gallerypic1"]["name"]) . "', gallerypic2='" . basename($_FILES["gallerypic2"]["name"]) . "', gallerypic3='" . basename($_FILES["gallerypic3"]["name"]) . "', gallerypic4='" . basename($_FILES["gallerypic4"]["name"]) . "' WHERE webid=1";
         $result = mysqli_query($conn, $query);
         if ($result) {
             
         } else {
             
         }
        } else {
            
        }
    }
   
    // Update the webheader label 1
    if ($_POST['gallerylabel1'] != "") {
        $query = "UPDATE webcontent SET gallerylabel1='" . mysqli_real_escape_string($conn, $_POST['gallerylabel1']) . "' WHERE webid=1";       $result = mysqli_query($conn, $query);
           if ($result) {
            
           } else {
               
           }
        }

    // Update the webheader desc 1
    if ($_POST['galleryldesc1'] != "") {
        $query = "UPDATE webcontent SET galleryldesc1='" . mysqli_real_escape_string($conn, $_POST['galleryldesc1']) . "' WHERE webid=1";       $result = mysqli_query($conn, $query);
           if ($result) {
            
           } else {
               
           }
        }

    // Update the webheader label 2
    if ($_POST['gallerylabel2'] != "") {
        $query = "UPDATE webcontent SET gallerylabel2='" . mysqli_real_escape_string($conn, $_POST['gallerylabel2']) . "' WHERE webid=1";       $result = mysqli_query($conn, $query);
           if ($result) {
            
           } else {
               
           }
        }

    // Update the webheader desc 2
    if ($_POST['galleryldesc2'] != "") {
        $query = "UPDATE webcontent SET galleryldesc2='" . mysqli_real_escape_string($conn, $_POST['galleryldesc2']) . "' WHERE webid=1";       $result = mysqli_query($conn, $query);
           if ($result) {
            
           } else {
               
           }
        }
       
    }
   
    if (isset($_POST['update4'])) {
       
        // Update the webheader FAQ 1
        if ($_POST['faq1'] != "") {
            $query = "UPDATE webcontent SET faq1='" . mysqli_real_escape_string($conn, $_POST['faq1']) . "' WHERE webid=1";       $result = mysqli_query($conn, $query);
               if ($result) {
                
               } else {
                   
               }
            }
    
        // Update the webheader FAQA 1
        if ($_POST['faqa1'] != "") {
            $query = "UPDATE webcontent SET faqa1='" . mysqli_real_escape_string($conn, $_POST['faqa1']) . "' WHERE webid=1";       $result = mysqli_query($conn, $query);
               if ($result) {
                
               } else {
                   
               }
            }
    
        // Update the webheader FAQ 2
        if ($_POST['faq2'] != "") {
            $query = "UPDATE webcontent SET faq2='" . mysqli_real_escape_string($conn, $_POST['faq2']) . "' WHERE webid=1";       $result = mysqli_query($conn, $query);
               if ($result) {
                
               } else {
                   
               }
            }
    
        // Update the webheader FAQA 2
        if ($_POST['faqa2'] != "") {
            $query = "UPDATE webcontent SET faqa2='" . mysqli_real_escape_string($conn, $_POST['faqa2']) . "' WHERE webid=1";       $result = mysqli_query($conn, $query);
               if ($result) {
                
               } else {
                   
               }
            }

        // Update the webheader FAQ 3
        if ($_POST['faq3'] != "") {
            $query = "UPDATE webcontent SET faq3='" . mysqli_real_escape_string($conn, $_POST['faq3']) . "' WHERE webid=1";       $result = mysqli_query($conn, $query);
               if ($result) {
                
               } else {
                   
               }
            }
    
        // Update the webheader FAQA 3
        if ($_POST['faqa3'] != "") {
            $query = "UPDATE webcontent SET faqa3='" . mysqli_real_escape_string($conn, $_POST['faqa3']) . "' WHERE webid=1";       $result = mysqli_query($conn, $query);
               if ($result) {
                
               } else {
                   
               }
            }            
           
        }

        

?>