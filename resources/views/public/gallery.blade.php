@extends('public.layouts.publicuilayout')

@section('content')
<div class=" mx-auto">
       {{-- header section --}}
       <div class="notice-board-header">
        <h1 class="text-4xl font-bold text-center bg-gradient-to-r from-red-500 via-purple-500 to-blue-400 bg-clip-text text-transparent">
          Gallery
        </h1>
      </div>
      {{-- header section end --}}

    <main class="py-10">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach ($galleryImages as $image)
                <div class="relative overflow-hidden group">
                    <!-- Assuming the image path is stored in the `image_name` field -->
                    <img src="{{ asset('storage/gallery_images/' . $image->image_name) }}" alt="Image" class="w-full h-full object-cover transition-transform duration-300 transform group-hover:scale-110" />
                    <div class="absolute inset-0 bg-black opacity-50 group-hover:opacity-0 transition-opacity duration-300"></div>
                    <div class="absolute inset-0 flex justify-center items-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <button class="px-6 py-3 bg-yellow-500 rounded-lg view-btn" data-img="{{ asset('storage/gallery_images/' . $image->image_name) }}">
                            View
                        </button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Modal -->
        <div id="modal" class="fixed inset-0 bg-black bg-opacity-50 hidden flex justify-center items-center">
            <div class="relative max-w-4xl mx-auto bg-white p-5">
                <button id="closeModal" class="absolute top-2 right-2 text-black text-3xl">X</button>
                <img id="modalImage" src="" alt="Full Image" class="w-full h-auto" />
            </div>
        </div>
    </main>
</div>

@push('scripts')
<script>
    // Modal open when "View" button is clicked
    const viewButtons = document.querySelectorAll('.view-btn');
    viewButtons.forEach(button => {
        button.addEventListener('click', function() {
            const imgSrc = this.getAttribute('data-img');
            const modalImage = document.getElementById('modalImage');
            modalImage.src = imgSrc;

            // Show the modal
            const modal = document.getElementById('modal');
            modal.classList.remove('hidden');
        });
    });

    // Close the modal when the close button is clicked
    const closeModalButton = document.getElementById('closeModal');
    closeModalButton.addEventListener('click', function() {
        const modal = document.getElementById('modal');
        modal.classList.add('hidden');
    });

    // Close the modal if the user clicks outside the modal
    const modal = document.getElementById('modal');
    modal.addEventListener('click', function(event) {
        if (event.target === modal) {
            modal.classList.add('hidden');
        }
    });
</script>
@endpush

@endsection
