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

// Close connection
$conn->close();

// Display results
echo "January: " . $january . "<br>";
echo "February: " . $february . "<br>";
echo "March: " . $march . "<br>";
echo "April: " . $april . "<br>";
echo "May: " . $may . "<br>";
echo "June: " . $june . "<br>";
echo "July: " . $july . "<br>";
echo "August: " . $august . "<br>";
echo "September: " . $september . "<br>";
echo "October: " . $october . "<br>";
echo "November: " . $november . "<br>";
echo "December: " . $december . "<br>";
?>

<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {
	
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	
	title:{
		text:"Fortune 500 Companies by Country"
	},
	axisX:{
		interval: 1
	},
	axisY2:{
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
			{ y: $january, label: "January" },
			{ y: $february, label: "February" },
			{ y: $march, label: "March" },
			{ y: $april, label: "April" },
			{ y: $may, label: "May" },
			{ y: $june, label: "June" },
			{ y: $july, label: "July" },
			{ y: $august, label: "August" },
			{ y: $september, label: "September" },
			{ y: $october, label: "October" },
			{ y: $november, label: "November" },
			{ y: $december, label: "December" },
		]
	}]
});
chart.render();

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</body>
</html>