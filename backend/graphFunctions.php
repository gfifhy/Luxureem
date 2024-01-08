<?php
// Database configuration
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

// SQL query to fetch the month value from the date column
$sql = "SELECT DATE_FORMAT(regdate, '%m') as month FROM patients";
$result = $conn->query($sql);

// Initialize variables
$january = 0;
$february = 0;
$march = 0;
$april = 0;
$may = 0;
$june = 0;
$july = 0;
$august = 0;
$september = 0;
$october = 0;
$november = 0;
$december = 0;

// Output each row
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        switch ($row["month"]) {
            case '01':
                $january++;
                break;
            case '02':
                $february++;
                break;
            case '03':
                $march++;
                break;
            case '04':
                $april++;
                break;
            case '05':
                $may++;
                break;
            case '06':
                $june++;
                break;
            case '07':
                $july++;
                break;
            case '08':
                $august++;
                break;
            case '09':
                $september++;
                break;
            case '10':
                $october++;
                break;
            case '11':
                $november++;
                break;
            case '12':
                $december++;
                break;
        }
    }
} else {
    echo "0 results";
}

// Count the number of male and female entries in the database
$sql = "SELECT sex, COUNT(*) FROM patients GROUP BY sex";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch all the results
    $results = $result->fetch_all(MYSQLI_ASSOC);

    // Initialize the counters
    $male_count = 0;
    $female_count = 0;

    // Loop through the results and update the counters
    foreach ($results as $row) {
        if ($row['sex'] == 'male') {
            $male_count = $row['COUNT(*)'];
        } elseif ($row['sex'] == 'female') {
            $female_count = $row['COUNT(*)'];
        }
    }
$dataPoints = array( 
array("label"=>"Male", "symbol" => "M","y"=>$male_count),
array("label"=>"Female", "symbol" => "F","y"=>$female_count), ) ;
    
} else {
    echo "0 results";
}

?>