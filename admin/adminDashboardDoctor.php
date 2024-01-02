<?php include 'adminSystemDoctor.php'; ?>
<?php include ('../backend/errors.php')?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard | Luxureem</title>
    <link rel="stylesheet" href="../frontend/output.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
      aria-label="Sidebar"
    >
      <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
        <a href="#" class="flex items-center ps-2.5 mb-5">
          <img
            src="https://flowbite.com/docs/images/logo.svg"
            class="h-6 me-3 sm:h-7"
            alt="Flowbite Logo"
          />
          <span
            class="self-center text-xl font-semibold whitespace-nowrap dark:text-white"
            >Luxureem</span
          >
        </a>
        <ul class="space-y-2 font-medium">
          <li>
            <a
              href="#"
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
              <span class="flex-1 ms-3 whitespace-nowrap">Doctors Profile</span>
            </a>
          </li>

          <li>
            <a
              href="adminDashboardProduct.php"
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
              href="#"
              class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
            >
              <svg
                class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 20 20"
              >
                <path
                  d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z"
                />
              </svg>
              <span class="flex-1 ms-3 whitespace-nowrap">Inbox</span>
            </a>
          </li>

          <li>
            <a
              href="#"
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
      <div class="p-4 border-2 border-black-1000 border-dashed rounded-lg dark:border-gray-700">


      <div class="flex items-center justify-center h-48 my-4 rounded bg-gray-50 dark:bg-gray-800">
          <?php
                  $connection = new mysqli('localhost', 'root', '', 'luxureemdb');
                  if ($connection->connect_error) {
                  echo "Connection error: " . $connection->connect_error;
                  }
                  // SQL query to select data
                  $sql = "SELECT `id`, `name`, `phonenumber`, `email` FROM doctors"; 
                  $result = $connection->query($sql);

                  // Check if the query returns any rows
                  if ($result->num_rows > 0) {
                    // Output data of each row
                    echo "<table class='w-full border-collapse mb-8'>";
                    echo "<thead class='bg-gray-200 text-gray-700 border-b-2 border-gray-300'>";
                    echo "<tr><th class='p-4 text-left'>ID</th><th class='p-4 text-left'>Name</th><th class='p-4 text-left'>Phone Number</th><th class='p-4 text-left'>Email</th></tr>";
                    echo "</thead>";
                    echo "<tbody class='text-gray-700'>";
                    while($row = $result->fetch_assoc()) {
                          echo "<tr class='border-b-2 border-gray-200 hover:bg-gray-100'>";
                          echo "<td class='p-4'>" . $row["id"]. "</td>";
                          echo "<td class='p-4'>" . $row["name"]. "</td>";
                          echo "<td class='p-4'>" . $row["phonenumber"]. "</td>";
                          echo "<td class='p-4'>" . $row["email"]. "</td>";
                          echo "</tr>";
                    }
                    echo "</tbody>";
                    echo "</table>";
                  } else {
                    echo "<p class='text-red-600'>0 results</p>";
                  }
                  ?>
        </div>



        <div class="grid grid-cols-1 gap-4 mb-4">
          <form action="" method="post" enctype="multipart/form-data">
              <div class="grid grid-cols-5 gap-4 bg-gray-50 dark:bg-gray-800 p-4 rounded">
                  <h2 class="text-2xl font-semibold mb-4">Adding Doctors</h2>
                  <label for="name" class="col-start-1">Name:</label>
                  <input type="text" id="name" name="name" class="col-start-2" required="">
                  
                  <label for="pic" class="col-start-1">Picture:</label>
                  <input type="file" id="pic" name="pp" class="col-start-2" required="">
                  
                  <label for="phone" class="col-start-1">Phone Number:</label>
                  <input type="text" id="phone" name="phone" class="col-start-2" required="">

                  <label for="email" class="col-start-1">Email:</label>
                  <input type="text" id="email" name="email" class="col-start-2" required="">

                  <label for="password" class="col-start-1">Password:</label>
                  <input type="password" id="password" name="password" class="col-start-2" required="">
              </div>
              <div class="grid grid-cols-5 gap-4 bg-gray-50 dark:bg-gray-800 p-4 rounded">
                  <input name="adminSub" type="submit" value="Submit" class="col-start-3">
              </div>
          </form>
        </div>



        <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
          <h2 class="text-2xl font-semibold mb-4">Deleting Doctors</h2><br>
            <form action="" method="post">
            <label for="userid">Enter User ID to Delete:</label>
            <input type="text" id="userid" name="userid">
            <input type="submit" value="Delete">
            </form>    
        </div>


        
        <div class="grid grid-cols-2 gap-4">
          <div
            class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800"
          >
            <p class="text-2xl text-gray-400 dark:text-gray-500">
              <svg
                class="w-3.5 h-3.5"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 18 18"
              >
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 1v16M1 9h16"
                />
              </svg>
            </p>
          </div>
          <div
            class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800"
          >
            <p class="text-2xl text-gray-400 dark:text-gray-500">
              <svg
                class="w-3.5 h-3.5"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 18 18"
              >
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 1v16M1 9h16"
                />
              </svg>
            </p>
          </div>
          <div
            class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800"
          >
            <p class="text-2xl text-gray-400 dark:text-gray-500">
              <svg
                class="w-3.5 h-3.5"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 18 18"
              >
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 1v16M1 9h16"
                />
              </svg>
            </p>
          </div>
          <div
            class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800"
          >
            <p class="text-2xl text-gray-400 dark:text-gray-500">
              <svg
                class="w-3.5 h-3.5"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 18 18"
              >
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 1v16M1 9h16"
                />
              </svg>
            </p>
          </div>
        </div>


      </div>
    </div>
    <script>
      function myFunction() {
      var x = document.getElementById("mySelect").value;
      switch (x) {
          case "add":
            // add action
            alert("You selected add");
            break;
          case "delete":
            // delete action
            alert("You selected delete");
            break;
          case "edit":
            // edit action
            alert("You selected edit");
            break;
          default:
            // default action
            alert("Please select an action");
       }
      }
      </script>
    <script src="../node_modules/flowbite/dist/flowbite.min.js"></script>
  </body>
</html>
