<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-color: #f7fafc;
            font-family: 'Arial', sans-serif;
        }
    </style>
</head>
<body class="flex justify-center items-center min-h-screen">

    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="text-3xl font-bold text-center mb-6 text-blue-600">Register</h1>

        <!-- Validation Errors -->
        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-3 mb-4 rounded">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Register Form -->
        <form action="{{ route('register.submit') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" value="{{ old('name') }}" required class="w-full p-3 border border-gray-300 rounded-md mt-1">
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" required class="w-full p-3 border border-gray-300 rounded-md mt-1">
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" required class="w-full p-3 border border-gray-300 rounded-md mt-1">
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                <input type="password" name="password_confirmation" required class="w-full p-3 border border-gray-300 rounded-md mt-1">
            </div>

            <button type="submit" class="w-full bg-blue-500 text-white p-3 rounded-md hover:bg-blue-600 focus:outline-none">Register</button>
        </form>

        <!-- Login Link -->
        <div class="mt-4 text-center">
            <p class="text-sm text-gray-600">Already have an account? <a href="{{ route('login') }}" class="text-blue-500 hover:text-blue-700">Login</a></p>
        </div>

        @if (session('success'))
            <div class="bg-green-100 text-green-700 p-3 mt-4 rounded">
                {{ session('success') }}
            </div>
        @endif
    </div>

</body>
</html>
