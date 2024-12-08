@extends('public.layouts.publicuilayout')
@section('content')
    
    <div class="container mx-auto p-8">
        <h1 class="text-2xl font-semibold text-center mb-6">Apply For BNCC DIU</h1>

        @if (session('success'))
            <div class="bg-green-500 text-white p-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 shadow-md rounded">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <!-- Name Field -->
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" required class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                    @error('name') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
                </div>

                <!-- Semester Field -->
                <div class="mb-4">
                    <label for="semester" class="block text-sm font-medium text-gray-700">Semester</label>
                    <input type="text" name="semester" id="semester" value="{{ old('semester') }}" required class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                    @error('semester') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
                </div>

                <!-- Student ID Field -->
                <div class="mb-4">
                    <label for="student_id" class="block text-sm font-medium text-gray-700">Student ID</label>
                    <input type="text" name="student_id" id="student_id" value="{{ old('student_id') }}" required class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                    @error('student_id') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
                </div>

                <!-- Subject Field -->
                <div class="mb-4">
                    <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
                    <input type="text" name="subject" id="subject" value="{{ old('subject') }}" required class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                    @error('subject') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
                </div>

                <!-- Birth Year Field with Date Picker -->
                <div class="mb-4">
                    <label for="birth_year" class="block text-sm font-medium text-gray-700">Birth Year</label>
                    <input type="date" name="birth_year" id="birth_year" value="{{ old('birth_year') }}" required class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                    @error('birth_year') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
                </div>

                <!-- Admission Year Field -->
                <div class="mb-4">
                    <label for="admission_year" class="block text-sm font-medium text-gray-700">Admission Year</label>
                    <input type="number" name="admission_year" id="admission_year" value="{{ old('admission_year') }}" required class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                    @error('admission_year') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
                </div>

                <!-- Email Field -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" required class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                    @error('email') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
                </div>

                <!-- Institute Name Field -->
                <div class="mb-4">
                    <label for="institute_name" class="block text-sm font-medium text-gray-700">Institute Name</label>
                    <input type="text" name="institute_name" id="institute_name" value="{{ old('institute_name') }}" required class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                    @error('institute_name') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
                </div>

                <!-- Chest Size Field -->
                <div class="mb-4">
                    <label for="chest_size" class="block text-sm font-medium text-gray-700">Chest Size</label>
                    <input type="number" name="chest_size" id="chest_size" value="{{ old('chest_size') }}" required class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                    @error('chest_size') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
                </div>

                <!-- Height Field -->
                <div class="mb-4">
                    <label for="height" class="block text-sm font-medium text-gray-700">Height</label>
                    <input type="number" name="height" id="height" value="{{ old('height') }}" required class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                    @error('height') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
                </div>

                <!-- Weight Field -->
                <div class="mb-4">
                    <label for="weight" class="block text-sm font-medium text-gray-700">Weight</label>
                    <input type="number" name="weight" id="weight" value="{{ old('weight') }}" required class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                    @error('weight') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
                </div>

                <!-- Blood Group Field -->
                <div class="mb-4">
                    <label for="blood_group" class="block text-sm font-medium text-gray-700">Blood Group</label>
                    <input type="text" name="blood_group" id="blood_group" value="{{ old('blood_group') }}" required class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                    @error('blood_group') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
                </div>

                <!-- Doctors Speech Field -->
                <div class="mb-4">
                    <label for="doctors_speech" class="block text-sm font-medium text-gray-700">Doctor's Speech</label>
                    <textarea name="doctors_speech" id="doctors_speech" rows="3" class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">{{ old('doctors_speech') }}</textarea>
                    @error('doctors_speech') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
                </div>

                <!-- Father's Name Field -->
                <div class="mb-4">
                    <label for="fathers_name" class="block text-sm font-medium text-gray-700">Father's Name</label>
                    <input type="text" name="fathers_name" id="fathers_name" value="{{ old('fathers_name') }}" required class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                    @error('fathers_name') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
                </div>

                <!-- Mother's Name Field -->
                <div class="mb-4">
                    <label for="mothers_name" class="block text-sm font-medium text-gray-700">Mother's Name</label>
                    <input type="text" name="mothers_name" id="mothers_name" value="{{ old('mothers_name') }}" required class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                    @error('mothers_name') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
                </div>

                <!-- Nationality Field -->
                <div class="mb-4">
                    <label for="nationality" class="block text-sm font-medium text-gray-700">Nationality</label>
                    <input type="text" name="nationality" id="nationality" value="{{ old('nationality') }}" required class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                    @error('nationality') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
                </div>

                <!-- Religion Field -->
                <div class="mb-4">
                    <label for="religion" class="block text-sm font-medium text-gray-700">Religion</label>
                    <input type="text" name="religion" id="religion" value="{{ old('religion') }}" required class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                    @error('religion') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
                </div>

                <!-- Interested Area Field -->
                <div class="mb-4">
                    <label for="interested_area" class="block text-sm font-medium text-gray-700">Interested Area</label>
                    <input type="text" name="interested_area" id="interested_area" value="{{ old('interested_area') }}" class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                    @error('interested_area') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
                </div>

                <!-- Agree BNCC Rules Checkbox -->
                <div class="mb-4">
                    <label for="agree_bncc_rules" class="flex items-center space-x-2">
                        <input type="checkbox" name="agree_bncc_rules" id="agree_bncc_rules" value="1" class="rounded" {{ old('agree_bncc_rules') ? 'checked' : '' }}>
                        <span class="text-sm font-medium text-gray-700">Agree to BNCC Rules</span>
                    </label>
                    @error('agree_bncc_rules') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
                </div>

                <!-- Purpose in Life Field -->
                <div class="mb-4">
                    <label for="purpose_in_life" class="block text-sm font-medium text-gray-700">Purpose in Life</label>
                    <textarea name="purpose_in_life" id="purpose_in_life" rows="3" class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">{{ old('purpose_in_life') }}</textarea>
                    @error('purpose_in_life') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
                </div>

                <!-- Form Date Field -->
                <div class="mb-4">
                    <label for="form_date" class="block text-sm font-medium text-gray-700">Form Date</label>
                    <input type="date" name="form_date" id="form_date" value="{{ old('form_date') }}" required class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                    @error('form_date') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
                </div>

                <!-- Image Upload Field -->
                <div class="mb-4 col-span-2">
                    <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                    <input type="file" name="image" id="image" class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                    @error('image') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
                </div>

                <!-- Submit Button -->
                <div class="mb-6 text-center col-span-2">
                    <button type="submit" class="w-full md:w-auto px-6 py-2 bg-blue-500 text-white font-semibold rounded-md">Submit</button>
                </div>

            </div>
        </form>
    </div>
@endsection
