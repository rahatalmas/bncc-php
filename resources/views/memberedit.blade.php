<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Member</title>
</head>
<body>
    <h1>Edit Member</h1>

    <!-- Success Message -->
    @if(session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    <!-- Validation Errors -->
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Edit Member Form -->
    <form action="{{ route('members.update', $member->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $member->name }}" required>
        <br><br>

        <label for="rank">Rank:</label>
        <input type="text" name="rank" id="rank" value="{{ $member->rank }}" required>
        <br><br>

        <label for="picture">Picture:</label>
        @if($member->picture)
            <div>
                <img src="{{ asset('storage/' . $member->picture) }}" alt="Current Picture" style="width: 100px; height: auto; border: 1px solid #ddd;">
            </div>
        @endif
        <input type="file" name="picture" id="picture">
        <br><br>

        <button type="submit">Update Member</button>
    </form>

    <!-- Back Link -->
    <br>
    <a href="{{ route('members.index') }}">Back to Members List</a>
</body>
</html>
