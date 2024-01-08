<?php include 'adminSystemWebsite.php'; 
include 'webcontent.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard | <?php echo $_SESSION['webname'] ?></title>
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
            src="../frontend/img/<?=$_SESSION['weblogo']?>"
            class="h-6 me-3 sm:h-7"
            alt="Flowbite Logo"
          />
          <span
            class="self-center text-xl font-semibold whitespace-nowrap dark:text-white"
            ><?php echo $_SESSION['webname'] ?></span
          >
        </a>
        <ul class="space-y-2 font-medium">
          <li>
            <a
              href="adminDashboardDoctor.php"
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
              href="adminWebsite.php"
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
              <span class="flex-1 ms-3 whitespace-nowrap">Website</span>
            </a>
          </li>

          <li>
            <a
              href="adminBlogs.php"
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
              <span class="flex-1 ms-3 whitespace-nowrap">Blogs</span>
            </a>
          </li>

          <li>
            <a
              href="adminWebsiteAboutus.php"
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
              <span class="flex-1 ms-3 whitespace-nowrap">About Us</span>
            </a>
          </li>

        </ul>
      </div>
    </aside>

    <!-- 1st Div Set -->
    <div class="p-4 sm:ml-64">
      <div class="p-4 border-2 border-black-1000 border-dashed rounded-lg dark:border-gray-700">

      <form action="adminWebsite.php" method="post" enctype="multipart/form-data">
        <div class="bg-gray-50 dark:bg-gray-800 rounded shadow-md p-6">
        <h2 class="text-2xl font-semibold mb-4">Logo and Website Name</h2>
        
        <div class="mb-4">
        <label for="webname" class="block text-gray-700">Website Name:</label>
        <input type="text" id="webname" name="webname" class="block w-full mt-1 rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
        </div>

        <div class="mb-4">
        <label for="weblogo" class="block text-gray-700">Logo:</label>
        <input type="file" id="weblogo" name="weblogo" class="block w-full mt-1 rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
        </div>

        <div class="mb-4 flex items-center justify-between">
        <input type="submit" name="update1" value="Submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        </div>
        </div>
      </form>
    <!-- 2nd Div Set -->
      <form action="adminWebsite.php" method="post" enctype="multipart/form-data">
        <div class="mt-4 bg-gray-50 dark:bg-gray-800 rounded shadow-md p-6">
        <h2 class="text-2xl font-semibold mb-4">Header</h2>
        
        <div class="mb-4">
        <label for="webheaderpic" class="block text-gray-700">Webheader Picture:</label>
        <input type="file" id="webheaderpic" name="webheaderpic" class="block w-full mt-1 rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
        </div>

        <div class="mb-4">
        <label for="heroh" class="block text-gray-700">Website Header Label:</label>
        <input type="text" id="heroh" name="heroh" class="block w-full mt-1 rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
        </div>

        <div class="mb-4">
        <label for="herop" class="block text-gray-700">Website Description:</label>
        <input type="text" id="herop" name="herop" class="block w-full mt-1 rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
        </div>

        <div class="mb-4">
        <label for="herob" class="block text-gray-700">Website Button:</label>
        <input type="text" id="herob" name="herob" class="block w-full mt-1 rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
        </div>

        <div class="mb-4 flex items-center justify-between">
        <input type="submit" name="update2" value="Submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        </div>
        </div>
      </form>
    <!-- 3rd Div Set -->
    <form action="adminWebsite.php" method="post" enctype="multipart/form-data">
        <div class="mt-4 bg-gray-50 dark:bg-gray-800 rounded shadow-md p-6">
        <h2 class="text-2xl font-semibold mb-4">Gallery Section</h2>
        
        <div class="mb-4">
        <label for="gallerypic1" class="block text-gray-700">Gallery Picture 1:</label>
        <input type="file" id="gallerypic1" name="gallerypic1" class="block w-full mt-1 rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
        </div>

        <div class="mb-4">
        <label for="gallerypic2" class="block text-gray-700">Gallery Picture 2:</label>
        <input type="file" id="gallerypic2" name="gallerypic2" class="block w-full mt-1 rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
        </div>

        <div class="mb-4">
        <label for="gallerypic3" class="block text-gray-700">Gallery Picture 3:</label>
        <input type="file" id="gallerypic3" name="gallerypic3" class="block w-full mt-1 rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
        </div>

        <div class="mb-4">
        <label for="gallerypic4" class="block text-gray-700">Gallery Picture 4:</label>
        <input type="file" id="gallerypic4" name="gallerypic4" class="block w-full mt-1 rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
        </div>

        <div class="mb-4">
        <label for="gallerylabel1" class="block text-gray-700">Gallery Label 1:</label>
        <input type="text" id="gallerylabel1" name="gallerylabel1" class="block w-full mt-1 rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
        </div>

        <div class="mb-4">
        <label for="galleryldesc1" class="block text-gray-700">Gallery Description 1:</label>
        <input type="text" id="galleryldesc1" name="galleryldesc1" class="block w-full mt-1 rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
        </div>

        <div class="mb-4">
        <label for="gallerylabel2" class="block text-gray-700">Gallery Label 2:</label>
        <input type="text" id="gallerylabel2" name="gallerylabel2" class="block w-full mt-1 rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
        </div>

        <div class="mb-4">
        <label for="galleryldesc2" class="block text-gray-700">Gallery Description 2:</label>
        <input type="text" id="galleryldesc2" name="galleryldesc2" class="block w-full mt-1 rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
        </div>

        <div class="mb-4 flex items-center justify-between">
        <input type="submit" name="update3" value="Submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        </div>
        </div>
      </form>
    <!-- 4TH Div Set -->
    <form action="adminWebsite.php" method="post" enctype="multipart/form-data">
        <div class="mt-4 bg-gray-50 dark:bg-gray-800 rounded shadow-md p-6">
        <h2 class="text-2xl font-semibold mb-4">FAQ Section</h2>
        
        <div class="mb-4">
        <label for="faq1" class="block text-gray-700">FAQ 1:</label>
        <input type="text" id="faq1" name="faq1" class="block w-full mt-1 rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
        </div>

        <div class="mb-4">
        <label for="faqa1" class="block text-gray-700">Answer 1:</label>
        <input type="text" id="faqa1" name="faqa1" class="block w-full mt-1 rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
        </div>

        <div class="mb-4">
        <label for="faq2" class="block text-gray-700">FAQ 2:</label>
        <input type="text" id="faq2" name="faq2" class="block w-full mt-1 rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
        </div>

        <div class="mb-4">
        <label for="faqa2" class="block text-gray-700">Answer 2:</label>
        <input type="text" id="faqa2" name="faqa2" class="block w-full mt-1 rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
        </div>

        <div class="mb-4">
        <label for="faq3" class="block text-gray-700">FAQ 3:</label>
        <input type="text" id="faq3" name="faq3" class="block w-full mt-1 rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
        </div>

        <div class="mb-4">
        <label for="faqa3" class="block text-gray-700">Answer 3:</label>
        <input type="text" id="faqa3" name="faqa3" class="block w-full mt-1 rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
        </div>

        <div class="mb-4 flex items-center justify-between">
        <input type="submit" name="update4" value="Submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        </div>
        </div>
      </form>

      </div>
    </div>
  </body>
</html>
