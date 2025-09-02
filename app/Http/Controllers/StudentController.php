<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Student;

class StudentController extends Controller
{
    public function show(Student $student){
        return view('student.show', 
        compact('student'));
    }
    public function index()
    {
    $students = Student::all();
    return view('student.index',['students'=> $students]);
    }

    public function create()
    {
    return view('student.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'Student_Last_Name' => 'required|string',
            'Last' => 'required|string',
            'Midle' => 'required|string',
            'Home_address' => 'string|string',
            'City' => 'required|string',
            'State' => 'required|string',
            'Zip_Code' => 'required|string',
            'Student_Email_Address' => 'required|string|unique:students,Student_Email_Address',
            'Student_Home_Phone' => 'required|string',
            'date_of_birth' => 'required|string',
            'Gender' => 'required|string',
            'Place_pf_Birth_City_state' => 'required|string',
            'Country' => 'required|string',
            'Mother_Guardian_Last_Name' => 'required|string',
            'Mother_First_Name' => 'required|string',
            'Mother_Address' => 'required|string',
            'Mother_Home_Phone' => 'required|string',
            'Mother_Cell_Phone' => 'required|string',
            'Mother_Email' => 'required|string',
            'Mother_Place_of_Employment' => 'required|string',
            'Mother_Work_Phone' => 'required|string',
            'Father_Guardian_Last_Name' => 'required|string',
            'Father_First_Name' => 'required|string',
            'Father_Address' => 'required|string',
            'Father_Home_Phone' => 'required|string',
            'Father_Cell_Phone' => 'required|string',
            'Father_Email' => 'required|string',
            'Father_Place_of_Employment' => 'required|string',
            'Father_Work_Phone' => 'required|string',
            'Best_Phone_Number_for_automated_call' => 'required|string',
            'Best_Email_for_Automated_email' => 'required|string',
            'militry_family_status' => 'nullable|in:active_duty,veteran,uniformed_service_member',
        ]);

        Student::create($request->all());

        return redirect()->route('student.create')->with('success', 'Student registratered successfully!');
    }
    public function edit(Student $student)
    {
        return view('student.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    // Debug: Log the incoming military status value
    {
    $request->validate([
            'Student_Last_Name' => 'required|string',
            'Last' => 'required|string',
            'Midle' => 'required|string',
            'Home_address' => 'string|string',
            'City' => 'required|string',
            'State' => 'required|string',
            'Zip_Code' => 'required|string',
            'Student_Email_Address' => 'required|string|unique:students,Student_Email_Address,' . $student->id,
            'Student_Home_Phone' => 'required|string',
            'date_of_birth' => 'required|string',
            'Gender' => 'required|string',
            'Place_pf_Birth_City_state' => 'required|string',
            'Country' => 'required|string',
            'Mother_Guardian_Last_Name' => 'required|string',
            'Mother_First_Name' => 'required|string',
            'Mother_Address' => 'required|string',
            'Mother_Home_Phone' => 'required|string',
            'Mother_Cell_Phone' => 'required|string',
            'Mother_Email' => 'required|string',
            'Mother_Place_of_Employment' => 'required|string',
            'Mother_Work_Phone' => 'required|string',
            'Father_Guardian_Last_Name' => 'required|string',
            'Father_First_Name' => 'required|string',
            'Father_Address' => 'required|string',
            'Father_Home_Phone' => 'required|string',
            'Father_Cell_Phone' => 'required|string',
            'Father_Email' => 'required|string',
            'Father_Place_of_Employment' => 'required|string',
            'Father_Work_Phone' => 'required|string',
            'Best_Phone_Number_for_automated_call' => 'required|string',
            'Best_Email_for_Automated_email' => 'required|string',
            'militry_family_status' => 'nullable|in:active_duty,veteran,uniformed_service_member',
        ]);

    // Debug: Log the incoming military status value
    Log::info('militry_family_status value:', ['value' => $request->input('militry_family_status')]);
    $student->update($request->all());

    return redirect()->route('students.index')->with('success', 'Student updated successfully!');
    }
}
