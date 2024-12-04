@extends('dashboard')

@section('content')
    <div class="p-6">
        <h1 class="text-2xl font-semibold mb-6">Upload Slider Images</h1>

        <!-- Success Message -->
        @if(session('success'))
            <div class="text-green-500 mb-4">
                {{ session('success') }}
            </div>
        @endif

        <!-- File Upload Form -->
        <div class="bg-white shadow-lg rounded-lg p-6 mb-6">
            <form action="{{ route('slider-images.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="picture" class="text-lg font-medium">Select Image:</label>
                    <input type="file" name="picture" id="picture" required class="block w-full border p-2 rounded-md">
                </div>
                <button type="submit" class="bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600">Upload</button>
            </form>
        </div>

        <!-- Image Grid -->
        @if($sliderImages->isEmpty())
            <p class="text-gray-500 text-center mt-4">No images uploaded yet.</p>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach($sliderImages as $sliderImage)
                    <div class="relative bg-white shadow-md rounded-lg p-4">
                        <img src="{{ asset('storage/' . $sliderImage->picture) }}" alt="Slider Image" class="w-full h-48 object-cover rounded-md mb-4 cursor-pointer" onclick="openModal('{{ asset('storage/' . $sliderImage->picture) }}')">

                        <!-- Delete Button -->
                        <form action="{{ route('slider-images.destroy', $sliderImage->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this image?');" class="absolute top-2 right-2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-btn bg-red-500 text-white rounded-full p-2 focus:outline-none hover:bg-red-600">
                                <span class="sr-only">Delete</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </form>
                    </div>
                @endforeach
            </div>
        @endif
    </div>

    <!-- Modal for Image Viewing -->
    <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-50 hidden justify-center items-center z-50">
        <div class="relative bg-white p-6 rounded-lg w-auto">
            <img id="modalImage" src="" alt="Modal Image" class="max-w-full max-h-96 mx-auto">
            <button onclick="closeModal()" class="absolute top-2 right-2 bg-gray-500 text-white p-2 rounded-full focus:outline-none">X</button>
        </div>
    </div>

    <!-- Modal JS -->
    <script>
        // Open Modal with selected image
        function openModal(imageSrc) {
            document.getElementById('modalImage').src = imageSrc;
            document.getElementById('imageModal').classList.remove('hidden'); // Show the modal
        }

        // Close Modal
        function closeModal() {
            document.getElementById('imageModal').classList.add('hidden'); // Hide the modal
        }
    </script>
@endsection