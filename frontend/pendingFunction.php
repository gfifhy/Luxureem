<?php
include '../backend/loginForm.php';
include '../admin/webcontent.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>
    <?php echo $_SESSION['webname'] ?> | Request
  </title>
  <link rel="stylesheet" href="output.css" />
</head>

<body>
  <!--navbar and hero section-->
  <header>
    <!--navbar-->
    <nav class="bg-transparent border-gray-200 px-4 lg:px-6 py-2.5">
      <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
        <a href="#" class="flex items-center">
          <img src="img/<?= $_SESSION['weblogo'] ?>" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" />
          <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">
            <?php echo $_SESSION['webname'] ?>
          </span>
        </a>

        <div class="flex items-center lg:order-2">
          <?php
          if (isset($_SESSION['id'])) {
            ?>
            <button id="dropdownUserAvatarButton" data-dropdown-toggle="dropdownAvatar"
              class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
              type="button">
              <span class="sr-only">Open user menu</span>
              <img class="w-8 h-8 rounded-full" src="../userupload/<?= $_SESSION['picture'] ?>">
            </button>

            <!-- Dropdown menu -->
            <div id="dropdownAvatar"
              class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
              <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                <div>
                  <?php echo $_SESSION['name']; ?>
                </div>
                <div class="font-medium truncate">
                  <?php echo $_SESSION['email']; ?>
                </div>
              
              <?php if ($_SESSION['status'] == 'Verified'): ?>
                <div class="font-medium truncate">
                      <?php echo $_SESSION['status']; ?>
                </div>
                </div>
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownUserAvatarButton">
              <?php else: ?>
                </div>
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownUserAvatarButton">
                <li>
                  <a href="../frontend/productUserDashboard.php"
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                      <?php echo $_SESSION['status']; ?>
                  </a>
                </li>
              <?php endif; ?>

                <li>
                  <a href="userDashboard.php"
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile</a>
                </li>
                <li>
                  <a href="../frontend/productUserDashboard.php"
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Book an
                    appointment
                  </a>
                </li>
              </ul>
              <div class="py-2">
                <a href="../backend/logout.php"
                  class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                  out</a>

              </div>
            </div>

            <?php
          } else {
            ?>
            <a href="../frontend/loginForm.php"
              class=" md:block text-black bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-3 lg:px-5 py-2 lg:py-2.5 mr-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">Get
              started</a>
            <?php
          }
          ?>

          <button data-collapse-toggle="mobile-menu-2" type="button"
            class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="mobile-menu-2" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                clip-rule="evenodd"></path>
            </svg>
            <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
        <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
          <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
            <li>
              <a href="../frontend/index.php"
                class="block py-2 pr-4 pl-3 text-black rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-white"
                aria-current="page">Home</a>
            </li>
            <li>
            <a href="services.php"
                class="block py-2 pr-4 pl-3 text-black rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-white"
                aria-current="page">Services</a>
            </li>
            <li>
              <a href="../frontend/aboutUs.php"
                class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">About</a>
            </li>
            <li>
              <a href="../frontend/blogs.php"
                class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Blogs</a>
            </li>
            <div class="md:hidden w-full md:w-auto" id="navbar-default">
              <!-- ... existing links ... -->
              <a href="../frontend/loginForm.php" class="block py-2 px-3 text-black rounded md:p-0">Get Started</a>
            </div>
          </ul>
        </div>
      </div>
    </nav>
    <!--Hero Section-->
    <section>
      <div class="grid max-w-screen-xl lg:gap-8 xl:gap-0 lg:grid-cols-12">
        <div class="lg:mt-0 lg:col-span-5 lg:flex">
          <img class="h-auto max-w-full" src="img/<?= $_SESSION['webheaderpic'] ?>" alt="image description" />
        </div>
        <div class="place-self-center mx-4 my-4 lg:col-span-7">
          <h1
            class="font-serif max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl">
            Illuminate with Luxureem's Gluta Drips
          </h1>
          <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
            Memememe
          </p>
          
        <form action="" method="post" enctype="multipart/form-data">
            <div class="grid grid-cols-5 gap-4 bg-gray-50 dark:bg-gray-800 p-4 rounded">
                <label for="idfront" class="col-start-1">User ID(FRONT) to Verify:</label>
                <input type="file" id="idfront" name="idfront" class="col-start-2" required="">

                <label for="idback" class="col-start-1">User ID(BACK) to Verify:</label>
                <input type="file" id="idback" name="idback" class="col-start-2" required="">
                
                <input name="pendingbutton" type="submit" value="Pending" class="col-start-3"
                    style="color: white; background-color: black; border: none; padding: 0.5rem; border-radius: 3px; transition: background-color 0.3s, border 0.3s; border: 1px solid black;"
                    onmouseover="this.style.backgroundColor='black'; this.style.color='white'"
                    onmouseout="this.style.backgroundColor='white'; this.style.color='black';">
            </div>
        </form>

        </div>
      </div>
    </section>
  </header>

</body>
</html>

<?php
 if (isset($_POST['pendingbutton'])) {
    $id = $_SESSION['id'];
 
     $target_dir = "../userupload/";
     $currentHeaderPic = $target_dir . mysqli_fetch_assoc(mysqli_query($connection, "SELECT `idfront` FROM `patients` WHERE id=$id"))['idfront'];
     
     $idfront = $target_dir . basename($_FILES["idfront"]["name"]);
     $idback = $target_dir . basename($_FILES["idback"]["name"]);
 
     $uploadOk = 1;
     $imageFileType = strtolower(pathinfo($idfront, PATHINFO_EXTENSION));
 
     // Allow certain file formats
     if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
         
         $uploadOk = 0;
     }
 
     // Check if $uploadOk is set to 0 by an error
     if ($uploadOk == 0) {
         
         // if everything is ok, try to upload file
     } else {
         if (move_uploaded_file($_FILES["idfront"]["tmp_name"], $idfront) && move_uploaded_file($_FILES["idback"]["tmp_name"], $idback)) {
         // Update the database with the new header picture
          $query = "UPDATE patients SET idfront='" . basename($_FILES["idfront"]["name"]) . "', idback='" . basename($_FILES["idback"]["name"]) . "',`status`='" . mysqli_real_escape_string($connection, $_POST['pendingbutton']) . "' WHERE id=$id";
          $result = mysqli_query($connection, $query);
          $fetchQuery = "SELECT * FROM patients WHERE id = $id";
          $fetchResult = mysqli_query($connection, $fetchQuery);
      
          if ($fetchResult && $row = mysqli_fetch_assoc($fetchResult)) {
            // Update the session variable with the new name
            $_SESSION['status'] = $row['status'];
            ?><script>
                window.location.href = "index.php";
            </script><?php
        }
         } else {
             
         }
     } 
 
    }  

?>