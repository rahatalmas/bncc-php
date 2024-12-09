@extends('public.layouts.publicuilayout')

@section('content')
    <div class="mx-auto">
       {{-- header section --}}
       <div class="notice-board-header">
        <h1 class="text-4xl font-bold text-center bg-gradient-to-r from-red-500 via-purple-500 to-blue-400 bg-clip-text text-transparent">
          Training
        </h1>
      </div>
      {{-- header section end --}}

      <div class="activity-card-container">
        <div class="activity-card">
            <h1 class="h1">
                Institutional Training
                <span class="toggle-icon">+</span>
            </h1>
            <p class="activity-card-text">
                Two Days (4 periods) in a week conducted at Platoons.
                Training activities: Classes related to Self-Development along with Basic Military Discipline.                
            </p>
        </div>
        <div class="activity-card">
            <h1 class="h1">
                Battalion Camping
                <span class="toggle-icon">+</span>
            </h1>
            <p class="activity-card-text">
                Organized at Battalion Level- Once in a year.
                Training activities: Classes related to Self-Development along with Practical Knowledge on Basic Military Camping.                
            </p>
        </div>
        <div class="activity-card">
            <h1 class="h1">
                Regimental Camping
                <span class="toggle-icon">+</span>
            </h1>
            <p class="activity-card-text">
                Organized at Regiment level with all Battalions- Once in a year.
                Training activities: Classes related to Self-Development along with Practical Knowledge on Basic Military Camping. In addition number of competitions on Games, Sports & Co-curricular Activities are held.
            </p>
        </div>
        <div class="activity-card">
            <h1 class="h1">
                Central Camping
                <span class="toggle-icon">+</span>
            </h1>
            <p class="activity-card-text">
                Organized by HQ BNCC with all Regiments- Once in a year.
                Training activities: In addition to above mentioned events, Awareness on Firefighting, Anti-Drug & Other Social movements are built among cadets.                              
            </p>
        </div>
        <div class="activity-card">
            <h1 class="h1">
                National Day Camping
                <span class="toggle-icon">+</span>
            </h1>
            <p class="activity-card-text">
                <p>Victory Day Camp</p>
                <p>Independence Day Camping.</p>                
            </p>
        </div>
        <div class="activity-card">
            <h1 class="h1">
                Extra-Curricular Activities Skill develop training
                <span class="toggle-icon">+</span>
            </h1>
            <p class="activity-card-text">
                Cultural activities; Dance, Song, Acting, Reciting etc, Confidence building programs; Debate, Extempore speech etc, Games and Sports.               
            </p>
        </div> 

        <div class="activity-card">
            <h1 class="h1">
                Military training for a cadet
                <span class="toggle-icon">+</span>
            </h1>
            <p class="activity-card-text">
                Not compulsory, however only few basic military training are given to develop leadership, physical fitness, sense of dedication, discipline, comradeship etc               
            </p>
        </div> 
        
        <div class="activity-card">
            <h1 class="h1">
                Visit abroad & Meet Head of Govt.
                <span class="toggle-icon">+</span>
            </h1>
            <p class="activity-card-text">
                Visit abroad as BNCC Cadets; India, Sri Lanka, Maldives, Nepal, Singapore and meet Head of the States & Head of Govt               
            </p>
        </div> 
     </div>
     <div style="text-align:center" style="margin: auto">
        <h1 class="h1">Others</h1>
        <p>
            VISIT DELHI, 
            VISIT RAJASTHAN, 
            VISIT SRI LANKA, 
            VISIT MALDIVES, 
            VISIT NEPAL, 
            VISIT SINGAPORE, 
            Various Adventure Training, 
            MOUNTAIN CLIMBING, 
            SEAMANSHIP, 
            SAILING, POOLING, 
            HELI RIDING, 
            ISSB TRAINING, 
            COMPUTER TRAINING,                 
        </p>
    </div>
    
</div>

    <style>
        .activity-card .activity-card-text {
            display: none; /* Hide the content initially */
            transition: all 0.3s ease; /* Smooth transition for the text */
        }

        .activity-card.collapsed .activity-card-text {
            display: block; /* Show the content when expanded */
        }

        .activity-card {
            overflow: hidden; /* Hide anything that goes outside the card */
            transition: max-height 0.3s ease-in-out; /* Smooth transition for card size */
            max-height: 150px; /* Set an initial max height */
        }

        .activity-card.collapsed {
            max-height: 600px; /* Increase max height when expanded */
        }

        .activity-card h1 {
            cursor: pointer; /* Make the h1 clickable */
            display: flex; /* Flex to position icon to the right */
            justify-content: space-between;
            align-items: center;
        }

        .toggle-icon {
            font-size: 20px;
            transition: transform 0.3s ease; /* Smooth transition for the icon */
        }

        .activity-card.collapsed .toggle-icon {
            transform: rotate(45deg); /* Rotate the icon to form a minus sign */
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const activityCards = document.querySelectorAll(".activity-card");

            activityCards.forEach(card => {
                const header = card.querySelector("h1"); // Find the h1 inside the card
                const icon = header.querySelector(".toggle-icon"); // Find the toggle icon

                header.addEventListener("click", function () {
                    // Toggle the 'collapsed' class when the header is clicked
                    card.classList.toggle("collapsed");

                    // Toggle the icon between '+' and '-'
                    if (card.classList.contains("collapsed")) {
                        icon.textContent = '-'; // Change to minus when expanded
                    } else {
                        icon.textContent = '+'; // Change to plus when collapsed
                    }
                });
            });
        });
    </script>
@endsection
