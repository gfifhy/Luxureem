<!DOCTYPE html>
<html>
<head>
<script>
    function displayMonthNameAndYear() {
        var monthAndYear = document.getElementById('blogdate').value;
        var monthName = monthAndYear.substr(5,7);
        var monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        var year = monthAndYear.substr(0,4);

        document.getElementById('monthname').value = monthNames[monthName-1] + ' ' + year;
    }
</script>
</head>
<body>

<div class="mb-4">
<label for="blogdate">Month and Year:</label><br>
<input type="month" id="blogdate" name="blogdate" onchange="displayMonthNameAndYear()"><br>
</div>

<label for="monthname">Month Name:</label><br>
<input type="text" id="monthname" name="monthname" readonly><br>

</body>
</html>