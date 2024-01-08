<?php include('../backend/registrationForm.php'); 
include '../admin/webcontent.php';
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration | <?php echo $_SESSION['webname'] ?></title>
    <link rel="stylesheet" href="output.css" />
  </head>

  <body>
    <!-- Navbar -->
    <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
      <div
        class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl"
      >
        <a href="#" class="flex items-center">
          <img
            src="img/<?=$_SESSION['weblogo']?>"
            class="mr-3 h-6 sm:h-9"
            alt="Flowbite Logo"
          />
          <span
            class="self-center text-xl font-semibold whitespace-nowrap dark:text-white"
            ><?php echo $_SESSION['webname'] ?></span
          >
        </a>
        <div class="flex items-center lg:order-2">
          <button
            data-collapse-toggle="mobile-menu-2"
            type="button"
            class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="mobile-menu-2"
            aria-expanded="false"
          >
            <span class="sr-only">Open main menu</span>
            <svg
              class="w-6 h-6"
              fill="currentColor"
              viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                clip-rule="evenodd"
              ></path>
            </svg>
            <svg
              class="hidden w-6 h-6"
              fill="currentColor"
              viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd"
              ></path>
            </svg>
          </button>
        </div>
        <div
          class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1"
          id="mobile-menu-2"
        >
          <ul
            class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0"
          >
            <li>
              <a
                href="../frontend/index.php"
                class="block py-2 pr-4 pl-3 text-black rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-white"
                aria-current="page"
                >Home</a
              >
            </li>
            <li>
              <a
                href="#"
                class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700"
                >Services</a
              >
            </li>
            <li>
              <a
                href="#"
                class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700"
                >About</a
              >
            </li>
            <li>
              <a
                href="#"
                class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700"
                >Contact</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Registration Form -->
    <section class="bg-gray-100 min-h-screen flex items-center justify-center">
      <div class="bg-white p-8 rounded shadow-md max-w-2xl w-full">
        <h1 class="text-2xl font-bold mb-6">Registration Form</h1>

        <form action="registrationForm.php" method="post" enctype="multipart/form-data">
        <?php include ('../backend/errors.php')?>

          <!-- Name, Age, Sex -->
          <div class="grid grid-cols-3 gap-4">
            <div>
              <label for="name" class="block text-sm font-medium text-gray-600"
                >Name</label
              >
              <input
                type="text"
                id="name"
                name="name"
                class="mt-1 p-2 w-full border rounded-md"
              />
            </div>
            <div>
              <label for="age" class="block text-sm font-medium text-gray-600"
                >Age</label
              >
              <input
                type="number"
                id="age"
                name="age"
                class="mt-1 p-2 w-full border rounded-md"
              />
            </div>
            <div>
              <label for="sex" class="block text-sm font-medium text-gray-600"
                >Sex</label
              >
              <select
                id="sex"
                name="sex"
                class="mt-1 p-2 w-full border rounded-md"
              >
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
              </select>
            </div>
          </div>

          <!-- Cellphone Number, Address -->
          <div class="grid grid-cols-2 gap-4">
            <div>
              <label
                for="cellphone"
                class="block text-sm font-medium text-gray-600"
                >Cellphone Number</label
              >
              <input
                type="tel"
                id="cellphone"
                name="cellphone"
                class="mt-1 p-2 w-full border rounded-md"
              />
            </div>
            <div>
              <label
                for="address"
                class="block text-sm font-medium text-gray-600"
                >Address</label
              >
              <input
                type="text"
                id="address"
                name="address"
                class="mt-1 p-2 w-full border rounded-md"
              />
            </div>
          </div>

          <!-- Email, Password -->
          <div class="grid grid-cols-2 gap-4">
            <div>
              <label for="email" class="block text-sm font-medium text-gray-600"
                >Email</label
              >
              <input
                type="email"
                id="email"
                name="email"
                class="mt-1 p-2 w-full border rounded-md"
              />
            </div>
            <div>
              <label
                for="password"
                class="block text-sm font-medium text-gray-600"
                >Password</label
              >
              <input
                type="password"
                id="password"
                name="password"
                class="mt-1 p-2 w-full border rounded-md"
              />
            </div>
          </div>

          <div class="flex items-center">
            <div>
              <label for="pp" class="block text-sm font-medium text-gray-600"
                >Profile Picture</label
              >
              <input
                type="file"
                id="pp"
                name="pp"
                class="flex items-start"
              />
            </div>
          </div>

          <div class="flex items-start">
            <div class="flex items-center h-5">
              <input
                id="terms"
                aria-describedby="terms"
                type="checkbox"
                class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800"
                required=""
              />
            </div>
            <div class="ml-3 text-sm">
    <label for="terms" class="font-light text-gray-500 dark:text-gray-300">
        I accept the
        <a class="font-medium text-primary-600 hover:underline dark:text-primary-500"
            href="#termsModal"
            onclick="showModal();">Terms and Conditions</a>
    </label>
</div>
<div id="termsModal" class="fixed inset-0 overflow-y-auto hidden">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="bg-white p-6 rounded-lg">
            <h2 class="text-lg font-semibold mb-4">Terms and Conditions</h2>
            <h3>1. Acceptance of Terms</h3>
            <p class="mb-4">By accessing and using the web-based glutathione appointment service provided by <?php echo $_SESSION['webname'] ?>, you agree to be bound by these terms and conditions. If you do not agree with any part of these terms, you may not use the service.</p>

            <h3>2. Service Description</h3>
            <p class="mb-4"><?php echo $_SESSION['webname'] ?> provides an online platform for scheduling and managing appointments related to glutathione treatments. The service includes but is not limited to appointment scheduling.</h3>

            <h3>3. User Eligibility</h3>
            <p class="mb-4">You must be at least 18 years old to use our service. By using the service, you represent and warrant that you are of legal age and have the capacity to enter into a binding agreement.</p>

            <h3>4. Appointment Booking</h3>
            <p class="mb-4">Users can book appointments through the <?php echo $_SESSION['webname'] ?> website. It is the user's responsibility to provide accurate and up-to-date information during the booking process. <?php echo $_SESSION['webname'] ?> is not responsible for any consequences resulting from inaccurate information.</p>

            <h3>5. Fees and Payments</h3>
            <p class="mb-4">Certain glutathione treatments may have associated fees. Users agree to pay the specified fees for the services they book. Payment details and terms are provided during the booking process.</p>

            <h3>6. Privacy and Security</h3>
            <p class="mb-4"><?php echo $_SESSION['webname'] ?> takes the privacy and security of user information seriously. Our Privacy Policy outlines how we collect, use, and protect your personal information. By using our service, you agree to the terms of our Privacy Policy.</p>

            <h3>7. User Responsibilities</h3>
            <p class="mb-4">Users are responsible for maintaining the confidentiality of their account information, including login credentials. Any activity occurring under a user's account is their responsibility. Users must notify <?php echo $_SESSION['webname'] ?> immediately of any unauthorized use of their account.</p>

            <h3>8. Limitation of Liability</h3>
            <p class="mb-4"><?php echo $_SESSION['webname'] ?> is not liable for any direct, indirect, incidental, special, or consequential damages resulting from the use of our service or the inability to use the service, including but not limited to damages for loss of profits, data, or other intangible losses.</p>

            <h3>9. Changes to Terms and Conditions</h3>
            <p class="mb-4"><?php echo $_SESSION['webname'] ?> reserves the right to update or modify these terms and conditions at any time without prior notice. Users are encouraged to review the terms regularly. Continued use of the service after changes constitutes acceptance of the updated terms.</p>

            
            <h3>10. Changes to Terms and Conditions</h3>
            <p class="mb-4">These terms and conditions are governed by and construed in accordance with the laws of our Jurisdiction. Any disputes arising from or in connection with these terms shall be subject to the exclusive jurisdiction of the courts in our Jurisdiction.</p>
            <button id="closeModal" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded" onclick="hideModal();">Close</button>
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
          </div>
          <button
            type="submit"
            class="w-full text-black bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
            id="subSignup"
            name="subSignup"
          >
            Create an account
          </button>
          <p class="text-sm font-light text-gray-500 dark:text-gray-400">
            Already have an account?
            <a
              href="../frontend/loginForm.php"
              class="font-medium text-primary-600 hover:underline dark:text-primary-500"
              >Login here</a
            >
          </p>
        </form>
      </div>
    </section>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const button = document.querySelector("[data-collapse-toggle]");
        const navbar = document.getElementById("mobile-menu-2");

        button.addEventListener("click", function () {
          navbar.classList.toggle("hidden");
        });
      });
    </script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
  </body>
</html>
