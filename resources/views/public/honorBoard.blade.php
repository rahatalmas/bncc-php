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
            <a href="./index.html" class="hover:underline">Home</a>
            <a href="#" class="hover:underline">About</a>
            <a href="/noticeboard.html" class="hover:underline">Notice Board</a>
            <a href="/honourBoard.html" class="hover:underline">Honour Board</a>
            <a href="/cadetconer.html" class="hover:underline">Cadet Corner</a>
            <a href="/gallery.html" class="hover:underline">Gallery</a>
          </div>
        </div>

      
        <div
          id="mobile-menu"
          class="md:hidden hidden flex-col items-center space-y-2 mt-4 text-gray-800"
        >
          <a href="./index.html" class="block hover:underline">Home</a>
          <a href="#" class="block hover:underline">About</a>
          <a href="/noticeboard.html" class="block hover:underline">Notice Board</a>
          <a href="/honourBoard.html" class="block hover:underline">Honour Board</a>
          <a href="/cadetconer.html" class="block hover:underline">Cadet Corner</a>
          <a href="/gallery.html" class="block hover:underline">Gallery</a>
        </div>
      </nav>

      <div class="h-96 flex justify-center items-center bg-green-100 border-t-8 border-t-white mt-10">
        <h1 class="text-6xl font-bold text-center">Our Pride</h1>
    </div>

      <div class=" ">
        <div
          class="flex flex-col lg:flex-row justify-around items-center text-center gap-5 lg:gap-0 mt-10"
        >
          <div>
            <img
              class="h-auto w-auto rounded-full mb-2 mx-auto"
              aria-hidden="true"
              src="https://bncc.info/web/image/1281-194a22f6/secretary%20sir.png"
              alt="# Image not Uploaded"
            />
            <div
              class="mt-10 bg-green-200 bg-opacity-80 p-3 rounded text-black px-12 shadow-lg"
            >
              <h1 class="text-2xl font-bold uppercase">Dr Abu Hena Mostafa Kamal</h1>
             
            </div>
          </div>
        
         
          </div>
        </div>
      </div>
      <div class="container mx-auto   ">
        <div
          class="flex flex-col lg:flex-row justify-around items-center text-center gap-5 lg:gap-0 mt-10"
        >
          <div>
            <img
              class="h-auto w-auto rounded-full mb-2 mx-auto"
              aria-hidden="true"
              src="https://bncc.info/web/image/1149-88718ea6/rsz_gen_mag_osmani-2_1.jpg"
              alt="# Image not Uploaded"
            />
            <div
              class="mt-10 bg-green-100 bg-opacity-80 p-3 rounded text-black px-12 shadow-lg"
            >
              <h1 class="text-2xl font-bold uppercase">Gen MAG Osmani</h1>
             
            </div>
          </div>
        
          <div>
            <img
              class="h-auto w-auto rounded-full mb-2 mx-auto"
              aria-hidden="true"
              src="https://bncc.info/web/image/1153-d5ff6ec6/rsz_rear_admiral_aurangzeb_chowdhury_1.jpg"
              alt="# Image not Uploaded"
            />
            <div
              class="mt-10 bg-green-100 bg-opacity-80 p-3 rounded text-black px-12 shadow-lg"
            >
              <h1 class="text-2xl font-bold uppercase">Rear Admiral Aurangzeb Chowdhury

              </h1>
              
            </div>
          </div>
        </div>
      </div>
      <div class="container mx-auto   ">
        <div
          class="flex flex-col lg:flex-row justify-around items-center text-center gap-5 lg:gap-0 mt-10"
        >
          <div>
            <img
              class="h-auto w-auto rounded-full mb-2 mx-auto"
              aria-hidden="true"
              src="https://bncc.info/web/image/1150-103f8a25/rsz_lt_gen_m_nuruddin_khan_1.jpg"
              alt="# Image not Uploaded"
            />
            <div
              class="mt-10 bg-green-100 bg-opacity-80 p-3 rounded text-black px-12 shadow-lg"
            >
              <h1 class="text-2xl font-bold uppercase">Lt Gen M Nuruddin Khan

              </h1>
            
            </div>
          </div>
          <div>
            <img
              class="h-auto w-auto rounded-full mb-2 mx-auto"
              aria-hidden="true"
              src="https://bncc.info/web/image/1151-0b27ad70/Sgt%20Shafi%20Ahmed%20Rumi%20%281%29.jpg"
              alt="# Image not Uploaded"
            />
            <div
              class="mt-10 bg-green-100 bg-opacity-80 p-3 rounded text-black px-12 shadow-lg"
            >
              <h1 class="text-2xl font-bold uppercase">Sgt Shafi Ahmed Rumi

              </h1>
            
            </div>
          </div>
          <div>
            <img
              class="h-auto w-auto rounded-full mb-2 mx-auto"
              aria-hidden="true"
              src="https://bncc.info/web/image/1154-0d6c3cce/rsz_maj_gen_monzur_ahmed_ndc_psc_rtd_1.jpg"
              alt="# Image not Uploaded"
            />
            <div
              class="mt-10 bg-green-100 bg-opacity-80 p-3 rounded text-black px-12 shadow-lg"
            >
              <h1 class="text-2xl font-bold uppercase">Maj Gen Monzur Ahmed ndc, psc, (Rted)

              </h1>
             
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
