<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $student->name }}'s Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">{{ $student->name }}'s Details</h1>
        
        <div class="card">
            <div class="card-body">
                <p><strong>ID:</strong> {{ $student->id }}</p>
                <p><strong>Name:</strong> {{ $student->name }}</p>
                <p><strong>Email:</strong> {{ $student->email }}</p>
                <p><strong>Registered On:</strong> {{ $student->created_at->format('F d, Y') }}</p>
            </div>
        </div>

        <a href="{{ route('students.index') }}" class="btn btn-secondary mt-3">Back to All Students</a>
    </div>
</body>
</html>