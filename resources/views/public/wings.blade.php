@extends('public.layouts.publicuilayout')

@section('content')
    <div class="mx-auto">
        
       {{-- header section --}}
       <div class="notice-board-header">
        <h1 class="text-4xl font-bold text-center bg-gradient-to-r from-red-500 via-purple-500 to-blue-400 bg-clip-text text-transparent">
          Army Wings
        </h1>
      </div>
      {{-- header section end --}}

      {{-- wings --}}
      {{-- <div class="wings-list">
          <div class="wing-item">Army Wing</div>
          <div class="wing-item">Navy Wing</div>
          <div class="wing-item">Air Wing</div>
      </div> --}}
      {{-- end wings --}}
      
      {{-- wing details --}}

      <div class="army-wing-details">
        <div class="army-wing-activities">
          <!-- Army Activity 1 -->
          <div class="army-activity">
            <button class="toggle-btn">
              <span>RAMNA REGIMENT</span>
              <span class="toggle-icon">+</span>
            </button>
            <div class="activity-content">
              <p>
                After the formation of Bangladesh National Cadet Corps (BNCC) on 23 March 1979 The Ramna Regiment was raised and named after Ramna which was one of the historical places of Dhaka. To bring Dynamism in BNCC Ramna Regiment started its activities under five Battalions with the cadets of different Institutions of Dhaka, Munshiganj, Gazipur, Mymensingh, Jamalpur, Sherpur, Netrokona, Narayanganj, Kishorgong. At present there are total 110 Educational Institutions with 152 Platoons and 5659 Cadets under Ramna Regiment.
              </p>
            </div>
          </div>
  
          <!-- Army Activity 2 -->
          <div class="army-activity">
            <button class="toggle-btn">
              <span>MAINAMATI REGIMENT</span>
              <span class="toggle-icon">+</span>
            </button>
            <div class="activity-content">
              <p>
                Mainamati Regiment was raised in 1979. To extend the activities of BNCC, Mainamati Regiment started its curricula with the Cadets of different Institutions of Cumilla, Sylhet, Sunamganj, Hobiganj and Moulovibazar. At present there are 100 Educational Institutions with 122 platoons and 3608 Cadets under this Regiment.
              </p>
            </div>
          </div>
  
          <!-- Army Activity 3 -->
          <div class="army-activity">
            <button class="toggle-btn">
              <span>KARNAPHULI REGIMENT</span>
              <span class="toggle-icon">+</span>
            </button>
            <div class="activity-content">
              <p>
                Karnaphuli Regiment was raised on 28th November 1979. From the very beginning Karnaphuli Regiment started its activities with the cadets of different Institutions of Chiattagram and Cox’s Bazar districts. At present there are 59 Education Institutions with 86 platoons and 3413 Cadets under this regiment.
              </p>
            </div>
          </div>
  
          <!-- Army Activity 4 -->
          <div class="army-activity">
            <button class="toggle-btn">
              <span>MAHASTHAN REGIMENT</span>
              <span class="toggle-icon">+</span>
            </button>
            <div class="activity-content">
              <p>
                Mahasthan Regiment was raised on 30th march 1979 and named after the name of Mahasthan garh, a historical place of Bogra. To accelerate the expansion of BNCC, Mahasthan Regiment started its activities with the Cadets of different Institutions of Rajshahi, Pabna, Bogra, Rangpur, Dinajpur, Sirajgonj, Natore and Lalmonirhat districts with its five Battalions. At present there are 102 Education Institutions with 130 platoons and 4086 Cadets under this regiment.
              </p>
            </div>
          </div>
  
          <!-- Army Activity 5 -->
          <div class="army-activity">
            <button class="toggle-btn">
              <span>SUNDARBAN REGIMENT</span>
              <span class="toggle-icon">+</span>
            </button>
            <div class="activity-content">
              <p>
                Sundarban Regiment started its activities from the very beginning of the institution of BNCC in 1979. SUNDARBAN REGIMENT was named after the name of world’s largest mangrove forest Sundarban. From the very beginning of raising Sundarban Regiment started its activities for the expansion of BNCC with the Cadets of different Institutions of Khulna, Bagerhat, Shatkhira, Jessore, Narail, Magura, Chuadanga, Meherpur, Kushtia, Faridpur, Rajbari, Gopalgonj, Shariatpur, Madaripur.Barisal, Pirojpur, Bhola, Patuakhali, Borguna and Jhalokhathi. At Prsent there are 99 Education Institution with 114 Platoons and 2201 Cadets under this Regiment.
              </p>
            </div>
          </div>
        </div>
      </div>
</div>


<div class="notice-board-header">
  <h1 class="text-4xl font-bold text-center bg-gradient-to-r from-red-500 via-purple-500 to-blue-400 bg-clip-text text-transparent">
    Navy Wings
  </h1>
</div>
<div class="wing-details">
       {{-- header section --}}

  <p>
    After the formation of Bangladesh National Cadet Corps on 23th March 1979, the Naval Wing was raised. The Naval wing started its activities with the Cadets of different Institutions of Dhaka, Chattogram, Cox’s Bazar, Khulna district, Rajshahi, Kustia, Barisal, Patuakhali and Bangura districts. It is Organized into three Flotillas. Under Dhaka Flotilla there are 11 Educational Institutions with 16 Platoons and 868 cadets ; under Chattagram Flotilla there are 08 Educational Institutions and 15 Platoons with 470 cadets ; under Khulna Flotilla there are 16 Educational Intuitions and 25 Platoons with 824 cadets .
  </p>
</div>
       {{-- header section --}}
       <div class="notice-board-header">
        <h1 class="text-4xl font-bold text-center bg-gradient-to-r from-red-500 via-purple-500 to-blue-400 bg-clip-text text-transparent">
          Air Wings
        </h1>
      </div>
<div class="wing-details">
  <p>
    Air wing was raised after the formation of BNCC on 23th March 1979. Air wing started its activities since its raising with the Cadets of different Institutions of Dhaka, Cumilla, Sylhet, Chattagram, Rajshahi, Kustia and Jeshore District. It is organized into three Squadrons. Under Dhaka Squadron there are 13 Institutions , 17 Flights with 1153 Cadets. Under Chattagram Squadron there are 05 Institutions, 07 Platoons with 641 Cadets. Under Jeshore Squadron there are 09 Institutions , 09 platoons with 1000 Cadets.
  </p>
</div>

      {{-- end wing details --}}
</div>
@endsection