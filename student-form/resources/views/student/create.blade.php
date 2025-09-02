<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
        <style>
        input {
            border: none;
            border-bottom: 1px solid black;
            border-radius: 0;
        }
        .form-section {
                        margin-bottom: 30px;
        }
        .section-title {
            font-weight: bold;
            text-decoration: underline;
            margin-bottom: 15px;
        }
        .info-label {
            margin-top: 10px;
        }
        small {
            display: block;
            margin-top: 40px;
        }
    </style>
</head>
<body class="container py4">
    @if(session('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
    @endif
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="text-center mb-4">
        <h1><b>ATTLEBORO HIGH SCHOOL</b></h1>
        <h2>New Student Registration Form</h2>
        <ins><i>PLEASE PRINT LEGIBLY</i></ins>
    </div>
    <form method="POST" action="{{ route('student.store') }}">
        @csrf
        <div>
            <!-- Student's Information -->
        <div class="form-section">
            <div class="section-title">Student's Information</div>
            <div class="row g-3">
                <div class="col-md-4">
                    <label class="form-label">Student's Last Name</label>
                    <input type="text" class="form-control" name="Student_Last_Name">
                </div>
                <div class="col-md-4">
                    <label class="form-label">First</label>
                    <input type="text" class="form-control" name="Last">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Middle</label>
                    <input type="text" class="form-control" name="Midle">
                </div>
                 <div class="col-md-6">
                    <label class="form-label">*Home Address</label>
                    <input type="text" class="form-control" name="Home_address">
                </div>
                <div class="col-md-3">
                    <label class="form-label">City</label>
                    <input type="text" class="form-control" name="City">
                </div>
                <div class="col-md-1">
                    <label class="form-label">State</label>
                    <input type="text" class="form-control" name="State">
                </div>
                <div class="col-md-2">
                    <label class="form-label">Zip Code</label>
                    <input type="text" class="form-control" name="Zip_Code">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Student Email Address</label>
                    <input type="email" class="form-control" name="Student_Email_Address">
                </div>
                <div class="col-md-3">
                    <label class="form-label">Home Phone</label>
                    <input type="text" class="form-control" name="Student_Home_Phone">
                </div>
                <div class="col-md-3">
                    <label class="form-label">Date of Birth</label>
                    <input type="text" class="form-control" name="date_of_birth">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Gender</label><br>
                    <input type="text" placeholder="M" class="form-control d-inline w-25 me-2" name="Gender">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Place of Birth / City & State</label>
                    <input type="text" class="form-control" name="Place_pf_Birth_City_state">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Country (If not USA)</label>
                    <input type="text" class="form-control" name="Country">
                </div>
            </div>
        </div>

        <!-- Parent/Guardian Information -->
        <div class="form-section">
            <div class="section-title">Parent/Guardian Information</div>
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Mother/Guardian Last Name</label>
                    <input type="text" class="form-control" name="Mother_Guardian_Last_Name">
                </div>
                <div class="col-md-6">
                    <label class="form-label">First Name</label>
                    <input type="text" class="form-control" name="Mother_First_Name">
                </div>
                <div class="col-12">
                    <label class="form-label">Address (if different from student)</label>
                    <input type="text" class="form-control" name="Mother_Address">
                </div>
                <div class="text-center"><i>Please indicate City, State and Zip Code</i></div>
                <div class="col-md-6">
                    <label class="form-label">Home Phone</label>
                    <input type="text" class="form-control" name="Mother_Home_Phone">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Cell Phone</label>
                    <input type="text" class="form-control" name="Mother_Cell_Phone">
                </div>
                <div class="col-12">
                    <label class="form-label">Mother's Email</label>
                    <input type="email" class="form-control" name="Mother_Email">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Place of Employment</label>
                    <input type="text" class="form-control" name="Mother_Place_of_Employment">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Work Phone</label>
                    <input type="text" class="form-control" name="Mother_Work_Phone">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Father/Guardian Last Name</label>
                    <input type="text" class="form-control" name="Father_Guardian_Last_Name">
                </div>
                <div class="col-md-6">
                    <label class="form-label">First Name</label>
                    <input type="text" class="form-control" name="Father_First_Name">
                </div>
                <div class="col-12">
                    <label class="form-label">Address (if different from student)</label>
                    <input type="text" class="form-control" name="Father_Address">
                </div>
                <div class="text-center"><i>Please indicate City, State and Zip Code</i></div>
                <div class="col-md-6">
                    <label class="form-label">Home Phone</label>
                    <input type="text" class="form-control" name="Father_Home_Phone">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Cell Phone</label>
                    <input type="text" class="form-control" name="Father_Cell_Phone">
                </div>
                <div class="col-12">
                    <label class="form-label">Father's Email</label>
                    <input type="email" class="form-control" name="Father_Email">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Place of Employment</label>
                    <input type="text" class="form-control" name="Father_Place_of_Employment">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Work Phone</label>
                    <input type="text" class="form-control" name="Father_Work_Phone">
                </div>
            </div>
        </div>

        <!-- Automated Message Preferences -->
        <div class="form-section">
            <div class="section-title">Automated Message Preferences</div>
            <p>This pertains to both school closures and emergency messages during the school day</p>
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Best Phone Number for automated call</label>
                    <input type="text" class="form-control" name="Best_Phone_Number_for_automated_call">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Best Email for Automated email</label>
                    <input type="email" class="form-control" name="Best_Email_for_Automated_email">
                </div>
            </div>
        </div>

        <!-- Military Family Status -->
        <div class="form-section">
            <div class="section-title">Military Family Status</div>
            <p><b>Please select the appropriate status if this student is a child of:</b></p>
            <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="militry_family_status" id="mil1" value="active_duty">
                <label class="form-check-label" for="mil1">
                    An active duty member of the Uniformed Services, National Guard or Reserves on active duty orders
                </label>
            </div>
            <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="militry_family_status" id="mil2" value="veteran">
                <label class="form-check-label" for="mil2">
                    A member or veteran medically discharged or retired within one year
                </label>
            </div>
            <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="militry_family_status" id="mil3" value="uniformed_service_member">
                <label class="form-check-label" for="mil3">
                    A member of the Uniformed Services, National Guard or Reserves who died on active duty
                </label>
            </div>
        </div>
        <div class="text-center">
            <b>Please see reverse side</b>
        </div>
        <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary">Register</button>
        </div>
        <small>Final/jmd/5-21-14</small>
    </div>
    </form>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>