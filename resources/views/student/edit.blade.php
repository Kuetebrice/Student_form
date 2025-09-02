<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Edit Student</h1>
        <form method="POST" action="{{ route('student.update', $student->id) }}">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="Student_Last_Name" value="{{ $student->Student_Last_Name }}" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">First Name</label>
                    <input type="text" class="form-control" name="Last" value="{{ $student->Last }}" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Middle</label>
                    <input type="text" class="form-control" name="Midle" value="{{ $student->Midle }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Home Address</label>
                    <input type="text" class="form-control" name="Home_address" value="{{ $student->Home_address }}" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label class="form-label">City</label>
                    <input type="text" class="form-control" name="City" value="{{ $student->City }}" required>
                </div>
                <div class="col-md-1 mb-3">
                    <label class="form-label">State</label>
                    <input type="text" class="form-control" name="State" value="{{ $student->State }}" required>
                </div>
                <div class="col-md-2 mb-3">
                    <label class="form-label">Zip Code</label>
                    <input type="text" class="form-control" name="Zip_Code" value="{{ $student->Zip_Code }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="Student_Email_Address" value="{{ $student->Student_Email_Address }}" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label class="form-label">Home Phone</label>
                    <input type="text" class="form-control" name="Student_Home_Phone" value="{{ $student->Student_Home_Phone }}" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label class="form-label">Date of Birth</label>
                    <input type="text" class="form-control" name="date_of_birth" value="{{ $student->date_of_birth }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Gender</label>
                    <input type="text" class="form-control" name="Gender" value="{{ $student->Gender }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Place of Birth / City & State</label>
                    <input type="text" class="form-control" name="Place_pf_Birth_City_state" value="{{ $student->Place_pf_Birth_City_state }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Country (If not USA)</label>
                    <input type="text" class="form-control" name="Country" value="{{ $student->Country }}" required>
                </div>
                <!-- Mother/Guardian Information -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">Mother/Guardian Last Name</label>
                    <input type="text" class="form-control" name="Mother_Guardian_Last_Name" value="{{ $student->Mother_Guardian_Last_Name }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Mother First Name</label>
                    <input type="text" class="form-control" name="Mother_First_Name" value="{{ $student->Mother_First_Name }}" required>
                </div>
                <div class="col-12 mb-3">
                    <label class="form-label">Mother Address</label>
                    <input type="text" class="form-control" name="Mother_Address" value="{{ $student->Mother_Address }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Mother Home Phone</label>
                    <input type="text" class="form-control" name="Mother_Home_Phone" value="{{ $student->Mother_Home_Phone }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Mother Cell Phone</label>
                    <input type="text" class="form-control" name="Mother_Cell_Phone" value="{{ $student->Mother_Cell_Phone }}" required>
                </div>
                <div class="col-12 mb-3">
                    <label class="form-label">Mother Email</label>
                    <input type="email" class="form-control" name="Mother_Email" value="{{ $student->Mother_Email }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Mother Place of Employment</label>
                    <input type="text" class="form-control" name="Mother_Place_of_Employment" value="{{ $student->Mother_Place_of_Employment }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Mother Work Phone</label>
                    <input type="text" class="form-control" name="Mother_Work_Phone" value="{{ $student->Mother_Work_Phone }}" required>
                </div>
                <!-- Father/Guardian Information -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">Father/Guardian Last Name</label>
                    <input type="text" class="form-control" name="Father_Guardian_Last_Name" value="{{ $student->Father_Guardian_Last_Name }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Father First Name</label>
                    <input type="text" class="form-control" name="Father_First_Name" value="{{ $student->Father_First_Name }}" required>
                </div>
                <div class="col-12 mb-3">
                    <label class="form-label">Father Address</label>
                    <input type="text" class="form-control" name="Father_Address" value="{{ $student->Father_Address }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Father Home Phone</label>
                    <input type="text" class="form-control" name="Father_Home_Phone" value="{{ $student->Father_Home_Phone }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Father Cell Phone</label>
                    <input type="text" class="form-control" name="Father_Cell_Phone" value="{{ $student->Father_Cell_Phone }}" required>
                </div>
                <div class="col-12 mb-3">
                    <label class="form-label">Father Email</label>
                    <input type="email" class="form-control" name="Father_Email" value="{{ $student->Father_Email }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Father Place of Employment</label>
                    <input type="text" class="form-control" name="Father_Place_of_Employment" value="{{ $student->Father_Place_of_Employment }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Father Work Phone</label>
                    <input type="text" class="form-control" name="Father_Work_Phone" value="{{ $student->Father_Work_Phone }}" required>
                </div>
                <!-- Automated Message Preferences -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">Best Phone Number for automated call</label>
                    <input type="text" class="form-control" name="Best_Phone_Number_for_automated_call" value="{{ $student->Best_Phone_Number_for_automated_call }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Best Email for Automated email</label>
                    <input type="email" class="form-control" name="Best_Email_for_Automated_email" value="{{ $student->Best_Email_for_Automated_email }}" required>
                </div>
                <!-- Military Family Status -->
                <div class="col-md-12 mb-3">
                    <label class="form-label">Military Status</label>
                    <select class="form-control" name="militry_family_status">
                        <option value="" {{ $student->militry_family_status == null ? 'selected' : '' }}>-</option>
                        <option value="active_duty" {{ $student->militry_family_status == 'active_duty' ? 'selected' : '' }}>Active Duty</option>
                        <option value="veteran" {{ $student->militry_family_status == 'veteran' ? 'selected' : '' }}>Veteran</option>
                        <option value="uniformed_service_member" {{ $student->militry_family_status == 'uniformed_service_member' ? 'selected' : '' }}>Uniformed Service Member</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('student.show', $student->id) }}" class="btn btn-secondary ms-2">Cancel</a>
        </form>
    </div>
</body>
</html>
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Student</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <form action="{{ route('student.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- Example fields, add all required fields as in your create form -->
        <div class="mb-3">
            <label for="Student_Last_Name" class="form-label">Last Name</label>
            <input type="text" name="Student_Last_Name" class="form-control" value="{{ old('Student_Last_Name', $student->Student_Last_Name) }}" required>
        </div>
        <div class="mb-3">
            <label for="Last" class="form-label">Last</label>
            <input type="text" name="Last" class="form-control" value="{{ old('Last', $student->Last) }}" required>
        </div>
        <div class="mb-3">
            <label for="Midle" class="form-label">Middle</label>
            <input type="text" name="Midle" class="form-control" value="{{ old('Midle', $student->Midle) }}" required>
        </div>
        <!-- Add other fields as needed -->
        <button type="submit" class="btn btn-primary">Update Student</button>
    </form>
</div>
@endsection
