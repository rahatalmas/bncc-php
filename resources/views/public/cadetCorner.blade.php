<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <title>Home</title>
  </head>
  <body class="bg-gray-100">
    <div class="container mx-auto">
      <header class="py-5">
        <div class="flex justify-between items-center max-w-6xl mx-auto">
          <div class="flex items-center">
            <img
              class="h-20 w-20 rounded-lg object-cover"
              alt="logo"
              src="./assets/Bncc_logo.png"
            />
            <div class="ml-5 border-l-4 border-gray-400 pl-3">
              <h2 class="text-gray-800 font-bold text-lg">
                Bangladesh National Cadet Corps
              </h2>
              <h3 class="text-gray-800 text-sm">
                Daffodil International University
              </h3>
            </div>
          </div>
        </div>
      </header>

      <nav class="bg-green-100 border-t-2 border-gray-300 py-4">
        <div class="container mx-auto flex justify-center items-center px-4">
          
          <button
            id="menu-toggle"
            class="md:hidden text-gray-800 focus:outline-none ml-auto"
            onclick="toggleMenu()"
          >
           
            <svg
              id="menu-icon"
              class="h-6 w-6"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16"
              ></path>
            </svg>
           
            <svg
              id="close-icon"
              class="hidden h-6 w-6"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M6 18L18 6M6 6l12 12"
              ></path>
            </svg>
          </button>

        
          <div id="nav-links" class="hidden md:flex space-x-6 text-gray-800">
            <a href="/" class="hover:underline">Home</a>
            <a href="#" class="hover:underline">About</a>
            <a href="/noticeboard" class="hover:underline">Notice Board</a>
            <a href="/honourBoard" class="hover:underline">Honour Board</a>
            <a href="/cadetconer" class="hover:underline">Cadet Corner</a>
            <a href="/gallery" class="hover:underline">Gallery</a>
          </div>
        </div>

      
        <div
          id="mobile-menu"
          class="md:hidden hidden flex-col items-center space-y-2 mt-4 text-gray-800"
        >
          <a href="/" class="block hover:underline">Home</a>
          <a href="#" class="block hover:underline">About</a>
          <a href="/noticeboard" class="block hover:underline">Notice Board</a>
          <a href="/honourBoard" class="block hover:underline">Honour Board</a>
          <a href="/cadetconer" class="block hover:underline">Cadet Corner</a>
          <a href="/gallery" class="block hover:underline">Gallery</a>
        </div>
      </nav>
      <div
        class="h-96 flex justify-center items-center bg-green-100 border-t-8 border-t-white mt-10"
      >
        <h1
          class="text-6xl font-bold text-center bg-gradient-to-r from-red-500 via-purple-500 to-blue-400 bg-clip-text text-transparent"
        >
          Cadet Corner
        </h1>
      </div>

      <div class="mt-10 mb-20">
       <div class=" ">
          <div
            class="w-full p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 dark:bg-gray-800 dark:border-gray-700"
          >
            <h5
              class="mb-3 text-center font-semibold text-gray-900 md:text-xl dark:text-white"
            >
              ALL  Information
            </h5>
            <p class="text-sm text-center font-normal text-gray-500 dark:text-gray-400">
              See all cadet information and link.
            </p>
          </div>
        </div> 
        <div class="mt-10 mb-20 ">
          <div class="grid grid-cols-1 lg:grid-cols-4 gap-5">
            <div class="p-10 border-blue-500  border-l-2  rounded-lg bg-white shadow hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
              <a
              href="#"
              class="text-lg lg:text-xl flex items-center text-center  font-bold text-gray-900  "
            >
              <span class=" flex-1 whitespace-nowrap"
                >How to join bncc</span>
              
            </a>
            </div>
            <div class="p-10 border-blue-500  border-l-2  rounded-lg bg-white shadow hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
              <a
              href="#"
              class="text-lg lg:text-xl flex items-center text-center  font-bold text-gray-900  "
            >
              <span class=" flex-1 whitespace-nowrap"
                >Cadets Welfare Society</span>
              
            </a>
            </div>
            <div class="p-10 border-blue-500  border-l-2  rounded-lg bg-white shadow hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
              <a
              href="#"
              class="text-lg lg:text-xl flex items-center text-center  font-bold text-gray-900  "
            >
              <span class=" flex-1 whitespace-nowrap"
                >Benefits of BNCC</span>
              
            </a>
            </div>
            <div class="p-10 border-blue-500  border-l-2  rounded-lg bg-white shadow hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
              <a
              href="#"
              class="text-lg lg:text-xl flex items-center text-center  font-bold text-gray-900  "
            >
              <span class=" flex-1 whitespace-nowrap"
                >Attachments of Training</span>
              
            </a>
            </div>
            <div class="p-10 border-blue-500  border-l-2  rounded-lg bg-white shadow hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
              <a
              href="#"
              class="text-lg lg:text-xl flex items-center text-center  font-bold text-gray-900  "
            >
              <span class=" flex-1 whitespace-nowrap"
                >Youth Exchange Program</span>
              
            </a>
            </div>
            <div class="p-10 border-blue-500  border-l-2  rounded-lg bg-white shadow hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
              <a
              href="#"
              class="text-lg lg:text-xl flex items-center text-center  font-bold text-gray-900  "
            >
              <span class=" flex-1 whitespace-nowrap"
                >Cadet Verification</span>
              
            </a>
            </div>
            <div class="p-10 border-blue-500  border-l-2  rounded-lg bg-white shadow hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
              <a
              href="#"
              class="text-lg lg:text-xl flex items-center text-center  font-bold text-gray-900  "
            >
              <span class=" flex-1 whitespace-nowrap"
                >Uniform Items</span>
              
            </a>
            </div>
            <div class="p-10 border-blue-500  border-l-2  rounded-lg bg-white shadow hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
              <a
              href="#"
              class="text-lg lg:text-xl flex items-center text-center  font-bold text-gray-900  "
            >
              <span class=" flex-1 whitespace-nowrap"
                >Allowances</span>
              
            </a>
            </div>

          </div>

        </div>
      </div>

      <footer
        class="max-w-6xl mx-auto mt-40 border-t-2 border-gray-300 py-10 grid grid-cols-1 md:grid-cols-4 gap-8 text-center"
      >
        <div>
          <h3 class="font-semibold">About Us</h3>
          <p>Daffodil University, Bangladesh</p>
          <p>bncc.diu.edu.bd</p>
          <p>01*********</p>
        </div>
        <div>
          <h3 class="font-semibold">Quick Links</h3>
          <p>Home</p>
          <p>About BNCC</p>
          <p>Social Activities</p>
          <p>Training Activities</p>
          <p>Events</p>
          <p>Join Us</p>
          <p>BNCC Portal</p>
        </div>
        <div>
          <h3 class="font-semibold">Quick Links</h3>
          <p>Home</p>
          <p>About BNCC</p>
          <p>Social Activities</p>
          <p>Training Activities</p>
          <p>Events</p>
          <p>Join Us</p>
          <p>BNCC Portal</p>
        </div>
        <div>
          <h3 class="font-semibold">Quick Links</h3>
          <p>Home</p>
          <p>About BNCC</p>
          <p>Social Activities</p>
          <p>Training Activities</p>
          <p>Events</p>
          <p>Join Us</p>
          <p>BNCC Portal</p>
        </div>
      </footer>
    </div>
  </body>
</html>
