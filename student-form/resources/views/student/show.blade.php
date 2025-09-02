<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Student Details</h1>
        <div class="card">
            <div class="card-body">
                <p><strong>ID:</strong> {{ $student->id }}</p>
                <p><strong>Last Name:</strong> {{ $student->Student_Last_Name }}</p>
                <p><strong>First Name:</strong> {{ $student->Last }}</p>
                <p><strong>Email:</strong> {{ $student->Student_Email_Address }}</p>
                <p><strong>Home Phone:</strong> {{ $student->Student_Home_Phone }}</p>
                <p><strong>Military Status:</strong> {{ $student->militry_family_status ?? '-' }}</p>
                <p><strong>Registered On:</strong> {{ $student->created_at->format('F d, Y') }}</p>
            </div>
        </div>
        <a href="{{ route('students.index') }}" class="btn btn-secondary mt-3">Back to All Students</a>
    </div>
</body>
</html>
