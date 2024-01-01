<?php

include "connection.php";

// Count the number of male and female entries in the database
$sql = "SELECT sex, COUNT(*) FROM patients GROUP BY sex";

$result = $connection->query($sql);

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

} else {
    echo "0 results";
}

$connection->close();

?>