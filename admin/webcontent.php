<?php 
include '../backend/connection.php';

$sql = "SELECT * FROM webcontent";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {

        /* <?php echo $_SESSION['toph'] ?> */

        $_SESSION['webname'] = $row["webname"];
        $_SESSION['weblogo'] = $row["weblogo"];
        $_SESSION['webheaderpic'] = $row["webheaderpic"];
        $_SESSION['heroh'] = $row["heroh"];
        $_SESSION['herop'] = $row["herop"];
        $_SESSION['herob'] = $row["herob"];
        $_SESSION['toph'] = $row["toph"];
        $_SESSION['topp'] = $row["topp"];
        $_SESSION['gallerypic1'] = $row["gallerypic1"];
        $_SESSION['gallerypic2'] = $row["gallerypic2"];
        $_SESSION['gallerypic4'] = $row["gallerypic3"];
        $_SESSION['gallerypic3'] = $row["gallerypic4"];
        $_SESSION['gallerylabel1'] = $row["gallerylabel1"];
        $_SESSION['gallerylabel2'] = $row["gallerylabel2"];
        $_SESSION['galleryldesc1'] = $row["galleryldesc1"];
        $_SESSION['galleryldesc2'] = $row["galleryldesc2"];
        $_SESSION['faq1'] = $row["faq1"];
        $_SESSION['faq2'] = $row["faq2"];
        $_SESSION['faq3'] = $row["faq3"];
        $_SESSION['faqa1'] = $row["faqa1"];
        $_SESSION['faqa2'] = $row["faqa2"];
        $_SESSION['faqa3'] = $row["faqa3"];
    }
} else {
    echo "0 results";
}

?>

