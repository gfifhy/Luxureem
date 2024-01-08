<?php 
include '../backend/connection.php';

$sql = "SELECT * FROM aboutus";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {

        /* <?php echo $_SESSION['toph'] ?> */

        $_SESSION['sec1label'] = $row["sec1label"];
        $_SESSION['sec1desc'] = $row["sec1desc"];
        $_SESSION['sec1pic1'] = $row["sec1pic1"];
        $_SESSION['sec1pic2'] = $row["sec1pic2"];

        $_SESSION['sec2label1'] = $row["sec2label1"];
        
        $_SESSION['sec2sublabel1'] = $row["sec2sublabel1"];
        $_SESSION['sec2desc1'] = $row["sec2desc1"];
        $_SESSION['sec2sublabel2'] = $row["sec2sublabel2"];
        $_SESSION['sec2desc2'] = $row["sec2desc2"];
        $_SESSION['sec2sublabel3'] = $row["sec2sublabel3"];
        $_SESSION['sec2desc3'] = $row["sec2desc3"];
        $_SESSION['sec2sublabel4'] = $row["sec2sublabel4"];
        $_SESSION['sec2desc4'] = $row["sec2desc4"];

        $_SESSION['sec2pic1'] = $row["sec2pic1"];
        
        $_SESSION['sec2pic2'] = $row["sec2pic2"];
        $_SESSION['sec2label2'] = $row["sec2label2"];
        $_SESSION['sec2desc5'] = $row["sec2desc5"];

        
    }
} else {
    echo "0 results";
}

?>

