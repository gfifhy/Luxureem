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

// SQL query to select data
$sql = "SELECT `barbiename`,`sales` FROM barbie"; 
$result = $conn->query($sql);

?>

<!DOCTYPE HTML>
<html>
<head>  
    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
    <script>
        window.onload = function () {
            var reguserChart = new CanvasJS.Chart("reguser", {
                animationEnabled: true,
                title: {
                    text: "Fortune 500 Companies by Month"
                },
                axisX: {
                    interval: 1
                },
                axisY2: {
                    interlacedColor: "rgba(1,77,101,.2)",
                    gridColor: "rgba(1,77,101,.1)",
                    title: "Number of Companies"
                },
                data: [{
                    type: "bar",
                    name: "companies",
                    axisYType: "secondary",
                    color: "#014D65",
                    dataPoints: [
                        { y: <?php echo $january ?>, label: "January" },
                        { y: <?php echo $february ?>, label: "February" },
                        { y: <?php echo $march ?>, label: "March" },
                        { y: <?php echo $april ?>, label: "April" },
                        { y: <?php echo $may ?>, label: "May" },
                        { y: <?php echo $june ?>, label: "June" },
                        { y: <?php echo $july ?>, label: "July" },
                        { y: <?php echo $august ?>, label: "August" },
                        { y: <?php echo $september ?>, label: "September" },
                        { y: <?php echo $october ?>, label: "October" },
                        { y: <?php echo $november ?>, label: "November" },
                        { y: <?php echo $december ?>, label: "December" },
                    ]
                }]
            });

            var genderChart = new CanvasJS.Chart("genderchart", {
                theme: "light2",
                animationEnabled: true,
                title: {
                    text: "Gender Distribution"
                },
                data: [{
                    type: "doughnut",
                    indexLabel: "{symbol} - {y}",
                    yValueFormatString: "#,##0.0\"%\"",
                    showInLegend: true,
                    legendText: "{label} : {y}",
                    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                }]
            });

            var productsale = new CanvasJS.Chart("productsale", {
                animationEnabled: true,
                exportEnabled: true,
                theme: "light1",
                title: {
                    text: "Simple Column Chart with Index Labels"
                },
                axisY: {
                    includeZero: true
                },
                data: [{
                    type: "column",
                    indexLabelFontColor: "#5A5757",
                    indexLabelFontSize: 16,
                    indexLabelPlacement: "outside",
                    dataPoints: [
                        <?php 
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                ?>
                                { y: <?php echo $row["sales"] ?>, label: "<?php echo $row["barbiename"] ?>" },
                                <?php
                            }
                        }
                        ?>
                    ]
                }]
            });

            reguserChart.render();
            genderChart.render();
            productsale.render();
        }
    </script>
</head>
<body>
    <div id="reguser" style="height: 370px; width: 100%;"></div>
    <div id="genderchart" style="height: 370px; width: 100%;"></div>
    <div id="productsale" style="height: 370px; width: 100%;"></div>
</body>
</html>
