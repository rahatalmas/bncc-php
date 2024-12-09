<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script> <!-- Tailwind CDN -->
</head>
<body class="bg-gray-100">
    
    <div class="flex justify-center items-center min-h-screen">
        <div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full">
            <h1 class="text-3xl font-semibold text-center text-blue-600 mb-6">Login</h1>
            
            <!-- Login Form -->
            <form action="{{ route('login') }}" method="POST">
                @csrf
                
                <!-- Email Input -->
                <div class="mb-4">
                    <label for="email" class="block text-lg font-medium text-gray-700">Email</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        class="w-full p-3 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
                        placeholder="Enter your email" 
                        required>
                </div>

                <!-- Password Input -->
                <div class="mb-6">
                    <label for="password" class="block text-lg font-medium text-gray-700">Password</label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        class="w-full p-3 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
                        placeholder="Enter your password" 
                        required>
                </div>

                <!-- Login Button -->
                <div class="mb-4">
                    <button type="submit" class="w-full bg-blue-600 text-white p-3 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Login
                    </button>
                </div>

                <!-- Forgot Password Link -->
                <div class="text-center">
                    <a href="#" class="text-sm text-blue-600 hover:text-blue-700">Forgot your password?</a>
                            <!-- register Link -->
                            <div class="mt-4 text-center">
                                <p class="text-sm text-gray-600">Create an account? <a href="{{ route('register') }}" class="text-blue-500 hover:text-blue-700">Register</a></p>
                            </div>
                </div>

            </form>
        </div>
    </div>

</body>
</html>
