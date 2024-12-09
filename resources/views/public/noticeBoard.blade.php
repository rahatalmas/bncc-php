@extends('public.layouts.publicuilayout')

@section('content')
    <div class="mx-auto">
       {{-- header section --}}
        <div class="notice-board-header">
          <h1 class="text-4xl font-bold text-center bg-gradient-to-r from-red-500 via-purple-500 to-blue-400 bg-clip-text text-transparent">
            Notice Board
          </h1>
        </div>
        {{-- header section end --}}


        {{-- notice section --}}
        <div class="notice-container">
            <div class="join-now-button-section">
                 <button  class="join-bncc-btn"><a href="/apply">Join BNCC</a></button>
                 <img class="notice-gif-img" src="https://cdn.dribbble.com/users/167298/screenshots/4303884/media/a613441127232c32120e65eb8bd24421.gif"/>
            </div>
            <div class="notice-section">
              <h1 class="h1 mb-2.5">All notice</h1>
          
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
                        <a href="{{ $notice->noticefilelink }}" class="fa fa-cloud-download text-blue-400 text-xl cursor-pointer" target="_blank">
                          Link
                        </a>
                      @endif
                      <i class="fa fa-eye text-blue-400 text-xl cursor-pointer"></i>
                      <span class="px-2 py-0.5 text-xs font-medium text-gray-500 bg-gray-200 rounded">
                        
                      </span>
                    </div>
                  </div>
                </div>
                @endforeach                
            </div>
        </div>
        {{-- notice section end --}}

    </div>
@endsection


{{-- src="https://cdn.dribbble.com/users/167298/screenshots/4303884/media/a613441127232c32120e65eb8bd24421.gif" --}}


{{-- 

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
--}}