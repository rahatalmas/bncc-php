@extends('dashboard') <!-- Assuming you have a base dashboard layout -->

@section('content')
    <div class="container mx-auto p-8">
        <h1 class="text-2xl font-semibold text-center mb-6">Edit Student</h1>

        @if (session('success'))
            <div class="bg-green-500 text-white p-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('students.update', $student->id) }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 shadow-md rounded">
            @csrf
            @method('PUT')

            <!-- Name Field -->
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name', $student->name) }}" required class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <!-- Semester Field -->
            <div class="mb-4">
                <label for="semester" class="block text-sm font-medium text-gray-700">Semester</label>
                <input type="text" name="semester" id="semester" value="{{ old('semester', $student->semester) }}" required class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <!-- Student ID Field -->
            <div class="mb-4">
                <label for="student_id" class="block text-sm font-medium text-gray-700">Student ID</label>
                <input type="text" name="student_id" id="student_id" value="{{ old('student_id', $student->student_id) }}" required class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <!-- Email Field -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email', $student->email) }}" required class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <!-- Image Field -->
            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-700">Upload Image</label>
                <input type="file" name="image" id="image" class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                @if ($student->image)
                    <img src="{{ asset('storage/' . $student->image) }}" alt="Student Image" class="mt-4 max-w-xs">
                @endif
            </div>

            <!-- Father Name Field -->
            <div class="mb-4">
                <label for="fathers_name" class="block text-sm font-medium text-gray-700">Father's Name</label>
                <input type="text" name="fathers_name" id="fathers_name" value="{{ old('fathers_name', $student->fathers_name) }}" required class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <!-- Mother Name Field -->
            <div class="mb-4">
                <label for="mothers_name" class="block text-sm font-medium text-gray-700">Mother's Name</label>
                <input type="text" name="mothers_name" id="mothers_name" value="{{ old('mothers_name', $student->mothers_name) }}" required class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <!-- Nationality Field -->
            <div class="mb-4">
                <label for="nationality" class="block text-sm font-medium text-gray-700">Nationality</label>
                <input type="text" name="nationality" id="nationality" value="{{ old('nationality', $student->nationality) }}" required class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <!-- Religion Field -->
            <div class="mb-4">
                <label for="religion" class="block text-sm font-medium text-gray-700">Religion</label>
                <input type="text" name="religion" id="religion" value="{{ old('religion', $student->religion) }}" required class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <!-- Blood Group Field -->
            <div class="mb-4">
                <label for="blood_group" class="block text-sm font-medium text-gray-700">Blood Group</label>
                <input type="text" name="blood_group" id="blood_group" value="{{ old('blood_group', $student->blood_group) }}" required class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <!-- Chest Size Field -->
            <div class="mb-4">
                <label for="chest_size" class="block text-sm font-medium text-gray-700">Chest Size</label>
                <input type="number" name="chest_size" id="chest_size" value="{{ old('chest_size', $student->chest_size) }}" required class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <!-- Height Field -->
            <div class="mb-4">
                <label for="height" class="block text-sm font-medium text-gray-700">Height</label>
                <input type="number" name="height" id="height" value="{{ old('height', $student->height) }}" required class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <!-- Weight Field -->
            <div class="mb-4">
                <label for="weight" class="block text-sm font-medium text-gray-700">Weight</label>
                <input type="number" name="weight" id="weight" value="{{ old('weight', $student->weight) }}" required class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <!-- Birth Year Field -->
            <div class="mb-4">
                <label for="birth_year" class="block text-sm font-medium text-gray-700">Birth Year</label>
                <input type="text" name="birth_year" id="birth_year" value="{{ old('birth_year', $student->birth_year) }}" required class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <!-- Admission Year Field -->
            <div class="mb-4">
                <label for="admission_year" class="block text-sm font-medium text-gray-700">Admission Year</label>
                <input type="text" name="admission_year" id="admission_year" value="{{ old('admission_year', $student->admission_year) }}" required class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <!-- Form Date Field -->
            <div class="mb-4">
                <label for="form_date" class="block text-sm font-medium text-gray-700">Form Date</label>
                <input type="text" name="form_date" id="form_date" value="{{ old('form_date', $student->form_date) }}" required class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <!-- Interested Area Field -->
            <div class="mb-4">
                <label for="interested_area" class="block text-sm font-medium text-gray-700">Interested Area</label>
                <input type="text" name="interested_area" id="interested_area" value="{{ old('interested_area', $student->interested_area) }}" required class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <!-- Pending Field -->
            <div class="mb-4">
                <label for="pending" class="block text-sm font-medium text-gray-700">Pending</label>
                <input type="checkbox" name="pending" id="pending" {{ old('pending', $student->pending) ? 'checked' : '' }} class="mt-1">
            </div>

            <!-- Purpose in Life Field -->
            <div class="mb-4">
                <label for="purpose_in_life" class="block text-sm font-medium text-gray-700">Purpose in Life</label>
                <textarea name="purpose_in_life" id="purpose_in_life" rows="3" class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">{{ old('purpose_in_life', $student->purpose_in_life) }}</textarea>
            </div>

            <!-- Update Button -->
            <button type="submit" class="w-full px-4 py-2 bg-blue-500 text-white font-semibold rounded-md">Update Student</button>
        </form>

        <!-- Delete Student -->
        <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="mt-6">
            @csrf
            @method('DELETE')
            <button type="submit" class="w-full px-4 py-2 bg-red-500 text-white font-semibold rounded-md">Delete Student</button>
        </form>
    </div>
@endsection
