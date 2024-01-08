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
			{ y: 3, label: "January" },
			{ y: 7, label: "February" },
			{ y: 5, label: "March" },
			{ y: 9, label: "April" },
			{ y: 7, label: "May" },
			{ y: 7, label: "June" },
			{ y: 9, label: "July" },
			{ y: 8, label: "August" },
			{ y: 11, label: "September" },
			{ y: 15, label: "October" },
			{ y: 12, label: "November" },
			{ y: 12, label: "December" },
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