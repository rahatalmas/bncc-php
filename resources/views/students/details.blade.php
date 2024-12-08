@extends('dashboard') <!-- Assuming you have a base dashboard layout -->

@section('content')
<div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    <div class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-3xl font-semibold text-gray-800 mb-6">Student Details: <span class="text-blue-500">{{ $student->name }}</span></h2>

        <div class="space-y-4">
            <p class="text-gray-600"><strong class="text-gray-900">Name:</strong> {{ $student->name }}</p>
            <p class="text-gray-600"><strong class="text-gray-900">Student ID:</strong> {{ $student->student_id }}</p>
            <p class="text-gray-600"><strong class="text-gray-900">Email:</strong> {{ $student->email }}</p>
            <p class="text-gray-600"><strong class="text-gray-900">Semester:</strong> {{ $student->semester }}</p>
            <p class="text-gray-600"><strong class="text-gray-900">Subject:</strong> {{ $student->subject }}</p>
            <p class="text-gray-600"><strong class="text-gray-900">Birth Year:</strong> {{ $student->birth_year }}</p>
            <p class="text-gray-600"><strong class="text-gray-900">Admission Year:</strong> {{ $student->admission_year }}</p>
            <p class="text-gray-600"><strong class="text-gray-900">Institute Name:</strong> {{ $student->institute_name }}</p>
            <p class="text-gray-600"><strong class="text-gray-900">Chest Size:</strong> {{ $student->chest_size }}</p>
            <p class="text-gray-600"><strong class="text-gray-900">Height:</strong> {{ $student->height }}</p>
            <p class="text-gray-600"><strong class="text-gray-900">Weight:</strong> {{ $student->weight }}</p>
            <p class="text-gray-600"><strong class="text-gray-900">Blood Group:</strong> {{ $student->blood_group }}</p>
            <p class="text-gray-600"><strong class="text-gray-900">Doctor's Speech:</strong> {{ $student->doctors_speech }}</p>
            <p class="text-gray-600"><strong class="text-gray-900">Father's Name:</strong> {{ $student->fathers_name }}</p>
            <p class="text-gray-600"><strong class="text-gray-900">Mother's Name:</strong> {{ $student->mothers_name }}</p>
            <p class="text-gray-600"><strong class="text-gray-900">Nationality:</strong> {{ $student->nationality }}</p>
            <p class="text-gray-600"><strong class="text-gray-900">Religion:</strong> {{ $student->religion }}</p>
            <p class="text-gray-600"><strong class="text-gray-900">Interested Area:</strong> {{ $student->interested_area }}</p>
            <p class="text-gray-600"><strong class="text-gray-900">Purpose in Life:</strong> {{ $student->purpose_in_life }}</p>
            <p class="text-gray-600"><strong class="text-gray-900">Form Date:</strong> {{ $student->form_date }}</p>
            
            <p class="text-gray-600"><strong class="text-gray-900">Pending:</strong> {{ $student->pending ? 'Yes' : 'No' }}</p>

            <div class="mt-4">
                <strong class="text-gray-900">Image:</strong>
                <div class="mt-2">
                    @if ($student->image)
                        <img src="{{ asset('storage/' . $student->image) }}" alt="Student Image" class="w-32 h-32 object-cover rounded-lg">
                    @else
                        <p class="text-gray-500">No image available</p>
                    @endif
                </div>
            </div>
        </div>

        <div class="mt-6 flex space-x-4">
            <!-- Approve Button (only if the student is pending) -->
            @if ($student->status === 'pending')
            <form action="{{ route('students.approve', $student->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <button type="submit" class="bg-green-500 text-white px-6 py-2 rounded hover:bg-green-600">
                    Approve
                </button>
            </form>
        @endif

            <!-- Delete Button -->
            <form action="{{ route('students.destroy', $student->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this student?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white px-6 py-2 rounded hover:bg-red-600">
                    Delete
                </button>
            </form>
        </div>

        <div class="mt-6">
            <a href="{{ route('students.index') }}" class="text-blue-500 hover:text-blue-700">Back to Student List</a>
        </div>
    </div>
</div>
@endsection
