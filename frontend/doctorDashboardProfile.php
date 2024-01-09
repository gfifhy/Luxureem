<?php include('../backend/loginFormDoctor.php');
include '../admin/webcontent.php';
?>
<?php include('../backend/graphFunctions.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard | Luxureem</title>
  <link rel="stylesheet" href="output.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
</head>

<body>
  <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button"
    class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
      <path clip-rule="evenodd" fill-rule="evenodd"
        d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
      </path>
    </svg>
  </button>

  <aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
      <a href="#" class="flex items-center ps-2.5 mb-5">
        <img src="img/<?= $_SESSION['weblogo'] ?>" class="h-6 me-3 sm:h-7" alt="Flowbite Logo" />
        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">
          <?php echo $_SESSION['webname'] ?>
        </span>
      </a>
      <ul class="space-y-2 font-medium">
        <li>
          <a href="../frontend/doctorDashboardProfile.php"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <svg
              class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
              aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
              <path
                d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
            </svg>
            <span class="flex-1 ms-3 whitespace-nowrap">User Profile</span>
          </a>
        </li>

        <li>
          <a href="doctorDashboardPatients.php"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <svg
              class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
              aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
              <path
                d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z" />
            </svg>
            <span class="flex-1 ms-3 whitespace-nowrap">Patients</span>
          </a>
        </li>

        <li>
          <a href="../backend/logoutDoctor.php"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <svg
              class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
              aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
            </svg>
            <span class="flex-1 ms-3 whitespace-nowrap">Sign out</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>

  <div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-black-1000 border-dashed rounded-lg dark:border-gray-700">
      <div class="mb-4 bg-gray-50 dark:bg-gray-800 rounded shadow-md p-6 flex">

        <div class="flex items-center">
          <div class="w-24 h-24 image-container overflow-hidden rounded-full">
            <img src="../upload/<?= $_SESSION['userData']['pp'] ?>" class="img-fluid" style="height:100%; width:100%">
          </div>

          <p class="text-2xl text-black-400 dark:text-gray-500 ml-4">
            Name:
            <?php echo $_SESSION['userData']['name']; ?>
          </p>
        </div>

      </div>




      <div class="mb-4 bg-gray-50 dark:bg-gray-800 rounded shadow-md p-6">
        <div id="reguser" style="height: 370px; width: 100%;"></div>
      </div>
      <div class="mb-4 bg-gray-50 dark:bg-gray-800 rounded shadow-md p-6">
        <div id="genderchart" style="height: 370px; width: 100%;"></div>
      </div>
      <div class="mb-4 bg-gray-50 dark:bg-gray-800 rounded shadow-md p-6">
        <div id="productsale" style="height: 370px; width: 100%;"></div>
      </div>

      <div class="mb-4 bg-gray-50 dark:bg-gray-800 rounded shadow-md p-6">
        <?php
        $connection = new mysqli('localhost', 'root', '', 'luxureemdb');
        if ($connection->connect_error) {
          echo "Connection error: " . $connection->connect_error;
        }
        // SQL query to select data
        $sql = "SELECT * FROM barbie";
        $result = $connection->query($sql);
        $totaltotal = 0;
        // Check if the query returns any rows
        if ($result->num_rows > 0) {
          // Output data of each row
          echo "<table class='w-full border-collapse mb-8'>";
          echo "<thead class='bg-gray-200 text-gray-700 border-b-2 border-gray-300'>";
          echo "<tr><th class='p-4 text-left'>Service Name</th><th class='p-4 text-left'>Price</th><th class='p-4 text-left'>Sales</th><th class='p-4 text-left'>Total</th></tr>";
          echo "</thead>";
          echo "<tbody class='text-gray-700'>";
          while ($row = $result->fetch_assoc()) {
            $totalperitem = $row["barbieprice"] * $row["sales"];
            $totaltotal += $totalperitem;
            echo "<tr class='border-b-2 border-gray-200 hover:bg-gray-100'>";
            echo "<td class='p-4'>" . $row["barbiename"] . "</td>";
            echo "<td class='p-4'>" . $row["barbieprice"] . "</td>";
            echo "<td class='p-4'>" . $row["sales"] . "</td>";
            echo "<td class='p-4'>" . $totalperitem . "</td>";
            echo "</tr>";
          }
          echo "<td class='p-4'>" . "</td>";
          echo "<td class='p-4'>" . "</td>";
          echo "<td class='p-4'>" . "Total Price: " . "</td>";
          echo "<td class='p-4'>" . $totaltotal . "</td>";
          echo "</tbody>";
          echo "</table>";
        } else {
          echo "<p class='text-red-600'>0 results</p>";
        }
        ?>
      </div>



      <script>
        window.onload = function () {
          var reguserChart = new CanvasJS.Chart("reguser", {
            animationEnabled: true,
            exportEnabled: true,
            title: {
            },
            axisX: {
              interval: 1
            },
            axisY2: {
              interlacedColor: "rgba(1,77,101,.2)",
              gridColor: "rgba(1,77,101,.1)",
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
            exportEnabled: true,
            animationEnabled: true,
            title: {
              text: "Gender Distribution"
            },
            data: [{
              type: "doughnut",
              indexLabel: "{symbol} - {y}",
              yValueFormatString: "#,##0",
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
              text: "Top products"
            },
            axisX: {
              labelFontSize: 12,
              labelFontColor: "grey",
              labelAngle: -45,
              interval: 1
            },
            data: [{
              type: "column",
              indexLabelFontColor: "#5A5757",
              indexLabelFontSize: 16,
              indexLabelPlacement: "outside",
              dataPoints: [
                <?php

                // SQL query to select data
                $sql = "SELECT `barbiename`,`sales` FROM barbie";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
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
      <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>

      <script src="../node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

</html>