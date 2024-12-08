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
    {{-- <style>
      body{
        background-image: url("https://w0.peakpx.com/wallpaper/569/229/HD-wallpaper-military-dress-design-military-dress-design-background-thumbnail.jpg");
        background-size: contain
        
      }
    </style> --}}
  </head>
  <body class="bg-gray-100" >
    <div class="container mx-auto">
      <header class="py-5">
        <div class="flex justify-between items-center max-w-6xl mx-auto">
          <div class="flex items-center">
            <img
              class="h-20 w-20 rounded-lg object-cover"
              alt="logo"
              src="https://upload.wikimedia.org/wikipedia/commons/9/9b/Bncc_logo.png"
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
          <!-- <a href="/cadetconer" class="block hover:underline">Cadet Corner</a>!-->
            <a href="/gallery" class="hover:underline">Gallery</a>
          </div>
        </div>

      
        <div
          id="mobile-menu"
          class="md:hidden hidden flex-col items-center space-y-2 mt-4 text-gray-800"
        >
          <a href="/index.html" class="block hover:underline">Home</a>
          <a href="#" class="block hover:underline">About</a>
          <a href="/noticeboard" class="block hover:underline">Notice Board</a>
          <a href="/honourBoard" class="block hover:underline">Honour Board</a>
          <!-- <a href="/cadetconer" class="block hover:underline">Cadet Corner</a>!-->
          <a href="/gallery" class="block hover:underline">Gallery</a>
        </div>
      </nav>
       
      
      @yield('content')


      <footer
        class="max-w-6xl mx-auto border-t-2 border-gray-300 py-10 grid grid-cols-1 md:grid-cols-4 gap-8 text-center"
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
        
  <script>
    function toggleMenu() {
      const mobileMenu = document.getElementById("mobile-menu");
      const menuIcon = document.getElementById("menu-icon");
      const closeIcon = document.getElementById("close-icon");

      mobileMenu.classList.toggle("hidden");
      menuIcon.classList.toggle("hidden");
      closeIcon.classList.toggle("hidden");
    }

    let currentIndex = 0;
    const slides = document.getElementById("slides");
    const slideCount = slides.childElementCount;

    function showSlide(direction) {
      currentIndex = (currentIndex + direction + slideCount) % slideCount;
      slides.style.transform = `translateX(-${currentIndex * 100}%)`;
    }

    setInterval(() => showSlide(1), 3000);
  </script>


    <script>
      const viewButtons = document.querySelectorAll(".view-btn");
      const modal = document.getElementById("modal");
      const modalImage = document.getElementById("modalImage");
      const closeModal = document.getElementById("closeModal");

      viewButtons.forEach((button) => {
        button.addEventListener("click", (e) => {
          const imgSrc = e.target.getAttribute("data-img");

          modalImage.src = imgSrc;

          modal.classList.remove("hidden");
        });
      });

      closeModal.addEventListener("click", () => {
        modal.classList.add("hidden");
      });

      modal.addEventListener("click", (e) => {
        if (e.target === modal) {
          modal.classList.add("hidden");
        }
      });
    </script>
</html>
