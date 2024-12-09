<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <link href="/css/publicLayout.css" rel="stylesheet"/>
    <link href="/css/publicHome.css" rel="stylesheet"/>
    <title>Home</title>
  </head>


   <body>
     <div class="main-container">
      {{-- header --}}
      <header class="header">
        <div class="flex justify-between items-center max-w-6xl mx-auto">
          <div class="flex items-center">
            <img
              class="h-20 w-20 rounded-lg object-cover"
              alt="logo"
              src="/bnccdiu.png"
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
      {{-- header end --}}
      
      {{-- nav start --}}
      <div class="topnav" id="myTopnav">
        <a href="/" class="active">Home</a>
        <a href="/about">About</a>
        <a href="/noticeboard">Notice</a>
        <div class="dropdown">
          <button class="dropbtn">CadetCorner 
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="/training">Training</a>
            <a href="/wings">Wings</a>
            <a href="/organization">organization</a>
          </div>
        </div> 
        <a href="/gallery">Gallery</a>
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
      </div>
      {{-- nav end --}}
      
      <div>@yield('content')</div>
      <footer class="footer">
        <h3>Bncc Diu</h3>
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

    <script>
      function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
          x.className += " responsive";
        } else {
          x.className = "topnav";
        }
      }
      </script>
          <script>
            document.addEventListener("DOMContentLoaded", function() {
              const toggleButtons = document.querySelectorAll('.toggle-btn');
      
              toggleButtons.forEach(button => {
                button.addEventListener('click', function() {
                  const activity = this.closest('.army-activity');
                  const content = activity.querySelector('.activity-content');
                  const icon = activity.querySelector('.toggle-icon');
      
                  if (activity.classList.contains('active')) {
                    activity.classList.remove('active');
                    content.style.display = 'none';
                    icon.textContent = '+'; // Change icon to "+"
                  } else {
                    activity.classList.add('active');
                    content.style.display = 'block';
                    icon.textContent = '-'; // Change icon to "-"
                  }
                });
              });
            });
          </script>
</html>
