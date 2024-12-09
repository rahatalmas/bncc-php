@extends('public.layouts.publicuilayout')
@section('content')

{{-- slider section --}}
{{-- -------------- --}}
      <main class="slider-section">
        <div class=" relative overflow-hidden">
            <div class="flex transition-transform" id="slides">
                @foreach($sliderImages as $sliderImage)
                    <div
                        class="min-w-full bg-center bg-cover bg-no-repeat text-white text-3xl"
                        style="height: 45vh;background-image: url('{{ "storage/" . $sliderImage->picture }}');"
                    ></div>
                @endforeach              
            </div>
            <button class="absolute top-1/2 left-5 text-white px-4 py-2"
                onclick="showSlide(-1)">
                ❮
            </button>
            <button
                class="absolute top-1/2 right-5 text-white px-4 py-2"
                onclick="showSlide(1)">
                ❯
            </button>
        </div>
      </main>
{{-- slider section --}}
{{-- -------end-------- --}}




{{-- officer info section --}}
{{-- -------------- --}}
<section class="officer-info">
    <div class="officer-image-container">
       <img class="officer-image" src="https://img.freepik.com/premium-photo/army-commando_975022-52.jpg" alt="officer image" />
    </div>
    <div class="officer-info-text">
        <h1 class="h1">Officer Info</h1>
        <p>
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>
        <button class="button">More Members</button>
    </div>
</section>
{{-- officer info section --}}
{{-- ------end----------- --}}
<section 

class="relative pt-6 pb-6 bg-green-900"
style="background-image: url('https://bncc.info/web_editor/shape/web_editor/Wavy/10.svg?c1=%2330E80C&c2=%23C52929&flip=xy'); background-position: center; background-size: cover;"
>
<div class="container mx-auto">
  <div class="flex flex-wrap items-center justify-center gap-10">
  
    <div class="w-full lg:w-5/12 px-4 py-6 bg-green-800 rounded-lg text-center mx-2 transform transition duration-300 hover:scale-105">
      <div class="flex justify-center items-center mb-4">
        <a href="/apply" class="flex justify-center items-center w-16 h-16 rounded-full bg-blue-500">
          <i class="fa fa-2x fa-user text-white"></i>
        </a>
      </div>
      <h2 class="text-2xl text-white font-bold mb-2">Join BNCC</h2>
      <p class="text-white">
        To register as a Cadet/PUO/TUO/BNCCO/Serving Military Officer kindly use this link.
      </p>
    </div>

  
    <div class="w-full lg:w-6/12 px-4 py-6 bg-blue-900 rounded-lg text-center mx-2 mt-6 lg:mt-0 transform transition duration-300 hover:scale-105">
      <div class="flex justify-center items-center mb-4">
        <a href="/login" class="flex justify-center items-center w-16 h-16 rounded-full bg-blue-700">
          <i class="fa fa-2x fa-unlock-alt text-white"></i>
        </a>
      </div>
      <h2 class="text-2xl text-white font-bold mb-2">Admin Sign In</h2>
      <p class="text-gray-300">
        This link is only for the admins
      </p>
    </div>
  </div>
</div>
</section>


<section class="mb-10">
  <div class="relative max-w-screen-md mx-auto text-center top-2">
    <h1 class="text-black text-2xl lg:text-5xl font-bold">
      BNCC STRENGTH
    </h1>
  </div>
  <div class="mt-10 flex flex-wrap justify-center items-center gap-4">
    <a
      
      class="flex h-20 w-40 flex-col items-center justify-center rounded-md shadow-lg border border-dashed border-gray-400 transition-colors duration-100 ease-in-out hover:border-gray-800"
    >
      <div class="flex flex-row items-center justify-center">
        <span class="font-bold text-gray-600"> 40</span>
      </div>

      <div class="mt-2 text-sm text-gray-400">Cadet</div>
    </a>

    <a
      
      class="flex h-20 w-40 flex-col items-center justify-center rounded-md shadow-lg border border-dashed border-gray-400 transition-colors duration-100 ease-in-out hover:border-gray-800"
    >
      <div class="flex flex-row items-center justify-center">
        <span class="font-bold text-gray-600"> 45 </span>
      </div>

      <div class="mt-2 text-sm text-gray-400">Cadet Lance Corporal</div>
    </a>
    <a
      
      class="flex h-20 w-40 flex-col items-center justify-center rounded-md shadow-lg border border-dashed border-gray-400 transition-colors duration-100 ease-in-out hover:border-gray-800"
    >
      <div class="flex flex-row items-center justify-center">
        <span class="font-bold text-gray-600"> 45 </span>
      </div>

      <div class="mt-2 text-sm text-gray-400">Cadet Corporal</div>
    </a>

    <a
      
      class="flex h-20 w-40 flex-col items-center justify-center rounded-md shadow-lg border border-dashed border-gray-400 transition-colors duration-100 ease-in-out hover:border-gray-800"
    >
      <div class="flex flex-row items-center justify-center">
        <span class="font-bold text-gray-600"> 120</span>
      </div>

      <div class="mt-2 text-sm text-gray-400">Cadet Sergeant</div>
    </a>
    <a
      
      class="flex h-20 w-40 flex-col items-center justify-center rounded-md shadow-lg border border-dashed border-gray-400 transition-colors duration-100 ease-in-out hover:border-gray-800"
    >
      <div class="flex flex-row items-center justify-center">
        <span class="font-bold text-gray-600"> 2</span>
      </div>

      <div class="mt-2 text-sm text-gray-400">CUO</div>
    </a>
  </div>
</section>

{{--
       <section 
  class="relative pt-16 pb-16 bg-green-700 mt-10 mb-20" 
  style="background-color: #096123; background-image: url('https://w0.peakpx.com/wallpaper/569/229/HD-wallpaper-military-dress-design-military-dress-design-background-thumbnail.jpg'); background-repeat: no-repeat; background-size: cover;" >
  
  <div class="container mx-auto p-5">
    <div class="flex flex-wrap gap-5 items-center">
     
      <div class="w-full lg:w-2/12 mb-8 lg:mb-0">
        <img 
          src="https://bncc.info/web/image/349667-0bf77aaa/PPP.JPG" 
          alt="Brig Gen Md. Mizanur Rahman" 
          class="mx-auto rounded-lg shadow-lg transform transition duration-300 hover:scale-105"
        />
      </div>
      

     
      <div class="w-full lg:w-4/12 text-center lg:text-left text-white mb-8 lg:mb-0">
        <h2 class="text-2xl font-bold mb-4">Brig Gen Md. Mizanur Rahman, ndc, psc</h2>
        <a 
          href="/" 
          class="inline-block px-6 py-2 bg-blue-600 text-white font-medium text-sm rounded shadow hover:bg-blue-700 transition duration-300"
          target="_blank"
        >
          Read More
        </a>
      </div>

   
      <div class="w-full lg:w-4/12 text-white">
        <h2 class="text-2xl font-bold mb-4">HISTORY OF BNCC</h2>
        <p class="mb-4">
          After the establishment of Dhaka University (1921), the Corps initiated its activities under the provisions of the Indian Territorial Forces Act, 1923.
        </p>
        <a 
          href="/" 
          class="inline-block px-6 py-2 bg-blue-600 text-white font-medium text-sm rounded shadow hover:bg-blue-700 transition duration-300"
          target="_blank"
        >
          Read More
        </a>
      </div>
    </div>
  </div>
      </section>


      <section>
        <div >
          <div class="flex justify-between border-b-4">
            <div class="border-2 rounded-lg py-2 px-3 mb-5 hover:shadow-md">
              Gallery
            </div>
            <div
              class="py-2 px-3 mb-5 transform hover:scale-105 transition duration-200 ease-in-out"
            >
              <a href="gallery.html">View all</a>
            </div>
          </div>

          <div>
            <div
              class="grid min-h-[140px] w-full place-items-center overflow-x-scroll rounded-lg p-6 lg:overflow-visible"
            >
              <div class="grid grid-cols-2 gap-2">
                <div>
                  <img
                    class="object-cover object-center h-40 max-w-full rounded-lg md:h-60 transform transition duration-300 hover:scale-105"
                    src="https://bncc.info/web/image/377251-895a2868/WhatsApp%20Image%202024-02-07%20at%2012.45.58_94ed2ada.jpg"
                    alt=""
                  />
                </div>
                <div>
                  <img
                    class="object-cover object-center h-40 max-w-full rounded-lg md:h-60 transform transition duration-300 hover:scale-105"
                    src="https://bncc.info/web/image/255509-0e93ea0a/%E0%A6%AE%E0%A7%87%E0%A6%B6%E0%A6%BF%E0%A6%A8%E0%A6%97%E0%A6%BE%E0%A6%A8%20%E0%A6%AA%E0%A7%8D%E0%A6%B0%E0%A6%B6%E0%A6%BF%E0%A6%95%E0%A7%8D%E0%A6%B7%E0%A6%A3%E0%A6%B0%E0%A6%A4%20%E0%A6%AC%E0%A6%BF%E0%A6%8F%E0%A6%A8%E0%A6%B8%E0%A6%BF%E0%A6%B8%E0%A6%BF%E0%A6%B0%20%E0%A6%95%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%A1%E0%A7%87%E0%A6%9F%E0%A6%97%E0%A6%A3.jpg"
                    alt=""
                  />
                </div>
                <div>
                  <img
                    class="object-cover object-center h-40 max-w-full rounded-lg md:h-60 transform transition duration-300 hover:scale-105"
                    src="https://bncc.info/web/image/377207-5f5534d1/WhatsApp%20Image%202024-04-24%20at%2010.21.21%20AM.jpeg"
                    alt=""
                  />
                </div>
                <div>
                  <img
                    class="object-cover object-center h-40 max-w-full rounded-lg md:h-60 transform transition duration-300 hover:scale-105"
                    src="https://bncc.info/web/image/255514-fef7f254/%E0%A6%AC%E0%A6%BF%E0%A6%8F%E0%A6%A8%E0%A6%B8%E0%A6%BF%E0%A6%B8%E0%A6%BF%E0%A6%B0%20%E0%A6%95%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%A1%E0%A7%87%E0%A6%9F%E0%A6%97%E0%A6%A3%20%E0%A6%9F%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%82%E0%A6%95%20%E0%A6%AA%E0%A7%8D%E0%A6%B0%E0%A6%B6%E0%A6%BF%E0%A6%95%E0%A7%8D%E0%A6%B7%E0%A6%A3%E0%A7%87%20%E0%A6%85%E0%A6%82%E0%A6%B6%E0%A6%97%E0%A7%8D%E0%A6%B0%E0%A6%B9%E0%A6%A3.jpg"
                    alt=""
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section
        class="relative pt-0 pb-4 bg-gradient-to-r from-blue-900 via-blue-500 to-red-500"
      >
        <div
          class="absolute inset-0 bg-cover bg-no-repeat"
          style="
            background-image: url('https://bncc.info/web_editor/shape/web_editor/Bold/10_001.svg?c1=%23090C84&c4=%2301B6F3&c5=%23C70E0E');
            background-color: #05b4ff;
          "
        ></div>

        <div class="relative max-w-screen-md mx-auto text-center top-2">
          <h1 class="text-white text-2xl lg:text-5xl font-bold">
            BNCC STRENGTH
          </h1>
        </div>
      </section>

      <section class="mb-10">
        <div class="mt-10 flex flex-wrap justify-center items-center gap-4">
          <a
            
            class="flex h-20 w-40 flex-col items-center justify-center rounded-md shadow-lg border border-dashed border-gray-400 transition-colors duration-100 ease-in-out hover:border-gray-800"
          >
            <div class="flex flex-row items-center justify-center">
              <span class="font-bold text-gray-600"> 40</span>
            </div>

            <div class="mt-2 text-sm text-gray-400">Cadet</div>
          </a>

          <a
            
            class="flex h-20 w-40 flex-col items-center justify-center rounded-md shadow-lg border border-dashed border-gray-400 transition-colors duration-100 ease-in-out hover:border-gray-800"
          >
            <div class="flex flex-row items-center justify-center">
              <span class="font-bold text-gray-600"> 45 </span>
            </div>

            <div class="mt-2 text-sm text-gray-400">Cadet Lance Corporal</div>
          </a>
          <a
            
            class="flex h-20 w-40 flex-col items-center justify-center rounded-md shadow-lg border border-dashed border-gray-400 transition-colors duration-100 ease-in-out hover:border-gray-800"
          >
            <div class="flex flex-row items-center justify-center">
              <span class="font-bold text-gray-600"> 45 </span>
            </div>

            <div class="mt-2 text-sm text-gray-400">Cadet Corporal</div>
          </a>

          <a
            
            class="flex h-20 w-40 flex-col items-center justify-center rounded-md shadow-lg border border-dashed border-gray-400 transition-colors duration-100 ease-in-out hover:border-gray-800"
          >
            <div class="flex flex-row items-center justify-center">
              <span class="font-bold text-gray-600"> 120</span>
            </div>

            <div class="mt-2 text-sm text-gray-400">Cadet Sergeant</div>
          </a>
          <a
            
            class="flex h-20 w-40 flex-col items-center justify-center rounded-md shadow-lg border border-dashed border-gray-400 transition-colors duration-100 ease-in-out hover:border-gray-800"
          >
            <div class="flex flex-row items-center justify-center">
              <span class="font-bold text-gray-600"> 2</span>
            </div>

            <div class="mt-2 text-sm text-gray-400">CUO</div>
          </a>
        </div>
      </section>



    <section 

      class="relative pt-6 pb-6 bg-green-900"
      style="background-image: url('https://bncc.info/web_editor/shape/web_editor/Wavy/10.svg?c1=%2330E80C&c2=%23C52929&flip=xy'); background-position: center; background-size: cover;"
    >
      <div class="container mx-auto">
        <div class="flex flex-wrap items-center justify-center gap-10">
        
          <div class="w-full lg:w-5/12 px-4 py-6 bg-green-800 rounded-lg text-center mx-2 transform transition duration-300 hover:scale-105">
            <div class="flex justify-center items-center mb-4">
              <a href="/" class="flex justify-center items-center w-16 h-16 rounded-full bg-blue-500">
                <i class="fa fa-2x fa-user text-white"></i>
              </a>
            </div>
            <h2 class="text-2xl text-white font-bold mb-2">Join BNCC</h2>
            <p class="text-white">
              To register as a Cadet/PUO/TUO/BNCCO/Serving Military Officer kindly use this link.
            </p>
          </div>

        
          <div class="w-full lg:w-6/12 px-4 py-6 bg-blue-900 rounded-lg text-center mx-2 mt-6 lg:mt-0 transform transition duration-300 hover:scale-105">
            <div class="flex justify-center items-center mb-4">
              <a href="adminloginform.html" class="flex justify-center items-center w-16 h-16 rounded-full bg-blue-700">
                <i class="fa fa-2x fa-unlock-alt text-white"></i>
              </a>
            </div>
            <h2 class="text-2xl text-white font-bold mb-2">Sign in</h2>
            <p class="text-gray-300">
              If you are registered then Sign-in into the application.
            </p>
          </div>
        </div>
      </div>
    </section>

--}}

@endsection