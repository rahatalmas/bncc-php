@extends('public.layouts.publicuilayout')

@section('content')
    <div class="container mx-auto">

      <div
        class="h-40 flex justify-center items-center bg-green-100 border-t-8 border-t-white mt-10"
      >
        <h1
          class="text-6xl font-bold text-center bg-gradient-to-r from-red-500 via-purple-500 to-blue-400 bg-clip-text text-transparent"
        >
          Notice Board
        </h1>
        
      
      </div>

      <div class="mt-10 mb-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 p-4 lg:p-8 bg-gray-50">
          <div class="flex justify-center items-center">
              <img
                class="rounded-lg shadow-lg w-full max-h-96 object-cover"
                src="https://cdn.dribbble.com/users/167298/screenshots/4303884/media/a613441127232c32120e65eb8bd24421.gif"
                alt="Notice Image"
              />
            </div>
          
            <div class="space-y-4">
              <div class="text-center bg-blue-500  flex justify-center rounded-lg">
                <a href="/apply">
                  <button class="px-2 py-2 text-xs font-medium text-white rounded">Join Now</button>
              </a>
              </div>
              <!-- Loop through notices -->
              @foreach ($notices as $notice)
              <div class="w-full p-5 bg-white border-l-4 border-blue-500 rounded-lg shadow-lg hover:bg-blue-50 transition duration-300">
                <div class="flex items-center">
                  <div class="flex-1 min-w-0">
                    <h2 class="text-lg font-semibold text-gray-800">{{ $notice->title }}</h2>
                    <p class="text-sm text-gray-600">{{ $notice->description }}</p>
                  </div>
                  <div class="flex space-x-4">
                    <!-- If the file link exists, provide a download link -->
                    @if ($notice->noticefilelink)
                      <a href="{{ $notice->noticefilelink }}" class="fa fa-cloud-download text-blue-400 text-xl cursor-pointer" target="_blank">Hello</a>
                    @endif
                    <i class="fa fa-eye text-blue-400 text-xl cursor-pointer"></i>
                    <span class="px-2 py-0.5 text-xs font-medium text-gray-500 bg-gray-200 rounded">
                      Recent
                    </span>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
            
           
          </div>
      </div>

    </div>
@endsection
