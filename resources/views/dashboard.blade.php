<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="flex">
        <!-- Sidebar (Hidden on mobile, visible on larger screens) -->
        <nav id="sidebar" class="bg-blue-500 text-white h-screen fixed lg:block lg:w-[350px] w-full z-100 hidden">
            <div class="flex justify-between items-center px-4 py-4">
                <!-- Logo -->
                <a href="/" class="text-white text-xl font-bold">Dashboard</a>
                <!-- Close Button (Only for mobile view) -->
                <button id="close-btn" class="lg:hidden text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Navigation Links -->
            <div class="px-4">
                <a href="{{ route('students.index') }}" class="block py-2 hover:bg-black">Students</a>
                <!-- Add New Student -->
                <a href="{{ route('students.create') }}" class="block py-2 hover:bg-black">Add Student</a>
                <a href="{{ route('slider-images.index') }}" class="block py-2 hover:bg-black">Slider Images</a>
                <a href="{{ route('gallery.index') }}" class="block py-2 hover:bg-black">Gallery</a>
                <a href="{{ route('members.index') }}" class="block py-2 hover:bg-black">Members</a>
                <a href="{{ route('notices.index') }}" class="block py-2 hover:bg-black">Notices</a>
            </div>
        </nav>
        <!-- Main Content -->
        <main id="main-content" class="flex-1 w-full lg:ml-[350px] min-h-screen">
            <!-- Header Section (with Hamburger Menu on Left and Admin Name/Buttons on Right) -->
            <div class="bg-blue-500 p-4 flex justify-between items-center">
                <!-- Mobile Hamburger Menu (visible only on mobile view) -->
                <button id="menu-toggle" class="lg:hidden text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
        
                <!-- Admin Name with Dropdown (on the right) -->
                <div class="flex items-center text-white relative ml-auto">
                    <!-- Displaying User's Name -->
                    @auth
                        <span class="text-lg mr-2">{{ auth()->user()->name }}</span>
                    @endauth
                    <button id="dropdown-toggle">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
        
                    <!-- Dropdown Menu (Initially hidden) -->
                    <div id="dropdown-menu" class="hidden absolute top-8 right-0 bg-white text-black p-2 rounded shadow-lg">
                        <a href="#" id="edit-btn" class="block px-4 py-2 hover:bg-gray-200">Edit</a>
                        <form action="{{ route('logout') }}" method="POST" id="logout-form">
                            @csrf
                            <button type="submit" class="block px-4 py-2 text-red-500 hover:bg-gray-200 w-full text-left">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        
            <!-- Content Section -->
            <div class="p-6">
                @yield('content')  <!-- Inject the content section here -->
            </div>
        </main>
    </div>

    <script>
        // Mobile Menu Toggle Script
        const menuToggleBtn = document.getElementById('menu-toggle');
        const sidebar = document.getElementById('sidebar');
        const closeBtn = document.getElementById('close-btn');
        const mainContent = document.getElementById('main-content');
        
        menuToggleBtn.addEventListener('click', () => {
            sidebar.classList.toggle('hidden');
            sidebar.classList.add('z-50'); // Ensure the sidebar has a high z-index
            mainContent.classList.toggle('ml-0'); // Adjust content when sidebar is visible
        });

        closeBtn.addEventListener('click', () => {
            sidebar.classList.add('hidden');
            sidebar.classList.remove('z-50'); // Remove z-index when closed
            mainContent.classList.remove('ml-0'); // Adjust content when sidebar is hidden
        });

        // Dropdown Menu Toggle Script
        const dropdownToggle = document.getElementById('dropdown-toggle');
        const dropdownMenu = document.getElementById('dropdown-menu');

        dropdownToggle.addEventListener('click', () => {
            dropdownMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
