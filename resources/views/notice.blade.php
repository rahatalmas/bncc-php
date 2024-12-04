@extends('dashboard')

@section('content')
    <div class="p-6">

        <!-- Add Notice Form Card -->
        <div class="bg-white shadow-md rounded-lg p-6 mb-6">
            <h1 class="text-2xl font-semibold mb-4">Add Notice</h1>
            <form action="{{ route('notices.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <input type="text" name="title" placeholder="Title" required class="border p-2 w-full box-border rounded">
                </div>
                <div class="mb-4">
                    <textarea name="description" placeholder="Description" required class="border p-2 w-full box-border rounded"></textarea>
                </div>
                <div class="mb-4">
                    <input type="url" name="noticefilelink" placeholder="File Link" required class="border p-2 w-full box-border rounded">
                </div>
                <button type="submit" class="bg-green-500 text-white p-2 rounded">Add Notice</button>
            </form>
        </div>

        <!-- Success Message -->
        @if(session('success'))
            <div style="color: green;">
                {{ session('success') }}
            </div>
        @endif

        <!-- Notice List -->
        <h2 class="text-xl font-semibold mb-4">All Notices</h2>
        <ul>
            @foreach($notices as $notice)
                <li class="mb-4">
                    <div class="bg-white shadow-sm rounded-lg p-4">
                        <strong>{{ $notice->title }}</strong> - {{ $notice->description }}
                        <a href="{{ $notice->noticefilelink }}" target="_blank" class="text-blue-600 hover:underline ml-2">View File</a>

                        <div class="mt-4 flex space-x-2">
                            <!-- Delete Form -->
                            <form action="{{ route('notices.destroy', $notice->noticeid) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure?')" class="bg-red-500 text-white p-2 rounded w-[100px]">Delete</button>
                            </form>

                            <!-- Edit Button -->
                            <button onclick="showEditModal({{ $notice->noticeid }})" class="bg-yellow-500 text-white p-2 rounded w-[100px]">Edit</button>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>

        <!-- Edit Modal -->
        <div id="editModal" style="display:none;" class="modal-overlay">
            <form id="editForm" method="POST" class="bg-white shadow-lg p-6 rounded max-w-lg w-full">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <input type="text" name="title" id="editTitle" required class="border p-2 w-full box-border rounded">
                </div>
                <div class="mb-4">
                    <textarea name="description" id="editDescription" required class="border p-2 w-full box-border rounded"></textarea>
                </div>
                <div class="mb-4">
                    <input type="url" name="noticefilelink" id="editFileLink" required class="border p-2 w-full box-border rounded">
                </div>
                <button type="submit" class="bg-green-500 text-white p-2 rounded">Update Notice</button>
            </form>
            <button onclick="hideEditModal()" class="bg-gray-500 text-white p-2 rounded mt-4">Close</button>
        </div>

    </div>

    <script>
        // Show Edit Modal
        function showEditModal(id) {
            fetch(`/notices/${id}/edit`)
                .then(response => response.json())
                .then(data => {
                    document.getElementById('editTitle').value = data.title;
                    document.getElementById('editDescription').value = data.description;
                    document.getElementById('editFileLink').value = data.noticefilelink;
                    document.getElementById('editForm').action = `/notices/${id}`;
                    document.getElementById('editModal').style.display = 'flex'; // Show modal
                });
        }

        // Hide Edit Modal
        function hideEditModal() {
            document.getElementById('editModal').style.display = 'none'; // Hide modal
        }
    </script>

    <style>
        /* Modal Overlay - Full Screen */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Overlay background */
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        /* Center Modal Content */
        .modal-overlay form {
            max-width: 600px;
            width: 100%;
        }

        .modal-overlay .bg-white {
            margin-top: 20px; /* Add margin to ensure modal doesn't stick to the top */
        }
    </style>
@endsection
