<?php 
include ('../admin/webcontent.php');
include ('../backend/loginForm.php'); 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard | <?php echo $_SESSION['webname'] ?></title>
    <link rel="stylesheet" href="output.css" />
  </head>
  <body>
    <button
      data-drawer-target="logo-sidebar"
      data-drawer-toggle="logo-sidebar"
      aria-controls="logo-sidebar"
      type="button"
      class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
    >
      <span class="sr-only">Open sidebar</span>
      <svg
        class="w-6 h-6"
        aria-hidden="true"
        fill="currentColor"
        viewBox="0 0 20 20"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          clip-rule="evenodd"
          fill-rule="evenodd"
          d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"
        ></path>
      </svg>
    </button>

    <aside
      id="logo-sidebar"
      class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
      aria-label="Sidebar">
      <div
        class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800 w-"
      >
        <a href="#" class="flex items-center ps-2.5 mb-5">
          <img
            src="../userupload/<?=$_SESSION['picture']?>"
            class="h-6 me-3 sm:h-7"
            alt="Flowbite Logo"
          />
          <span
            class="self-center text-xl font-semibold whitespace-nowrap dark:text-white"
            ><?php echo $_SESSION['name']; ?></span
          >
        </a>
        <ul class="space-y-2 font-medium">
          <li>
            <a
              href="../frontend/userDashboard.php"
              class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
            >
              <svg
                class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 20 18"
              >
                <path
                  d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"
                />
              </svg>
              <span class="flex-1 ms-3 whitespace-nowrap">User Profile</span>
            </a>
          </li>

          <li>
            <a
              href="../frontend/productUserDashboard.php"
              class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
            >
              <svg
                class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 18 20"
              >
                <path
                  d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"
                />
              </svg>
              <span class="flex-1 ms-3 whitespace-nowrap">Products</span>
            </a>
          </li>

          <li>
            <a
              href="../frontend/productUserDashboardAppointment.php"
              class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
            >
              <svg
                class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 18 20"
              >
                <path
                  d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"
                />
              </svg>
              <span class="flex-1 ms-3 whitespace-nowrap">Appointment</span>
            </a>
          </li>

          <li>
            <a
              href="../backend/logout.php"
              class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
            >
              <svg
                class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 18 16"
              >
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"
                />
              </svg>
              <span class="flex-1 ms-3 whitespace-nowrap">Sign out</span>
            </a>
          </li>
        </ul>
      </div>
    </aside>

    <div class="p-4 sm:ml-64">
      <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">

      <?php
 $connection = new mysqli('localhost', 'root', '', 'luxureemdb');
 if ($connection->connect_error) {
    echo "Connection error: " . $connection->connect_error;
 }
 // SQL query to select data
 $sql = "SELECT * FROM patients";
 $result = $connection->query($sql);

 // Check if the query returns any rows
 if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table class='w-full border-collapse mb-8'>";
    echo "<thead class='bg-gray-200 text-gray-700 border-b-2 border-gray-300'>";
    echo "<tr><th class='p-4 text-left'>Service</th><th class='p-4 text-left'>Date Of Appointment</th><th class='p-4 text-left'>Price</th></tr>";
    echo "</thead>";
    echo "<tbody class='text-gray-700'>";
    while($row = $result->fetch_assoc()) {
      // Get the price for the service
      $service_name = $row["service"];
      $sql_price = "SELECT `barbieprice` FROM barbie WHERE barbiename = '$service_name'";
      $result_price = $connection->query($sql_price);

      if ($result_price->num_rows > 0) {
        $price_row = $result_price->fetch_assoc();
        $price = $price_row["barbieprice"];
      } else {
        $price = 'N/A';
      }

      echo "<tr class='border-b-2 border-gray-200 hover:bg-gray-100'>";
      echo "<td class='p-4'>" . $row["service"]. "</td>";
      echo "<td class='p-4'>" . $row["date"]. "</td>";
      echo "<td class='p-4'>" . $price. "</td>";
      echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
 } else {
    echo "<p class='text-red-600'>0 results</p>";
 }
 ?>

      </div>
    </div>
    
    <script src="../node_modules/flowbite/dist/flowbite.min.js"></script>
  </body>
</html>