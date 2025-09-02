<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Registered Students</h1>

        @if ($students->isEmpty())
            <div class="alert alert-info">No students have been registered yet.</div>
        @else
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Email</th>
                        <th>Home Phone</th>
                        <th>Military Status</th>
                        <th>Registered On</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->Student_Last_Name }}</td>
                            <td>{{ $student->Last }}</td>
                            <td>{{ $student->Student_Email_Address }}</td>
                            <td>{{ $student->Student_Home_Phone }}</td>
                            <td>{{ $student->militry_family_status ?? '-' }}</td>
                            <td>{{ $student->created_at->format('M d, Y') }}</td>
                            <td>
                                <a href="{{ route('student.show', $student->id) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('student.edit', $student->id) }}" class="btn btn-warning btn-sm ms-1">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</body>
</html>