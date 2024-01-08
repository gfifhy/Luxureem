<?php include 'adminSystemProducts.php';
include 'webcontent.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard |
    <?php echo $_SESSION['webname'] ?>
  </title>
  <link rel="stylesheet" href="../frontend/output.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
        <img src="../frontend/img/<?= $_SESSION['weblogo'] ?>" class="h-6 me-3 sm:h-7" alt="Flowbite Logo" />
        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">
          <?php echo $_SESSION['webname'] ?>
        </span>
      </a>
      <ul class="space-y-2 font-medium">
        <li>
          <a href="adminDashboardDoctor.php"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <svg
              class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
              aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
              <path
                d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
            </svg>
            <span class="flex-1 ms-3 whitespace-nowrap">Doctors Profile</span>
          </a>
        </li>

        <li>
          <a href="adminDashboardProduct.php"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <svg
              class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
              aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
              <path
                d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z" />
            </svg>
            <span class="flex-1 ms-3 whitespace-nowrap">Products</span>
          </a>
        </li>

        <li>
          <a href="adminWebsite.php"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <svg
              class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
              aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path
                d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="flex-1 ms-3 whitespace-nowrap">Website</span>
          </a>
        </li>

        <li>
          <a href="adminBlogs.php"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <svg
              class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
              aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path
                d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="flex-1 ms-3 whitespace-nowrap">Blogs</span>
          </a>
        </li>

        <li>
          <a href="adminWebsiteAboutus.php"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <svg
              class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
              aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path
                d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="flex-1 ms-3 whitespace-nowrap">About Us</span>
          </a>
        </li>


      </ul>
    </div>
  </aside>


  <div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-black-1000 border-dashed rounded-lg dark:border-gray-700">

      <div class="flex items-center justify-center my-4 rounded bg-gray-50 dark:bg-gray-800">
        <?php
        $connection = new mysqli('localhost', 'root', '', 'luxureemdb');
        if ($connection->connect_error) {
          echo "Connection error: " . $connection->connect_error;
        }
        // SQL query to select data
        $sql = "SELECT * FROM barbie";
        $result = $connection->query($sql);

        // Check if the query returns any rows
        if ($result->num_rows > 0) {
          // Output data of each row
          echo "<table class='w-full border-collapse mb-8'>";
          echo "<thead class='bg-gray-200 text-gray-700 border-b-2 border-gray-300'>";
          echo "<tr><th class='p-4 text-left'>ID</th><th class='p-4 text-left'>Category</th><th class='p-4 text-left'>Name</th><th class='p-4 text-left'>Description</th><th class='p-4 text-left'>Picture</th><th class='p-4 text-left'>Price</th><th class='p-4 text-left'>Sales</th></tr>";
          echo "</thead>";
          echo "<tbody class='text-gray-700'>";
          while ($row = $result->fetch_assoc()) {
            echo "<tr class='border-b-2 border-gray-200 hover:bg-gray-100'>";
            echo "<td class='p-4'>" . $row["barbieid"] . "</td>";
            echo "<td class='p-4'>" . $row["barbiecat"] . "</td>";
            echo "<td class='p-4'>" . $row["barbiename"] . "</td>";
            echo "<td class='p-4'>" . $row["barbiedesc"] . "</td>";
            echo "<td class='p-4'>" . $row["barbiepic"] . "</td>";
            echo "<td class='p-4'>" . "₱" . $row["barbieprice"] . "</td>";
            echo "<td class='p-4'>" . $row["sales"] . "</td>";
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
            <h2 class="text-2xl font-semibold mb-4">Adding Products</h2>

            <label for="barbiecat" class="col-start-1">Barbie Category:</label>
            <select id="barbiecat" class="col-start-2" name="barbiecat">
              <option value="gluta">gluta</option>
              <option value="vitamin">vitamin</option>
              <option value="barbie">barbie</option>
            </select>

            <label for="name" class="col-start-1">Name:</label>
            <input type="text" id="prodname" name="prodname" class="col-start-2" required="">

            <label for="phone" class="col-start-1">Description:</label>
            <input type="text" id="desc" name="desc" class="col-start-2" required="">

            <label for="pic" class="col-start-1">Picture:</label>
            <input type="file" id="barbiepic" name="barbiepic" class="col-start-2" required="">

            <label for="email" class="col-start-1">Price:</label>
            <input type="text" id="price" name="price" class="col-start-2" required="">

          </div>
          <div class="grid grid-cols-5 gap-4 bg-gray-50 dark:bg-gray-800 p-4 rounded">
            <input name="adminSub" type="submit" value="Submit" class="col-start-3"
              style="color: white; background-color: black; border: none; padding: 0.5rem; border-radius: 3px; transition: background-color 0.3s, border 0.3s; border: 1px solid black;"
              onmouseover="this.style.backgroundColor='black'; this.style.color='white'"
              onmouseout="this.style.backgroundColor='white'; this.style.color='black';">
          </div>
        </form>
      </div>


      <div class="flex justify-center items-start h-60 p-4 mb-4 rounded bg-gray-50 dark:bg-gray-800">
        <form action="adminDashboardProduct.php" method="post" enctype="multipart/form-data"
          class="flex flex-col  w-full md:w-1/2">
          <h2 class="text-2xl font-semibold mb-4">Update Products</h2>

          <div class="w-full mb-4">
            <label for="barbieid" style="display: block; margin-bottom: 0.5rem;">Barbie ID:</label>
            <input type="text" id="barbieid" name="barbieid"
              style="width: 100%; padding: 0.5rem; box-sizing: border-box; margin-bottom: 1rem;">
          </div>

          <div class="w-full mb-4">
            <label for="barbiecat" style="display: block; margin-bottom: 0.5rem;">Barbie Category:</label>
            <select id="barbiecat" name="barbiecat"
              style="width: 100%; padding: 0.5rem; box-sizing: border-box; margin-bottom: 1rem;">
              <option value="gluta">gluta</option>
              <option value="vitamin">vitamin</option>
              <option value="barbie">barbie</option>
            </select>
          </div>

          <div class="w-full mb-4">
            <label for="barbiename" style="display: block; margin-bottom: 0.5rem;">Barbie Name:</label>
            <input type="text" id="barbiename" name="barbiename"
              style="width: 100%; padding: 0.5rem; box-sizing: border-box; margin-bottom: 1rem;">
          </div>

          <div class="w-full mb-4">
            <label for="barbiedesc" style="display: block; margin-bottom: 0.5rem;">Barbie Description:</label>
            <input type="text" id="barbiedesc" name="barbiedesc"
              style="width: 100%; padding: 0.5rem; box-sizing: border-box; margin-bottom: 1rem;">
          </div>

          <div class="w-full mb-4">
            <label for="barbiepic" style="display: block; margin-bottom: 0.5rem;">Barbie Picture URL:</label>
            <input type="file" id="barbiepic" name="barbiepic"
              style="width: 100%; padding: 0.5rem; box-sizing: border-box; margin-bottom: 1rem;">
          </div>

          <div class="w-full mb-4">
            <label for="barbieprice" style="display: block; margin-bottom: 0.5rem;">Barbie Price:</label>
            <input type="text" id="barbieprice" name="barbieprice"
              style="width: 100%; padding: 0.5rem; box-sizing: border-box; margin-bottom: 1rem;">
          </div>

          <input type="submit" name="update" value="Update"
            style="color: white; background-color: black; border: none; padding: 0.5rem; border-radius: 3px; transition: background-color 0.3s, border 0.3s; border: 1px solid black;"
            onmouseover="this.style.backgroundColor='black'; this.style.color='white'"
            onmouseout="this.style.backgroundColor='white'; this.style.color='black';">

        </form>
      </div>


      <div class="flex flex-col items-start justify-center h-48 mb-4 p-4 rounded bg-gray-50 dark:bg-gray-800">
        <form action="adminDashboardProduct.php" method="post" enctype="multipart/form-data"
          class="flex flex-col items-start">
          <label for="barbieid">Barbie ID:</label>
          <input type="text" id="barbieid" name="barbieid">
          <input name="delete" type="submit" value="Delete"
            style="margin-top: 0.5rem; color: red; border: 1px solid red; padding: 0.5rem; border-radius: 3px; transition: background-color 0.3s;"
            onmouseover="this.style.backgroundColor='red'; this.style.color='white'"
            onmouseout="this.style.backgroundColor=''; this.style.color='red';">
        </form>
      </div>



      <div class="grid grid-cols-2 gap-4">
        <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
          <p class="text-2xl text-gray-400 dark:text-gray-500">
            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
              viewBox="0 0 18 18">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 1v16M1 9h16" />
            </svg>
          </p>
        </div>
        <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
          <p class="text-2xl text-gray-400 dark:text-gray-500">
            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
              viewBox="0 0 18 18">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 1v16M1 9h16" />
            </svg>
          </p>
        </div>
        <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
          <p class="text-2xl text-gray-400 dark:text-gray-500">
            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
              viewBox="0 0 18 18">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 1v16M1 9h16" />
            </svg>
          </p>
        </div>
        <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
          <p class="text-2xl text-gray-400 dark:text-gray-500">
            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
              viewBox="0 0 18 18">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 1v16M1 9h16" />
            </svg>
          </p>
        </div>
      </div>


    </div>
  </div>

  <script src="../node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

</html>