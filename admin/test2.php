<?php
$connection = new mysqli('localhost', 'root', '', 'luxureemdb');
if ($connection->connect_error) {
    echo "Connection error: " . $connection->connect_error;
}

// SQL query to select data
$sql = "SELECT `barbiename`,`sales` FROM barbie"; 
$result = $connection->query($sql);
?>

<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {

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

productsale.render();

}
</script>
</head>
<body>
    <div id="productsale" style="height: 370px; width: 100%;"></div>
    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</body>
</html>
