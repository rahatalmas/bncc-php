@extends('dashboard') <!-- Assuming you have a base dashboard layout -->

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6">Students</h1>
    <a href="{{ route('students.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 mb-4 inline-block">Add New Student</a>

    <!-- Success message -->
    @if(session('success'))
        <div class="bg-green-500 text-white p-4 mb-6 rounded">
            {{ session('success') }}
        </div>
    @endif

    <!-- Error message for duplicate student_id or image errors -->
    @if(session('error'))
        <div class="bg-red-500 text-white p-4 mb-6 rounded">
            {{ session('error') }}
        </div>
    @endif

    <!-- Pending Students Section -->
    <h2 class="text-2xl font-semibold mb-4">Pending Students</h2>
    <table class="min-w-full bg-white border border-gray-200 shadow-md rounded">
        <thead>
            <tr class="bg-gray-100 text-left">
                <th class="px-6 py-3 text-sm font-medium text-gray-700">Name</th>
                <th class="px-6 py-3 text-sm font-medium text-gray-700">Student ID</th>
                <th class="px-6 py-3 text-sm font-medium text-gray-700">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($pendingStudents as $student)
                <tr class="border-t">
                    <td class="px-6 py-4 text-sm text-gray-800">{{ $student->name }}</td>
                    <td class="px-6 py-4 text-sm text-gray-800">{{ $student->student_id }}</td>
                    <td class="px-6 py-4 text-sm text-gray-800">
                        <!-- Approve Button -->
                        <form action="{{ route('students.approve', $student->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Approve</button>
                        </form>
                        
                        <!-- Details Button -->
                        <a href="{{ route('students.details', $student->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 inline-block ml-2">Details</a>

                        <!-- Delete Button -->
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="inline-block ml-2" onsubmit="return confirm('Are you sure you want to delete this student?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="px-6 py-4 text-sm text-gray-500">No pending students found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <!-- Approved Students Section -->
    <h2 class="text-2xl font-semibold mt-8 mb-4">Approved Students</h2>
    <table class="min-w-full bg-white border border-gray-200 shadow-md rounded">
        <thead>
            <tr class="bg-gray-100 text-left">
                <th class="px-6 py-3 text-sm font-medium text-gray-700">Name</th>
                <th class="px-6 py-3 text-sm font-medium text-gray-700">Student ID</th>
                <th class="px-6 py-3 text-sm font-medium text-gray-700">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($approvedStudents as $student)
                <tr class="border-t">
                    <td class="px-6 py-4 text-sm text-gray-800">{{ $student->name }}</td>
                    <td class="px-6 py-4 text-sm text-gray-800">{{ $student->student_id }}</td>
                    <td class="px-6 py-4 text-sm text-gray-800">
                        <!-- Details Button -->
                        <a href="{{ route('students.details', $student->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 inline-block">Details</a>

                        <!-- Delete Button -->
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="inline-block ml-2" onsubmit="return confirm('Are you sure you want to delete this student?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="px-6 py-4 text-sm text-gray-500">No approved students found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
