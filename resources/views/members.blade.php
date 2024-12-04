@extends('dashboard') <!-- Assuming you're using a common layout for the dashboard -->

@section('content')
    <div class="p-6">
        <h1 class="text-3xl font-semibold mb-6 text-gray-800">Members</h1>

        <!-- Success Message -->
        @if(session('success'))
            <div class="text-green-500 mb-4 p-3 rounded-md border border-green-300 bg-green-100">
                {{ session('success') }}
            </div>
        @endif

        <!-- Container for Form and Rank Counts (70/30 layout) -->
        <div class="flex flex-col lg:flex-row gap-6">

            <!-- Form Section (70% Width) -->
            <div class="lg:w-7/10 w-full bg-white shadow-lg rounded-xl p-6 flex-1">
                <form action="{{ route('members.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block font-medium text-lg text-gray-700">Name:</label>
                        <input type="text" name="name" id="name" required class="w-full border-2 border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300">
                    </div>
                    <div class="mb-4">
                        <label for="rank" class="block font-medium text-lg text-gray-700">Rank:</label>
                        <input type="text" name="rank" id="rank" required class="w-full border-2 border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300">
                    </div>
                    <div class="mb-4">
                        <label for="picture" class="block font-medium text-lg text-gray-700">Picture:</label>
                        <input type="file" name="picture" id="picture" class="w-full border-2 border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300">
                    </div>
                    <button type="submit" class="w-full bg-blue-600 text-white p-3 rounded-lg hover:bg-blue-700 transition duration-300">Add Member</button>
                </form>
            </div>

            <!-- Rank Count Section (30% Width) -->
            <div class="lg:w-3/10 w-full bg-white shadow-lg rounded-xl p-6 flex-1">
                <h2 class="text-2xl font-semibold mb-4 text-gray-800">Rank Counts</h2>
                <!-- Example of displaying rank counts -->
                <ul class="space-y-4">
                    @foreach($rankCounts as $rank => $count)
                        <li class="flex justify-between">
                            <span class="text-lg text-gray-700">{{ $rank }}</span>
                            <span class="text-lg font-semibold text-gray-900">{{ $count }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <!-- Member Cards Grid -->
        @if($members->isEmpty())
            <p class="text-gray-500 text-center mt-4">No members added yet.</p>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
                @foreach($members as $member)
                    <div class="bg-white shadow-lg rounded-xl p-6 flex items-center space-x-6 hover:shadow-xl transition-all">
                        <!-- Image Column -->
                        <div class="w-32 h-32 rounded-full overflow-hidden bg-gray-100">
                            @if($member->picture)
                                <img src="{{ asset('storage/' . $member->picture) }}" alt="Member Picture" class="w-full h-full object-cover">
                            @else
                                <div class="w-full h-full flex items-center justify-center text-gray-500 text-lg">No Image</div>
                            @endif
                        </div>

                        <!-- Info & Buttons Column -->
                        <div class="flex-1">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $member->name }}</h3>
                            <p class="text-gray-500 text-sm mb-4">{{ $member->rank }}</p>

                            <!-- Edit and Delete Buttons -->
                            <div class="flex gap-4">
                                <a href="{{ route('members.edit', $member->id) }}" class="bg-blue-500 text-white p-2 w-24 text-center rounded-md hover:bg-blue-600 transition duration-300">Edit</a>
                                <form action="{{ route('members.destroy', $member->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white p-2 w-24 text-center rounded-md hover:bg-red-600 transition duration-300">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
