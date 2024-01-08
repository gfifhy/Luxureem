<?php include '../backend/loginForm.php';
include '../admin/webcontent.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard |
    <?php echo $_SESSION['webname'] ?>
  </title>
  <link rel="stylesheet" href="output.css" />
</head>

<body>
  <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
      <a href="https://flowbite.com" class="flex items-center">
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
            </div>
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownUserAvatarButton">
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
          class="inline-flex items-center p-2 ml-2 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
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
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
              class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">
              Services
              <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="m1 1 4 4 4-4" />
              </svg>
            </button>
            <!-- Dropdown menu -->
            <div id="dropdownNavbar"
              class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
              <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                <li>
                  <a href="../frontend/productGluta.php"
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Glutathione
                    Services</a>
                </li>
                <li>
                  <a href="../frontend/productVItamin.php"
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Vitamin
                    Services</a>
                </li>
                <li>
                  <a href="../frontend/productBarbie.php"
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Aesthetic
                    Services</a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a href="../frontend/aboutUs.php"
              class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">About</a>
          </li>
          <li>
            <a href="../frontend/blogs.php"
              class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Blogs</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="">
    <a href="../frontend/index.php"
      class="inline-flex md:ml-10 md:mt-7 items-center px-3 py-2 text-sm font-medium text-center text-black rounded-lg hover:border focus:ring-4 focus:outline-none">
      <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
        fill="none" viewBox="0 0 8 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M7 1 1.3 6.326a.91.91 0 0 0 0 1.348L7 13" />
      </svg>
      Go Back
    </a>
  </div>

  <section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-fit lg:py-16 lg:px-6">
      <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-12">
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
        Harmony of Radiance: Glutathione, Vitamins, and Aesthetics
        </h2>
        <p class="mb-5 font-light text-gray-500 sm:text-xl dark:text-gray-400">
        Discover the symphony of well-being with our trio - Glutathione for skin luminosity, Vitamins for vitality, and Aesthetics for personalized beauty.
        </p>
      </div>
      <div class="space-y-8 lg:grid lg:grid-cols-3 sm:gap-6 xl:gap-10 lg:space-y-0">
        <!-- Pricing Card -->
        <div
          class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
          <h3 class="mb-4 text-2xl font-semibold">Glutathione drip</h3>
          <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
          Unveil radiant well-being with our Glutathione services, meticulously crafted to 
          brighten and rejuvenate your skin. Beyond aesthetics, 
          these services detoxify and enhance cellular health, fortifying 
          your immune system and promoting overall vitality.
          </p>
          <div class="flex justify-center items-baseline my-8">
            <span class="mr-2 text-5xl font-extrabold">
              


            </span>
        
          </div>
          <!-- List -->
          <ul role="list" class="mb-8 space-y-4 text-left">
            <li class="flex items-center space-x-3">
              <!-- Icon -->
              <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                  clip-rule="evenodd"></path>
              </svg>
              <span>Brightens and rejuvenates the skin</span>
            </li>
            <li class="flex items-center space-x-3">
              <!-- Icon -->
              <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                  clip-rule="evenodd"></path>
              </svg>
              <span>Detoxifies and enhances cellular health</span>
            </li>
            <li class="flex items-center space-x-3">
              <!-- Icon -->
              <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                  clip-rule="evenodd"></path>
              </svg>
              <span>Boosts the immune system</span>
            </li>
            <li class="flex items-center space-x-3">
              <!-- Icon -->
              <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                  clip-rule="evenodd"></path>
              </svg>
              <span>Fights oxidative stress for overall well-being</span>
            </li>
            <li class="flex items-center space-x-3">
              </svg>
            </li>
          </ul>
          <a href="../frontend/productGluta.php"
            class="text-black bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:ring-primary-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white dark:focus:ring-primary-900">Get
            started</a>
        </div>
        <!-- Pricing Card -->
        <div
          class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
          <h3 class="mb-4 text-2xl font-semibold">Vitamin Drip</h3>
          <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
          Revitalize your energy and elevate your vitality through our 
          Vitamin infusions. Designed to support your immune system and provide 
          essential nutrients directly into your bloodstream, 
          these infusions promote overall health and wellness, 
          leaving you feeling invigorated.
          </p>
          <div class="flex justify-center items-baseline my-8">
            <span class="mr-2 text-5xl font-extrabold">
              


            </span>
        
          </div>
          <!-- List -->
          <ul role="list" class="mb-8 space-y-4 text-left">
            <li class="flex items-center space-x-3">
              <!-- Icon -->
              <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                  clip-rule="evenodd"></path>
              </svg>
              <span>Enhances energy levels and vitality</span>
            </li>
            <li class="flex items-center space-x-3">
              <!-- Icon -->
              <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                  clip-rule="evenodd"></path>
              </svg>
              <span>Supports immune system function</span>
            </li>
            <li class="flex items-center space-x-3">
              <!-- Icon -->
              <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                  clip-rule="evenodd"></path>
              </svg>
              <span>Promotes overall health and wellness</span>
            </li>
            <li class="flex items-center space-x-3">
              <!-- Icon -->
              <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                  clip-rule="evenodd"></path>
              </svg>
              <span>Delivers essential nutrients directly into the bloodstream</span>
            </li>
            <li class="flex items-center space-x-3">
            </li>
          </ul>
          <a href="../frontend/productVItamin.php"
            class="text-black bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:ring-primary-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white dark:focus:ring-primary-900">Get
            started</a>
        </div>
        <!-- Pricing Card -->
        <div
          class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
          <h3 class="mb-4 text-2xl font-semibold">Aesthetic Services</h3>
          <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
          Step into a world of personalized care with our Aesthetic treatments. 
          Tailored solutions for facial and body aesthetics, these advanced treatments 
          sculpt and tone, rejuvenating your natural features. 
          Our goal is to provide you with confidence and a refreshed look that 
          aligns with your unique beauty.
          </p>
          <div class="flex justify-center items-baseline my-8">
            <span class="mr-2 text-5xl font-extrabold">
              


            </span>
        
          </div>
          <!-- List -->
          <ul role="list" class="mb-8 space-y-4 text-left">
            <li class="flex items-center space-x-3">
              <!-- Icon -->
              <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                  clip-rule="evenodd"></path>
              </svg>
              <span>Tailored solutions for facial and body aesthetics</span>
            </li>
            <li class="flex items-center space-x-3">
              <!-- Icon -->
              <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                  clip-rule="evenodd"></path>
              </svg>
              <span>Advanced treatments for sculpting and toning</span>
            </li>
            <li class="flex items-center space-x-3">
              <!-- Icon -->
              <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                  clip-rule="evenodd"></path>
              </svg>
              <span>Rejuvenates and enhances natural features</span>
            </li>
            <li class="flex items-center space-x-3">
              <!-- Icon -->
              <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                  clip-rule="evenodd"></path>
              </svg>
              <span>Personalized care for a confident and refreshed look</span>
            </li>
            <li class="flex items-center space-x-3">
            </li>
          </ul>
          <a href="../frontend/productBarbie.php"
            class="text-black bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:ring-primary-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white dark:focus:ring-primary-900">Get
            started</a>
        </div>
      </div>
    </div>
  </section>

  <!--footer section-->
  <footer class="p-4 bg-gray-800 sm:p-6">
    <div class="mx-auto max-w-screen-xl">
      <div class="md:flex md:justify-between">
        <div class="mb-6 md:mb-0">
          <a href="#" class="flex items-center">
            <img src="img/<?= $_SESSION['weblogo'] ?>" class="mr-3 h-8" alt="FlowBite Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">
              <?php echo $_SESSION['webname'] ?>
            </span>
          </a>
        </div>
        <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
          <div>
            <h2 class="mb-6 text-sm font-semibold uppercase text-white">
              Links
            </h2>
            <ul class="text-white">
              <li class="mb-4">
                <a href="../frontend/index.php" class="hover:underline">Home</a>
              </li>
              <li>
                <a href="../frontend/productUserDashboard.php" class="hover:underline">Services</a>
              </li>


            </ul>
          </div>
          <div>
            <h2 class="mb-6 text-sm font-semibold uppercase text-white">
              Links
            </h2>
            <ul class="text-white">
              <li class="mb-4">
                <a href="../frontend/aboutUs.php" class="hover:underline">About</a>
              </li>
              <li>
                <a href="../frontend/blogs.php" class="hover:underline">Blogs</a>
              </li>
            </ul>
          </div>
          <div>
            <h2 class="mb-6 text-sm font-semibold uppercase text-white">
              Legal
            </h2>
            <ul class="text-white">
              <li>
                <a class="font-medium text-primary-600 hover:underline dark:text-primary-500" href="#termsModal"
                  onclick="showModal();">Terms and Conditions</a>
                <div id="termsModal" class="fixed inset-0 overflow-y-auto hidden">
                  <div class="flex items-center justify-center min-h-screen p-4">
                    <div class="bg-white text-black p-6 rounded-lg">
                      <h2 class="text-lg font-semibold mb-4">Terms and Conditions</h2>
                      <h3>1. Acceptance of Terms</h3>
                      <p class="mb-4">By accessing and using the web-based glutathione appointment service provided by
                        <?php echo $_SESSION['webname'] ?>, you agree to be bound by these terms and conditions. If you
                        do not agree with any part of these terms, you may not use the service.
                      </p>

                      <h3>2. Service Description</h3>
                      <p class="mb-4">
                        <?php echo $_SESSION['webname'] ?> provides an online platform for scheduling and managing
                        appointments related to glutathione treatments. The service includes but is not limited to
                        appointment scheduling.</h3>

                      <h3>3. User Eligibility</h3>
                      <p class="mb-4">You must be at least 18 years old to use our service. By using the service, you
                        represent and warrant that you are of legal age and have the capacity to enter into a binding
                        agreement.</p>

                      <h3>4. Appointment Booking</h3>
                      <p class="mb-4">Users can book appointments through the
                        <?php echo $_SESSION['webname'] ?> website. It is the user's responsibility to provide accurate
                        and up-to-date information during the booking process.
                        <?php echo $_SESSION['webname'] ?> is not responsible for any consequences resulting from
                        inaccurate information.
                      </p>

                      <h3>5. Fees and Payments</h3>
                      <p class="mb-4">Certain glutathione treatments may have associated fees. Users agree to pay the
                        specified fees for the services they book. Payment details and terms are provided during the
                        booking process.</p>

                      <h3>6. Privacy and Security</h3>
                      <p class="mb-4">
                        <?php echo $_SESSION['webname'] ?> takes the privacy and security of user information seriously.
                        Our Privacy Policy outlines how we collect, use, and protect your personal information. By using
                        our service, you agree to the terms of our Privacy Policy.
                      </p>

                      <h3>7. User Responsibilities</h3>
                      <p class="mb-4">Users are responsible for maintaining the confidentiality of their account
                        information, including login credentials. Any activity occurring under a user's account is their
                        responsibility. Users must notify
                        <?php echo $_SESSION['webname'] ?> immediately of any unauthorized use of their account.
                      </p>

                      <h3>8. Limitation of Liability</h3>
                      <p class="mb-4">
                        <?php echo $_SESSION['webname'] ?> is not liable for any direct, indirect, incidental, special,
                        or consequential damages resulting from the use of our service or the inability to use the
                        service, including but not limited to damages for loss of profits, data, or other intangible
                        losses.
                      </p>

                      <h3>9. Changes to Terms and Conditions</h3>
                      <p class="mb-4">
                        <?php echo $_SESSION['webname'] ?> reserves the right to update or modify these terms and
                        conditions at any time without prior notice. Users are encouraged to review the terms regularly.
                        Continued use of the service after changes constitutes acceptance of the updated terms.
                      </p>


                      <h3>10. Changes to Terms and Conditions</h3>
                      <p class="mb-4">These terms and conditions are governed by and construed in accordance with the
                        laws of our Jurisdiction. Any disputes arising from or in connection with these terms shall be
                        subject to the exclusive jurisdiction of the courts in our Jurisdiction.</p>
                      <button id="closeModal" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded"
                        onclick="hideModal();">Close</button>
                    </div>
                  </div>
                </div>
                <script>
                  function showModal() {
                    var modal = document.getElementById('termsModal');
                    modal.classList.remove('hidden');
                  }

                  function hideModal() {
                    var modal = document.getElementById('termsModal');
                    modal.classList.add('hidden');
                  }
                </script>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
      <div class="sm:flex sm:items-center sm:justify-between">
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2022
          <a href="https://flowbite.com" class="hover:underline">
            <?php echo $_SESSION['webname'] ?>™
          </a>. All Rights Reserved.
        </span>
        <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
          <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path fill-rule="evenodd"
                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                clip-rule="evenodd" />
            </svg>
          </a>
          <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path fill-rule="evenodd"
                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                clip-rule="evenodd" />
            </svg>
          </a>
          <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path
                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
            </svg>
          </a>
          <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path fill-rule="evenodd"
                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                clip-rule="evenodd" />
            </svg>
          </a>
          <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path fill-rule="evenodd"
                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                clip-rule="evenodd" />
            </svg>
          </a>
        </div>
      </div>
    </div>
  </footer>
  <script src="../node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

</html>